$(document).ready(function() {
    var table = $('#example').DataTable( {
        responsive: true,
        language: {
            url: '//cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json' //Ubicacion del archivo con el json del idioma.
        }
    } );
 
    new $.fn.dataTable.FixedHeader( table );
} );