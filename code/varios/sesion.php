<?php
	if($_POST['user']=="yoyis" && $_POST['pass']=="1234"){
		session_start();
		$_SESSION["usuario"] = "YO";
		$_SESSION["nickname"] = "yoyis";
		header("Location: main.php");
	}else{

		header("Location: error.php");
	}
?>

