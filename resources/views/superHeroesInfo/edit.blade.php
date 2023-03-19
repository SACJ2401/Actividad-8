Formulario de edicion de superheroes
<form action="{{url('/superHeroesInfo/'.$superHeroe->id)}}" " method="post" enctype="multipart/form-data">
@csrf
{{method_field('PATCH')}}

@include('superHeroesInfo.form',['modo'=>'Editar']);
</form>
