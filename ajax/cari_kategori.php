<?php
require '../function.php';
$keyword = $_GET["keyword"];
$query = "SELECT * FROM kategori
            WHERE
          menu LIKE '%$keyword%' 
         
         ";
$kategori = query($query);
?>
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
                 <td><img src="image/<?= $ktgr['gambar']; ?>" width="60"></td>
                 <td><?= $ktgr['menu']; ?></td>
                 
                    <td>
                     <a href="ubah.php?id=<?= $ktgr['id'];?>" class="badge text-bg-warning text-decoration-none">Edit</a>
                     <a href="hapus.php?id=<?= $ktgr['id'];?>" onclick="return confirm('Apakah anda yakin?');" class="badge text-bg-danger text-decoration-none">Delete</a>
                    </td>
                </tr>
             <?php endforeach ?>
            </tbody>
        </table>