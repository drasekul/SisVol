@extends('layouts.dashboard')
@section('content')

<div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
           <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
            <li>
			<a href="datos_personales.html"><i class="fa fa-user fa-2x fa-fw"></i> Datos Personales</a>
             </li>
			<li>
             <a href="datos_personales.html"><i class="fa fa-book fa-2x fa-fw"></i> Información Misión Actual</a>
            </li>
            <li>
            <a href="gestionar_reclamos.html"><i class="fa fa-book fa-2x fa-fw"></i>Gestion Agregar Tareas</a>                          
            </li>
			<li>
            <a href="gestionar_reclamos.html"><i class="fa fa-user fa-2x fa-fw"></i>Solicitud de Voluntarios</a>                          
            </li>
			<li>
            <a href="gestionar_reclamos.html"><i class="fa fa-user fa-2x fa-fw"></i>Estado de Solicitudes</a>                          
            </li>
			<li>
            <a href="gestionar_reclamos.html"><i class="fa fa-book fa-2x fa-fw"></i>Estado de Tareas</a>                          
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
                            Solicitud de Voluntarios
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive table-bordered">
                                <table class="table">
                                    <tr>
                                          <th style="width:10%"><b>Nombre de tarea:</b></th>
										   <th style="width:40%"><select class="form-control" name="ddlNombreTarea">
                                                <option value="nombreTarea1">Tarea</option>
                                                </select>
                                            </th>
											
											
									</tr>	
									<table class="table table-bordered">
                                    <tr>
                                        <th style="width:8%">Check</th>
                                        <th style="width:23%">Nombre</th>
                                        <th style="width:23%">Habilidades</th>
                                        <th style="width:23%">Maestria</th>
                                        <th style="width:23%">Ubicación actual</th>
                                    </tr>
                                        <TD><INPUT type="checkbox" name="chk"/></TD> 		    
										
										<td>	
										   <div class="col-md-20">											
											   <input class="form-control" type="text" readonly="true">
										   </div>										
										</td>
										
                                       <td>										
										 <select multiple class="form-control" id="areasDesempeño">
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>5</option>
										</select>
										</td>	
										
										<td>										
										 <select multiple class="form-control" id="areasDesempeño">
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>5</option>
										</select>
										</td>	
										
                                        <td>
										   <div class="col-md-20">											
											 <input class="form-control" type="text" readonly="true">
										   </div>
										</td>
                                     </table>
                                </table>
                            </div>
							<div class="col-sm-offset-5 main"> <INPUT button type="button" value="Enviar" class="btn btn-primary btn-lg"></button></div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
        </div>
      </div>
    </div>
 
@endsection
