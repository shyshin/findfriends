<?php
//include "check.php";
$user=$_SESSION["user_login"];
$w1="";
$w2="";
$w3="";
$con=mysqli_connect("localhost","root","","findfriends");
	if(mysqli_connect_errno())
	{
		echo "Failed to connect to mysql". mysqli_connect_error();
	}
	$q2=mysqli_query($con,"select * from users order by rand() having username!='{$user}' and id!='{$_SESSION["w1"]}' and id!='{$_SESSION["w2"]}' and id!='{$_SESSION["w3"]}';");
	$query2=mysqli_fetch_array($q2);
	if($_SESSION["w1"]==-1)
	{
		$_SESSION["r1"]=$query2;
	}
	else if($_SESSION["w2"]==-1)
	{
		$_SESSION["r2"]=$query2;
	}
	else
	{
		$_SESSION["r3"]=$query2;
	}
	header("Location: home.php");
	?>