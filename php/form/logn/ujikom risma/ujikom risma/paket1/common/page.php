<?php

$page = $_GET['page'];

  	if ($page =="") {
 		include("pages/home.php");

	}else{

			if ($page == "logout"){

			$_SESSION['username'] = "";
			$_SESSION['status']   = "";
			$_SESSION['level']    = "";
			header("location:index.php");
	
		}

		include("pages/$page.php");


	}

?>