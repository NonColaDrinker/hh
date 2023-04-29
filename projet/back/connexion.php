<!DOCTYPE html>
<html>
<title>connexion</title>
  <link rel="stylesheet" type="text/css" href="../style/connexion.css">
<head>
  <meta charset='utf-8'>
<!DOCTYPE html>
<html>
<style>

	
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=password], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #6495ED;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=text] {
  border: 1.2px solid #6495ED;
  border-radius: 4px;
}
input[type=password] {
  border: 1.2px solid #6495ED;
  border-radius: 4px;
}

input[type=submit]:hover {
  background-color: #483D8B;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  width: 50%;
  margin-left: 280px;
  margin-top: 170px;
}
</style>

<body>
<div>
  <h3 style="margin-left: 15%;">Connexion</h3>
  <form action="../back/connexion_test.php" method="POST">
    <label for="fname">Email</label>
    <input type="text" id="fname" name="email" placeholder="votre Email" required>

    <label for="lname">Mot de passe</label>
    <input type="password" id="lname" name="mdp" placeholder="mot de passe "required>
  
    <input type="submit" value="Se Connecter">
  </form>
</div>

</body>
</html>



