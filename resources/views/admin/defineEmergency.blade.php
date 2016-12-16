@extends('layouts.dashboard')
@section('content')
 <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="/defineEmergency/index">Definir Emergencia <span class="sr-only">(current)</span></a></li>
            <li>
            <a href="/addMissions/index"><i class="fa fa-book fa-2x fa-fw"></i>Gestion Agregar Misiones</a>                          
            </li>
			<li>
            <a href="/emergencyManagement/index"><i class="fa fa-book fa-2x fa-fw"></i>Gestion Emergencia</a>                          
            </li>
          </ul>
            <div style="text-align:center;height:30px;margin: 10px">
            <a href="#"><i class="fa fa-facebook fa-2x fa-fw"></i></a>
                        <a href="#"><i class="fa fa-linkedin fa-2x fa-fw"></i></a>
            <a href="#"><i class="fa fa-twitter fa-2x fa-fw"></i></a>
                    </div>
                    <button type="button" class="btn btn-success btn-lg btn-block">Cerrar Sesión</button>
        </div>
        <div class="col-sm-offset-2 .col-sm-4  main">    
              <div style="height:20px"></div>	       
          <div class="panel panel-default">
                        <div class="panel-heading">
                            Definir Emergencia
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive table-bordered">
                                <table class="table">
                                    <tbody>
					{{ csrf_field() }}
					{{ Form::open(array('action' => array('EmergencyController@regEmer'))) }}
					
					
                                        <tr>
                                            <td><b>Nombre designado:</b></td>
                                            <td>{{Form::text('name')}}</td>
                                        </tr>
                                         <tr>
                                            <td><b>Region:</b></td>
                                            <td>
                                            	{{Form::select('region', $regiones)}}
                                            </td>
                                        </tr>
                                         <tr>
                                            <td><b>Provincia:</b></td>
                                            <td>
                                            	{{Form::select('provincia', $provincias)}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>Comuna:</b></td>
					    <td>
						{{Form::select('comuna', $comunas)}}
                                            </td>
					</tr>
										<tr>
                                            <td><b>Descripción:</b></td>
                                            <td>{{ Form::text('descripcion')}}</td>
                                        </tr>
                                        </tr>
										<tr>
                                            <td><b>Referencia Geografica:</b></td>
                                            <td>{{ Form::text('geo')}}</td>
                                        </tr>
										<tr>
                                            <td><b>Fecha:</b></td>
                                            <td>{{Form::date('date', \Carbon\Carbon::now())}}</td>
                                        </tr>
										<tr>
                                            <td><b>Estado:</b></td>
											 <td>
                                            {{Form::select('estado', array(
						'1' => 'En Proceso',
 						'2' => 'Completado',
 						'3' => 'Abandonado',))}}
                                            </td>
                                        </tr>
					</tr>
										<tr>
                                            <td><b>Gravedad:</b></td>
											 <td>
                                            {{Form::select('prioridad', array(
						'1' => 'Mínima',
 						'2' => 'Baja',
 						'3' => 'Moderada',
 						'4' => 'Alta',
 						'5' => 'Catastrofica'))}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>{{Form::submit('Registrar',['class'=>"btn btn-warning"])}}</td>
                                        </tr>
					{{ Form::close() }}
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
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
