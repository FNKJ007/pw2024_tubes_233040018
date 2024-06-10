<?php
include 'function.php';
$kategori = query("SELECT * FROM kategori");
// tombol cari ditekan
if( isset($_POST["cari"])) {
    $kategori = cari($_POST["keyword"]);
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
    <h1>Kategori</h1>
    <a href="tambah.php" class="btn btn-primary">Tambah Data</a>

    <form action="" method="post" class="mt-3 mb-3">
        <input type="text" name="keyword" size="50" autofocus
        placeholder="Cari Kategori" autocomplete="off" id="keyword">
        <button type="submit" name="cari" id="tombol-cari">Search!</button>
    </form>

    <div id="contain">
        <table class="table">
           <thead>
                <tr>
                 <th scope="col">No</th>
                 <th scope="col">Gambar</th>
                 <th scope="col">menu</th>
                 
                 <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
             <?php $i = 1; foreach       ($kategori as $ktgr) : ?>
                <tr>
                 <th scope="row"><?= $i++ ?></th>
                 <td><img src="image/<?= $ktgr['gambar']; ?>" width="70"></td>
                 <td><?= $ktgr['menu']; ?></td>
                 
                    <td>
                     <a href="ubah.php?id=<?= $ktgr['id'];?>" class="badge text-bg-warning text-decoration-none">Edit</a>
                     <a href="hapus.php?id=<?= $ktgr['id'];?>" onclick="return confirm('Apakah anda yakin?');" class="badge text-bg-danger text-decoration-none">Delete</a>
                    </td>
                </tr>
             <?php endforeach ?>
            </tbody>
        </table>
    </div>

    
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script src="js/script.js"> </script>
</body>
</html>
