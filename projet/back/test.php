<!DOCTYPE html>
<html>
    <head>
  <link rel="stylesheet" type="text/css" href="../style/register.css">
  <meta charset='utf-8'>
    </head>
<body>
<?php
include_once 'VarConn.php';
$nom=$_POST['name'];
$prenom=$_POST['prenom'];
$mail=$_POST['email'];
$passer=$_POST['mdp'];
//$conn=mysqli_connect('localhost','root','obi wanmdp','test_g7');
if (!$conn){
    die("Erreur de connexion à la BD ");
}
//mysqli_query($conn,"insert into login (nom,prenom,email,mdp) values ('2','5','4','2');");
$lignes=mysqli_query($conn,"select * from login where email='$mail';");
$Nlignes=mysqli_num_rows($lignes);
$Nlignes = intval( $Nlignes );
if ($Nlignes > 0){
    echo("<script>alert(\"L'email est déjà utilisé, vérifier vos donneés et réessayer\")</script>");
    echo("<script>window.location = '../content/register.html';</script>");
}else{
    mysqli_query($conn,"insert into login (nom, prenom,email,mdp) values ('$nom','$prenom','$mail','$passer');");
    echo "<script> alert(\"Compte crée!\"); </script>";
    echo("<script>window.location = '../index.php';</script>");
}
?>
</body>
</html>