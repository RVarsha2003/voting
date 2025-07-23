<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="stylesheet" type="text/css" href="style.css">
</head>


<body>
  <div class="box">
<form method="post"  action="../actions/register.php"  method="post">
    
     <h1>REGISTER</h1>
    <!-- <label for="name">Name:</label> -->
    <input type="text" id="name" name="name" placeholder="  enter name" required >
    <br><br>
    <!-- <label for="mobile-no">Mobile-no:</label> -->
    <input type="number" id="mobile" name="mobile" placeholder="  enter mobile-no"  required>
    <br><br>
    <!-- <label for="password" >Password</label> -->
    <input type="password" id="password" name="password" placeholder="  enter password" required>
    <br><br>
<input type="password" id="confirmpass" name="confirmpass" placeholder="  Confirm password" required>
    <br><br>
    <label for="role"  >Select Role:</label>
        <select  name="option">
        <option  value=""> </option>
        <option value="group">Group </option>
        <option value="voter">Voter </option>
    </select>
    <br><br>
    <button type="submit">Register</button>
    <br><br>
    <p> Already have an account ? <a href="./index.php"> Login here !!</a></p>
  </form>  
  </div> 
</body>
