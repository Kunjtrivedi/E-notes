<?php include 'dsfileslogic.php';?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css">
    <title>Files Upload</title>
   
  </head>
  <body style="background-color: #2DA5E5">
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark " style="background-color: #3f51b5 ;">
        
     <a class="navbar-brand" href="#">
    <img src="logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
    E-notes
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link"  href="homepage.html">Home </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link"  href="dsindex.php">Upload <span class="sr-only">(current)</span></a>
      </li>  
    </ul>
    <u1 class="nav justify-content-end" >
        <li class="nav-item">
        <a class="nav-link" style="color: #ffffff;" href="contact.html">Contact Us  </a>
      </li>
     <li class="nav-item">
        
        <a class="nav-link" style="color: #ffffff;" href="about.html">About Us </a>
      </li>
  </u1>
    <u1 class="nav justify-content-end"> 
        
        <a href="login.html" type="button" class="btn btn-outline-warning"  >Log Out</a>
         <li class="nav-item">
      </li>
    </u1>
    
  </div>

</nav>  
<style>
body {
  background-image: url('images/i1.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
    <div>
      <div>
        <form action="dsindex.php" method="post" enctype="multipart/form-data" style="background-color: #FFFFFF" >
          <h3>Upload File</h3><br>
          <!-- SUbject SELECTION OPTIONS-->
 <div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Select Subjects</label>
  </div>
  <select class="custom-select" type="input" name="SubjectName" id="validationServer04" required> 
<!--  <select class="custom-select" id="validationServer04" required> -->
    <option selected disabled value="">----Select-----</option>
    <option value="DATA STRUCTURES">DATA STRUCTURES</option>
    <option value="DSGT">DSGT</option>
    <option value="DLCOA">DLCOA</option>
    <option value="OOP(JAVA)">OOP(JAVA)</option>
    <option value="EM-3">EM-3</option>
    <option value="CG">CG</option>
  </select>
</div>

<!-- TYPES OF NOTE--> 
  <div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Select Notes Type</label>
  </div>
  <select class="custom-select" type="input" name="NoteType" id="validationServer04" required>
    <option selected disabled value="">---Select---</option>
    <option value="Reference Books">Reference Books</option>
    <option value="Assignments">Assignments</option>
    <option value="Experiments">Experiments</option>
    <option value="Solved Papers">Solved Papers</option>
    <option value="Written Notes">Written Notes</option>
  </select>
</div>

<!-- UNIVERSITY NAMES-->
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Select University</label>
  </div>
  <select class="custom-select" type="input" name="University" id="validationServer04" required>
    <option selected disabled value="">---Select---</option>
    <option value="MU">Mumbai University</option>
    <option value="JNU">Delhi University</option>
    <option value="GujUni">Gujarat University</option>
    <option value="SPPU">Savitribai Phule Pune Universtiy</option>
    <option value="KJ">Somaiya Vidhyavihar University</option>
    <option value="Patil">D.Y. Patil University</option>
  </select>
</div>

<!-- Semester-->
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Select Semester</label>
  </div>
  <select class="custom-select" type="input" name="Semester" id="validationServer04" required> 
    <option selected disabled value="">----Select-----</option>
    <option value="Sem1">1</option>
    <option value="Sem2">2</option>
    <option value="Sem3">3</option>
    <option value="Sem4">4</option>
    <option value="Sem5">5</option>
    <option value="Sem6">6</option>
    <option value="Sem7">7</option>
    <option value="Sem8">8</option>
  </select>
</div>
          <input type="file" name="myfile"> <br>

          <button type="submit" name="save">upload</button>
        </form>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>
