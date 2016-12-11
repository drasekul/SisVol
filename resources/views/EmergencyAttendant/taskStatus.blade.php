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
                            Estado de Tareas
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive table-bordered">
                                <table class="table">
                                        <tr>										
                                          <th style="width:10%"><b>Nombre de tarea:</b></th>
										   <th style="width:40%">										   
												<select class="form-control" name="ddlNombreTarea">
													<option value="nombreTarea1">Tarea1</option>
											    </select>
                                            
										   
                                            </th>
											<th style="width:10%"><b>Estado de Tarea:</b></th>
										   <th style="width:40%">										   
                                            <select class="form-control" name="ddlEstadoTarea">
													<option value="estadoTarea1">En proceso</option>
											    </select>									   
                                            </th>			
									    </tr>                                       
                                        <table class="table table-bordered">
										    <tr>
											                                    
                                            <div class="col-sm-offset-4 main"> 
											<INPUT button type="button" value="Agregar Voluntarios" class="btn btn-primary btn-lg"></button>
											</div>
											
											</tr>

											<tr>
										     	<b>Voluntarios asociados:</b>  
												<th style="width:8%">Check</th>
												<th style="width:15%">Nombre</th>
												<th style="width:15%">Habilidades</th>
												<th style="width:15%">Maestria</th>
												<th style="width:15%">Ubicación actual</th>
												<th style="width:15%">Observación</th>
												<th style="width:15%">Condición</th>
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
												
												<td>
												<div class="col-md-20">											
													<INPUT button type="button" value="Detalles" class="btn btn-danger btn-lg"></button>
												</div>
												</td>
												
												<td>
												<div class="col-md-20">											
													<input class="form-control" type="text" readonly="true">
												</div>
												</td>
                                         </table>
									
										 <div class="row">
										    <div class="col-lg-3">
										     <b>Tarea Nueva:</b>										   								   
												<select class="form-control" name="ddlNuevaTarea" placeholder=".col-lg-3">
													<option value="NuevaTarea2">Tarea2</option>
											    </select> 										 
									     	 </div>										   
										 </div>
                                          
											
                                </table>
                            </div>
                            <!-- /.table-responsive -->
							<div class="col-sm-offset-5 main"> 
							<INPUT button type="button" value="Asignar" class="btn btn-primary btn-lg"></button>
							<INPUT button type="button" value="Actualizar" class="btn btn-primary btn-lg"></button>
							
							
							</div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
        </div>
      </div>
    </div>
 
@endsection
