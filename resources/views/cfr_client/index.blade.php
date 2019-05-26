@extends('cfr_client.master')

@section('content')
@include('cfr_client.modal')

<div class="row">

	<div class="col-md-12">
	  <div class="page-title">
	      
			<div class="col-sm-7">
				<h3 class="page-heading">
					CFR CLIENTES 
					<small>Administrador</small>
				</h3>
			</div>
			<div class="col-sm-5 text-right hidden-xs">
				<ol class="breadcrumb push-10-t">
					<li>CFR</li>
					<li><a class="link-effect" href="/dashboard">Dashboard</a></li>
				</ol>
			</div>
			<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
				<div class="input-group">
					<input type="text" class="form-control form-control-sm" placeholder="Buscar">
					<span class="input-group-btn">
						<button class="btn btn-default" type="button">Ir!</button>
					</span>
				</div>
			</div>	
	  </div>
	</div>

	 	<div class="x_panel ">
			    <div class="x_title">
			        <h2>LISTA DE CFR CLIENTES </h2>
			        <ul class="nav navbar-right panel_toolbox">
			          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
			          </li>
			          <li class="dropdown">
			            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
			            <ul class="dropdown-menu" role="menu">
			              <li><a href="#">Ir Municipios</a>
			              </li>
			              </ul>
			          </li>
			          <li><a class="close-link"><i class="fa fa-close"></i></a>
			          </li>
			        </ul>
			        <div class="clearfix"></div>
			    </div>
			    <div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none ">
	              	<strong>Departamento Actualizado Correctamente..</strong>
	              </div>
                  <div class="x_content" style="display: block;">
	                    <section id="file-type">
	                      <h2 class="page-header"><button type="button" class="btn btn-success"><i class="fa fa-plus"></i>  NUEVO </button></h2>
	              
	                      <div class="row fontawesome-icon-list">

				 <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
				<table width="100%" id="cfrclientview" class="table table-striped table-bordered table-hover table-responsive">
					<thead>
						<tr class="success">
						
							<th width="30px" class="text-center">NOMBRE DEL CLIENTE</th>
							<th width="10px" class="text-center">CONTRATO</th>
							
							<th width="10px" class="text-center">CMC</th>

							<th width="20px" class="text-center">DIRECCION</th>
							<th width="5px" class="text-center">TELEFONO</th>

							<th width="20px"  class="text-center">ACCIONES</th>
						</tr>
					</thead>

				</table>
	                      	
	                      






	                      </div>
	                    </section>
       			  </div>
    	</div>
	</div>
</div>


@endsection 