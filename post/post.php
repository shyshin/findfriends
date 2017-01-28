<?php
include 'db.php';
session_start();
$user=$_SESSION["user_login"];
	$desc=$_POST["message"];
	$targetdir="../uploads/";
	$i1="";
	$i2="";
	$i3="";
	if(isset($_POST["submit"]))//check to see if form has been submitted
	{
		if(count($_FILES["upl"]['name']>=1))//check to see if no of uploads is greater than 1
		{
			for($i=0;$i<count($_FILES["upl"]["name"]);$i++)
			{
				$tmpfilepath=$_FILES["upl"]["tmp_name"][$i];
				$filename=$_FILES["upl"]["name"][$i];
				$filepath="../uploads/". $filename;
				if($i==0)
				{
					$i1=$filepath;
				}
				else if($i==1)
				{
					$i2=$filepath;
				}
				else
				{
					$i3=$filepath;
				}
				move_uploaded_file($tmpfilepath,$filepath);
			}
		}
	}
	$q="select id from users where username='{$user}';";
	$query=mysqli_query($con,$q);
	$a=mysqli_fetch_array($query);
	$q1="insert into posts(pid,content,img1,img2,img3,id) values('','{$desc}','{$i1}','{$i2}','{$i3}','{$a["id"]}');";
	$f=mysqli_query($con,$q1);
	if(!$f)
	{
		echo "Mysql error ". mysql_error($con);
	}
	mysqli_close($con);
	header("Location: ../webProject/home.php");


?>