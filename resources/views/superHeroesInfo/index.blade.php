@extends('layouts.app')
@section('content')
<div class="container">

@if(Session::has('mensaje'))
{{ Session::get('mensaje') }}

@endif

<a href="{{ url('superHeroesInfo/create') }}"> Registrar nuevo super heroe</a>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>ApellidoReal</th>
            <th>NombreReal</th>
            <th>NombreHeroe</th>
            <th>InfoAdicional</th>
            <th>Acciones</th>
        </tr>
    </thead>


    <tbody>
        @foreach( $heroes as $superHeroe)
        <tr>
            <td>{{ $superHeroe->id }}</td>

            <td>
            <img src="{{asset('storage').'/'.$superHeroe->Foto}}" width="100" alt="">
            </td>
            

            <td>{{ $superHeroe->NombreReal }}</td>
            <td>{{ $superHeroe->ApellidoReal }}</td>
            <td>{{ $superHeroe->NombreHeroe }}</td>
            <td>{{ $superHeroe->InfoAdicional }}</td>
            <td>
                <a href="{{url('/superHeroesInfo/'.$superHeroe->id.'/edit') }}">
                Editar|
                </a>
            <form action="{{url('/superHeroesInfo/'.$superHeroe->id)}}" method="post">  
                @csrf
            {{method_field('DELETE')}}
            <input type="submit" onclick="return confirm('Quieres borrar?')" value="Borrar">
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection