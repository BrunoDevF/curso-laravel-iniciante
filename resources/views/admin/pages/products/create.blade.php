@extends('admin.layout.app')

@section('title','Cadastrar um novo produto')

@section('content')
    <h1>Cadastrar novo produto</h1>

    <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" id="" placeholder="Digite aqui...">
        <input type="text" name="description" id="" placeholder="Digite aqui...">

        <input type="file" name="photo" id="">

        <input type="submit" value="Enviar">

    </form>
@endsection