@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    {{-- <h1>Seja bem vindo ao Visit 1.0  </h1> --}}
@stop

@section('content')

    {{-- <p>Bem-vindo a este belo painel de administração.</p> --}}
    <br>


    <div class="py-12">

                <div class="p-6 border-b border-gray-200">
                    {{-- Você esta logado! --}}
                    <div class="row">
                        <div class="col-lg-3 col-6">

                        <div class="small-box bg-info">
                        <div class="inner">
                        <h3>{{$visitas}}<sup style="font-size: 40px"></h3>
                        <p>Registros de visitas</p>
                        </div>
                        <div class="icon">
                        <i class="ion fas fa-users"></i>
                        </div>
                        <a href="{{ route('visitas.index') }}" class="small-box-footer">Mais informações <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                        </div>

                        <div class="col-lg-3 col-6">

                        <div class="small-box bg-success">
                        <div class="inner">
                        <h3>{{$orgaos}}<sup style="font-size: 40px"></sup></h3>
                        <p>Orgãos cadastrados</p>
                        </div>
                        <div class="icon">
                        <i class="ion ion-person-add fas fa-users "></i>
                        </div>
                        <a href="{{ route('orgaos.index') }}" class="small-box-footer">Mais informações <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                        </div>

                        <div class="col-lg-3 col-6">

                        <div class="small-box bg-warning ">
                        <div class="inner">
                        <h3>{{$visitantes}}<sup style="font-size: 40px"></h3>
                        <p>Lista de visitantes</p>
                        </div>
                        <div class="icon">
                        <i class="ion ion-person-add fas fa-users"></i>
                        </div>
                        <a href="{{ route('visitantes.index') }}" class="small-box-footer">Mais informações <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                        </div>

                        <div class="col-lg-3 col-6">

                        <div class="small-box bg-danger">
                        <div class="inner">
                        <h3>Msg</h3>
                        <p>De:</p>
                        </div>
                        <div class="icon">
                        <i class="ion ion-pie-graph  fas fa-users"></i>
                        </div>
                        <a href="#" class="small-box-footer">Mais informações <i class="fas fa-arrow-circle-right "></i></a>
                        </div>
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
        <script> console.log('Hi!'); </script>
    @stop
