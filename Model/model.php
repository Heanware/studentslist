<?php 

//ВСЕГДА БЛЯТЬ СТАВИТЬ ЗАПЯТУЮ И ПРОВЕРЯТЬ СОПОСТАВЛЕНИЕ КОЛИЧЕСТВА ДАННЫХ ДЛЯ ВВЕДЕНИЯ И ИМЕН ПОЛЕЙ БЛЯТЬ
class Model{
	function Datasave($connect){
		$name = $_POST['name'];
		$surname = $_POST['surname'];
		$gender = $_POST['gender'];
		$groupnumber = $_POST['groupnumber'];
		$email = $_POST['email'];
		$points = $_POST['points'];
		$birthday = $_POST['birthday'];
		$place = $_POST['place'];
		
		$datainfo = mysqli_query($connect, "INSERT INTO `students` (`name`, `surname`, `gender`, `groupnumber`, `email`, `points`, `birthday`, `place`) VALUES ('$name', '$surname', '$gender', '$groupnumber', '$email', '$points', '$birthday' , '$place')");
	}
	function DataOutput($connect){
		$users = mysqli_query($connect, "SELECT * FROM `students`");
		return $users;
	}

}




