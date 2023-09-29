<?php require __DIR__ . "/includes/header.php";
require __DIR__ . "/config/database.php";
?>

<?php require __DIR__ . "/includes/navbar.php"?>

<style>
    <?php include "css/cart.css"?>
</style>

<?php 
// insert meal into the cart table in database 
if (isset($_POST['foodSubmit'])) {
    $product_id = $_POST['product_id'];
    $user_id = $_POST['user_id'];
    

    $statement = $mysqli->prepare("INSERT INTO cart(product_id, user_id) VALUES(?, ?)");
    $statement->bind_param("ii", $user_id, $product_id);
    $statement->execute();
}
?>

    <section class="top-cart">
        <div class="wrapper">
            <div class="cart-container">
                <div class="card-details">
                    <div class="cart-heading">
                        <!-- get the cart number from the database -->
                        <?php 
                        $stmt = $mysqli->prepare("SELECT cart_id FROM cart");
                        $stmt->execute();
                        $result = $stmt->get_result();
                        if ($record = $result->fetch_assoc()) :?>
                            <h1>Cart (<?php echo $record['cart_id']?>)</h1>
                        <?php endif ?>
                        
                    </div>
                    <div class="cart-body">
                        <!-- Get the cart contents -->
                        <?php
                            $sql = $mysqli->prepare("SELECT products.Name, products.Price,
                            products.Description, products.image, cart.product_id  
                            FROM products
                            INNER JOIN cart 
                            ON products.product_id = cart.product_id");
                            $sql->execute();
                            $result = $sql->get_result();
                                while ($row = $result->fetch_assoc()) :?>
                                
                            <div class="cart-description">
                                <img src="<?php echo $row['image']?>" alt="">
                                <div>
                                    <h3><?php echo $row['Name']?></h3>
                                    <p><?php echo $row['Description']?></p>
                                </div>     
                            </div>

                        <div class="cart-price">
                            <h3 class="new-price"><?php echo $row['Price']?></h3>
                            <p class="old-price">Ksh 900</p>       
                        </div>

                        <div class="delete">
                            <i class="fa-regular fa-trash-can"></i>
                            <p>DELETE</p>
                        </div>

                        <div class="incr-decr">
                            <button id="incr"><i class="fa-solid fa-plus"></i></button>
                            <p id="quantity">0</p>
                            <button id="decr"><i class="fa-solid fa-minus"></i></button>
                        </div>

                        <?php endwhile?>
                    </div>
    
                </div>
                
                <div class="cart-summary">
                    <div class="cart-heading">
                        <p class="summary">CART SUMMARY</p>
                    </div>
                    <div class="sub-total">
                        <p class="light-gray">Subtotal</p>
                        <p>KSh 18,493</p>
                    </div>
                    <p class="light-gray">Delivery fees not included yet.</p>
                    <button class="check">CHECKOUT</button>
                    
    
                </div>
            </div>
        </div>
    </section>
    
    <script>
        let incr = document.getElementById("incr");
        let decr = document.getElementById("decr");
        let quantity = document.getElementById("quantity");
        let count = "1";
        quantity.innerHTML = count;

        incr.onclick = function(){
            if (quantity > 1) {
                quantity.innerHTML = count++;
            }
            
        }
        decr.onclick = function(){
            quantity.innerHTML = count--;
        }

    </script>
    
<?php require __DIR__ . "/includes/footer-section.php"?>
</body>
</html>