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
                    <br>
                    {{-- <h1>CADASTRO DE VISITAS</h1> --}}

                    {{-- ------------------------------Inicio do formulario------------------------------------- --}}

                    <form action="{{ route('visitas.store') }}" method="POST" enctype="multipart/form-data">
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

                            {{-- Inicio Botão para Cadastro de Visitantes  --}}

                            {{-- <div class="row" style="margin-top: 0rem;">
                                <div class="col-lg-12 margin-tb">

                                    <div class="pull-right">
                                        <a class="btn btn-success" href="{{ route('visitantes.create') }}"> Cadastro
                                            de
                                            visistante</a>
                                    </div><br>
                                </div>
                            </div> --}}
                            {{-- Fim Botão para Cadastro de Visitantes  --}}
                            <tr>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                            <th scope="row"><strong>Visitantes:</strong>
                                <select name="pessoa_id" class="custom-select rounded-0">
                                    <option selected> Selecione o visitante </option>
                                    @foreach ($visitantes as $visita)
                                        <option value="{{ $visita->id }}"> {{ $visita->nome }} </option>
                                    @endforeach
                                </div>
                                </select> <br>
                                <a class="btn btn-info"  href="{{ route('visitantes.create') }}"><svg xmlns="http://www.w3.org/2000/svg" width="13"  height="16" fill="currentColor" class="bi bi-align-middle" viewBox="0 0 16 16">
                                    <path d="M6 13a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v10zM1 8a.5.5 0 0 0 .5.5H6v-1H1.5A.5.5 0 0 0 1 8zm14 0a.5.5 0 0 1-.5.5H10v-1h4.5a.5.5 0 0 1 .5.5z"/>
                                  </svg></a>
                            </th>

                            <th scope="row"><strong>Orgão Lotação:</strong>
                                <select name="orgaos_id" class="custom-select rounded-0" id="orgaos_id">
                                    <option selected> Selecione a orgão de origem</option>
                                    @foreach ($orgaos as $orgao)
                                        <option value="{{ $orgao->id }}"> {{ $orgao->nome}} </option>
                                    @endforeach
                                </select>
                            </th>

                            <td><strong>Servidores :</strong>
                                <select name="servidores_id" class="custom-select rounded-0">
                                    <option selected> Selecione um servidor</option>
                                    @foreach ($servidores as $servidor)
                                        <option value="{{ $servidor->id }}"> {{ $servidor->nome }} </option>
                                    @endforeach
                                </select>
                            </td>

                                <tr>
                                    <th scope="row">
                                        <div class="form-group">
                                            <strong>data da entrada:</strong>
                                            <input type="date" name="data_entrada" class="form-control"
                                                placeholder="">
                                        </div>

                                        <th scope="row">
                                            <div class="form-group">
                                                <strong>Hora entrada:</strong>
                                                <input type="time" name="hora_entrada" class="form-control"
                                                    placeholder="">
                                            </div>
                                            <td>
                                                <div class="form-group">
                                                    <strong>Asunto:</strong>
                                                    <input textarea type="text" name="assunto" class="form-control"
                                                        placeholder="Inserir nome">
                                                </div>
                                            </td>
                                    </th>

                                <tr>



                                        <tr>
                                            <th scope="row">
                                                <div class="form-group">
                                                    <strong>data da saida:</strong>
                                                    <input type="date" name="data_saida" class="form-control"
                                                        placeholder="">
                                                </div>
                                            <th scope="row">
                                                <div class="form-group">
                                                    <strong>Hora saida:</strong>
                                                    <input type="time" name="hora_saida" class="form-control"
                                                        placeholder="Inserir data de nascimento">
                                                </div>
                                            </th>

                                    </th>



                                </tr>


                                <tr>
                                    <th scope="row">
                                        <div class="form-group">
                                            <div class="col-xs-12 col-sm-12 col-md-12 text-lifit">
                                                <button type="submit" class="btn btn-primary">Enviar</button>
                                                <a class="btn btn-primary" href="{{ route('visitas.create') }}">
                                                    Retornar</a>
                                            </div>
                                    </th>

                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                </tr>

                        </table>


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
        </div>
    </div>
    @stop

    @section('css')
        <link rel="stylesheet" href="/css/admin_custom.css">
    @stop

    @section('js')
        <script> console.log('Hi!'); </script>
    @stop
