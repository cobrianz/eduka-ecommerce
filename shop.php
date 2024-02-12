<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eduka</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>

</head>

<body style="background: #ebedf1;">
    <nav class="navbar container">
        <a href="<?= ROOT_URL ?>">
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

    <!-- SHOP HERO -->

    <div class="shop__container container">
        <strong class="aside__toggler"><img src="./assets/icons/arrow-right.svg" alt=""></strong>
        <aside class="shop__aside">
            <h3>Product Categories</h3>
            <span>
                <input type="checkbox" name="" id="">
                <label>Watches</label>
            </span>
            <span>
                <input type="checkbox" name="" id="">
                <label>TV & Home</label>
            </span>
            <span>
                <input type="checkbox" name="" id="">
                <label>Ipads</label>
            </span>
            <span>
                <input type="checkbox" name="" id="">
                <label>Accessories</label>
            </span>
            <span>
                <input type="checkbox" name="" id="">
                <label>Laptops</label>
            </span>
            <span>
                <input type="checkbox" name="" id="">
                <label>Phones</label>
            </span>
            <div class="shop__sort">
                <h3>Sort By</h3>
                <span>
                    <input type="radio" name="" id="">
                    <label>Latest</label>
                 </span>
                <span>
                    <input type="radio" name="" id="">
                    <label>Oldest</label>
                 </span>
            </div>
        </aside>
        <main class="shop__items">
            <div class="section__subtitle">
                <p>Showing <span>1</span> - <span> 3 </span> of <span>50</span></p>
            </div>
            <div class="new__collection shop__collection">
                <div class="collection shop__collection-item">
                    <img src="./assets/images/apple-watch-series-9-aluminum.png" alt="">
                    <span>Apple Ipad Air 256gb Purple</span>
                    <p class="description">Lorem ipsum dolor, sit amet consectetur</p>
                    <small>ksh. <b>120,500</b></small>
                </div>
                <div class="collection shop__collection-item">
                    <img src="./assets/images/apple-iphone-15-pro-max-256gb-natural-titanium.png" alt="">
                    <span>Apple Iphone 15-pro max 256gb Natural Titanium</span>
                    <p class="description">Lorem ipsum dolor, sit amet consectetur</p>
                    <small>ksh. <b>112,500</b></small>
                </div>
                <div class="collection shop__collection-item">
                    <img src="./assets/images/apple-tv-4k-wifi.png" alt="">
                    <span>Apple tv 4k wifi</span>
                    <p class="description">Lorem ipsum dolor, sit amet consectetur</p>
                    <small>ksh. <b>13,900</b></small>
                </div>
                <div class="collection shop__collection-item">
                    <img src="./assets/images/airpods-max.png" alt="">
                    <span>Airpods Max</span>
                    <p class="description">Lorem ipsum dolor, sit amet consectetur</p>
                    <small>ksh. <b>9,999</b></small>
                </div>
                <div class="collection shop__collection-item">
                    <img src="./assets/images/apple-watch-series-9-aluminum.png" alt="">
                    <span>Apple Ipad Air 256gb Purple</span>
                    <p class="description">Lorem ipsum dolor, sit amet consectetur</p>
                    <small>ksh. <b>120,500</b></small>
                </div>
                <div class="collection shop__collection-item">
                    <img src="./assets/images/apple-iphone-15-pro-max-256gb-natural-titanium.png" alt="">
                    <span>Apple Iphone 15-pro max 256gb Natural Titanium</span>
                    <p class="description">Lorem ipsum dolor, sit amet consectetur</p>
                    <small>ksh. <b>112,500</b></small>
                </div>
                <div class="collection shop__collection-item">
                    <img src="./assets/images/apple-tv-4k-wifi.png" alt="">
                    <span>Apple tv 4k wifi</span>
                    <p class="description">Lorem ipsum dolor, sit amet consectetur</p>
                    <small>ksh. <b>13,900</b></small>
                </div>
                <div class="collection shop__collection-item">
                    <img src="./assets/images/airpods-max.png" alt="">
                    <span>Airpods Max</span>
                    <p class="description">Lorem ipsum dolor, sit amet consectetur</p>
                    <small>ksh. <b>9,999</b></small>
                </div>
                <div class="collection shop__collection-item">
                    <img src="./assets/images/apple-watch-series-9-aluminum.png" alt="">
                    <span>Apple Ipad Air 256gb Purple</span>
                    <p class="description">Lorem ipsum dolor, sit amet consectetur</p>
                    <small>ksh. <b>120,500</b></small>
                </div>
                <div class="collection shop__collection-item">
                    <img src="./assets/images/apple-iphone-15-pro-max-256gb-natural-titanium.png" alt="">
                    <span>Apple Iphone 15-pro max 256gb Natural Titanium</span>
                    <p class="description">Lorem ipsum dolor, sit amet consectetur</p>
                    <small>ksh. <b>112,500</b></small>
                </div>
                <div class="collection shop__collection-item">
                    <img src="./assets/images/apple-tv-4k-wifi.png" alt="">
                    <span>Apple tv 4k wifi</span>
                    <p class="description">Lorem ipsum dolor, sit amet consectetur</p>
                    <small>ksh. <b>13,900</b></small>
                </div>
                <div class="collection shop__collection-item">
                    <img src="./assets/images/airpods-max.png" alt="">
                    <span>Airpods Max</span>
                    <p class="description">Lorem ipsum dolor, sit amet consectetur</p>
                    <small>ksh. <b>9,999</b></small>
                </div>
            </div>
            <div class="page__counter">
                <strong class="left"><img src="./assets/icons/arrow-left.svg" alt=""></strong>
                <p>page <span>1</span> Of <span>5</span></p>
                <strong><img src="./assets/icons/arrow-right.svg" alt=""></strong>
            </div>
    
        </main>
    </div>
    
    <!-- SERVICES SECTION -->

    <section class="container">
        <div class="services__container shop__services">
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