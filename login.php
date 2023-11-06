<?php
session_start();
if (isset($_SESSION["user"])) {
  header("Location: cart.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign In</title>
    <meta charset="utf-8">
    <meta name="keywords" content="Cryptonized Cooking Shop">
    <meta name="author" content="Tran Khai Kiet">
    <link rel="stylesheet" href="styles/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href = 'https://fonts.googleapis.com/css?family=IBM Plex Mono' rel = "stylesheet">
</head>

<body>
    <?php include_once './include/header.inc'; ?>

    <?php 
    if (isset($_POST["login"])) {
      $username = $_POST["username"];
      $password = $_POST["password"];
      require_once "database.php";
      $sql = "SELECT * FROM login_register WHERE username = '$username'";
      $result = mysqli_query($conn, $sql);
      $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
      if ($user) {
        if (password_verify($password, $user["password"])) {
          session_start();
          $_SESSION["user"] = "yes";
          header("Location: cart.php");
          die();
        }
        else {
          echo "<div class = 'login_alert'>*Password does not match.</div>";
        }
      }
      else {
        echo "<div class = 'login_alert'>*Username does not match.</div>";
      }
    }
    ?>

    <main>
      <h1 style = "color: #E67E22;" class = "login_introduction">Sign In</h1>
      <p class = "login_introduction">Login your Account to see your Cart.</p>
      <form action="login.php" method="POST">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <input class = "login_signin_button" type="submit" name = "login" value="Sign In">
      </form>
      <a href="register.php"><button>Sign Up</button></a>
    </main>

    <?php include_once './include/footer.inc'; ?>
</body>
</html>