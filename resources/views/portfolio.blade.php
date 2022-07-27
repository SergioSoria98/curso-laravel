
@extends('layout')

@section('title', 'Portafolio')

@section('content')
    <h1>Portafolio</h1>


    <ul>

        @forelse ($projects as $project)
             <li>{{ $project->title }}</li>
        @empty

        <li>No hay proyectos para mostrar</li>
        
        @endforelse 

        {{ $projects->links() }}

         

    </ul>
@endsection