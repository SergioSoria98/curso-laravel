
@extends('layout')

@section('title', 'Portafolio')

@section('content')
    <h1>Portafolio</h1>


    <ul>

        @forelse ($portfolio as $portfolioItem)
             <li>{{ $portfolioItem['title'] }}</li>
        @empty

        <li>No hay proyectos para mostrar</li>
        
        @endforelse 

         

    </ul>
@endsection