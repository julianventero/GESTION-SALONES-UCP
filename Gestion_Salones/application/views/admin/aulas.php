<?php if(!$this->session->userdata('nombre_usuario')){
		redirect(base_url());
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Gestion de Prestamo de Llaves y Recursos Fisicos</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="<?php echo base_url(); ?>public/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>public/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="<?php echo base_url(); ?>public/css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="<?php echo base_url(); ?>public/css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="<?php echo base_url(); ?>public/img/favicon.ico">
	<!-- end: Favicon -->
	<style>
		.ocultar,#tablaA{display: none;}
		#Id_salon, #id_salon_modal{display: none !important;}
		#aulas>ul{
			display: block;
		}
		#aulas{
			background: #578EBE;
		}
	</style>
		
		
		
</head>

<body>
		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
		<div class="container-fluid">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<a class="brand logo" href="index.html"><img src="http://www.ucp.edu.co/portal/wp-content/themes/UCatolica/images/logo.png"></img></a>
			<a class="brand titulo" href="index.html"><span>GESTION DE SALONES</span></a>
			
		    <div class="nav-no-collapse header-nav">

			</div>
			<!-- end: Header Menu -->
					
			</div>
		</div>
	</div>
	<!-- start: Header -->
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="inicio"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Inicio</span></a></li>	
						<li>
						<a  href="prestamo"><i class="icon-calendar"></i><span class="hidden-tablet"> Prestamo</span></a>	
						</li>
						<li>
						<a  href="equiposFisicos"><i class="icon-list-alt"></i><span class="hidden-tablet"> Equipos Fisicos</span></a>	
						</li>
						<li>
						<a  href="usuarios"><i class="icon-align-justify"></i><span class="hidden-tablet"> Usuarios</span></a>
						</li>
						<li>
						<a  href="reparacion"><i class="icon-wrench"></i><span class="hidden-tablet"> Reparación</span></a>
						</li>
						<li id="aulas">
						<a class="dropmenu" href="#"><i class="icon-th"></i><span class="hidden-tablet"> Aulas</span></a>
						<ul>
							<li id="registrarA"><a class="submenu" href="#"><i class="icon-file-alt"></i><span class="hidden-tablet"> Registrar</span></a></li>
							<li id="consultarA"><a class="submenu" href="#"><i class="icon-search"></i><span class="hidden-tablet"> Consultar</span></a></li>
						</ul>	
						</li>
						<li>
						<a  href="roles"><i class="icon-group"></i><span class="hidden-tablet"> Roles</span></a>
						</li>
						<li><a href="ayuda"><i class="icon-book"></i><span class="hidden-tablet"> Ayuda</span></a></li>
						<li><a href="contacto"><i class="icon-envelope"></i><span class="hidden-tablet"> Contacto</span></a></li>
						<li><a href="<?php echo base_url(); ?>"><i class="icon-lock"></i><span class="hidden-tablet"> Cerrar Sesión</span></a></li>	
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<!-- start: Content -->
			<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Inicio</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<a href="#">Aulas</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li class="texto">
					<a href="#">Registrar</a>
				</li>
			</ul>
			

			<div class="row-fluid sortable" id="registroA">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Registrar Aula</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="insertar">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Aula</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" placeholder="232" name="aula">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="selectError">Ubicación</label>
								<div class="controls">
								  <select id="selectVideo" data-rel="chosen" name="ubicacion">
									<option value="---">---</option>
									<option value="Dabar">Dabar</option>
									<option value="kabai">Kabai</option>
									<option value="Athelia">Athelia</option>
									<option value="Humanitas">Humanitas</option>
								  </select>
								</div>
							</div>
							<div class="form-actions">
								<button type="submit" class="btn btn-primary">Registrar</button>
							  </div>
							</fieldset>
						  </form>
					
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
			<div class="row-fluid sortable visible" id="consultaA" >
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white search"></i><span class="break"></span>Consultar Aulas</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="consultar_aulas">
						  <fieldset>
						  	<div class="control-group">
								<label class="control-label" for="focusedInput">Aula</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" placeholder="232" name="aula2">
								</div>
							</div>
						   <div class="control-group">
								<label class="control-label" for="selectError">Ubicación</label>
								<div class="controls">
								  <select id="selectVideo2" data-rel="chosen" name="ubicacion2">
									<option value="---">---</option>
									<option value="Dabar">Dabar</option>
									<option value="kabai">Kabai</option>
									<option value="Athelia">Athelia</option>
									<option value="Humanitas">Humanitas</option>
								  </select>
								</div>
							</div>
							<div class="form-actions">
							  <input type="submit" class="btn btn-primary" value="Consultar" name="consultarcondicion"></input>
							  <input type="submit" class="btn btn-primary" value="Consulta General" name="consultartodo"></input>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->

			<div class="row-fluid sortable visible" id="tablaA">	
				<div class="box span12">
					<div class="box-header">
						<h2><i class="halflings-icon white align-justify"></i><span class="break"></span>Aulas</h2>
					</div>
					<div class="box-content">
						<table class="table table-bordered table-striped table-condensed">
							  <thead>
								  <tr>
									  <th>Aula</th>
									  <th>Ubicacion</th>
									  <th>Disponibilidad</th>
									  <th>Tiene Equipo fisico</th>
								  </tr>
							  </thead>   
							  <tbody>
								
							  	<?php
							  		foreach ($listaraula as $aula) {
							  			?>
							  				<tr>
							  					<td class="ocultar id_salon"><?php echo $aula['id_salon']; ?></td>
							  					<td class="center aula"><?php echo $aula['aula']; ?></td>
												<td class="center ubicacion"><?php echo $aula['ubicacion']; ?></td>
												<td class="center disponibilidad">

												<?php 
														if($aula['disponibilidad']=='1'){
															?>
																<span class="label label-success">Si</span>
															<?php
														}else{
															?>
																<span class="label label-important">No</span>
															<?php
														} 
													?>
													
												</td>

												<td class="center equipo _fisico">

												<?php 
														if($aula['equipo_fisico']=='1'){
															?>
																<span class="label label-success">Si</span>
															<?php
														}else{
															?>
																<span class="label label-important">No</span>
															<?php
														} 
													?>
													
												</td>

											</tr>  

							  			<?php
							  		}
							  ?>

							  </tbody>
						 </table>  
						 <div class="pagination pagination-centered">
						  <ul>
							<li><a href="#">Anterior</a></li>
							<li class="active">
							  <a href="#">1</a>
							</li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">Siguiente</a></li>
						  </ul>
						</div>     
					</div>
				</div><!--/span-->
			</div><!--/row-->
			
    

		</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		<!--Modificar Aulas-->	
		<div class="modal hide fade" id="myModalEditarAula">
			<div class="modal-body">
				<div class="row-fluid sortable">
				<div class="box span12">
				<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Modificar Aula</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal">
						  <fieldset>
							  <div class="control-group">
									<label class="control-label" for="focusedInput">Aula</label>
									<div class="controls">
									  <input class="input-xlarge disabled" id="disabledInput" type="text" placeholder="201K" disabled="">
									</div>
								</div>
							   <div class="control-group">
									<label class="control-label" for="selectError">Ubicación</label>
									<div class="controls">
									  <select id="selectModificar" data-rel="chosen">
										<option>Dabar</option>
										<option>Kabai</option>
										<option>Athelia</option>
										<option>Humanitas</option>
									  </select>
									</div>
								</div>  
							</fieldset>
						</form> 
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
			
			</div>
			<div class="modal-footer">
				<a href="#" class="btn" data-dismiss="modal">Cancelar</a>
				<a href="#" class="btn btn-warning">Editar</a>
			</div>
		</div>	
		<!--Eliminar Aula-->
		<div class="modal hide fade" id="myModalEliminarAula">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">×</button>
				<h3>Eliminar Aula</h3>
			</div>
			<div class="modal-body">
				<p>Esta Seguro que dese eliminar el aula 323 Dabar?</p>
			</div>
			<div class="modal-footer">
				<a href="#" class="btn" data-dismiss="modal">Cancelar</a>
				<a href="#" class="btn btn-danger">Aceptar</a>
			</div>
		</div>
	<div class="modal fade" id="myModal">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div id="modal_header" class="modal-header btn-danger">
		        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
		        <h4 class="modal-title">titulo</h4>
		      </div>
		      <div class="modal-body" >
		        <p id="modal_body">mensaje</p>
		      </div>
		      <div class="modal-footer">
		        <a href="#" class="btn" data-dismiss="modal">Aceptar</a>
		      </div>
		    </div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
	<div class="clearfix"></div>
	
	<footer>

		<p>
			<span style="text-align:left;float:left">&copy; 2017</span>
		</p>

	</footer>
	
	<!-- start: JavaScript-->

		<script src="<?php echo base_url(); ?>public/js/jquery-1.9.1.min.js"></script>
	<script src="<?php echo base_url(); ?>public/js/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="<?php echo base_url(); ?>public/js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="<?php echo base_url(); ?>public/js/jquery.ui.touch-punch.js"></script>
	
		<script src="<?php echo base_url(); ?>public/js/modernizr.js"></script>
	
		<script src="<?php echo base_url(); ?>public/js/bootstrap.min.js"></script>
	
		<script src="<?php echo base_url(); ?>public/js/jquery.cookie.js"></script>
	
		<script src='<?php echo base_url(); ?>public/js/fullcalendar.min.js'></script>
	
		<script src='<?php echo base_url(); ?>public/js/jquery.dataTables.min.js'></script>

		<script src="<?php echo base_url(); ?>public/js/excanvas.js"></script>
	<script src="<?php echo base_url(); ?>public/js/jquery.flot.js"></script>
	<script src="<?php echo base_url(); ?>public/js/jquery.flot.pie.js"></script>
	<script src="<?php echo base_url(); ?>public/js/jquery.flot.stack.js"></script>
	<script src="<?php echo base_url(); ?>public/js/jquery.flot.resize.min.js"></script>
	
		<script src="<?php echo base_url(); ?>public/js/jquery.chosen.min.js"></script>
	
		<script src="<?php echo base_url(); ?>public/js/jquery.uniform.min.js"></script>
		
		<script src="<?php echo base_url(); ?>public/js/jquery.cleditor.min.js"></script>
	
		<script src="<?php echo base_url(); ?>public/js/jquery.noty.js"></script>
	
		<script src="<?php echo base_url(); ?>public/js/jquery.elfinder.min.js"></script>
	
		<script src="<?php echo base_url(); ?>public/js/jquery.raty.min.js"></script>
	
		<script src="<?php echo base_url(); ?>public/js/jquery.iphone.toggle.js"></script>
	
		<script src="<?php echo base_url(); ?>public/js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="<?php echo base_url(); ?>public/js/jquery.gritter.min.js"></script>
	
		<script src="<?php echo base_url(); ?>public/js/jquery.imagesloaded.js"></script>
	
		<script src="<?php echo base_url(); ?>public/js/jquery.masonry.min.js"></script>
	
		<script src="<?php echo base_url(); ?>public/js/jquery.knob.modified.js"></script>
	
		<script src="<?php echo base_url(); ?>public/js/jquery.sparkline.min.js"></script>
	
		<script src="<?php echo base_url(); ?>public/js/counter.js"></script>
	
		<script src="<?php echo base_url(); ?>public/js/retina.js"></script>

		<script src="<?php echo base_url(); ?>public/js/custom.js"></script>
	<!-- end: JavaScript-->
	<?php  $validacion = $this->session->flashdata('cargarAulas');
		if($validacion=='true'){
			?>
				<script type="text/javascript">
					$(".texto>a").text("Consultar ");
					$("#registroA").css("display","none");
					$("#consultaA").css("display","block");
					$("#tablaA").css("display","block");
				</script>
			<?php
		}
		$validacion_formulario = $this->session->flashdata('formulario');
		if($validacion_formulario=='false'){
			?>
				<script type="text/javascript">
				  $('.modal-title').text("Información");	
				  $('#modal_body').text("Debe de llenar todos los campos solicitados!");	
				  $('#myModal').modal('show');
				</script>
			<?php
		}else if($validacion_formulario=='true'){
			?>
				<script type="text/javascript">
				  $('#modal_header').removeClass('btn-danger');
				  $('#modal_header').addClass('btn-primary');
				  $('.modal-title').text("InformaciÃ³n");	
				  $('#modal_body').text("Registro exitoso!");	
				  $('#myModal').modal('show');
				</script>
			<?php
		}else if($validacion_formulario=='1'){
			?>
				<script type="text/javascript">
				  $('.modal-title').text("Información");	
				  $('#modal_body').text("El aula ya esta registrado!");	
				  $('#myModal').modal('show');
				</script>
			<?php
		}
	?>
	
</body>
</html>