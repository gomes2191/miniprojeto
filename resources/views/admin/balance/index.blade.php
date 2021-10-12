@extends('adminlte::page')

@section('title', 'Saldo')

@section('content_header')
    <h1>Saldo</h1>

    {{-- <ol class="breadcrumb">
        <li><a href="admin">Dashboard</a>|</li>
        <li><a href="balance">Saldo</a></li>
    </ol> --}}
@stop

@section('content')

        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-3"></div>
            <div class="col-lg-3 col-6">
                <div class="btn-group" role="group" aria-label="...">
                    <a href="{{ route('balance.deposit') }}" type="button" class="btn btn-primary">Depositar</a>
                    <a href="{{ route('balance.deposit'); }}" type="button" class="btn btn-danger">Sacar</a>
                </div>
                <p> </p>
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>R$ {{ number_format($amount, 2, ',', '')  }}</h3>

                  <p>New Orders</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <div class="icon">
                    <i class="fas fa-chart-pie"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <div class="col-lg-3 col-3"></div>
            <!-- ./col -->
          </div>
          <!-- /.row -->
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
