<?php
session_start();
include ('connect.php');

$votes= $_POST['groupvotes'];
$tatalvotes = $votes+1;

$gid=$_POST['groupid'];
$uid=$_SESSION['id'];

$updatevotes=mysqli_query($conn,"update userdata set votes='$tatalvotes' where id='$gid'");
$updatestatus=mysqli_query($conn,"update userdata set status=1 where id='$uid'");

if($updatevotes && $updatestatus)
{
$getgroups = mysqli_query($conn,"select name,votes,id from userdata where category= 'group' ");
$groups=mysqli_fetch_all($getgroups,MYSQLI_ASSOC);
$_SESSION['groups']= $groups;
$_SESSION['status']= 1;
echo '<script>
    alert("Voting successful");
    window.location="../main/dashboard.php";
      </script>';

    
}
else
{
    echo '<script>
    alert("technical error");
    window.location="../main/dashboard.php";
      </script>';
}



?>