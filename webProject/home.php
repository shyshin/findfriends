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
	$s1=mysqli_fetch_array(mysqli_query($con,"select img2,content from posts where posts.id='{$r1["id"]}';"));
	$s2=mysqli_fetch_array(mysqli_query($con,"select img2,content from posts where posts.id='{$r2["id"]}';"));
	$s3=mysqli_fetch_array(mysqli_query($con,"select img2,content from posts where posts.id='{$r3["id"]}';"));
	?>
<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Home Page</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <link href="carousel.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="../post/test.php">POST HERE</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="home.php">Home</a></li>
                <li><a href="<?php $_SESSION["user_login1"]=$_SESSION["user_login"]; echo "../profile/about.php";?>">ABOUT</a></li>
                <li><a href="../logout.php">LOGOUT</a></li>
                
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="sc.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">

    
   
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="earth.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
    
   
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="ty.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
    
   
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="<?php
					$q1=mysqli_query($con,"select img1 from posts where id='{$r1["id"]}';");
					$qn=mysqli_fetch_array($q1);
					echo "{$qn[0]}";
					?>" alt="Generic placeholder image" width="140" height="140">
          
          <h2><?php echo "{$r1["first_name"]}";?></h2>
          <p>Hey there!!!</p>
          <p><a class="btn btn-default" href="<?php $_SESSION["user_login1"]=$r1["username"]; echo "../profile/about.php";?>" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="<?php
					$q1=mysqli_query($con,"select img1 from posts where id='{$r2["id"]}';");
					$qn=mysqli_fetch_array($q1);
					echo "{$qn[0]}";
					?>" alt="Generic placeholder image" width="140" height="140">
          
          <h2><?php echo "{$r2["first_name"]}";?></h2>
          <p>Hey there!!!</p>
          <p><a class="btn btn-default" href="<?php $_SESSION["user_login1"]=$r2["username"]; echo "../profile/about.php";?>" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="<?php
					$q1=mysqli_query($con,"select img1 from posts where id='{$r3["id"]}';");
					$qn=mysqli_fetch_array($q1);
					echo "{$qn[0]}";
					?>" alt="Generic placeholder image" width="140" height="140">
          
          <h2><?php echo "{$r3["first_name"]}";?></h2>
          <p>Hey there!!!</p>
          <p><a class="btn btn-default" href="<?php $_SESSION["user_login1"]=$r3["username"]; echo "../profile/about.php";?>" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading"><?php echo "{$s1['content']}";?> <span class="text-muted"></span></h2>
          <p class="lead"><?php echo "{$r1['first_name']}";?></p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="<?php echo "{$s1['img2']}";?>" alt="Need to add more pictures" width="540" height="540">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading"><?php echo "{$s2['content']}";?> <span class="text-muted"></span></h2>
          <p class="lead"><?php echo "{$r2['first_name']}";?></p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" src="<?php echo "{$s2['img2']}";?>" alt="Generic placeholder image" width="540" height="540">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading"><?php echo "{$s3['content']}";?> <span class="text-muted"></span></h2>
          <p class="lead"><?php echo "{$r3['first_name']}";?></p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="<?php echo "{$s3['img2']}";?>" alt="Generic placeholder image" width="540" height="540">
        </div>
      </div>

      <hr class="featurette-divider">




    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="jquery.min.js"></script>
    <script>window.jQuery || document.write('<jquery.min.js"><\/script>')</script>
    <script src="bootstrap.min.js"></script>
  </body>
</html>
