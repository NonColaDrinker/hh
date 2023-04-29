<?php
include_once 'VarConn.php';
$nom=$_POST['name'];
$prenom=$_POST['prenom'];
$mail=$_POST['email'];
$passer=$_POST['mdp'];

if (!$conn){
    die("Erreur de connexion à la BD ");
}
$lignes=mysqli_query($conn,"select * from login where email='$mail' and mdp='$passer';");
$Nlignes=mysqli_num_rows($lignes);
if ($Nlignes==0){
 echo("<script>alert(\"Le compte n'existe pas ou utilisateur/mot de passe incorrect\")</script>");
 echo("<script>window.location = '../content/connexion.html';</script>");
}
else{
    echo("<script>alert('Connecté!')</script>");
    echo("<script>window.location = '../index.php';</script>");
}
?>