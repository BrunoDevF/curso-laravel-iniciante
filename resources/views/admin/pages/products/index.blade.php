@extends('admin.layout.app');

@section('title','Gestão de produtos');
@section('content')
    
    <h1>Exibindo os produtos</h1>

   <a href="{{ route('products.create') }}">Cadastrar novos produtos</a>
@endsection
@push('style')
    <link rel="stylesheet" href="style.css">
@endpush