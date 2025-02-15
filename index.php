<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form section="index.php" method="post">
        <label>Username:</label>
        <input type="text" name="name" id="name" placeholder="Enter your name"><br><br>
        <label>Password:</label>
        <input type="password" name="password" id="password" placeholder="Enter your password" minlength="2" maxlength="25"><br><br>
        <label>Payment:</label>
        <input type="number" name="number" id="number" placeholder="Enter your payment"><br>
        <br>
        <label>Gender:</label>
        <input type="radio" name="gender" id="male" value="male">
        <label for="male">Male</label>

        <input type="radio" name="gender" id="female" value="female">
        <label for="female">Female</label>

        <input type="submit" value="Submit">
    </form>
<script src="script.js"></script>
</body>
</html>

<?php
 $name = $_POST["name"];
 $password = $_POST["password"];
 $number = $_POST["number"];
 $gender = $_POST["gender"];

 echo "{$name} <br>";
 echo "{$password} <br>";
 echo "{$number} <br>";
 echo "{$gender} <br>";

?>

