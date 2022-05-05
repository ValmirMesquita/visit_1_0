<?php

namespace App\Http\Controllers;

use App\Models\Orgaos;
use Illuminate\Http\Request;

class OrgaosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $orgaos = Orgaos::paginate(4);
        return view('visit10.orgaos.index', ['orgaos' => $orgaos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('visit10.orgaos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // Campo de validação do fomulario de cadastro de visitantes
        $request->validate([

            'nome' => 'required',
            'sigla' => 'required',
            'email' => 'required',
            'telefone' => 'required',
            'setor_lotacao' => 'required',
            'data_lotacao' => 'required',


        ]);

        $orgaos = new Orgaos();

        // $orgaos->id = $request->id;
        $orgaos->nome = $request->nome;
        $orgaos->sigla = $request->sigla;
        $orgaos->email = $request->email;
        $orgaos->telefone = $request->telefone;
        $orgaos->setor_lotacao = $request->setor_lotacao;
        $orgaos->data_lotacao = $request->data_lotacao;

        $orgaos->save();
        return redirect('/orgaos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Orgaos  $orgaos
     * @return \Illuminate\Http\Response
     */
    public function show(Orgaos $orgao)
    {
        //
        return view('visit10.orgaos.show', ['orgaos' => $orgao]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Orgaos  $orgaos
     * @return \Illuminate\Http\Response
     */
    public function edit(Orgaos $orgao)
    {
        //

        return view('visit10.orgaos.edit', compact('orgao'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Orgaos  $orgaos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Orgaos $orgaos)
    {
        //
        // dd($request);
        $request->validate([

            'nome' => 'required',
            'sigla' => 'required',
            'email' => 'required',
            'telefone' => 'required',
            'setor_lotacao' => 'required',
            'data_lotacao' => 'required',

        ]);

        $orgaos->update($request->all());

        return redirect()->route('orgaos.index')
            ->with('success', 'Atualizada com sucesso');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Orgaos  $orgaos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Orgaos $orgao)
    {
        //
        $orgao->delete();

        return redirect()->route('orgaos.index')
            ->with('success', 'Excluído com sucesso');
    }
}
