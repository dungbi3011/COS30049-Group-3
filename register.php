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

    <main>
        <h1 style = "color: #E67E22;" class = "register_introduction">Sign Up</h1>
        <p class = "register_introduction">Creating your Account below to be one of our Customers.</p>
        <form action="/create-account" method="post">
            <label for="name">Name:</label><br>
            <input type="text" id = "name" name="name" placeholder="Name"><br><br>
            <label for="name">Email:</label><br>
            <input type="email" id = "email" name="email" placeholder="Email"><br><br>
            <label for="password">Password:</label><br>
            <input type="password" id = "password" name="password" placeholder="Password"><br><br>
            <button type="submit" href = "#">Create Account</button>
        </form>
    </main>

    <?php include_once './include/footer.inc'; ?>
</body>
</html>
