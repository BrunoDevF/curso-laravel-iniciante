@extends('admin.layout.app')

@section('title','editando um produto')

@section('content')
    <h1>Editando produto {{$id}}</h1>

    <form action="{{ route('products.update', $id) }}" method="post">
        <input type="hidden" name="_method" value="PUT">
        @csrf
        <input type="text" name="name" id="" placeholder="Digite aqui...">
        <input type="text" name="description" id="" placeholder="Digite aqui...">

        <input type="submit" value="Enviar">

    </form>
@endsection