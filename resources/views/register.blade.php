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
@if($errors->any())
    <div class="container">
        <div class="alert" role="alert">
            <ul>
                @foreach($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif
<div class="form_div">
    <form class="register__form" action="{{ route('signup') }}" method="post">
        @csrf
        <label>Логін</label>
        <input name="login" type="text" placeholder="Введіть свій логін">
        <label>E-mail</label>
        <input name="email" type="email" placeholder="Введіть свій e-mail">
        <label>Пароль</label>
        <input name="password" type="password" placeholder="Введіть свій пароль">
        <label>Підтвердження паролю</label>
        <input name="password_confirm" type="password" placeholder="Повторіть введений пароль">
        <button type="submit" class="come__in">Зареєструватись</button>
        <p class="registration__click">В вас вже є акаунт? - <a href="{{ route('login') }}">авторизуйтесь</a>!</p>
    </form>
</div>
</body>
</html>

