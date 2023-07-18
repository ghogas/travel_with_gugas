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
        // $roteiros = Roteiros::orderBy('destino', 'estadia','dinheiro','tipo','descricao')->get();
        // return view('dashboard', ['roteiros' => $roteiros]);
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
        $roteiros->user_id = auth()->user()->id;
        $roteiros->save();
        return redirect('dashboard');
    }

    /**
     * Display the specified resource.
     */

    public function read(Roteiros $roteiros)
    {
        // $user = auth()->user()->id;
        // //Carrega os roteiros na variável
        // //Select where
        // $roteiros = Roteiros::where('destino', 'estadia', 'dinheiro', 'tipo', 'descricao' )->where('id', $user)->get();

        // $totRoteiros = Roteiros::where('destino', 'estadia', 'dinheiro', 'tipo', 'descricao')->where('id', $user)->sum('dinheiro');

        // //carrega a VIEW passando os dados consultados
        // $dados = [
        //     'roteiros' => $roteiros,
        //     'totRoteiros' => $totRoteiros
        // ];
        // return view('roteiros', $dados);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        // Roteiros::findOrFail($id)->delete();
        // return redirect('/roteiros');
    }

    public function getRoteiros()
    {
        $user = auth()->user();
        $roteiros = Roteiros::where(`destino`, `estadia`, `dinheiro`, `tipo`, `descricao`)->where('user_id', $user->id)->get();

        $parametros = [
            'roteiros' => $roteiros,
        ];
        return view('roteiros', $parametros);
    }

}
