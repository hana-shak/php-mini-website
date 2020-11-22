<?php include "data.php";  ?>
<?php 
if(isset($_POST['login'])){
    header("Location: http://localhost/login-HW-basic/login.php");
} elseif(isset($_POST['register'])){
    header("Location: http://localhost/login-HW-basic/registration.php");
} 
  

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">;
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Home</title>
</head>


<body>


  <div class="col">
      <nav class="navbar" style="background-color: #e3f2fd;" >
        <form class="form-inline" method="POST" action="index.php" >
            <input type="submit" value="Login" name="login" class="form-control   btn btn-md  btn-outline-success">
            <input type="submit" value="Registration" name="register" class="form-control   btn btn-md  btn-outline-primary">
        </form>
      </nav>
    </div>

  <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="images/first.jpeg" class="d-block w-100" alt="first picture">
    </div>
    <div class="carousel-item">
      <img src="images/second.jpeg" class="d-block w-100" alt="second picture">
    </div>
    <div class="carousel-item">
      <img src="images/third.jpeg" class="d-block w-100" alt="third picture">
    </div>
  </div>
</div>


</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</html>