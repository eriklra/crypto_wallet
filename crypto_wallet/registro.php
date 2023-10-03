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

            <form action="registra.php" class="form">
                <label for="email"
                class="label">Ingresa un correo electronico</label>
                <input type="text" 
                id="email"
                placeholder="example@email.com"
                class="input iput_email" name="email">

                <label for="password"
                class="label">Ingresa una contraseña</label>
                <input type="password" 
                id="new-password"
                placeholder="*********"
                class="input iput_password" name="pass">

                <label for="email"
                class="label">Ingresa tu nombre</label>
                <input type="text" 
                id="nombre"
                placeholder="Nombre"
                class="input iput_email" name="nom">

                <label for="email"
                class="label">Ingresa tu apellido paterno</label>
                <input type="text" 
                id="apellido"
                placeholder="ApellidoP"
                class="input iput_email" name="ape">

                <label for="email"
                class="label">Ingresa tu número de celular</label>
                <input type="text" 
                id="celular"
                placeholder="00-00-00-00-00"
                class="input iput_email" name="cel">

                <input type="submit"
                value="Registrarse" 
                class="primary-button login-button">
            </form>
            <form action="login.php" class="form">
                <button class="secondary-button signup-button">Salir del registro</button>
            </form>
        </div>
    </div>
</body>
</html>