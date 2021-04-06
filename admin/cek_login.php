<?php
 try 
 {
    $koneksi = new PDO("mysql:host=localhost; port=3306; dbname=rawat", "root", "");
    $koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 } 
catch (PDOexception $e) 
{
    
}
 $username = $_POST['username'];
 $password = $_POST['password'];
 $level = $_POST['level'];


if ($level == "admin") {
    $query = $koneksi->prepare("SELECT * FROM admin WHERE username=:user AND password=:pass");
    $query->execute([':user'=>$username, ':pass'=>$password]);

    $row = $query->fetch();
    if ($row) 
    {
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['status'] = 'login';
        header("location:home.php");
    }
    else
    {
        header("location:index.php");
    }
 }elseif ($level == "dokter") 
 {
    $query = $koneksi->prepare("SELECT * FROM dokter WHERE username=:user AND password=:pass");
    $query->execute([':user'=>$username, ':pass'=>$password]);

    $row = $query->fetch();

    if ($row) {
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['status'] = 'login';
        header("location:home2.php");
    }else{
        header("location:index.php");
    }
}else{
    header("location:index.php");
}

?>