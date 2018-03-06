<?php
// $lname=$_POST["name1"];
// $mname=$_POST["name2"];
// $mobile=$_POST["mobile"];
//  $.post("add.php", lname);
//  $.post("add.php", mname);
//  $.post("add.php", mobile);

$lname=$_POST["name1"];
$mname=$_POST["name2"];
$mobile=$_POST["mobile"];
#Database connection credentials
require 'val.php';

#Establishing connection
$conn=mysqli_connect($server,$username,$pass,$Database);
if (!$conn) 
{
	die("connection error:".mysqli_connect_error());
}
$query="insert into slot3(lname,mname,mobile) values('$lname','$mname',$mobile);";

$result=mysqli_query($conn,$query);
if($result)
{
session_start();
$_SESSION["lname"]=$lname;
$_SESSION["mname"]=$mname;
$_SESSION["mobile"]=$mobile;
header('location:welcome.php');

}
else
{
	echo "already registered";
}
mysqli_close($conn);
?>