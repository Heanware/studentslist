<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>students list</title>
	<link rel="stylesheet" href="/style.css">
</head>
<body>
	<div class="regbutton"><a href="/View/reg.php">Регистрация</a></div>
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
			

			<?php if ( $users == '' ): ?>
				<td>THERE IS NO USERS</td>
				<?php else : ?>
					<?php while($usersOutput = mysqli_fetch_assoc($users)){ ?>
						<tr>
							<td class="id"><?php echo $usersOutput['id'] ?></td>
							<td class="name"><?php echo $usersOutput['name'] ?></td>
							<td class="surname"><?php echo $usersOutput['surname'] ?></td>
							<td class="gender"><?php echo $usersOutput['gender'] ?></td>
							<td class="groupnumber"><?php echo $usersOutput['groupnumber'] ?></td>
							<td class="email"><?php echo $usersOutput['email'] ?></td>
							<td class="points"><?php echo $usersOutput['points'] ?></td>
							<td class="birthday"><?php echo $usersOutput['birthday'] ?></td>
							<td class="place"><?php echo $usersOutput['place'] ?></td>
						</tr>
					<?php }; 
				endif?>




			</table>
		</body>
		</html>