<?php include("./inc/header.inc.php") ?>
<?php 
$reg = @$_POST['reg'];
$fn = "";
$ln = "";
$un = "";
$em = "";
$em2 = "";
$pswd = "";
$pswd2 = "";
$d = "";
$ucheck = "";


$fn = strip_tags(@$_POST['fname']);
$ln = strip_tags(@$_POST['lname']);
$un = strip_tags(@$_POST['username']);
$em = strip_tags(@$_POST['email']);
$em2 = strip_tags(@$_POST['email2']);
$pswd = strip_tags(@$_POST['password']);
$pswd2 = strip_tags(@$_POST['password2']);
$d = date("Y-m-d");


if($reg){
if($em==$em2){
	$ucheck = mysql_query("SELECT username FROM users WHERE username='$un' ");
	$check = mysql_num_rows($ucheck);
	if($check == 0){
		if($fn&&$ln&&$un&&$em&&$em2&&$pswd&&$pswd2){
			if($pswd==$pswd2){
				if(strlen($un)>25||strlen($fn)>25||strlen($ln)>25){
					echo "the maximum limit of username/first name /last name is of 25 characters!";	
				}
			else{
				if(strlen($pswd)>30||strlen($pswd)<5){
					echo "password must be between 5 and 30 characters!";
				}
				else{
					$pswd = md5($pswd);
					$pswd2 = md5($pswd2);
					$query = mysql_query("INSERT INTO users VALUES ('','$un','$fn','$ln','$em','$pswd','$d','0')");
					$_SESSION["user_login"] = $un;
		$_SESSION["user_login1"]= $un;
					header("Location: ./webProject/home.php");		
					die("<h2>Welcome to findFriends</h2>Login to your account to get started...");

				}
			}
			}
		else{
			echo "your passwords do not match! ";
		}
		}
	else{
		echo "fill in all the fields";
	}
	}
else{
	echo "username already taken!";
}
}
else{
	echo("your emails do not match!");
}
}

// User Login Code 

if(isset($_POST["user_login"]) && isset($_POST["password_login"])){
	$user_login = preg_replace('#[^A-Za-z0-9]#i', '', $_POST["user_login"]);
	$password_login = preg_replace('#[^A-Za-z0-9]#i', '', $_POST["password_login"]);
	$password_login_md5 = md5($password_login);
	$sql = mysql_query("SELECT id FROM users WHERE username='$user_login' AND password='$password_login_md5' LIMIT 1");
	$userCount = mysql_fetch_array($sql);
	if($userCount >= 1){
		while($row = mysql_fetch_array($sql)){
			$id = $row["id"];
		}
		$_SESSION["user_login"] = $user_login;
		$_SESSION["user_login1"]= $user_login;
		header("location: ./webProject/home.php");
		exit();
	}
	else{
		echo 'That info is incorrect! ';
		echo '<a href="index.php">Click here</a> to go back to login page';
		exit();
	}
}

 ?>
		<table>
			<tr>
				<td width="60%" valign="top" >
					<h2 >Member? Sign in below!</h2>
					<form action="index.php" method="POST">
						<input type="text" name="user_login" size="25" placeholder="username"/></br></br>
						<input type="password" name="password_login" size="25" placeholder="password"/></br></br>
						<input type="submit" name="login" value="Login!" /></br></br>
					</form>
				</td>
				<td width="60%" valign="top">
					<h2> Sign Up Below...</h2>
					<form action="index.php" method="POST">
						<input type="text" name="fname" size="25" placeholder="First Name"/></br></br>
						<input type="text" name="lname" size="25" placeholder="Last Name"/></br></br>
						<input type="text" name="username" size="25" placeholder="User Name"/></br></br>
						<input type="text" name="email" size="25" placeholder="Email "/></br></br>
						<input type="text" name="email2" size="25" placeholder="Email Repeat"/></br></br>
						<input type="password" name="password" size="25" placeholder="Password"/></br></br>
						<input type="password" name="password2" size="25" placeholder="Password Repeat"/></br></br>
						<input type="submit" name="reg" value="Sign Up!" /></br></br>
					</form>
				</td>
			</tr>
		</table>
<?php include("./inc/footer.inc.php") ?>