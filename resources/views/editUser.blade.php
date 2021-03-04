<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar usuario</title>
    
</head>
<body>
    <form action="{{ route('user.edit',['user'=>$user->id]) }}" method="post">
        @csrf
        @method('PUT')
        <label for="">Nome do usuario</label>
        <input type="text" name="name" value="{{$user->name}}">

        <label for="">E-mail do usuario</label>
        <input type="text" name="email" value="{{$user->email}}">

        <label for="">Senha do usuario</label>
        <input type="text" name="password" value="{{$user->password}}">

        <input type="submit" value="Editar usuario">
    </form>
</body>
</html>