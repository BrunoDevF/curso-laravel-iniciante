@extends('admin.layout.app')

@section('title','Cadastrar um novo produto')

@section('content')
    <h1>Cadastrar novo produto</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>    
    @endif

    <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="Digite aqui..." value="{{ old('name') }}">
        <input type="text" name="description" value="{{ old('description') }}" placeholder="Digite aqui...">

        <input type="file" name="photo" id="">

        <input type="submit" value="Enviar">

    </form>
@endsection