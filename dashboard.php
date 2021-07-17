<?php
 session_start();
 if(!isset($_SESSION['userdata'])){
     header("location:index.html");
 }
 
 $userdata=$_SESSION['userdata'];
 $groupsdata=$_SESSION['groupsdata'];
 if($_SESSION['userdata']['status']==0){
    $status='<b style="color:red;">Not Voted</b>';
}
else{
   $status='<b style="color:green;">Voted</b>';
}
?>
<html>
    <head>
        <title>Online Voting System - Dashboard</title>
        <!-- <link rel="stylesheet" href="stylesheet.css"> -->
        <style>
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
        <style>
            #backbtn{
                padding: 10px;
    border-radius: 5px;
    background-color: #3498db;
    color: white;
    float:left;
    margin:10px;
            }
            #logoutbtn{
                padding: 10px;
    border-radius: 5px;
    background-color: #3498db;
    color: white;
    float:right;
    margin:10px;

            }
            #Profile{
                /* background-color:white; */
                background-color: rgba(0,0,0,0.25);
                width:30%;
                padding: 20px;
                float:left;
                
            }
            #Group{
                /* background-color:white; */
                background-color: rgba(0,0,0,0.25);
                width:60%;
                padding: 20px;
                float:right;
            }
            #votebtn{
                padding: 10px;
    border-radius: 5px;
    background-color: #3498db;
    color: white;
    float:left;

            }
            #mainpanel{
                padding: 10px;

            }
            #voted{
                padding: 10px;
    border-radius: 5px;
    background-color: green;
    color: white;
    float:left;
            }
            
        </style>
<div id="loginForm">
        <div id="mainSection">
        <center>
        <div id="headerSection">
        <a href="dashboard.php"><button id="backbtn">Refresh</button></a>
        <a href="logout.php"><button id="logoutbtn">Logout</button></a>
        <h1 style="font-family: Cursive;">Online Voting System</h1>
        </div></center><hr>
        <div id="mainpanel">
        <div id="Profile">
            <center><img src="uploads/<?php echo $userdata['photo'];?>" height="200" width="200"></center><br><br>
            <font color="white" size="5">Name : <?php echo $userdata['name'];?> <br><br>
            Mobile : <?php echo $userdata['mobile'];?><br><br>
            Address : <?php echo $userdata['address'];?><br><br>
            Status : <?php echo $status;?><br><br>
        </font>
        </div>
        <div id="Group">
            <?php
              if($_SESSION['groupsdata']){
                  for($i=0;$i<count($groupsdata);$i++){
                      ?>
                      <div><font color="white" size="4">
                          <img style="float:right;" src="uploads/<?php echo $groupsdata[$i]['photo']?>" height="100" width="100">
                          <b>Group Name : <?php echo $groupsdata[$i]['name']?></b><br><br>
                          <b>Votes : <?php echo $groupsdata[$i]['votes']?></b><br><br>
                          <form action="vote.php" method="POST">
                              <input type="hidden" name="gvotes" value="<?php echo $groupsdata[$i]['votes']?>">
                              <input type="hidden" name="gid" value="<?php echo $groupsdata[$i]['id']?>">
                              <?php
                                if($_SESSION['userdata']['status']==0){
                                   ?>
                                   <input type="submit" name="votebtn" id="votebtn" value="Vote"><br><br>
                                   <?php
                                }
                                else{
                                    ?>
                                    <button disabled type="button" name="votebtn" id="voted" value="Vote">Voted</button><br><br>
                                    <?php
                                }
                            ?>
                          </form>
                      </div>
                      <hr>
                      <?php
                  }

              }
            
            ?>

        </div>

        </div>
        
        </div>
 </div>
            </font>      
<img src="onlinevoting.jpg" class="image" width="100%" height="100%"/> 
    </body>
</html>

