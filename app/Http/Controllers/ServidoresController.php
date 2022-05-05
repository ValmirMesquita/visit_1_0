<?php

namespace App\Http\Controllers;

use App\Models\Servidores;
use Illuminate\Http\Request;


class ServidoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $servidores = Servidores::paginate(4);
        return view('visit10.servidores.index', ['servidores' => $servidores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('visit10.servidores.create');
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

        $request->validate([
            'nome' => 'required',
            'email' => 'required',
            'telefone' => 'required',
            'img' => 'required',


        ]);


        $servidores = new Servidores();

        // $servidores->id = $request->id;
        $servidores->nome = $request->nome;
        $servidores->email = $request->email;
        $servidores->telefone = $request->telefone;
        // $servidores->img = $request->img;

        if ($request->hasFile('img')) {
            $temp = file_get_contents($request->file('img'));
            $binary = base64_encode($temp);
            $servidores->img = $binary;


        }
        $servidores->save();
            return redirect('/servidores');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Servidores  $servidores
     * @return \Illuminate\Http\Response
     */
    public function show(Servidores $servidore)
    {
        //
        return view('visit10.servidores.show', ['servidores' => $servidore]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Servidores  $servidores
     * @return \Illuminate\Http\Response
     */
    public function edit(Servidores $servidore)
    {
        //
        return view('visit10.servidores.edit', compact('servidore'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Servidores  $servidores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Servidores $servidore)
    {
        //
        $request->validate([
            'nome' => 'required',
            'email' => 'required',
            'telefone' => 'required',
            'img' => 'required',

        ]);

        $servidore->update($request->all());
        return redirect()->route('servidores.index')
            ->with('success', 'Atualizada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Servidores  $servidores
     * @return \Illuminate\Http\Response
     */
    public function destroy(Servidores $servidore)
    {
        //
        $servidore->delete();

        return redirect()->route('servidores.index')
            ->with('success', 'Excluído com sucesso');
    }
}
