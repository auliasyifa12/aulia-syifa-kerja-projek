<?php 
include("config.php");

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];


    $sql  = "INSERT INTO feedback (`tanggal`, `name`, `email`, `message`) VALUES (NOW(), '$name', '$email', '$message')";
    $query = mysqli_query($db, $sql);

    if ($query) { 
        header('Location: index.php?status=sukses');} 
        else {
        header('Location: index.php?status=gagal');
    }
}
 else {
    die(mysqli_error($db));
}
;
?>