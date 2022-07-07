<?php
	include "connect.php";
	session_start();
	$uid=$_SESSION["a"]=$_POST["t1"];
	$upass=$_SESSION["b"]=$_POST["t2"];
		$ss="select * from details where email='$uid' or uname='$uid'";
		$rss=mysqli_query($con,$ss);
		$cs=mysqli_num_rows($rss);
		if($cs){ 					// if user found then exicute
			$s="select * from details where (email='$uid' or uname='$uid') and upass='$upass'";
			$rs=mysqli_query($con,$s);
			$c=mysqli_num_rows($rs);
			if($c==0){							// wrong id or password
				echo"<script>window.alert('INVALID ID OR PASSWORD')</script>";
				echo'<script> window.location.href="login.html";</script>';
			}
			else
				header("location:login.html");   // login successful
		}
		else{ // no any user found 
			echo"<script>alert('NO SUCH USER FOUND')</script>";
			echo'<script> window.location.href="login.html";</script>';
		}
?>
