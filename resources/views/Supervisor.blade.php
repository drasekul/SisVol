@extends('layouts.dashboard')
@section('content')
<div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
           <li class="active"><a href="#">HOME <span class="sr-only">(current)</span></a></li>
		<li>
		<a href="/taskAssignment/index"><i class="fa fa-user fa-2x fa-fw"></i>Gestion Agregar Tareas</a>
		</li>		
            <li>
            <a href="/voluntaryRequestsChoice/index"><i class="fa fa-user fa-2x fa-fw"></i>Solicitud de Voluntarios</a>                          
            </li>
			<li>
            <a href="/actualInfoMission/index"><i class="fa fa-user fa-2x fa-fw"></i>Información Misión Actual</a>                          
            </li>
			<li>
            <a href="/requestStatus/index"><i class="fa fa-book fa-2x fa-fw"></i>Estado de Solicitudes</a>                          
            </li>
             <li>
            <a href="/taskStatus/index"><i class="fa fa-book fa-2x fa-fw"></i>Estado de Tareas</a>                          
            </li>
          </ul>
            <div style="text-align:center;height:30px;margin: 10px">
            <a href="#"><i class="fa fa-facebook fa-2x fa-fw"></i></a>
                        <a href="#"><i class="fa fa-linkedin fa-2x fa-fw"></i></a>
            <a href="#"><i class="fa fa-twitter fa-2x fa-fw"></i></a>
                    </div>
                    <button type="button" class="btn btn-success btn-lg btn-block">Cerrar Sesión</button>
        </div>
        <div class="col-sm-offset-3 col-sm-9 col-md-10 col-md-offset-2 main">
          <?php echo 'Bienvenido Supervisor '.session('user');?>
        </div>
      </div>
    </div>
@endsection
