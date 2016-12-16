
@extends('layouts.dashboard')
@section('content')

<div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
           <ul class="nav nav-sidebar">
            <li class="active"><a href="/requestStatus/index">Listado de Solicitudes <span class="sr-only">(current)</span></a></li>       
            <li>
            <a href="/taskAssignment/index"><i class="fa fa-book fa-2x fa-fw"></i>Gestion Agregar Tareas</a>                          
            </li>
            <li>
            <a href="/voluntaryRequestsChoice/index"><i class="fa fa-user fa-2x fa-fw"></i>Solicitud de Voluntarios</a>                          
            </li>
            <li>
            <a href="/actualInfoMission/index"><i class="fa fa-user fa-2x fa-fw"></i>Información Misión Actual</a>                          
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
                            Listado de Solicitudes
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive table-bordered">
                                <table class="table">
                                    <tr>
                                          <th style="width:10%"><b>Nombre de tarea:</b></th>
                       <th style="width:40%"><select class="form-control" name="ddlNombreTarea">
                                                <option value="nombreTarea1">Tarea1</option>
                                                </select>
                                            </th>
                      
                      
                  </tr> 
          
          
                  <table class="table table-bordered">
               <div class="col-sm-offset-5 main"> <INPUT button type="button" value="Buscar" class="btn btn-primary btn-lg"></button></div>

                                    <tr>
                                        
                                        <th style="width:20%">Nombre</th>                   
                    <th style="width:20%">Estado Solicitud</th>
                    <th style="width:20%">Estado</th>
                                        <th style="width:20%">Habilidades</th>
                                        <th style="width:20%">Maestria</th>
                                    </tr>
                         <td>
                      <div class="col-md-20">                     
                         <select class="form-control" name="ddlEstado">
                                                  <option value="estado">Juan</option>
                                                   </select>
                      </div>
                      </td>
                    <td><div class="col-sm-offset-1 main"><INPUT button type="button" value="Ver" class="btn btn-primary btn-lg"></div></td>
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
                    
                                     </table>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
        </div>
      </div>
    </div>
@endsection
