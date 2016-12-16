@extends('layouts.dashboard')
@section('content')
<div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
           <li class="active"><a href="/actualInfoMission/index">Información Misión Actual <span class="sr-only">(current)</span></a></li>       
            <li>
            <a href="/taskAssignment/index"><i class="fa fa-book fa-2x fa-fw"></i>Gestion Agregar Tareas</a>                          
            </li>
            <li>
            <a href="/voluntaryRequestsChoice/index"><i class="fa fa-user fa-2x fa-fw"></i>Solicitud de Voluntarios</a>                          
            </li>
            <li>
            <a href="/requestStatus/index"><i class="fa fa-user fa-2x fa-fw"></i>Estado de Solicitudes</a>                          
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
                            Información misión actual
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive table-bordered">
                                <table class="table">
                                    
										 <tr>
										
										    <td style="width:10%"><b>Emergencia actual:</b></td>
										   <td style="width:40%">
										        <input class="form-control" type="text" name="txtEmergenciaActual" readonly= "true">
                                            </td>
										      <td style="width:10%"><b>Fecha de inicio:</b></td>
                                             <td style="width:40%">
										        <input class="form-control" type="text" name="txtFechaInicio" readonly= "true">
                                            </td>
                                        </tr>
                                        <tr>
										
										    <td style="width:10%"><b>Mision encargada:</b></td>
										    <td style="width:40%">
										        <input class="form-control" type="text" name="txtMisionEncargada" readonly= "true">
                                            </td>										     
											<td style="width:10%"><b>Fecha de finalización:</b></td>
                                            <td style="width:40%">
										        <input class="form-control" type="text" name="txtFechaFinalizacion" readonly= "true">
                                            </td>
                                        </tr>
										<tr>
										
										    <td style="width:10%"><b>Referencia Geografica:</b></td>
										    <td style="width:40%">
										        <input class="form-control" type="text" name="txtLugar" readonly= "true">
                                            </td>										     
											<td style="width:10%"><b>Cantidad actual voluntarios: </b></td>
                                            <td style="width:40%">
                                               <input type="number" name="txtCantActualVoluntarios" >
                                               
                                            </td>
                                        </tr>
										
										
										<tr>										
										    <td style="width:10%"><b>Cantidad maxima de voluntarios:</b></td>
										    <td style="width:40%">
										        <input class="form-control" name="txtCantMax" readonly= "true">
                                            </td>										     
											<td style="width:10%"><b>Estado de la misión:</b></td>
                                            <td style="width:40%">
										        <select class="form-control" name="ddlEstadoMision">
                                                    <option value="Sin valor">En proceso</option>
                                                    <option value="Otro valor">Otro valor</option>
                                                </select>
                                            </td>
                                        </tr>
										<tr>				     
											
                                        </tr>										
                                </table>
                            </div>
							<div class="col-sm-offset-5 main"> <INPUT button type="button" value="Actualizar" class="btn btn-primary btn-lg"></button></div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
        </div>
      </div>
    </div>
@endsection
