<div class="login_box">
	<h2>Вход</h2>
	<form action="/execute/login.php" method="post">
		<input type="email" name="user_email" placeholder="E-mail" required>
		<input type="password" name="user_password"
		       placeholder="Пароль" required minlength="6">
		<input type="submit" name="login" value="Отправить">
	</form>
</div>