@extends('cfr_client.reporte_master')

@section('content')
@include('cfr_client.modal')


<div id="response" >		
	
	
	
		<div class="panel panel-info table-responsive">
 	
			<div class="panel-body">
		
			<table class="record" style="width:100%;">
				<tbody>
				
				<img style="float: left; margin: 0px 15px -90px 0px;"
				 src="https://fl-img-media.s3.amazonaws.com/uploads/2017/01/img_logo.png" 
				 width="80px" height="64px"
				alt="Smiley face">
					<h4 class="text-center">TIGO HOME GUATEMALA - RED HFC PUERTO BARRIOS </h4>
					<h4 class="text-center">CFR NIVELES ACTIVOS </h4>
				
				
				
				</tbody>
			</table>
		
			</div>
		</div>	
	
        <div class="panel panel-info table-responsive">
        
               
        
            <div class="panel-body">

                
                <!--data grid-->
                <table  cellpadding="0" cellspacing="0" style="width:100%"  class="table table-hover table-striped">

                    <!--encabezados-->
                  
						<tr>
                        <td colspan="8" class="text-left" >
							<b>CLIENTE:</b> {{ $cfr_client->nombres }} 
							 <b>    MUNICIPIO:</b> PUERTO BARRIOS <b>    DEPTO:</b> IZABAL</td>
                       
			
					</tr>

						
						<tr>
                        <td colspan="8" ><b>DIRECCIÓN:</b> {{ $cfr_client->direccion }}</td>
                       
					
                        </tr>
						
						<tr >
                        <td colspan="2"  ><b>TELÉFONO:</b> {{ $cfr_client->telefono }}</td>
                       
                        <td colspan="3"   ><b>CMC:</b> {{ $cfr_client->cmc }}</td>
						
						
						<td colspan="3" ><FONT SIZE=-10><b>PLAN:</b>{{ $cfr_client->velocidad }}</FONT></td>	
					
					
					
					</tr>
						<tr>
                        <td colspan="2" class="text_left"><b>CONTRATO:</b> {{ $cfr_client->contrato }}</td>
                       
						
						<td colspan="3" ><FONT SIZE=-10><b>MAC:</b> {{ $cfr_client->mac }}</FONT></td>
					
						<td colspan="3" ><b>FECHA:</b> {{ $cfr_client->created_at }}  </td>
					
						
                        </tr>
						<tr >
                        <td colspan="2"  class="text_left"><b>COOR LAT:</b> -15.3544858</td>
                      
                        <td colspan="3" ><b>COOR LONG:</b> -88.57236</td>
		
					
						<td colspan="2" ><b>CÓDIGO:</b> {{ $cfr_client->codigo }}</td>
						
					    </tr>
						<tr  >
                        <td  colspan="8" class="text_left"><b>TÉCNICO:</b> Levi Eduardo Monje Madrid <b>PUESTO:</b>  Operaciones de Mantenimiento</td>
                       
           
					
					    </tr>
						<tr>
					<td rowspan="2"><br> <b>DOWNSTREAM</b></td>
					<td ><b>Poten. Max:</b></td>
					<td>5.0db</td>
					<td class="text-center"rowspan="2">
					<br><b>UPSTREAM</b>
					</td>
					<td ><b>Pot. Max:</b></td>
					<td>3.0db</td>
					</tr>
					<tr>
					<td ><b>Pot. Min:</b></td>
					<td>1.0db</td> 
					<td ><b>Pot. Min:</b></td>
					<td>-1.0db</td>
					</tr>
							<tr>

							<td colspan="4" class="text-center"><b>ANTES</b></td>

							<td colspan="4" class="text-center"><b>DESPUES</b></td>



							</tr>

								<tr>

								<td colspan="3" class="text-center" ><img 
												src="https://fl-img-media.s3.amazonaws.com/uploads/2017/01/img_logo.png" 
												width="350px" height="300px"
												alt="Smiley face"></td>

								<td colspan="4" class="text-center"><img 
												src="https://fl-img-media.s3.amazonaws.com/uploads/2017/01/img_logo.png" 
												width="350px" height="300px"
												alt="Smiley face"></td>


								</tr>

								<td colspan="8" class="text-left" ><b>OBSERVACIONES:</b> {{ $cfr_client->observaciones }}</td>
                       








					
				</table> 
			</div>
			
</div>	

	

@endsection 