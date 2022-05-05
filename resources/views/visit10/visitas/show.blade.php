@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>VISUALIZAR </h1> 
@stop

@section('content')


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="card shadow p-3 mb-6 bg- rounded" style="width: 25rem;  ">

                        <td><img src="data:image/png;base64,{{ $visitantes->img }}" class="rounded-circle  "
                            width="150" height="150">

                            <hr>
                            {{-- <strong>Id:</strong> {{ $visitantes->id}}</br> --}}
                            <strong>Nome:</strong> {{ $visitantes->nome }}</br>
                            <strong>Telefone:</strong> {{ $visitantes->telefone }}</br>
                            <strong>E-mail:</strong> {{ $visitantes->email }}</br>
                            <strong>CPF:</strong> {{ $visitantes->cpf }}</br>
                            <strong>RG:</strong> {{ $visitantes->rg }}</br>
                            <strong>Data Nascimento:</strong> {{ $visitantes->data_nascimento }}</br>
                            <strong>Endereço:</strong> {{ $visitantes->endereco }}</br>
                            {{-- <strong>Foto:</strong> </br> --}}
                            <br>
                        </div>
                        <br>
                        <div class="pull-right">
                            <a class="btn btn-primary" href="{{ route('visitantes.index') }}"> Retornar</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    @stop

    @section('css')
        <link rel="stylesheet" href="/css/admin_custom.css">
    @stop

    @section('js')
        <script> console.log('Hi!'); </script>
    @stop
