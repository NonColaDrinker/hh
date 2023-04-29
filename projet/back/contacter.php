<?php
include_once 'VarConn.php';
$email=$_POST['e-mail'];
$sujet=$_POST['sujet2'];
if (!$conn){
    die("Erreur de connexion à la BD ");
}
$lignes=mysqli_query($conn,"insert into contact (email, unmessage) values ('$email','$sujet');");
echo("<script>alert(\"Une réponse vous sera communiquée\")</script>");
echo("<script>window.location = '../index.php';</script>");
?>