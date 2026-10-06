<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <title>Document</title>
</head>
<body>
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
                <input type="email" id="email" name="email" placeholder="nome@esempio.it" >
            </div>

            <!-- Campo Password -->
            <div class="form-group">
                <label for="password">Password</label>
                <input type="text" id="password" name="password"  >
            </div>

            <!-- Pulsante Accedi -->
            <button type="submit" class="btn-submit">Accedi</button>
        </form>
    </div>
</body>
</html>