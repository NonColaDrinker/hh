<!DOCTYPE html>
<html>
<head>
  <title>Sweet chique </title>
  <meta charset='utf-8'>
  <link rel="stylesheet" href="../style/footer.css">
  <link rel="stylesheet" type="text/css" href="../style/style.css">
  <link rel="icon" type="images/png" href="../images/sweet.png">
</head>
<body>
<?php
include_once 'VarConn.php';
//il faut exécuter le code sql en premier
$Achercher=$_POST['phrase'];
if(!$conn){
    die("erreur de connexion à la BD");
}
$lignes=mysqli_query($conn,"select * from personne where persID='$Achercher';");
$Nlignes=mysqli_num_rows($lignes);
if($Nlignes >0){
while($row =mysqli_fetch_assoc($lignes) ){
   echo "<br> <br> <br> <br> <br> <br> <br>";
   echo "<p style=\"font-family: 'Brush Script MT', cursive; font-size:200%; text-align:center;\">".$row['genre']."<br> </p>";
   echo "<p style=\"font-family: 'Brush Script MT', cursive; font-size:200%; text-align:center;\">prix=".$row['prix']."</p>";
  }
}
else{
  echo "<br> <br> ";
  echo "<p style=\"font-size:130%;\"><b style=\"Color:black;\"> Rien n'a été trouvé :( </b></p> ";
}
?>
</body>
</html>