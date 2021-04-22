<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mom's Favourite Market</title>
    <link rel="shortcut icon" href="Images/logo.png">

    <!--Bootstrap CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    

    <link rel="stylesheet" href="CSS/main.css">
    <link rel="stylesheet" href="CSS/cartStyle.css">
    <script src="JS/cartScript.js"></script>
    
    <!--Icons from fontawesome website is implemented-->
    <script src="https://kit.fontawesome.com/9cec6e31d9.js" crossorigin="anonymous"></script>

</head>

<body>

    <!--Using tutourial 3 Material as well as bootstrap and W3school as resource-->
    <header>
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="index.html"><img src="Images/logo.png" class="img-fluid"
                    alt="Responsive image"><span id="title">Mom's Favourite Market</span>
            </a>
            <!--LINK TO MAIN PAGE-->
            <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse"
                data-target="#main-navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="main-navigation">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="index.html" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Aisles
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="Dairy&Eggs_Relevance.html">Dairy & Eggs</a></li>
                            <li><a class="dropdown-item" href="F&V_Relevance.html">Fruits & Vegetables</a></li>
                            <li><a class="dropdown-item" href="Bakery_Relevance.html">Bakery</a></li>
                            <li><a class="dropdown-item" href="Butchery_Relevance.html">Butchery</a></li>
                            <li><a class="dropdown-item" href="Pantry_Relevance.html">Non-Perishable Food</a></li>
                            <li><a class="dropdown-item" href="Frozen_Relevance.html">Frozen Food</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="WeeklyDeals.html" class="nav-link">Weekly Deals!</a>
                    </li>
                    <li class="nav-item">
                        <a href="environment1.html" class="nav-link">Environment</a>
                    </li>
                    <li class="nav-item">
                        <a href="careers.html" class="nav-link">Careers</a>
                    </li>
                    <li class="nav-item">
                        <a href="About us.html" class="nav-link">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="loginpage.html" class="nav-link"><i class="far fa-user-circle fa-lg"></i> Sign in</a>
                    </li>
        
                    <li class="nav-item">
                        <a href="Cart.html" class="nav-link"><i class="fas fa-shopping-cart fa-lg"></i></a>
                    </li>
                </ul>
            </div>
        </nav>

    </header>