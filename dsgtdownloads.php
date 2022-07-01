<?php include 'dsfilesLogic.php';?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="style1.css">
  <title>DSGT</title>
</head>
<body>
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
      <li class="nav-item">
        <a class="nav-link"  href="dsindex.php">Upload </a>
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
<div class="dsgt">
 <a >
 <img src="DSGT.jpg" width="50" height="50"  alt="" loading="lazy">
 DISCRETE STRUCTURE AND GRAPH THEORY</a>
</div>
<div class="new">
  <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Filename</th>
      <th scope="col">Size (in kb)</th>
      <th scope="col">Downloads</th>
      <th scope="col">Download Here</th>
      <th scope="col1">Ratings</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  $query = "SELECT * FROM usersubjectdocument where SubjectName='DSGT'";
  $query_run = mysqli_query($conn,$query);
  while ($file = mysqli_fetch_array($query_run)) {
     ?>
    <tr>
      <td><?php echo $file['ID']; ?></td>
      <td><a href="DataStructure Uploads/<?php echo $file['FileName']; ?>#toolbar=0" target="_blank" ><?php echo $file['FileName'];?></a></td>
      <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
      <td><?php echo $file['Downloads']; ?></td>
      <td><a type="button" class="btn btn-success btn-lg"  href="dsgtdownloads.php?file=<?php echo $file['ID'] ?>">Download</a></td>
      <td><a type="button" class="btn btn-primary btn-lg" href="star.php?file=<?php echo $file['ID'] ?>&fileName=<?php echo $file['FileName'] ?>">Ratings</td>
    </tr>
   <?php
}
 ?>


</tbody>
</table>
</div>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</html>