<?php 
require_once "./includes/config_session.inc.php";
require_once "./includes/signup_view.inc.php";
require_once "./includes/login_view.inc.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <title>Document</title>
</head>
<body>
    <?php
    outputInfo()
    ?>
     <?php 
     
     
if (!isset($_SESSION["user_id"])) { ?>
     <div class="login-card">
        

        <h2>Registrati</h2>
        <form action="./includes/signup.inc.php" method="POST">
             <!-- Campo username -->
            <div class="form-group">
                <label for="username">Username</label>
                <input type="username" id="username" name="username" placeholder="Mario Rossi" >
            </div>

            <!-- Campo Email -->
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" placeholder="nome@esempio.it" >
            </div>

            <!-- Campo Password -->
            <div class="form-group">
                <label for="password">Password</label>
                <input type="text" id="password" name="password"  >
            </div>

            <!-- Pulsante Accedi -->
            <button type="submit" class="btn-submit">Accedi</button>
        </form>
        <?php 
        checkSignupErrors()
        ?>
    </div>
 <?php } ?>

     <div class="login-card">
        <h2>Login</h2>
        <form action="./includes/login.inc.php" method="POST">
             <!-- Campo username -->
           

            <!-- Campo Email -->
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" placeholder="nome@esempio.it" >
            </div>

            <!-- Campo Password -->
            <div class="form-group">
                <label for="password">Password</label>
                <input type="text" id="password" name="password"  >
            </div>

            <!-- Pulsante Accedi -->
            <button type="submit" class="btn-submit">Accedi</button>
        </form>
       <?php 
        checkLoginErrors()
        ?>
    </div>
         <div class="login-card">
        <h2>Logout</h2>
        <form action="./includes/logout.inc.php" method="POST">
      
      
            <button type="submit" class="btn-submit">Logout</button>
        </form>
 
    </div>
</body>
</html>