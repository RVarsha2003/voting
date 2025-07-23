<?php
session_start();
include ('connect.php');


//access the data from login page 

$name = $_POST['name'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$option = $_POST['option'];

//   first it checks if the user has already voted
$checkStatus = "SELECT status FROM userdata WHERE name = '$name' AND mobile = '$mobile' AND password = '$password' AND category = '$option'";
$statusResult = mysqli_query($conn, $checkStatus);

if (mysqli_num_rows($statusResult) > 0) {
    $user = mysqli_fetch_assoc($statusResult);
    if ($user['status'] == 1) {
        echo '<script>
            alert("You have already voted!");
            window.location = "../main/index.php";
    </script>';
        exit();
    }
}



$sql = " select * from userdata where name ='$name' and mobile = '$mobile' and password = '$password' and category = '$option'"; ;
$result = mysqli_query($conn,$sql); 


if( mysqli_num_rows($result) > 0)
{
    $sql = "select name,votes,id from userdata where category = 'group' ";
    $resultgroup = mysqli_query($conn,$sql);
    if(mysqli_num_rows($resultgroup) > 0)
    {
        $groups=mysqli_fetch_all($resultgroup,MYSQLI_ASSOC);

        $_SESSION['groups'] = $groups;
    }
   // fetch single user data the logged in person  // user starts gere //
    $data = mysqli_fetch_array($result);
    $_SESSION['id'] = $data['id'];
    $_SESSION['status'] = $data['status'];
    $_SESSION['data'] = $data;
    echo '<script>
        window.location="../main/dashboard.php";
      </script>';

  
}
else
{ echo '<script>
    alert("invalid credentials");
    window.location="../main/index.php";
      </script>';
}
    


//




?>