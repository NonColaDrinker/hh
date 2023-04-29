<?php
include_once 'VarConn.php';
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$wilaya=$_POST['wilaya'];
$sujet=$_POST['subject'];
if (!$conn){
    die("Erreur de connexion à la BD ");
}
$lignes=mysqli_query($conn,"insert into messages (nom,prenom,wilaya,sujet) values ('$nom','$prenom','$wilaya','$sujet');");
echo("<script>alert(\"Votre message a bien été envoyé\")</script>");
echo("<script>window.location = '../index.php';</script>");
?>