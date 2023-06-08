<?php
$conn = mysqli_connect("localhost","root","","ngo");
$ename=$_POST["ename"];
  $elocation=$_POST["elocation"];
  $ediscription=$_POST["ediscription"];
  $sdate=$_POST["sdate"];
  $edate=$_POST["edate"];
  $eparticipate=$_POST["eparticipate"];
  $evolunteer=$_POST["evolunteer"];
  $query="INSERT INTO `event_info`(`ename`,`elocation`,`ediscription`,`sdate`,`edate`,`eparticipate`,`evolunteer`)
  VALUES('$ename','$elocation','$ediscription','$sdate','$edate','$eparticipate','$evolunteer')";
  $insert = mysqli_query($conn,$query);
  if($insert)
  {
      echo '<script>alert("Add Event Successfully!!")</script>';
  }
  else{
      echo'<script>alert("Your Data can not be Submitted")</script>';
  }
?>