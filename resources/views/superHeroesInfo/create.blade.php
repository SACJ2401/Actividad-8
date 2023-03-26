@extends('layouts.app')
@section('content')
<div class="container">

<form action="{{url('/superHeroesInfo')}}" method="post" enctype="multipart/form-data">  
@csrf
@include('superHeroesInfo.form',['modo'=>'Crear']);
</form>
</div>
@endsection