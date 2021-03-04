<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>    
    @endif

    <form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="GET">
        @csrf

        <input type="text" name="name" placeholder="Digite aqui..." value="{{ old('name') }}">
        <input type="text" name="email" value="{{ old('email') }}" placeholder="Digite aqui...">

        <input type="text" name="password" placeholder="Digite aqui sua senha...">

        <input type="submit" value="Enviar">

    </form>
</body>
</html>