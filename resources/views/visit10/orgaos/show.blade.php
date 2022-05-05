@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')
<br>
{{-- <h1>Dashboard</h1> --}}
    <div class="py-12">

        <div class="p-6 bg-grey border-b border-gray-200">

            <div class="card shadow p-5 mb-6 bg- rounded" style="width: 25rem;  ">

                {{-- <strong>Nome:</strong> --}}
                <h2>{{ $orgaos->nome }}</h2></br>
                <strong>Sigla:</strong> {{ $orgaos->sigla }}</br>
                <strong>E-mail:</strong> {{ $orgaos->email }}</br>
                <strong>Telefone:</strong> {{ $orgaos->telefone }}</br>
                <strong>Setor lotação:</strong> {{ $orgaos->setor_lotacao }}</br>
                <strong>Data lotação:</strong> {{ $orgaos->data_lotacao }}</br>

                <br>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('orgaos.index') }}"> Retornar</a>
                </div>
            </div>
            <br>

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
    <script>
        console.log('Hi!');
    </script>
@stop
