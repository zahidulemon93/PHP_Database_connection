<?php 

  require_once 'dbconfig.php';
  
if(isset($_POST['conferenceRoom']))
    $conferenceRoom = 1;
else
    $conferenceRoom = 0;

if(isset($_POST['FunZone']))
    $FunZone = 1;
else
    $FunZone = 0;

if(isset($_POST['MeetingRoom']))
    $MeetingRoom = 1;
else
    $MeetingRoom = 0;

if(isset($_POST['workingArea']))
    $workingArea = 1;
else
    $workingArea = 0;

if(isset($_POST['parking']))
    $parking = 1;
else
    $parking = 0;



  $query=mysqli_query($connection,"INSERT INTO $tbl_name (Name,Phone,Email,Address,Designation,BloodGroup,Id,ExpireDate,parking,workingArea,MeetingRoom,conferenceRoom,FunZone) value ('$_POST[Name]','$_POST[Phone]','$_POST[Email]','$_POST[Address]','$_POST[Designation]','$_POST[BloodGroup]','$_POST[Id]','$_POST[ExpireDate]','$parking','$workingArea','$MeetingRoom','$conferenceRoom','$FunZone')");

?>

