<?php include "data.php"; ?>

<?php 

global $nameErr ;
global $name ;
global $passErr;
global $pass;
global $data;
global $mixed;

 /*REQUIRED 
global $nameErr ;
global $name ;
global $passErr;
global $pass;
global $data;


function requiredData($nameErr,$name,$passErr,$pass) {
    
    echo "got fun";
    function test_input ($data){
        echo "got fun";
        $data= trim($data);
        $data= stripslashes($data);
        $data= htmlspecialchars($data);
            return $data;
    }  

if (empty($_POST["username"]))  {
    echo "got fun";
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
}*/
/*
function checkRole (){
    if (isset($_POST["username"])  && isset($_POST["password"]) && isset($_POST["enter"])) {
        foreach ($mixed as $key => $value){ 
          if ($_POST["username"] == $mixed[$key]["user"] &&
              $_POST["password"] == $mixed[$key]["password"] && 
              "admin" == $mixed[$key]["role"]){
             header("Location: http://localhost/login-HW-basic/welcome-admin.php");
              }
  
              elseif ($_POST["username"] == $mixed[$key]["user"] &&
                  $_POST["password"] == $mixed[$key]["password"] && 
                  "user" == $mixed[$key]["role"]){
              header("Location: http://localhost/login-HW-basic/welcome-user.php");
              } 
              else {
                header("Location: http://localhost/login-HW-basic/login.php");
              }

        }
    }   

}
*/
