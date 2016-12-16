@extends('layouts.dashboard') 
@section('content')
<div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="/addMissions/index">Gestion Agregar Misiones <span class="sr-only">(current)</span></a></li>
            
			<li>
             <a href="/defineEmergency/index"><i class="fa fa-book fa-2x fa-fw"></i> Definir Emergencia</a>
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
        <div class="col-sm-offset-1 .col-sm-6  main">    
              <div style="height:25px"></div>		
               <div class="panel panel-default">
                        <div class="panel-heading">
                            Agregar misiones a una emergencia
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive table-bordered">
                                <table class="table">
                                <tr>
				{{ Form::open(array('action' => array('MisionController@addMisions'))) }}
                                         <div class="col-xs-1">
                                               <td>Comuna:</td>
						{{Form::select('comuna', $comunas)}}
                                                           <td>
                                         
                                          </div>

									      <div class="col-xs-1"> 
						{{Form::submit('Buscar',['class'=>"btn btn-primary primary btn-lg"])}}

                                          </div>

					{{ Form::close() }}
                                 </td>	




                                </tr>
                                @if (!empty($emergencia))
				{{ Form::open(array('action' => array('MisionController@addMisionsDB'))) }}
						                        		<tr>
						                    		    <td><b>Emergencia: </b></td>
                                       <td>{{Form::select('emergencias', $emergencia)}}
                                 </td>
			                          				</tr>
                                
                                   
                                 <table class="table table-bordered">
								                        
								    
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Fecha inicial</th>
                                        <th>Fecha final</th>
                                        <th>CapacidadMax</th>
                                        <th>CapacidadMix</th>
									    <th>Encargados Disponibles</th>
										<th>Estado</th>
										
                                    </tr>
                                      <td>
							 			  <div class="col-md-20">											
											<input class="form-control" name="name" type="text" >
										  </div>
										</td>
          
                                       <td>	
										   <div class="col-md-25">											
											{{Form::date('dateInit', \Carbon\Carbon::now())}}
										   </div>
										</td>
                                        <td>
										   <div class="col-md-25">											
											{{Form::date('dateEnd', \Carbon\Carbon::now())}}
										   </div>
										</td>
                                        <td>
										   <div class="col-md-10 pull-right">											
											<input class="form-control" name="max" type="number" >
									       </div>
										</td>										
										<td>
										    <div class="col-md-10 pull-right">											
										    	<input class="form-control" name="min" type="number" >
										    </div>
										</td>																		
										<td>
										   <div class="col-md-20">											
											  {{Form::select('disponible', $disponibles)}}							  
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
							 <tr>
							 <div class="col-sm-offset-5 main"> 
							 {{Form::submit('Registrar',['class'=>"btn btn-primary primary btn-lg"])}}
							 </div>
							
							 </tr>
							{{ Form::close() }}
                            <!-- /.table-responsive -->
				@endif

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
