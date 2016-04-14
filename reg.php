<?php
ob_start();
session_start();
include("include.php");

if(isset($_POST["uName"])){
$uName=$_POST["uName"];
$uPwd=$_POST["uPwd"];

$sql="SELECT * FROM user WHERE uName='$uName' AND uPwd='$uPwd'";
$result=mysqli_query($link, $sql);

$rows=mysqli_num_rows($result);

if($rows){
	echo "Success";
	$_SESSION["check"]="yes";
	$_SESSION["uName"]=$uName;
	$_SESSION["uPwd"]=$uPwd;
	
	header('Location:add.php');
}else{
	echo "Failed, Will back to login page after 3 second";
	header('refresh:3; url="index.html"');
}

}
?>