<!DOCTYPE html>
<html>
<head>
	<title>comment</title>
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
	<div id="id2">
	<h1 style="text-align:center; padding:5px;  color:white; letter-spacing:3px;">COMMENTS </h1>
	<div style="background-color:white;" id="id3">
	<form method="get">
<?php
session_start();
include 'connection.php';
if(!isset($_SESSION['user']))
{
	echo"<script>document.location.href='login.php'</script>";
}
?>
<?php
 $q="select * from comment";
    $ex=mysqli_query($conn,$q);
    $e=$_SESSION["email"];
    if (mysqli_num_rows($ex) > 0) 
    {
        while($row = mysqli_fetch_assoc($ex)) 
        {

                echo"<div name='title' id='id4'>".$row["title"];
                echo"<div name='comment' id='id5'>".$row["comment"]."</div>";
                echo"<div name='comment' id='id5'>Rated : ".$row["rating"]."</div>"."</div>";
                echo"<div> By:- ".$row["email"]."</div>";
                echo "<hr class='style-two'>";
       }
   }
?>
</form>
	</div>
</div>
</body>
</html>
