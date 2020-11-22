<?php 
session_start();

$_SESSION ['mixed-sess']=array(
    array  ('user' => 'hana','password'=>'hana123$%^&',   'role'=>'admin'  ,'phone'=>'0798406304'),
    array  ('user' =>'hala', 'password'=>'hala234$%^',    'role'=>'admin'  ,'phone'=>'0798406304'),
    array  ('user' =>'ala',  'password'=>'ala345#$',      'role'=>'user'   ,'phone'=>'0798406304'),
    array  ('user' =>'ali',  'password'=>'ali456%$^',     'role'=>'user'   ,'phone'=>'0798406304'),
    array  ('user' =>'amal', 'password'=>'amal567%$^',    'role'=>'user'   ,'phone'=>'0798406304')); 

    $_SESSION ['username'] =$_POST['username'];
    $_SESSION ['password'] =$_POST['password'];
    $_SESSION ['phone']    =$_POST['phone']; 
?>
<?php 

global $nameErr ;
global $name ;
global $passErr;
global $passmaErr;
global $pass;
global $passma;
global $phone;
global $phoneErr;


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
    $passErr="Not valid Password, must be between 6-16 charcters, contains numbers, special charcters and letters ";
    } 
}

if (empty($_POST['pass'])){
    $passmaErr="* Re-entering password is required";
}else{
    if ($_POST['pass'] == $_POST['password'] ){
    $passmaErr="Not matching the Password";
    } 
}

if (empty($_POST['phone'])){
    $phoneErr="* Phone number is required";
}else{
    if (!preg_match( "/^([009627]{6})([7-9]{1})([0-9]{7})/",$_POST['phone'] )){
    $phoneErr="Not valid Phone number, must be JORDANIAN number ";
    } 
}

function test_input ($data){
    $data= trim($data);
    $data= stripslashes($data);
    $data= htmlspecialchars($data);
        return $data;
}  




if (isset($_POST['register']) && isset($_POST["password"]) && isset($_POST["register"]) &&
         (preg_match("/^[a-zA-Z-' ]*$/" , $name)) && 
         (preg_match( "/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/",$_POST['password'] )) && 
         (preg_match( "/^([009627]{6})([7-9]{1})([0-9]{7})/",$_POST['phone'] )) && 
         ($_POST['pass'] == $_POST['password'])
         ){
  
      foreach ($_SESSION ['mixed-sess'] as $key => $value){ 
        if ($_POST["username"] == $_SESSION ['mixed-sess'][$key]["user"] &&
            $_POST["password"] == $_SESSION ['mixed-sess'][$key]["password"]  
           ){
            header("Location: http://localhost/login-HW-basic/login.php");
            }else {
            break;
            }

                 }   
                   }
addUser();
if (isset($_SESSION)){
        $_SESSION ['username']     =$_POST['username'];
        $_SESSION ['password']     =$_POST['password'];
        $_SESSION ['phone']        =$_POST['phone']; }

function addUser () {
   
    $_SESSION ['username'] =$_POST['username'];
    $_SESSION ['password'] =$_POST['password'];
    $_SESSION ['phone']    =$_POST['phone']; 


     $new_arr=array('user'=> $_SESSION ['username'] ,'password'=> $_SESSION ['password'], 'role'=>"user", 'phone'=> $_SESSION ['phone']);
     //echo"<pre>";
     //print_r($new_arr);
     //echo"<pre>";
     //print_r(array_push($_SESSION ['mixed-sess'],$new_arr));
     //echo"<pre>";
     //$_SESSION ['mixed-sess']= $new_arr;
    array_push($_SESSION ['mixed-sess'],$new_arr);
    //print_r($_SESSION ['mixed-sess']);
} 


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
        .error {color: #FF0000;}
    </style>
    <title>Registration</title>
</head>


<body>


  <div class="col">
      <nav class="navbar" style="background-color: #e3f2fd;" >
      <form class="form-inline" method="POST" action="registration.php" >
            <input type="submit" value="Registration" name="reg" class="form-control   btn btn-md  btn-outline-primary">
        </form>
      </nav>
  </div>


  <div class="container">
        <div class="col-sm-6">
        
           <form action="registration.php" method="POST">
           <span class="error">* Required Field </span> <br> <br>
               <div class="form-group">
                   <label for="username">Username</label>
                   <input type="text" name="username" class="form-control" placeholder="enter your name" <?php  echo $name ?> >
                   <span class="error">    <?php  echo $nameErr ?> </span>

               </div>

               <div class="form-group">
                   <label for="password">Password</label>
                   <input type="text" name="password" class="form-control" placeholder="enter your password">
                   <span class="error">    <?php  echo $passErr ?> <?php echo $pass; ?>  </span>
               </div>

               <div class="form-group">
                   <label for="password">Re-enter Password</label>
                   <input type="text" name="pass" class="form-control" placeholder="enter your password"  >
                   <span class="error">    <?php  echo $passmaErr ?> <?php echo $passma; ?>  </span>
               </div>

               <div class="form-group">
                   <label for="phone">Phone Number</label>
                   <input type="text" name="phone" class="form-control" placeholder="enter your phone number"  >
                   <span class="error">    <?php  echo $phoneErr ?> <?php echo $phone; ?>  </span>
               </div>
     
               <input type="submit" class="btn btn-primary"  value="submit" name="register" class="form-control">
           </form>

        </div>


</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</html>