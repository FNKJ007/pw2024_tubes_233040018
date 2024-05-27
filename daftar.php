<?php
require 'function.php';

// jika tombol tambah di klik
if(isset($_POST['daftar'])) {
    //    jika data berhasil di tambahkan
    if(daftar($_POST)>0){
        echo "<script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'login.php';
             </script>";
    }
    }


?>  

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
          <link rel="stylesheet" href="css/daftar.css">
          <link href="https://fonts.googleapis.com/css2?family=Danfo&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rubik+Glitch&display=swap" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1>Daftar</h1>
    <form action="" method="POST">
        <div class="mb-4">
            <input type="text" name="username" placeholder="Username"class="input w-75 p-3" id="username" name="username" required> 
        </div>
        <div class="mb-4">
            
            <input type="text" name="password" placeholder="Password"class="input w-75 p-3" id="password" name="password" required>
        </div>
        <button type="submit" name="daftar" class="btn btn-danger">Daftar</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
