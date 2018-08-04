<!DOCTYPE html>
<html>
<head>
	<title>Cuentas Bancarias</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="jumbotron"></div>
	<div class="container text-center">
		
		<h2>Relacion de Cuentas Bancarias y Saldos.</h2>
		<!-- Trigger the modal with a button (Disparador de modal con un boton) -->
		<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#NuevaCuenta">Nuevo</button>
		<!-- Modal -->
		<div class="modal fade" id="NuevaCuenta" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content (Contenido del modal)-->
				<div class="modal-content">
					<div class="modal-header"> <!--Titulo del modal--> 
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Alta de Cuenta Bancaria</h4>
					</div>
					<div class="modal-body">
						<div>
							<form method="post" role="form" style="margin: 20px;" class="FormCatElec" data-form="registro">
								<div class="form-group">
								  <label for="usr">Número de la cuenta</label>
								  <input type="text" class="form-control" id="usr" placeholder="Introduzca el número de su cuenta." name="clien-pass" data-toggle="tooltip" data-placement="top" title="Indique el número de cuenta.">
								</div>	
								<div class="form-group">
									<label for="sel1">Seleccione el banco de su cuenta</label>
									<select class="form-control" id="sel1" placeholder="Seleccione un banco">
										<option>Seleccione un banco</option>
										<option>Banamex</option>
										<option>HSBC</option>
										<option>Banorte</option>
										<option>Banjio</option>
									</select>
								</div>
								<div class="form-group">
									<label for="sel1">Seleccione el tipo de cuenta</label>
									<select class="form-control" id="sel1" placeholder="Seleccione un banco">
										<option>Seleccione un Tipo de tarjeta</option>
										<option>Tarjeta de Crédito</option>
										<option>Tarjeta de Debito</option>
										<option>Tarjeta de Cheques</option>
										<option>Cuenta de ahorros</option>
									</select>
								</div>
								<div class="form-group">
									<div class="row col-sm-6">
									<label for="sel1">Seleccione el tipo de moneda usado</label>
									<select class="form-control" id="sel1" placeholder="Seleccione un banco">
										<option>Seleccione su moneda</option>
										<option>Pesos</option>
										<option>Dolares</option>
										<option>Euros</option>
										<option>Libras Esterlinas</option>
									</select>
									</div>
									<input type="text" class="form-control">
								</div>


								<div class="input-group">
									<div class="input-group-addon"><i class="fa fa-lock"></i></div>
									<input class="form-control all-elements-tooltip" type="password" placeholder="Introduzca una contrase&ntilde;a." required pattern="[A-Za-z0-9]{5,15}" name="clien-pass" data-toggle="tooltip" data-placement="top" title="Contrase&ntilde;a minima de 5 car&aacute;cteres alternando min&uacute;sculas, may&uacute;sculas y n&uacute;mero.">
								</div><br>
								<div class="input-group">
									<div class="input-group-addon"><i class="fa fa-lock"></i></div>
									<input class="form-control all-elements-tooltip" type="password" placeholder="Confirme su contrase&ntilde;a." required="[0-9]" name="clien-pass-confir" data-toggle="tooltip" data-placement="top" title="Confirme su contrase&ntilde;a que anteriormente ingreso.">
								</div>
								<div class="form-group">
									<div class="ResForm" style="width: 100%; color: #00000; text-align: center; margin: 0;"></div>
								</div>
								<div class="form-group" align="right">    
									<p><button type="submit" action="navbar-auto-hidden" class="btn btn-success btn-block"><i class="fa fa-pencil"></i>Guardar</button></p>
								</div>
							</form>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
			</div>
			<!--Modal end -->
			</div>
		</div>



  	<!-- Trigger the modal with a button (Disparador de modal con un boton) -->
	  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#ModificarCuenta">Modificar</button>
	  <!-- Modal -->
	  <div class="modal fade" id="ModificarCuenta" role="dialog">
	    <div class="modal-dialog">
	      <!-- Modal content-->
	      <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h4 class="modal-title">Modificar Cuenta Bancaria.</h4>
	        </div>
	        <div class="modal-body">
	          <p>Some text in the modal.</p>
	        </div>
	        <div class="modal-footer">
	          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        </div>
	      </div>
	      <!-- Modal end-->
	    </div>
	  </div>
		<!-- Trigger the modal with a button (Disparador de modal con un boton) -->
	  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#EliminarCuenta">Eliminar</button>
	  <!-- Modal -->
	  <div class="modal fade" id="EliminarCuenta" role="dialog">
	    <div class="modal-dialog">
	      <!-- Modal content-->
	      <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h4 class="modal-title">Modal Header</h4>
	        </div>
	        <div class="modal-body">
	          <p>Some text in the modal.</p>
	        </div>
	        <div class="modal-footer">
	          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        </div>
	      </div>
	    </div>
	  </div>
  	<!-- Boton de refrescar se utilizara para refrescar la tabla -->
  	<button type="button" class="btn btn-info btn-lg" href="#">Refrescar</button>
	</div><br><br>

	<div class="container-fluid">
		<form class="form-horizontal">
	  	
	    	<label class="control-label col-sm-3" for="busqueda">Buscar</label>
	    	<div class="col-sm-6">
	    		<input type="text" class="form-control" id="busqueda" placeholder="Ingrese el nombre o número de la cuenta">
	    	</div>

		</form>
	</div><br>

	<div class="container-fluid">
		<div class="table-responsive">          
  <table class="table table-bordered">
    <thead style="background-color: #50CAE8">
      <tr>
        <th class="text-center">#No. de Cuenta</th>
        <th class="text-center">Nombre del Banco</th>
        <th class="text-center">Tipo</th>
        <th class="text-center">Moneda</th>
        <th class="text-center">Saldo</th>
        <th class="text-center">Ultimo Movimiento</th>
      </tr>
    </thead>
    <tbody class="text-center">
      <tr>
        <td>1234-00</td>
        <td>Banamex</td>
        <td>Cuenta de cheques</td>
        <td>PESOS</td>
        <td>$2,581,354.24</td>
        <td>27/07/2018</td>
      </tr>
    </tbody>
    <tbody class="text-center">
      <tr>
        <td>4321-00</td>
        <td>Banorte</td>
        <td>Cuenta de cheques</td>
        <td>PESOS</td>
        <td>$8,154.24</td>
        <td>01/07/2018</td>
      </tr>
    </tbody>
  </table>
  </div>
	</div>

</body>
</html>