<?php
	session_start();
	
	if( isset($_REQUEST['Signup'])){
		$name = $_REQUEST['name'];
		$password =  $_REQUEST['password'];
		$ID = $_REQUEST['ID'];
		$password1=$_REQUEST['password1'];
		$type=$_REQUEST['type']






		if(empty(trim($uname)) || empty(trim($password))|| empty(trim(ID))|| empty(trim(password1))||empty(trim($type)) ){
			echo "Null submission found!";
		}else{

			$file = fopen('user.txt', 'r');
			fwrite($file, $data)
			fclose($file);
			

			
		}

	}else{
		echo "invalid request! please fill up first!";
		
	}






?>