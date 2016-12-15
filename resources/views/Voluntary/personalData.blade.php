@extends('layouts.dashboard')
@section('content')
<div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
         <ul class="nav nav-sidebar">
            <li class="active"><a href="/personalData/index">Datos Personales <span class="r-only"></span></a></li>

           <li>
             <a href="/infoOnAbilities/index"><i class="fa fa-book fa-2x fa-fw"></i>Gestion Habilidades</a>
            </li>
            <li>
			       <a href="/actualTask/index"><i class="fa fa-user fa-2x fa-fw"></i> Tarea Actual</a>
            </li>
			      <li>
             <a href="/taskRequests/index"><i class="fa fa-book fa-2x fa-fw"></i> Solicitudes Tareas</a>
            </li>
           
             </ul>
              <div style="text-align:center;height:30px;margin: 10px">
                <a href="#"><i class="fa fa-facebook fa-2x fa-fw"></i></a>
                <a href="#"><i class="fa fa-linkedin fa-2x fa-fw"></i></a>
                <a href="#"><i class="fa fa-twitter fa-2x fa-fw"></i></a>
                    </div>
                    <button type="button" class="btn btn-success btn-lg btn-block">Cerrar Sesión</button>
        </div>
        <div class="col-sm-offset-1 col-sm-9 col-md-10 col-md-offset-2 main">
          <div class="panel panel-default">
                        <div class="panel-heading">
                            Datos Personales
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive table-bordered">
                                <table class="table">
                                     <tr>

										    <td style="width:10%"><b>Cuidad:</b></td>
										   <td style="width:40%">
										        <input class="form-control" type="text" >
                                            </td>
										      <td style="width:10%"><b>Teléfono</b></td>
                                             <td style="width:40%">
										        <input class="form-control" type="text" >
                                            </td>
                                     </tr>
									 <tr>

										    <td style="width:10%"><b>Residencia(Calle): </b></td>
										   <td style="width:40%">
										        <input class="form-control" type="text" >
                                            </td>
											<td style="width:10%"><b>Contraseña: </b></td>
										   <td style="width:40%">
										        <input class="form-control" type="text" >
                                            </td>

                                     </tr>
									 <tr>

										    <td style="width:10%"><b>Correo electronico: </b></td>
										   <td style="width:40%">
										        <input class="form-control" type="text" >
                                            </td>
											<td style="width:10%"><b>Ranking total: </b></td>
										   <td style="width:40%">
										        <input class="form-control" type="text" readonly= "true">
                                            </td>

                                     </tr>
									<tr>
							  	    <div class="col-md-offset-3 col-md-6">
										<div class="text-center">Disponibilidad: <input type="checkbox" checked data-toggle="toggle"></div>

								    </div>
								    </tr>
									<tr>
										    <td style="width:10%"><b>Fecha: desde </b></td>
										   <td style="width:40%">
										        <input class="form-control" type="date" >
                                            </td>
											<td style="width:10%"><b>Fecha: hasta </b></td>
										   <td style="width:40%">
										        <input class="form-control" type="date" >
                                            </td>

                                     </tr>




                                </table>
                            </div>
                            <!-- /.table-responsive -->
							<div class="col-sm-offset-5 main"> <INPUT button type="button" value="Actualizar" class="btn btn-primary btn-lg"></button></div>
                        </div>
                        <!-- /.panel-body -->
            </div>
        </div>
      </div>
    </div>
@endsection
