<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Login</h1>
<br>

<form action="{{ route('login') }}" method="POST">
    @csrf
    <input type="text" name="email" placeholder="Ingrese su Email">
    <br>
    <input type="password" name="password" placeholder="Ingrese su Password">
    <br>
    <button type="submit">Enviar</button>
    <br>
    <br>
</form>

<h1>¿No tienes Usuario?</h1>
<br>


<h1>Registrate</h1>

<form action="{{ route('register') }}" method="POST">
<br>
<input type="text" name="ingresa_nombre" placeholder="Ingrese su nombre completo">
<br>
<input type="text" name="ingresa_email" placeholder="Ingrese su email">
<br>
<input type="password" name="ingresa_password" placeholder="Ingrese su password">
<br>
<button type="submit">Enviar</button>
<br>
</form>



</body>
</html>