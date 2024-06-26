<?php
require 'function.php';

// Ambil ID dari parameter URL
$id = $_GET['id'];

// Ambil data kategori berdasarkan ID
$ktgr = query("SELECT * FROM kategori WHERE id = $id")[0];

// Jika tombol ubah di klik
if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                alert('Data berhasil diubah!');
                document.location.href = 'kategori.php';
              </script>";
    } else {
        echo "<script>
                alert('Data gagal diubah!');
              </script>";
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kategori</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Form Ubah</h1>
    <form action="" method="POST">
        <input type="hidden" name="id" value="<?= $ktgr['id']; ?>">
        <div class="mb-3">
            <label for="makanan" class="form-label">Menu</label>
            <input type="text" class="form-control" id="menu" name="menu" required value="<?= $ktgr['menu']; ?>">
        </div>
      
        <button type="submit" name="ubah" class="btn btn-primary">Ubah Data</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
