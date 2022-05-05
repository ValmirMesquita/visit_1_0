<?php

namespace App\Http\Controllers;

use App\Models\Orgaos;
use App\Models\Servidores;
use App\Models\Visitantes;
use App\Models\Visitas;
use Illuminate\Http\Request;

class VisitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $visitas = Visitas::paginate(4);
        return view('visit10.visitas.index', ['visitantes' => $visitas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $visitantes = Visitantes::all();
        $servidores = Servidores::all();
        $orgaos = Orgaos::all();

        $servidores = Servidores::all();
        return view('visit10.visitas.create ', ['visitantes' => $visitantes, 'servidores' => $servidores, 'orgaos' => $orgaos]);
    }

    /**
     * Armazene um recurso recém-criado no armazenamento.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

         // Campo de validação do fomulario de cadastro de visitantes
         $request->validate([
            'assunto' => 'required',
            'data_entrada' => 'required',
            'hora_entrada' => 'required',
            'data_saida' => 'required',
            'hora_saida' => 'required',
            'orgaos_id ' => 'required',
            'servidores_id' => 'required',
            'visitantes_id' => 'required'


        ]);

        //  dd($request->all());

        $visitas = new Visitas();

        $visitas->assunto = $request ->assunto ;
        $visitas->data_entrada =$request->data_entrada;
        $visitas->hora_entrada = $request ->hora_entrada;
        $visitas->data_saida =$request->data_saida;
        $visitas->hora_saida = $request ->hora_saida;
        $visitas->orgaos_id = $request ->orgaos_id;
        $visitas->servidores_id = $request ->servidores_id;
        $visitas->visitantes_id = $request ->visitantes_id;

        $visitas->save();
        return redirect('/visitas');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Visitas  $visitas
     * @return \Illuminate\Http\Response
     */
    public function show(Visitas $visitas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Visitas  $visitas
     * @return \Illuminate\Http\Response
     */
    public function edit(Visitas $visitas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Visitas  $visitas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Visitas $visitas)
    {
        //
        echo "Pagina de Teste de Visitas";
        $visitas = Visitas::paginate(4);
        return view('visit10.visitantes.index', ['visitantes' => $visitas]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Visitas  $visitas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Visitas $visitas)
    {
        //
    }
}