<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" type="text/css" href="css/root.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class = "login">
        <div class = "form-container">
            <img src="logos/logo_yard_sale.svg" alt="logo"
            class="logo">

            <form action="validar_cuenta.php" class="form">
                <label for="email"
                class="label">Email address</label>
                <input type="text" 
                id="email"
                placeholder="example@email.com"
                class="input iput_email" name="em">

                <label for="password"
                class="label">Password</label>
                <input type="password" 
                id="new-password"
                placeholder="*********"
                class="input iput_password" name="contr">

                <input type="submit"
                value="Login" 
                class="primary-button login-button">
            </form>
            <form action="registro.php" class="form">
                <button class="secondary-button signup-button">Sign up</button>
            </form>
        </div>
    </div>
</body>
</html>