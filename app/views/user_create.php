<html>
<HEAD>
	<title id="title-doc">Camagru</title>
	<meta content="camagru; sangare; cadiot; 42; école 42; php" name="keywords">
	<Meta  charset = "UTF-8">
		<link rel="stylesheet" href="../../public/css/application.css" />

</head>

<body>
	<center><B><h1>Ouvrez vous à la magie de Camagru !</h1></B></center>
		<br/>
		<br/>
		<br/>
		<p><B><I>Création de votre profil utilisateur :</I></B></p>
		<br/>
		<br/>
<form method="post" action="../src/user_create.php">
	Pseudo : <input type="text" name="login" value=""/>
	Mail : <input type="email" name="email" value=""/>
	Mot de passe: <input type="password" name="password" value=""/>
	Vérification du mot de passe: <input type="password" name="passverif" value=""/>
	<input type="submit" name="submit" value="OK" />
	<INPUT TYPE="reset" NAME="reset" VALUE="Effacer">
</form>
<br/>

<br/>
<br/>
<a  href = "../../public/index.php"> Se connecter / Revenir à l'accueil !!!! </a>
<br/>
<br/>
<br/>
<hr/>
<br/>
<p  class = "copyright"> © Camagru - pcadiot/fsangare 2017 </p>
</body>
</html>
