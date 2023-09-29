<?php 
require __DIR__ . "/includes/header.php";
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
                    $sql = $mysqli->prepare("SELECT * FROM products WHERE category_id = 1 LIMIT 3");
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
                                    <form action="cart.php" method="post">
                                        <input type="hidden" name="product_id" value="<?php echo $row['product_id']?>">

                                        <!-- Pass the user session id as well -->
                                        <input type="hidden" name="user_id" value="<?php
                                        if (isset($_SESSION['auth'])) {
                                            $user_id = $_SESSION['auth']['id'];
                                            echo $user_id;
                                        }
                                        ?>">
                                        <button type="submit" class="menu-btn" name="foodSubmit">Add to cart</button>
                                    </form>
                                    
                                </div>
                        </div>
                <?php endwhile?>
            </div>


            <!------------- DRINKS SECTION ------------->
            <h2 class="catering-header" id="drinksId">Drinks</h2>
            <div class="meal-row">
                <?php
                    // get the name, price and description from database
                    $sql = $mysqli->prepare("SELECT * FROM products WHERE category_id = 2 LIMIT 3");
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
                                    <form action="" method="post">
                                        <input type="hidden" name="product_id" value="<?php echo $row['product_id']?>">

                                        <!-- Pass the user session id as well -->
                                        <input type="hidden" name="user_id" value="<?php
                                        if (isset($_SESSION['auth'])) {
                                            $user_id = $_SESSION['auth']['id'];
                                            echo $user_id;
                                        }
                                        ?>">
                                        
                                        <button type="submit" class="menu-btn" name="foodSubmit">Add to Cart</button>
                                    </form>
                                </div>
                        </div>
                <?php endwhile?>
            </div>



            <!-- -----------DESSERT SECTION--------- -->

            <h2 class="catering-header" id="dessertId">Dessert</h2>

            <div class="meal-row">
                <?php
                    // get the name, price and description from database
                    $sql = $mysqli->prepare("SELECT * FROM products WHERE category_id = 3 LIMIT 3");
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
                                    <form action="" method="post">
                                        <input type="hidden" name="product_id" value="<?php echo $row['product_id']?>">

                                        <!-- Pass the user session id as well -->
                                        <input type="hidden" name="user_id" value="<?php
                                        if (isset($_SESSION['auth'])) {
                                            $user_id = $_SESSION['auth']['id'];
                                            echo $user_id;
                                        }
                                        ?>">
                                        <button type="submit" class="menu-btn" name="foodSubmit">Add to Cart</button>
                                    </form>
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