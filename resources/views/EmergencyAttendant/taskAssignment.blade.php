@extends('layouts.dashboard')
@section('content')

<div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
           <ul class="nav nav-sidebar">
            <li class="active"><a href="/requestStatus/index">Listado de Solicitudes <span class="sr-only">(current)</span></a></li>       
            <li>
            <a href="/taskAssignment/index"><i class="fa fa-book fa-2x fa-fw"></i>Gestion Agregar Tareas</a>                          
            </li>
            <li>
            <a href="/voluntaryRequestsChoice/index"><i class="fa fa-user fa-2x fa-fw"></i>Solicitud de Voluntarios</a>                          
            </li>
            <li>
            <a href="/actualInfoMission/index"><i class="fa fa-user fa-2x fa-fw"></i>Información Misión Actual</a>                          
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
          <div class="panel panel-default">
                        <div class="panel-heading">
                            Listado de Solicitudes
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive table-bordered">
                                <table class="table">
                                        {{ Form::open(array('action' => array('TaskController@assignDB'))) }}
										 <tr>
										
										    <td style="width:10%"><b>Mision Encargada:</b></td>
										   <td style="width:40%">
										        {{Form::select('mision', $misiones)}}
                                            </td>										
                                            </td>
                                        </tr>
										<table class="table table-bordered">
										<tr>
											<th style="width:24%">Nombre</th>
											<th style="width:24%">Fecha inicio</th>
											<th style="width:24%">Fecha finalizada</th>
											<th style="width:24%">Estado</th>
			
						
										</tr>
											<td>
											<div class="col-md-10">											
												<input class="form-control" name="name" type="text"   >
										    </div>
											</td>
											<td>	
										    <div class="col-md-10">											
												{{Form::date('dateInit', \Carbon\Carbon::now())}}
										    </div>
											</td>
											<td>
											<div class="col-md-10">											
												{{Form::date('dateEnd', \Carbon\Carbon::now())}}
											</div>
										    </td>
											
											<td>
											<div class="col-md-20">											
											   {{Form::select('estado', array(
						'1' => 'En Proceso',
 						'2' => 'Completado',
 						'3' => 'Abandonado',))}}
											</div>
											</td>
										
										</table>
										
                                </table>
                            </div>
              {{Form::submit('Enviar',['class'=>"btn btn-primary primary btn-lg"])}}
		{{ Form::close() }}

                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
        </div>
      </div>
    </div>
 
@endsection
