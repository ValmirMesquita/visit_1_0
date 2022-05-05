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
            <form action="{{ route('servidores.update', $servidore->id) }}" method="POST">
                @csrf
                @method('PUT')



                <h1>Editar Cadastro</h1>
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
                                <div class="form-group">
                                    <strong></strong>

                                    <img src="data:image/png;base64,{{ $servidore->img }}" width="120"
                                        class="rounded-circle" height="120"><br>
                                    <input type="file" name="img" value="{{ $servidore->img }}" class="form-control"
                                        placeholder="Alterar foto">

                                </div>
                            </th>
                            <td></td>

                        </tr>
                        <tr>
                            <th scope="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Nome:</strong>
                                        <input type="text" name="nome" value="{{ $servidore->nome }}"
                                            class="form-control" placeholder="Alterar nome">
                                    </div>
                            </th>
                            <td>
                                <div class="form-group">
                                    <strong>Telefone:</strong>
                                    <input type="text" name="telefone" value="{{ $servidore->telefone }}"
                                        class="form-control" placeholder="Alterar telefone">
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <th scope="row">
                                <div class="form-group">
                                    <strong>E-mail:</strong>
                                    <input type="text" name="email" value="{{ $servidore->email }}" class="form-control"
                                        placeholder="ALterar E-mail">
                                </div>
                            </th>


                        </tr>


                       

                        <tr>
                            <th scope="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 text-lifit">
                                    <button type="submit" class="btn btn-primary">Atualisar cadastro</button>

                                    <a class="btn btn-primary" href="{{ route('servidores.index') }}">
                                        Retornar</a>

                                </div>
                            </th>

                        </tr>
                    </tbody>
                </table>


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
