@extends('layouts.main')

@section('title', 'Produtos')

@section('content')

<h1>Tela de produtos</h1>
@if($busca != '')
  <p>Você pesquisou por: {{$busca}}</p>
@endif
@endsection