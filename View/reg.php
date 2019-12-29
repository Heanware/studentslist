
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>registration</title>
	<link rel="stylesheet" href="../style.css">
</head>
<body>
	<form class="regform" name="regform" action="../Controller/controller.php" method="POST">
		
		
		<span>Введите имя (От 1 до 20 символов, только русскими буквами)</span><input type="text" required name="name" pattern="^[А-Я]{1}[а-я]{1,19}$"  maxlength="20">

		<span>Введите фамилию (От 1 до 25 символов, только русскими буквами)</span><input type="text" required name="surname" pattern="^[А-Я]{1}[а-я]{1,24}$"  maxlength="25">

		<span>Введите пол </span><input type="radio" required name="gender" value="Мужской">Мужской  <input type="radio" required name="gender" value="Женский">Женский

		<span>Введите номер группы</span><input type="text" required name="groupnumber" pattern="^[A-Z0-9]{2,5}$"  maxlength="5">

		<span>Введите email</span><input type="text" required name="email" pattern="^[A-Za-z0-9@,.]{5,20}$"  maxlength="20">
		
		<span>Введите количество баллов</span><input type="text" required name="points" pattern="[0-9]{1,3}"  maxlength="3">

		<span>Введите год рождения</span><input type="text" required name="birthday" pattern="^[1-2]{1}[0-9]{3}$" maxlength="4">

		<span>Вы местный?</span><input type="radio" required name="place" value="Местный">Да  <input type="radio" required name="place" value="Иногородний">Нет

		<button type="submit">OK</button>

	</form>


</body>
</html>