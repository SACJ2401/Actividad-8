Formulario de creacion de superheroes

<form action="{{url('/superHeroesInfo')}}" method="post" enctype="multipart/form-data">  
@csrf
@include('superHeroesInfo.form',['modo'=>'Crear']);
</form>