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
    <link rel = "stylesheet" href = "styles/register.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href = 'https://fonts.googleapis.com/css?family=IBM Plex Mono' rel = "stylesheet">
  </head>

<body>
    <?php include_once './include/header.inc'; ?>

    <?php
    if (isset($_POST["register"])) {
      $username = $_POST["username"];
      $email = $_POST["email"];
      $password = $_POST["password"];
      $confirmPassword = $_POST["confirm_password"];

      $passwordHash = password_hash($password, PASSWORD_DEFAULT);

      $errors = array();

      if (empty($username) or empty($email) or empty($password) or empty($confirmPassword) ) {
        array_push($errors, "*All inputs are requried.");
      } 
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "*Your email is invalid.");
      }
      if (strlen($password) < 8) {
        array_push($errors, "*Password must contain at least 8 characters.");
      }
      if ($password !== $confirmPassword) {
        array_push($errors, "*Password does not match.");
      }

      //Checking whether username has existed
      require_once "database.php";
      $sql = "SELECT * FROM login_register WHERE username = '$username'";
      $result = mysqli_query($conn, $sql);
      $rowCount = mysqli_num_rows($result);
      if ($rowCount > 0) {
        array_push($errors, "*Username already exists.");
      }

      //Displaying errors
      if (count($errors) > 0) {
        foreach ($errors as $error){
          echo "<div class = 'register_alert'>$error</div>";
        }
      } else {
        //inserting users' data into database
        require_once "database.php";
        $sql = "INSERT INTO login_register (username, email, password) VALUES (?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);
        $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
        if ($prepareStmt) {
          mysqli_stmt_bind_param($stmt, "sss", $username, $email, $passwordHash);
          mysqli_stmt_execute($stmt);
          echo "<div class = 'register_success'>You have registered successfully.</div>";
        } 
        else {
          die ("*Something went wrong...");
        }
      }
    }
    ?>

    <main>
        <h1 style = "color: #E67E22;" class = "register_introduction">Registration</h1>
        <p class = "register_introduction">Creating your Account below to be one of our Customers.</p>
        <form action="register.php" method="post">
            <label for="name">Username:</label><br>
            <input type="text" class = "register_form_control" name="username" placeholder="Your username" required><br><br>
            <label for="name">Email:</label><br>
            <input type="email" class = "register_form_control" name="email" placeholder="Email"><br><br>
            <label for="password">Password:</label><br>
            <input type="password" class = "register_form_control" name="password" placeholder="Password"><br><br>
            <label for="password">Confirm Password:</label><br>
            <input type="password" class = "register_form_control" name="confirm_password" placeholder="Confirm Password"><br><br>
            <input type = "submit" class = "register_button" value = "Sign Up" name = "register">
        </form>
    </main>

    <?php include_once './include/footer.inc'; ?>
</body>
</html>
