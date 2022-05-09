<?php

namespace App\Http\Controllers;

use App\Models\Visitantes;

use Illuminate\Http\Request;

class VisitantesController extends Controller
{
    /**
     * Exiba uma listagem do recurso.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $visitante = Visitantes::paginate(4);
        return view('visit10.visitantes.index', ['visitantes' => $visitante]);
    }

    /**
     * Mostre o formulário para criar um novo recurso.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Retorna os dados programados pra view "visit10.visitantes.create"
        return view('visit10.visitantes.create');
    }

    /**
     * Armazene um recurso recém-criado no armazenamento.
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
            'cpf' => 'required',
            'rg' => 'required',
            'email' => 'required',
            'telefone' => 'required',
            'img' => 'required',
            'data_nascimento' => 'required',
            'endereco' => 'required'

        ]);

        //
        $visitante = new Visitantes();

        $visitante->id = $request->id;
        $visitante->nome = $request->nome;
        $visitante->cpf = $request->cpf;
        $visitante->rg = $request->rg;
        $visitante->email = $request->email;
        $visitante->telefone = $request->telefone;
        $visitante->data_nascimento = $request->data_nascimento;
        $visitante->endereco = $request->endereco;
        // $visitante->img = $request->img;

        //Tratamento do Upload da imagem salvando no banco de dados
        if ($request->hasFile('img')) {
            $temp = file_get_contents($request->file('img'));
            $binary = base64_encode($temp);
            $visitante->img = $binary;

            // Comando para armazenamento de imagem na pasta determinada.
            // $img = $request->file('img');
            // $extensao = md5('id') . '.' . $img->getClientOriginalExtension();
            // $request->file('img')->move(public_path('imagemUpload/'), $extensao);
        }

        $visitante->save();
        return redirect('/visitantes');
    }

    /**
     * Exiba o recurso especificado.
     *
     * @param  \App\Models\Visitantes  $visitantes
     * @return \Illuminate\Http\Response
     */
    public function show(Visitantes $visitante)
    {
        //
        return view('visit10.visitantes.show', ['visitantes' => $visitante]);
    }

    /**
     * Mostre o formulário para editar o recurso especificado.
     *
     * @param  \App\Models\Visitantes  $visitantes
     * @return \Illuminate\Http\Response
     */
    public function edit(Visitantes $visitante)
    {
        //
        return view('visit10.visitantes.edit', compact('visitante'));
    }

    /**
     * Atualize o recurso especificado no armazenamento.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Visitantes  $visitantes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Visitantes $visitante )
    {
        //
        // Linha de validação dos capos do formulario
        // dd($visitante->all());

        $request->validate([
            'nome' => 'required',
            'cpf' => 'required',
            'rg' => 'required',
            'email' => 'required',
            'telefone' => 'required',
            'img' => 'required',
            'data_nascimento' => 'required',
            'endereco' => 'required'

        ]);




        $visitante->update($request->all());
        return redirect()->route('visitantes.index')
            ->with('success', 'Atualizada com sucesso');
    }



    /**
     * Remova o recurso especificado do armazenamento.
     *
     * @param  \App\Models\Visitantes  $visitantes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Visitantes $visitante)
    {
        //

        $visitante->delete();

        return redirect()->route('visitantes.index')
            ->with('success', 'Excluído com sucesso');
    }
}
