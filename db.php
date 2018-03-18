<?php

$con = mysqli_connect("fdb19.awardspace.net","2658166_demo","2658166_demo","2658166_demo");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

function userExist($username){
$con = mysqli_connect("fdb19.awardspace.net","2658166_demo","2658166_demo","2658166_demo");

  $query = "SELECT * FROM `users` WHERE username='$username'";
  $result = mysqli_query($con,$query) or die(mysql_error());
  $rows = mysqli_num_rows($result);
  if($rows==1)
  {
    return true;
  }
  else
  {
    return false;
  }
}

function getID($username){
$con = mysqli_connect("fdb19.awardspace.net","2658166_demo","2658166_demo","2658166_demo");

  $query = "SELECT * FROM `users` WHERE username='$username'";
  $result = mysqli_query($con,$query) or die(mysql_error());
  $rows = mysqli_num_rows($result);
  if($rows==1)
  {
    $record = $result->fetch_assoc();
    return $record['id'];
  
  }
  else{
    return "User doesn't exist!" ;
  }
}
function getUsername($id){
$con = mysqli_connect("fdb19.awardspace.net","2658166_demo","2658166_demo","2658166_demo");

  $query = "SELECT * FROM `users` WHERE id='$id'";
  $result = mysqli_query($con,$query) or die(mysql_error());
  $rows = mysqli_num_rows($result);
  if($rows==1)
  {
    $record = $result->fetch_assoc();
    return $record['username'];
  
  }
  else{
    return "User doesn't exist!" ;
  }
}

?>