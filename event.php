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
    <h1>Events</h1>
   </div>

   <!-- events sections -->
   <section class="events">
    <h1 class="heading-title">Top Event Packages</h1>

    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="images/event1.jpg" alt=""> 
            </div>
            <div class="content">
                <h3>Birthday</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum ab, ad minima laborum ratione temporibus, explicabo delectus doloribus debitis incidunt, provident accusamus vel. Ex, tempore.</p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/background-slide2.jpg" alt=""> 
            </div>
            <div class="content">
                <h3>Marriage</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum ab, ad minima laborum ratione temporibus, explicabo delectus doloribus debitis incidunt, provident accusamus vel. Ex, tempore.</p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/background-slide3.jpg" alt=""> 
            </div>
            <div class="content">
                <h3>Conference</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum ab, ad minima laborum ratione temporibus, explicabo delectus doloribus debitis incidunt, provident accusamus vel. Ex, tempore.</p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/event2.jpg" alt=""> 
            </div>
            <div class="content">
                <h3>Anniversary</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum ab, ad minima laborum ratione temporibus, explicabo delectus doloribus debitis incidunt, provident accusamus vel. Ex, tempore.</p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/event3.jpg" alt=""> 
            </div>
            <div class="content">
                <h3>Concert</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum ab, ad minima laborum ratione temporibus, explicabo delectus doloribus debitis incidunt, provident accusamus vel. Ex, tempore.</p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/event4.jpg" alt=""> 
            </div>
            <div class="content">
                <h3>Baby Shower</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum ab, ad minima laborum ratione temporibus, explicabo delectus doloribus debitis incidunt, provident accusamus vel. Ex, tempore.</p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="images/event3.jpg" alt=""> 
            </div>
            <div class="content">
                <h3>Concert</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum ab, ad minima laborum ratione temporibus, explicabo delectus doloribus debitis incidunt, provident accusamus vel. Ex, tempore.</p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/event4.jpg" alt=""> 
            </div>
            <div class="content">
                <h3>Baby Shower</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum ab, ad minima laborum ratione temporibus, explicabo delectus doloribus debitis incidunt, provident accusamus vel. Ex, tempore.</p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>
    </div>

    <div class="load-more"><span class="btn">Load More</span></div>
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