@extends('layouts.consult')

@section('content')

<div class="spinner-border text-primary" role="status">
    <span class="sr-only">Loading...</span>
  </div>
        
    <div class="container-fluid">
        <header>
            <div class="limiter">
                <h3>Punto de Venta Virtual</h3>
            </div>
        </header>

        @include('layouts.menu')

        <div class="InstapagoLogo">
                <h1>Pagos Realizados</h1>

        </div>

        @include('layouts.flash_messages')

        <div class="examples">

            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Referencia</th>
                <th>MSJ Banco</th>
                <th>Monto</th>
                <th>Fecha Banco</th>
            </tr>
        </thead>
        <tbody>
        @foreach($payments as $payment)
            <tr>
                <td>{{$payment->id}}</td>
                <td>{{$payment->reference}}</td>
                <td>{{$payment->msg_banco}}</td>
                <td>{{$payment->amount}}</td>
                <td>{{$payment->date_bank}}</td>
            </tr>
            @endforeach 
        </tbody>
        <tfoot>
            <tr>
                    <th>Id</th>
                    <th>Referencia</th>
                    <th>MSJ Banco</th>
                    <th>Monto</th>
                    <th>Fecha Banco</th>
            </tr>
        </tfoot>
    </table>
            </div>
        </div>
    </div>
    


    @endsection