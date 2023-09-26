<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
?>
<form id="posting_form" action="" method="POST">
	<input type="text" name="user_name" id="user_name"><label for="user_name">Имя</label> <br>
	<input type="email" name="user_email" id="user_email"><label for="user_email">Email</label><br>
	<label for="MESSAGE">Сообщение</label><br>
	<textarea name="MESSAGE" id="MESSAGE" cols="30" rows="10"></textarea><br>
	<button type="submit">Отправить</button>
</form>

