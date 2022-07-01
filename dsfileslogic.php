<?php
// connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'e-notes');

$sql = "SELECT * FROM usersubjectdocument";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);


// Uploads files
if (isset($_POST['save'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = 'DataStructure Uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];
    $subject = $_POST['SubjectName'];
    $univ = $_POST['University'];
    $sem = $_POST['Semester'];
    $type = $_POST['NoteType'];
    if (!in_array($extension, [ 'pdf'])) {
        echo "You file extension must be .pdf ";
    } 
     else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO usersubjectdocument (University,Semester,SubjectName,NoteType,FileName, size, Downloads) VALUES ('$univ',
            '$sem','$subject','$type',      
            '$filename', $size, 0)";
            if (mysqli_query($conn, $sql)) {
                header("Location: http://localhost/sem%20project/homepage.html");
            }
        } else {
            echo "Failed to upload file.";
        }
    }
}
// Downloads files
if (isset($_GET['file'])) {
    $id = $_GET['file'];

    // fetch file to download from database
    $sql = "SELECT * FROM usersubjectdocument WHERE ID=$id";
    $result = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = 'DataStructure Uploads/' . $file['FileName'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('DataStructure Uploads/' . $file['FileName']));
        readfile('DataStructure Uploads/' . $file['FileName']);

        // Now update downloads count
        $newCount = $file['Downloads'] + 1;
        $updateQuery = "UPDATE usersubjectdocument SET Downloads=$newCount WHERE ID=$id";
        mysqli_query($conn, $updateQuery);
        exit;
    }

}
?>