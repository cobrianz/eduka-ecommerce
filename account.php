<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eduka</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>

</head>

<body style="background: #ebedf1;
">
    <nav class="navbar container">
        <a href="./index.html">
            <div class="logo">
                <h1>EDUKA</h1>
            </div>
        </a>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Shop</a></li>
            <li><a href="./account.html">Account</a></li>
            <li><a href="./cart.html"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a></li>
        </ul>
        <i class="fa fa-bars"></i>
        <i class="fa fa-times"></i>
    </nav>

    <div class="account__hero container">
        <aside>
            <h1>My Profile</h1>
            <div class="account__user">
                <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                <span>
                    <h4>Brian</h4>
                    <p>briancheruiyot@gmail.com</p>
                </span>
            </div>
            <span class="aside__span">
                <i class="fa fa-user-o" aria-hidden="true"></i>
                <p>Personal Information</p>
            </span>
            <span class="aside__span">
                <i class="fa fa-credit-card-alt" aria-hidden="true"></i>
                <p>My Purchase</p>
            </span>
            <span class="aside__span">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                <p>My Orders</p>
            </span>
            <span class="aside__span">
                <i class="fa fa-sign-out" aria-hidden="true" style="color: red;"></i>
                <p><a href="./logout.html" style="color: #c27272;">Logout</a></p>
            </span>
        </aside>

        <main>
            <div id="main" class="main Personal__information">
                <div class="signup__form-container">
                    <div class="form">
                        <h3>Personal Information</h3>
                        <form action="#">
                            <label for="name">Email Address *</label>
                            <input type="email">
                            <label for="name">Name *</label>
                            <input type="text">
                            <p>Change your details below, or <a href="#">click here</a> to change your password.</p>
                            <button type="submit" class="btn">Update Account</button>
                        </form>
                    </div>
                </div>
            </div>
            <div id="main" class="main purchase__info">
                <h3>Purchased Products</h3>
                <div class="Purchased__item">
                    <img src="./assets/images/15-inch-macbook-air-2tb-midnight.png" alt="">
                    <div class="purchased__item-details">
                        <small>15-inch Macbook Air (2tb)-midnight</small>
                        <p>Ksh. 175,000</p>
                        <span>Purchased On 11/02/2024</span>
                    </div>
                </div>
            </div>

            <div id="main" class="main purchase__info">
                <h3>My orders</h3>
                <div class="Purchased__item my__orders">
                    <div class="purchased__item-details">
                        <div>Order: <b>955wertyfa65798etwg95bnch45</b></div>
                        <p>Total: Ksh. 175,000</p>
                        <span>Purchased On 11/02/2024</span>
                    </div>
                    <small><a href="#">View Order</a></small>
                </div>
            </div>

            <div id="main" class="main">
                <div class="itemDetails">
                <h3>Order: 955wertyfa65798etwg95bnch45</h3>
                <span>ID: 955wertyfa65798etwg95bnch45</span>
                <span>Payment ref: SB19S8ZD0Z</span>
                <span>Order On: 11/02/2024</span>
                <span><b>Total: Ksh. 175,000</b></span>
                <div class="Purchased__item">
                    <img src="./assets/images/15-inch-macbook-air-2tb-midnight.png" alt="">
                    <div class="purchased__item-details">
                        <small>15-inch Macbook Air (2tb)-midnight</small>
                        <div>Quantity: <b>1</b></div>
                        <p>Ksh. 175,000</p>
                    </div>
                </div>
            </div>
            </div>
        </main>
    </div>
    <!-- SERVICES SECTION -->

    <section class="container">
        <div class="services__container">
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