<?php
include("connect.php");
session_start();
$mobile=$_POST["mobile"];
$password=base64_encode($_POST["password"]);
$role=$_POST["role"];
if($mobile==""){
  echo '
  <script>
    alert("Mobile Number is Mandatory!");
    window.location="index.html";
  </script>';

}
if($password==""){
  echo '
  <script>
    alert("Password is Mandatory!");
    window.location="index.html";
  </script>';

}
if($role==""){
  echo '
  <script>
    alert("Role is Mandatory!");
    window.location="index.html";
  </script>';

}
$check=mysqli_query($connect,"SELECT * from user where mobile='$mobile' && password='$password' && role='$role'");
$num=mysqli_num_rows($check);
if($num>0){
//   echo '<script>
//   window.location="dashboard.php";
// </script>';
header('location:dashboard.php');
    $userdata=mysqli_fetch_array($check);
    $groups=mysqli_query($connect,"SELECT * from user where role=2");
    $groupsdata=mysqli_fetch_all($groups,MYSQLI_ASSOC);

    $_SESSION['userdata']=$userdata;
    $_SESSION['groupsdata']=$groupsdata;
    
   
}
else{
    echo '<script>
      alert("Invalid Credentials or User not found!");
      window.location="index.html";
    </script>';
}
?>