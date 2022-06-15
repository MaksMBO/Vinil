<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap-grid.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">

</head>
<body>
<div class="form_div">
    <form class="register__form" action="{{ route('signin') }}" method="post">

        @csrf

        <label>Логін</label>
        <input name="login" type="text" placeholder="Введіть логін"></input>
        <label>Пароль</label>
        <input name="password" type="password" placeholder="Введіть пароль"></input>
        <button type="submit" class="come__in">Ввійти</button>
{{--        <p class="registration__click">В вас немає акаунта? - <a href="{{ route('register') }}">зареєструйтесь</a>!</p>--}}
    </form>

    <button type="submit" class="come__in-another">
        <a href="{{ route('lending') }}" class="linenn"><p class="in_site">Ввійти в режимі перегляду</a>
    </button>
    <p class="registration__click">В вас немає акаунта? - <a href="{{ route('register') }}" class="linenn-1">зареєструйтесь</a>!</p>
</div>

</body>
</html>


