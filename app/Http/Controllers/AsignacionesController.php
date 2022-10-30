<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asignaciones;
use App\Models\Epps;

class AsignacionesController extends Controller
{
    public function getAsignaciones(){
        return response()->json(Asignaciones::all(),200);
    }

    public function getAsignacionesId($id){
        $asignaciones = Asignaciones::find($id);
        if(is_null($asignaciones)){
            return response()->json(['mensaje'=>'registro no encontrado'],404); 
        }
        return response()->json(Asignaciones::find($id),200);
    }

    public function insertAsignaciones(Request $request){
        $asignaciones = Asignaciones::create($request->all());
       
        $cantidad = $request->cantidad;
        $epps = Epps::find($request->id_epps);
        $epps->update(['cantidad' => $epps->cantidad - $cantidad]);
       
        return response($asignaciones,200);
       
    }

    public function updateAsignaciones(Request $request,$id){
        $asignaciones = Asignaciones::find($id);
        if(is_null($asignaciones)){
            return response()->json(['mensaje'=>'registro no encontrado'],404); 
        }
        $asignaciones->update($request->all());
        return response($asignaciones,200);
    }

    public function deleteAsignaciones($id){
        $asignaciones = Asignaciones::find($id);
        if(is_null($asignaciones)){
            return response()->json(['mensaje'=>'registro no encontrado'],404); 
        }
        $asignaciones->delete();
        return response()->json(['mensaje'=>'registro eliminado'],200);
    }
}
