<?php 
require __DIR__ . "/includes/header.php"?>

<section class="container">
    <?php require __DIR__ . "/includes/navbar.php"?>
            <!-- introduction statement -->
    <div class="introduction wrapper">
        <div class="intro-col">
            <h1 class="heading">Delicious <br>
                <span>Meals</span>
                <br>
                    for everyone
            </h1>

            <div class="order">
                <a href="menu.php" class="order-button">Full Menu</a>
            </div>
        </div>

        <div class="ratings">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-regular fa-star-half-stroke"></i>

            <h2>Five Star <br> Restaurant</h2>

            <div class="social-icons">
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-twitter"></i>
            </div>

        </div>
    </div>        
</section>


    <main class="foods-section">
        <div class="wrapper">
            <h2 class="food-heading"><span>Discover</span><br>Meals</h2>
            <div class="row">
            <ul class="options-list">
                <li class="options-item" id="mealBtn">Meal</li>
                <li class="options-item" id="dessertBtn">Dessert</li>
                <li class="options-item" id="drinksBtn">Drinks</li>    
                </ul>
            </div>

            <div class="display-row">
                <div class="food-display meal-container">
                    <img src="images/dish1.png" alt="" class="displayImgOne">
                    <div class="view-more">
                        <a href="menu.html#mealsId" class="menu-btn view-menu">View Menu</a>
                    </div>
                </div>
    
                <div class="food-display dessert-container">
                    <img src="images/macarons.png" alt="" class="displayImgTwo">
                    <div class="view-more">
                        <a href="menu.html#dessertId" class="menu-btn view-menu">View Menu</a>
                    </div>
                </div>
    
                <div class="food-display drinks-container">
                    <img src="images/drinks2.png" alt="" class="displayImgThree">
                    <div class="view-more">
                        <a href="menu.html#drinksId" class="menu-btn view-menu">View Menu</a>
                </div>

            </div>

            
        </div>
    </main>
</div>

<section>
    <div class="form-container">
        <div class="wrapper">
        <div class="form-blog">
            <form action="" class="book-form">
                <h3 class="book">Book a table</h3>
                <input type="text" id="" placeholder="Full Name" class="form-input">
                <input type="date" id="" placeholder="Date" class="form-input">
                <input type="number" id="" placeholder="People" class="form-input">
                <input type="text" id="" placeholder="Phone" class="form-input">
                <input type="email" id="" placeholder="Email" class="form-input">
                

                <div class="view-more">
                    <button class="menu-btn">Book Now</button>
                </div>
            </form>

            
            <div class="blog-section">
                <h3 class="book">Blog</h3>
                <div class="individual-blog">
                    <img src="images/dish1.png" alt="">
                    <div class="description-icons">
                        <p>Lorem ipsum dolor sit amet consectetur 
                        adipisicing elit. Consequuntur placeat quod esse?</p>
                        <div class="like-icons">
                            <div class="date-posted">
                            <i class="fa-solid fa-calendar-days"></i> <span>Sep 12, 2022</span>
                            </div>
                            <div class="heart-comment">
                                <i class="fa-regular fa-heart"></i> <span>15</span>
                                <i class="fa-regular fa-comment"></i> <span>19</span>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>

                <div class="individual-blog">
                    <img src="images/drink4.png" alt="">
                    <div class="description-icons">
                        <p>Lorem ipsum dolor sit amet consectetur 
                        adipisicing elit. Consequuntur placeat quod esse?</p>
                        <div class="like-icons">
                            <div class="date-posted">
                            <i class="fa-solid fa-calendar-days"></i> <span>Sep 12, 2022</span>
                            </div>
                            <div class="heart-comment">
                                <i class="fa-regular fa-heart"></i> <span>15</span>
                                <i class="fa-regular fa-comment"></i> <span>19</span>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="individual-blog">
                    <img src="images/dessert3.png" alt="">
                    <div class="description-icons">
                        <p>Lorem ipsum dolor sit amet consectetur 
                        adipisicing elit. Consequuntur placeat quod esse?</p>
                        <div class="like-icons">
                            <div class="date-posted">
                            <i class="fa-solid fa-calendar-days"></i> <span>Sep 12, 2022</span>
                            </div>
                            <div class="heart-comment">
                                <i class="fa-regular fa-heart"></i> <span>15</span>
                                <i class="fa-regular fa-comment"></i> <span>19</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>

<!-- catering services -->
<section class="catering-container">
    <div class="wrapper">
        <h2 class="catering-header">Catering <br><span>services</span></h2>
        <div class="roww">
            <div class="catering">
                <img src="icons/001-meeting.png" alt="">
                <h3>Business <br>Meetings</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Maiores exercitationem impedit vitae ab, accusantium et
                    dolore reiciendis ipsa. Laudantium, adipisci?</p>
            </div>

            <div class="catering">
                <img src="icons/002-wedding-couple.png" alt="">
                <h3>Wedding <br>Parties</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Maiores exercitationem impedit vitae ab, accusantium et
                    dolore reiciendis ipsa. Laudantium, adipisci?</p>
            </div>

            <div class="catering">
                <img src="icons/003-confetti.png" alt="">
                <h3>Birthday <br>Parties</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Maiores exercitationem impedit vitae ab, accusantium et
                    dolore reiciendis ipsa. Laudantium, adipisci?</p>
            </div>
        </div>
    </div>
</section>

<section class="testimonials-container">
    <div class="wrapper">
        <h2 class="catering-header">Customer<br><span>Reviews</span></h2>
        <div class="row-testimonials">
            <div class="col-testimoials">
                <img src="images/pic2.jpeg" alt=""
                class="profile-image">
                <div>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id sint consequatur quae dignissimos architecto optio nam laudantium et at. Reprehenderit, dolores?</p>
                    <h3>Sheldon Cooper</h3>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star-half-stroke"></i>
                </div>
            </div>

            <div class="col-testimoials">
                <img src="images/pic1.jpeg" alt="" class="profile-image">
                <div>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id sint consequatur quae dignissimos architecto optio nam laudantium et at. Reprehenderit, dolores?</p>
                    <h3>John Doe</h3>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star-half-stroke"></i>
                </div>
            </div>
        </div>
        </div>
</section>


<?php require __DIR__ . "/includes/footer-section.php"?>

<script>
    <?php require_once("js/script.js");?>
</script>

<?php require __DIR__ . "/includes/footer.php"?>
    