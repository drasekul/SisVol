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
             <a href="datos_personales.html"><i class="fa fa-book fa-2x fa-fw"></i> Definir Emergencia</a>
            </li>
            <li>
            <a href="gestionar_reclamos.html"><i class="fa fa-book fa-2x fa-fw"></i>Gestion Agregar Misiones</a>                          
            </li>
			<li>
            <a href="gestionar_reclamos.html"><i class="fa fa-book fa-2x fa-fw"></i>Gestion Emergencia</a>                          
            </li>
          </ul>
            <div style="text-align:center;height:30px;margin: 10px">
            <a href="#"><i class="fa fa-facebook fa-2x fa-fw"></i></a>
                        <a href="#"><i class="fa fa-linkedin fa-2x fa-fw"></i></a>
            <a href="#"><i class="fa fa-twitter fa-2x fa-fw"></i></a>
                    </div>
                    <button type="button" class="btn btn-success btn-lg btn-block">Cerrar Sesión</button>
        </div>
        <div class="col-sm-offset-2 .col-sm-4  main">    
              <div style="height:20px"></div>	       
          <div class="panel panel-default">
                        <div class="panel-heading">
                            Datos Personales
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive table-bordered">
                                <table class="table">
                                    <tbody>
                                        <form>
                                        <tr>
                                            <td><b>Nombre designado:</b></td>
                                            <td><input type="text" name="txtusu"></td>
                                        </tr>
                                         <tr>
                                            <td><b>Region:</b></td>
                                            <td>
                                            <select class="form-control" name="ddlRegionSel">
                                                    <option value="Sin valor">Metropolitana</option>
                                                    <option value="Otro valor">Otro valor</option>
                                            </select>
                                            </td>
                                        </tr>
                                         <tr>
                                            <td><b>Provincia:</b></td>
                                            <td>
                                            <select class="form-control" name="ddlProvinciaSel">
                                                    <option value="Sin valor">Santiago</option>
                                                    <option value="Otro valor">Otro valor</option>
                                            </select>
                                            </td>
                                        </tr>
                                         <tr>
                                            <td><b>Ciudad/Pueblo:</b></td>
                                            <td>
                                            <select class="form-control" name="ddlCiudadPuebloSel">
                                                    <option value="Sin valor">Santiago</option>
                                                    <option value="Otro valor">Otro valor</option>
                                            </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>Comuna:</b></td>
											 <td>
                                            <select class="form-control" name="ddlComunaSel">
                                                    <option value="Sin valor">Santiago</option>
                                                    <option value="Otro valor">Otro valor</option>
                                            </select>
                                            </td>
                                        </tr>
										<tr>
                                            <td><b>Referencia Geografica:</b></td>
                                            <td><input type="text" name="txtusu"></td>
                                        </tr>
										<tr>
                                            <td><b>Fecha:</b></td>
                                            <td><input type="date" name="txtusu"></td>
                                        </tr>
										<tr>
                                            <td><b>Gravedad:</b></td>
											 <td>
                                            <select class="form-control" name="ddlGravedadSel">
                                                    <option value="Sin valor">Leve</option>
                                                    <option value="Otro valor">Otro valor</option>
                                            </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><button type="button" class="btn btn-warning">Registrar</button></td>
                                        </tr>
                                        </form>
                                    </tbody>
                                </table>
                            </div>
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
