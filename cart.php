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

// insert drinks into the cart table in database 
if (isset($_POST['drinksSubmit'])) {
    $product_id = $_POST['product_id'];
    $user_id = $_POST['user_id'];
    
    $statement = $mysqli->prepare("INSERT INTO cart(product_id, user_id) VALUES(?, ?)");
    $statement->bind_param("ss", $user_id, $product_id);
    $statement->execute();
}

// insert dessert into the cart table in database 
if (isset($_POST['dessertSubmit'])) {
    $dessert_id = $_GET['pid'];
    $user_id = $_POST['user_id'];
    
    $statement = $mysqli->prepare("INSERT INTO cart(product_id, user_id) VALUES(?, ?)");
    $statement->bind_param("ii", $user_id, $dessert_id);
    $statement->execute();
}
?>

    
<section class="cart">
    <div class="wrapper">
        <div class="flex items-summary">
            <div class="cart-items">
                <div class="cart-header">
                    <!-- get the cart number from the database -->
                    <?php 
                    if (isset($_SESSION['auth'])) :
                        $user_id = $_SESSION['auth']['id'];
                    
                    $stmt = $mysqli->prepare("SELECT cart_id FROM cart WHERE user_id = ?");
                    $stmt->bind_param('s', $user_id);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    if ($record = $result->fetch_assoc()) :?>
                        <h1>Cart (<?php echo $record['cart_id']?>)</h1>
                    <?php endif ?>
                    <?php endif ?>
                </div>

                <?php
                    $sql = $mysqli->prepare("SELECT products.Name, products.Price,
                    products.Description, products.image, cart.product_id,  
                    cart.cart_id FROM products
                    INNER JOIN cart 
                    ON products.product_id = cart.product_id");
                    $sql->execute();
                    $result = $sql->get_result();
                        while ($row = $result->fetch_assoc()) :?>
                <div class="cart-inner flex">
                    <div class="cart-img">
                        <img src="<?php echo $row['image']?>" alt="">
                    </div>
                    <div class="cart-name">
                        <h2><?php echo $row['Name']?></h2>
                    </div>
                    <div class="cart-quantity">
                        <input type="number" onchange="updateCart()" class="quantity">
                    </div>
                    <div class="cart-price">
                        <h3 class="realPrice">
                        <?php echo $row['Price']?>
                        <input type="hidden" class="price" value="<?php echo $row['Price']?>">
                    </h3>
                    </div>
                    <div class="delete">
                        <button class="btn-delete" value="<?php echo $row['cart_id']?>">
                        <i class="fa-regular fa-trash-can"></i></button>
                    </div>
                </div>
                <?php endwhile?>
            </div>

            <!-- cart summary -->
            <div class="cart-summary">
                <div class="cart-header">
                    <h1 class="summary">CART SUMMARY</h1>
                </div>
                <div class="sub-total flex">
                    <p class="light-gray">Subtotal</p>
                    <p id="grandTotal">KSh 18,493</p>
                </div>
                <p class="light-gray">Delivery fees not included yet.</p>
                <button class="check">CHECKOUT</button>
            </div>
        </div>
    </div>
</section>
<?php require __DIR__ . "/includes/footer-section.php"?>


<script>
    // Increase or decrease the quantity to change the cart item total and grand total
    let quantity = document.getElementsByClassName("quantity");
    let price = document.getElementsByClassName("price");
    let realPrice = document.getElementsByClassName("realPrice");

    function updateCart(){
        for (let i = 0; i < price.length; i++) {
            realPrice[i].innerText = (price[i].value) * (quantity[i].value);
        }
    }

    updateCart();
</script>
<?php require __DIR__ . "/includes/footer.php"?>

    