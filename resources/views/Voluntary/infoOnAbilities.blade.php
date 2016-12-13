@extends('layouts.dashboard')
@section('content')
<div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
           <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
            <li>
			<a href="datos_personales.html"><i class="fa fa-user fa-2x fa-fw"></i> Tarea Actual</a>
             </li>
			<li>
             <a href="datos_personales.html"><i class="fa fa-book fa-2x fa-fw"></i> Solicitudes Tareas</a>
            </li>
            <li>
            <a href="gestionar_reclamos.html"><i class="fa fa-book fa-2x fa-fw"></i>Gestion Habilidades</a>                          
            </li>
			<li>
            <a href="gestionar_reclamos.html"><i class="fa fa-book fa-2x fa-fw"></i>Datos Personales</a>                          
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
                            Datos Personales
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
						   <div class="table-responsive table-bordered">  
							 
							 <div class="col-xs-offset-0 main"> 
							 <INPUT button type="button" value="Area desempeño 1" class="btn btn-primary btn-lg"></button> 
							 <INPUT button type="button" value="Area desempeño 2" class="btn btn-primary btn-lg"></button>
							 <INPUT button type="button" value="Area desempeño 3" class="btn btn-primary btn-lg"></button>
							 <INPUT button type="button" value="Area desempeño 4" class="btn btn-primary btn-lg"></button>
							 <INPUT button type="button" value="Area desempeño 5" class="btn btn-primary btn-lg"></button>
							 
							 </div>
							
							 
                            
                            <table class="table table-bordered" style="width:100%">
                                     
                                    <tr>
									    <th style="width:20%">Habilidad</th>
                                        <th style="width:13%">Maestria</th>
                                        <th style="width:20%">Habilidad</th>
                                        <th style="width:13%">Maestria</th>
                                        <th style="width:20%">Habilidad</th>
                                        <th style="width:13%">Maestria</th>										
                                    </tr>									
                                        <td>
										  <div class="col-md-10">											
											<input class="form-control" type="text" readonly= "true">
										  </div>
										</td>
										<td>
										   <div class="col-md-20">											
											  <select class="form-control" name="ddlMaestria1">
                                                  <option value="Maestria1">Nula "0"</option>
                                                   </select>
											  
										    </div>
										</td>
                                        <td>	
										   <div class="col-md-10">											
											<input class="form-control" type="text" readonly= "true">
										   </div>
										</td>
                                        
										<td>
										   <div class="col-md-20">											
											  <select class="form-control" name="ddlMaestria2">
                                                  <option value="Maestria2">Nula "0"</option>
                                                   </select>
											  
										    </div>
										</td>
										<td>
										   <div class="col-md-10">											
											<input class="form-control" type="text" readonly= "true" >
										   </div>
										</td>
                                        
										<td>
										   <div class="col-md-20">											
											  <select class="form-control" name="ddlMaestria3">
                                                  <option value="Maestria3">Nula "0"</option>
                                                   </select>
											  
										    </div>
										</td>
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
