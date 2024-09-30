<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Admin\Project;
use App\Models\Admin\Technology;
use App\Models\Admin\Type;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        
        //  query di tutti i progetti con associati il tipo e le tecnologie
        $projects = Project::orderBy('id', 'desc')->with('type', 'technologies')->paginate(10);
        
        // condizione per verificare che la chiamata esista o no
        if($projects){
            // se la chiamata va a buon fine, diamo un true e i dati vengono ricevuti
            $success = true;
        } else {
            // se la chiamata non avviene correttamente, passiamo solo un success false
            $success = false;
        }

        return response()->json(compact('success', 'projects'));

    }

    public function technologies(){

        // query di tutte le tecnologie
        $techs = Technology::orderBy('id')->get();

         // condizione per verificare che la chiamata esista o no
         if($techs){
            // se la chiamata va a buon fine, diamo un true e i dati vengono ricevuti
            $success = true;
         } else {
            // se la chiamata non avviene correttamente, passiamo solo un success false
            $success = false;
        }

        return response()->json(compact('success', 'techs'));
    }

    public function types(){

        // query di tutti i tipi
        $types = Type::orderBy('id')->get();

        // condizione per verificare che la chiamata esista o no
        if($types){
            // se la chiamata va a buon fine, diamo un true e i dati vengono ricevuti
            $success = true;
         } else {
            // se la chiamata non avviene correttamente, passiamo solo un success false
            $success = false;
        }

        return response()->json(compact('success', 'types'));
    }
}
