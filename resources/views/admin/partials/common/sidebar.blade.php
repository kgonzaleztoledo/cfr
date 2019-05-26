<div class="menu_section">
	<h3>{{ __('lg.dashboard') }}</h3>
	<ul class="nav side-menu">
    
		<li class="active"><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> {{ __('lg.dashboard') }} <span class="fa fa-chevron-right"></span></a></li>
	</ul>
	@if(\Auth::user()->id == '10' || \Auth::user()->id == 'Mod')
	<h3>{{ __('lg.usersaccounts') }}</h3>
	<ul class="nav side-menu">
		<li><a href="{{ route('users') }}"><i class="fa fa-user"></i> {{ __('lg.manageusers') }} <span class="fa fa-chevron-right"></span></a></li>
	</ul>
	@endif
	
  @if(\Auth::user()->id == '2' || \Auth::user()->id == 'Mod')
	<h3>{{ __('lg.sitesettings') }}</h3>
	<ul class="nav side-menu">
		<li><a href=""><i class="fa fa-cog"></i> {{ __('lg.managesettings') }} <span class="fa fa-chevron-right"></span></a></li>
	</ul>
	@endif
</div>



<div class="menu_section">
 <h3>MODULOS</h3>
    <ul class="nav side-menu">
        <li>
        	<a><i class="fa fa-users"></i> USUARIOS <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="display: none;">
                        <li class="active"><a>EXTERNO<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu" style="display: block;">
                            <li class="sub_menu"><a href="\cfr_clients">CLIENTES CFR</a>
                            </li>
                          </ul>
                        </li>
                        <li class="active"><a>INTERNO<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu" style="display: block;">
                            <li class="sub_menu"><a href="#">Admin</a>
                            </li>
                            <li><a href="#">Secretaria</a>
                            </li>
                            <li><a href="#">Cobradores</a>
                            </li>
                          </ul>
                        </li>
                        
                    </ul>
    	</li>


  
<li class="active-sm"><a><i class="fa fa-book"></i> CATALOGOS <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="display: none;">
                       <li><a href="countries">Paises <button class="btn btn-warning btn-xs">Primeros</button></a></li>
                        <li><a href="\departments">Departamentos <button class="btn btn-warning btn-xs">Primeros</button></a></li>
                         <li><a href="#">Municipios <button class="btn btn-warning btn-xs">Primeros</button></a></li>
                      <li><a href="#">Tipos de Planes</a></li>
                      <li><a href="#">Mes</a></li>
                      <li><a href="#">Ciclo Años</a></li>
                      <li><a href="#">Pagos</a></li>
                    </ul>
                  </li>

















    </ul>
</div>