<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <button id="accessibility-btn" aria-label="Accessibility Settings">
        <img src="images/1.png" alt="Accessibility Icon">
    </button>
    <section class = "header">
        <img src="images/event.png" alt="">

        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="event.php">events</a>
            <div class="dropdown">
                <button class="dropbtn">Services
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <div class="submenu">
                        <a href="cuisine.php">Cuisine <i class="fa fa-caret-right"></i></a>
                        <div class="submenu-content">
                            <a href="cuisine.php#sindian">South Indian</a>
                            <a href="cuisine.php#italian">Italian</a>
                            <a href="cuisine.php#chinease">Chinese</a>
                            <a href="cuisine.php#indian">North Indian</a>
                            <a href="cuisine.php#continental">Continental</a>
                            <a href="cuisine.php#thai">Thai</a>
                            <a href="cuisine.php#mexican">Mexican</a>
                            <a href="cuisine.php#american">American</a>
                            <a href="cuisine.php#french">French</a>
                            <!-- etc etc -->
                        </div>
                    </div>
                    <div class="submenu">
                        <a href="">Decorations<i class="fa fa-caret-right"></i></a>
                        <div class="submenu-content">
                            <a href="">Floral Decorations</a>
                            <a href="">Kids Decorations</a>
                            <a href="">White Decorations</a>
                            <a href="">Concert Decorations</a>
                        </div>
                    </div>
                </div>
            </div>
            <a href="book.php">book</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>

   <div class="heading" style = "background: url(../images/about1.jpg)">
    <h1>About Us</h1>
   </div>

   <!-- about section- -->
   <section class="about">
    <div class="image">
        <img src="images/background1.jpg" alt="">
    </div>

    <div class="content">
        <h3>Why Choose Us?</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, quo in consequatur ullam ea vel eum blanditiis consectetur laborum quia dolor. Quibusdam, sint! Cumque facilis deserunt tempora enim numquam est?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, quo in consequatur ullam ea vel eum blanditiis consectetur laborum quia dolor. Quibusdam, sint! Cumque facilis deserunt tempora enim numquam est?</p>
        <div class="icons-container">
            <div class="icons">
                <i class="fas fa-map"></i>
                <span>Top Venues</span>
            </div>
            <div class="icons">
                <i class="fas fa-hand-holding-usd"></i>
                <span>Affordable prices</span>
            </div>
            <div class="icons">
                <i class="fas fa-headset"></i>
                <span>24/7 helpline service</span>
            </div>
        </div>
    </div>
   </section>

   <!-- about section ends -->
   <!-- review section -->
   <section class="reviews">
    <div class="swiper reviews-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slider slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum enim odit perferendis esse sunt provident error quae dicta quas. Sapiente veritatis id, eveniet non accusamus quo quae dolor ab, cumque porro tenetur, vitae corporis sequi obcaecati ut perferendis? Nulla, deleniti.</p>
                <h3>Kunal Gaurav</h3>
                <span>GATE aspirant</span>
                <img src="images/pic1.png" alt="">
            </div>

            <div class="swiper-slider slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum enim odit perferendis esse sunt provident error quae dicta quas. Sapiente veritatis id, eveniet non accusamus quo quae dolor ab, cumque porro tenetur, vitae corporis sequi obcaecati ut perferendis? Nulla, deleniti.</p>
                <h3>Kunal Gaurav</h3>
                <span>GATE aspirant</span>
                <img src="images/pic1.png" alt="">
            </div>

            <div class="swiper-slider slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum enim odit perferendis esse sunt provident error quae dicta quas. Sapiente veritatis id, eveniet non accusamus quo quae dolor ab, cumque porro tenetur, vitae corporis sequi obcaecati ut perferendis? Nulla, deleniti.</p>
                <h3>Kunal Gaurav</h3>
                <span>GATE aspirant</span>
                <img src="images/pic1.png" alt="">
            </div>

            <div class="swiper-slider slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum enim odit perferendis esse sunt provident error quae dicta quas. Sapiente veritatis id, eveniet non accusamus quo quae dolor ab, cumque porro tenetur, vitae corporis sequi obcaecati ut perferendis? Nulla, deleniti.</p>
                <h3>Kunal Gaurav</h3>
                <span>GATE aspirant</span>
                <img src="images/pic1.png" alt="">
            </div>

            <div class="swiper-slider slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum enim odit perferendis esse sunt provident error quae dicta quas. Sapiente veritatis id, eveniet non accusamus quo quae dolor ab, cumque porro tenetur, vitae corporis sequi obcaecati ut perferendis? Nulla, deleniti.</p>
                <h3>Kunal Gaurav</h3>
                <span>GATE aspirant</span>
                <img src="images/pic1.png" alt="">
            </div>
        </div>
    </div>
   </section>


    

























    <!-- footer starts -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Quick Links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i>home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i>about</a>
                <a href="event.php"><i class="fas fa-angle-right"></i>events</a>
                <a href="book.php"><i class="fas fa-angle-right"></i>book</a>
            </div>

            <div class="box">
                <h3>Extra Links</h3>
                <a href="#"><i class="fas fa-angle-right"></i>Ask Questions</a>
                <a href="#"><i class="fas fa-angle-right"></i>About Us</a>
                <a href="#"><i class="fas fa-angle-right"></i>Privacy Policy</a>
                <a href="#"><i class="fas fa-angle-right"></i>Terms of Use</a>
            </div>

            <div class="box">
                <h3>Contact Information</h3>
                <a href="#"><i class="fas fa-phone"></i>+91 123456789</a>
                <a href="#"><i class="fas fa-phone"></i>+91 111222333</a>
                <a href="#"><i class="fas fa-envelope"></i>abc@gmail.com</a>
                <a href="#"><i class="fas fa-map"></i>Mohali</a>
            </div>

            <div class="box">
                <h3>Follow Us</h3>
                <a href="#"><i class="fab fa-facebook"></i>Facebook</a>
                <a href="#"><i class="fab fa-twitter"></i>Twiiter</a>
                <a href="#"><i class="fab fa-instagram"></i>instagram</a>
            </div>

        </div>

        <div class="credit">Created by- <span>MADS</span></div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src = "js/script.js"></script>
</body>
</html>