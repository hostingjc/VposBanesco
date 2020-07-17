@extends('layouts.payment')

@section('content')


<div class="container-fluid">
    <header>
        <div class="limiter">
            <h3>Punto de Venta Virtual</h3>
        </div>
    </header>

    @include('layouts.menu')

    <div class="InstapagoLogo">
            <img src="{{ asset('payment/images/logo_instapago.png') }}" class="img-fluid" alt="Instapago-Banesco">

    </div>
    
    
    @include('layouts.flash_messages')


       
    

    <div class="creditCardForm">
        <div class="heading">
            <h1>Confirmar Pago </h1>
            
    </div>


@include('layouts.form_payment')

@endsection