<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- Swiper css link -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>

    <!-- font Awesome CDN link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom File css -->
    <link rel="stylesheet" href="css/style.css" />



</head>
<body>
    
<!-- Header Section Starts -->
<section class="header">
    <a href="home.php" class="logo">Travel.</a>

    <nav class="navbar">
        <a href="home.php">Home</a>
        <a href="about.php">About</a>
        <a href="package.php">Package</a>
        <a href="book.php">Book</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>
</section>
<!-- Heeder Section End -->

<!-- Home Sectios starts -->
<section class="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">

            <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>travel around the World</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>

            <div class=" swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>discover the new places</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>

            <div class=" swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>make your tour worthwhile</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>

        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>
<!-- Home Sectios ends -->

<!-- Services Section Starts -->
<section class="services">
    <h1 class="heading-title">our services</h1>

    <div class="box-container">
        <div class="box">
            <img src="images/icon-1.png" alt="">
            <h3>adventure</h3>
        </div>

        <div class="box">
            <img src="images/icon-2.png" alt="">
            <h3>tuor guide</h3>
        </div>

        <div class="box">
            <img src="images/icon-3.png" alt="">
            <h3>trekking</h3>
        </div>

        <div class="box">
            <img src="images/icon-4.png" alt="">
            <h3>camp fire</h3>
        </div>

        <div class="box">
            <img src="images/icon-5.png" alt="">
            <h3>off road</h3>
        </div>

        <div class="box">
            <img src="images/icon-6.png" alt="">
            <h3>camping</h3>
        </div>
    </div>

</section>

<!-- Services Section Ends -->



<!-- home about section starts -->
<section class="home-about">
    <div class="image">
        <img src="images/about-img.jpg" alt="">
    </div>

    <div class="content">
        <h3>about us</h3>
        <p>travel and tour is one of the largest travel sellers of escorted tours, cruises, river cruises, and active vacations in jordan. Our office is located right outside of amman in the city of 8th circle, and we send travelers all around the world on their dream vacation by offering low prices and providing the highest quality customer service with our award winning service team.</p>
        <a href="about.php" class="btn">read more</a>
    </div>
</section>
<!-- home about section ends -->



<!-- home packages section starts -->
<section class="home-packeges">
    <h1 class="heading-title">our Packages</h1>

    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="images/img-1.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, modi.</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="images/img-2.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, modi.</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="images/img-3.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, modi.</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>
    </div>
    <div class="load-more"><a href="package.php" class="btn">load more</a></div>
</section>

<!-- home pachages section end -->

<!-- home offer section starts -->
<section class="home-offer">
    <div class="content">
        <h3>upto 50% off</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, ad nemo et dolorem excepturi quae quod ipsa facere! Eius, numquam.</p>
        <a href="book.php" class="btn">Book now</a>
    </div>
</section>

<!-- home offer section ends -->














<!-- Footer Section Starts -->

<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>quick links</h3>
            <a href="home.php">   <i class="fas fa-angle-right"></i> Home</a>
            <a href="about.php">  <i class="fas fa-angle-right"></i> About</a>
            <a href="package.php"><i class="fas fa-angle-right"></i> Package</a>
            <a href="book.php">   <i class="fas fa-angle-right"></i> Book</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="#"> <i class="fas fa-angle-right"></i> ask question</a>
            <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
            <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
            <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +123-456-7890</a>
            <a href="#"> <i class="fas fa-phone"></i> +111-222-3333</a>
            <a href="#"> <i class="fas fa-envelope"></i> M_alfoqahaa@yahoo.com</a>
            <a href="#"> <i class="fas fa-map"></i> Amman, jordan - 11937</a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"><i class="fab fa-facebook-f"></i> facebook</a>
            <a href="#"><i class="fab fa-twitter"></i> twitter</a>
            <a href="#"><i class="fab fa-instagram"></i> instagram</a>
            <a href="#"><i class="fab fa-linkedin"></i> linkedin</a>

        </div>
    </div>

    <div class="credit">Created by <span>Mfoq Designer</span> | all rights reserved!</div>
</section>

<!-- Footer Section Ends -->










<!-- Swiper Js Link -->
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- Custom Js File Link -->
<script src="js/script.js"></script>

</body>
</html>