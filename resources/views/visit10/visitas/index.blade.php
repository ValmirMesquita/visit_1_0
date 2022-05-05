@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    {{-- <h1>Dashboard</h1> --}}
@stop

@section('content')
<br>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <br>
                    {{-- <h1>LISTA DE VISITAS</h1> --}}


                    <div class="row" style="margin-top: 0rem;">
                        <div class="col-lg-12 margin-tb">

                            <div class="pull-right">
                                <a class="btn btn-success" href="{{ route('visitantes.create') }}"> Cadastra</a>
                            </div>
                        </div>
                    </div>
                    <br>

                    <table class="table shadow p-5 mb-5  bg-white rounded">
                        <thead class="thead-dark">
                            <tr>
                                <th>Foto</th>
                                {{-- <th>Id</th> --}}
                                <th>Nome</th>
                                {{-- <th>CPF</th> --}}
                                {{-- <th>RG</th> --}}
                                <th>E-mail</th>
                                <th>Telefone</th>
                                {{-- <th>Data nascimento</th> --}}
                                {{-- <th>Endereco</th> --}}

                                <th width="280px">Evento</th>
                            </tr>

                            @foreach ($visitantes as $visitante)
                                <tr>
                                    <td><img src="data:image/png;base64,{{ $visitante->img }}" class="rounded-circle"
                                        width="70" height="70">
                                    {{-- <td>{{ $visitante->id }}</td> --}}
                                    <td>{{ $visitante->nome }}</td>
                                    {{-- <td>{{ $visitante->cpf }}</td> --}}
                                    {{-- <td>{{ $visitante->rg }}</td> --}}
                                    <td>{{ $visitante->email }}</td>
                                    <td>{{ $visitante->telefone }}</td>
                                    {{-- <td>{{ $visitante->data_nascimento }}</td> --}}
                                    {{-- <td>{{ $visitante->endereco }}</td> --}}

                                    </td>


                                    <td>
                                        <form action="{{ route('visitantes.destroy', $visitante->id) }}"
                                            method="POST">
                                            <a class="btn btn-info "
                                                href="{{ route('visitantes.show', $visitante->id) }}">Mostrar</a>

                                            <a class="btn btn-primary "
                                                href="{{ route('visitantes.edit', $visitante->id) }} ">Editar</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Excluir</button>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach


                    </table>
                    @if ($visitantes->lastPage() > 1)
                        <div class="card-foot clearfix">
                            {{ $visitantes->onEachSide(5)->links('pagination::bootstrap-4') }}
                        </div>
                    @endif

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
