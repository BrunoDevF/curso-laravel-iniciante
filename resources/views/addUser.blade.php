<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar um novo usuario</title>
    
</head>
<body>
    <form action="{{ route('users.store') }}" method="post">
        @csrf

        <label for="">Nome do usuario</label>
        <input type="text" name="name">

        <label for="">E-mail do usuario</label>
        <input type="text" name="email">

        <label for="">Senha do usuario</label>
        <input type="text" name="password">

        <input type="submit" value="Cadastrar novo usuario">
    </form>
</body>
</html>