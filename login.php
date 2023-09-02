<?php require __DIR__ . "/includes/header.php"?>
<style>
    <?php include "style.css"?>
</style>
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

<?php require __DIR__ . "/includes/footer.php"?>