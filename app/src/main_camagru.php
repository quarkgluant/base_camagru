<?php

session_start();

?>
<HTML>
<HEAD>
	<title id="title-doc">Camagru</title>
	<meta content="camagru; sangare,cadiot,42,école 42,php,HTML5,webcam,cybercaméra,caméra,getUserMedia,device,multimédia,vidéo,MediaStream" name="keywords">
	<Meta  charset = "UTF-8">
<meta name="viewport" content="initial-scale=1.0,width=device-width" />
<link rel="stylesheet" href="../../public/css/application.css" />
<script>

 <?php
include('../js/confirm_del.js');
?>

</script>
</HEAD>
<body>

<?php
	include('../views/header.php');
?>
<hr/>
<br/>
<table  name="table1">
<tr>

<?php
	include('../views/main.php');
?>

</tr>
</table>
<br/>

<?php
	include('../views/footer.php');
?>

<script>

 <?php
include('../js/camera.js');
?>

</script>
</body>
</html>
