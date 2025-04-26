<?php
session_start(); // Start session

$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'billiedb';

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        
        // Directly compare passwords (no hashing)
        if ($password == $user['password']) {  
            session_regenerate_id(true);
            $_SESSION['id'] = $user['id'];
            $_SESSION['username'] = $user['username']; // Fixing the issue

            header("Location: index.php");
            exit();
        } else {
            echo "<script>alert('Invalid password!'); window.location='login.php';</script>";
        }
    } else {
        echo "<script>alert('No user found with this username!'); window.location='login.php';</script>";
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>Drama Hub | Login Page</title>
    <style>
        /* General Styling */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Times New Roman', Times, serif;
        }
        @font-face {
         font-family: 'Font1';
        src: url(font/ROMANS.otf);
}
         @font-face {
         font-family: 'Font2';
          src: url(font/Ralish\ Voga.otf)
}

        @font-face {
        font-family: 'Font3';
        src: url(font/Balisong-UltraItalic.ttf);
}

        body {
            background-color: #0b2d0b;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding: 20px;
        }

        .container {
            width: 40%;
            height: 70%;
            display: flex;
            background: #fff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2), 0 12px 40px 0 rgba(0, 0, 0, 0.19);
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-image: url(./img/bggrn.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }

        .container h1 {
            text-align: center;
            width: 100%;
            margin-bottom: 20px;
            font-family: 'Fon2';
            font-size: 50px;
            background: linear-gradient(45deg, #0b2d0b, #fefefe, #0b2d0b); 
            background-clip: text;
            color: transparent; 

        }

        .form-group {
            width: 67%;
            margin-right: 200px;
            margin-top: 30px;
        }

        .form-group label {
            display: block;
            font-size: 20px;
            margin-bottom: 5px;
            margin-left: 10px;
            color: #fefefe;
        }

        .input-wrapper {
            position: relative;
            width: 100%;
            margin-right: 30px;
        }

        .input-wrapper input {
            width: 150%;
            height: 45px;
            padding: 30px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 30px;
            outline: none;
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2), 0 12px 40px 0 rgba(0, 0, 0, 0.19);
            padding-right: 40px;
        }

        .input-wrapper .toggle-password {
            position: absolute;
            right: -150px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #2c033d;
            font-size: 18px;
        }

        .form-group a {
            display: block;
            font-size: 14px;
            color: #ffffff;
            text-decoration: none;
            margin-top: 5px;
            text-align: right;
        }

        /* Button Container */
        .button-container {
            display: flex;
            justify-content: space-between;
            gap: 10px;
            margin-top: 50px;
        }

        .login-btn {
            width: 48%;
            padding: 12px;
            background-color: #0b2d0b;
            color: #ffffff;
            border: none;
            border-radius: 20px;
            font-family: 'Font2';
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2), 0 12px 40px 0 rgba(0, 0, 0, 0.19);
        }

        .login-btn:hover {
            background-color: #238131;
        }

    </style>
</head>
<body>

<div class="container">
     <h1>LOG IN</h1>
    
        <form action="login.php" method="POST">
            <!-- Username -->
            <div class="form-group">
                <label for="username"><i class="fa-regular fa-user"></i> Username</label>
                <div class="input-wrapper">
                    <input type="text" id="username" placeholder="Type your username" name="username" required>
                </div>
            </div>
            <!-- Password -->
            <div class="form-group">
                <label for="password"><i class="fa-solid fa-lock"></i> Password</label>
                <div class="input-wrapper">
                    <input type="password" id="password" placeholder="Type your password" name="password" required>
                    <i class="fa-regular fa-eye toggle-password" id="togglePassword"></i>
                </div>
            </div>
            <!-- Buttons -->
            <div class="button-container">
                <button type="submit" class="login-btn" >Login</button>
                <a href="register.php" class="login-btn" style="text-align:center; text-decoration: none; display: block;">Register</a>
            </div>
        </form>
</div>

</body>
</html>
