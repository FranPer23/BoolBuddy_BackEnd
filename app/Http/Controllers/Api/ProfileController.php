<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\Vote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        DB::statement("SET SQL_MODE=''");
        $query = Profile::with(['technology', 'votes', 'reviews']);
        // $avgTable = DB::table('votes')->groupBy('profile_id')->selectRaw('profile_id, avg(vote)')->get();

        if ($request->has('technology_id')) {
            $query->whereHas('technology', function ($q) use ($request) {
                $q->whereIn('id', [$request->technology_id]);
            });
        }

        if ($request->has('averageVote')) {
            $query->whereHas('votes', function ($q) use ($request) {
                $q->groupBy('profile_id')->havingRaw('AVG(vote) >= ?', [$request->averageVote]);
            });
        }


        // if ($request->has('averageVote')) {
        //     $query->whereHas('votes', function ($q) use ($request) {
        //         $q->whereIn('vote', [$request->averageVote]);
        //     });
        // }

        $profiles = $query->paginate(200);

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
