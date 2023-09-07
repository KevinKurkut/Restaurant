<?php session_start()
?>
<div class="fixed-navbar">
    <div class="wrapper">
        <!-- toggle button available on small screens -->
        <button class="nav-toggle">
            <span class="hamburger"></span>
        </button>

        <div class="logo-nav">
            <div class="logo">
                <!-- <img src="images/logo.png" alt=""> -->
                <a href="index.html" class="logo-text">Eats</a>
            </div>

            <nav class="navbar">
                <ul class="nav-group">
                    <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                    <li class="nav-item"><a href="menu.php" class="nav-link">Menu</a></li>

                    <?php
                    if (isset($_SESSION['auth'])) :?>
                        <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
                    
                    <?php else : ?>  
                    <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
                    <?php endif ?>
                </ul>
            </nav>
        </div>
    </div>
    </div>

