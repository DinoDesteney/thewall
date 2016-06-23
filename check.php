<?php
include ("koekjes.php");
include ("connect.php");
session_start();

$user_check=$_SESSION['name'];
 
$sql = mysqli_query($conn,"SELECT name FROM accounts WHERE name='$user_check' ");
 
$row=mysqli_fetch_array($sql,MYSQLI_ASSOC);
 
$login_user=$row['name'];
 
if(!isset($user_check))
{
header("Location: LogIn.php");
}
?>