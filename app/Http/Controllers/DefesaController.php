<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DefesaRequest;
use App\Models\Defesa;

class DefesaController extends Controller
{
    public function index(DefesaRequest $request){
        return view('defesas.index',[
            'defesas' => Defesa::listar($request->validated()),
        ]);
    }
}
