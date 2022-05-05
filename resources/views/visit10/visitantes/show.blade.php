@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    {{-- <h1>Dashboard</h1> --}}
@stop

@section('content')
<br>

    <div class="py-12">

                <div class="p-6 bg-grey border-b border-gray-200">

                    <div class="card shadow p-5 mb-6 bg- rounded" style="width: 25rem;  ">

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
                            <div class="pull-right">
                                <a class="btn btn-primary" href="{{ route('visitantes.index') }}"> Retornar</a>
                            </div>
                        </div>
                        <br>

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
