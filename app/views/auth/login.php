<div id="login-logo">

</div>
<div id="form-login" class="jarviswidget login">
	<header>
		<h2>Autorización</h2>
	</header>
	<div id="msg" class="widget alert alert-info adjusted" style="display: <?php if($err != ""){echo "none";}else{echo "block";}?>">
		<i class="cus-exclamation"></i>
		<strong>Utilice su usuario y contraseña para ingresar al sistema.</strong>
	</div>
	<div class="widget alert alert-error adjusted" style="display: <?= $errcss;?>;">
		<i class="cus-error"></i>
		<strong><?= $err;?></strong>
	</div>
	<!-- content goes here -->
	<div id="main-content">
		<form class="form-signin" id="form_login" action="<?= base_url('auth/login'); ?>" method="post">
			<div class="control-group">
				<input name="usuario" type="text" class="input-block-level" autofocus placeholder="Usuario" value="<?php echo set_value('usuario'); ?>">
				<?= form_error('usuario');?>
			</div>
			
			<div class="control-group">
				<input name="password" type="password" class="input-block-level" placeholder="Contraseña" >
				<?= form_error('password');?>
			</div>
				
			<div class="control-group no-border">
				<div style="text-align: right;">
					<input class="btn btn-primary" type="submit" value="Ingresar" id="login-btn">
				</div>
			</div>
		</form>
	</div>
</div>
