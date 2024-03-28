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
    <h1>Book Now</h1>
   </div>

   <!-- booking section -->
   <section class="booking">
    <h1 class="heading-title">Book your Event!</h1>
    <form action="book_form.php" method="post" class="book-form" name="bookForm" onsubmit="return validateForm()">

        <div class="flex">
            <div class="inputBox">
                <span>Name: </span>
                <input type="text" placeholder= "Enter your name" name = "name">
            </div>
            <div class="inputBox">
                <span>Phone number: </span>
                <input type="text" placeholder= "Enter your number" name = "phone">
            </div>
            <div class="inputBox">
                <span>Email : </span>
                <input type="text" placeholder= "Enter your email" name = "email">
            </div>
            <div class="inputBox">
                <span>Type of Event: </span>
                <select name = "event">
                    <option value="Birthday">Birthday</option>
                    <option value="Marriage">Marriage</option>
                    <option value="Anniversary">Anniversary</option>
                    <option value="Baby Shower">Baby Shower</option>
                    <option value="Conference">Conference</option>
                </select>
            </div>
            <div class="inputBox">
                <span>Date: </span>
                <input type="date" name = "date">
            </div>
            <div class="inputBox">
                <span>Time: </span>
                <input type="time" name = "time">
            </div>
            <div class="inputBox">
                <span>Number of Guests : </span>
                <input type="number" placeholder= "Enter number of guests" name = "guests">
            </div>
            <div class="inputBox">
                <span>Cuisine : </span>
                <select name = "cuisine">
                    <option value="SouthIndian">South Indian</option>
                    <option value="Italian">Italian</option>
                    <option value="Italian">Italian</option>
                    <option value="NorthIndian">North Indian</option>
                    <option value="Contiental">Contiental</option>
                    <option value="Thai">Thai</option>
                    <option value="Mexican">Mexican</option>
                    <option value="American">American</option>
                    <option value="French">French</option>
                </select>
            </div>
        </div>
        <input type="submit" value="submit" class="btn" name = "send">
    </form>
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