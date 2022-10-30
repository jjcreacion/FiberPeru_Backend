<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Epps;

class EppsController extends Controller
{
    public function getEpps(){
        return response()->json(Epps::all(),200);
    }

    public function getEppsId($id){
        $Epps = Epps::find($id);
        if(is_null($Epps)){
            return response()->json(['mensaje'=>'registro no encontrado'],404); 
        }
        return response()->json(Epps::find($id),200);
    }

    public function insertEpps(Request $request){
        $Epps = Epps::create($request->all());
        return response($Epps,200);
    }

    public function updateEpps(Request $request,$id){
        $Epps = Epps::find($id);
        if(is_null($Epps)){
            return response()->json(['mensaje'=>'registro no encontrado'],404); 
        }
        $Epps->update($request->all());
        return response($Epps,200);
    }

    public function deleteEpps($id){
        $Epps = Epps::find($id);
        if(is_null($Epps)){
            return response()->json(['mensaje'=>'registro no encontrado'],404); 
        }
        $Epps->delete();
        return response()->json(['mensaje'=>'registro eliminado'],200);
    }

}
