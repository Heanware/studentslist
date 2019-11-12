<?php

require "database.php";

class Controller{

	function userData(){
		
		$name = $_POST['name'];
		$forname = $_POST['forname'];
		$gender = $_POST['gender'];
		$groupnumber = $_POST['groupnumber'];
		$email = $_POST['email'];
		$points = $_POST['points'];
		$birthday = $_POST['birthday'];
		$place = $_POST['place'];

		$studentInfo = array(

			"name" => $name,
			"forname" => $forname,
			"gender" => $gender,
			"groupnumber" => $groupnumber,
			"email" => $email,
			"points" => $points,
			"birthday" => $birthday,
			"place" => $place

		);


		
		userReg();
	}

	function userReg(){
		$datain = mysqli_query($connect, "INSERT INTO `students` (`name`, `surname`, `gender`, `groupnumber`, `email`, `points`, `birthday`, `place`) VALUES ('name', 'forname', 'gender', 'groupnumber' ,'email', 'points' ,'birthday', 'place')"); 


	}
	function userCheck(){
		$userExist = mysqli_query($connect, "SELECT * FROM `students`");
		if($userExist == null){
			return false;
		}else{
			$output = mysqli_fetch_assoc($userExist);
		};
	}


}
require "../Model/model.php";




