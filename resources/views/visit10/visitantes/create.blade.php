@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    {{-- <h1>Dashboard</h1> --}}
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

                    <h1>CADASTRO DE VISITANTES</h1>


                    <form action="{{ route('visitantes.store') }}" method="POST" enctype="multipart/form-data" onsubmit="return confirm('Usuario cadastrado com sucesso')">
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
                                {{-- Linha de comando para chamada da web-cam --}}
                                {{-- <tr>
                <th scope="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 ">
                        <div class="form-group">
                            <strong>Web-cam:</strong><br>
                            <video id="video" height="300" width="300"></video>


                        </div>
                </th> --}}
                                {{-- Fim da Linha de comando para chamada da web-cam --}}

                                <tr>
                                    <th scope="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Nome:</strong>
                                                <input type="text" name="nome" class="form-control"placeholder="Inserir nome">

                                            </div>

                                    </th>
                                    <td>
                                        <div class="form-group">
                                            <strong>CPF:</strong>
                                            <input type="text" name="cpf" class="form-control"placeholder="Iserir CPF">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <strong>RG:</strong>
                                            <input type="text" name="rg" class="form-control"placeholder="Inserir RG">
                                        </div>
                                    </td>

                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="form-group">
                                            <strong>E-mail:</strong>
                                            <input type="text" name="email" class="form-control"placeholder="Inserir email">
                                        </div>
                                    </th>
                                    <td>
                                        <div class="form-group">
                                            <strong>Data nascimento:</strong>
                                            <input type="date" name="data_nascimento" class="form-control"placeholder="Inserir data de nascimento">
                                        </div>
                                        <td>
                                            <div class="form-group">
                                                <strong>Telefone:</strong>
                                                <input type="text" name="telefone" class="form-control"placeholder="Inserir telefone">
                                            </div>
                                        </td>
                                    </td>

                                <tr>

                                    <th scope="row">
                                        <div class="form-group">
                                            <strong>Endereco:</strong>
                                            <input type="text" name="endereco" class="form-control"placeholder="Inserir endereço">
                                        </div>
                                    </th>
                                    <td>
                                        <div class="form-group">
                                            <strong><label for="image">Foto:</label></strong>
                                            <input class="form-control" type="file" name="img"  placeholder="Inserir foto">

                                        </div>
                                    </td>
                                    <td></td>
                                    <td></td>

                                </tr>
                            </tbody>
                        </table>


                        <tr>
                            <th scope="col">
                                <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                                    <button type="submit" class="btn btn-primary">Cadastrar pessoas</button>
                                    <a class="btn btn-primary" href="{{ route('visitantes.index') }}"> Retornar</a>
                                </div>
                                <br>
                            </th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>


                        </tbody>
                        </table>


                </div>


                </form>

                {{-- <script>
    // ================== Linhas de comandos para ativação da web-cam ==================
    console.log('Hi!');

    navigator.mediaDevices.getUserMedia({
            video: true
        })
        .then(function(mediaStream) {
            var video = document.querySelector('#video');

            video.srcObject = mediaStream;
            video.play();
        })
        .catch(function(err) {
            console.log('Não há permissões para acessar a webcam')
        }) --}}

                {{-- // document.querySelector('#capture').addEventListener('click', function (e) {
    // var canvas = document.querySelector("#canvas");
    // canvas.height = video.videoHeight;
    // canvas.width = video.videoWidth;
    // var context = canvas.getContext('2d');
    // context.drawImage(video, 0, 0)
    // })
    // =================== Fim da linha do codigo da web - cam ==========================
</script> --}}

            </div>
        </div>

    @stop

    @section('css')
        <link rel="stylesheet" href="/css/admin_custom.css">
    @stop

    @section('js')
        <script> console.log('Hi!'); </script>
    @stop
