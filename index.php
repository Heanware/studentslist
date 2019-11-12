<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>students list</title>
	<link rel="stylesheet" href="/style.css">
</head>
<body>
	<div class="regbutton"><a href="View/reg.php">Регистрация</a></div>
	<div class="search">

		<span><?php echo $config['list'] ?></span>
		<span>Поиск : [<input type="text">][<button>Найти</button>]</span>
	</div>


	<table cellpadding="5" border="1" align="center" >
		<tr>
			<td>ID</td>
			<td>Имя</td>
			<td>Фамилия</td>
			<td>Пол</td>
			<td>Номер группы</td>
			<td>Email</td>
			<td>Баллов</td>
			<td>Год рождения</td>
			<td>Здесь?</td>
		</tr>
		<tr>
			

			<?php 
			
			if($check == true){
				echo 'Не найдено ни одного пользователя!';
			}else{ ?>
				<tr>
					<td class="id"><?php echo $idst['id']?></td>
					<td class="name"><?php echo $idst['name']?></td>
					<td class="surname"><?php echo $idst['surname']?></td>
					<td class="gender"><?php echo $idst['gender']?></td>
					<td class="groupnumber"><?php echo $idst['groupnumber']?></td>
					<td class="email"><?php echo $idst['email']?></td>
					<td class="points"><?php echo $idst['points']?></td>
					<td class="birthday"><?php echo $idst['birthday']?></td>
					<td class="place"><?php echo $idst['place']?></td>
				</tr>

				<?php 
			}
			
			?>

			

			
		</table>
	</body>
	</html>