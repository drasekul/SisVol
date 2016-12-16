@extends('layouts.dashboard')
@section('content')
<div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
           <li class=""><a href="/actualTask">Tarea Actual<span class="sr-only">(current)</span></a></li>
			      <li>
             <a href="/myTasks"><i class="fa fa-book fa-2x fa-fw"></i>Mis Tareas</a>
            </li>
            <li>
             <a href="/myRequests"><i class="fa fa-book fa-2x fa-fw"></i>Mis solicitudes</a>
            </li>
            <li>
            <a href="/infoOnAbilities"><i class="fa fa-book fa-2x fa-fw"></i>Mis Habilidades</a>
            </li>
			<li>
            <a href="/personalData/index"><i class="fa fa-book fa-2x fa-fw"></i>Datos Personales</a>
            </li>
          </ul>
            <div style="text-align:center;height:30px;margin: 10px">
            <a href="#"><i class="fa fa-facebook fa-2x fa-fw"></i></a>
                        <a href="#"><i class="fa fa-linkedin fa-2x fa-fw"></i></a>
            <a href="#"><i class="fa fa-twitter fa-2x fa-fw"></i></a>
                    </div>
                    <a href="/goodbye" class="btn btn-info" role="button">Cerrar Sesión</a>
                    
        </div>
        <div class="col-sm-offset-2 .col-sm-6  main">
          <?php echo 'Bienvenido Voluntario '.session('user');?>
        </div>
      </div>
    </div>
@endsection
