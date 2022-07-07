<?php
	include "connect.php";
	session_start();
	$a=$_SESSION["a"]=$_POST["t1"];
	$b=$_SESSION["b"]=$_POST["t2"];
	$c=$_SESSION["c"]=$_POST["t3"];
	
	$s="INSERT INTO `details`(`email`, `uname`, `upass`) VALUES ('$a','$b','$c')";
	$r=mysqli_query($con,$s);
	if($r){
		echo'<script>window.alert("Sign In Successfully")</script>';
		echo'<script> window.location.href="signup.html";</script>';
	}
	else{
		echo'<script>alert("Can Not Sign Up Try Later")</script>';		
		echo'<script> window.location.href="signup.html";</script>';
	}
?>