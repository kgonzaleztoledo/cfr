<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- CSRF Token -->
    <meta id="csrf-token" name="csrf-token" content="{{ csrf_token() }}">

    <title>Listado de CFR CLIENTES</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link href="{{ asset('admin-assets/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('admin-assets/vendors/nprogress/nprogress.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('admin-assets/build/css/custom.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
    @yield('styles')
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{ route('dashboard') }}" class="site_title">
                <i class="fa fa-paw"></i>
                <span>{{ env('APP_NAME') }}</span>
              </a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{ Auth::user()->avatar }}" alt="{{ Auth::user()->name }}" class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bienvenido,</span>
                <h2>{{ Auth::user()->name }}</h2>
              </div>
              <div class="clearfix"></div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              @include('admin.partials.common.sidebar')
            </div>
          </div>
        </div>

      

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="row">
            @include('admin.partials.common.messages')
          </div>
          <div class="">
            @yield('content')
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
     
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <!-- Bootstrap -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>   <!-- FastClick -->
    <script src="{{ asset('admin-assets/vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ asset('admin-assets/vendors/nprogress/nprogress.js') }}"></script>
    <script src="{{ asset('admin-assets/vendors/iCheck/icheck.min.js') }}"></script>
    <!-- Custom Theme Scripts -->
    <script src="{{ asset('admin-assets/build/js/custom.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
    <script src="{{ asset('admin-assets/js/lg.js') }}?v={{ uniqid() }}"></script>
    
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script>

      $(document).ready(function(){

            carga();
          
      });   


      function carga (){


           $('#cfrclientview').DataTable({
        
            "orderCellsTop": true,
          "ServerSide": true,
          "retrieve": true,
          "ajax": "{{ url('api/cfr_clients') }}",
          
          "columns":[
          


            {data: 'id', id: 'id'},
              {data: 'nombres' , nombres: 'nombres'},
              {data: 'direccion', direccion: 'direccion'},
              {data: 'observaciones', observaciones: 'observaciones'},
              {data: 'btn'},

          ],

          "language": {
              "info" : "_TOTAL_ Total de Registros",
              "search" : "Buscar",
              "paginate" : {
                    "next" : "Siguiente",
                    "previous" : "Anterior",
              },
              "lengthMenu" : 'Mostrar <select>'+
                             '<option value="10">10</option>'+
                              '<option value="30">30</option>'+
                              '<option value="50">50</option>'+
                              '<option value="100">100</option>'+
                              '<option value="-1">Todos</option>'+
                             '</select> Registros',

              "loadingRecords" : "Cargando....",
              "processing" : "Procesando...",
              "empytable" : "No hay Datos",
              "zeroRecords" : "No hay coincidencias",
              "infoEmpty" :"",
              "infoFiltered" : ""

          },


      });
           
      }


            function show(btn){

              var routeshow = "http://localhost:8000/cfr_clients/"+btn.value+"";
              $.get(routeshow, function (res){

                $("#id").val(res.id);
                $("#nombre").val(res.nombre);
                 $("#observaciones").val(res.observaciones);

              });


            } 
            



         function edit(btn){

              var route = "http://localhost:8000/cfr_clients/"+btn.value+"/edit";
              $.get(route, function (res){

                $("#id").val(res.id);
                $("#nombres").val(res.nombres);
                 $("#observaciones").val(res.observaciones);

              });


            }        


          $("#actualizar").click(function(){
         
          var id = $("#id").val();
         
          var nombres = $("#nombres").val();
          var observaciones = $("#observaciones").val();
          var route = "http://localhost:8000/cfr_clients/"+id+"";
          var token = $("#token").val();

          $.ajax({

            url:route,
            headers:{'X-CSRF-TOKEN': token,},
            
            type: 'PUT',
            dataType: 'json',
            data: {
              nombres: nombres,
              observaciones: observaciones,
            },

            success: function(){
  
            carga();              
              $("#modaledit").modal('toggle');
              
              $("#msj-success").fadeIn(0.20);
              location.reload(20);

            }


          });


          });






        



      
    </script>


    @yield('scripts')
  </body>
</html> 