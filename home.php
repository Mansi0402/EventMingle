<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link
  rel="stylesheet"
  href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="warning-message" id="select-warning">
        Please refrain from selecting content.
    </div>
    <div class="warning-message" id="copy-warning">
        Copying content is not allowed.
    </div>
    <div class="warning-message" id = "drop-warning">
        Dragging content is not allowed.
    </div>
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
                        <a href="decorations.php">Decorations<i class="fa fa-caret-right"></i></a>
                        <div class="submenu-content">
                            <a href="decorations.php#floral">Floral Decorations</a>
                            <a href="decorations.php#concert">Concert Decorations</a>
                            <a href="decorations.php#kids">Kids Decorations</a>
                            <a href="decorations.php#white">White Decorations</a>
                            <a href="decorations.php#formal">Formal Decorations</a>
                        </div>
                    </div>
                </div>
            </div>
            <a href="book.php">book</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>

    <!-- home section -->
    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style = "background: url(../images/background-slide1.jpg) no-repeat;">
                    <div class="content">
                        <span>Seamlessly orchestrate your events with precision and ease!</span>
                        <h3>Plan, Enjoy</h3>
                        <a href="package.php" class= "btn">Discover more</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style = "background: url(../images/background-slide2.jpg) no-repeat;">
                    <div class="content">
                        <span>Seamlessly orchestrate your events with precision and ease!</span>
                        <h3>Plan, Enjoy</h3>
                        <a href="package.php" class= "btn">Discover more</a>

                    </div>
                </div>

                <div class="swiper-slide slide" style = "background: url(../images/background-slide3.jpg) no-repeat;">
                    <div class="content">
                        <span>Seamlessly orchestrate your events with precision and ease!</span>
                        <h3>Plan, Enjoy</h3>
                        <a href="package.php" class= "btn">Discover more</a>

                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <!-- home ssection end -->

    <!-- services section -->
    <section class="services">
        <h1 class="heading-title">Our Services</h1>
        <div class="box-container">
            <div class="box">
                <img src="images/icon-1.png" alt="">
                <h3>Marriage</h3>
            </div>

            <div class="box">
                <img src="images/icon-2.png" alt="">
                <h3>Birthday</h3>
            </div>

            <div class="box">
                <img src="images/icon-3.png" alt="">
                <h3>Conference</h3>
            </div>

            <div class="box">
                <img src="images/icon-4.png" alt="">
                <h3>Baby Shower</h3>
            </div>

            <div class="box">
                <img src="images/icon-5.png" alt="">
                <h3>Anniversary</h3>
            </div>

            <div class="box">
                <img src="images/icon-6.png" alt="">
                <h3>Concert</h3>
            </div>
        </div>
    </section>

    <!-- services section end-->

    <!-- home out section  -->
    <section class="home-about">
        <div class="image">
            <img src="images/aboutimg1.jpeg" height = 500px width=500px alt="">
        </div>

        <div class="content">
            <h3>About us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum soluta amet non? Sapiente porro accusamus nesciunt ea, sit quibusdam architecto magnam! Quam perspiciatis iure corporis! Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, nemo quia culpa recusandae possimus rem libero? Cum rem molestiae odit, dignissimos nihil qu! Eum molestiae cum dicta porro quos incidunt?</p>
            <a href="about.php" class= "btn">Read more</a>
        </div>
    </section>

    <!-- home about section -->

    <!-- home packages -->
    <section class="home-packages">
        <h1 class="heading-title">Our Event packages</h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="images/background-slide1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Birthday Bash</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, quia. In harum assumenda vero magnam officiis corporis aperiam accusamus! Aut similique praesentium et, enim rem deserunt quisquam aspernatur adipisci recusandae!</p>
                    <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/background-slide2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Magnificant Marriages</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, quia. In harum assumenda vero magnam officiis corporis aperiam accusamus! Aut similique praesentium et, enim rem deserunt quisquam aspernatur adipisci recusandae!</p>
                    <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/background-slide3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Conference Conference</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, quia. In harum assumenda vero magnam officiis corporis aperiam accusamus! Aut similique praesentium et, enim rem deserunt quisquam aspernatur adipisci recusandae!</p>
                    <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>
        </div>

        <div class="load-more"><a href="event.php" class = "btn">Load More</a></div>
    </section>

    <!-- home packages section ends -->

    <!-- home offer section -->
    <section class="home-offer">
        <div class="content">
            <h3>Upto 50% off!</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam dicta dolor, maxime sed impedit adipisci nisi! Deleniti, sint delectus praesentium optio vero expedita, magni autem adipisci corporis quod sed qui.</p>
            <a href="book.php" class= "btn">Book Now</a>
        </div>
    </section>
    <!-- home offer section end -->



























    <!-- footer starts -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Quick Links</h3>
                <a href="home.php"><i class="fa-solid fa-house"></i>home</a>
                <a href="about.php"><i class="fa-solid fa-circle-info"></i>about</a>
                <a href="event.php"><i class="fa-solid fa-calendar-days"></i>events</a>
                <a href="book.php"><i class="fa-solid fa-book"></i>book</a>
            </div>

            <div class="box">
                <h3>Extra Links</h3>
                <a href="about.php#feedback"><i class="fas fa-angle-right"></i>Ask Questions</a>
                <a href="about.php"><i class="fas fa-angle-right"></i>About Us</a>
                <a href="https://www.freeprivacypolicy.com/live/dbf6ca34-85a7-4078-b29a-30fded17e305"><i class="fas fa-angle-right"></i>Privacy Policy</a>
                <a href="https://www.termsfeed.com/live/46a7d886-92b1-417d-89fd-d7a69e65a8a1"><i class="fas fa-angle-right"></i>Terms of Use</a>
            </div>

            <div class="box">
                <h3>Contact Information</h3>
                <a href="#"><i class="fas fa-phone"></i>+91 123456789</a>
                <a href="#"><i class="fas fa-phone"></i>+91 111222333</a>
                <a href="mailto:abc@gmail.com"><i class="fas fa-envelope"></i>eventmingle@gmail.com</a>
                <a href="#"><i class="fas fa-map"></i>Mohali</a>
            </div>

            <div class="box">
                <h3>Follow Us</h3>
                <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i>Facebook</a>
                <a href="https://twitter.com/"><i class="fab fa-twitter"></i>Twiiter</a>
                <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i>instagram</a>
            </div>

        </div>

        <div class="credit">Created by- <span>MADS</span></div>
    </section>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src = "js/script.js"></script>
</body>
</html>