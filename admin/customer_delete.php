<?php
include('connection/db.php');
$del=$_GET['del'];

$query=mysqli_query($conn,"DELETE FROM admin_login WHERE id ='$del'");
if ($query) {
    echo "<script>alert('Données effacées')</script>";
    header('location:Customers.php');
}else{
    echo "<script>alert('Une erreure est survenu, Réessayez')</script>";
}

?>