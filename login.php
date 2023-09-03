<?php require __DIR__ . "/includes/header.php"?>

<style>
    <?php include "css/style.css"?>
</style>

<?php require __DIR__ . "/includes/navbar.php"?>

<div class="form-container">
    <div class="wrapper">
        <div class="intro-login">
            <div class="login-intro">
                <h2>LOGIN WITH YOUR <br>CREDENTIALS</h2>
            </div>

            <div class="login-form">             
                <form action="#">
                    <h2>Login</h2>
                    <div class="input-box">
                        <i class="fa-regular fa-envelope"></i>
                        <input type="text" id="email" placeholder="Enter your email">
                    </div>
                    <div class="input-box">
                        <i class="fa-solid fa-key"></i>
                        <input type="text" id="password" placeholder="Enter Your password">
                    </div>
                    <div class="submit">
                        <input type="submit" value="Login">
                    </div>  
                    <p>Don't have an account? <a href="#" id="signup">Signup</a></p>
                </form>
            </div>


            <!-- signup form -->

            <div class="signup-form">            
                <form action="#">
                    <h2>Sign In</h2>
                    <div class="input-box">
                        <i class="fa-regular fa-user"></i>
                        <input type="text" id="fullName">
                    </div>
                    <div class="input-box">
                        <i class="fa-regular fa-envelope"></i>
                        <input type="text" id="email">
                    </div>
                    <div class="input-box">
                        <input type="text" id="password">
                        <i class="fa-solid fa-key"></i>
                        <i class="fa-regular fa-eye-slash pw-hide"></i>
                    </div>
                    <div class="input-box">
                        <i class="fa-solid fa-key"></i>
                        <input type="text" id="rpassword">
                    </div>
                    <div class="submit">
                        <input type="submit" value="Signup">
                    </div>  
                    <p>Already have an account? <a href="#" id="login">Login</a></p>
                </form>
            </div> 

        </div>
    </div>
</div>
    
<?php require __DIR__ . "/includes/footer-section.php"?>

<script>
    <?php require __DIR__ . "/script.js";?>
</script>

<?php require __DIR__ . "/includes/footer.php"?>


