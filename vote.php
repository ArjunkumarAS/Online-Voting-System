<?php
session_start();
include("connect.php");
$votes=$_POST['gvotes'];
$total_votes=$votes+1;
$gid=$_POST['gid'];
$uid=$_SESSION['userdata']['id'];
$update_votes=mysqli_query($connect,"UPDATE user SET votes='$total_votes' where id='$gid'");
$update_user_status=mysqli_query($connect,"UPDATE user SET status=1 where id='$uid'");

if($update_votes && $update_user_status){
    $groups=mysqli_query($connect,"SELECT * from user where role=2");
    $groupsdata=mysqli_fetch_all($groups,MYSQLI_ASSOC);
    $_SESSION['userdata']['status']=1;
    $_SESSION['groupsdata']=$groupsdata;

    echo '<script>
    alert("Successfully Voted!!");
    window.location="dashboard.php";
  </script>';
}
else{
    echo '<script>
    alert("Some error occurred!!");
    window.location="dashboard.php";
  </script>';
}
?>