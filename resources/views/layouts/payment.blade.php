<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VPOS Banesco</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('payment/css/styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('payment/css/demo.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('payment/css/menu.css') }}">

    
    <!-- Preloader --->

    <link rel="stylesheet" href="{{ asset('preloader/css/preloader.css')}}">
   

    <!-- ------------- -->



</head>








<body>

  <!-- Preloader -->
  <div id="preloader">
            
        <div class="loader">
              
            </div>
            
 
    </div>


    @yield('content')

    
            

        <p class="examples-note">Desarrollado por Juan Diaz con la Tecnologia de Instapago y SocialGest | {{ date('Y') }}</p>

        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('payment/js/jquery.payform.min.js') }}" charset="utf-8"></script>
    <script src="{{ asset('payment/js/script.js') }}"></script>
    <script src="{{ asset('payment/js/menu.js') }}"></script>

    <!-- Active js -->
      <!-- Preloader -->
      <script src="{{ asset('preloader/js/active.js')}}"></script>

     <!--          -->
</body>