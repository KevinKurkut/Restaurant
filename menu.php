<?php require __DIR__ . "/includes/header.php";
require __DIR__ . "/config/database.php"
?>
    <section class="sub-container">
     
        <?php require __DIR__ . "/includes/navbar.php"?>

        <!-- Heading -->
        <h1 class="heading page-heading">Menu</h1>
    </section>

    <section class="about-main">
        <div class="wrapper">
            <h2 class="catering-header" id="mealsId">Meals</h2>
            <div class="meal-row">
                <?php
                    // get the name, price and description from database
                    $sql = $mysqli->prepare("SELECT * FROM meals LIMIT 3");
                    $sql->execute();
                    $res = $sql->get_result(); 
                    while ($row = $res->fetch_assoc()) :
                        ?>
                        <div class="child">
                            <img src="<?php echo $row['image']?>" alt="" class="menu-img">
                                <div>
                                    <p class="menu-name"><?php echo $row['Name']?></p>
                                    <p class="price"><?php echo $row['Price']?></p>
                                    <p><?php echo $row['Description']?></p>
                                    <button class="menu-btn"><a href="cart.php?id=<?php echo $row['id']?>">Add to cart</a></button>
                                </div>
                        </div>
                <?php endwhile?>
            </div>


            <!------------- DRINKS SECTION ------------->
            <h2 class="catering-header" id="drinksId">Drinks</h2>
            <div class="meal-row">
                <?php
                    // get the name, price and description from database
                    $sql = $mysqli->prepare("SELECT * FROM drinks LIMIT 3");
                    $sql->execute();
                    $res = $sql->get_result(); 
                    while ($row = $res->fetch_assoc()) :
                        ?>
                        <div class="child">
                            <img src="<?php echo $row['image']?>" alt="" class="menu-img">
                                <div>
                                    <p class="menu-name"><?php echo $row['Name']?></p>
                                    <p class="price"><?php echo $row['Price']?></p>
                                    <p><?php echo $row['Description']?></p>
                                    <button class="menu-btn"><a href="cart.php?idd=<?php echo $row['id']?>">Add to cart</a></button>
                                </div>
                        </div>
                <?php endwhile?>
            </div>



            <!-- -----------DESSERT SECTION--------- -->

            <h2 class="catering-header" id="dessertId">Dessert</h2>

            <div class="meal-row">
                <?php
                    // get the name, price and description from database
                    $sql = $mysqli->prepare("SELECT * FROM meals LIMIT 3");
                    $sql->execute();
                    $res = $sql->get_result(); 
                    while ($row = $res->fetch_assoc()) :
                        ?>
                        <div class="child">
                            <img src="<?php echo $row['image']?>" alt="" class="menu-img">
                                <div>
                                    <p class="menu-name"><?php echo $row['Name']?></p>
                                    <p class="price"><?php echo $row['Price']?></p>
                                    <p><?php echo $row['Description']?></p>
                                    <button class="menu-btn"><a href="cart.php?iddd=<?php echo $row['id']?>">Add to cart</a></button>
                                </div>
                        </div>
                <?php endwhile?>
            </div>         
        </div>
    </section>




    <!-- ----------FOOTER SECTION ----------- -->

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

    <?php require __DIR__ . "/includes/footer.php"?>