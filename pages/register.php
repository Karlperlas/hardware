<!DOCTYPE html>
<html lang="en">
<?php
   include '../includes/head.php';
?>
<body>
   <h1>Sing Up</h1>
<form class="sign-in" action="includes/signin.php" method="post">
      <img src="./src/img/logo.png" width="55%" alt="hardware_supplies">
      <!-- Log in Details: Input -->
      <div>
         <span>Username: </span><br>
         <input type="text" name="userId" id="userId">
      </div>
      <div>
         <span>Password: </span><br>
         <input type="text" name="password" id="password">
      </div>

      <input type="submit" value="Login" id="login">
      <a href="pages/register.php">Register a new account</a>
   </form>
</body>
</html>