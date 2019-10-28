
<!DOCTYPE html>
<html>
<head>
	<title>welcome</title>
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<script src="js/test.js" type="text/javascript"></script>
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script:700&display=swap" rel="stylesheet">
	<style>
		input:focus, textarea:focus {
    outline: none;
}

		body 
        {
            background-image: url(https://images.unsplash.com/photo-1558618084-89c9d1e5690a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1934&q=80);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-size: cover;
        }
		#id1{
			position:absolute;
			height:95%;
			width:50%;
			background-color:white;
			top:0;
			left:0;
			right:0;
			bottom:0;
			margin:auto;
			border-radius:1rem;
			text-align:center;
		}
		.row:after{
			content:"";
			clear:both;
		}
		.col-left{
			width:50%;
			float:left;
			margin-top:6px;
		}
		.col-right{
			width:50%;
			float:left;
			margin-top:6px;
			margin-left:0;
		}
					.range {
			  -webkit-appearance: none;
			  -moz-appearance: none;
			  /*position: absolute;*/
			  /*left: 50%;*/
			  /*top: 50%;*/
			  position:relative;
			  width: 250px;
			  /*margin-top: 10px;*/
			  /*margin:auto;*/
			  /*transform: translate(-50%, -50%);*/
			}

			input[type=range]::-webkit-slider-runnable-track {
			  -webkit-appearance: none;
			  background: rgba(59,173,227,1);
			  background: -moz-linear-gradient(45deg, rgba(59,173,227,1) 0%, rgba(87,111,230,1) 25%, rgba(152,68,183,1) 51%, rgba(255,53,127,1) 100%);
			  background: -webkit-gradient(left bottom, right top, color-stop(0%, rgba(59,173,227,1)), color-stop(25%, rgba(87,111,230,1)), color-stop(51%, rgba(152,68,183,1)), color-stop(100%, rgba(255,53,127,1)));
			  background: -webkit-linear-gradient(45deg, rgba(59,173,227,1) 0%, rgba(87,111,230,1) 25%, rgba(152,68,183,1) 51%, rgba(255,53,127,1) 100%);
			  background: -o-linear-gradient(45deg, rgba(59,173,227,1) 0%, rgba(87,111,230,1) 25%, rgba(152,68,183,1) 51%, rgba(255,53,127,1) 100%);
			  background: -ms-linear-gradient(45deg, rgba(59,173,227,1) 0%, rgba(87,111,230,1) 25%, rgba(152,68,183,1) 51%, rgba(255,53,127,1) 100%);
			  background: linear-gradient(45deg, rgba(59,173,227,1) 0%, rgba(87,111,230,1) 25%, rgba(152,68,183,1) 51%, rgba(255,53,127,1) 100%);
			  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3bade3 ', endColorstr='#ff357f ', GradientType=1 );
			  height: 2px;
			}

			input[type=range]:focus {
			  outline: none;
			}

			input[type=range]::-moz-range-track {
			  -moz-appearance: none;
			  background: rgba(59,173,227,1);
			  background: -moz-linear-gradient(45deg, rgba(59,173,227,1) 0%, rgba(87,111,230,1) 25%, rgba(152,68,183,1) 51%, rgba(255,53,127,1) 100%);
			  background: -webkit-gradient(left bottom, right top, color-stop(0%, rgba(59,173,227,1)), color-stop(25%, rgba(87,111,230,1)), color-stop(51%, rgba(152,68,183,1)), color-stop(100%, rgba(255,53,127,1)));
			  background: -webkit-linear-gradient(45deg, rgba(59,173,227,1) 0%, rgba(87,111,230,1) 25%, rgba(152,68,183,1) 51%, rgba(255,53,127,1) 100%);
			  background: -o-linear-gradient(45deg, rgba(59,173,227,1) 0%, rgba(87,111,230,1) 25%, rgba(152,68,183,1) 51%, rgba(255,53,127,1) 100%);
			  background: -ms-linear-gradient(45deg, rgba(59,173,227,1) 0%, rgba(87,111,230,1) 25%, rgba(152,68,183,1) 51%, rgba(255,53,127,1) 100%);
			  background: linear-gradient(45deg, rgba(59,173,227,1) 0%, rgba(87,111,230,1) 25%, rgba(152,68,183,1) 51%, rgba(255,53,127,1) 100%);
			  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3bade3 ', endColorstr='#ff357f ', GradientType=1 );
			  height: 2px;
			}

			input[type=range]::-webkit-slider-thumb {
			  -webkit-appearance: none;
			  border: 2px solid;
			  border-radius: 50%;
			  height: 25px;
			  width: 25px;
			  max-width: 80px;
			  position: relative;
			  bottom: 11px;
			  background-color: #1d1c25;
			  cursor: -webkit-grab;

			  -webkit-transition: border 1000ms ease;
			  transition: border 1000ms ease;
			}

			input[type=range]::-moz-range-thumb {
			  -moz-appearance: none;
			  border: 2px solid;
			  border-radius: 50%;
			  height: 25px;
			  width: 25px;
			  max-width: 80px;
			  position: relative;
			  bottom: 11px;
			  background-color: #1d1c25;
			  cursor: -moz-grab;
			  -moz-transition: border 1000ms ease;
			  transition: border 1000ms ease;
			}



			.range.blue::-webkit-slider-thumb {
			   border-color: rgb(59,173,227);
			}

			.range.ltpurple::-webkit-slider-thumb {
			   border-color: rgb(87,111,230);
			}

			.range.purple::-webkit-slider-thumb {
			   border-color: rgb(152,68,183);
			}

			.range.pink::-webkit-slider-thumb {
			   border-color: rgb(255,53,127);
			}

			.range.blue::-moz-range-thumb {
			   border-color: rgb(59,173,227);
			}

			.range.ltpurple::-moz-range-thumb {
			   border-color: rgb(87,111,230);
			}

			.range.purple::-moz-range-thumb {
			   border-color: rgb(152,68,183);
			}

			.range.pink::-moz-range-thumb {
			   border-color: rgb(255,53,127);
			}

			input[type=range]::-webkit-slider-thumb:active {
			  cursor: -webkit-grabbing;
			}

			input[type=range]::-moz-range-thumb:active {
			  cursor: -moz-grabbing;
			}
			input[type=submit] {
			  background-color: #4CAF50;
			  color: white;
			  padding: 12px 20px;
			  border: none;
			  border-radius: 4px;
			  cursor: pointer;
			  
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
	<div id="id1">
<?php
error_reporting(E_ALL ^ E_WARNING); 
session_start();
include 'connection.php';
if(isset($_SESSION['user']))
{
	echo"<br>Welcome ".$_SESSION["user"]."!"."<br>";
}
else
{
	echo"<script>document.location.href='login.php'</script>";
}

?>
<div class="fullscreen-menu-container js-menu-container">

    		<a class="menu-button js-menu-close">
				<div class="menu-icon is-active">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</a>

			<div class="fullscreen-menu">

				<nav class="fullscreen-menu__nav">
					<ul>

						<li>
							<a href="#">Home</a>
            			</li>

            			<li>
              				<a href="#">About</a>
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
              				<a href="booking.php">Your Bookings</a>
            			</li>
            			<li>
              				<a href="logout.php">Logout</a>
            			</li>

					</ul>
				</nav>

			</div>

    	</div>



				<a class="menu-button js-menu-button">
					<div class="menu-icon">
						<span></span>
						<span></span>
						<span></span>
					</div>
				</a>

				


<span style="font-family: 'Dancing Script', cursive; font-size:50px;"><b>drop a comment</b></span>
<br>
<form method="get" style="margin-top:40px;">
	
	
	<br>
	
		
	<span style="letter-spacing:3px;"><b>title :</b></span>
	<br><br>	
		
	<input type="text" name="title" style="width:260px; border-radius:1rem; padding-left:20px; padding-right:20px;" required>
		
	<br><br>
	<span style="letter-spacing:3px;"><b>Comments :</b></span><br><br>
	<textarea required rows="4" cols="45" name="comment" style="width:260px; border-radius:1rem; padding-left:20px; padding-right:20px;"></textarea><br><br>
	<span style="letter-spacing:3px;"><b>Rating :</b></span><br>
	<br>


	<input type="range" name="range" min="0" max="100" value="0" class="range blue"/>
	<br><br><br>
	<input type="submit" name="post"><br><br><br><br>
	<span ><a href="logout.php" style="color:black; text-decoration:none;">LOGOUT</a></span>
</form>



</div>
<?php
if(isset($_GET['post']))
{ 
	$e=$_SESSION['email'];
	$t=$_GET['title'];
	$com=$_GET['comment'];
	$r=$_GET['range'];
	$q="select * from comment";
	$ex=mysqli_query($conn,$q);
	$q1="insert into comment value('$e','$t','$com','$r');";
	$m=mysqli_query($conn,$q1);
	echo"<script>document.location.href='comment.php'</script>";
}
?>
</body>
</html>
