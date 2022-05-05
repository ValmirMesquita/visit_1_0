@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    {{-- <h1>Dashboard</h1> --}}
@stop

@section('content')

    <div class="py-12">

        <div class="p-6 bg-white border-b border-gray-200">

            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <form action="{{ route('orgaos.create', $orgao->id) }}" method="POST">
                @csrf
                @method('PUT')



                <h1>Editar Orgaos</h1>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">
                                <h1>
                            </th>
                            <th scope="col"></th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">

                            </th>
                            <td></td>

                        </tr>
                        <tr>
                            <th scope="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Nome:</strong>
                                        <input type="text" name="nome" value="{{ $orgao->nome }}" class="form-control"
                                            placeholder="Alterar nome">
                                    </div>
                            </th>
                            <td>
                                <div class="form-group">
                                    <strong>Telefone:</strong>
                                    <input type="text" name="telefone" value="{{ $orgao->telefone }}"
                                        class="form-control" placeholder="Alterar telefone">
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <th scope="row">
                                <div class="form-group">
                                    <strong>E-mail:</strong>
                                    <input type="text" name="email" value="{{ $orgao->email }}" class="form-control"
                                        placeholder="ALterar E-mail">
                                </div>
                            </th>
                            <td>
                                <div class="form-group">
                                    <strong>sigla:</strong>
                                    <input type="text" name="sigla" value="{{ $orgao->sigla }}" class="form-control"
                                        placeholder="Alterar Sigla">
                                </div>
                            </td>

                        </tr>

                        <tr>
                            <th scope="row">
                                <div class="form-group">
                                    <strong>Setor Lotação:</strong>
                                    <input type="text" name="setor_lotacao" value="{{ $orgao->setor_lotacao }}"
                                        class="form-control" placeholder="Alterar Setor Lotação">
                                </div>
                            </th>
                            <td>
                                <div class="form-group">
                                    <strong>Data nascimento:</strong>
                                    <input type="date" name="data_lotacao" value="{{ $orgao->data_lotacao }}"
                                        class="form-control" placeholder="Alterar Data Lotação">
                                </div>
                            </td>

                        </tr>

                        <tr>

                            </th>
                            <td></td>

                        </tr>

                        <tr>
                            <th scope="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 text-lifit">
                                    <button type="submit" class="btn btn-primary">Atualisar Orgão</button>

                                    <a class="btn btn-primary" href="{{ route('orgaos.index') }}">
                                        Retornar</a>

                                </div>
                            </th>
                            <td></td>

                        </tr>
                    </tbody>
                </table>


            </form>

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
