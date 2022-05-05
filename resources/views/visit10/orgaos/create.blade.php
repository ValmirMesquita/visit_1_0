@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Cadastro de orgãos</h1>
@stop

@section('content')


    <div class="py-12">

        <div class="p-6 bg-white border-b border-gray-200">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Opa!</strong> Houve alguns problemas com sua entrada.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif




            <form action="{{ route('orgaos.store') }}" method="POST" enctype="multipart/form-data"
                onsubmit="return confirm('Usuario cadastrado com sucesso')">
                @csrf

                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">

                            </th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <th scope="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Nome do Orgão:</strong>
                                        <input type="text" name="nome" class="form-control" placeholder="Inserir Nome">

                                    </div>

                            </th>
                            <td>
                                <div class="form-group">
                                    <strong>Sigla do Orgão:</strong>
                                    <input type="text" name="sigla" class="form-control" placeholder="Iserir Sigla">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <strong>Email do Orgão:</strong>
                                    <input type="text" name="email" class="form-control" placeholder="Inserir E-mail">
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <th scope="row">
                                <div class="form-group">
                                    <strong>Telefone do Orgão:</strong>
                                    <input type="text" name="telefone" class="form-control"
                                        placeholder="Inserir Telefone">
                                </div>
                            </th>
                            <td>
                                <div class="form-group">
                                    <strong>Setor lotação:</strong>
                                    <input type="texte" name="setor_lotacao" class="form-control"
                                        placeholder="Setor Lotação">
                                </div>
                            <td>
                                <div class="form-group">
                                    <strong>Data Lotação:</strong>
                                    <input type="date" name="data_lotacao" class="form-control"
                                        placeholder="Inserir Data lotação">
                                </div>
                            </td>
                            </td>

                        <tr>


                            <td>

                            </td>
                            <td></td>
                            <td></td>

                        </tr>
                    </tbody>
                </table>


                <tr>
                    <th scope="col">
                        <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                            <button type="submit" class="btn btn-primary">Cadastrar orgaos</button>
                            <a class="btn btn-primary" href="{{ route('orgaos.index') }}"> Retornar</a>
                        </div>
                    </th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>

                </tbody>
                </table>

        </div>

        </form>


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
