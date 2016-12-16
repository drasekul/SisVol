@extends('layouts.dashboard')
@section('content')
<div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="/Administrador/index"><i class="fa fa-user fa-2x fa-fw"></i>HOME <span class="sr-only">(current)</span></a></li>
            <li>
			<a href="/personalData/index"><i class="fa fa-user fa-2x fa-fw"></i> Datos Personales</a>
             </li>
             <li>
                     <a href="/requestsStatus"><i class="fa fa-book fa-2x fa-fw"></i> Ver Solicitudes</a>
                    </li>
			<li>
             <a href="/defineEmergency/index"><i class="fa fa-book fa-2x fa-fw"></i> Definir Emergencia</a>
            </li>
            <li>
            <a href="/addMissions/index"><i class="fa fa-book fa-2x fa-fw"></i>Gestion Agregar Misiones</a>
            </li>
			<li>
            <a href="/ranking"><i class="fa fa-book fa-2x fa-fw"></i>Ranking de voluntarios</a>
            </li>
          </ul>
            <div style="text-align:center;height:30px;margin: 10px">
            <a href="#"><i class="fa fa-facebook fa-2x fa-fw"></i></a>
                        <a href="#"><i class="fa fa-linkedin fa-2x fa-fw"></i></a>
            <a href="#"><i class="fa fa-twitter fa-2x fa-fw"></i></a>
                    </div>
                    <a href="/goodbye" class="btn btn-info" role="button">Cerrar Sesión</a>

        </div>
        <div class="col-sm-offset-3 col-sm-9 col-md-10 col-md-offset-2 main">
          <?php echo 'Bienvenido Administrador '.session('user');?>
        </div>
      </div>
    </div>
 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>

    <!-- Bootstrap Core JavaScript -->
    <script src="C:\Users\Usuario\Desktop\MasterMind\SisVol\vendor\bootstrap\css\bootstrap.min.css"></script>

    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="C:\Users\Usuario\Desktop\MasterMind\SisVol\js\holder.min.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="C:\Users\Usuario\Desktop\MasterMind\SisVol\dist\js\ie-emulation-modes-warning.js"></script>

@endsection
