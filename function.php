<?php
function koneksi() {
    $conn = mysqli_connect('localhost', 'root', '', 'pw2024_tubes_233040018');
    if (!$conn) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }
    return $conn;
}

function query($query){
    $conn = koneksi();
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function login($data) {
    $conn = koneksi();
    $username = htmlspecialchars($data['username']);
    $password = htmlspecialchars($data['password']);

    $user = query("SELECT * FROM admin WHERE username = '$username'")[0];

    if ($user) {
        if ($password == $user['password']) {
            $_SESSION['login'] = true;
            $_SESSION['id'] = $user['id'];
            header("location:admin_depan.php");
            exit();
        } else {
            echo "<script>
                    alert('Password salah!');
                    document.location.href = 'login.php';
                  </script>";
        }
    } else {
        echo "<script>
                alert('Username tidak ditemukan!');
                document.location.href = 'login.php';
              </script>";
    }
}

function daftar($data) {
    $conn = koneksi();
    $username = htmlspecialchars($data['username']);
    $password = htmlspecialchars($data['password']);
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO admin (username, password) VALUES ('$username', '$password')";
    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function tambah($data) {
    $conn = koneksi();
    $menu = htmlspecialchars($data['menu']);
   

    $query = "INSERT INTO kategori (menu) VALUES ('$menu')";
    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function ubah($data) {
    $conn = koneksi();
    $id = htmlspecialchars($data['id']);
    $menu = htmlspecialchars($data['menu']);
    

    $query = "UPDATE kategori SET menu = '$menu' WHERE id = $id";
    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function cari($keyword) {
    $query = "SELECT * FROM kategori
                WHERE
               menu LIKE '%$keyword%' 
              ";
    return query ($query);
}
?>
