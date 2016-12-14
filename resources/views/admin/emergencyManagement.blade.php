@extends('layouts.dashboard')


@section('content')
<div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
              <li>
			<a href="datos_personales.html"><i class="fa fa-user fa-2x fa-fw"></i> Datos Personales</a>
             </li>
			<li>
             <a href="/defineEmergency/index"><i class="fa fa-book fa-2x fa-fw"></i> Definir Emergencia</a>
            </li>
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
        <div class="col-sm-offset-2 .col-sm-6  main">    
              <div style="height:25px"></div>		
               <div class="panel panel-default">
                        <div class="panel-heading">
                            Actualizacion de estados de emergencia
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive table-bordered">
                                <table class="table">
                                <tr>
										<div class="col-xs-1">
										    <td>Emergencia:</td>
										   <td><select class="form-control" name="ddlEmergencia">
                                                <option value="emergencia1">01010 - Incendio Valparaiso</option>
                                                </select>
                                            </td>
										</div>
                                        <div class="col-sm-4">
										      <td><b>Estado</b></td>
                                             <td><select class="form-control" name="ddlEstado">
                                                <option value="estado1">Activa</option>
                                                </select>
                                            </td>
										
										</div>
                                            
                                </tr>
								
                                 <table class="table table-bordered">
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Fecha inicial</th>
                                        <th>Fecha final</th>
                                        <th>CapacidadMax</th>
                                        <th>CapacidadMix</th>
                                        <th>Condicion</th>
										<th>Encargado de mision</th>
										<th>Area Desempeño</th>
                                    </tr>
                                    
                                        <td>
										<div class="col-md-20">											
											<input class="form-control" type="text" readonly="true">
										</div>
										</td>
                                        <td>	<div class="col-md-20">											
											<input class="form-control" type="text" readonly="true">
										</div></td>
                                        <td><div class="col-md-20">											
											<input class="form-control" type="text" readonly="true">
										</div></td>
                                        <td><div class="col-md-10">											
											<input class="form-control" type="text" readonly="true">
										</div></td>
										<td><div class="col-md-10">											
											<input class="form-control" type="text" readonly="true">
										</div></td>
										<td><div class="col-md-20">											
											<input class="form-control" type="text" readonly="true">
										</div></td>										
										<td><div class="col-md-20">											
											<input class="form-control" type="text" readonly="true">
										</div></td>	
										<td>										
										 <select multiple class="form-control" id="sel2">
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
							<div class="col-sm-offset-5 main"> <INPUT button type="button" value="Actualizar" class="btn btn-primary btn-lg"></button></div>
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
