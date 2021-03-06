<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\CorsoScii;
use App\Models\Tipo;
use App\Models\Iscrizione;

class ApiController extends Controller
{
    /**api call for admin operations */
    //crea tipo per i corsi scii
    public function createtipo(Request $request){
        
        $tipo = new Tipo();

        $tipo->difficolta = $request->input('difficolta');
        $tipo->descrizione = $request->input('descrizione');

        $tipo->save();
        return response()->json($tipo);
    }

    public function createcorso(Request $request){

        $corsoscii = new CorsoScii();

        $corsoscii->tipo = $request->input('tipo');
        $corsoscii->nome = $request->input('nome');
        $corsoscii->membriMax = $request->input('membriMax');
        $corsoscii->inizio = $request->input('inizio');
        $corsoscii->fine = $request->input('fine');

        $corsoscii->save();
        return response()->json($corsoscii);

    }

    public function updatecorso(Request $request, $idCorso){

        $corsoscii = CorsoScii::where('idCorso', $idCorso)->first();

        $corsoscii->tipo = $request->input('tipo');
        $corsoscii->nome = $request->input('nome');
        $corsoscii->membriMax = $request->input('membriMax');
        $corsoscii->inizio = $request->input('inizio');
        $corsoscii->fine = $request->input('fine');

        $corsoscii->save();
        return response()->json($corsoscii);
    }

    public function deletecorso(Request $request, $idCorso){

        $corsoscii = CorsoScii::where('idCorso', $idCorso)->first();
        $corsoscii->delete();

        return response()->json($corsoscii);
        
        /*if(response()->status() == 200){
            return response()->json($corsoscii);
        }
        else{
            return redirect('/admin')->with('error', 'Errore nel database, il corso sciistico da cancellare non è presente nel database.');
        }*/

    }

    public function mostracorsi(){

        $corsoscii = DB::table('corsoscii')->get();

        return response()->json($corsoscii);
    }

    public function mostracorso($idCorso){

        $corsoscii = CorsoScii::where('idCorso', $idCorso)->first();

        return response()->json($corsoscii);
    }

    public function iscrizione(Request $request){
        
        $iscrizione = new Iscrizione();

        $iscrizione->idCorso = $request->input('idCorso');
        $iscrizione->idUtente = $request->input('idUtente');

        $iscrizione->save();
        return response()->json($iscrizione);

    }

    public function vedicorso($idCorso){

        $iscrizione_scii = Iscrizione::where('idCorso', $idCorso)->get();

        return response()->json($iscrizione_scii);
    }

    public function deleteiscrizione($idUtente){

        $iscrizione_scii = Iscrizione::where('idUtente', $idUtente)->first();
        $iscrizione_scii->delete();

        return response()->json($iscrizione_scii);

    }
}
