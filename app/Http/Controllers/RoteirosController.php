<?php

namespace App\Http\Controllers;

use App\Models\Roteiros;
use Illuminate\Http\Request;

class RoteirosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roteiros = Roteiros::orderBy('destino', 'tipo')->get();
        return view('dashboard', ['roteiros' => $roteiros]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $roteiros = new Roteiros;
        $roteiros->destino = $request->destino;
        $roteiros->estadia = $request->estadia;
        $roteiros->dinheiro = $request->dinheiro;
        $roteiros->tipo = $request->tipo;
        $roteiros->descricao = $request->descricao;
        $roteiros->save();
        return redirect('dashboard');
    }

    /**
     * Display the specified resource.
     */

    public function read(Roteiros $roteiros)
    {
        $user = auth()->user()->id;
        //Carrega as despesas na variável
        //Select where
        $roteiros = Roteiros::where('destino','estadia','dinheiro','tipo','descricao')->where('user_id', $user)->get();

        $totroteiros = Roteiros::where('destino','estadia','dinheiro','tipo','descricao')->where('user_id', $user)->sum('valor');
        
        //carrega a VIEW passando os dados consultados
        $dados = [
            'roteiros' => $roteiros, 
            'totroteiros' => $totroteiros,
        ];
        return view('roteiros', $dados);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Roteiros $roteiros)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Roteiros $roteiros)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Roteiros $roteiros)
    {
        //
    }
}
