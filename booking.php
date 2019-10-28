<!DOCTYPE html>
<html>
<head>
	<title>Booking</title>
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<script src="js/test.js" type="text/javascript"></script>
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script:700&display=swap" rel="stylesheet">
	<style>
		#id2{
			height:100%;
			width:100%;
			background-color:black;
			border-radius:0.5rem;
		}
		#id3{
			height:80%;
			width:90%;
			position:relative;
			margin:auto;
			overflow: scroll;
		}
		#id4{
			position:relative;
			width:80%;
			height:5%;
			overflow:auto;
			background-color:black;
			margin: 14px auto;
			color:white;
			padding:8px;
		}
		#id5{
			position:relative;
			width:80%;
			height:30%;
			overflow:auto;
			background-color:grey;
			margin:2px auto;
			padding:8px;
			color:white;
		}
		.style-two {
    border: 0;
    height: 1px;
    background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));
    height:4px;
}

	</style>
</head>
<body>
		<script>

	function openMenu() {
		$('.js-menu-container').addClass('is-open');
	}


	function closeMenu() {
		$('.js-menu-container').removeClass('is-open'); 
	}



	jQuery(document).ready(function($){

		$('.js-menu-button').click(function(){ 
			openMenu(); 
		});

		$('.js-menu-close').click(function(){ 
			closeMenu(); 
		});

	});

	jQuery(document).keyup(function(e) { 

		if (e.keyCode === 27) {

			if ($('.js-menu-container').hasClass('is-open')) { 
				closeMenu(); 
			}

		}

	});
	</script>
<div class="fullscreen-menu-container js-menu-container">

    		<a class="menu-button js-menu-close">
				<div class="menu-icon is-active">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</a>

			<div class="fullscreen-menu">

				<div class="fullscreen-menu__image-container"></div>
				<nav class="fullscreen-menu__nav">
					<ul>

						<li>
							<a href="home.php">Home</a>
						</li>
						
						<li>
							<a href="welcome.php">Drop a Feedback</a>
						</li>

						<li>
							<a href="comment.php">See Feedbacks</a>
						</li>
						<li>
							<a href="selection.php">Select Rooms</a>
						</li>
						<li>
							<a href="logout.php">Logout</a>
						</li>

					</ul>
				</nav>

			</div>

    	</div>

		<article class="card">

			<aside class="card__image-container">

				<a class="menu-button js-menu-button">
					<div class="menu-icon">
						<span></span>
						<span></span>
						<span></span>
					</div>
				</a>

				<img class="card__image" src="css/image/hotel.jpg">

			</aside>

			<section class="card__contents">

				<header class="card__header">
					<h1 class="card__title">Our Hotel</h1>
				</header>
<section class="card__body">
	<div id="id2">

	<h1 style="text-align:center; padding:5px;  color:white; letter-spacing:3px;">Your Bookings</h1>
	<div style="background-color:white;" id="id3">

	<form method="get">
<?php
session_start();
include 'connection.php';
if(!isset($_SESSION['user']))
{
	echo"<script>document.location.href='login.php'</script>";
}
else
{
	echo "<p style='font-size: 30px;align-content: center;color: skyblue'>". "Welcome ".$_SESSION['user']."!"."</p>";
}
?>
<?php
 	$q="select * from booking";
    $ex=mysqli_query($conn,$q);
    $e=$_SESSION["email"];
    if (mysqli_num_rows($ex) > 0) 
    {
        while($row = mysqli_fetch_assoc($ex)) 
        {
        	if($row["email"]==$e)
        	{
                echo"<div><p style='font-size: 20px;align-content: center;color: darkblue'>"."Destination: "."</p>";
                echo"<div name='title' id='id4'>".$row["destination"]."</div>";
                echo"<div name='comment' id='id5'>From:".$row["intime"]."</div>";
                echo"<div name='comment' id='id5'>to:".$row["outime"]."</div>";
                echo"<div name='comment' id='id5'> Your Booking are: ".$row["room1"]." Single Bed ".$row["room1"]." Double Bed ".$row["room1"]." Suite"."</div></div>";
                echo "<hr class='style-two'>";
            }
       }
   }
?>
</form>
	</div>
</div>
</section>

			</section>

		</article>
		<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
</body>
</html>
