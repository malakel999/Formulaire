<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Etudiant;
use Illuminate\Support\Facades\Validator;


class EtudiantController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'cne' => 'required|string|max:10',
            'etablissement' => 'required|string',
            'universite' => 'required|string',
            'email' => 'required|email|regex:/^.+@etu\.uae\.ac\.ma$/|unique:etudiants,email',
            'formation' => 'required|string',
            'description' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $etudiant = Etudiant::create($request->all());

        return response()->json($etudiant, 201);
    }
}
