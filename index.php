<<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
		$role = '';
	?>
	<form action=""method="POST">
		<p>Логин
			<input type="текст" name="Login">
		</p>
		<p>Пароль
			<input type="password" name="Password">
		</p>
		<p>
			<input type="submit" name="butt" value="Войти">
		</p>

	</form>


	<?php 
	$lgn =$_POST["Login"];
	$psw =$_POST["Password"];
	echo "Получены из формы: логин $lgn и пароль $psw <br>";




		$query = 'SELECT * FROM users';
		$result = mysqli_query($link, $query) or die(mysqli_error($link));
		while ($row = mysqli_fetch_assoc($result)) {
			//printf("Айди %s <br> Логин %s <br> Пароль %s <br>", $row["ID"], $row["Login"], $row["Password"]);//
			if($lgn == $row["Login"] && $psw == $row["Password"]) {
				echo "Вы успешно авторизовались";
				$role = 'admin';
			} 
		}
		if ($role == '' && isset($_POST["butt"])){
			echo "Вам неообходимо зарегистрироваться";
		}
	?>
		<form action=""method="POST">
		<p>Логин
			<input type="text" name="ins_Login">
		</p>
		<p>Пароль
			<input type="password" name="ins_Password">
		</p>
		<p>
			<input type="submit" name="ins_butt" value="Зарегистрироваться">
		</p>

	</form>
	<?php 
			$ins_lgn =$_POST["ins_Login"];
			$ins_psw =$_POST["ins_Password"];
			
			if (!empty($ins_lgn) && !empty($ins_psw)) {
				$query2 = "INSERT INTO users (Login, Password) VALUES ('".$ins_lgn."','".$ins_psw."')"; 
				$result2 = mysqli_query($link, $query2) or die(mysqli_error($link));
	
				if ($result2 && isset($_POST["ins_butt"])) {
					echo "Вы успешно зарегистрировались";
				} else {
					echo "Error!!!";
				}
			}else {
				echo "Заполните поля!";
			}

	 ?>
</body>
</html>