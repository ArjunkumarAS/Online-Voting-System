<?php
  include("connect.php");
  
  $name=$_POST['name'];
  $mobile=$_POST['mobile'];
  $password=base64_encode($_POST['password']);
  $cpassword=base64_encode($_POST['cpassword']);
  $address=$_POST['address'];
  $image=$_FILES['photo']['name'];
  $tmpname=$_FILES['photo']['tmp_name'];
  $role=$_POST['role'];
  
  if($name=="")
  {
    echo '
    <script>
      alert("Name is Mandatory!");
      window.location="register.html";
    </script>';

    
  }
  if($mobile=="")
  {
    echo '
    <script>
      alert("Mobile Number is Mandatory!");
      window.location="register.html";
    </script>';
  }
  if($password==""){
    echo '
    <script>
      alert("Password is Mandatory!");
      window.location="register.html";
    </script>';
  }
  if($address==""){
    echo '
    <script>
      alert("Please Enter Your Address!");
      window.location="register.html";
    </script>';
  }
  if($image==""){
    echo '
    <script>
      alert("Uploading Image is Required!");
      window.location="register.html";
    </script>';
  }
  if($role==""){
    echo '
    <script>
      alert("Entering Role is Mandatory!");
      window.location="register.html";
    </script>';
  }
  if($password==$cpassword && $password!=""){
    move_uploaded_file($tmpname,"uploads/$image");
    $insert=mysqli_query($connect,"INSERT INTO user (name,mobile,address,password,photo,role,status,votes) VALUES ('$name','$mobile'
    ,'$address','$password','$image','$role','0','0')");
    if($insert){
      echo '<script>
      alert("Registration Successfull!");
      window.location="index.html";
      </script>';

    }
    else{
      echo '
      <script>
        alert("Some error occurred!");
        window.location="register.html";
      </script>';
    }
  }
  else{
    echo '
    <script>
    alert("Password and Confirm password does not matched!");
    window.location="register.html";      
    </script>
    ';
  }
  
?>