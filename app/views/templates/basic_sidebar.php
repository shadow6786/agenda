<aside>
	
	<!-- end search box -->
	<!-- aside item: Mini profile -->
	<div class="my-profile">
		<span class="first-child">Welcome <strong>Victoria!</strong></span>
		<span><a href="javascript:void(0);">Edit Profile </a></span>
	</div>
	<div class="divider"></div>
	<!-- end aside item: Mini profile -->
	<!-- aside item: Menu -->
	<div class="sidebar-nav-fixed">
		<ul class="menu ctAccordion" id="accordion-menu-js" style="">
			<li class="">
				<a href="javascript:void(0)" class="head"><i class="icon-off"></i>Seguridad</a>
				<ul style="display: none;">
					<li class="closed">
						<a href="usuarios" >Usuarios</a>
					</li>
					<li class="closed">
						<a href="auth/permisos">Permisos</a>
					</li>
					<li class="closed">
						<a href="auth/roles">Roles</a>
					</li>
				</ul>
			</li>
			<li class="">
				<a href="inbox.html"><i class="icon-envelope"></i>Inbox</a>
			</li>
			<li class="">
				<a href="javascript:void(0)" class="head"><i class="icon-check"></i>Forms</a>
				<ul style="display: none;">
					<li class="closed">
						<a href="forms.html">Form Elements</a>
					</li>
					<li class="closed">
						<a href="validation.html">Validation</a>
					</li>
					<li class="closed">
						<a href="wizard.html">Wizards</a>
					</li>
				</ul>
			</li>
			<li class="">
				<a href="javascript:void(0)" class="head"><i class="icon-user"></i>Interface</a>
				<ul style="display: none;">
					<li class="closed">
						<a href="interface.html">Interface Elements</a>
					</li>
					<li class="closed">
						<a href="buttons.html">Buttons &amp; Icons</a>
					</li>
					<li class="closed">
						<a href="tables.html">Tables</a>
					</li>
				</ul>
			</li>
			<li class="">
				<a href="javascript:void(0)" class="head"><i class="icon-signal"></i>Charts &amp; Graphs</a>
				<ul style="display: none;">
					<li class="closed">
						<a href="basic_charts.html">Basic Charts</a>
					</li>
					<li class="closed">
						<a href="adv_charts.html">Advanced Charts</a>
					</li>
					<li class="closed">
						<a href="raphael.html">Raphael Engine</a>
					</li>
				</ul>
			</li>
			<li class="">
				<a href="widgets.html"><i class="icon-refresh"></i>Smart Widgets</a>
			</li>
			<li class="">
				<a href="javascript:void(0)" class="head"><i class="icon-plus"></i>Bonus</a>
				<ul style="display: none;">
					<li class="closed">
						<a href="invoice.html">Invoice</a>
					</li>
					<li class="closed">
						<a href="typography.html">Typography</a>
					</li>
					<li class="closed">
						<a href="chat.html">Chat</a>
					</li>
				</ul>
			</li>
		</ul>
	</div>
	<div class="divider"></div>
	<!-- end aside item: Menu -->
	<div class="aside-buttons">
		<a href="<?= base_url('auth/logout')?>" title="Salir del sistema" class="btn btn-info">Cerrar sesión</a>
	</div>
</aside>
<?php /*//print_r($menu);
				foreach ($menu as $menuid ) {
					//print_r($menuid);
					echo $menuid["padre"];
					?>
					<li <?php if($opm_padre == "Seguridad"){echo ' class="current-open"';}?>>
					<?php
					$hijo = $menuid["hijos"];
					foreach ($hijo as $row) {
						echo "nombre ".$row["nombre_opm"]."<br />";
						echo "ruta ".$row["ruta_opm"]."<br />";
					}
					echo "<hr>";
					?>
					</li>
					<?php
				}
 * 
 */
			?>