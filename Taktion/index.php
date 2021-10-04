








<!DOCTYPE html>
<html>
<head>
<title>Taktion</title>
<link rel="stylesheet" href="Css\main.css">
</head>
<body>
	<?php
$con = mysqli_connect('localhost','root','','taktion');
$name=$_POST['name'];
$lastname=$_POST['lastname'];
$telephone=$_POST['telephone'];
$feedback=$_POST['feedback'];



$sql=mysqli_query($con,"INSERT INTO taktion(name,lastname,telephone,feedback) VALUES('$name','$lastname','$telephone' ,'$feedback')");


?>
	<header class="header">
		
			<div class="container">
					<div class="top">
						<a href="#" class="logo">Taktion</a>
						<div class="nav">
							<a href="hoody.php">Hoody</a>
							<a href="#">T-Shirt</a>
							<a href="#">Joggers</a>
						</div>
						<div class="functions">
							<img src="img/search.svg" alt="">
							<img src="img/profile.svg" alt="">
							<img src="img/bag.svg" alt="">
							</div>

					</div>
					</div>
					<hr class="hr1"></hr>
					
					<div class="header-content">
												
							<div class="mainphoto">
								<h1 class="offer">Find your perfect <span>outfit</span>
								</h1>	
									<div class="mainphoto-1">
									<img src="img/img1.jpg" alt="">
									<img src="img/img2.jpg" alt="">									
									</div>
									<div class="slider"><a href="#"><img src="img/slide1.svg" alt=""></a>
									<a href="#" class="active"><img src="img/slide2.svg" alt=""></a>
									<a href="#"><img src="img/slide1.svg" alt=""></a>
								</div>
								
						</div>
					</div>		
	</header>
	<section class="section_2">
		<div class="container">
			<div class="content">
				<div class="textbox">
					<div class="textbox_inner1">
						<h2>О компании <span>Taktion</span></h2>
						<p><span>Taktion</span>- Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
					</div>
					<div class="textbox_inner2">
						<h2>Как мы <span>работаем?</span></h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
					</div>
				</div>
				<img src="img/body2.jpg" alt="">
				
			</div>
				
			</div>
		</div>
	</section>	
	<section class="section_3">
		<div class="container">
			<div class="content_sec3">
				<h2 class="offer2">Taktion - the best sport clothes </h2>
				<div class="dignity">
					<div class="dignity_content">
						<div class="rect ">
							<img src="img/section3-1.svg" alt="">
						</div>
						<h3>Бесплатная доставка</h3>
						<p>Любой заказ  выше 15 000тг доставим беслпатно в любую  точку мира</p>
					</div>
					<div class="dignity_content ">
						<div class="rect ">
							<img src="img/section3-2.svg" alt="">
						</div>

						<h3>Удобная оплата</h3>
						<p>Для оплаты принимаются любые банковскые карты и онлайн кошельки</p>
					</div>
					<div class="dignity_content ">
						<div class="rect "><img src="img/section3-3.svg" alt="">
						</div>
						<h3>Быстрый заказ</h3>
						<p>Добавляйте в корзину любые позиции  и заказывайте в один клик</p>
					</div>
				</div>
			</div>
		</div>
	</section>	
	<section class="section_4">
		<div class="container">
			<div class="content_sec4">
				<h2 class="content_sec4_header">оставьте <span>отзыв</span> </h2>
				<form action="check.php" method="post">
				<input class="input_in input_inn" type="text" placeholder="Имя"name ="name" id="name">
				<input class="input_in input_inl" type="text" placeholder="Фамилия"name ="lastname" id="lastname">
				<input class="input_in input_int" type="tel" placeholder="Телефон"name ="telephone" id="telephone">
				<textarea name="feedback" id="feedback"></textarea>
				<button class="btn" type="submit">Отправить</button>
				</form>
			</div>
		</div>
	</section>
	<footer>
		<div class="container">
			<div class="content_sec5">
				<div class="logo" class ="cursorpointer">Taktion</div>
				<div class="support">
					<h6>Поддержка</h6>
					<ul >
						<li class ="cursorpointer">Контакты</li>
						<li class ="cursorpointer">Доставка</li>
						<li class ="cursorpointer">Карта</li>
					</ul>
				</div>
				<div class="social">
					<h6>Соц.сети</h6>
					<img class ="cursorpointer"src="img/vk.svg" alt="">
					<img class ="cursorpointer" src="img/instagram.svg" alt="">
				</div>
			</div>
		</div>
	</footer>

</body>
</html>
