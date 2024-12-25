<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Регистрация</h1>
    <form action="/register" method="POST">
        @csrf
        <input type='text' name="name" placeholder="Имя" required>
        <input type='email' name="email" placeholder="Электронная почта" required>
        <input type='email' name='email_confirmation' placeholder="Подтверждение почты" required>
        <input type='password' name="password" placeholder="Пароль" required>
        <input type='submit' value='Зарегаца'>
    </form>
</body>
</html>