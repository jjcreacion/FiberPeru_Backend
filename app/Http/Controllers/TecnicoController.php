<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Tecnico;

class TecnicoController extends Controller
{
    public function getTecnicos(){
        return response()->json(Tecnico::all(),200);
    }

    public function getTecnicosId($id){
        $tecnico = Tecnico::find($id);
        if(is_null($tecnico)){
            return response()->json(['mensaje'=>'registro no encontrado'],404); 
        }
        return response()->json(Tecnico::find($id),200);
    }

    public function insertTecnicos(Request $request){
        $tecnico = Tecnico::create($request->all());
        return response($tecnico,200);
    }

    public function updateTecnicos(Request $request,$id){
        $tecnico = Tecnico::find($id);
        if(is_null($tecnico)){
            return response()->json(['mensaje'=>'registro no encontrado'],404); 
        }
        $tecnico->update($request->all());
        return response($tecnico,200);
    }

    public function deleteTecnicos($id){
        $tecnico = Tecnico::find($id);
        if(is_null($tecnico)){
            return response()->json(['mensaje'=>'registro no encontrado'],404); 
        }
        $tecnico->delete();
        return response()->json(['mensaje'=>'registro eliminado'],200);
    }
}
