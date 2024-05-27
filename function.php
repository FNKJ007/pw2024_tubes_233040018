<?php
function koneksi() {
    $conn = mysqli_connect('localhost', 'root', '', 'pw2024_tubes_233040018');
    if (!$conn) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }
    return $conn;
}

function query($query){
    // koneksi ke database
    $conn = koneksi();
    // query ke tabel 
    $result = mysqli_query($conn, $query);
    // menyiapkan data 
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    
    return $rows;
    }
function login($data)
{
   $conn = koneksi();
   $username = htmlspecialchars($data ['username']);
   $password = htmlspecialchars($data['password']);

   $user = query("SELECT * FROM user WHERE username = '$username'")[1];

   if ($user){
        if(password_verify($password,$user['password'])){
         $_SESSION['login'] = true;
            $_SESSION['id'] = $user['id'];
            header("location: ../index.php");
         exit();
        }else{
        echo "<script>
                alert('Password salah!');
                document.location.href = 'login.php';
            </script>";
        }
    }else {
            echo  "<script>
            alert('Password salah!');
            document.location.href = 'login.php';
            </script>";
    }

}

function daftar($data)
{
    $conn = koneksi();
    $username = htmlspecialchars($data['username']);
    $password = htmlspecialchars ($data['password']);
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
 
    $query = "INSERT INTO user
              VALUES (null, '$username', '$password')
              ";
    mysqli_query($conn, $query) or die (mysqli_error($conn));

    return mysqli_affected_rows($conn);
}
