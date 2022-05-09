@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')


    <div class="py-12">

        <div class="p-6 bg-grey border-b border-gray-200">

            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <br>
            {{-- <h1>LISTA DE VISITANTES</h1> --}}

            <div class="row" style="margin-top: 0rem;">
                <div class="col-lg-12 margin-tb">

                    <div class="pull-right">
                        <a class="btn btn-success" href="{{ route('visitantes.create') }}"> Cadastro de
                            visistante</a>
                    </div><br>
                </div>
            </div>

            <table class="table shadow p-5 mb-5   bg-white rounded">
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
                            <td><img src="data:image/png;base64,{{ $visitante->img }}" class="rounded-circle" width="70"
                                    height="70">
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
                                <form action="{{ route('visitantes.destroy', $visitante->id) }}" method="POST"
                                    onsubmit="return confirm('Tem certeza de que deseja remover esta tabela')">
                                    <a class="btn btn-info " href="{{ route('visitantes.show', $visitante->id) }}"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                            class="bi bi-search" viewBox="0 0 16 16">
                                            <path
                                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                        </svg></a>

                                    <a class="btn btn-primary "
                                        href="{{ route('visitantes.edit', $visitante->id) }} "><svg
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                            class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path
                                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                            <path fill-rule="evenodd"
                                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                        </svg></a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger  "><i class="bi bi-trash3"></i><svg
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                            class="bi bi-trash3" viewBox="0 0 16 16">
                                            <path
                                                d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                        </svg></button>

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

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
