@extends('layouts.app')
@section('content')
<div class="container">

<form action="{{url('/superHeroesInfo/'.$superHeroe->id)}}" " method="post" enctype="multipart/form-data">
@csrf
{{method_field('PATCH')}}

@include('superHeroesInfo.form',['modo'=>'Editar']);
</form>
</div>
@endsection
