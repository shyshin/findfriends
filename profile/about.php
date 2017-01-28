<?php
session_start();
    
$user=$_SESSION["user_login1"];
$desc2="";
$con=mysqli_connect("localhost","root","","findfriends");
	if(mysqli_connect_errno())
	{
		echo "Failed to connect to mysql". mysqli_connect_error();
	}
$q=mysqli_query($con,"select * from users,posts where username='{$user}' and users.id=posts.id;");
$query=mysqli_fetch_array($q);
$fname=$query["first_name"];
$i1=$query["img1"];
$desc=$query["content"];
$lname=$query["last_name"];
$_SESSION["user_login1"]=$_SESSION["user_login"];
mysqli_close($con);
?>
<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>User Profile </title>
    <!-- BOOTSTRAP STYLE SHEET -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
     <!-- FONT AWESOME ICONS STYLE SHEET -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- CUSTOM STYLES -->
     <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
    <div class="navbar navbar-default"> 
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right  ">
                    <li><a href="../webProject/home.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="../logout.php">LOGOUT</a></li>
                </ul>
            </div>

        </div>
    </div>
    <!-- NAVBAR CODE END -->
    <div class="container">
        <div class="row">
                <div class="col-md-12 text-center">
                    <h2>User Profile</h2>

                   
                 
                    <br>
                    <br>
                    
                </div>
            </div>
         <!-- USER PROFILE ROW STARTS-->
            <div class="row">
                <div class="col-md-3 col-sm-3">
                                       
                    <div class="user-wrapper">
                        <img src="<?php echo "{$i1}"; ?>" class="img-responsive"> 
                    <div class="description">
                       <h4><?php echo "${fname} ${lname} ";?></h4>
                        <h5> <strong> <?php echo "@{$user}";?> </strong></h5>
                        <p>
                        
                        </p>
                        <hr>
                         
                    </div>
                     </div>
                </div>
                
                <div class="col-md-9 col-sm-9  user-wrapper">
                    <div class="description">
                         <h3> About <?php echo "{$fname}";?> : </h3>
                    <hr>
                     <p>
                          <?php echo "{$desc}";?> 
                         </p>
												 <p>
												 <?php echo "{$desc2}";?>
												 </p>
                    <p>
                         That was kind of enough for today ;)
                        </p>   
                    
                    <hr>                
                   

                        
                        
                        
                    </div>
                 
                </div>
            </div>
           <!-- USER PROFILE ROW END-->
    </div>
    <!-- CONATINER END -->
    <!-- REQUIRED SCRIPTS FILES -->
    <!-- CORE JQUERY FILE -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- REQUIRED BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>



</body></html>