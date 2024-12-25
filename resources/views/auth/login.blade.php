<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Войти</h1>
    <form action="/login" method="POST">
        @csrf
        <input type='email' name="email" placeholder="email" required>
        <input type='password' name="password" placeholder="password" required>
        <input type='submit' value='Войти'>
    </form>
</body>
</html>