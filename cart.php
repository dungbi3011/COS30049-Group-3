<?php
    if(array_key_exists("buy", $_POST)) { 
        buy(); 
    } 
    else if(array_key_exists("cancel", $_POST)) { 
        cancel(); 
    } 
    function buy() { 
        require_once "database.php";
        session_start();
        if (isset($_SESSION["user"])) {
            require_once "login.php";
            $username = $_SESSION["username"];
            $sql = "
            INSERT INTO orders (user_id, ID, order_date) VALUES (log.user_id, n.ID, DATETIME)
            JOIN login_register log ON log.user_id = user_id
            JOIN nft n ON n.ID = ID
            WHERE log.username = $username
            ";
            if (mysqli_query($conn, $sql)) {
                echo "Transaction Confirmed.";
                mysqli_close($conn);
                header("Location: profile.php"); 
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
        else {
            header("Location: login.php");
        }
    } 
    function cancel() { 
        session_start();
        session_destroy();
        header("Location: login.php");
    }
?> 

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

                    <form method = "post">
                        <p class = "cart_purchase_text">Confirm your Purchase:&emsp;
                            <a href = "profile.php"><input type = "submit" id = "cart_buy" class = "button" name = "buy" value = "Buy"></a>
                            <a href = "product.php"><input type = "submit" id = "cart_cancel" class = "button" name = "cancel" value = "Cancel"></a>
                        </p>
                    </form>
                </div>

            </div>  
        </main>

        <?php include_once './include/footer.inc'; ?>
        
    </body>
</html>