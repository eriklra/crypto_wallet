<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/root.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
</head>
<body>
    <?php include("sesionON.php");?>
    <nav>
        <img src="./icons/icon_menu.svg" alt="menu" class="menu">
        <div class="navbar-left">
            <img src="./logos/logo_yard_sale.svg" alt="logo" class="logo">
            <ul>
                <li>
                    <a href="menuPrincipal.php">Inicio</a>
                </li>
                <li>
                    <a href="comprar.php">Comprar</a>
                </li>
                <li>
                    <a href="wallet.php">Wallet</a>
                </li>
        </div>
        <div class="navbar-right">
            <ul>
                <li class="navbar-email">
                <?php echo $usuario ?>
                </li>
                <li class="navbar-shopping-cart">
                    <img src="./icons/icon_shopping_cart.svg" alt="shopping cart">
                    <?php 
                         include("valida_monedas.php");
                          $numMon=monedasAc();
                            print("<div>$numMon</div>");
                     ?>
                   
                </li>
                <li>
                    <form method="POST" >
                        <input class="primary-button" type="submit" value="Cerrar sesión" name="log-out">
                    </form>
                </li>
            </ul>
            
        </div>
    </nav>
</body>
</html>