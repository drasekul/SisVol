@extends('layouts.dashboard')
@section('content')
<div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="/infoOnAbilities/index">Gestion Habilidades <span class="sr-only">(current)</span></a></li>           <li>
			      <li>
            <a href="/actualTask/index"><i class="fa fa-user fa-2x fa-fw"></i> Tarea Actual</a>
            </li>
			      <li>
            <a href="/taskRequests/index"><i class="fa fa-book fa-2x fa-fw"></i> Solicitudes Tareas</a>
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
        <div class="col-sm-offset-3 col-sm-9 col-md-10 col-md-offset-2 main">
          <div class="panel panel-default">
                        <div class="panel-heading">
                            Gestion Habilidades
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                      		  <div class="table-responsive table-bordered">
                                <table class="table">
                                     
                                          <tr>
										  <td style="width:10%" ><b>Areas de desempeño:</b></td>
                                            <td style="width:40%">
                                            	{{Form::select('area', $areas)}}
                                            </td>
                                      
                                               <td>
                                            <INPUT button type="button" value="Ver Habilidades" class="btn btn-primary btn-lg"></div>
                                                    </td>
                                        </tr>
                                        <tr>
										 <td style="width:10%" ><b>Habilidades:</b></td>
                                            <td style="width:40%">
                                            	{{Form::select('habilidad', $habilidades)}}
                                            </td>
                                    
                                                <td>
                                            <INPUT button type="button" value="Asignar Maestria" class="btn btn-danger btn-lg"></div>

                                            </td>                   
                                        </tr>
                                       <tr>   
									   <td style="width:10%" ><b>Maestria:</b></td>
                                            <td style="width:40%">
                                            	{{Form::select('maestria', $maestrias)}}
                                            </td>
										<tr>
                                            <td style="width:10%" ><b>Maestria Actual:</b></td>
                                            <td style="width:40%">{{Form::text('actual')}}</td>
                                        </tr>                      
                      
                                        </tr>
                    
                    
                   
                                      
                                </table>
                         </div>
                                                    <!-- /.table-responsive -->
                        	<div class="col-sm-offset-5 main"> <INPUT button type="button" value="Actualizar" class="btn btn-primary btn-lg"></div>
                      </div>
                                        <!-- /.panel-body -->
				</div>
        </div>
       </div>
     </div>
@endsection
