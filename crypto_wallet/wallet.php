<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/root.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/comprar.css">
    <link rel="stylesheet" type="text/css" href="css/productos.css">
    
</head>
<body>
    
    <?php include("navbar.php"); ?>

    <section class="main-container">
        <div class="cards-container">
            <div class="product-card">
                <img src="https://upload.wikimedia.org/wikipedia/commons/0/01/Ethereum_logo_translucent.svg" alt="">
                <div class="product-info informacion">
                    <p>Etherium</p>
                    <div>
                        
                         <?php 
                            //include("valida_monedas.php");
                            $cantidad=moneda1();
                            print("<p>$cantidad</p>");
                          ?>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <img src="https://www.knowyourmobile.com/wp-content/uploads/2021/08/current-bitcoin-logo.png" alt="">
                <div class="product-info informacion">
                    <p>Bitcoin</p>
                    <div>
                        
                        <?php
                            $cantidad1=moneda2();
                            print("<p>$cantidad1</p>");
                          ?>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <img src="https://www.spectre.ai/assets/images/assets/LTC-logo.png?v=2.13" alt="">
                <div class="product-info informacion">
                    <p>Litecoin</p>
                    <div>
                        <?php 
                            $cantidad2=moneda3();
                            print("<p>$cantidad2</p>");
                          ?>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <img src="https://s3.cointelegraph.com/storage/uploads/view/a7872fcc56858227ffa183256a5d55e1.png" alt="">
                <div class="product-info informacion">
                    <p>Cardano</p>
                    <div>
                        
                        <?php 
                            $cantidad3=moneda4();
                            print("<p>$cantidad3</p>");
                          ?>
                    </div>
                </div>
            </div>


        </div>
    </section>
</body>
</html>