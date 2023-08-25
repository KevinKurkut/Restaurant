<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;700;900&family=Playfair:opsz,wght@5..1200,400;5..1200,500;5..1200,600;5..1200,700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ed20622ed8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">     
</head>
<body>
    <section class="sub-container">
        <div class="wrapper">
            <!-- toggle button available on small screens -->
            <button class="nav-toggle">
                <span class="hamburger"></span>
            </button>

            <div class="logo-nav">
                <a class="logo">
                    <!-- <img src="images/logo.png" alt=""> -->
                    <p class="logo-text">Eats</p>
                </a>

                <nav class="navbar">
                    <ul class="nav-group">
                        <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
                        <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                        <li class="nav-item"><a href="menu.php" class="nav-link">Menu</a></li>
                    </ul>
                </nav>
            </div>

            <!-- Heading -->
            <h1 class="heading page-heading">About Us</h1>
        </div>
    </section>

    <section class="about-main">
        <div class="wrapper">
            <div class="about-row">
                <div class="about-col">
                    <h1 class="catering-header">Dine Magnificently</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit fugiat qui, eos deleniti rem architecto a quo saepe est aperiam omnis voluptate delectus esse, expedita recusandae enim quibusdam temporibus possimus. Similique, ipsum! Corporis provident eius accusamus natus doloremque eaque autem reiciendis nihil quae ea quo, nobis amet, illo, odit saepe ducimus? Placeat modi fuga et fugiat temporibus praesentium deserunt quod!
                    </p>
                    <div class="order">
                        <a href="#" class="order-button explore-more" style="margin-top: 1rem;">Explore More</a>
                    </div>
                </div>
                <div class="about-col">
                    <img src="images/aboutus.jpeg" alt="">
                </div>
            </div>

            
    </div>
    </section>

    

    

    


    <footer class="last-section">
        <div class="wrapper">
            <div class="contact-footer">
                <div class="contact">
                    <h2>Eats</h2>
                    <div class="contact-image first">
                        <img src="icons/003-location.png" alt=""><p>Seventh Street Towers, <br>Milky Avenue</p>
                    </div>
                    <div class="contact-image">
                        <img src="icons/002-mail.png" alt=""><p>milky4500@gmail.com</p>
                    </div>
                    <div class="contact-image">
                        <img src="icons/001-phone-call.png" alt=""><p>0927726363</p>
                    </div>
                    
                </div>

                <div class="footer-items">
                    <ul>
                        <li>Book Reservation</li>
                        <li>Lunch Specials</li>
                        <li>Dinner Treats</li>
                        </ul>
                    <ul>
                        <li>BreakFast</li>
                        <li>Catering options</li>
                        <li>Sitemap</li>
                    </ul>
                    <div class="signup-part">
                        <input type="text" placeholder="Your email">
                        <button class="signup">Signup</button>
                    </div>
                </div>
            </div>

            <div class="social-media">
                <img src="icons/004-instagram.png" alt="">
                <img src="icons/005-facebook-app-symbol.png" alt="">
                <img src="icons/006-linkedin.png" alt="">
            </div>
        
            <p class="copyright-text">© Copyright 2023 Fathi Abdi | All rights reserved</p>
        </div>

    </footer>

    <script src="script.js"></script>

    
</body>
</html>