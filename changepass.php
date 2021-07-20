<?php
include("connect.php");
$mobile=$_POST["mobile"];
$newpass=base64_encode($_POST["newpass"]);
$update=mysqli_query($connect,"UPDATE user SET password='$newpass' WHERE mobile='$mobile'");
$check=mysqli_query($connect,"SELECT password FROM user where password='$newpass'");


$num=mysqli_num_rows($check);
 if($num > 0)
{

    echo '<script>
    alert("Password Changed Successfully!");
    window.location="update.php";
    </script>';

}
else{
    echo '<script>
    alert("Error Occurred While Changing Password!");
    window.location="update.php";
    </script>';
}
?>