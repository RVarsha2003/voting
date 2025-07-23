<?php
session_start();
$data=$_SESSION['data'];

// -----------------access session for status 
if ($_SESSION ['status'] == 1) {
    $status= "Voted";
} else {
    $status= "Not Voted";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<!-- <a href="logout.php"><button type=submit class="logout-button" > LOGOUT </button></a> -->
<br><br>
<h1>Voting System</h1>
   <!-- --------------------group section starts here-------- -->
    
<table width="100%" border ="1">
    <tr>
        <td width="50%" align ="center">
            
        <?php
             if(isset($_SESSION['groups'])) 
                {
                $groups=$_SESSION['groups'];

                for($i=0;$i<count($groups);$i++)
        { ?>
                       <hr>
                 <h4>Group Name : <?php echo $groups [$i] ['name']; ?></h4>
                 

                 <h4>Votes : <?php echo $groups [$i] ['votes']; ?></h4>
                 
                   
                   <form method="post" action="../actions/voting.php">

<input type="hidden" name="groupvotes" value="<?php echo $groups[$i]['votes']; ?>">
<input type="hidden" name="groupid" value="<?php echo $groups[$i]['id']; ?>">
<?php
if($status == "Voted") { 
?>
<button disabled>Voted</button>
<?php
} else {
?>
<button type="submit">Vote</button>
<?php
}
?>
<hr>
</form>
        <?php  
                }
                 
             }
                    
        ?>     
             
            
        </td> 
        <!-- --------------------user section starts here-------- -->
        <td width="50%" align ="center">
            
            <h2>User Profile</h2>
            <strong> Name : <?php echo $data['name']; ?>  </strong> 
            
            <h4>mobile : <?php echo $data['mobile']; ?>  </h4>
            
            <h4>status : <?php echo $status; ?>  </h4>
            
           
        </td>
       
    </tr>
    
</table>

<a href="logout.php"><button type=submit class="logout-button" > LOGOUT </button></a>
</body>

