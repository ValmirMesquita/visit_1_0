@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    {{-- <h1>Dashboard</h1> --}}
@stop

@section('content')
<br>

    <div class="py-12">

                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="card shadow p-5 mb-6 bg- rounded" style="width: 25rem;  ">


                        <td><img src="data:image/png;base64,{{ $servidores->img }}" class="rounded-circle  "
                            width="150" height="150">

                            <hr>
                            {{-- <strong>Id:</strong> {{ $visitantes->id}}</br> --}}
                            <strong>Nome:</strong> {{ $servidores->nome }}</br>
                            <strong>Telefone:</strong> {{ $servidores->telefone }}</br>
                            <strong>E-mail:</strong> {{ $servidores->email }}</br>


                            {{-- <strong>Foto:</strong> </br> --}}
                            <br>
                            <div class="pull-right">
                                <a class="btn btn-primary" href="{{ route('servidores.index') }}"> Retornar</a>
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
