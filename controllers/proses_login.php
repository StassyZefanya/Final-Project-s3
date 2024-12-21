<?php 
    session_start(); 
    include("db.php"); 

    $username = $_POST['username']; 
    $password = $_POST['password']; 

    // Query untuk cek username dan password
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'"; 
    $result = $conn->query($sql); 

    if ($result->num_rows > 0) { 
        // Jika login berhasil, simpan username dalam session dan arahkan ke halaman welcome
        $_SESSION['username'] = $username; 
        header("Location: /dashboard"); 
    } else { 
        // Jika login gagal, simpan pesan error dalam session dan arahkan kembali ke halaman login
        $_SESSION['login_error'] = 'Username atau Password salah!';
        header("Location: /dashboard");
    } 

    $conn->close(); 
?>
