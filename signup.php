<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <style>
        *, *::before, *::after{
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }
    .container{
        width: 100%;
        min-height: 100vh;
       display: flex;
       justify-content: center;
       align-items: center;
    }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-wrapper">
            <form action="action.php" method="post">
                <div class="header">
                    <h2>Sign Up</h2>
                    <button data-close-button class="close-button">&times;</button>
                </div>
                <div class="input-box">
                    <label for=""></label>
                    <input type="text" id="fullName" placeholder="Enter full name">
                </div>
                <div class="input-box">
                    <i class="fa-regular fa-envelope"></i>
                    <input type="email" id="email" placeholder="Enter your email">
                </div>
                <div class="input-box">
                    <input type="text" id="password" placeholder="Password">
                    <i class="fa-solid fa-key"></i>
                    <i class="fa-regular fa-eye-slash pw-hide"></i>
                </div>
                <div class="input-box">
                    <i class="fa-solid fa-key"></i>
                    <input type="text" id="rpassword" placeholder="Repeat Password">
                </div>
                <div class="submit">
                    <input type="submit" value="Signup">
                </div>  
                <p>Already have an account? <a href="#" id="signup">Login</a></p>
            </form>
        </div>
    </div>
    
</body>
</html>