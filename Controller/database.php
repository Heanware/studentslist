
<?php 



$config = array(

	'db' => array(
		'server' => 'localhost',
		'username' => 'admin',
		'password' => '123',
		'name' => 'stud',

	),
	'list' => 'Список абитуриентов'
);

$connect = mysqli_connect( 
	$config['db']['server'],
	$config['db']['username'],
	$config['db']['password'],
	$config['db']['name']
);

if($connect == false){
	echo "fucc";
} else {
	echo "not fucc";
}



