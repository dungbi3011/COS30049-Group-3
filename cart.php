<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Cart</title>
        <meta charset="utf-8">
        <meta name="keywords" content="Cryptonized Cooking Shop">
        <meta name="author" content="Tran Quoc Dung">
        <link href = "styles/cart.css" rel = "stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <link href = 'https://fonts.googleapis.com/css?family=IBM Plex Mono' rel = "stylesheet">
    </head>

    <body>
    <?php include_once './include/header.inc'; ?>

        <main>
            <div class = "container">   
                <div class = "cart_wallet">
                    <h2 class = "cart_wallet_text">Your Wallet</h2>
                    <span>You are currently having *** ETH.</span>
                </div>

                <div class = "cart_purchase">
                    <h2 class = "cart_purchase_text">Your Purchase</h2><br>

                    <table>
                        <tr>
                            <th scope = "col">Product</th>
                            <th scope = "col">Image</th>
                            <th scope = "col">Description</th>
                            <th scope = "col">Chef</th>
                            <th scope = "col">Price</th>
                        </tr>
                        <tr>
                            <td>Emperor's Pork</td>
                            <td><img src = "images/EmperorsPork.png"></td>
                            <td>A warm dish with savory, sweet and eye-catching pork pieces as the hightlight.</td>
                            <td>Buddha Lo</td>
                            <td>0.5</td>
                        </tr>
                    </table>

                    <p class = "cart_purchase_text">Confirm your Purchase:&emsp;<a href="login.php"><button id = "cart_buy">Buy</button></a><a href="product.php"><button id = "cart_cancel" style = "background-color: #FDF2E9;">Cancel</button></a></p>
                </div>

            </div>  
        </main>

        <?php include_once './include/footer.inc'; ?>
        
    </body>
</html>