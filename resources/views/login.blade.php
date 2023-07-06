<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="{{ route('login.submit') }}" method="POST">
    @csrf
    <label for="email">Email:</label>
    <input type="email" name="email" id="email">
    <br>
    <label for="password">Contraseña:</label>
    <input type="password" name="password" id="password">
    <br>
    <button type="submit">Iniciar sesión</button>
</form>

</body>
</html>