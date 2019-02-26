<?php

session_start();
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'renera');
$name = $_POST['name'];
$phone = $_POST['phone'];

$message = "Registration Sucessfull";
$reg = "insert into discount(name,phone) values ('$name','$phone')";
mysqli_query($con, $reg);
echo "<script type='text/javascript'>alert('$message');</script>";

?>