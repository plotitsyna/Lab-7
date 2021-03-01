<?php
	session_start();
?>
<form method="post" action="Lab_4_Опалев_П-811.php">
	<p>Введите имя:<br>
	<input type="text" name="name"></p>
	<p>Введите email:<br>
	<input type="text" name="email"></p>
	<p>Введите сообщение:<br>
	<textarea name="message" cols="40" rows="5" ></textarea></p>
	<p>Введите числа с картинки: <br>
	<img src="captcha.php"><br><br>
	<input type="text" name="captcha" placeholder="Введите цифры"><br></p>
	<p><input type="submit" name="submit" value="Отправить"><br></p>
</form>
<?php
    if ($_POST['captcha'] == $_SESSION['captcha']){
    echo ("Проверка прошла успешно");
}
else{
    echo "Ошибка";
}
?>