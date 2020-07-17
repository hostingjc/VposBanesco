<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VPOS Banesco</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    
    <!-- Preloader --->

    <link rel="stylesheet" href="{{ asset('preloader/css/preloader.css')}}">
   

    <!-- ------------- -->



    <!-- ------------------------------------------------------- -->



    <link rel="stylesheet" type="text/css" href="{{ asset('payment/css/styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('payment/css/demo.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('payment/css/menu.css') }}">


     <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
     <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.1.5/css/fixedHeader.bootstrap.min.css">
     <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">


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

    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
     <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>





     <script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
     <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
     <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>

     
     <script src="{{ asset('payment/js/datatable_responsive.js') }}"></script>
 


     <script src="{{ asset('js/bootstrap.min.js') }}"></script>
       <script src="{{ asset('payment/js/menu.js') }}"></script>

    
      

<!-- Active js -->
      <!-- Preloader -->
      <script src="{{ asset('preloader/js/active.js')}}"></script>

     <!--          -->
</body>

</html>
