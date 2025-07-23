<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="stylesheet" type="text/css" href="style.css">
  

  </head>


<body>
  <div class="box">
<form method="post" action="/voting/actions/login.php"  >
    <h2>Welcome to Online Voting Syestem </h2>
<h2 id="mainHeading" >
<?php echo file_get_contents("../ajax/heading.txt"); ?>
</h2>

    <h1>LOGIN</h1>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" placeholder="enter name" required >
    <br><br>
    <label for="mobile-no">Mobile-no:</label>
    <input type="number" id="mobile" name="mobile" placeholder="enter mobile-no"  required>
    <br><br>
    <label for="password" >Password</label>
    <input type="password" id="password" name="password" placeholder="enter password" required>
    <br><br>

    <label for="role" >Select Role:</label>
        <select name="option">
        <option value=""> </option>
        <option value="group">Group </option>
        <option value="voter">Voter </option>
    </select>
    <br><br>
    <button type="submit">Submit</button>
    <br><br>
    <p> Dont have an account ? <a href="./registration.php"> Register now !!</a></p>
  
  </form>  
  <script src="../ajax/update.js"></script> 
</div>
</body>
