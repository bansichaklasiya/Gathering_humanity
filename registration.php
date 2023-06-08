<?php
$conn = mysqli_connect("localhost","root","","ngo");
$name=$_POST["name"];
  $user=$_POST["user"];
  $email=$_POST["email"];
  $mobile=$_POST["mobile"];
  $pwd=$_POST["pwd"];
  $cpwd=$_POST["cpwd"];
  $gender=$_POST["gender"];
  $query="INSERT INTO `registration_info`(`name`,`user`,`email`,`mobile`,`pwd`,`cpwd`,`gender`)
  VALUES('$name','$user','$email','$mobile','$pwd','$cpwd','$gender')";
  $insert = mysqli_query($conn,$query);
  if($insert)
  {
      echo" Your Registration is Successfully completed ";
  }
  else{
      echo"sorry! there is some problem";
  }
?>