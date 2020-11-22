
<?php include "data.php"; ?>

<?php // include "functions.php" ;  ?>
<?php /*
if (isset($_POST)){
    //echo "right request ";
    global $nameErr ;
    global $name ;
    global $passErr;
    global $pass;
    global $data;

    requiredData($nameErr,$name,$passErr,$pass);
}else {
    echo "ERROR";
}*/


    global $nameErr ;
    global $name ;
    global $passErr;
    global $pass;
    global $mixed;
    
    


if (empty($_POST["username"]))  {
    $nameErr = "* Name is required";
        } else {
    $name = test_input($_POST["username"]);
     if (!preg_match("/^[a-zA-Z-' ]*$/" , $name)){
         $nameErr = "Only Letters and white space allowed";
     }
        }

if (empty($_POST['password'])){
    $passErr="* Password is required";
}else{
    if (!preg_match( "/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/",$_POST['password'] )){
    $pass="Not valid Password, must be between 6-16 charcters, contains numbers, special charcters and letters ";
    } 
}

function test_input ($data){
    $data= trim($data);
    $data= stripslashes($data);
    $data= htmlspecialchars($data);
        return $data;
}  


if (isset($_POST['enter'])    &&  
         (preg_match("/^[a-zA-Z-' ]*$/" , $name)) && 
         (preg_match( "/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/",$_POST['password'] ))    
                                     ){
  if (isset($_POST["username"])  && isset($_POST["password"]) && isset($_POST["enter"])) {
      foreach ($mixed as $key => $value){ 
        if ($_POST["username"] == $mixed[$key]["user"] &&
            $_POST["password"] == $mixed[$key]["password"] && 
            "admin" == $mixed[$key]["role"]){
           header("Location: http://localhost/login-HW-basic/welcome-admin.php");
            }

            if ($_POST["username"] == $mixed[$key]["user"] &&
                $_POST["password"] == $mixed[$key]["password"] && 
                "user" == $mixed[$key]["role"]){
            header("Location: http://localhost/login-HW-basic/welcome-user.php");
            }
      }
  }   
}





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Login</title>
    <style>
        .error {color: #FF0000;}
    </style>
</head>


<body>


  <div class="col">
      <nav class="navbar" style="background-color: #e3f2fd;" >
      <form class="form-inline" method="POST" action="login.php" > <!--(method="POST" action="login.php"s)-->
            <input type="submit" value="Login" name="login" class="form-control   btn btn-md  btn-outline-success">   
     </form>
      </nav>
  </div>
<!--(value="<?php echo $name; ?>")-->
  <div class="container">
        <div class="col-sm-6">
        
           <form action="login.php" method="POST">
           <span class="error">* Required Field </span> <br> <br>
               <div class="form-group">
                   <label for="username">Username</label>
                   <input type="text" name="username" class="form-control" placeholder="enter your name" <?php  echo $name ?> >
                   <span class="error">    <?php  echo $nameErr ?> </span>

               </div>

               <div class="form-group">
                   <label for="password">Password</label>
                   <input type="text" name="password" class="form-control" placeholder="enter your password"  >
                   <span class="error">    <?php  echo $passErr ?> <?php echo $pass; ?>  </span>
               </div>
     
               <input type="submit" class="btn btn-primary"  value="submit" name="enter" class="form-control">
           </form>

        </div>


</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</html>