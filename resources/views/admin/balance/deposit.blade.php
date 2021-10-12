@extends('adminlte::page')

@section('title', 'Saldo')

@section('content_header')
    <h1>Depósito</h1>

    {{-- <ol class="breadcrumb">
        <li><a href="admin">Dashboard</a>|</li>
        <li><a href="balance">Saldo</a></li>
    </ol> --}}
@stop

@section('content')

<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Depositar</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" method="POST" action="{{ route('deposit.store'); }}">

        {!! csrf_field(); !!}

      <div class="card-body">
        <div class="form-group">
          <label for="deposit">Valor do depósito</label>
          <input type="number" name="value" min="0.00" max="10000.00" step="0.01" class="form-control" id="deposit" placeholder="0,00">
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Depositar</button>
      </div>
    </form>
  </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
