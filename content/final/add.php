<?php
// $myfile=fopen("score.txt","a") or die("unable to open the file");
// $lname=$_POST["lname"];
// $mname=$_POST["mname"];
// $mobile=$_POST["mobile"];

// $score=$_POST["score"];
// fwrite($myfile,"<b>leader name :</b> $lname <br>");
// fwrite($myfile,"<b>member name :</b> $mname <br>");
// fwrite($myfile,"<b>mobile number :</b> $mobile <br>");
// fwrite($myfile,"<b>score :</b> $score <br>");

session_start();
 $lname=$_SESSION['lname'];
 $mname=$_SESSION['mname'];
 $mobile=$_SESSION['mobile'];
 $score=$_POST['name'];
 require 'val.php';



$conn=mysqli_connect($server,$username,$pass,$Database);
if (!$conn) 
{
	die("connection error:".mysqli_connect_error());
}
if ($conn) {

	echo "success";

}

 $query="UPDATE final  SET marks=$score where mobile=$mobile;";
 echo $query;

$result=mysqli_query($conn,$query);
if($result)
{
	echo "okay";
}

?>