<?php
include('connection/db.php');

$Company=$_POST['Company'];
$Description=$_POST['Description'];
$admin=$_POST['admin'];

$query=mysqli_query($conn,"INSERT INTO company(company,des,admin)values('$Company','$Description','$admin')");

//var_dump($query);

if ($query) {
    echo "Données enregistrées avec succes";
}else{
    echo "Données invalides, Réessayez";
}
