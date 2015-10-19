
<!--Box-->
<div class="box">
	<p class="direccion"><strong>Dirección:</strong> Av. 6 de Diciembre N-3402 entre Eloy Alfaro y Checoslovaquia, una cuadra al norte del Consejo Nacional Electoral
	Consultas previa cita a los teléfonos
	(+593 2) 2250324 / 2241335 / 2257105 / 0969093943
	info@lasercentervision2020.com
	<strong></strong></p>
</div>
<!--End Box-->

<p><img src="<?php echo base_url('assets/images/home/cards.gif') ?>" width="357" height="72" class="img-responsive mgAuto" /></p>

<div class="box">
  	<form name="formContacto" id="formContacto" class="formContacto" method="post" action="">
		<fieldset id="datosForm">
			<div class='row clearfix'>
				<div class='col-sm-6'>
					<div class='form-group'>
						<label for="nombres">Nombres y Apellidos:</label>
						<input class="{required:true} form-control" id="nombres" name="nombres" type="text" placeholder="Coloque sus nombres" />
					</div>
				</div>

				<div class='col-sm-6'>
					<div class='form-group'>
						<label for="email">Edad:</label>
						<input class="{required:true} form-control" id="edad" name="edad" type="text" placeholder="Coloque su edad" />
					</div>
				</div>

				<div class='col-sm-6'>
					<div class='form-group'>
						<label for="email">Direcci&oacute;n:</label>
						<input class="{required:true} form-control" id="direccion" name="direccion" type="text" placeholder="Coloque su dirección" />
					</div>
				</div>


				<div class='col-sm-6'>
					<div class='form-group'>
						<label for="ciudad">Ciudad:</label>
						<input class="{required:true} form-control" id="ciudad" name="ciudad" type="text" placeholder="Coloque su ciudad" />
					</div>
				</div>


				<div class='col-sm-6'>
					<div class='form-group'>
						<label for="telefono">Tel&eacute;fono de contacto:</label>
						<input class="{required:true} form-control" id="telefono" name="telefono" type="text" placeholder="Coloque su número de teléfono" />
					</div>
				</div>

				<div class='col-sm-6'>
					<div class='form-group'>
						<label for="telefono">Tel&eacute;fono Celular:</label>
						<input class="{required:true} form-control" id="celular" name="celular" type="text" placeholder="Coloque su número de celular" />
					</div>
				</div>



		        <div class='col-sm-6'>
		            <div class='form-group'>
		                <label for="email">Email/Correo:</label>
		                <input class="{required:true} form-control" id="email" name="email" type="text" placeholder="Coloque su email o correo" />
		            </div>
		        </div>

		        <div class='col-sm-6 interesCustom'>
		          <div class='form-group'>
		            <label for="interes">Problema Visual:</label>
		            <select name="interes" id="interes" class="{required:true} form-control">
		                <option value="">Seleccione</option>
		                <option value="Infecciones/Inflamaciones oculares">Infecciones/Inflamaciones oculares</option>
		                <option value="Miopia">Miopia</option>
		                <option value="Astigmatismo">Astigmatismo</option>
		                <option value="Miopía y Astigmatismo">Miopía y Astigmatismo</option>
		                <option value="Hipermetropía">Hipermetropía</option>
		                <option value="Catarata">Catarata</option>
		                <option value="Presbicia">Presbicia</option>
		                <option value="Pterigium/terigio">Pterigium/terigio</option>
		                <option value="Queratocono">Queratocono</option>
		                <option value="Estrabismo">Estrabismo</option>
		                <option value="Glaucoma">Glaucoma</option>
		                <option value="Desprendimiento de retina">Desprendimiento de retina</option>
		                <option value="Retinopatía diabética">Retinopatía diabética</option>
		                <option value="Enfermedades de la retina">Enfermedades de la retina</option>
		                <option value="Transplante de cornea">Transplante de cornea</option>
		                <option value="Cirugia plastica ocular">Cirugia plastica ocular</option>
		                <option value="Ojo seco">Ojo seco</option>
		                <option value="Otro">Otro</option>
		            </select>
		          </div>
		        </div>

		        <div class='col-sm-12'>
		            <div class='form-group'>
		              <label for="direccion">Mensaje:</label>
		                <textarea name="mensaje" rows="3" class="{required:true} form-control" id="mensaje" placeholder="Coloque su mensaje"></textarea>
		            </div>
		        </div>

				<div class='col-sm-12'>
					<input name="enviar" class="boton btn btn-primary" id="enviar"  type="submit" value="Enviar Consulta">
				</div>

			</div><!--End Row-->
		</fieldset>
	</form>
</div><!--End Box-->
