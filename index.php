<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="src/css/style.css?=<?= uniqid() ?>">
   <link rel="icon" type="image/png" sizes="16x16" href="./src/img/favicon.png">
   <title>Hardware Supplies - Log in</title>
</head>
<!-- Main Page | Sign Up Page -->

<body>
   <nav>
      <a href="index.php">
         <img src="./src/img/logo.png" class="h-11" alt="">
      </a>
      <ul>
         <li><a href="#">Home</a></li>
         <li class="hidden"><a href="#">Logout</a></li>
      </ul>
      <div class="burger">
         <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
         </svg>
      </div>
   </nav>
   <div class="wrapper-outer">
      <div class="wrapper-inner">
         <form class="sign-in" action="includes/inc.signin.php" method="post">
            <h1 class="card-name">
               SIGN IN
            </h1>
            <!-- Log in Details: Input -->
            <div>
               <span>Username: </span><br>
               <input class="text" autocomplete="off" type="text" name="userId" id="userId">
            </div>
            <div>
               <span>Password: </span><br>
               <input class="text" type="password" name="password" id="password">
            </div>

            <input type="submit" value="Login" name="login" id="login">
            <a class="add-account lg:hover:underline" href="pages/register.php">Create new account</a>

         </form>
         <div class="banner">
            <img src="src/img/banner.jpg" alt="">
         </div>
      </div>
   </div>
      <footer>
         <div class="box1">
            <img class="mx-auto md:ml-0 lg:w-1/5" src="src/img/logo-w-name.png" width="70%" alt="hardware_supplies">
         </div>
      <div class="box2">
         <p><u>Quick Links</u></p>
         <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Cart</a></li>
            <li><a href="#">Register</a></li>
         </ul>
      </div>
      <div class="box3">
         <p><u>Contact us</u></p>
         <ul>
            <li><a href="#">email.email@email.com</a></li>
            <li><a href="#">09875423452</a></li>
         </ul>
      </div>
   </footer>
</body>
<script src="src/js/script.js"></script>

</html>