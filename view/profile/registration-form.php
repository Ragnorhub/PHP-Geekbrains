<div class="registration_box">
	<h2>Регистрация</h2>
	<form action="/execute/registration.php" method="post">
		<input type="text" name="user_name" placeholder="Имя"
		       required minlength="2">
		<input type="email" name="user_email" placeholder="E-mail" required>
		<input type="password" name="user_password"
		       placeholder="Пароль" required minlength="6">
		<input type="submit" name="reg" value="Отправить">
	</form>
</div>