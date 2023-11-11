<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="keywords" content="Cryptonized Cooking Shop">
    <meta name="author" content="Tran Quoc Dung">
    <link rel="stylesheet" href="styles/upload.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href = 'https://fonts.googleapis.com/css?family=IBM Plex Mono' rel = "stylesheet">
</head>

<body>
    <?php include_once './include/header.inc'; ?>

    <?php 
    if (isset($_POST["upload"])) {
        $title = $_POST["title"];
        $course = $_POST["course"];
        $desc = $_POST["desc"];
        $chef = $_POST["chef"];
        $price = $_POST["price"];
        $img = $_POST["img"];

        $errors = array();

        //Checking any empty field
        if (empty($title) or empty($course) or empty($desc) or empty($chef) or empty($price) or empty($img)) {
            array_push($errors, "*All inputs are requried.");
        }

        //Checking price value
        $float_value = (float)$price;
        if (strval($float_value) !== $price) {
            array_push($errors, "*Invalid value of Price.");
        }

        //Checking validity of image links
        if (@getimagesize($img)) {
        } else {
            array_push($errors, "*Image does not exist");
        }

        //Displaying errors
        if (count($errors) > 0) {
            foreach ($errors as $error) {
                echo "<div class = 'upload_alert'>$error</div>";
            }
        } else {
            require_once "database.php";
            $sql = "INSERT INTO nft (Title, Course, Description, Chef, Price, Image) VALUES ('$title', '$course', '$desc', '$chef', '$price', '$img')";
            $result = @mysqli_query($conn, $sql);
            if ($result) {
                echo "<div class = 'upload_success'>Uploading Recipe successfully.</div>";
                mysqli_close($conn);
            } else {
                echo "<div class = 'upload_alert'>*Uploading Recipe failed.</div>";
            }
        }
    }
    ?>

    <main>
        <h1 class = "upload_introduction">Uploading your Recipes</h1><br>
        <form action="upload.php" method="POST">

            <label for="title">Title:</label><br>
            <input type="text" id="title" name="title" placeholder="Recipe Title" required><br><br>

            <label for="course">Course:</label><br>
            <select id="course" name="course" required>
                <option value = "" default>Choose a Course</option>
                <option value = "Appetizer">Appetizer</option>
                <option value = "Main">Main</option>
                <option value = "Dessert">Dessert</option>
            </select>
            <br><br>

            <label for="desc">Description</label><br>
            <input type="text" id="desc" name="desc" placeholder="Description of the Recipe" required><br><br>

            <label for="chef">Chef:</label><br>
            <input type="text" id="chef" name="chef" placeholder="Name of Recipe Creator" required><br><br>

            <label for="price">Price (ETH):</label><br>
            <input type="text" id="price" name="price" placeholder="Price of the Recipe" required><br><br>

            <label for="img">Image source link:</label><br>
            <input type="text" id="img" name="img" placeholder="Image source link of the Recipe" required><br><br>

            <input class = "upload_button" type="submit" name = "upload" value="Upload">
        </form>
    </main>

    <?php include_once './include/footer.inc'; ?>
</body>
</html>