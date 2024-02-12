<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eduka</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>

</head>

<body>
    <nav class="navbar container">
        <a href="./index.html">
            <div class="logo">
                <h1>EDUKA</h1>
            </div>
        </a>
        <ul>
            <li><a href="<? = ROOT_URL ?>">Home</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="login.php" class="btn">Login</a></li>
        </ul>
        <i class="fa fa-bars"></i>
        <i class="fa fa-times"></i>
    </nav>
    <div class="hero container">
        <h2>Unleash <strong class="text__stroke">Innovation</strong> <br> in Every <strong
                class="text__stroke">Byte</strong></h2>
        <span>Explore a World of Cutting-Edge Products</span>
        <a href="./shop.html"> <button type="button" class="btn hero__btn">Shop Now</button>
        </a>
    </div>

    <!--    CATEGORIES   -->

    <section class="section__container container">
        <div class="category__title">
            <span>Shop by Categories</span>
            <span>Show all</span>
        </div>
        <div class="categories">
            <a href="#">
                <img src="./assets/images/watches-category.png" alt="">
                <span>Watches</span>
            </a>
            <a href="#">
                <img src="./assets/images/tv-home-category.png" alt="">
                <span>TV and Home</span>
            </a>
            <a href="#">
                <img src="./assets/images/ipads-category.png" alt="">
                <span>Ipads</span>
            </a>
            <a href="#">
                <img src="./assets/images/accessories-category.png" alt="">
                <span>Accessories</span>
            </a>
            <a href="#">
                <img src="./assets/images/laptops-category.png" alt="">
                <span>Laptops</span>
            </a>
            <a href="#">
                <img src="./assets/images/phones-category.png" alt="">
                <span>Phones</span>
            </a>
        </div>
    </section>


    <!-- NEW COLLECTION SECTION -->

    <section class="container collection__container">
        <div class="title section__title">
            New Collections
        </div>
        <div class="section__subtitle">
            <p>Showing <span>1</span> - <span> 3 </span> of <span>50</span></p>
        </div>
        <div class="new__collection">
            <div class="collection ">
                <img src="./assets/images/apple-watch-series-9-aluminum.png" alt="">
                <span>Apple Ipad Air 256gb Purple</span>
                <p class="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque, impedit?</p>
                <small>ksh. <b>120,500</b></small>
            </div>
            <div class="collection ">
                <img src="./assets/images/apple-iphone-15-pro-max-256gb-natural-titanium.png" alt="">
                <span>Apple Iphone 15-pro max 256gb Natural Titanium</span>
                <p class="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque, impedit?</p>
                <small>ksh. <b>112,500</b></small>
            </div>
            <div class="collection ">
                <img src="./assets/images/apple-tv-4k-wifi.png" alt="">
                <span>Apple tv 4k wifi</span>
                <p class="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque, impedit?</p>
                <small>ksh. <b>13,900</b></small>
            </div>
            <div class="collection ">
                <img src="./assets/images/airpods-max.png" alt="">
                <span>Airpods Max</span>
                <p class="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque, impedit?</p>
                <small>ksh. <b>9,999</b></small>
            </div>
        </div>
        <div class="page__counter">
            <strong class="left"><img src="./assets/icons/arrow-left.svg" alt=""></strong>
            <p>page <span>1</span> Of <span>5</span></p>
            <strong><img src="./assets/icons/arrow-right.svg" alt=""></strong>
        </div>
    </section>

    <!-- FEATURES DEALS SECTION -->

    <section class="container">
        <h2 class="title featured__title">Deals of the Month</h2>
        <div class="featured__container">
            <div class="featured__left">
                <p>
                    Get ready for a shopping experience like never before with our Deals of the Month! <br>
                    Every purchase comes with exclusive perks and offers, making this month a celebration <br>
                    of savvy choices and amazing deals. DOn't miss out!!
                </p>
                <div class="featured__timer">
                    <strong>
                        <span>7</span>
                        <small>Days</small>
                    </strong>
                    <strong>
                        <span>10</span>
                        <small>Hours</small>
                    </strong>
                    <strong>
                        <span>8</span>
                        <small>Mins</small>
                    </strong>
                    <strong>
                        <span>7</span>
                        <small>Sec</small>
                    </strong>
                </div>
                <a href="#"><button class="btn">View Products <img src="./assets/icons/arrow-narrow-right.svg"
                            alt=""></button></a>
            </div>
            <div class="featured__right">
                <img src="./assets/images/image-4.png" alt="">
            </div>
        </div>
    </section>


    <!-- SERVICES SECTION -->

    <section class="container shop__services">
        <div class="services__container ">
            <div class="service">
                <span><i class="fa fa-truck" aria-hidden="true"></i></span>
                <h3>Free Shipping</h3>
                <small>Free Shipping for orders above ksh. 15,000</small>
            </div>
            <div class="service">
                <span><i class="fa fa-usd" aria-hidden="true"></i></span>
                <h3>Money Guarantee</h3>
                <small>Within 30 days for an exchange</small>
            </div>
            <div class="service">
                <span><i class="fa fa-headphones" aria-hidden="true"></i></span>
                <h3>Online Support</h3>
                <small>24 hours a day, 7 days a week</small>
            </div>
            <div class="service">
                <span><i class="fa fa-credit-card-alt" aria-hidden="true"></i></span>
                <h3>Flexible Payment</h3>
                <small>Pay with multiple choices</small>
            </div>
        </div>
    </section>

    <!-- FOOTER SECTION -->

    <footer>
        <h1>EDUKA</h1>
        <p>&copy;Eduka. All rights are reserved</p>
        <div class="social__icons">
            <a href="#"><img src="./assets/icons/facebook.svg" alt=""></a>
            <a href="#"><img src="./assets/icons/instagram.svg" alt=""></a>
            <a href="#"><img src="./assets/icons/twitter.svg" alt=""></a>
        </div>
    </footer>

    <script src="./app.js"></script>
</body>

</html>