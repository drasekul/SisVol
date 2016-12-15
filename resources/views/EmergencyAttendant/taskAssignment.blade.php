@extends('layouts.dashboard')
@section('content')
<div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
           <ul class="nav nav-sidebar">
           <li class="active"><a href="/taskAssignment/index">Gestion Agregar Tareas <span class="sr-only">(current)</span></a></li>		
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
          <div class="panel panel-default">
                        <div class="panel-heading">
                            Gestion Agregar Tareas 
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive table-bordered">
                                <table class="table">
                                        
										 <tr>
										
										    <td style="width:10%"><b>Mision Encargada:</b></td>
										   <td style="width:40%">
										        <input class="form-control" type="text" name="txtMisionEncargada" readonly= "true">
                                            </td>
										      <td style="width:10%"><b>Areas de desempeño:</</b></td>
                                             <td style="width:40%">										        										
												<select multiple class="form-control" id="areasDesempeño">
														<option>1</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
														<option>5</option>
												</select>
													
                                            </td>
                                        </tr>
										<table class="table table-bordered">
										<div class= "pull-right"> 
										<tr>
												<INPUT button type="button" value="Agregar" class="btn btn-primary btn-lg">
												<INPUT button type="button" value="Borrar" class="btn btn-primary btn-lg">
										</tr>
										</div>
										<tr>
											<th style="width:5%">Check</th>
											<th style="width:19%">Nombre</th>
											<th style="width:19%">Fecha inicio</th>
											<th style="width:19%">Fecha finalizada</th>
											<th style="width:19%">Estado</th>
											<th style="width:19%">Habilidades necesarias</th>
										
										</tr>
											<TD><INPUT type="checkbox" name="chk"/></TD>
											<td>
											<div class="col-md-10">											
												<input class="form-control" type="text"  readonly="true" >
										    </div>
											</td>
											<td>	
										    <div class="col-md-10">											
												<input class="form-control" type="text" readonly="true">
										    </div>
											</td>
											<td>
											<div class="col-md-10">											
												<input class="form-control" type="text" readonly="true">
											</div>
										    </td>
											
											<td>
											<div class="col-md-20">											
											   <select class="form-control" name="ddlEstado">
                                                  <option value="estado">En proceso</option>
                                                   </select>
											</div>
											</td>
											<td>										        										
												<select multiple class="form-control" id="habilidadesNecesarias">
														<option>1</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
														<option>5</option>
												</select>
													
                                            </td>
											
										</table>
										
                                </table>
                            </div>
                            <!-- /.table-responsive -->
							<div class="col-sm-offset-5 main"> <INPUT button type="button" value="Registrar" class="btn btn-primary btn-lg"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
        </div>
      </div>
    </div>
 
@endsection
