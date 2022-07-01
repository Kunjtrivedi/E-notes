<?php include 'connect.php';?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="star.css">
<!--<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.slider {
  -webkit-appearance: none;
  width: 100%;
  height: 15px;
  border-radius: 5px;  
  background: #d3d3d3;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
}

.slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 25px;
  height: 25px;
  border-radius: 50%; 
  background: #4CAF50;
  cursor: pointer;
}

.slider::-moz-range-thumb {
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background: #4CAF50;
  cursor: pointer;
}
</style>-->
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

<form class="new" action="connect.php" method="post">
  <div class="form-group">
    <label for="formControlRange"><h1>Rate the file Out of 10</h1></label>
    <input type="range" min="1" max="10" value="5" class="form-control-range" name="slider" id="formControlRange">
    <div class="form-group">
   <label for="formGroupExampleInput"><h2>Username</h2></label>
   <input type="text" class="form-control"  name="name" value="kunj@trivedi">
    <label for="formGroupExampleInput"><h2>Your Review</h2></label>
   <input type="text" class="form-control"  name="comment1" placeholder="Review The file uploaded on our site">
<input type="hidden" id="fileId" name="fileId">
<input type="hidden" id="fileName" name="fileName">
  </div>
  </div>
  <button type="submit" name="save" class="btn btn-primary">Done</button>
</form>

<?php
$factid = $_REQUEST["file"]; 
 $query = "SELECT * FROM documentreview where ID=$factid";
  $query_run = mysqli_query($conn,$query);
  while ($file = mysqli_fetch_array($query_run)) {
     ?>
     <div class="card">
  <div class="card-body">
    <blockquote class="blockquote mb-0">
       <p>Username:- <?php echo $file['UserID']; ?></p>
      <p>Comment:<?php echo $file['Comments']; ?></p>
      <p>Ratings:<?php echo $file['Points']; ?></p>
    <!--<footer class="blockquote-footer">Rating Given By User is<?php echo $rating ?> <cite title="Source Title">Source Title</cite></footer>-->
    </blockquote>
  </div>
</div>
   <?php
}
 ?>
<!--<h1>Range Slider Picture</h1>

<div class="slidecontainer">
  <input type="range" min="1" max="10" value="5" class="slider" id="myRange">
  <p>Value: <span id="demo"></span></p>
</div>

<script>
var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>-->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<script>
  var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = window.location.search.substring(1),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
        }
    }
};
  $(document).ready(function(){
    debugger
  $('#fileId').val(getUrlParameter('file'))
  $('#fileName').val(getUrlParameter('fileName'))
  })
</script>
</body>
</html>