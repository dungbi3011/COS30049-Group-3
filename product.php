<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link href = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel = "stylesheet" integrity = "sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin = "anonymous">
    <script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href = "styles/product.css" rel = "stylesheet">
    <link href = 'https://fonts.googleapis.com/css?family=IBM Plex Mono' rel = "stylesheet">
    <script src = "js/filter.js"></script>
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>

<body>
    <?php include_once './include/header.inc'; ?>

    <main>
        <div class="container text-center" id="recipeSearch">
            <div class="row pt-5 pb-3">
                <div class="col-sm-3 d-flex justify-content-start">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Filter
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" onclick="classFilter('All')">Show All</a></li>
                            <li><a class="dropdown-item" onclick="classFilter('Appetizer')">Appetizer</a></li>
                            <li><a class="dropdown-item" onclick="classFilter('Maincourse')">Main course</a></li>
                            <li><a class="dropdown-item" onclick="classFilter('Dessert')">Dessert</a></li>  
                        </ul>
                    </div>
                </div>
                <div class="col-sm-9 d-flex justify-content-start">
                    <input type="text" class="form-control w-75" placeholder="Seach for recipes" id="searchInput" onkeyup="myFunction()">
                </div>

            </div>
            <div class="row">
                <div class="col-sm-4 d-flex">
                    <div class="card mt-5 mb-5 Maincourse">
                        <img src="images/BeefWellingtonSpinachBacon.png" class="card-img-top h-50" alt="BeefWellington">
                        <div class="card-body">
                            <h5 class="card-title">Beef Wellington Spinach Bacon</h5>
                            <p class="card-text">A flavorful recipe of Beef Wellington. An interesting, refreshing
                                combination of spinach and beef.</p>
                            <h6><b>
                                    <p>Recipe by: Suzy Q</p>
                                </b></h6>

                        </div>
                        <div class="card-footer">
                            <a href = "cart.php" class="btn btn-primary">Buy with 2</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 d-flex">
                    <div class="card mt-5 mb-5 Maincourse">
                        <img src="images/ChickenShrimpLaksa.png" class="card-img-top h-50" alt="ChickenShrimpLaksa">
                        <div class="card-body">
                            <h5 class="card-title">Chicken and Shrimp Laksa</h5>
                            <p class="card-text">Nutty, shrimpy and acidic. One of the greatest dish for summer.</p>
                            <h6><b>
                                    <p>Recipe by: Buddha Lo</p>
                                </b></h6>
                        </div>
                        <div class="card-footer">
                            <a href = "cart.php" class="btn btn-primary">Buy with 1.23</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 d-flex">
                    <div class="card mt-5 mb-5 Maincourse">
                        <img src="images/SearedTunaTiradito.png" class="card-img-top h-50" alt="SearedTunaTiradito">
                        <div class="card-body">
                            <h5 class="card-title">Seared Tuna Tiradito</h5>
                            <p class="card-text">Sweet, sour, spicy. The dish is a combination of strong flavors
                                promoting the freshness and umami flavor of a high-grade piece of tuna.</p>
                            <h6><b>
                                    <p>Recipe by: Stephanie Izard</p>
                                </b></h6>
                        </div>
                        <div class="card-footer">
                            <a href = "cart.php" class="btn btn-primary">Buy with 2.2</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4 d-flex">
                    <div class="card mb-5 Maincourse">
                        <img src="images/EmperorsPork.png" class="card-img-top h-50" alt="EmperorsPork">
                        <div class="card-body">
                            <h5 class="card-title">Emperor's Pork</h5>
                            <p class="card-text">A warm dish with savory, sweet and eye-catching pork pieces as the
                                hightlight.</p>
                            <h6><b>
                                    <p>Recipe by: Buddha Lo</p>
                                </b></h6>

                        </div>
                        <div class="card-footer">
                            <a href = "cart.php" class="btn btn-primary">Buy with 0.5</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 d-flex">
                    <div class="card mb-5 Maincourse">
                        <img src="images/SpaghettiAlPomodoro.png" class="card-img-top h-50" alt="SpaghettiAlPomodoro">
                        <div class="card-body">
                            <h5 class="card-title">Sauce-Simmered Spaghetti al Pomodoro</h5>
                            <p class="card-text">A classic spaghetti dish, garlicky, cheesy. Being infused with tomato
                                sauce makes the dish even more flavorful.</p>
                            <h6><b>
                                    <p>Recipe by: Sarah Grueneberg</p>
                                </b></h6>
                        </div>
                        <div class="card-footer">
                            <a href = "cart.php" class="btn btn-primary">Buy with 0.42</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 d-flex">
                    <div class="card mb-5 Dessert">
                        <img src="images/HongKongMilkTeaTiramisu.png" class="card-img-top h-50"
                            alt="HongKongMilkTeaTiramisu">
                        <div class="card-body">
                            <h5 class="card-title">Hong Kong Milk Tea Tiramisu</h5>
                            <p class="card-text">A rich dessert consist of the richness from the tiramisu, a little of
                                bitterness from cocoa powder and tasting lightly sweet.</p>
                            <h6><b>
                                    <p>Recipe by: Melissa King</p>
                                </b></h6>
                        </div>
                        <div class="card-footer">
                            <a href = "cart.php" class="btn btn-primary">Buy with 0.98</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4 d-flex">
                    <div class="card mb-5 Appetizer">
                        <img src="images/CrispyRanchSmashedSweetPotatoes.png" class="card-img-top h-50" alt="CrispyRanchSmashedSweetPotatoes">
                        <div class="card-body">
                            <h5 class="card-title">Crispy Ranch Smashed Sweet Potatoes</h5>
                            <p class="card-text">Crispy, sweet potatoes paired with sour and creamy ranch makes an addicting appetizer.</p>
                            <h6><b>
                                    <p>Recipe by: How Sweet Eats</p>
                                </b></h6>
                        </div>
                        <div class="card-footer">
                            <a href = "cart.php" class="btn btn-primary">Buy with 0.19</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 d-flex">
                    <div class="card mb-5 Appetizer">
                        <img src="images/RoastedCarrotSoup.png" class="card-img-top h-50" alt="RoastedCarrotSoup">
                        <div class="card-body">
                            <h5 class="card-title">RoastedCarrotSoup</h5>
                            <p class="card-text">A hot bowl of strong carrot flavour soup, combined with coconut milk is to yearn for in freezing days.</p>
                            <h6><b>
                                    <p>Recipe by: How Sweet Eats</p>
                                </b></h6>
                        </div>
                        <div class="card-footer">
                            <a href = "cart.php" class="btn btn-primary">Buy with 0.53</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 d-flex">
                    <div class="card mb-5 Dessert">
                        <img src="images/KeyLimePieMousse.png" class="card-img-top h-50" alt="KeyLimePieMousse">
                        <div class="card-body">
                            <h5 class="card-title">Key Lime Pie Mousse</h5>
                            <p class="card-text">Refreshing taste of lime wet cream built upon layers of buttery cookies crumbles.</p>
                            <h6><b>
                                    <p>Recipe by: Lena Abraham</p>
                                </b></h6>
                        </div>
                        <div class="card-footer">
                            <a href = "cart.php" class="btn btn-primary">Buy with 0.68</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <?php include_once './include/footer.inc'; ?>

</body>
</html>