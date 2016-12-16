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

            </li>
			<li>
            <a href="/showInfo"><i class="fa fa-user fa-2x fa-fw"></i>Mostrar información de misión actual</a>
            </li>
			<li>
            <a href="/requestStatus"><i class="fa fa-book fa-2x fa-fw"></i>Estado de Solicitudes</a>
            </li>
             <li>
            <a href="/taskStatus/index"><i class="fa fa-book fa-2x fa-fw"></i>Estado de Tareas</a>
            </li>
          </ul>
            <div style="text-align:center;height:30px;margin: 10px">
            <a href="/personalData/index"><i class="fa fa-facebook fa-2x fa-fw"></i>Datos Personales</a>

                    </div>
                    <a href="/goodbye" class="btn btn-info" role="button">Cerrar Sesión</a>
                    
        </div>
        <div class="col-sm-offset-3 col-sm-9 col-md-10 col-md-offset-2 main">
          <?php echo 'Bienvenido Supervisor '.session('user');?>
        </div>
      </div>
    </div>
@endsection
