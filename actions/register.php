<?php 
include ('connect.php');

//access the data from register page 

$name = $_POST['name'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$confirmpass = $_POST['confirmpass'];
$option = $_POST['option'];

//password not matched
if($password != $confirmpass){
echo '<script>
    alert("Passwords do not match");
    window.location="../main/registration.php";
      </script>';
}
//else insert into database
else {

$sql =" insert into userdata (name,mobile,password,category,status,votes) values ('$name','$mobile','$password','$option',0,0)";

$result = mysqli_query($conn,$sql);

if($result)
{
    echo '<script>
    alert("Registration successful");
    window.location="../main/index.php";
      </script>';
}



    


}

?>