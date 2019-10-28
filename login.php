<?php
session_start();
include 'connection.php';
$e=isset($_GET["email"])?$_GET["email"]:'';
$p=isset($_GET["pass"])?$_GET["pass"]:'';
$a=0;
if(isset($_GET['submit']))
{  
    $q="select * from signup";
    $ex=mysqli_query($conn,$q);
    if (mysqli_num_rows($ex) > 0) 
    {
        while($row = mysqli_fetch_assoc($ex)) 
        {
            if($row["email"]==$e && $row["pass"]==$p)
            {
                $_SESSION['user']=$row["fname"];
                $_SESSION['email']=$row["email"];
                $a=$a+1;
                break;
            }
       }
}
if($a==1)
{
    header("Location: selection.php");
}
else
{
    $message = "wrong id or password";
    echo "<script type='text/javascript'>alert('$message');</script>";
}

}
?>
<!DOCTYPE html>
<html>
<head>
        <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Cabin+Sketch&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title></title>
    <style>
        html,body{
            overflow:hidden;
        }

        body 
        {
            background-image: url(https://images.unsplash.com/photo-1532408840957-031d8034aeef?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1790&q=80);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-size: cover;
        }
        .container 
        {
            content: '';
            position: absolute;
            top: 0px;
            left: 0px;
            right: 0px;
            bottom: 0px;
            width: 800px;
            height: 590px;
            margin: auto;
            box-shadow: inset 0 0 2000px rgba(255, 255, 255, .8);
            filter: blur(0.05px);
            border-radius: 2rem;
            transition: transform .2s;
        }
        .animationone:hover
        {
            transform: scale(1.05);
            
        }
        #leftbox { 
                float:left;  
                /* background: whitesmoke;  */
                box-shadow: 0 0 10000px rgba(255, 255, 255, 2);
                width:50%; 
                height:400px;
                text-align:center;
                position:absolute;
                top:21%;
                border-radius: 0.5rem;
                
                 
            } 
            
        .rightbox{ 
                float:right; 
                /* background:blue;  */
                width:240px;
                height:240px; 
                text-align:center;
                position: absolute;
                left:55%;
                top:25%;
            
                
                
                
                 
            } 
        h1{ 
                /* color:rgb(36, 57, 92);  */
                text-align:center; 
                font-family: 'Cabin Sketch', cursive;
                letter-spacing: 4px;
            }
#slideshow {
  margin:  auto;
  position: relative;
  width: 300px;
  height: 300px;
  padding: 5px;
  box-shadow: 0 0 20px rgba(0, 0, 0, 1.2);
}

#slideshow > div {
  position: absolute;
  top: 2px;
  left: 2px;
  right: 2px;
  bottom: 2px;
}


}                   
    </style>
</head>
<body>
    <div class="container sizeone animationone">
            <h1 style=" font-size: 55px;text-shadow: 16px 16px 32px #ffffff;">hello user !</h1> 
             
            <div id = "leftbox"> 
                <form method="get">
                    <div class="form-group" style=" padding-top: 20px; ">
                      <label style="font-size:20px;" for="exampleInputEmail1"><b>Email address</b></label>
                    <div style="display: flex; align-items: center; justify-content: center;">
                      <input  style="width: 240px; text-align: center; border-radius: 1.5rem;" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                    </div>
                    </div>
                    <div class="form-group">
                      <label style="font-size:20px;" for="exampleInputPassword1"><b>Password</b></label>
                    <div style="display: flex; align-items: center; justify-content: center;">
                      <input  style="width: 240px; text-align: center; border-radius: 1.5rem;" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass">
                    </div>
                    </div>
                    <div class="form-group form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1"><b>Keep me signed in !</b></label>
                    </div>
                    <div style="display: flex; align-items: center; justify-content: center; padding-top:20px; ">
                    <button style=" width: 240px; text-align: center; border-radius: 1.5rem;" type="submit" class="btn btn-info" style="width:100px;" name="submit">Sign In</button>
                    </div>
                    <div style="display: flex; align-items: center; justify-content: center; padding-top:20px; ">
                    <a href="signup.php" style="width: 240px; text-align: center; border-radius: 1.5rem;" class="btn btn-info" style="width:100px;">Sign Up</a>
                    </div>
                  </form>        
                
            </div>  
 
              
            <div class = "rightbox"> 
                
                    <div id="slideshow">
                            <div>
                              <img style="max-width:100%;
                              max-height:100%;" 
                              src="picone.jpg">
                            </div>
                            <div>
                              <img style="max-width:100%;
                                max-height:100%;"
                                src="pictwo.jpg">
                            </div>
                            <div>
                                <img style="max-width:100%;
                                max-height:100%;" 
                                src="picthree.jpg">
                            </div>
                            
                         </div>
            </div>
    </div>

</body>
<script>
    $("#slideshow > div:gt(0)").hide();

setInterval(function() {
  $('#slideshow > div:first')
    .fadeOut(2500)
    .next()
    .fadeIn(2500)
    .end()
    .appendTo('#slideshow');
}, 5500);
</script>
</html>
