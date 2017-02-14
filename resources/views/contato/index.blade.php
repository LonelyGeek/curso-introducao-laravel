@extends('layout.site')

@section('titulo', 'Contatos')

@section('conteudo')

<h3>Essa é a a view index</h3>

@foreach($contatos as $contato)
   <p> {{ $contato->nome }} </p>
   <p>{{ $contato->Telefone }}</p>
@endforeach

@endsection
