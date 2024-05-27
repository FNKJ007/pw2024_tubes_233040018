<?php
require('function.php');
$users = query("SELECT * FROM user");
// if (isset($_SESSION['login'])) {
//     header("Location: login.php");
//     exit;
// }
if(isset($_POST['daftar'])){
    header("location:daftar.php");

}


if (isset($_POST['login'])) {
    login($_POST);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Danfo&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rubik+Glitch&display=swap" rel="stylesheet">
</head>
<body>
    <div id="app">
        
        <h1 class="mb-5">Login</h1>
        <form action="" method="post">
            <input type="text"  name="username" class="input w-75 p-3" placeholder="Username" /><br/><br/>
            <input type="password" name="password" class="input w-75 p-3" placeholder="Password" /><br/>
            <button type="submit" name="login" class="btn btn-danger mt-4" >Login</button>
            <button a href="daftar.php" type="submit" name="daftar" class="btn btn-danger mt-4" >Daftar</button>

          </li>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
