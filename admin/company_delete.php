<?php
include('connection/db.php');
$del=$_GET['del'];

$query=mysqli_query($conn,"DELETE FROM company WHERE company_id ='$del'");
if ($query) {
    echo "<script>alert('Données effacées')</script>";
    header('location:create_company.php');
}else{
    echo "<script>alert('Une erreure est survenu, Réessayez')</script>";
}
?>