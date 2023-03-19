<?php

namespace App\Http\Controllers;

use App\Models\SuperHeroe;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
class SuperHeroeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos['heroes']=SuperHeroe::paginate(5);
        return view('superHeroesInfo.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view ('superHeroesInfo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //$datosSuperHeroesInfo = request()->all();
        $datosSuperHeroesInfo = request()->except('_token'); /*Recolecta todos los datos que vengan 
                                                              del formulario excepto "_token"*/
        SuperHeroe::insert($datosSuperHeroesInfo); /*En el modelo SuperHeroe inserta la informacion
                                                     en la base de datos*/
        if($request-> hasFile('Foto')){ //Si existe una fotografia...
            $datosSuperHeroesInfo['Foto']=$request->file('Foto')->store('uploads','public');
        }

        SuperHeroe::insert($datosSuperHeroesInfo);
        //return response()->json($datosSuperHeroesInfo); 
        return redirect('superHeroesInfo')->with('mensaje','SuperHeroe agregado con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(SuperHeroe $superHeroe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $superHeroe=SuperHeroe::findOrFail($id);
        return view('superHeroesInfo.edit', compact('superHeroe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $datosSuperHeroesInfo = request()->except(['_token','_method']);
        
        if($request-> hasFile('Foto')){ //Si existe una fotografia...
            $superHeroe=SuperHeroe::findOrFail($id); 
            Storage::delete('public/'.$superHeroe->Foto);
            $datosSuperHeroesInfo['Foto']=$request->file('Foto')->store('uploads','public');
        }

        SuperHeroe::where('id','=',$id)->update($datosSuperHeroesInfo);
        $superHeroe=SuperHeroe::findOrFail($id);
        return view('superHeroesInfo.edit', compact('superHeroe'));
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $superHeroe=SuperHeroe::findOrFail($id);
        if(Storage::delete('public/'.$superHeroe->Foto)){
            SuperHeroe::destroy($id);
        }
        
        return redirect('superHeroesInfo')->with('mensaje','SuperHeroe borrado');
    }
}
