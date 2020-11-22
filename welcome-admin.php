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

    global $mixed;
    $mixed= $_SESSION ['mixed-sess'];
    //echo"<pre>";
    //print_r($_SESSION ['mixed-sess'][$key]['user']);
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Welcome Admin</title>
</head>


<body> 

<div class="container">


<?php
/*
echo "<tr>";
echo "<td>" ." ";
echo "</td>";

echo "<td>" ." ";
echo "</td>";

echo "</tr>";

*/
echo "<form action='welcome-admin.php'    method='post'> ";
echo "<table border=2px solid>";
echo "<tr>";
echo "<td>" ."  USER NAME  ";
echo "</td>";
echo "<td>" ."  CLEAR BUTTON ";
echo "</td>";
echo "</tr>";


foreach ($mixed as $key => $value){ 
     
    $x=$_SESSION ['mixed-sess'][$key]['user'];
    if ($_SESSION ['mixed-sess'][$key]['role'] == 'user'){
        echo "<tr>";
        echo "<td>" ." $x";
        echo "</td>";
        echo "<td>" ."<input type='submit' name='clear' value='Clear'>";
        // $y=$mixed[''][''];
        echo "</td>";
        echo "</tr>";
    }
}
 
    if(isset($_POST['clear'])){
        unset($_SESSION ['mixed-sess'][$key]);
    } 

    echo"<pre>";
    print_r($_SESSION ['mixed-sess']);
 

    echo"</table>";
    echo "</form>";


?>

</div>

</body>




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</html>