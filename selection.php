<!DOCTYPE html>
<html>

<head>
  <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    .fa {
      padding: 20px;
      font-size: 30px;
      width: 50px;
      text-align: center;
      text-decoration: none;
      margin: 5px 2px;
    }

    .fa-facebook {
      background: #3B5998;
      color: white;
    }

    .fa-twitter {
      background: #55ACEE;
      color: white;
    }

    .fa-google {
      background: #dd4b39;
      color: white;
    }

    .fa-linkedin {
      background: #007bb5;
      color: white;
    }

    .fa-youtube {
      background: #bb0000;
      color: white;
    }

    .fa-instagram {
      background: #125688;
      color: white;
    }

    .fa-pinterest {
      background: #cb2027;
      color: white;
    }

    .fa-snapchat-ghost {
      background: #fffc00;
      color: white;
      text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
    }

    .fa-skype {
      background: #00aff0;
      color: white;
    }

    .fa-android {
      background: #a4c639;
      color: white;
    }

    .fa-dribbble {
      background: #ea4c89;
      color: white;
    }

    .fa-vimeo {
      background: #45bbff;
      color: white;
    }

    .fa-tumblr {
      background: #2c4762;
      color: white;
    }

    .fa-vine {
      background: #00b489;
      color: white;
    }

    .fa-foursquare {
      background: #45bbff;
      color: white;
    }

    .fa-stumbleupon {
      background: #eb4924;
      color: white;
    }

    .fa-flickr {
      background: #f40083;
      color: white;
    }

    .fa-yahoo {
      background: #430297;
      color: white;
    }

    .fa-soundcloud {
      background: #ff5500;
      color: white;
    }

    .fa-reddit {
      background: #ff5700;
      color: white;
    }

    .fa-rss {
      background: #ff6600;
      color: white;
    }

    h4 {
      text-align: center;
      font-size: 20px;
      margin-top: 0px;
      color: red;
    }

    * {
      box-sizing: border-box;
    }

    .column {
      float: left;
      width: 33.33%;
      padding: -50px;
    }

    /* Clearfix (clear floats) */
    .row::after {
      content: "";
      clear: both;
      display: table;
    }

    body {
      font-family: Arial;
    }

    .coupon {
      border: 5px dotted black;
      width: 90%;
      border-radius: 15px;
      max-width: 800px;
    }

    .coupon1 {
      padding: 2px 16px;
      background-color: red;
    }

    .promo {
      background: black;
      padding: 3px;
    }

    .expire {
      color: red;
    }

    body {
      font-family: Arial, Helvetica, sans-serif;
    }

    * {
      box-sizing: border-box;
    }

    /* Button used to open the chat form - fixed at the bottom of the page */
    .open-button {
      background-color: black;
      color: white;
      padding: 16px 20px;
      border: none;
      cursor: pointer;
      opacity: 0.8;
      position: fixed;
      bottom: 23px;
      right: 28px;
      width: 280px;
    }

    /* The popup chat - hidden by default */
    .chat-popup {
      display: none;
      position: fixed;
      bottom: 0;
      right: 15px;
      border: 3px solid #f1f1f1;
      z-index: 9;
    }

    /* Add styles to the form container */
    .form-container {
      max-width: 300px;
      padding: 10px;
      background-color: white;
    }

    /* Full-width textarea */
    .form-container textarea {
      width: 100%;
      padding: 15px;
      margin: 5px 0 22px 0;
      border: none;
      background: #f1f1f1;
      resize: none;
      min-height: 200px;
    }

    /* When the textarea gets focus, do something */
    .form-container textarea:focus {
      background-color: #ddd;
      outline: none;
    }

    /* Set a style for the submit/send button */
    .form-container .btn {
      background-color: #4CAF50;
      color: white;
      padding: 16px 20px;
      border: none;
      cursor: pointer;
      width: 100%;
      margin-bottom: 10px;
      opacity: 0.8;
    }

    /* Add a red background color to the cancel button */
    .form-container .cancel {
      background-color: red;
    }

    /* Add some hover effects to buttons */
    .form-container .btn:hover,
    .open-button:hover {
      opacity: 1;
    }

    .btn {
      background-color: transparent;
      border: none;
      color: white;
      padding: 12px 16px;
      font-size: 16px;
      cursor: pointer;
    }

    .btn:hover {
      background-color: black;
    }

    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
    }

    li {
      float: left;
    }

    li a {
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    li a:hover {
      background-color: black;
    }

    .container {
      position: relative;
      text-align: center;
      color: white;
    }

    .bottom-left {
      position: absolute;
      bottom: 8px;
      left: 16px;
    }

    .top-left {
      position: absolute;
      top: 8px;
      left: 16px;
    }

    .top-right {
      position: absolute;
      top: 8px;
      right: 16px;
    }

    .bottom-right {
      position: absolute;
      bottom: 8px;
      right: 16px;
    }

    .centered {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }

    .img {
      background-image: url("image/itcmugal.jpg");
    }

    .class1{
        font-family: 'Pacifico', cursive;
        text-align:center;
        letter-spacing:5px;
        background-color:rgb(31, 73, 140);
        color:white;
        padding:5px;
        margin-bottom:40px;
    }
  </style>
</head>

<body>
  <form method="get">
  <div class="container">
        <nav>
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
    <img src="image/itcmugal.jpg" alt="Snow" height="700" width="2000">
    <div class="bottom-right">
      
      </ul>


    </div>
    
   
    <div class="centered">
      <link rel="stylesheet" href="style.css">
      <div class="box">
        <h2>Find Hotels</h2>


         
          <div class="inputBox">
            <input type="text" name="destination" required="">
            <label for="">Destination</label>
          </div>
          <div class="inputBox">
            <input type="date" name="indate" required="">
            <label for="">Check in</label>
          </div>
          <div class="inputBox">
            <input type="date" name="outdate" required="">
            <label for="">Check out</label>
          </div>
          <div class="inputBox">
            <input type="number" min="1" max="10" name="numroom" required="">
            <label for="">Room(s)</label>
          </div>

          <div class="inputBox">
            <input type="number" name="numguest" min="1" max="10" required="">
            <label for="">No.of guests</label>
            <input type="submit" name="submit" value="Find">
        
      </div>

    </div>
  </div>
  </div>
</form>
  <iframe width="1500" height="500" src="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=1">
  </iframe><br>
  <div class="class1"><h1>FOLLOW US ON :-</h1></div>
  <div style="text-align:center; margin-left:50px; margin-right:50px;">
  <a  style="width:80px;height:80px; border-radius:50%;" href="#facebook" class="fa fa-facebook"></a>
  <a style="width:80px;height:80px; border-radius:50%;" href="#twitter" class="fa fa-twitter"></a>
  <a style="width:80px;height:80px; border-radius:50%;"href="#linkedin" class="fa fa-linkedin"></a>
  <a style="width:80px;height:80px; border-radius:50%;""href="#youtube" class="fa fa-youtube"></a>
  <a style="width:80px;height:80px; border-radius:50%;"href="#instagram" class="fa fa-instagram"></a>
  <a style="width:80px;height:80px; border-radius:50%;"href="#" class="fa fa-pinterest"></a>
  <a style="width:80px;height:80px; border-radius:50%;"href="#" class="fa fa-snapchat-ghost"></a>
  <a style="width:80px;height:80px; border-radius:50%;"href="#" class="fa fa-skype"></a>
  <a style="width:80px;height:80px; border-radius:50%;"href="#" class="fa fa-android"></a>
  <a style="width:80px;height:80px; border-radius:50%;"href="#" class="fa fa-dribbble"></a>
  <a style="width:80px;height:80px; border-radius:50%;"href="#" class="fa fa-vimeo"></a>
  <a style="width:80px;height:80px; border-radius:50%;"href="#" class="fa fa-tumblr"></a>
  <a style="width:80px;height:80px; border-radius:50%;"href="#" class="fa fa-vine"></a>
  <a style="width:80px;height:80px; border-radius:50%;"href="#" class="fa fa-foursquare"></a>
  <a style="width:80px;height:80px; border-radius:50%;"href="#" class="fa fa-stumbleupon"></a>
  <a style="width:80px;height:80px; border-radius:50%;"href="#" class="fa fa-flickr"></a>
  <a style="width:80px;height:80px; border-radius:50%;"href="#" class="fa fa-yahoo"></a>
  <a style="width:80px;height:80px; border-radius:50%;"href="#" class="fa fa-reddit"></a>
  <a style="width:80px;height:80px; border-radius:50%;"href="#" class="fa fa-rss"></a>
</div>
      <div class="class1" style="margin-top:40px;"><h1>DESTINATION :-</h1></div>
  <div style="text-align:center;">
  <h5>New Delhi & Gurgaon Hotels <b>|</b>Goa Hotels & Resorts<b>|</b>Mumbai Hotels<b>|</b>&nbsp;&nbsp;Chennai Hotels
    <b>|</b>Bengaluru Hotels <b>|</b><br>
    Hyderabad Hotels <b>|</b>Kolkata Hotels <b>|</b>Jaipur Hotels <b>|</b>Agra Hotels <b>|</b>Vadodara Hotels <b>|</b>
    <br>Aurangabad Hotels <b>|</b>Visakhapatnam Hotels <b>|</b>Panchkula - Chandigarh Hotels <b>|</b><br>
    <br>Jodhpur Hotels <b>|</b>Khimsar Hotels <b>|</b>Mussoorie Hotels <b>|</b>Coimbatore Hotels <b>|</b>Pahalgam Hotels
    <b>|</b><br>
    Lucknow Hotels<b>|</b>London Hotels<b>|</b>Greece Hotels<b>|</b>Maurtiuis Hotels</h5><br>

  </div>

</body>

<?php
error_reporting(E_ALL ^ E_WARNING); 
session_start();
include 'connection.php';
if(!isset($_SESSION['user']))
{
  echo"<script>document.location.href='login.php'</script>";
}

if(isset($_GET["submit"]))
{
  $_SESSION['d']=$_GET["destination"];
  $_SESSION['i']=$_GET["indate"];
  $_SESSION['o']=$_GET["outdate"];
  $r=$_GET["numroom"];
  $g=$_GET["numguest"];
  echo"<script>document.location.href='selection2.php'</script>";
}

?>
</html>