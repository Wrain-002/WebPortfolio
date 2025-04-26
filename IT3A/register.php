<?php
include 'connection.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<style>
    *{
    box-sizing: border-box;
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

body{
    background-color: #0b2d0b;
    
}


.container{
    margin-left: 30%;

}
.register{
    width: 50%;
  height: auto;
  padding:  10%;
  box-shadow: 0 8px 12px 0 rgba(0, 0, 0, 0.2), 0 12px 40px 0 rgba(0, 0, 0, 0.19);
  border-radius: 50px;
  background-image: url(./img/bggrn.jpg);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
  
}

.register h2{
    text-align: center;
    margin-bottom: 30%;
    margin-top: -30px;
    font-family: 'Font2';
    font-size: 50px;
    background: linear-gradient(45deg, #fefefe, #00ff00, #fefefe); 
 background-clip: text;
 color: transparent; 
}

.register label{
    font-size: 15px;
    color: white;
}


.reg input,
.reg select{
    width: 100%;
    padding:  20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 30px;
    box-shadow: 0 8px 12px 0 rgba(0, 0, 0, 0.2), 0 12px 40px 0 rgba(0, 0, 0, 0.19);
    box-sizing: border-box;
}

input[type=radio]{
    width: 20%;
}

input[type=submit] {
    background-color: #0b2d0b;
    color: white;
    padding: 14px 20px;
    margin-left: 80px;
    border: none;
    border-radius: 30px;
    cursor: pointer;
    width: 200px;
    font-family: 'Font2';
    box-shadow: 0 8px 12px 0 rgba(0, 0, 0, 0.2), 0 12px 40px 0 rgba(0, 0, 0, 0.19);
    margin-top: 30px;
  }
</style>
<body>
    
    <div class="container">
        <form action="connection.php" method="POST" class="reg">
        <div class="register">
        <h2>Student Registration</h2>
            <label for="username">Username</label>
            <input type="text" name="username"  placeholder="Enter your Username">
            <br>

            <label for="email">Email</label>
            <input type="text" name="email"  placeholder="Enter your Email">
          <br>

            <label for="phoneNum">Phone Number</label>
            <input type="text" name="phoneNum" placeholder="Enter your PhoneNumber">
            <br>
            
            <label>Gender</label ><br>
            <div class="genders">
            <label for="male"><input type="radio" name="gender">Male</label>
            <label for="female"><input type="radio" name="gender">Female</label>
            <label for="other"><input type="radio" name="gender">Other</label>
            </div>
            <br>


            <label for="password">Password</label>
            <input type="text" name="password"  placeholder="Enter your Password">
            <br>

            <label for="confirmPass">Confirm Password</label>
            <input type="text" name="confirmPass"  placeholder="Enter your confirmPass">

            <input href="login.php" type="submit" value="Register">
        </div>
    </form>
    </div>



</body>
</html>