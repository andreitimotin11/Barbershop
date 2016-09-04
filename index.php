<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="content" content="Barbershop, barber">
	<meta name="description" content="Barbershop is a shop">
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link href=https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>

	<title> Barbershop</title>
</head>
<body>
	<header class="main-header">
		<div class="container clearfix">
			<nav class="main-navigation">
				<ul>
					<li>
						<a href="#">Информация</a>
					</li>
					<li>
						<a href="#">Новости</a>
					</li>
					<li>
						<a href="#">Прайс-лист</a>
					</li>
					<li>
						<a href="#">Магазин</a>
					</li>
					<li>
						<a href="#">Контакты</a>
					</li>
				</ul>

			</nav>
			<div class="user-block">
				<a href="#" class="login">Вход</a>
			</div>
		</div>
	</header>
	<main class="container">
		<div class="index-logo">
			<img src="img/index-logo.png" width="368" height="204" alt="Barbershop Borodinskiy">
		</div>
		<section class="features clearfix">
			<div class="features-item">
				<b class="features-name">Быстро</b>
				<p>Мы делаем свою работу быстро! Два часа пролетят незаметно и вы - счастливый
					обладатель стильной стрижки-минутки</p>
			</div>
			<div class="features-item">
				<b class="features-name">Круто</b>
				<p>Забудьте, как вы стриглись раньше. Мы сделаем из вас звезду футбола или кино!
					Во всяком случае внешне.</p>
			</div>
			<div class="features-item">
				<b class="features-name">Дорого</b>
				<p>Наши мастера - профессионалы своего дела и не могут стоить дешево.
					К тому же, разве цена не дает определенный статус?</p>
			</div>
		</section>
		<div class="index-content">
			<div class="index-content-left">
				<p class="index-content-title">Новости</p>
				<ul class="news-preview">
					<li>
						<p>Нам наконец завезли Ягермайстер! Теперь вы можете
							пропустить стаканчик во время стрижки</p>
						<time datetime="2016-01-11">11 января</time>
					</li>
					<li>
						<p>В нашей команде пополнение, Борис «Бритва Стригунец»,
							обладатель множества титулов и наград пополнил наши
							стройные ряды</p>
						<time datetime="2016-01-18">18 января</time>
					</li>
				</ul>
				<a href="#" class="btn">Все новости</a>

			</div>
			<div class="index-content-right">
				<p class="index-content-title">Фотогалерия</p>
					<img src="img/photo-gallery.png" alt="barbershop-photo">
					<a href="#" class="btn">Назад</a>
					<a href="#" class="btn">Вперед</a>
			</div>
		</div>
		<div class="index-content">
			<div class="index-content-left">
				<p class="index-content-title">Контактная информация</p>
				<p>
					БАРБЕРШОП «БОРОДИНСКИЙ»<br>
					АДРЕС: Г. САНКТ-ПЕТЕРБУРГ, Б. КОНЮШЕННАЯ, Д. 19/8<br>
					ТЕЛЕФОН: +7 (495) 666-02-66
				</p>
				<p>
					ВРЕМЯ РАБОТЫ:<br>
					ПН — ПТ: С 10:00 ДО 22:00<br>
					СБ — ВС: С 10:00 ДО 19:00
				</p>

				<a href="#" class="btn">Как проехать</a>
				<a href="#" class="btn">Обратная связь</a>

			</div>
			<div class="index-content-right">
				<p class="index-content-title">Записаться</p>
				<form action="index.php" class="register" name="form">
					<input type="text" name="" value="Дата" >
					<input type="text" name="" value="Время" >
					<input type="text" name="" value="Ваше имя">
					<input type="text" name="" value="Телефон">
					<button type="submit" value="Отправить"></button>
				</form>
			</div>
		</div>
	</main>
	<footer class="main-footer container">
		<section>
			БАРБЕРШОП «БОРОДИНСКИЙ»<br>
			АДРЕС: Г. САНКТ-ПЕТЕРБУРГ, УЛ. Б. КОНЮШЕННАЯ, Д. 19/8<br>
			<a href="#">КАК НАС НАЙТИ?</a>
		</section>
		<section>
			<p>Давайте дружить!</p>
			<a href="#" class="social-btn">vkontakte<img src="img/vk.png" alt="vkontakte"></a>
			<a href="#" class="social-btn">facebook<img src="img/fb.png" alt="facebook"></a>
			<a href="#" class="social-btn">instagram<img src="img/instagram.png" alt="instagram"></a>
		</section>
		<section>
			<p>Разработано:</p>
			<a href="htmlacademy.ru">htmlacademy.ru</a>
		</section>

	</footer>
<br><br><br><br><br>
</body>
</html>
