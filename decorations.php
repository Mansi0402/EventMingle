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
    <div class="warning-message" id="select-warning">
        Please refrain from selecting content.
    </div>
    <div class="warning-message" id="copy-warning">
        Copying content is not allowed.
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

   <div class="heading" style = "background: url(../images/about1.jpg)">
    <h1>Decorations</h1>
   </div>

   <!-- decorations sections -->
   <section class="deco">
    <h1 class="heading-title">Top Decorations</h1>

    <div class="box-container">
        <div class="box" id="floral">
            <div class="image">
                <img src="images/floral2.jpg" alt=""> 
            </div>
            <div class="content">
                <h3>Floral Decorations</h3>
                <p>Floral decorations add a touch of elegance, beauty, and charm to any event or space. Whether you're planning a wedding, a birthday party, or a corporate event, incorporating flowers into your decor can transform the ambiance and create a memorable experience for your guests.</p>
                <p>Some events that can include this type of decoration:</p>
                <ul>
                    <li>Weddings</li>
                    <li>Anniversary</li>
                    <li>Birthdays</li>
                    <li>Baby Shower</li>
                </ul>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>
        <div class="box" id="concert">
            <div class="image">
                <img src="images/concert.jpg" alt="">
            </div>
            <div class="content">
                <h3>Concert Decorations</h3>
                <p>Concert decorations transform venues into immersive environments, combining vibrant banners, dynamic lighting, and themed props to amplify the concert experience. From larger-than-life backdrops to interactive installations, every detail is curated to create a visually stunning and memorable atmosphere for attendees.</p>
                <p>Some events that can include this type of decoration:</p>
                <ul>
                    <li>Concerts</li>
                    <li>Birthdays</li>
                </ul>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>

        <div class="box" id="kids">
            <div class="image">
                <img src="images/kids.jpg" alt=""> 
            </div>
            <div class="content">
                <h3>Kids Decorations</h3>
                <p>Kids decorations infuse spaces with whimsy and wonder, featuring colorful balloons, playful banners, and themed props to ignite imaginations. From themed table settings to interactive play zones, each element is designed to spark joy and create enchanting memories for young attendees.</p>
                <p>Some events that can include this type of decoration:</p>
                <ul>
                    <li>Birthdays</li>
                    <li>Baby Shower</li>
                </ul>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>

        <div class="box" id="white">
            <div class="image">
                <img src="images/white.jpg" alt=""> 
            </div>
            <div class="content">
                <h3>White Decorations</h3>
                <p>White decorations evoke elegance and purity, employing pristine fabrics, delicate florals, and shimmering accents to create a timeless atmosphere. From ethereal drapery to glistening table settings, every detail bathed in white radiates sophistication and grace, transforming spaces into serene sanctuaries of beauty and tranquility.</p>
                <p>Some events that can include this type of decoration:</p>
                <ul>
                    <li>Birthdays</li>
                    <li>Marriages</li>
                    <li>Anniversary</li>
                </ul>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>

        <div class="box" id="formal">
            <div class="image">
                <img src="images/formal.jpg" alt=""> 
            </div>
            <div class="content">
                <h3>Formal Decorations</h3>
                <p>Formal decorations exude sophistication and refinement, featuring sleek lines, muted hues, and luxurious accents to set an elegant tone. From chic table settings to exquisite floral arrangements, each element is meticulously curated to create a polished and distinguished ambiance, perfect for upscale events and black-tie affairs.</p>
                <p>Some events that can include this type of decoration:</p>
                <ul>
                    <li>Conferences</li>
                </ul>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>
    </div>
   </section>

    

























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
                <a href="#"><i class="fas fa-envelope"></i>eventmingle@gmail.com</a>
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
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src = "js/script.js"></script>
</body>
</html>