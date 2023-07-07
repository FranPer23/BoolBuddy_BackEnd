<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        $profiles = Profile::with(['technology'])->paginate(10);

        return response()->json([
            'success' => true, // non è obbligatorio, mi serve solo per dire che la chiamata è avvenuta con successo
            'results' => $profiles
        ]);
    }

    public function show($id)
    {
        //metto first perchè non voglio tutti gli elementi, ma solo il primo
        $profile = Profile::with('technology')->where('id', $id)->first();


        // se il progetto esiste mi da success true altrimenti mi restituisce false 
        if ($profile) {
            return response()->json([
                'success' => true,
                'results' => $profile
            ]);
        } else {
            return response()->json([
                'success' => false,
                'error' => 'Nessun profilo trovato'
            ])->setStatusCode(404); //mi restituisce errore 404 perchè la pagina non è stata trovata
        }
    }
}
