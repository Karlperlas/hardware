<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../src/css/style.css?=<?= uniqid() ?>">
   <link rel="icon" type="image/png" sizes="16x16" href="../src/img/favicon.png">
   <title>Hardware Supplies - Log in</title>
</head>
<body>
   <nav>
      <a href="../index.php">
         <img src="../src/img/logo.png" class="h-11" alt="">
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
   <div class="wrapper">
      <form class="register my-12 relative" action="../includes/inc.register.php" method="POST">
         <h1 class="lg:text-5xl text-4xl font-bold">Registration</h1>
         <h1 class="lg:text-3xl text-2xl font-bold">Personal Information</h1>
         <div class="field">
            <span>First Name: </span>
            <input class="textbox" autocomplete="off" type="text" name="userId" id="userId">
         </div>
         <div class="field">
            <span>Middle Name(Optional): </span>
            <input class="textbox" autocomplete="off" type="text" name="userId" id="userId">
         </div>
         <div class="field">
            <span>Last Name: </span>
            <input class="textbox" autocomplete="off" type="text" name="userId" id="userId">
         </div>
         <div class="field">
            <span>Birth Date: </span>
            <!-- <input class="text" autocomplete="off" type="text" name="userId" id="userId"> -->
            <div>
               <select name="month" id="month" >
                  <option value="" disabled selected>Month</option>
                  <option value="January">January</option>
                  <option value="February">February</option>
                  <option value="March">March</option>
                  <option value="April">April</option>
                  <option value="May">May</option>
                  <option value="June">June</option>
                  <option value="July">July</option>
                  <option value="August">August</option>
                  <option value="September">September</option>
                  <option value="October">October</option>
                  <option value="November">November</option>
                  <option value="December">December</option>
               </select>
               <select name="day" id="day" >
                  <option value="" disabled selected>Day</option>
                  <option value="1"></option>
                  <option value="2"></option>
                  <option value="3"></option>
                  <option value="4"></option>
                  <option value="5"></option>
                  <option value="6"></option>
                  <option value="7"></option>
                  <option value="8"></option>
                  <option value="9"></option>
                  <option value="10"></option>
                  <option value="11"></option>
                  <option value="12"></option>
                  <option value="13"></option>
                  <option value="14"></option>
                  <option value="15"></option>
                  <option value="16"></option>
                  <option value="17"></option>
                  <option value="18"></option>
                  <option value="19"></option>
                  <option value="20"></option>
                  <option value="21"></option>
                  <option value="22"></option>
                  <option value="23"></option>
                  <option value="24"></option>
                  <option value="25"></option>
                  <option value="26"></option>
                  <option value="27"></option>
                  <option value="28"></option>
                  <option value="29"></option>
                  <option value="30"></option>
                  <option value="31"></option>
               </select>
               <input class="textbox" autocomplete="off" type="text" name="year" id="year" placeholder="Year">
            </div>
         </div>
         <div class="field">
            <span>Age: </span>
            <input class="textbox" autocomplete="off" type="text" name="userId" id="userId">
         </div>
         <div class="field">
            <span>Gender: </span>
            <div>
               <select class="w-2/5" name="gender" id="">
                  <option value="" disabled selected>Choose gender</option>
                  <option value="male">Male</option>
                  <option value="femail">Female</option>
                  <option value="other">Other</option>
               </select>
            </div>
         </div>
         <div class="field">
            <span>Contact Number: </span>
            <input class="text" autocomplete="off" type="text" name="userId" id="userId">
         </div>
         <div class="w-11/12 flex justify-end">
            <button class="text-black hover:text-white bg-amber-800 hover:bg-amber-900 py-2 px-3 rounded-md">NEXT</button>
         </div>
         
      </form>
   </div>
         
   <footer>
      <div class="box1">
         <img class="mx-auto md:ml-0 lg:w-1/5" src="../src/img/logo-w-name.png" width="70%" alt="hardware_supplies">
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
</html>