<?php
include("connect.php");
$password=base64_encode($_POST["password"]);
$newmobile=$_POST["newmobile"];
$oldmobile=$_POST["oldmobile"];
$update=mysqli_query($connect,"UPDATE user SET  mobile='$newmobile' WHERE password='$password' && mobile='$oldmobile'");
$check=mysqli_query($connect,"SELECT mobile FROM user where mobile='$newmobile'");


$num=mysqli_num_rows($check);
 if($num > 0)
{

    echo '<script>
    alert("Mobile Number Changed Successfully!");
    window.location="update.php";
    </script>';

}
else{
    echo '<script>
    alert("Error Occurred While Changing Mobile Number!");
    window.location="update.php";
    </script>';
}
?>