<?php
	session_start();
		//include "rand.php";
		$w1="";
		$w2="";
		$w3="";
		$q2="";
		$user=$_SESSION["user_login"];
$con=mysqli_connect("localhost","root","","findfriends");
	if(mysqli_connect_errno())
	{
		echo "Failed to connect to mysql". mysqli_connect_error();
	}
		if($w1=="")
		{
			$q2=mysqli_query($con,"select * from users where username!='{$user}' and id!='{$w1}' and id!='{$w2}' and id!='{$w3}';");
	$query2=mysqli_fetch_array($q2);
	$w1=$query2["id"];
	$r1=$query2;
	
		}
		if($w2=="")
		{
			$q2=mysqli_query($con,"select * from users where username!='{$user}' and id!='{$w1}' and id!='{$w2}' and id!='{$w3}';");
			$query2=mysqli_fetch_array($q2);
			$w2=$query2["id"];
			$r2=$query2;
		}
		if($w3=="")
		{
			$q2=mysqli_query($con,"select * from users where username!='{$user}' and id!='{$w1}' and id!='{$w2}' and id!='{$w3}';");
			$query2=mysqli_fetch_array($q2);
		}
	$r3=$query2;
	?>