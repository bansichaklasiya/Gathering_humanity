<?php
$conn = mysqli_connect("localhost","root","","ngo");
$email=$_POST["email"];
  $pwd=$_POST["password"];
  $query="INSERT INTO `login_info`(`email`,`password`)
  VALUES('$email','$pwd')";
  $insert = mysqli_query($conn,$query);
  if($insert)
  {
    echo '<script>alert("Your Data Has Been Submitted")</script>';
    header('Location:user/user.html');
    exit();
  }
  else{
      echo '<script>alert(" Your Data can not be Submitted")</script>';
  }
?>

