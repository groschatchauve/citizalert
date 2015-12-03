<?php session_start(); ?>

<!doctype html>
<html lang='fr'>

<head>
<meta charset='utf-8'>
<title>Defi</title>
<link rel='stylesheet' type='text/css' href='./style.css' />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>

<body>
<header>

<?php
if(isset($_GET['v']) && $_GET['v'] == "err"){
	echo "<div id='err'>Erreur id ou pw</div>";
}
else{
	echo "<div id='resultat'>Connexion</div>";	
}
?>

</header>

<form id='form' action='inc/verifLogin.php' method='POST'>
<label for="login">Login</label>
<input type="text" name="login" id="login" autofocus>

<label for="password">Password</label>
<input type="password" name="password" id="password">

<input type="submit" name="submit" value="se connecter" id="bouton_envoyer">

</form>

<footer>

</footer>

</body>
</html>