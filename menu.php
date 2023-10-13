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
                                    <form action="cart.php" method="post">
                                        <input type="hidden" name="product_id" value="<?php echo $row['product_id']?>">

                                        <!-- Pass the user session id as well -->
                                        <input type="hidden" name="user_id" value="<?php
                                        if (isset($_SESSION['auth'])) {
                                            $user_id = $_SESSION['auth']['id'];
                                            echo $user_id;
                                        }
                                        ?>">
                                        
                                        <button type="submit" class="menu-btn" name="drinksSubmit">Add to Cart</button>
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
                                    <form action="cart.php" method="post">
                                        <input type="hidden" name="dessert_id" value="<?php echo $row['product_id']?>">

                                        <!-- Pass the user session id as well -->
                                        <input type="hidden" name="user_id" value="<?php
                                        if (isset($_SESSION['auth'])) {
                                            $user_id = $_SESSION['auth']['id'];
                                            echo $user_id;
                                        }
                                        ?>">
                                        <button type="submit" class="menu-btn" name="dessertSubmit">Add to Cart</button>
                                    </form>
                                </div>
                        </div>
                <?php endwhile?>
            </div>         
        </div>
    </section>




    <!-- ----------FOOTER SECTION ----------- -->

    <?php require __DIR__ . "/includes/footer-section.php"?>

    <?php require __DIR__ . "/includes/footer.php"?>