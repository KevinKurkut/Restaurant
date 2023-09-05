<?php
session_start();
require_once __DIR__ . "/config/database.php";

if (isset($_POST['signup'])) {
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    // validate the email
    $validate_email = filter_var($email, FILTER_SANITIZE_EMAIL);
    if ($validate_email) {
        $email = filter_var($validate_email, FILTER_VALIDATE_EMAIL);
        if ($email == false) {
            echo "Invalid format";
        }
    }

    // check if the password contains 8 characters and has letters and numbers.
    if (!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z]{8,}$/',$_POST["password"])) {
        echo "Password must contain numbers and letters and must be at least 8 characters long!";
    }

    // check if both passwords match
    if ($password !== $cpassword) {
        echo "Passwords should match";
    }
    
    // hash the password
    $hash_password = password_hash($password, PASSWORD_DEFAULT);

    // insert user into database
    
    $sql = $mysqli->prepare("INSERT INTO users (Fullname, Email, Password) VALUES (?, ?, ?)");
    $sql->bind_param("sss", $fullName, $email, $hash_password);
    $sql->execute(); 
    $result = $mysqli->insert_id;
    if ($result) {
        header("Location: login.php");
        exit;
    }
    $sql->close();
    
}


// process the login form 
elseif (isset($_POST['login'])) {
    $loginEmail = $_POST['loginEmail'];
    $loginPassword = $_POST['loginPassword'];

    $stmt = $mysqli->prepare("SELECT * FROM users WHERE Email = ? AND Password = ?");
    $stmt->bind_param("ss", $loginEmail, $loginPassword);
    $stmt->execute();
    $res = $stmt->get_result();
    if ($res->num_rows > 0) {		
        if ($row = $res->fetch_assoc()) {
            if (password_verify($hash_password, $password)) {
                $sessionEmail = $row['Email'];
                $sessionId = $row['id'];  
                
                $_SESSION['auth'] = array(
                    'email'=> $sessionEmail,
                    'id'=> $sessionId
                );

                header("Location: index.php");
                exit;
            }      
        }
    }
      
    else {
        echo "User doesn't exist";
    }
    $stmt->close();
    
}

?>