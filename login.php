<?php require __DIR__ . "/includes/navbar.php"?>
<?php require __DIR__ . "/includes/header.php"?>

<style>
    <?php include "css/style.css"?>
</style>

<div class="form-container">
    <div class="wrapper">
        <div class="intro-login">
            <div class="login-intro">
                <h2>LOGIN WITH YOUR <br>CREDENTIALS</h2>
            </div>

            <div class="login-form">             
                <form action="action.php" method="POST">
                    <h2>Login</h2>
                    <div class="input-box">
                        <i class="fa-regular fa-envelope"></i>
                        <input type="text" id="LoginEmail" placeholder="Enter your email" name="loginEmail">
                    </div>
                    <div class="input-box">
                        <i class="fa-solid fa-key"></i>  
                        <div class="hiddenPW-input">
                            <input type="password" id="LoginPassword" placeholder="Enter Your password" name="loginPassword">
                            <i class="fa-regular fa-eye-slash pw-hide"></i>
                        </div>
                    </div>
                    <div class="submit">
                        <input type="submit" value="Login" name="login">
                    </div>  
                    <p>Don't have an account? <a href="#" id="signup">Signup</a></p>
                </form>
            </div>


            <!-- signup form -->

            <div class="signup-form">            
                <form action="action.php" method="POST">
                    <h2>Sign In</h2>
                    <div class="input-box">
                        <i class="fa-regular fa-user"></i>
                        <input type="text" id="fullName" placeholder="Enter your FullName" name="fullName">
                    </div>
                    <div class="input-box">
                        <i class="fa-regular fa-envelope"></i>
                        <input type="text" id="email" placeholder="Enter your email" name="email">
                    </div>
                    <div class="input-box">
                        <i class="fa-solid fa-key"></i>
                        <div class="hiddenPW-input">
                            <input type="password" id="password" placeholder="Enter your Password" name="password">
                            <i class="fa-regular fa-eye-slash pw-hide"></i>
                        </div>
                        
                    </div>
                    <div class="input-box">
                        <i class="fa-solid fa-key"></i>
                        <div class="hiddenPW-input">
                            <input type="password" id="rpassword" placeholder="Confirm your password" name="cpassword">
                            <i class="fa-regular fa-eye-slash pw-hide"></i>
                        </div>   
                    </div>
                    <div class="submit">
                        <input type="submit" value="Signup" name="signup">
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

</body>
</html>


