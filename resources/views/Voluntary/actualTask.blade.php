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
            <a href="/infoOnAbilities/index"><i class="fa fa-book fa-2x fa-fw"></i>Gestion Habilidades</a>
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
              <div style="height:25px"></div>
               <div class="panel panel-default">
                        <div class="panel-heading">
                            Tarea actual
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive table-bordered">
                                <table class="table">
                                <tr>
										<div class="col-xs-1">
										    <td>Nombre tarea:</td>
										   <td><select class="form-control" name="ddlTarea">
                                                <option value="tarea1">Excavar</option>
                                                </select>
                                            </td>
										</div>
                                        <div class="col-sm-4">
										      <td><b>Guia de Actividad</b></td>
                                             <td><INPUT button type="button" value="Detalle" class="btn btn-danger btn-lg"></td>

										</div>

                                </tr>
								<tr>
										<div class="col-xs-1">
										    <td>Fecha de inicio:</td>
										   <td>
												<div class="col-md-20">
													<input class="form-control" type="text" readonly="true">
												</div>
                                            </td>
										</div>
                                        <div class="col-sm-4">
										      <td><b>Fecha finalizada: </b></td>
                                             <td>
												<div class="col-md-20">
													<input class="form-control" type="text" readonly="true">
												</div>
                                            </td>

										</div>

                                </tr>
								<div class="col-md-offset-3 col-md-6">
										<div class="text-center">Estado actual: <input type="checkbox" checked data-toggle="toggle"></div>

								</div>
								<table class="table table-bordered">
							   	<div class="col-md-offset-3">
								 <td><b>Descripción del Problema:<br> (150 carácteres máximo)</b></td>
                                   <td><textarea name="dscProblema" style="height:100px; width:600px"></textarea></td>

								</div>


								</table>





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
