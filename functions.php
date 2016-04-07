<?php

	require_once("../../config.php");

	function signup($user, $pass){
		
		
		//GLOBALS - access outside variable in function
		$mysql = new mysqli("localhost", $GLOBALS["db_username"], $GLOBALS["db_password"], "webpr2016_karoliinar");
		
		$stmt = $mysql->prepare("INSERT INTO users (username, password) VALUES (?,?) ");
		
		echo $mysql->error;
	
		$stmt->bind_param("ss", $user, $pass);	
		
		if($stmt->execute()){
			echo "user saved successfully!";
		}else{
			echo $stmt->error;
		}
		
	}

	/*$name= "Karoliina";

	hello($name);

	function hello($recieved_name){
		echo "hello ".$recieved_name."!";
	}*/


?>