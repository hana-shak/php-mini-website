<?php
session_start();

$mixed = array(
    array  ('user' => 'hana','password'=>'hana123$%^&',   'role'=>'admin'  ,'phone'=>'0798406304'),
    array  ('user' =>'hala', 'password'=>'hala234$%^',    'role'=>'admin'  ,'phone'=>'0798406304'),
    array  ('user' =>'ala',  'password'=>'ala345#$',      'role'=>'user'   ,'phone'=>'0798406304'),
    array  ('user' =>'ali',  'password'=>'ali456%$^',     'role'=>'user'   ,'phone'=>'0798406304'),
    array  ('user' =>'amal', 'password'=>'amal567%$^',    'role'=>'user'   ,'phone'=>'0798406304'));



global $mixed;



//echo "<pre>";
//var_dump($_SESSION['mixed-sess']);



?>