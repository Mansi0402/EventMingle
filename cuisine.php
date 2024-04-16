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
                            <a href="#sindian">South Indian</a>
                            <a href="#italian">Italian</a>
                            <a href="#chinease">Chinese</a>
                            <a href="#indian">North Indian</a>
                            <a href="#continental">Continental</a>
                            <a href="#thai">Thai</a>
                            <a href="#mexican">Mexican</a>
                            <a href="#american">American</a>
                            <a href="#french">French</a>
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
    <h1>Cuisines</h1>
   </div>

   <!-- cuisine sections -->
   <section class="cuisine">
    <h1 class="heading-title">Top Cuisines</h1>

    <div class="box-container">
        <div class="box" id="sindian">
            <div class="image">
                <img src="images/sindian.jpg" alt=""> 
            </div>
            <div class="content">
                <h3>South Indian</h3>
                <p>South Indian cuisine is known for its vibrant flavors, rich spices, and diverse array of dishes. South Indian cuisine is characterized by its generous use of rice, lentils, coconut, and spices, resulting in dishes that are both flavorful and nutritious.</p>
                <p>Some quintessential South Indian dishes include:</p>
                <ul>
                    <li>Kuzhi Paniyaram</li>
                    <li>Kothu Parotta</li>
                    <li>Rasam</li>
                    <li>Biryani</li>
                    <li>Adai Dosa</li>
                </ul>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>
        <div class="box" id="italian">
            <div class="image">
                <img src="images/italian.jpg" alt=""> 
            </div>
            <div class="content">
                <h3>Italian</h3>
                <p>Italian cuisine is renowned for its diversity, flavors, and regional specialties. It is characterized by its emphasis on fresh, high-quality ingredients and simple preparation methods.</p>
                <p>Some quintessential Italian dishes include:</p>
                <ul>
                    <li>Spaghetti Carbonara</li>
                    <li>Lasagna</li>
                    <li>Risotto alla Milanese</li>
                    <li>Bruschetta</li>
                    <li>Tiramisu</li>
                </ul>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>

        <div class="box" id="chinease">
            <div class="image">
                <img src="images/chinease.jpg" alt=""> 
            </div>
            <div class="content">
                <h3>Chinese</h3>
                <p>Chinese cuisine is one of the oldest and most diverse culinary traditions in the world, characterized by its rich flavors, varied cooking techniques, and use of fresh ingredients. With a history spanning thousands of years, Chinese cuisine has evolved over time, influenced by geography, climate, and cultural exchanges.</p>
                <p>Some quintessential Chinese dishes include:</p>
                <ul>
                    <li>Kung Pao Chicken</li>
                    <li>Mapo Tofu</li>
                    <li>Dim Sum</li>
                    <li>Chow Mein</li>
                    <li>General Tso's Chicken</li>
                </ul>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>

        <div class="box" id="indian">
            <div class="image">
                <img src="images/indian.jpg" alt=""> 
            </div>
            <div class="content">
                <h3>North Indian</h3>
                <p>Indian cuisine is renowned for its bold flavors, vibrant colors, and rich variety of dishes. With its diverse regional specialties and culinary traditions dating back thousands of years, Indian cuisine offers a truly unique and tantalizing dining experience.</p>
                <p>Some quintessential Indian dishes include:</p>
                <ul>
                    <li>Chicken Tikka Masala</li>
                    <li>Kadhai Paneer</li>
                    <li>Pani Puri (Golgappa)</li>
                    <li>Paneer Tikka</li>
                    <li>Biryani</li>
                </ul>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>

        <div class="box" id="continental">
            <div class="image">
                <img src="images/continental.jpg" alt=""> 
            </div>
            <div class="content">
                <h3>Continental</h3>
                <p>Continental cuisine refers to the food of European countries, characterized by its diversity, elegance, and sophistication. While the term "continental cuisine" encompasses a wide range of culinary traditions, it is often associated with French, Italian, Spanish, and German cooking styles.</p>
                <p>Some quintessential Continental dishes include:</p>
                <ul>
                    <li>Spaghetti Carbonara (Italian)</li>
                    <li>Paella (Spanish)</li>
                    <li>Schnitzel (German)</li>
                    <li>Pasta Carbonara (Italian)</li>
                    <li>Beef Wellington (United Kingdom)</li>
                </ul>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>

        <div class="box" id="thai">
            <div class="image">
                <img src="images/thai.jpg" alt=""> 
            </div>
            <div class="content">
                <h3>Thai</h3>
                <p>Thai cuisine is renowned for its bold flavors, aromatic herbs, and vibrant colors. It is characterized by its balance of sweet, sour, salty, and spicy tastes, creating dishes that are both harmonious and exciting to the palate.</p>
                <p>Some quintessential Thai dishes include:</p>
                <ul>
                    <li>Pad Thai</li>
                    <li>Tom Yum Soup</li>
                    <li>Green Curry</li>
                    <li>Som Tum (Papaya Salad)</li>
                    <li>Mango Sticky Rice</li>
                </ul>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>

        <div class="box" id="mexican">
            <div class="image">
                <img src="images/mexican.jpg" alt=""> 
            </div>
            <div class="content">
                <h3>Mexican</h3>
                <p>Mexican cuisine is known for its bold flavors, vibrant colors, and rich cultural heritage. It is a fusion of indigenous Mesoamerican cooking with Spanish, Caribbean, and African influences, resulting in a diverse and flavorful culinary tradition.</p>
                <p>Some quintessential Mexican dishes include:</p>
                <ul>
                    <li>Tacos (e.g., carne asada, al pastor)</li>
                    <li>Enchiladas</li>
                    <li>Guacamole</li>
                    <li>Chiles Rellenos</li>
                    <li>Mole Poblano</li>
                </ul>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>
        <div class="box" id="american">
            <div class="image">
                <img src="images/american.jpg" alt=""> 
            </div>
            <div class="content">
                <h3>American</h3>
                <p>American cuisine is as diverse and varied as the country itself, reflecting its rich cultural heritage and regional influences. From hearty comfort foods to innovative culinary creations, American cuisine encompasses a wide range of flavors, ingredients, and cooking styles.</p>
                <p>Some quintessential American dishes include:</p>
                <ul>
                    <li>Hamburger</li>
                    <li>Barbecue Ribs</li>
                    <li>Macaroni and Cheese</li>
                    <li>Buffalo Wings</li>
                    <li>Apple Pie</li>
                </ul>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>

        <div class="box" id="french">
            <div class="image">
                <img src="images/french.jpg" alt=""> 
            </div>
            <div class="content">
                <h3>French</h3>
                <p>French cuisine is celebrated for its elegance, sophistication, and emphasis on high-quality ingredients and meticulous preparation. It is widely regarded as one of the finest culinary traditions in the world, with a rich history and cultural significance.</p>
                <p>Some quintessential French dishes include:</p>
                <ul>
                    <li>Coq au Vin</li>
                    <li>Beef Bourguignon</li>
                    <li>Ratatouille</li>
                    <li>Escargot</li>
                    <li>Croissant</li>
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