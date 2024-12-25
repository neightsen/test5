<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

@if(auth()->check())
<p>{{ auth()->user()->name }}</p>

<form action="/logout" method="POST">
    @csrf
    <input type="submit" value="Выйти">
</form>

@else
    <a href="{{ route('showRegisterForm') }}">Регистрация</a>
    <a href="{{ route('showLoginForm') }}">Авторизация</a>
@endif
    <h1>Лоты</h1>
    @auth
    <h2>Создать лот</h2>
        <form action="/" method="POST">
            @csrf
            <input type='text' name='name' placeholder="Название" required>
            <input type='text' name='description' placeholder='Описание лота' required>
            <input type='number' name='bet' placeholder='Начальная цена' required>
            <input type='submit' value='Создать'>
        </form>
    @endauth

        @foreach($lots as $lot)
        <h2>Имя</h2>
        <h3>{{ $lot -> name }}</h3>
        <p>{{ $lot -> description }}</p>
        <p>{{ $lot -> bet }}</p>
        @endforeach

        @auth
        <button>Повысить ставку</button>
        @endauth
</body>
</html>