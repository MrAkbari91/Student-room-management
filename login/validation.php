<?php
	if(!$_SESSION['isadminLogin']){
		header("Location: /index.php");
		exit();
	}
?>