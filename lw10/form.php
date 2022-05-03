<!DOCTYPE html>
<html lang="ru">
<head>
  	<meta charset="UTF-8">
	<link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
  	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600&family=Roboto+Condensed&display=swap" rel="stylesheet">
</head>
<body>
	<div class="popup-block_hidden popup">
		<div class="record-form">
			<img class="record-image astronaft" src="images/astronaft.png">
			<form class="form" action="/getData.php">
				<p class="sign-up_text">Записаться на курс</p>
				<input class="record-form__name record-place" type="text" name="first_name" placeholder="Ваше имя">
				<input class="record-form__email record-place" type="email" name="email" placeholder="Email">
				<select class="record-form__selector record-place" name="activity">
					<option hidden value="-" >Деятельность</option>
					<option value="Программист">Программист</option>
					<option value="Дизайнер">Дизайнер</option>
					<option value="Маркетолог">Маркетолог</option>
				</select>
				<div class="record-form__label">
					<input class="record-form__checkbox" type="checkbox">
					<label class="label-text_agree" for="record-form__checkbox">Согласен получать информационные материалы о старте курса</label>
				</div>
				<input class="record-form__button" type="submit" value="Записаться на курс">
			</form>
		</div>
		<img class="cross hidden" src="images/cross.svg">			
	</div>
</body>
</html>