<?php require __DIR__ . "/includes/header.php";
require __DIR__ . "/config/database.php";
?>

<?php require __DIR__ . "/includes/navbar.php"?>

<style>
    <?php include "css/cart.css"?>
</style>

<?php 
// insert meal into the cart table in database 
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $statement = $mysqli->prepare("SELECT * FROM meals WHERE id = '$id'");
    $statement->execute();
    $result = $statement->getResult();
    $row = $result->fetch_assoc();
}

?>

    <section class="top-cart">
        <div class="wrapper">
            <div class="cart-container">
                <div class="card-details">
                    <div class="cart-heading">
                        <h1>Cart (3)</h1>
                    </div>
                    <div class="cart-body">
                        <div class="cart-description">
                            <img src="image/dessert4.png" alt="">
                            <div>
                                <h3>Product Name</h3>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis, nobis!</p>
                            </div>
                            
                        </div>
                        <div class="cart-price">
                            <h3 class="new-price">Ksh 899</h3>
                            <p class="old-price">Ksh 9000</p>       
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