
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Your Account</title>
    <style>
        .chpass{
            width: 200px;
            height:200px;
            background-color:rgba(0,0,0,0.25);
        }
        
        
        .image{
            top:0;
  left:0;
  right:0;
  bottom:0;
  position:absolute;
        }
        #loginForm {
  position:relative;
  z-index:10;
}

   

    </style>
</head>
<body bgcolor="#00264d">
    <div id="loginForm">
    <a href="index.html" style="text-decoration:none;
    float:right;width: 52px;font-weight:bold;color:black;
            height:20px;background-color:wheat;">BACK</a>
    <center><br><br><br><br>
    <h1>To Change Password?</h1>
    <div class="chpass"><br>
    <form action="changepass.php" method="POST">
    <input type="number" placeholder="Enter Mobile Number " name="mobile"><br><br><br>
    <input type="password"  placeholder="Ente New Password" name="newpass"><br><br><br><br>
    <button type="submit" style="color: black;font-weight: bolder;">Change Password</button>
   </form></div><br><br><br>
   <h1>To Change Mobile Number?</h1>
   <div class="chpass"><br>
   <form action="changemobile.php" method="POST">
    <input type="number" placeholder="Enter Old Mobile Number" name="oldmobile"><br><br>
    <input type="password" placeholder="Enter Password " name="password"><br><br>
    <input type="number" placeholder="Enter New Mobile Number "name="newmobile"><br><br>
    <button type="submit" style="color: black;font-weight: bolder;">Change Mobile Number</button>
   </form></div>
    
    
</center>
</div>
<img src="onlinevoting.jpg" class="image" width="100%" height="100%"/>
    
</body>
</html>