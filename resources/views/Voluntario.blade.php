@extends('layouts.dashboard')
@section('content')
<div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
           <li class="active"><a href="/actualTask/index">Tarea Actual<span class="sr-only">(current)</span></a></li>
			      <li>
             <a href="/taskRequests/index"><i class="fa fa-book fa-2x fa-fw"></i> Solicitudes Tareas</a>
            </li>
            <li>
            <a href="/infoOnAbilities"><i class="fa fa-book fa-2x fa-fw"></i>Gestion Habilidades</a>
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
                    <button type="button" class="btn btn-success btn-lg btn-block">Cerrar Sesión</button>
        </div>
        <div class="col-sm-offset-2 .col-sm-6  main">
          <?php echo 'Bienvenido Voluntario '.session('user');?>
        </div>
      </div>
    </div>
@endsection
