<?php 
	$user=$_SESSION["user_login"];
	$con=mysqli_connect("localhost","root","","findfriends");
	if(mysqli_connect_errno())
	{
		echo "Failed to connect to mysql". mysqli_connect_error();
	}
	$desc=$_POST["content"];
	
	$q="select id from users where username='{$user}';";
	$query=mysqli_query($con,$q);
	$a=mysqli_fetch_array($query);
	$q1="insert into posts(pid,content,img1,img2,img3,id) values('','{$desc}','{$_POST["uploadphoto"][0]}','{$_POST["uploadphoto"][1]}','{$_POST["uploadphoto"][2]}','{$q["id"]}');";
	$f=mysqli_query($con,$q1);
	if(!$f)
	{
		echo "Mysql error ". mysql_error($con);
	}
	header("Location: home.php");
?>
<html>
<head>
	<title> POST PLACE</title>
	<LINK REL="SHORTCUT ICON" HREF="socnet.png" />
	<link href="index_css.css" rel="stylesheet" type="text/css">
	
</head>

<body>
<div style="position:absolute;left:0%;top:0%; height:19.0%; width:100%;  background:#3E4B3F">   </div>
	<div style="position:absolute;left:0%;top:19.2%; height:100%; width:100%;  background:#fff">   </div>
	
	
    <div style="position:absolute; left:7%; top:5%; color:red; font-size:50px; "> <font face="myFbFont"> SOCNET's HERE TO HELP YOU POST</font> </div>	
	
	
	<!-- POST -->
	<form  method="post" onSubmit="return check();" name="Reg">
		<div style="position:absolute;left:0%; top:19.1%; height:1; width:2000; background-color:#CCCCCC;"> </div>
        
		<div style="position:absolute;left:59.4%; top:34%; font-size:16px; color:#000000">  POST:  </div>
		<div style="position:absolute;left:65.2%;   top:32.8%; background-color: #020306 "> <input type="textarea" name="What's in your mind?" class="inputbox" /></div>

<!-- to upload image-->


<div style="position:absolute;left:25.2%; top:50%; ">  <input type="submit" name="uploadphoto" value="ADD PHOTOS" id="sign_button" / onClick="time_get()"> </div>


		
	<div style="position:absolute; left:21%; top:40%;">  <img src=""><input type="button"  value="Add Photos" onClick="upload_open();" name="file" style="background:#FFFFFF; border:#FFFFFF;"></div>

	<!---->

		<div style="position:absolute;left:65.2%; top:82%; ">  <input type="submit" name="signup" value="POST" id="sign_button" / onClick="time_get()"> </div>
		</form>
		
		<div style="position:absolute;left:57.3%; top:90%; height:1; width:385; background-color:#CCCCCC; "> </div>     
		
</body>
</html>





