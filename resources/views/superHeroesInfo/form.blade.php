<h1>{{ $modo }} superHeroe</h1>

<label for="ApellidoReal"> ApellidoReal</label>
<input type="text" name="ApellidoReal" value="{{isset($superHeroe->ApellidoReal)?$superHeroe->ApellidoReal:''}}" id="ApellidoReal">
<br>

<label for="NombreReal"> NombreReal</label>
<input type="text" name="NombreReal" value="{{isset($superHeroe->NombreReal)?$superHeroe->NombreReal:''}}" id="NombreReal">
<br>

<label for="NombreHeroe"> NombreHeroe</label>
<input type="text" name="NombreHeroe" value="{{isset($superHeroe->NombreHeroe)?$superHeroe->NombreHeroe:''}}" id="NombreHeroe">
<br>
<label for="Foto"> Foto</label>
@if(isset($superHeroe->Foto))
<img src="{{asset('storage').'/'.$superHeroe->Foto }}" width="100" alt="">
@endif
<input type="file" name="Foto" value="" id="Foto">
<br>
<label for="InfoAdicional"> InfoAdicional</label>
<input type="text" name="InfoAdicional" value="{{isset($superHeroe->InfoAdicional)?$superHeroe->InfoAdicional:''}}" id="InfoAdicional">
<br>
<input type="submit" value="{{ $modo }} datos" >
<a href="{{url ('superHeroesInfo/') }}"> Regresar </a>
<br>