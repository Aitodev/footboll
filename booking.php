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
	<link rel="stylesheet" href="http://www.olimp1.kg/css/selectize.css">

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
    
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
    <style>
    @media only screen and (min-width: 767px) {
        .container{
            min-width: 772px;
        }
    }
    @media only screen and (max-width: 767px) {
        /* .header-wrapper{
            width: 1320px;
        }
        #footer{
            width: 1320px;
        } */
        table {
            position: relative;
            /* width: 1320px; */
            overflow: hidden;
            border-collapse: collapse;
          }
          
          
          /*thead*/
          thead {
            position: relative;
            display: block; /*seperates the header from the body allowing it to be positioned*/
            width: 1320px !important;
            overflow: visible;
          }
          
          /*tbody*/
          tbody {
            position: relative;
            display: block; /*seperates the tbody from the header*/
            /* width: 1320px; */
            height: 715px;
            overflow: scroll;
          }
          
          tbody tr td:nth-child(1) {  /*the first cell in each tr*/
            position: relative;
            display: block; /*seperates the first column from the tbody*/
            background: #6195FF;
            z-index: 1;
          }
          thead tr th:nth-child(1) {  /*the first cell in each tr*/
            position: relative;
            /* display: block; seperates the first column from the tbody */
            background: #6195FF;
            border: 0px;
          }
        
    }
    
    textarea{
        display:block;max-width:100%;height:auto;
    }
    th, td{
        color: black;
        font-size: 14px;
        font-family: 'Varela Round', sans-serif;
        text-align: center;
        
    }
    table {
        table-layout: fixed;
        border-collapse: collapse;
        border: 2px solid #9c8f8f;
    } 
    thead{
        width: 100%;
    }
    thead tr {
        display: block;
        position: relative;
    }
    tbody {
        display: block;
        overflow: auto;
        width: 100%;
    }
    .selectize-input {
        padding: 0;
    }
    span{
        color: white;
    }
    </style>
	<script type="text/javascript" src="js/jquery.min.js"></script>

</head>

<body>

<!-- Header -->
<header>

    <!-- Nav -->
    <nav id="nav" class="navbar">
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
                <li class="active"><a href="booking.php">Бронировать</a></li>
                                                <li class="has-dropdown open-drop"><a href="login.php">Вход</a>
                    <ul class="dropdown">
                        <li><a href="register.php">Регистрация</a></li>
                    </ul>
                </li>	
                
            </ul>
            <!-- /Main navigation -->

        </div>
    </nav>
    <!-- /Nav -->
        <!-- header wrapper -->
        <div class="header-wrapper sm-padding bg-grey">
            <div class="container text-center">
                <h3>Правила бронирования</h3>
                <p>Только зарегистрированные пользователи имеют право бронировать.</p>
                <p>Вы можете удалить запись минимум за 2 часа до назначенного времени.</p>
                <p>Если вы без предупреждения не придете, то будете заблокированы на 24 часа.</p>
            </div>
        </div>
        <!-- /header wrapper -->
</header>
<!-- /Header -->


<div class="container-fluid">
<br>
    <div class="row">
        <div class="col-md-12 text-center">
            <a > <img class="arrow" src="http://www.olimp1.kg/img/previous.svg" alt=""> </a>
            <h5 style="font-weight: 600; text-align: center; display: inline-block; padding: 0px 10px;">10.08.2020 - 16.08.2020</h5>
            <a   href="http://www.olimp1.kg/booking.php?i=1" ><img class="arrow" src="http://www.olimp1.kg/img/skip.svg" alt=""></a>
        </div>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr id="weekdays">
                <th></th>
                                    <th colspan="2" style="background: #f90c0c">Понедельник</th>
                                    <th colspan="2" style="background: #0cb90c">Вторник</th>
                                    <th colspan="2" style="background: blue">Среда</th>
                                    <th colspan="2" style="background: orange">Четверг</th>
                                    <th colspan="2" style="background: yellow">Пятница</th>
                                    <th colspan="2" style="background: violet">Суббота</th>
                                    <th colspan="2" style="background: #8FCAE8">Воскресенье</th>
                            </tr>
            <tr id="dates">
                <th>Время</th>
                                    <th colspan="2" style="background: #f90c0c">10.08.2020</th>
                                    <th colspan="2" style="background: #0cb90c">11.08.2020</th>
                                    <th colspan="2" style="background: blue">12.08.2020</th>
                                    <th colspan="2" style="background: orange">13.08.2020</th>
                                    <th colspan="2" style="background: yellow">14.08.2020</th>
                                    <th colspan="2" style="background: violet">15.08.2020</th>
                                    <th colspan="2" style="background: #8FCAE8">16.08.2020</th>
                            </tr>
            <tr id="fields">
                <th></th>
                                    <th style="background: #77ec77">Поле №1</th>
                    <th style="background: #4cae4c">Поле №2</th>
                                    <th style="background: #77ec77">Поле №1</th>
                    <th style="background: #4cae4c">Поле №2</th>
                                    <th style="background: #77ec77">Поле №1</th>
                    <th style="background: #4cae4c">Поле №2</th>
                                    <th style="background: #77ec77">Поле №1</th>
                    <th style="background: #4cae4c">Поле №2</th>
                                    <th style="background: #77ec77">Поле №1</th>
                    <th style="background: #4cae4c">Поле №2</th>
                                    <th style="background: #77ec77">Поле №1</th>
                    <th style="background: #4cae4c">Поле №2</th>
                                    <th style="background: #77ec77">Поле №1</th>
                    <th style="background: #4cae4c">Поле №2</th>
                            </tr>
        </thead>
        <tbody>
                    <tr>
            <td>08:00:00<br> - <br>09:00:00</td>
             
                <td >               
                <div id="div001" style="margin-top: 25%;" >
                <input id="001" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
                <td ><div id="div002" style="margin-top: 25%;" >
                <input id="002" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
            
                <script>
                    $('body').on('click','#001', function(){
                        $("#w").val("0");
                        $("#t").val("0");
                        $("#time_from").val("08:00:00");
                        $("#time_to").val("09:00:00");
                        $("#date").val("10.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div001').parent().css('background','#ec5964');
                                        $('#div001').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#002', function(){
                        $("#w").val("0");
                        $("#t").val("0");
                        $("#time_from").val("08:00:00");
                        $("#time_to").val("09:00:00");
                        $("#date").val("10.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div002').parent().css('background','#ec5964');
                                        $('#div002').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div101" style="margin-top: 25%;" >
                <input id="101" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
                <td ><div id="div102" style="margin-top: 25%;" >
                <input id="102" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
            
                <script>
                    $('body').on('click','#101', function(){
                        $("#w").val("1");
                        $("#t").val("0");
                        $("#time_from").val("08:00:00");
                        $("#time_to").val("09:00:00");
                        $("#date").val("11.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div101').parent().css('background','#ec5964');
                                        $('#div101').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#102', function(){
                        $("#w").val("1");
                        $("#t").val("0");
                        $("#time_from").val("08:00:00");
                        $("#time_to").val("09:00:00");
                        $("#date").val("11.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div102').parent().css('background','#ec5964');
                                        $('#div102').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div201" style="margin-top: 25%;" >
                <input id="201" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
                <td ><div id="div202" style="margin-top: 25%;" >
                <input id="202" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
            
                <script>
                    $('body').on('click','#201', function(){
                        $("#w").val("2");
                        $("#t").val("0");
                        $("#time_from").val("08:00:00");
                        $("#time_to").val("09:00:00");
                        $("#date").val("12.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div201').parent().css('background','#ec5964');
                                        $('#div201').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#202', function(){
                        $("#w").val("2");
                        $("#t").val("0");
                        $("#time_from").val("08:00:00");
                        $("#time_to").val("09:00:00");
                        $("#date").val("12.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div202').parent().css('background','#ec5964');
                                        $('#div202').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div301" style="margin-top: 25%;" >
                <input id="301" type="button" value="Бронь" class="btn btn-primary"> </div></td>
                <td ><div id="div302" style="margin-top: 25%;" >
                <input id="302" type="button" value="Бронь" class="btn btn-primary"> </div></td>
            
                <script>
                    $('body').on('click','#301', function(){
                        $("#w").val("3");
                        $("#t").val("0");
                        $("#time_from").val("08:00:00");
                        $("#time_to").val("09:00:00");
                        $("#date").val("13.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div301').parent().css('background','#ec5964');
                                        $('#div301').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#302', function(){
                        $("#w").val("3");
                        $("#t").val("0");
                        $("#time_from").val("08:00:00");
                        $("#time_to").val("09:00:00");
                        $("#date").val("13.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div302').parent().css('background','#ec5964');
                                        $('#div302').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div401" style="margin-top: 25%;" >
                <input id="401" type="button" value="Бронь" class="btn btn-primary"> </div></td>
                <td ><div id="div402" style="margin-top: 25%;" >
                <input id="402" type="button" value="Бронь" class="btn btn-primary"> </div></td>
            
                <script>
                    $('body').on('click','#401', function(){
                        $("#w").val("4");
                        $("#t").val("0");
                        $("#time_from").val("08:00:00");
                        $("#time_to").val("09:00:00");
                        $("#date").val("14.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div401').parent().css('background','#ec5964');
                                        $('#div401').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#402', function(){
                        $("#w").val("4");
                        $("#t").val("0");
                        $("#time_from").val("08:00:00");
                        $("#time_to").val("09:00:00");
                        $("#date").val("14.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div402').parent().css('background','#ec5964');
                                        $('#div402').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div501" style="margin-top: 25%;" >
                <input id="501" type="button" value="Бронь" class="btn btn-primary"> </div></td>
                <td ><div id="div502" style="margin-top: 25%;" >
                <input id="502" type="button" value="Бронь" class="btn btn-primary"> </div></td>
            
                <script>
                    $('body').on('click','#501', function(){
                        $("#w").val("5");
                        $("#t").val("0");
                        $("#time_from").val("08:00:00");
                        $("#time_to").val("09:00:00");
                        $("#date").val("15.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div501').parent().css('background','#ec5964');
                                        $('#div501').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#502', function(){
                        $("#w").val("5");
                        $("#t").val("0");
                        $("#time_from").val("08:00:00");
                        $("#time_to").val("09:00:00");
                        $("#date").val("15.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div502').parent().css('background','#ec5964');
                                        $('#div502').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div601" style="margin-top: 25%;" >
                <input id="601" type="button" value="Бронь" class="btn btn-primary"> </div></td>
                <td ><div id="div602" style="margin-top: 25%;" >
                <input id="602" type="button" value="Бронь" class="btn btn-primary"> </div></td>
            
                <script>
                    $('body').on('click','#601', function(){
                        $("#w").val("6");
                        $("#t").val("0");
                        $("#time_from").val("08:00:00");
                        $("#time_to").val("09:00:00");
                        $("#date").val("16.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div601').parent().css('background','#ec5964');
                                        $('#div601').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#602', function(){
                        $("#w").val("6");
                        $("#t").val("0");
                        $("#time_from").val("08:00:00");
                        $("#time_to").val("09:00:00");
                        $("#date").val("16.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div602').parent().css('background','#ec5964');
                                        $('#div602').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
                        </tr>
                    <tr>
            <td>09:00:00<br> - <br>10:00:00</td>
             
                <td >               
                <div id="div011" style="margin-top: 25%;" >
                <input id="011" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
                <td ><div id="div012" style="margin-top: 25%;" >
                <input id="012" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
            
                <script>
                    $('body').on('click','#011', function(){
                        $("#w").val("0");
                        $("#t").val("1");
                        $("#time_from").val("09:00:00");
                        $("#time_to").val("10:00:00");
                        $("#date").val("10.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div011').parent().css('background','#ec5964');
                                        $('#div011').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#012', function(){
                        $("#w").val("0");
                        $("#t").val("1");
                        $("#time_from").val("09:00:00");
                        $("#time_to").val("10:00:00");
                        $("#date").val("10.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div012').parent().css('background','#ec5964');
                                        $('#div012').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div111" style="margin-top: 25%;" >
                <input id="111" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
                <td ><div id="div112" style="margin-top: 25%;" >
                <input id="112" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
            
                <script>
                    $('body').on('click','#111', function(){
                        $("#w").val("1");
                        $("#t").val("1");
                        $("#time_from").val("09:00:00");
                        $("#time_to").val("10:00:00");
                        $("#date").val("11.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div111').parent().css('background','#ec5964');
                                        $('#div111').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#112', function(){
                        $("#w").val("1");
                        $("#t").val("1");
                        $("#time_from").val("09:00:00");
                        $("#time_to").val("10:00:00");
                        $("#date").val("11.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div112').parent().css('background','#ec5964');
                                        $('#div112').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div211" style="margin-top: 25%;" >
                <input id="211" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
                <td ><div id="div212" style="margin-top: 25%;" >
                <input id="212" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
            
                <script>
                    $('body').on('click','#211', function(){
                        $("#w").val("2");
                        $("#t").val("1");
                        $("#time_from").val("09:00:00");
                        $("#time_to").val("10:00:00");
                        $("#date").val("12.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div211').parent().css('background','#ec5964');
                                        $('#div211').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#212', function(){
                        $("#w").val("2");
                        $("#t").val("1");
                        $("#time_from").val("09:00:00");
                        $("#time_to").val("10:00:00");
                        $("#date").val("12.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div212').parent().css('background','#ec5964');
                                        $('#div212').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div311" style="margin-top: 25%;" >
                <input id="311" type="button" value="Бронь" class="btn btn-primary"> </div></td>
                <td ><div id="div312" style="margin-top: 25%;" >
                <input id="312" type="button" value="Бронь" class="btn btn-primary"> </div></td>
            
                <script>
                    $('body').on('click','#311', function(){
                        $("#w").val("3");
                        $("#t").val("1");
                        $("#time_from").val("09:00:00");
                        $("#time_to").val("10:00:00");
                        $("#date").val("13.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div311').parent().css('background','#ec5964');
                                        $('#div311').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#312', function(){
                        $("#w").val("3");
                        $("#t").val("1");
                        $("#time_from").val("09:00:00");
                        $("#time_to").val("10:00:00");
                        $("#date").val("13.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div312').parent().css('background','#ec5964');
                                        $('#div312').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div411" style="margin-top: 25%;" >
                <input id="411" type="button" value="Бронь" class="btn btn-primary"> </div></td>
                <td ><div id="div412" style="margin-top: 25%;" >
                <input id="412" type="button" value="Бронь" class="btn btn-primary"> </div></td>
            
                <script>
                    $('body').on('click','#411', function(){
                        $("#w").val("4");
                        $("#t").val("1");
                        $("#time_from").val("09:00:00");
                        $("#time_to").val("10:00:00");
                        $("#date").val("14.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div411').parent().css('background','#ec5964');
                                        $('#div411').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#412', function(){
                        $("#w").val("4");
                        $("#t").val("1");
                        $("#time_from").val("09:00:00");
                        $("#time_to").val("10:00:00");
                        $("#date").val("14.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div412').parent().css('background','#ec5964');
                                        $('#div412').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div511" style="margin-top: 25%;" >
                <input id="511" type="button" value="Бронь" class="btn btn-primary"> </div></td>
                <td ><div id="div512" style="margin-top: 25%;" >
                <input id="512" type="button" value="Бронь" class="btn btn-primary"> </div></td>
            
                <script>
                    $('body').on('click','#511', function(){
                        $("#w").val("5");
                        $("#t").val("1");
                        $("#time_from").val("09:00:00");
                        $("#time_to").val("10:00:00");
                        $("#date").val("15.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div511').parent().css('background','#ec5964');
                                        $('#div511').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#512', function(){
                        $("#w").val("5");
                        $("#t").val("1");
                        $("#time_from").val("09:00:00");
                        $("#time_to").val("10:00:00");
                        $("#date").val("15.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div512').parent().css('background','#ec5964');
                                        $('#div512').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div611" style="margin-top: 25%;" >
                <input id="611" type="button" value="Бронь" class="btn btn-primary"> </div></td>
                <td ><div id="div612" style="margin-top: 25%;" >
                <input id="612" type="button" value="Бронь" class="btn btn-primary"> </div></td>
            
                <script>
                    $('body').on('click','#611', function(){
                        $("#w").val("6");
                        $("#t").val("1");
                        $("#time_from").val("09:00:00");
                        $("#time_to").val("10:00:00");
                        $("#date").val("16.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div611').parent().css('background','#ec5964');
                                        $('#div611').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#612', function(){
                        $("#w").val("6");
                        $("#t").val("1");
                        $("#time_from").val("09:00:00");
                        $("#time_to").val("10:00:00");
                        $("#date").val("16.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div612').parent().css('background','#ec5964');
                                        $('#div612').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
                        </tr>
                    <tr>
            <td>10:00:00<br> - <br>11:00:00</td>
             
                <td >               
                <div id="div021" style="margin-top: 25%;" >
                <input id="021" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
                <td ><div id="div022" style="margin-top: 25%;" >
                <input id="022" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
            
                <script>
                    $('body').on('click','#021', function(){
                        $("#w").val("0");
                        $("#t").val("2");
                        $("#time_from").val("10:00:00");
                        $("#time_to").val("11:00:00");
                        $("#date").val("10.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div021').parent().css('background','#ec5964');
                                        $('#div021').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#022', function(){
                        $("#w").val("0");
                        $("#t").val("2");
                        $("#time_from").val("10:00:00");
                        $("#time_to").val("11:00:00");
                        $("#date").val("10.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div022').parent().css('background','#ec5964');
                                        $('#div022').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div121" style="margin-top: 25%;" >
                <input id="121" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
                <td ><div id="div122" style="margin-top: 25%;" >
                <input id="122" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
            
                <script>
                    $('body').on('click','#121', function(){
                        $("#w").val("1");
                        $("#t").val("2");
                        $("#time_from").val("10:00:00");
                        $("#time_to").val("11:00:00");
                        $("#date").val("11.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div121').parent().css('background','#ec5964');
                                        $('#div121').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#122', function(){
                        $("#w").val("1");
                        $("#t").val("2");
                        $("#time_from").val("10:00:00");
                        $("#time_to").val("11:00:00");
                        $("#date").val("11.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div122').parent().css('background','#ec5964');
                                        $('#div122').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div221" style="margin-top: 25%;" >
                <input id="221" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
                <td ><div id="div222" style="margin-top: 25%;" >
                <input id="222" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
            
                <script>
                    $('body').on('click','#221', function(){
                        $("#w").val("2");
                        $("#t").val("2");
                        $("#time_from").val("10:00:00");
                        $("#time_to").val("11:00:00");
                        $("#date").val("12.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div221').parent().css('background','#ec5964');
                                        $('#div221').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#222', function(){
                        $("#w").val("2");
                        $("#t").val("2");
                        $("#time_from").val("10:00:00");
                        $("#time_to").val("11:00:00");
                        $("#date").val("12.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div222').parent().css('background','#ec5964');
                                        $('#div222').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div321" style="margin-top: 25%;" >
                <input id="321" type="button" value="Бронь" class="btn btn-primary"> </div></td>
                <td ><div id="div322" style="margin-top: 25%;" >
                <input id="322" type="button" value="Бронь" class="btn btn-primary"> </div></td>
            
                <script>
                    $('body').on('click','#321', function(){
                        $("#w").val("3");
                        $("#t").val("2");
                        $("#time_from").val("10:00:00");
                        $("#time_to").val("11:00:00");
                        $("#date").val("13.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div321').parent().css('background','#ec5964');
                                        $('#div321').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#322', function(){
                        $("#w").val("3");
                        $("#t").val("2");
                        $("#time_from").val("10:00:00");
                        $("#time_to").val("11:00:00");
                        $("#date").val("13.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div322').parent().css('background','#ec5964');
                                        $('#div322').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div421" style="margin-top: 25%;" >
                <input id="421" type="button" value="Бронь" class="btn btn-primary"> </div></td>
                <td ><div id="div422" style="margin-top: 25%;" >
                <input id="422" type="button" value="Бронь" class="btn btn-primary"> </div></td>
            
                <script>
                    $('body').on('click','#421', function(){
                        $("#w").val("4");
                        $("#t").val("2");
                        $("#time_from").val("10:00:00");
                        $("#time_to").val("11:00:00");
                        $("#date").val("14.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div421').parent().css('background','#ec5964');
                                        $('#div421').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#422', function(){
                        $("#w").val("4");
                        $("#t").val("2");
                        $("#time_from").val("10:00:00");
                        $("#time_to").val("11:00:00");
                        $("#date").val("14.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div422').parent().css('background','#ec5964');
                                        $('#div422').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div521" style="margin-top: 25%;" >
                <input id="521" type="button" value="Бронь" class="btn btn-primary"> </div></td>
                <td ><div id="div522" style="margin-top: 25%;" >
                <input id="522" type="button" value="Бронь" class="btn btn-primary"> </div></td>
            
                <script>
                    $('body').on('click','#521', function(){
                        $("#w").val("5");
                        $("#t").val("2");
                        $("#time_from").val("10:00:00");
                        $("#time_to").val("11:00:00");
                        $("#date").val("15.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div521').parent().css('background','#ec5964');
                                        $('#div521').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#522', function(){
                        $("#w").val("5");
                        $("#t").val("2");
                        $("#time_from").val("10:00:00");
                        $("#time_to").val("11:00:00");
                        $("#date").val("15.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div522').parent().css('background','#ec5964');
                                        $('#div522').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div621" style="margin-top: 25%;" >
                <input id="621" type="button" value="Бронь" class="btn btn-primary"> </div></td>
                <td ><div id="div622" style="margin-top: 25%;" >
                <input id="622" type="button" value="Бронь" class="btn btn-primary"> </div></td>
            
                <script>
                    $('body').on('click','#621', function(){
                        $("#w").val("6");
                        $("#t").val("2");
                        $("#time_from").val("10:00:00");
                        $("#time_to").val("11:00:00");
                        $("#date").val("16.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div621').parent().css('background','#ec5964');
                                        $('#div621').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#622', function(){
                        $("#w").val("6");
                        $("#t").val("2");
                        $("#time_from").val("10:00:00");
                        $("#time_to").val("11:00:00");
                        $("#date").val("16.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div622').parent().css('background','#ec5964');
                                        $('#div622').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
                        </tr>
                    <tr>
            <td>11:00:00<br> - <br>12:00:00</td>
             
                <td >               
                <div id="div031" style="margin-top: 25%;" >
                <input id="031" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
                <td ><div id="div032" style="margin-top: 25%;" >
                <input id="032" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
            
                <script>
                    $('body').on('click','#031', function(){
                        $("#w").val("0");
                        $("#t").val("3");
                        $("#time_from").val("11:00:00");
                        $("#time_to").val("12:00:00");
                        $("#date").val("10.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div031').parent().css('background','#ec5964');
                                        $('#div031').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#032', function(){
                        $("#w").val("0");
                        $("#t").val("3");
                        $("#time_from").val("11:00:00");
                        $("#time_to").val("12:00:00");
                        $("#date").val("10.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div032').parent().css('background','#ec5964');
                                        $('#div032').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div131" style="margin-top: 25%;" >
                <input id="131" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
                <td ><div id="div132" style="margin-top: 25%;" >
                <input id="132" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
            
                <script>
                    $('body').on('click','#131', function(){
                        $("#w").val("1");
                        $("#t").val("3");
                        $("#time_from").val("11:00:00");
                        $("#time_to").val("12:00:00");
                        $("#date").val("11.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div131').parent().css('background','#ec5964');
                                        $('#div131').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#132', function(){
                        $("#w").val("1");
                        $("#t").val("3");
                        $("#time_from").val("11:00:00");
                        $("#time_to").val("12:00:00");
                        $("#date").val("11.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div132').parent().css('background','#ec5964');
                                        $('#div132').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div231" style="margin-top: 25%;" >
                <input id="231" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
                <td ><div id="div232" style="margin-top: 25%;" >
                <input id="232" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
            
                <script>
                    $('body').on('click','#231', function(){
                        $("#w").val("2");
                        $("#t").val("3");
                        $("#time_from").val("11:00:00");
                        $("#time_to").val("12:00:00");
                        $("#date").val("12.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div231').parent().css('background','#ec5964');
                                        $('#div231').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#232', function(){
                        $("#w").val("2");
                        $("#t").val("3");
                        $("#time_from").val("11:00:00");
                        $("#time_to").val("12:00:00");
                        $("#date").val("12.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div232').parent().css('background','#ec5964');
                                        $('#div232').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div331" style="margin-top: 25%;" >
                <input id="331" type="button" value="Бронь" class="btn btn-primary"> </div></td>
                <td ><div id="div332" style="margin-top: 25%;" >
                <input id="332" type="button" value="Бронь" class="btn btn-primary"> </div></td>
            
                <script>
                    $('body').on('click','#331', function(){
                        $("#w").val("3");
                        $("#t").val("3");
                        $("#time_from").val("11:00:00");
                        $("#time_to").val("12:00:00");
                        $("#date").val("13.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div331').parent().css('background','#ec5964');
                                        $('#div331').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#332', function(){
                        $("#w").val("3");
                        $("#t").val("3");
                        $("#time_from").val("11:00:00");
                        $("#time_to").val("12:00:00");
                        $("#date").val("13.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div332').parent().css('background','#ec5964');
                                        $('#div332').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div431" style="margin-top: 25%;" >
                <input id="431" type="button" value="Бронь" class="btn btn-primary"> </div></td>
                <td ><div id="div432" style="margin-top: 25%;" >
                <input id="432" type="button" value="Бронь" class="btn btn-primary"> </div></td>
            
                <script>
                    $('body').on('click','#431', function(){
                        $("#w").val("4");
                        $("#t").val("3");
                        $("#time_from").val("11:00:00");
                        $("#time_to").val("12:00:00");
                        $("#date").val("14.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div431').parent().css('background','#ec5964');
                                        $('#div431').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#432', function(){
                        $("#w").val("4");
                        $("#t").val("3");
                        $("#time_from").val("11:00:00");
                        $("#time_to").val("12:00:00");
                        $("#date").val("14.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div432').parent().css('background','#ec5964');
                                        $('#div432').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div531" style="margin-top: 25%;" >
                <input id="531" type="button" value="Бронь" class="btn btn-primary"> </div></td>
                <td ><div id="div532" style="margin-top: 25%;" >
                <input id="532" type="button" value="Бронь" class="btn btn-primary"> </div></td>
            
                <script>
                    $('body').on('click','#531', function(){
                        $("#w").val("5");
                        $("#t").val("3");
                        $("#time_from").val("11:00:00");
                        $("#time_to").val("12:00:00");
                        $("#date").val("15.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div531').parent().css('background','#ec5964');
                                        $('#div531').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#532', function(){
                        $("#w").val("5");
                        $("#t").val("3");
                        $("#time_from").val("11:00:00");
                        $("#time_to").val("12:00:00");
                        $("#date").val("15.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div532').parent().css('background','#ec5964');
                                        $('#div532').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div631" style="margin-top: 25%;" >
                <input id="631" type="button" value="Бронь" class="btn btn-primary"> </div></td>
                <td ><div id="div632" style="margin-top: 25%;" >
                <input id="632" type="button" value="Бронь" class="btn btn-primary"> </div></td>
            
                <script>
                    $('body').on('click','#631', function(){
                        $("#w").val("6");
                        $("#t").val("3");
                        $("#time_from").val("11:00:00");
                        $("#time_to").val("12:00:00");
                        $("#date").val("16.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div631').parent().css('background','#ec5964');
                                        $('#div631').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#632', function(){
                        $("#w").val("6");
                        $("#t").val("3");
                        $("#time_from").val("11:00:00");
                        $("#time_to").val("12:00:00");
                        $("#date").val("16.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div632').parent().css('background','#ec5964');
                                        $('#div632').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
                        </tr>
                    <tr>
            <td>12:00:00<br> - <br>13:00:00</td>
             
                <td >               
                <div id="div041" style="margin-top: 25%;" >
                <input id="041" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
                <td ><div id="div042" style="margin-top: 25%;" >
                <input id="042" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
            
                <script>
                    $('body').on('click','#041', function(){
                        $("#w").val("0");
                        $("#t").val("4");
                        $("#time_from").val("12:00:00");
                        $("#time_to").val("13:00:00");
                        $("#date").val("10.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div041').parent().css('background','#ec5964');
                                        $('#div041').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#042', function(){
                        $("#w").val("0");
                        $("#t").val("4");
                        $("#time_from").val("12:00:00");
                        $("#time_to").val("13:00:00");
                        $("#date").val("10.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div042').parent().css('background','#ec5964');
                                        $('#div042').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div141" style="margin-top: 25%;" >
                <input id="141" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
                <td ><div id="div142" style="margin-top: 25%;" >
                <input id="142" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
            
                <script>
                    $('body').on('click','#141', function(){
                        $("#w").val("1");
                        $("#t").val("4");
                        $("#time_from").val("12:00:00");
                        $("#time_to").val("13:00:00");
                        $("#date").val("11.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div141').parent().css('background','#ec5964');
                                        $('#div141').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#142', function(){
                        $("#w").val("1");
                        $("#t").val("4");
                        $("#time_from").val("12:00:00");
                        $("#time_to").val("13:00:00");
                        $("#date").val("11.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div142').parent().css('background','#ec5964');
                                        $('#div142').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div241" style="margin-top: 25%;" >
                <input id="241" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
                <td ><div id="div242" style="margin-top: 25%;" >
                <input id="242" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
            
                <script>
                    $('body').on('click','#241', function(){
                        $("#w").val("2");
                        $("#t").val("4");
                        $("#time_from").val("12:00:00");
                        $("#time_to").val("13:00:00");
                        $("#date").val("12.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div241').parent().css('background','#ec5964');
                                        $('#div241').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#242', function(){
                        $("#w").val("2");
                        $("#t").val("4");
                        $("#time_from").val("12:00:00");
                        $("#time_to").val("13:00:00");
                        $("#date").val("12.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div242').parent().css('background','#ec5964');
                                        $('#div242').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div341" style="margin-top: 25%;" >
                <input id="341" type="button" value="Бронь" class="btn btn-primary"> </div></td>
                <td ><div id="div342" style="margin-top: 25%;" >
                <input id="342" type="button" value="Бронь" class="btn btn-primary"> </div></td>
            
                <script>
                    $('body').on('click','#341', function(){
                        $("#w").val("3");
                        $("#t").val("4");
                        $("#time_from").val("12:00:00");
                        $("#time_to").val("13:00:00");
                        $("#date").val("13.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div341').parent().css('background','#ec5964');
                                        $('#div341').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#342', function(){
                        $("#w").val("3");
                        $("#t").val("4");
                        $("#time_from").val("12:00:00");
                        $("#time_to").val("13:00:00");
                        $("#date").val("13.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div342').parent().css('background','#ec5964');
                                        $('#div342').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div441" style="margin-top: 25%;" >
                <input id="441" type="button" value="Бронь" class="btn btn-primary"> </div></td>
                <td ><div id="div442" style="margin-top: 25%;" >
                <input id="442" type="button" value="Бронь" class="btn btn-primary"> </div></td>
            
                <script>
                    $('body').on('click','#441', function(){
                        $("#w").val("4");
                        $("#t").val("4");
                        $("#time_from").val("12:00:00");
                        $("#time_to").val("13:00:00");
                        $("#date").val("14.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div441').parent().css('background','#ec5964');
                                        $('#div441').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#442', function(){
                        $("#w").val("4");
                        $("#t").val("4");
                        $("#time_from").val("12:00:00");
                        $("#time_to").val("13:00:00");
                        $("#date").val("14.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div442').parent().css('background','#ec5964');
                                        $('#div442').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div541" style="margin-top: 25%;" >
                <input id="541" type="button" value="Бронь" class="btn btn-primary"> </div></td>
                <td ><div id="div542" style="margin-top: 25%;" >
                <input id="542" type="button" value="Бронь" class="btn btn-primary"> </div></td>
            
                <script>
                    $('body').on('click','#541', function(){
                        $("#w").val("5");
                        $("#t").val("4");
                        $("#time_from").val("12:00:00");
                        $("#time_to").val("13:00:00");
                        $("#date").val("15.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div541').parent().css('background','#ec5964');
                                        $('#div541').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#542', function(){
                        $("#w").val("5");
                        $("#t").val("4");
                        $("#time_from").val("12:00:00");
                        $("#time_to").val("13:00:00");
                        $("#date").val("15.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div542').parent().css('background','#ec5964');
                                        $('#div542').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div641" style="margin-top: 25%;" >
                <input id="641" type="button" value="Бронь" class="btn btn-primary"> </div></td>
                <td ><div id="div642" style="margin-top: 25%;" >
                <input id="642" type="button" value="Бронь" class="btn btn-primary"> </div></td>
            
                <script>
                    $('body').on('click','#641', function(){
                        $("#w").val("6");
                        $("#t").val("4");
                        $("#time_from").val("12:00:00");
                        $("#time_to").val("13:00:00");
                        $("#date").val("16.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div641').parent().css('background','#ec5964');
                                        $('#div641').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#642', function(){
                        $("#w").val("6");
                        $("#t").val("4");
                        $("#time_from").val("12:00:00");
                        $("#time_to").val("13:00:00");
                        $("#date").val("16.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div642').parent().css('background','#ec5964');
                                        $('#div642').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
                        </tr>
                    <tr>
            <td>13:00:00<br> - <br>14:00:00</td>
             
                <td >               
                <div id="div051" style="margin-top: 25%;" >
                <input id="051" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
                <td ><div id="div052" style="margin-top: 25%;" >
                <input id="052" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
            
                <script>
                    $('body').on('click','#051', function(){
                        $("#w").val("0");
                        $("#t").val("5");
                        $("#time_from").val("13:00:00");
                        $("#time_to").val("14:00:00");
                        $("#date").val("10.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div051').parent().css('background','#ec5964');
                                        $('#div051').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#052', function(){
                        $("#w").val("0");
                        $("#t").val("5");
                        $("#time_from").val("13:00:00");
                        $("#time_to").val("14:00:00");
                        $("#date").val("10.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div052').parent().css('background','#ec5964');
                                        $('#div052').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div151" style="margin-top: 25%;" >
                <input id="151" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
                <td ><div id="div152" style="margin-top: 25%;" >
                <input id="152" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
            
                <script>
                    $('body').on('click','#151', function(){
                        $("#w").val("1");
                        $("#t").val("5");
                        $("#time_from").val("13:00:00");
                        $("#time_to").val("14:00:00");
                        $("#date").val("11.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div151').parent().css('background','#ec5964');
                                        $('#div151').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#152', function(){
                        $("#w").val("1");
                        $("#t").val("5");
                        $("#time_from").val("13:00:00");
                        $("#time_to").val("14:00:00");
                        $("#date").val("11.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div152').parent().css('background','#ec5964');
                                        $('#div152').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div251" style="margin-top: 25%;" >
                <input id="251" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
                <td ><div id="div252" style="margin-top: 25%;" >
                <input id="252" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
            
                <script>
                    $('body').on('click','#251', function(){
                        $("#w").val("2");
                        $("#t").val("5");
                        $("#time_from").val("13:00:00");
                        $("#time_to").val("14:00:00");
                        $("#date").val("12.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div251').parent().css('background','#ec5964');
                                        $('#div251').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#252', function(){
                        $("#w").val("2");
                        $("#t").val("5");
                        $("#time_from").val("13:00:00");
                        $("#time_to").val("14:00:00");
                        $("#date").val("12.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div252').parent().css('background','#ec5964');
                                        $('#div252').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div351" style="margin-top: 25%;" >
                <input id="351" type="button" value="Бронь" class="btn btn-primary"> </div></td>
                <td ><div id="div352" style="margin-top: 25%;" >
                <input id="352" type="button" value="Бронь" class="btn btn-primary"> </div></td>
            
                <script>
                    $('body').on('click','#351', function(){
                        $("#w").val("3");
                        $("#t").val("5");
                        $("#time_from").val("13:00:00");
                        $("#time_to").val("14:00:00");
                        $("#date").val("13.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div351').parent().css('background','#ec5964');
                                        $('#div351').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#352', function(){
                        $("#w").val("3");
                        $("#t").val("5");
                        $("#time_from").val("13:00:00");
                        $("#time_to").val("14:00:00");
                        $("#date").val("13.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div352').parent().css('background','#ec5964');
                                        $('#div352').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div451" style="margin-top: 25%;" >
                <input id="451" type="button" value="Бронь" class="btn btn-primary"> </div></td>
                <td ><div id="div452" style="margin-top: 25%;" >
                <input id="452" type="button" value="Бронь" class="btn btn-primary"> </div></td>
            
                <script>
                    $('body').on('click','#451', function(){
                        $("#w").val("4");
                        $("#t").val("5");
                        $("#time_from").val("13:00:00");
                        $("#time_to").val("14:00:00");
                        $("#date").val("14.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div451').parent().css('background','#ec5964');
                                        $('#div451').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#452', function(){
                        $("#w").val("4");
                        $("#t").val("5");
                        $("#time_from").val("13:00:00");
                        $("#time_to").val("14:00:00");
                        $("#date").val("14.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div452').parent().css('background','#ec5964');
                                        $('#div452').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div551" style="margin-top: 25%;" >
                <input id="551" type="button" value="Бронь" class="btn btn-primary"> </div></td>
                <td ><div id="div552" style="margin-top: 25%;" >
                <input id="552" type="button" value="Бронь" class="btn btn-primary"> </div></td>
            
                <script>
                    $('body').on('click','#551', function(){
                        $("#w").val("5");
                        $("#t").val("5");
                        $("#time_from").val("13:00:00");
                        $("#time_to").val("14:00:00");
                        $("#date").val("15.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div551').parent().css('background','#ec5964');
                                        $('#div551').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#552', function(){
                        $("#w").val("5");
                        $("#t").val("5");
                        $("#time_from").val("13:00:00");
                        $("#time_to").val("14:00:00");
                        $("#date").val("15.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div552').parent().css('background','#ec5964');
                                        $('#div552').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div651" style="margin-top: 25%;" >
                <input id="651" type="button" value="Бронь" class="btn btn-primary"> </div></td>
                <td ><div id="div652" style="margin-top: 25%;" >
                <input id="652" type="button" value="Бронь" class="btn btn-primary"> </div></td>
            
                <script>
                    $('body').on('click','#651', function(){
                        $("#w").val("6");
                        $("#t").val("5");
                        $("#time_from").val("13:00:00");
                        $("#time_to").val("14:00:00");
                        $("#date").val("16.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div651').parent().css('background','#ec5964');
                                        $('#div651').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#652', function(){
                        $("#w").val("6");
                        $("#t").val("5");
                        $("#time_from").val("13:00:00");
                        $("#time_to").val("14:00:00");
                        $("#date").val("16.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div652').parent().css('background','#ec5964');
                                        $('#div652').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
                        </tr>
                    <tr>
            <td>14:00:00<br> - <br>15:00:00</td>
             
                <td >               
                <div id="div061" style="margin-top: 25%;" >
                <input id="061" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
                <td ><div id="div062" style="margin-top: 25%;" >
                <input id="062" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
            
                <script>
                    $('body').on('click','#061', function(){
                        $("#w").val("0");
                        $("#t").val("6");
                        $("#time_from").val("14:00:00");
                        $("#time_to").val("15:00:00");
                        $("#date").val("10.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div061').parent().css('background','#ec5964');
                                        $('#div061').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#062', function(){
                        $("#w").val("0");
                        $("#t").val("6");
                        $("#time_from").val("14:00:00");
                        $("#time_to").val("15:00:00");
                        $("#date").val("10.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div062').parent().css('background','#ec5964');
                                        $('#div062').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div161" style="margin-top: 25%;" >
                <input id="161" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
                <td ><div id="div162" style="margin-top: 25%;" >
                <input id="162" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
            
                <script>
                    $('body').on('click','#161', function(){
                        $("#w").val("1");
                        $("#t").val("6");
                        $("#time_from").val("14:00:00");
                        $("#time_to").val("15:00:00");
                        $("#date").val("11.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div161').parent().css('background','#ec5964');
                                        $('#div161').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#162', function(){
                        $("#w").val("1");
                        $("#t").val("6");
                        $("#time_from").val("14:00:00");
                        $("#time_to").val("15:00:00");
                        $("#date").val("11.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div162').parent().css('background','#ec5964');
                                        $('#div162').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div261" style="margin-top: 25%;" >
                <input id="261" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
                <td ><div id="div262" style="margin-top: 25%;" >
                <input id="262" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
            
                <script>
                    $('body').on('click','#261', function(){
                        $("#w").val("2");
                        $("#t").val("6");
                        $("#time_from").val("14:00:00");
                        $("#time_to").val("15:00:00");
                        $("#date").val("12.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div261').parent().css('background','#ec5964');
                                        $('#div261').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#262', function(){
                        $("#w").val("2");
                        $("#t").val("6");
                        $("#time_from").val("14:00:00");
                        $("#time_to").val("15:00:00");
                        $("#date").val("12.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div262').parent().css('background','#ec5964');
                                        $('#div262').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div361" style="margin-top: 25%;" >
                <input id="361" type="button" value="Бронь" class="btn btn-primary"> </div></td>
                <td ><div id="div362" style="margin-top: 25%;" >
                <input id="362" type="button" value="Бронь" class="btn btn-primary"> </div></td>
            
                <script>
                    $('body').on('click','#361', function(){
                        $("#w").val("3");
                        $("#t").val("6");
                        $("#time_from").val("14:00:00");
                        $("#time_to").val("15:00:00");
                        $("#date").val("13.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div361').parent().css('background','#ec5964');
                                        $('#div361').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#362', function(){
                        $("#w").val("3");
                        $("#t").val("6");
                        $("#time_from").val("14:00:00");
                        $("#time_to").val("15:00:00");
                        $("#date").val("13.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div362').parent().css('background','#ec5964');
                                        $('#div362').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div461" style="margin-top: 25%;" >
                <input id="461" type="button" value="Бронь" class="btn btn-primary"> </div></td>
                <td ><div id="div462" style="margin-top: 25%;" >
                <input id="462" type="button" value="Бронь" class="btn btn-primary"> </div></td>
            
                <script>
                    $('body').on('click','#461', function(){
                        $("#w").val("4");
                        $("#t").val("6");
                        $("#time_from").val("14:00:00");
                        $("#time_to").val("15:00:00");
                        $("#date").val("14.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div461').parent().css('background','#ec5964');
                                        $('#div461').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#462', function(){
                        $("#w").val("4");
                        $("#t").val("6");
                        $("#time_from").val("14:00:00");
                        $("#time_to").val("15:00:00");
                        $("#date").val("14.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div462').parent().css('background','#ec5964');
                                        $('#div462').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div561" style="margin-top: 25%;" >
                <input id="561" type="button" value="Бронь" class="btn btn-primary"> </div></td>
                <td ><div id="div562" style="margin-top: 25%;" >
                <input id="562" type="button" value="Бронь" class="btn btn-primary"> </div></td>
            
                <script>
                    $('body').on('click','#561', function(){
                        $("#w").val("5");
                        $("#t").val("6");
                        $("#time_from").val("14:00:00");
                        $("#time_to").val("15:00:00");
                        $("#date").val("15.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div561').parent().css('background','#ec5964');
                                        $('#div561').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#562', function(){
                        $("#w").val("5");
                        $("#t").val("6");
                        $("#time_from").val("14:00:00");
                        $("#time_to").val("15:00:00");
                        $("#date").val("15.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div562').parent().css('background','#ec5964');
                                        $('#div562').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div661" style="margin-top: 25%;" >
                <input id="661" type="button" value="Бронь" class="btn btn-primary"> </div></td>
                <td ><div id="div662" style="margin-top: 25%;" >
                <input id="662" type="button" value="Бронь" class="btn btn-primary"> </div></td>
            
                <script>
                    $('body').on('click','#661', function(){
                        $("#w").val("6");
                        $("#t").val("6");
                        $("#time_from").val("14:00:00");
                        $("#time_to").val("15:00:00");
                        $("#date").val("16.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div661').parent().css('background','#ec5964');
                                        $('#div661').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#662', function(){
                        $("#w").val("6");
                        $("#t").val("6");
                        $("#time_from").val("14:00:00");
                        $("#time_to").val("15:00:00");
                        $("#date").val("16.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div662').parent().css('background','#ec5964');
                                        $('#div662').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
                        </tr>
                    <tr>
            <td>15:00:00<br> - <br>16:00:00</td>
             
                <td >               
                <div id="div071" style="margin-top: 25%;" >
                <input id="071" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
                <td ><div id="div072" style="margin-top: 25%;" >
                <input id="072" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
            
                <script>
                    $('body').on('click','#071', function(){
                        $("#w").val("0");
                        $("#t").val("7");
                        $("#time_from").val("15:00:00");
                        $("#time_to").val("16:00:00");
                        $("#date").val("10.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div071').parent().css('background','#ec5964');
                                        $('#div071').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#072', function(){
                        $("#w").val("0");
                        $("#t").val("7");
                        $("#time_from").val("15:00:00");
                        $("#time_to").val("16:00:00");
                        $("#date").val("10.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div072').parent().css('background','#ec5964');
                                        $('#div072').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div171" style="margin-top: 25%;" >
                <input id="171" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
                <td ><div id="div172" style="margin-top: 25%;" >
                <input id="172" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
            
                <script>
                    $('body').on('click','#171', function(){
                        $("#w").val("1");
                        $("#t").val("7");
                        $("#time_from").val("15:00:00");
                        $("#time_to").val("16:00:00");
                        $("#date").val("11.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div171').parent().css('background','#ec5964');
                                        $('#div171').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#172', function(){
                        $("#w").val("1");
                        $("#t").val("7");
                        $("#time_from").val("15:00:00");
                        $("#time_to").val("16:00:00");
                        $("#date").val("11.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div172').parent().css('background','#ec5964');
                                        $('#div172').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div271" style="margin-top: 25%;" >
                <input id="271" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
                <td ><div id="div272" style="margin-top: 25%;" >
                <input id="272" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
            
                <script>
                    $('body').on('click','#271', function(){
                        $("#w").val("2");
                        $("#t").val("7");
                        $("#time_from").val("15:00:00");
                        $("#time_to").val("16:00:00");
                        $("#date").val("12.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div271').parent().css('background','#ec5964');
                                        $('#div271').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#272', function(){
                        $("#w").val("2");
                        $("#t").val("7");
                        $("#time_from").val("15:00:00");
                        $("#time_to").val("16:00:00");
                        $("#date").val("12.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div272').parent().css('background','#ec5964');
                                        $('#div272').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div371" style="margin-top: 25%;" >
                <input id="371" type="button" value="Бронь" class="btn btn-primary"> </div></td>
                <td ><div id="div372" style="margin-top: 25%;" >
                <input id="372" type="button" value="Бронь" class="btn btn-primary"> </div></td>
            
                <script>
                    $('body').on('click','#371', function(){
                        $("#w").val("3");
                        $("#t").val("7");
                        $("#time_from").val("15:00:00");
                        $("#time_to").val("16:00:00");
                        $("#date").val("13.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div371').parent().css('background','#ec5964');
                                        $('#div371').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#372', function(){
                        $("#w").val("3");
                        $("#t").val("7");
                        $("#time_from").val("15:00:00");
                        $("#time_to").val("16:00:00");
                        $("#date").val("13.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div372').parent().css('background','#ec5964');
                                        $('#div372').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div471" style="margin-top: 25%;" >
                <input id="471" type="button" value="Бронь" class="btn btn-primary"> </div></td>
                <td ><div id="div472" style="margin-top: 25%;" >
                <input id="472" type="button" value="Бронь" class="btn btn-primary"> </div></td>
            
                <script>
                    $('body').on('click','#471', function(){
                        $("#w").val("4");
                        $("#t").val("7");
                        $("#time_from").val("15:00:00");
                        $("#time_to").val("16:00:00");
                        $("#date").val("14.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div471').parent().css('background','#ec5964');
                                        $('#div471').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#472', function(){
                        $("#w").val("4");
                        $("#t").val("7");
                        $("#time_from").val("15:00:00");
                        $("#time_to").val("16:00:00");
                        $("#date").val("14.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div472').parent().css('background','#ec5964');
                                        $('#div472').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div571" style="margin-top: 25%;" >
                <input id="571" type="button" value="Бронь" class="btn btn-primary"> </div></td>
                <td ><div id="div572" style="margin-top: 25%;" >
                <input id="572" type="button" value="Бронь" class="btn btn-primary"> </div></td>
            
                <script>
                    $('body').on('click','#571', function(){
                        $("#w").val("5");
                        $("#t").val("7");
                        $("#time_from").val("15:00:00");
                        $("#time_to").val("16:00:00");
                        $("#date").val("15.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div571').parent().css('background','#ec5964');
                                        $('#div571').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#572', function(){
                        $("#w").val("5");
                        $("#t").val("7");
                        $("#time_from").val("15:00:00");
                        $("#time_to").val("16:00:00");
                        $("#date").val("15.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div572').parent().css('background','#ec5964');
                                        $('#div572').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div671" style="margin-top: 25%;" >
                <input id="671" type="button" value="Бронь" class="btn btn-primary"> </div></td>
                <td ><div id="div672" style="margin-top: 25%;" >
                <input id="672" type="button" value="Бронь" class="btn btn-primary"> </div></td>
            
                <script>
                    $('body').on('click','#671', function(){
                        $("#w").val("6");
                        $("#t").val("7");
                        $("#time_from").val("15:00:00");
                        $("#time_to").val("16:00:00");
                        $("#date").val("16.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div671').parent().css('background','#ec5964');
                                        $('#div671').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#672', function(){
                        $("#w").val("6");
                        $("#t").val("7");
                        $("#time_from").val("15:00:00");
                        $("#time_to").val("16:00:00");
                        $("#date").val("16.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div672').parent().css('background','#ec5964');
                                        $('#div672').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
                        </tr>
                    <tr>
            <td>16:00:00<br> - <br>17:00:00</td>
             
                <td >               
                <div id="div081" style="margin-top: 25%;" >
                <input id="081" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
                <td ><div id="div082" style="margin-top: 25%;" >
                <input id="082" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
            
                <script>
                    $('body').on('click','#081', function(){
                        $("#w").val("0");
                        $("#t").val("8");
                        $("#time_from").val("16:00:00");
                        $("#time_to").val("17:00:00");
                        $("#date").val("10.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div081').parent().css('background','#ec5964');
                                        $('#div081').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#082', function(){
                        $("#w").val("0");
                        $("#t").val("8");
                        $("#time_from").val("16:00:00");
                        $("#time_to").val("17:00:00");
                        $("#date").val("10.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div082').parent().css('background','#ec5964');
                                        $('#div082').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div181" style="margin-top: 25%;" >
                <input id="181" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
                <td ><div id="div182" style="margin-top: 25%;" >
                <input id="182" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
            
                <script>
                    $('body').on('click','#181', function(){
                        $("#w").val("1");
                        $("#t").val("8");
                        $("#time_from").val("16:00:00");
                        $("#time_to").val("17:00:00");
                        $("#date").val("11.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div181').parent().css('background','#ec5964');
                                        $('#div181').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#182', function(){
                        $("#w").val("1");
                        $("#t").val("8");
                        $("#time_from").val("16:00:00");
                        $("#time_to").val("17:00:00");
                        $("#date").val("11.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div182').parent().css('background','#ec5964');
                                        $('#div182').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div281" style="margin-top: 25%;" >
                <input id="281" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
                <td ><div id="div282" style="margin-top: 25%;" >
                <input id="282" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
            
                <script>
                    $('body').on('click','#281', function(){
                        $("#w").val("2");
                        $("#t").val("8");
                        $("#time_from").val("16:00:00");
                        $("#time_to").val("17:00:00");
                        $("#date").val("12.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div281').parent().css('background','#ec5964');
                                        $('#div281').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#282', function(){
                        $("#w").val("2");
                        $("#t").val("8");
                        $("#time_from").val("16:00:00");
                        $("#time_to").val("17:00:00");
                        $("#date").val("12.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div282').parent().css('background','#ec5964');
                                        $('#div282').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div381" style="margin-top: 25%;" >
                <input id="381" type="button" value="Бронь" class="btn btn-primary"> </div></td>
                <td ><div id="div382" style="margin-top: 25%;" >
                <input id="382" type="button" value="Бронь" class="btn btn-primary"> </div></td>
            
                <script>
                    $('body').on('click','#381', function(){
                        $("#w").val("3");
                        $("#t").val("8");
                        $("#time_from").val("16:00:00");
                        $("#time_to").val("17:00:00");
                        $("#date").val("13.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div381').parent().css('background','#ec5964');
                                        $('#div381').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#382', function(){
                        $("#w").val("3");
                        $("#t").val("8");
                        $("#time_from").val("16:00:00");
                        $("#time_to").val("17:00:00");
                        $("#date").val("13.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div382').parent().css('background','#ec5964');
                                        $('#div382').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div481" style="margin-top: 25%;" >
                <input id="481" type="button" value="Бронь" class="btn btn-primary"> </div></td>
                <td ><div id="div482" style="margin-top: 25%;" >
                <input id="482" type="button" value="Бронь" class="btn btn-primary"> </div></td>
            
                <script>
                    $('body').on('click','#481', function(){
                        $("#w").val("4");
                        $("#t").val("8");
                        $("#time_from").val("16:00:00");
                        $("#time_to").val("17:00:00");
                        $("#date").val("14.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div481').parent().css('background','#ec5964');
                                        $('#div481').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#482', function(){
                        $("#w").val("4");
                        $("#t").val("8");
                        $("#time_from").val("16:00:00");
                        $("#time_to").val("17:00:00");
                        $("#date").val("14.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div482').parent().css('background','#ec5964');
                                        $('#div482').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div581" style="margin-top: 25%;" >
                <input id="581" type="button" value="Бронь" class="btn btn-primary"> </div></td>
                <td ><div id="div582" style="margin-top: 25%;" >
                <input id="582" type="button" value="Бронь" class="btn btn-primary"> </div></td>
            
                <script>
                    $('body').on('click','#581', function(){
                        $("#w").val("5");
                        $("#t").val("8");
                        $("#time_from").val("16:00:00");
                        $("#time_to").val("17:00:00");
                        $("#date").val("15.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div581').parent().css('background','#ec5964');
                                        $('#div581').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#582', function(){
                        $("#w").val("5");
                        $("#t").val("8");
                        $("#time_from").val("16:00:00");
                        $("#time_to").val("17:00:00");
                        $("#date").val("15.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div582').parent().css('background','#ec5964');
                                        $('#div582').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div681" style="margin-top: 25%;" >
                <input id="681" type="button" value="Бронь" class="btn btn-primary"> </div></td>
                <td ><div id="div682" style="margin-top: 25%;" >
                <input id="682" type="button" value="Бронь" class="btn btn-primary"> </div></td>
            
                <script>
                    $('body').on('click','#681', function(){
                        $("#w").val("6");
                        $("#t").val("8");
                        $("#time_from").val("16:00:00");
                        $("#time_to").val("17:00:00");
                        $("#date").val("16.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div681').parent().css('background','#ec5964');
                                        $('#div681').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#682', function(){
                        $("#w").val("6");
                        $("#t").val("8");
                        $("#time_from").val("16:00:00");
                        $("#time_to").val("17:00:00");
                        $("#date").val("16.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div682').parent().css('background','#ec5964');
                                        $('#div682').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
                        </tr>
                    <tr>
            <td>17:00:00<br> - <br>18:00:00</td>
             
                <td >               
                <div id="div091" style="margin-top: 25%;" >
                <input id="091" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
                <td ><div id="div092" style="margin-top: 25%;" >
                <input id="092" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
            
                <script>
                    $('body').on('click','#091', function(){
                        $("#w").val("0");
                        $("#t").val("9");
                        $("#time_from").val("17:00:00");
                        $("#time_to").val("18:00:00");
                        $("#date").val("10.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div091').parent().css('background','#ec5964');
                                        $('#div091').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#092', function(){
                        $("#w").val("0");
                        $("#t").val("9");
                        $("#time_from").val("17:00:00");
                        $("#time_to").val("18:00:00");
                        $("#date").val("10.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div092').parent().css('background','#ec5964');
                                        $('#div092').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div191" style="margin-top: 25%;" >
                <input id="191" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
                <td ><div id="div192" style="margin-top: 25%;" >
                <input id="192" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
            
                <script>
                    $('body').on('click','#191', function(){
                        $("#w").val("1");
                        $("#t").val("9");
                        $("#time_from").val("17:00:00");
                        $("#time_to").val("18:00:00");
                        $("#date").val("11.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div191').parent().css('background','#ec5964');
                                        $('#div191').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#192', function(){
                        $("#w").val("1");
                        $("#t").val("9");
                        $("#time_from").val("17:00:00");
                        $("#time_to").val("18:00:00");
                        $("#date").val("11.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div192').parent().css('background','#ec5964');
                                        $('#div192').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div291" style="margin-top: 25%;" >
                <input id="291" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
                <td ><div id="div292" style="margin-top: 25%;" >
                <input id="292" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
            
                <script>
                    $('body').on('click','#291', function(){
                        $("#w").val("2");
                        $("#t").val("9");
                        $("#time_from").val("17:00:00");
                        $("#time_to").val("18:00:00");
                        $("#date").val("12.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div291').parent().css('background','#ec5964');
                                        $('#div291').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#292', function(){
                        $("#w").val("2");
                        $("#t").val("9");
                        $("#time_from").val("17:00:00");
                        $("#time_to").val("18:00:00");
                        $("#date").val("12.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div292').parent().css('background','#ec5964');
                                        $('#div292').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div391" style="margin-top: 25%;" >
                <input id="391" type="button" value="Бронь" class="btn btn-primary"> </div></td>
                <td ><div id="div392" style="margin-top: 25%;" >
                <input id="392" type="button" value="Бронь" class="btn btn-primary"> </div></td>
            
                <script>
                    $('body').on('click','#391', function(){
                        $("#w").val("3");
                        $("#t").val("9");
                        $("#time_from").val("17:00:00");
                        $("#time_to").val("18:00:00");
                        $("#date").val("13.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div391').parent().css('background','#ec5964');
                                        $('#div391').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#392', function(){
                        $("#w").val("3");
                        $("#t").val("9");
                        $("#time_from").val("17:00:00");
                        $("#time_to").val("18:00:00");
                        $("#date").val("13.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div392').parent().css('background','#ec5964');
                                        $('#div392').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div491" style="margin-top: 25%;" >
                <input id="491" type="button" value="Бронь" class="btn btn-primary"> </div></td>
                <td ><div id="div492" style="margin-top: 25%;" >
                <input id="492" type="button" value="Бронь" class="btn btn-primary"> </div></td>
            
                <script>
                    $('body').on('click','#491', function(){
                        $("#w").val("4");
                        $("#t").val("9");
                        $("#time_from").val("17:00:00");
                        $("#time_to").val("18:00:00");
                        $("#date").val("14.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div491').parent().css('background','#ec5964');
                                        $('#div491').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#492', function(){
                        $("#w").val("4");
                        $("#t").val("9");
                        $("#time_from").val("17:00:00");
                        $("#time_to").val("18:00:00");
                        $("#date").val("14.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div492').parent().css('background','#ec5964');
                                        $('#div492').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div591" style="margin-top: 25%;" >
                <input id="591" type="button" value="Бронь" class="btn btn-primary"> </div></td>
                <td ><div id="div592" style="margin-top: 25%;" >
                <input id="592" type="button" value="Бронь" class="btn btn-primary"> </div></td>
            
                <script>
                    $('body').on('click','#591', function(){
                        $("#w").val("5");
                        $("#t").val("9");
                        $("#time_from").val("17:00:00");
                        $("#time_to").val("18:00:00");
                        $("#date").val("15.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div591').parent().css('background','#ec5964');
                                        $('#div591').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#592', function(){
                        $("#w").val("5");
                        $("#t").val("9");
                        $("#time_from").val("17:00:00");
                        $("#time_to").val("18:00:00");
                        $("#date").val("15.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div592').parent().css('background','#ec5964');
                                        $('#div592').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div691" style="margin-top: 25%;" >
                <input id="691" type="button" value="Бронь" class="btn btn-primary"> </div></td>
                <td ><div id="div692" style="margin-top: 25%;" >
                <input id="692" type="button" value="Бронь" class="btn btn-primary"> </div></td>
            
                <script>
                    $('body').on('click','#691', function(){
                        $("#w").val("6");
                        $("#t").val("9");
                        $("#time_from").val("17:00:00");
                        $("#time_to").val("18:00:00");
                        $("#date").val("16.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div691').parent().css('background','#ec5964');
                                        $('#div691').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#692', function(){
                        $("#w").val("6");
                        $("#t").val("9");
                        $("#time_from").val("17:00:00");
                        $("#time_to").val("18:00:00");
                        $("#date").val("16.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div692').parent().css('background','#ec5964');
                                        $('#div692').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
                        </tr>
                    <tr>
            <td>18:00:00<br> - <br>19:00:00</td>
             
                <td >               
                <div id="div0101" style="margin-top: 25%;" >
                <input id="0101" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
                <td ><div id="div0102" style="margin-top: 25%;" >
                <input id="0102" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
            
                <script>
                    $('body').on('click','#0101', function(){
                        $("#w").val("0");
                        $("#t").val("10");
                        $("#time_from").val("18:00:00");
                        $("#time_to").val("19:00:00");
                        $("#date").val("10.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div0101').parent().css('background','#ec5964');
                                        $('#div0101').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#0102', function(){
                        $("#w").val("0");
                        $("#t").val("10");
                        $("#time_from").val("18:00:00");
                        $("#time_to").val("19:00:00");
                        $("#date").val("10.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div0102').parent().css('background','#ec5964');
                                        $('#div0102').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div1101" style="margin-top: 25%;" >
                <input id="1101" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
                <td ><div id="div1102" style="margin-top: 25%;" >
                <input id="1102" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
            
                <script>
                    $('body').on('click','#1101', function(){
                        $("#w").val("1");
                        $("#t").val("10");
                        $("#time_from").val("18:00:00");
                        $("#time_to").val("19:00:00");
                        $("#date").val("11.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div1101').parent().css('background','#ec5964');
                                        $('#div1101').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#1102', function(){
                        $("#w").val("1");
                        $("#t").val("10");
                        $("#time_from").val("18:00:00");
                        $("#time_to").val("19:00:00");
                        $("#date").val("11.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div1102').parent().css('background','#ec5964');
                                        $('#div1102').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div2101" style="margin-top: 25%;" >
                <input id="2101" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
                <td ><div id="div2102" style="margin-top: 25%;" >
                <input id="2102" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
            
                <script>
                    $('body').on('click','#2101', function(){
                        $("#w").val("2");
                        $("#t").val("10");
                        $("#time_from").val("18:00:00");
                        $("#time_to").val("19:00:00");
                        $("#date").val("12.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div2101').parent().css('background','#ec5964');
                                        $('#div2101').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#2102', function(){
                        $("#w").val("2");
                        $("#t").val("10");
                        $("#time_from").val("18:00:00");
                        $("#time_to").val("19:00:00");
                        $("#date").val("12.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div2102').parent().css('background','#ec5964');
                                        $('#div2102').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div3101" style="margin-top: 25%;" >
                <input id="3101" type="button" value="Бронь" class="btn btn-primary"> </div></td>
                <td ><div id="div3102" style="margin-top: 25%;" >
                <input id="3102" type="button" value="Бронь" class="btn btn-primary"> </div></td>
            
                <script>
                    $('body').on('click','#3101', function(){
                        $("#w").val("3");
                        $("#t").val("10");
                        $("#time_from").val("18:00:00");
                        $("#time_to").val("19:00:00");
                        $("#date").val("13.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div3101').parent().css('background','#ec5964');
                                        $('#div3101').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#3102', function(){
                        $("#w").val("3");
                        $("#t").val("10");
                        $("#time_from").val("18:00:00");
                        $("#time_to").val("19:00:00");
                        $("#date").val("13.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div3102').parent().css('background','#ec5964');
                                        $('#div3102').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div4101" style="margin-top: 25%;" >
                <input id="4101" type="button" value="Бронь" class="btn btn-primary"> </div></td>
                <td ><div id="div4102" style="margin-top: 25%;" >
                <input id="4102" type="button" value="Бронь" class="btn btn-primary"> </div></td>
            
                <script>
                    $('body').on('click','#4101', function(){
                        $("#w").val("4");
                        $("#t").val("10");
                        $("#time_from").val("18:00:00");
                        $("#time_to").val("19:00:00");
                        $("#date").val("14.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div4101').parent().css('background','#ec5964');
                                        $('#div4101').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#4102', function(){
                        $("#w").val("4");
                        $("#t").val("10");
                        $("#time_from").val("18:00:00");
                        $("#time_to").val("19:00:00");
                        $("#date").val("14.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div4102').parent().css('background','#ec5964');
                                        $('#div4102').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div5101" style="margin-top: 25%;" >
                <input id="5101" type="button" value="Бронь" class="btn btn-primary"> </div></td>
                <td ><div id="div5102" style="margin-top: 25%;" >
                <input id="5102" type="button" value="Бронь" class="btn btn-primary"> </div></td>
            
                <script>
                    $('body').on('click','#5101', function(){
                        $("#w").val("5");
                        $("#t").val("10");
                        $("#time_from").val("18:00:00");
                        $("#time_to").val("19:00:00");
                        $("#date").val("15.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div5101').parent().css('background','#ec5964');
                                        $('#div5101').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#5102', function(){
                        $("#w").val("5");
                        $("#t").val("10");
                        $("#time_from").val("18:00:00");
                        $("#time_to").val("19:00:00");
                        $("#date").val("15.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div5102').parent().css('background','#ec5964');
                                        $('#div5102').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div6101" style="margin-top: 25%;" >
                <input id="6101" type="button" value="Бронь" class="btn btn-primary"> </div></td>
                <td ><div id="div6102" style="margin-top: 25%;" >
                <input id="6102" type="button" value="Бронь" class="btn btn-primary"> </div></td>
            
                <script>
                    $('body').on('click','#6101', function(){
                        $("#w").val("6");
                        $("#t").val("10");
                        $("#time_from").val("18:00:00");
                        $("#time_to").val("19:00:00");
                        $("#date").val("16.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div6101').parent().css('background','#ec5964');
                                        $('#div6101').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#6102', function(){
                        $("#w").val("6");
                        $("#t").val("10");
                        $("#time_from").val("18:00:00");
                        $("#time_to").val("19:00:00");
                        $("#date").val("16.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div6102').parent().css('background','#ec5964');
                                        $('#div6102').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
                        </tr>
                    <tr>
            <td>19:00:00<br> - <br>20:00:00</td>
             
                <td >               
                <div id="div0111" style="margin-top: 25%;" >
                <input id="0111" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
                <td ><div id="div0112" style="margin-top: 25%;" >
                <input id="0112" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
            
                <script>
                    $('body').on('click','#0111', function(){
                        $("#w").val("0");
                        $("#t").val("11");
                        $("#time_from").val("19:00:00");
                        $("#time_to").val("20:00:00");
                        $("#date").val("10.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div0111').parent().css('background','#ec5964');
                                        $('#div0111').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#0112', function(){
                        $("#w").val("0");
                        $("#t").val("11");
                        $("#time_from").val("19:00:00");
                        $("#time_to").val("20:00:00");
                        $("#date").val("10.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div0112').parent().css('background','#ec5964');
                                        $('#div0112').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div1111" style="margin-top: 25%;" >
                <input id="1111" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
                <td ><div id="div1112" style="margin-top: 25%;" >
                <input id="1112" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
            
                <script>
                    $('body').on('click','#1111', function(){
                        $("#w").val("1");
                        $("#t").val("11");
                        $("#time_from").val("19:00:00");
                        $("#time_to").val("20:00:00");
                        $("#date").val("11.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div1111').parent().css('background','#ec5964');
                                        $('#div1111').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#1112', function(){
                        $("#w").val("1");
                        $("#t").val("11");
                        $("#time_from").val("19:00:00");
                        $("#time_to").val("20:00:00");
                        $("#date").val("11.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div1112').parent().css('background','#ec5964');
                                        $('#div1112').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div2111" style="margin-top: 25%;" >
                <input id="2111" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
                <td ><div id="div2112" style="margin-top: 25%;" >
                <input id="2112" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
            
                <script>
                    $('body').on('click','#2111', function(){
                        $("#w").val("2");
                        $("#t").val("11");
                        $("#time_from").val("19:00:00");
                        $("#time_to").val("20:00:00");
                        $("#date").val("12.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div2111').parent().css('background','#ec5964');
                                        $('#div2111').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#2112', function(){
                        $("#w").val("2");
                        $("#t").val("11");
                        $("#time_from").val("19:00:00");
                        $("#time_to").val("20:00:00");
                        $("#date").val("12.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div2112').parent().css('background','#ec5964');
                                        $('#div2112').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div3111" style="margin-top: 25%;" >
                <input id="3111" type="button" value="Бронь" class="btn btn-primary"> </div></td>
                <td ><div id="div3112" style="margin-top: 25%;" >
                <input id="3112" type="button" value="Бронь" class="btn btn-primary"> </div></td>
            
                <script>
                    $('body').on('click','#3111', function(){
                        $("#w").val("3");
                        $("#t").val("11");
                        $("#time_from").val("19:00:00");
                        $("#time_to").val("20:00:00");
                        $("#date").val("13.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div3111').parent().css('background','#ec5964');
                                        $('#div3111').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#3112', function(){
                        $("#w").val("3");
                        $("#t").val("11");
                        $("#time_from").val("19:00:00");
                        $("#time_to").val("20:00:00");
                        $("#date").val("13.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div3112').parent().css('background','#ec5964');
                                        $('#div3112').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div4111" style="margin-top: 25%;" >
                <input id="4111" type="button" value="Бронь" class="btn btn-primary"> </div></td>
                <td ><div id="div4112" style="margin-top: 25%;" >
                <input id="4112" type="button" value="Бронь" class="btn btn-primary"> </div></td>
            
                <script>
                    $('body').on('click','#4111', function(){
                        $("#w").val("4");
                        $("#t").val("11");
                        $("#time_from").val("19:00:00");
                        $("#time_to").val("20:00:00");
                        $("#date").val("14.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div4111').parent().css('background','#ec5964');
                                        $('#div4111').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#4112', function(){
                        $("#w").val("4");
                        $("#t").val("11");
                        $("#time_from").val("19:00:00");
                        $("#time_to").val("20:00:00");
                        $("#date").val("14.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div4112').parent().css('background','#ec5964');
                                        $('#div4112').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div5111" style="margin-top: 25%;" >
                <input id="5111" type="button" value="Бронь" class="btn btn-primary"> </div></td>
                <td ><div id="div5112" style="margin-top: 25%;" >
                <input id="5112" type="button" value="Бронь" class="btn btn-primary"> </div></td>
            
                <script>
                    $('body').on('click','#5111', function(){
                        $("#w").val("5");
                        $("#t").val("11");
                        $("#time_from").val("19:00:00");
                        $("#time_to").val("20:00:00");
                        $("#date").val("15.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div5111').parent().css('background','#ec5964');
                                        $('#div5111').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#5112', function(){
                        $("#w").val("5");
                        $("#t").val("11");
                        $("#time_from").val("19:00:00");
                        $("#time_to").val("20:00:00");
                        $("#date").val("15.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div5112').parent().css('background','#ec5964');
                                        $('#div5112').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div6111" style="margin-top: 25%;" >
                <input id="6111" type="button" value="Бронь" class="btn btn-primary"> </div></td>
                <td ><div id="div6112" style="margin-top: 25%;" >
                <input id="6112" type="button" value="Бронь" class="btn btn-primary"> </div></td>
            
                <script>
                    $('body').on('click','#6111', function(){
                        $("#w").val("6");
                        $("#t").val("11");
                        $("#time_from").val("19:00:00");
                        $("#time_to").val("20:00:00");
                        $("#date").val("16.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div6111').parent().css('background','#ec5964');
                                        $('#div6111').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#6112', function(){
                        $("#w").val("6");
                        $("#t").val("11");
                        $("#time_from").val("19:00:00");
                        $("#time_to").val("20:00:00");
                        $("#date").val("16.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div6112').parent().css('background','#ec5964');
                                        $('#div6112').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
                        </tr>
                    <tr>
            <td>20:00:00<br> - <br>21:00:00</td>
             
                <td >               
                <div id="div0121" style="margin-top: 25%;" >
                <input id="0121" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
                <td ><div id="div0122" style="margin-top: 25%;" >
                <input id="0122" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
            
                <script>
                    $('body').on('click','#0121', function(){
                        $("#w").val("0");
                        $("#t").val("12");
                        $("#time_from").val("20:00:00");
                        $("#time_to").val("21:00:00");
                        $("#date").val("10.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div0121').parent().css('background','#ec5964');
                                        $('#div0121').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#0122', function(){
                        $("#w").val("0");
                        $("#t").val("12");
                        $("#time_from").val("20:00:00");
                        $("#time_to").val("21:00:00");
                        $("#date").val("10.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div0122').parent().css('background','#ec5964');
                                        $('#div0122').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div1121" style="margin-top: 25%;" >
                <input id="1121" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
                <td ><div id="div1122" style="margin-top: 25%;" >
                <input id="1122" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
            
                <script>
                    $('body').on('click','#1121', function(){
                        $("#w").val("1");
                        $("#t").val("12");
                        $("#time_from").val("20:00:00");
                        $("#time_to").val("21:00:00");
                        $("#date").val("11.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div1121').parent().css('background','#ec5964');
                                        $('#div1121').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#1122', function(){
                        $("#w").val("1");
                        $("#t").val("12");
                        $("#time_from").val("20:00:00");
                        $("#time_to").val("21:00:00");
                        $("#date").val("11.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div1122').parent().css('background','#ec5964');
                                        $('#div1122').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div2121" style="margin-top: 25%;" >
                <input id="2121" type="button" value="Бронь" class="btn btn-primary"> </div></td>
                <td ><div id="div2122" style="margin-top: 25%;" >
                <input id="2122" type="button" value="Бронь" class="btn btn-primary"> </div></td>
            
                <script>
                    $('body').on('click','#2121', function(){
                        $("#w").val("2");
                        $("#t").val("12");
                        $("#time_from").val("20:00:00");
                        $("#time_to").val("21:00:00");
                        $("#date").val("12.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div2121').parent().css('background','#ec5964');
                                        $('#div2121').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#2122', function(){
                        $("#w").val("2");
                        $("#t").val("12");
                        $("#time_from").val("20:00:00");
                        $("#time_to").val("21:00:00");
                        $("#date").val("12.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div2122').parent().css('background','#ec5964');
                                        $('#div2122').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div3121" style="margin-top: 25%;" >
                <input id="3121" type="button" value="Бронь" class="btn btn-primary"> </div></td>
                <td ><div id="div3122" style="margin-top: 25%;" >
                <input id="3122" type="button" value="Бронь" class="btn btn-primary"> </div></td>
            
                <script>
                    $('body').on('click','#3121', function(){
                        $("#w").val("3");
                        $("#t").val("12");
                        $("#time_from").val("20:00:00");
                        $("#time_to").val("21:00:00");
                        $("#date").val("13.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div3121').parent().css('background','#ec5964');
                                        $('#div3121').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#3122', function(){
                        $("#w").val("3");
                        $("#t").val("12");
                        $("#time_from").val("20:00:00");
                        $("#time_to").val("21:00:00");
                        $("#date").val("13.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div3122').parent().css('background','#ec5964');
                                        $('#div3122').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div4121" style="margin-top: 25%;" >
                <input id="4121" type="button" value="Бронь" class="btn btn-primary"> </div></td>
                <td ><div id="div4122" style="margin-top: 25%;" >
                <input id="4122" type="button" value="Бронь" class="btn btn-primary"> </div></td>
            
                <script>
                    $('body').on('click','#4121', function(){
                        $("#w").val("4");
                        $("#t").val("12");
                        $("#time_from").val("20:00:00");
                        $("#time_to").val("21:00:00");
                        $("#date").val("14.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div4121').parent().css('background','#ec5964');
                                        $('#div4121').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#4122', function(){
                        $("#w").val("4");
                        $("#t").val("12");
                        $("#time_from").val("20:00:00");
                        $("#time_to").val("21:00:00");
                        $("#date").val("14.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div4122').parent().css('background','#ec5964');
                                        $('#div4122').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div5121" style="margin-top: 25%;" >
                <input id="5121" type="button" value="Бронь" class="btn btn-primary"> </div></td>
                <td ><div id="div5122" style="margin-top: 25%;" >
                <input id="5122" type="button" value="Бронь" class="btn btn-primary"> </div></td>
            
                <script>
                    $('body').on('click','#5121', function(){
                        $("#w").val("5");
                        $("#t").val("12");
                        $("#time_from").val("20:00:00");
                        $("#time_to").val("21:00:00");
                        $("#date").val("15.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div5121').parent().css('background','#ec5964');
                                        $('#div5121').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#5122', function(){
                        $("#w").val("5");
                        $("#t").val("12");
                        $("#time_from").val("20:00:00");
                        $("#time_to").val("21:00:00");
                        $("#date").val("15.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div5122').parent().css('background','#ec5964');
                                        $('#div5122').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div6121" style="margin-top: 25%;" >
                <input id="6121" type="button" value="Бронь" class="btn btn-primary"> </div></td>
                <td ><div id="div6122" style="margin-top: 25%;" >
                <input id="6122" type="button" value="Бронь" class="btn btn-primary"> </div></td>
            
                <script>
                    $('body').on('click','#6121', function(){
                        $("#w").val("6");
                        $("#t").val("12");
                        $("#time_from").val("20:00:00");
                        $("#time_to").val("21:00:00");
                        $("#date").val("16.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div6121').parent().css('background','#ec5964');
                                        $('#div6121').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#6122', function(){
                        $("#w").val("6");
                        $("#t").val("12");
                        $("#time_from").val("20:00:00");
                        $("#time_to").val("21:00:00");
                        $("#date").val("16.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div6122').parent().css('background','#ec5964');
                                        $('#div6122').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
                        </tr>
                    <tr>
            <td>21:00:00<br> - <br>22:00:00</td>
             
                <td >               
                <div id="div0131" style="margin-top: 25%;" >
                <input id="0131" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
                <td ><div id="div0132" style="margin-top: 25%;" >
                <input id="0132" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
            
                <script>
                    $('body').on('click','#0131', function(){
                        $("#w").val("0");
                        $("#t").val("13");
                        $("#time_from").val("21:00:00");
                        $("#time_to").val("22:00:00");
                        $("#date").val("10.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div0131').parent().css('background','#ec5964');
                                        $('#div0131').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#0132', function(){
                        $("#w").val("0");
                        $("#t").val("13");
                        $("#time_from").val("21:00:00");
                        $("#time_to").val("22:00:00");
                        $("#date").val("10.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div0132').parent().css('background','#ec5964');
                                        $('#div0132').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div1131" style="margin-top: 25%;" >
                <input id="1131" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
                <td ><div id="div1132" style="margin-top: 25%;" >
                <input id="1132" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
            
                <script>
                    $('body').on('click','#1131', function(){
                        $("#w").val("1");
                        $("#t").val("13");
                        $("#time_from").val("21:00:00");
                        $("#time_to").val("22:00:00");
                        $("#date").val("11.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div1131').parent().css('background','#ec5964');
                                        $('#div1131').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#1132', function(){
                        $("#w").val("1");
                        $("#t").val("13");
                        $("#time_from").val("21:00:00");
                        $("#time_to").val("22:00:00");
                        $("#date").val("11.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div1132').parent().css('background','#ec5964');
                                        $('#div1132').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div2131" style="margin-top: 25%;" >
                <input id="2131" type="button" value="Бронь" class="btn btn-primary"> </div></td>
                <td ><div id="div2132" style="margin-top: 25%;" >
                <input id="2132" type="button" value="Бронь" class="btn btn-primary"> </div></td>
            
                <script>
                    $('body').on('click','#2131', function(){
                        $("#w").val("2");
                        $("#t").val("13");
                        $("#time_from").val("21:00:00");
                        $("#time_to").val("22:00:00");
                        $("#date").val("12.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div2131').parent().css('background','#ec5964');
                                        $('#div2131').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#2132', function(){
                        $("#w").val("2");
                        $("#t").val("13");
                        $("#time_from").val("21:00:00");
                        $("#time_to").val("22:00:00");
                        $("#date").val("12.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div2132').parent().css('background','#ec5964');
                                        $('#div2132').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div3131" style="margin-top: 25%;" >
                <input id="3131" type="button" value="Бронь" class="btn btn-primary"> </div></td>
                <td ><div id="div3132" style="margin-top: 25%;" >
                <input id="3132" type="button" value="Бронь" class="btn btn-primary"> </div></td>
            
                <script>
                    $('body').on('click','#3131', function(){
                        $("#w").val("3");
                        $("#t").val("13");
                        $("#time_from").val("21:00:00");
                        $("#time_to").val("22:00:00");
                        $("#date").val("13.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div3131').parent().css('background','#ec5964');
                                        $('#div3131').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#3132', function(){
                        $("#w").val("3");
                        $("#t").val("13");
                        $("#time_from").val("21:00:00");
                        $("#time_to").val("22:00:00");
                        $("#date").val("13.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div3132').parent().css('background','#ec5964');
                                        $('#div3132').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div4131" style="margin-top: 25%;" >
                <input id="4131" type="button" value="Бронь" class="btn btn-primary"> </div></td>
                <td ><div id="div4132" style="margin-top: 25%;" >
                <input id="4132" type="button" value="Бронь" class="btn btn-primary"> </div></td>
            
                <script>
                    $('body').on('click','#4131', function(){
                        $("#w").val("4");
                        $("#t").val("13");
                        $("#time_from").val("21:00:00");
                        $("#time_to").val("22:00:00");
                        $("#date").val("14.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div4131').parent().css('background','#ec5964');
                                        $('#div4131').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#4132', function(){
                        $("#w").val("4");
                        $("#t").val("13");
                        $("#time_from").val("21:00:00");
                        $("#time_to").val("22:00:00");
                        $("#date").val("14.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div4132').parent().css('background','#ec5964');
                                        $('#div4132').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div5131" style="margin-top: 25%;" >
                <input id="5131" type="button" value="Бронь" class="btn btn-primary"> </div></td>
                <td ><div id="div5132" style="margin-top: 25%;" >
                <input id="5132" type="button" value="Бронь" class="btn btn-primary"> </div></td>
            
                <script>
                    $('body').on('click','#5131', function(){
                        $("#w").val("5");
                        $("#t").val("13");
                        $("#time_from").val("21:00:00");
                        $("#time_to").val("22:00:00");
                        $("#date").val("15.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div5131').parent().css('background','#ec5964');
                                        $('#div5131').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#5132', function(){
                        $("#w").val("5");
                        $("#t").val("13");
                        $("#time_from").val("21:00:00");
                        $("#time_to").val("22:00:00");
                        $("#date").val("15.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div5132').parent().css('background','#ec5964');
                                        $('#div5132').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div6131" style="margin-top: 25%;" >
                <input id="6131" type="button" value="Бронь" class="btn btn-primary"> </div></td>
                <td ><div id="div6132" style="margin-top: 25%;" >
                <input id="6132" type="button" value="Бронь" class="btn btn-primary"> </div></td>
            
                <script>
                    $('body').on('click','#6131', function(){
                        $("#w").val("6");
                        $("#t").val("13");
                        $("#time_from").val("21:00:00");
                        $("#time_to").val("22:00:00");
                        $("#date").val("16.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div6131').parent().css('background','#ec5964');
                                        $('#div6131').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#6132', function(){
                        $("#w").val("6");
                        $("#t").val("13");
                        $("#time_from").val("21:00:00");
                        $("#time_to").val("22:00:00");
                        $("#date").val("16.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div6132').parent().css('background','#ec5964');
                                        $('#div6132').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
                        </tr>
                    <tr>
            <td>22:00:00<br> - <br>23:00:00</td>
             
                <td >               
                <div id="div0141" style="margin-top: 25%;" >
                <input id="0141" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
                <td ><div id="div0142" style="margin-top: 25%;" >
                <input id="0142" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
            
                <script>
                    $('body').on('click','#0141', function(){
                        $("#w").val("0");
                        $("#t").val("14");
                        $("#time_from").val("22:00:00");
                        $("#time_to").val("23:00:00");
                        $("#date").val("10.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div0141').parent().css('background','#ec5964');
                                        $('#div0141').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#0142', function(){
                        $("#w").val("0");
                        $("#t").val("14");
                        $("#time_from").val("22:00:00");
                        $("#time_to").val("23:00:00");
                        $("#date").val("10.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div0142').parent().css('background','#ec5964');
                                        $('#div0142').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div1141" style="margin-top: 25%;" >
                <input id="1141" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
                <td ><div id="div1142" style="margin-top: 25%;" >
                <input id="1142" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
            
                <script>
                    $('body').on('click','#1141', function(){
                        $("#w").val("1");
                        $("#t").val("14");
                        $("#time_from").val("22:00:00");
                        $("#time_to").val("23:00:00");
                        $("#date").val("11.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div1141').parent().css('background','#ec5964');
                                        $('#div1141').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#1142', function(){
                        $("#w").val("1");
                        $("#t").val("14");
                        $("#time_from").val("22:00:00");
                        $("#time_to").val("23:00:00");
                        $("#date").val("11.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div1142').parent().css('background','#ec5964');
                                        $('#div1142').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div2141" style="margin-top: 25%;" >
                <input id="2141" type="button" value="Бронь" class="btn btn-primary"> </div></td>
                <td ><div id="div2142" style="margin-top: 25%;" >
                <input id="2142" type="button" value="Бронь" class="btn btn-primary"> </div></td>
            
                <script>
                    $('body').on('click','#2141', function(){
                        $("#w").val("2");
                        $("#t").val("14");
                        $("#time_from").val("22:00:00");
                        $("#time_to").val("23:00:00");
                        $("#date").val("12.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div2141').parent().css('background','#ec5964');
                                        $('#div2141').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#2142', function(){
                        $("#w").val("2");
                        $("#t").val("14");
                        $("#time_from").val("22:00:00");
                        $("#time_to").val("23:00:00");
                        $("#date").val("12.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div2142').parent().css('background','#ec5964');
                                        $('#div2142').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div3141" style="margin-top: 25%;" >
                <input id="3141" type="button" value="Бронь" class="btn btn-primary"> </div></td>
                <td ><div id="div3142" style="margin-top: 25%;" >
                <input id="3142" type="button" value="Бронь" class="btn btn-primary"> </div></td>
            
                <script>
                    $('body').on('click','#3141', function(){
                        $("#w").val("3");
                        $("#t").val("14");
                        $("#time_from").val("22:00:00");
                        $("#time_to").val("23:00:00");
                        $("#date").val("13.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div3141').parent().css('background','#ec5964');
                                        $('#div3141').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#3142', function(){
                        $("#w").val("3");
                        $("#t").val("14");
                        $("#time_from").val("22:00:00");
                        $("#time_to").val("23:00:00");
                        $("#date").val("13.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div3142').parent().css('background','#ec5964');
                                        $('#div3142').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div4141" style="margin-top: 25%;" >
                <input id="4141" type="button" value="Бронь" class="btn btn-primary"> </div></td>
                <td ><div id="div4142" style="margin-top: 25%;" >
                <input id="4142" type="button" value="Бронь" class="btn btn-primary"> </div></td>
            
                <script>
                    $('body').on('click','#4141', function(){
                        $("#w").val("4");
                        $("#t").val("14");
                        $("#time_from").val("22:00:00");
                        $("#time_to").val("23:00:00");
                        $("#date").val("14.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div4141').parent().css('background','#ec5964');
                                        $('#div4141').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#4142', function(){
                        $("#w").val("4");
                        $("#t").val("14");
                        $("#time_from").val("22:00:00");
                        $("#time_to").val("23:00:00");
                        $("#date").val("14.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div4142').parent().css('background','#ec5964');
                                        $('#div4142').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div5141" style="margin-top: 25%;" >
                <input id="5141" type="button" value="Бронь" class="btn btn-primary"> </div></td>
                <td ><div id="div5142" style="margin-top: 25%;" >
                <input id="5142" type="button" value="Бронь" class="btn btn-primary"> </div></td>
            
                <script>
                    $('body').on('click','#5141', function(){
                        $("#w").val("5");
                        $("#t").val("14");
                        $("#time_from").val("22:00:00");
                        $("#time_to").val("23:00:00");
                        $("#date").val("15.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div5141').parent().css('background','#ec5964');
                                        $('#div5141').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#5142', function(){
                        $("#w").val("5");
                        $("#t").val("14");
                        $("#time_from").val("22:00:00");
                        $("#time_to").val("23:00:00");
                        $("#date").val("15.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div5142').parent().css('background','#ec5964');
                                        $('#div5142').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div6141" style="margin-top: 25%;" >
                <input id="6141" type="button" value="Бронь" class="btn btn-primary"> </div></td>
                <td ><div id="div6142" style="margin-top: 25%;" >
                <input id="6142" type="button" value="Бронь" class="btn btn-primary"> </div></td>
            
                <script>
                    $('body').on('click','#6141', function(){
                        $("#w").val("6");
                        $("#t").val("14");
                        $("#time_from").val("22:00:00");
                        $("#time_to").val("23:00:00");
                        $("#date").val("16.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div6141').parent().css('background','#ec5964');
                                        $('#div6141').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#6142', function(){
                        $("#w").val("6");
                        $("#t").val("14");
                        $("#time_from").val("22:00:00");
                        $("#time_to").val("23:00:00");
                        $("#date").val("16.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div6142').parent().css('background','#ec5964');
                                        $('#div6142').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
                        </tr>
                    <tr>
            <td>23:00:00<br> - <br>00:00:00</td>
             
                <td >               
                <div id="div0151" style="margin-top: 25%;" >
                <input id="0151" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
                <td ><div id="div0152" style="margin-top: 25%;" >
                <input id="0152" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
            
                <script>
                    $('body').on('click','#0151', function(){
                        $("#w").val("0");
                        $("#t").val("15");
                        $("#time_from").val("23:00:00");
                        $("#time_to").val("00:00:00");
                        $("#date").val("10.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div0151').parent().css('background','#ec5964');
                                        $('#div0151').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#0152', function(){
                        $("#w").val("0");
                        $("#t").val("15");
                        $("#time_from").val("23:00:00");
                        $("#time_to").val("00:00:00");
                        $("#date").val("10.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div0152').parent().css('background','#ec5964');
                                        $('#div0152').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div1151" style="margin-top: 25%;" >
                <input id="1151" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
                <td ><div id="div1152" style="margin-top: 25%;" >
                <input id="1152" type="button" value="Бронь" class="btn btn-default" disabled> </div></td>
            
                <script>
                    $('body').on('click','#1151', function(){
                        $("#w").val("1");
                        $("#t").val("15");
                        $("#time_from").val("23:00:00");
                        $("#time_to").val("00:00:00");
                        $("#date").val("11.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div1151').parent().css('background','#ec5964');
                                        $('#div1151').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#1152', function(){
                        $("#w").val("1");
                        $("#t").val("15");
                        $("#time_from").val("23:00:00");
                        $("#time_to").val("00:00:00");
                        $("#date").val("11.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div1152').parent().css('background','#ec5964');
                                        $('#div1152').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div2151" style="margin-top: 25%;" >
                <input id="2151" type="button" value="Бронь" class="btn btn-primary"> </div></td>
                <td ><div id="div2152" style="margin-top: 25%;" >
                <input id="2152" type="button" value="Бронь" class="btn btn-primary"> </div></td>
            
                <script>
                    $('body').on('click','#2151', function(){
                        $("#w").val("2");
                        $("#t").val("15");
                        $("#time_from").val("23:00:00");
                        $("#time_to").val("00:00:00");
                        $("#date").val("12.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div2151').parent().css('background','#ec5964');
                                        $('#div2151').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#2152', function(){
                        $("#w").val("2");
                        $("#t").val("15");
                        $("#time_from").val("23:00:00");
                        $("#time_to").val("00:00:00");
                        $("#date").val("12.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div2152').parent().css('background','#ec5964');
                                        $('#div2152').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div3151" style="margin-top: 25%;" >
                <input id="3151" type="button" value="Бронь" class="btn btn-primary"> </div></td>
                <td ><div id="div3152" style="margin-top: 25%;" >
                <input id="3152" type="button" value="Бронь" class="btn btn-primary"> </div></td>
            
                <script>
                    $('body').on('click','#3151', function(){
                        $("#w").val("3");
                        $("#t").val("15");
                        $("#time_from").val("23:00:00");
                        $("#time_to").val("00:00:00");
                        $("#date").val("13.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div3151').parent().css('background','#ec5964');
                                        $('#div3151').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#3152', function(){
                        $("#w").val("3");
                        $("#t").val("15");
                        $("#time_from").val("23:00:00");
                        $("#time_to").val("00:00:00");
                        $("#date").val("13.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div3152').parent().css('background','#ec5964');
                                        $('#div3152').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div4151" style="margin-top: 25%;" >
                <input id="4151" type="button" value="Бронь" class="btn btn-primary"> </div></td>
                <td ><div id="div4152" style="margin-top: 25%;" >
                <input id="4152" type="button" value="Бронь" class="btn btn-primary"> </div></td>
            
                <script>
                    $('body').on('click','#4151', function(){
                        $("#w").val("4");
                        $("#t").val("15");
                        $("#time_from").val("23:00:00");
                        $("#time_to").val("00:00:00");
                        $("#date").val("14.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div4151').parent().css('background','#ec5964');
                                        $('#div4151').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#4152', function(){
                        $("#w").val("4");
                        $("#t").val("15");
                        $("#time_from").val("23:00:00");
                        $("#time_to").val("00:00:00");
                        $("#date").val("14.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div4152').parent().css('background','#ec5964');
                                        $('#div4152').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div5151" style="margin-top: 25%;" >
                <input id="5151" type="button" value="Бронь" class="btn btn-primary"> </div></td>
                <td ><div id="div5152" style="margin-top: 25%;" >
                <input id="5152" type="button" value="Бронь" class="btn btn-primary"> </div></td>
            
                <script>
                    $('body').on('click','#5151', function(){
                        $("#w").val("5");
                        $("#t").val("15");
                        $("#time_from").val("23:00:00");
                        $("#time_to").val("00:00:00");
                        $("#date").val("15.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div5151').parent().css('background','#ec5964');
                                        $('#div5151').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#5152', function(){
                        $("#w").val("5");
                        $("#t").val("15");
                        $("#time_from").val("23:00:00");
                        $("#time_to").val("00:00:00");
                        $("#date").val("15.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div5152').parent().css('background','#ec5964');
                                        $('#div5152').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
             
                <td >               
                <div id="div6151" style="margin-top: 25%;" >
                <input id="6151" type="button" value="Бронь" class="btn btn-primary"> </div></td>
                <td ><div id="div6152" style="margin-top: 25%;" >
                <input id="6152" type="button" value="Бронь" class="btn btn-primary"> </div></td>
            
                <script>
                    $('body').on('click','#6151', function(){
                        $("#w").val("6");
                        $("#t").val("15");
                        $("#time_from").val("23:00:00");
                        $("#time_to").val("00:00:00");
                        $("#date").val("16.08.2020");
                        $("#field").val("1");
                                                $("#name").val('');
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){   
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div6151').parent().css('background','#ec5964');
                                        $('#div6151').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                    $('body').on('click','#6152', function(){
                        $("#w").val("6");
                        $("#t").val("15");
                        $("#time_from").val("23:00:00");
                        $("#time_to").val("00:00:00");
                        $("#date").val("16.08.2020");
                        $("#field").val("2");
                                                $("#name").val("");
                        $("#phone").val("");
                        user_id = '';
                        is_banned = '';
                        is_logged_in = '1';
                                                if(user_id != '' && is_logged_in == '1'){
                            if('' == '1'){
                                $("#myModal").modal();
                            }else if(is_banned == '1'){
                                $("#myModal").modal();
                            }else{
                                console.log($('#new_record').serialize());
                                $.ajax({
                                    type: 'POST',
                                    url: 'new_record.php',
                                    data: $('#new_record').serialize(),
                                    success: function (data) {
                                        console.log(data);
                                        $('#div6152').parent().css('background','#ec5964');
                                        $('#div6152').html(data);
                                    },
                                    error: function (data) {
                                        alert(data);
                                        return false;
                                    }
                                });
                            }
                        }else{
                            $("#myModal").modal();
                        }
                        return false;
                    });
                </script>
                        </tr>
                </tbody>
    </table>
</div>

<!-- // hidden form -->
 
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title text-center">Бронировать</h4>
            </div>
            <div class="modal-body">
                                    <a href="register.php">Зарегистрируйтесь</a> или <a href="login.php">войдите</a> , чтобы воспользоваться функцией бронирования.
                            </div>
            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>
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
                    <li><a href="booking.php#"><i class="fa fa-youtube"></i></a></li>
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
    <script type="text/javascript" src="http://www.olimp1.kg/js/selectize.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/jquery.maskedinput.min.js"></script>
    <script>
    if($(window).width() <= 767){
        $('.modal-dialog').width($(window).width());
    }
    $(document).ready(function(){
        $('thead th:first-child').width($('tbody td:first-child').width());$('tbody').height($(window).height()-$('header').height()-50);
        $('tbody td:not(:first-child)').width('100%');

        for(i = 2; i <= 15; i++){
            $('#fields th:nth-child('+i+')').width($('tbody td:not(:first-child)').width());
        }
        for(i = 2; i <= 8; i++){
            $('#weekdays th:nth-child('+i+')').width($('tbody td:not(:first-child)').width()*2+18);
            $('#dates th:nth-child('+i+')').width($('tbody td:not(:first-child)').width()*2+18);
        }
        if($(window).width() <= 767){
            $('tbody').scroll(function(e) { //detect a scroll event on the tbody
                $('thead').css("left", -$("tbody").scrollLeft()); //fix the thead relative to the body scrolling
                $('thead th:nth-child(1)').css("left", $("tbody").scrollLeft()); //fix the first cell of the header
                $('tbody td:nth-child(1)').css("left", $("tbody").scrollLeft()); //fix the first column of tdbody
            });
              
        }
    });
     </script>
    <script>
    $('body').on('click','.delete-book', function(e){
        e.preventDefault();
        link = $(this);
        url = $(this).attr('href').split(/[\s?&=]+/);
        id = url[2];
        date = url[4];
        f = url[6];
        w = url[8];
        t = url[10];
        $.ajax({
			type: "POST",
			url: "delete_book.php",
			data: 'delete_id='+id+'&date='+date+'&f='+f+'&w='+w+'&t='+t,
			success: function(data){
				console.log(data);
                link.closest('td').css('background','#fff');
                link.parent('div').html(data);
			}
		});
		return false;
    });
    
    $('body').on('click','#admin-book', function(e){
        e.preventDefault();
        w = $('#w').val();
        t = $('#t').val();
        f = $('#field').val();
        console.log($('#new_record_admin').serialize());
        $.ajax({
			type: "POST",
			url: "new_record.php",
			data: $('#new_record_admin').serialize(),
			success: function(data){
                console.log(data);
                $('#div'+w+''+t+''+f).html(data).closest('td').css('background','rgb(236, 89, 100)');
			}
		});
		return false;
    });
    </script>
    <script>
        flag = 0;
    tempData = '1581766027';
    var timeOut;            //This variable is responsible for the frequency of data acquisition
    function getMyData(){
        var myUrl = 'check_for_update.php';   // ip address of arduino
        var myData = $.ajax({
            url: myUrl,
            timeout : 3000,        //this will cancel the request if it has not received a reply within 10 seconds.
            success: function(data){
                console.log('Check for updates');
                if(tempData != data) { // if there were some changes in db table
                    tempData = data; // update data 
                    flag = 1;
                    console.log('Yes updates');
                    window.location.reload();
                }else{
                    flag = 0;
                }
            }});

        myData.error(function(xhr, status, errorThrown){
            console.log('Failure');
            console.log("Error: " + errorThrown);
            console.log("Status: " + status);
            console.dir(xhr);
        });

        timeOut = setTimeout('getMyData()', 10000); //this will request data again in 5 second.
    }
</script>
        <script>
        $('#name').selectize({
            persist: false,
            maxItems: 1,
            valueField: 'id',
            labelField: 'name',
            searchField: ['name', 'id'],
            options: [
                                {id: '1', name: 'admin'},                                {id: '2', name: 'кперноглорп http://link7link.africa/tds/y34a'},                                {id: '3', name: 'testtest'},                                {id: '4', name: 'Azamat'},                                {id: '5', name: 'manas'},                                {id: '6', name: 'Элдос '}                            ],
            create: function(input) {
                return {
                    id: input,
                    name: input
                }
            },
            onChange: function(value) {
                $.ajax({
                    type: "POST",
                    url: "get_phone.php",
                    data: 'value='+value,
                    success: function(data){
                        console.log(data);console.log(value);
                        $('#phone').val(data);
                    }
                });
            }
        });
        $(document).ready(function(){
            getMyData();
            var phoneInput = $("input[name=phone]");
            if(phoneInput.length) {
                phoneInput.mask("9999-99-99-99");
            }
        });
    </script>
    
</body>

</html>