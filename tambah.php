<?php
require 'function.php';
// jika tombol tambah di klik
if(isset($_POST['tambah'])) {
//    jika data berhasil di tambahkan
if(tambah($_POST)>0){
    echo "<script>
            alert('data berhasil ditambahkan!');
            document.location.href = 'kategori.php';
         </script>";
}
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Tambahkan Data </h1>
        <form action="" method="POST">
            <div class= "mb-3">
                <label for="nama" class="form-label">Menu</label>
                <input type="text" class="form-control" id="menu" name="menu"
                 require> 
                
                 <div class="mt-2">
                    <label for="foto">Foto</label>
                    <input type="file" name="foto" id="foto" class="form-control">
                </div>
            </div>
           
        
            
            <button type="submit" name="tambah" class="btn btn-primary">Tambah Data</button>
        </form>
    

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
