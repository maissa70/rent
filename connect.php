<?php
	$host = 'localhost';
		$dbname ='mabase';
		$login = 'root';
		$pass = '' ;

	try{
			$bdd = new PDO("mysql:host=$host;dbname=$dbname",$login,$pass);
			} catch(PDOException $e) {
				die ($e->getMessage()); 
			}