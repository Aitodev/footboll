<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-170973361-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-170973361-1');
    </script>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>ОЛИМП - Спортивный комплекс</title>
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
<style type="text/css">
    label{
        font-size: 16px;
        font-weight: 600;
    }
    button[type="submit"]{
        font-size: 16px;
        padding: 10px;
    }

</style>
</head>

<body>

<!-- Header -->
<header id="home">
        <!-- Background Image -->
        <div class="bg-img" style="background-image: url('http://www.olimp1.kg/img/login&register.jpg');">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->
<!-- Nav -->
<nav id="nav" class="navbar nav-transparent">
<div class="container">

    <div class="navbar-header">
        <!-- Logo -->
        <div class="navbar-brand">
            <a href="index.php">
                <img class="logo" src="img/logo.png" alt="logo">
                <img class="logo-alt" src="img/logo-white.png" alt="logo">
            </a>
        </div>
        <!-- /Logo -->

        <!-- Collapse nav button -->
        <div class="nav-collapse">
            <span></span>
        </div>
        <!-- /Collapse nav button -->
    </div>

    <!--  Main navigation  -->
    <ul class="main-nav nav navbar-nav navbar-right">
        <li><a href="index.php#home">Главная</a></li>
        <li><a href="index.php#about">Услуги</a></li>
        <li><a href="index.php#portfolio">Портфолио</a></li>
        <li><a href="index.php#pricing">Цены</a></li>
        <li><a href="index.php#blog">Новости</a></li>
        <li><a href="index.php#contact">Контакты</a></li>
        <li><a href="booking.php">Бронировать</a></li>
                        <li class="has-dropdown open-drop active"><a href="login.php">Вход</a>
            <ul class="dropdown">
                <li><a href="register.php">Регистрация</a></li>
            </ul>
        </li>	
                
    </ul>
    <!-- /Main navigation -->

</div>
</nav>
<!-- /Nav -->

<!-- home wrapper -->
<div class="home-wrapper">
<div class="container">
    <div class="row">

        <!-- home content -->
        <div class="col-md-6 col-md-offset-3 register">
        <div class="row">
            <div class="col-md-12 text-center inner">
                <h3>Регистрация</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form class="form-horizontal" method="post" id="form">
                    <div class="form-group">
                        <label class="control-label col-md-4" for="name">Имя:</label>
                        <div class="col-md-7">
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4" for="email">Email:</label>
                        <div class="col-md-7">
                            <input type="email" class="form-control" id="email"  name="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4" for="phone">Телефон:</label>
                        <div class="col-md-7">
                            <input type="text" class="form-control" id="phone" name="phone" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4" for="password">Пароль:</label>
                        <div class="col-md-7">
                            <input type="password" class="form-control" id="password" name="password" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4" for="pass">Подтверждение пароля:</label>
                        <div class="col-md-7">
                            <input type="password" class="form-control" id="pass" name="pass" >
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-offset-5 col-md-6 col-xs-offset-3 col-xs-4">
                            <button type="submit" class="btn btn-success" style="background-color: #273a50; background-image: linear-gradient(to bottom,#3d5a7b,#273a50);" id="save" name="save">Сохранить</button>
                        </div>
                    </div>
                </form>

            </div>

        </div>
    </div>

        <!-- /home content -->
    </div>
</div>
</div>
<!-- /home wrapper -->
    
</header>
<!-- /Header -->

<!-- Footer -->
<footer id="footer" class="sm-padding bg-dark">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<div class="col-md-12">

					<!-- footer logo -->
					<div class="footer-logo">
						<a href="index.php"><img src="img/logo-white.png" alt="logo"></a>
					</div>
					<!-- /footer logo -->

					<!-- footer follow -->
					<ul class="footer-follow">
                        <li><a href="https://www.facebook.com/olymp.sport.kg"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.instagram.com/minipole_zarya/"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="register.php#"><i class="fa fa-youtube"></i></a></li>
                    </ul>
					<!-- /footer follow -->

					<!-- footer copyright -->
					<div class="footer-copyright">
						<p>Copyright © 2018. All Rights Reserved. Designed by <a href="https://www.linkedin.com/in/kanykei-razhapova-b18ba8a1/" target="_blank">Kanykei Razhapova</a></p>
					</div>
					<!-- /footer copyright -->

				</div>

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</footer>
	<!-- /Footer -->

	<!-- Back to top -->
	<div id="back-to-top"></div>
	<!-- /Back to top -->

	<!-- jQuery Plugins -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript" src="js/jquery.maskedinput.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#save").click(function(){
                var name = $("#name").val();
                var password = $("#password").val();
                var pass = $("#pass").val();
                var email = $("#email").val();
                var phone = $("#phone").val();
                if(pass != password){
                    alert("Пароли не совпадают.");
                }else if(name == "" || pass == "" || password == "" || phone == "" || email == ""){
                    alert("Заполните все поля.");
                }else{
                    $("#form").submit();
                }
            });
        });
    </script>
</body>

</html>