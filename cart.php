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
    $product_id = $_GET['pid'];
    $user_id = $_POST['user_id'];
    $quantity = $_POST['quantity'];
    

    $statement = $mysqli->prepare("INSERT INTO cart(user_id, product_id, quantity) VALUES(?, ?, ?)");
    $statement->bind_param("sss", $user_id, $product_id, $quantity);
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
                        $num_rows = $stmt->num_rows;?>
                    
                        <h1>Cart (<?php echo $num_rows?>)</h1>
                    <?php endif ?>
                </div>

                
                <?php
                // to authenticate each user and show respective cart items
                if (isset($_SESSION['auth_user']['id'])) :
                    $user_id = $_SESSION['auth_user']['id'];
                
                    $sql = $mysqli->prepare("SELECT products.Name, products.Price,
                    products.Description, products.image, cart.product_id, cart.quantity,  
                    cart.cart_id FROM products
                    INNER JOIN cart 
                    ON products.product_id = cart.product_id AND c.user_id ='$user_id'");
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
                            <h3><?php echo $row['quantity']?></h3>
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
                <?php endif ?>
   
                
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

<?php require __DIR__ . "/includes/footer.php"?>

<script>
    // ajax code to remove cart item 
    // delete employee
    $(document).on('click', '.btn-delete', function (e) {
        e.preventDefault();

        if(confirm('Are you sure you want to delete this meal?'))
        {
            var meal_id = $(this).val();
            $.ajax({
                type: "POST",
                url: "code.php",
                data: {
                    'delete_meal': true,
                    'meal_id': meal_id
                },
                success: function (response) {

                    var res = jQuery.parseJSON(response);
                    if(res.status == 500) {

                        alert(res.message);
                    }else{
                        alertify.set('notifier','position', 'top-right');
                        alertify.success(res.message);

                        $('.cart-items').load(location.href + " .cart-items");
                    }
                }
            });
        }
    });
</script> 