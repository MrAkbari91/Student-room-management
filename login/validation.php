<?php
	if(!$_SESSION['isstudentLogin']){
		header("Location: index.php");
		exit();
	}
?>