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
    <link rel="stylesheet" type="text/css" href="css/comprar.css">
    <title>Document</title>
</head>
<body>
    <?php include("navbar.php"); ?>

    <script src="botones.js"></script>

    <div class="main-container">
        <div class="cards-container">

            <div class="product-card">
                <img src="https://www.knowyourmobile.com/wp-content/uploads/2021/08/current-bitcoin-logo.png" alt="">
                <div class="product-info">
                    <div>
                        <p>Bitcoin</p>
                        <p>$324,754.57</p>
                    </div>
                    <div class="compra">
                        <button id="menos" onclick="javascript: contadormenos('cantidad1')">-</button>
                        <input id="cantidad1" type="text" value="0" readonly="readonly">
                        <button id="mas" onclick="javascript: contadormas('cantidad1')">+</button>
                    </div>
                </div>
                <form method="POST">
                    <button class="primary-button add-to-cart-button" name="Bitcoin-Buy">
                        <img src="./icons/bt_add_to_cart.svg" alt="add to cart">
                        Comprar
                    </button>
                </form>
                
            </div>

            <div class="product-card">
                <img src="https://upload.wikimedia.org/wikipedia/commons/0/01/Ethereum_logo_translucent.svg" alt="">
                <div class="product-info">
                    <div>
                        <p>Ethereum</p>
                        <p>$24,449.36</p>
                    </div>
                    <div class="compra">
                        <button id="menos" onclick="javascript: contadormenos('cantidad2')">-</button>
                        <input id="cantidad2" type="text" value="0" readonly="readonly">
                        <button id="mas" onclick="javascript: contadormas('cantidad2')">+</button>
                    </div>
                </div>
                <form method="POST">
                    <button class="primary-button add-to-cart-button" name="Ethereum-Buy">
                        <img src="./icons/bt_add_to_cart.svg" alt="add to cart">
                        Comprar
                    </button>
                </form>
            </div>

            <div class="product-card">
                <img src="https://s3.cointelegraph.com/storage/uploads/view/a7872fcc56858227ffa183256a5d55e1.png" alt="">
                <div class="product-info">
                    <div>
                        <p>Cardano</p>
                        <p>$6.05</p>
                    </div>
                    <div class="compra">
                        <button id="menos" onclick="javascript: contadormenos('cantidad3')">-</button>
                        <input id="cantidad3" type="text" value="0" readonly="readonly">
                        <button id="mas" onclick="javascript: contadormas('cantidad3')">+</button>
                    </div>
                </div>
                <form method="POST">
                    <button class="primary-button add-to-cart-button" name="Cardano-Buy">
                        <img src="./icons/bt_add_to_cart.svg" alt="add to cart">
                        Comprar
                    </button>
                </form>
            </div>

            <div class="product-card">
                <img src="https://www.spectre.ai/assets/images/assets/LTC-logo.png?v=2.13" alt="">
                <div class="product-info">
                    <div>
                        <p>Litecoin</p>
                        <p>$1,507.91</p>
                    </div>
                    <div class="compra">
                        <button id="menos" onclick="javascript: contadormenos('cantidad4')">-</button>
                        <input id="cantidad4" type="text" value="0" readonly="readonly">
                        <button id="mas" onclick="javascript: contadormas('cantidad4')">+</button>
                    </div>
                </div>
                <form method="POST">
                    <button class="primary-button add-to-cart-button" name="Litecoin-Buy">
                        <img src="./icons/bt_add_to_cart.svg" alt="add to cart">
                        comprar
                    </button>
                </form>
            </div>

        </div>
    </div>
        
</body>
</html>