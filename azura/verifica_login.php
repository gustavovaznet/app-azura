<?php
	//SESSION CHECK
	if(!$_SESSION['user']){
		header('location: index.php?status=invalido');
	}
?>
