<div id="page-content">
	<h1 id="page-header">Usuarios</h1>
	<div class="fluid-container">
		<div id="start" style="text-align: left;">
			<ul>
				<li>
					<a href="javascript:void(0)" title="">
						<img src="<?= base_url('static/img/start-icons/add-user.png') ?>" alt="">
						<span>Agregar Nuevo usuario</span> 
					</a>
				</li>
			</ul>
		</div>
		<div class="row-fluid">
			<article class="span12">
				<div class="jarviswidget" id="widget-id-0">
					<header>
						<h2>Usuarios del sistema AGENDA</h2>
						<span class="jarviswidget-loader"> </span>
					</header>
					<div>
						<div class="inner-spacer">
							<!-- content goes here
							<div class="widget alert alert-info adjusted">
							<button class="close" data-dismiss="alert">
							×
							</button>
							<i class="cus-exclamation"></i>
							<strong>Cool export features:</strong> This dynamtic table can also export <strong>PDF</strong> and <strong>Excel</strong> files, feel free to click on the PDF or Excel button to see the result
							</div>-->
							<table class="table table-striped table-bordered responsive" id="table_usuarios">
								<thead>
									<tr>
										<th>Nombres</th>
										<th>Apellido Paterno</th>
										<th>Apellido Materno</th>
										<th>Usuario</th>
										<th>Activo</th>
										<th>Acciones</th>
									</tr>
								</thead>
							</table>
						</div>
					</div>
				</div>
			</article>
		</div>
	</div>
</div>
<pre>
	<?php/* //print_r($menu);
		foreach ($menu as $menuid ) {
			//print_r($menuid);
			echo $menuid["padre"];
			$hijo = $menuid["hijos"];
			foreach ($hijo as $row) {
				echo "nombre ".$row["nombre_opm"]."<br />";
				echo "ruta ".$row["ruta_opm"]."<br />";
			}
		}
	*/?>
</pre>
<script>
	$(document).ready(function() {
    	function tableoptions() {
    	opt = {
                "bProcessing": true,
				"bServerSide": true,

				"aLengthMenu": [
                    [5, 15, 20, -1],
                    [5, 15, 20, "All"] 
                ],

                "iDisplayLength": 5,
                "sDom": "<'row-fluid dt-header'<'span6'l><'span6'<'DTTT_container'f>>r>t<'row-fluid dt-footer'<'span6'i><'span6'p>>",
                //"sDom" : "<'row-fluid dt-header'<'span6'l><'span6 hidden-phone'>r>t<'row-fluid dt-footer'<'span6 visible-desktop'i><'span6'p>>",
                "sPaginationType": "bootstrap",

                "oLanguage": {
                    "sLengthMenu": "_MENU_ Registros por pagina",
                    "oPaginate": {
                        "sPrevious": "Prev",
                        "sNext": "Next"
                    }
                },
				
				"sAjaxSource": '<?php echo base_url(); ?>admin/usuario/datatable',
				
                "aoColumnDefs": [{
                        'bSortable': false,
                        'aTargets': [5]
                    }
                ],

                "fnRowCallback": function( nRow, aData, iDisplayIndex ) {
            		$('td:eq(5)', nRow).html("<a href='<?= base_url("admin/usuario/edit")?>/"+aData[5]+"'>Edit</a>&nbsp;&nbsp;<a href='#' onClick='deleteuser("+ aData[5] +");'>Delete</a>");
            		return nRow;
        		},

                'fnServerData': function(sSource, aoData, fnCallback)
            	{
             		$.ajax
              		({
                		'dataType': 'json',
                		'type'    : 'POST',
                		'url'     : sSource,
                		'data'    : aoData,
                		'success' : fnCallback
              		});
            	}
           };
          return opt;
          }

		

		var oTable = $('#table_usuarios').dataTable(tableoptions());
    		
    	$('#sample_1_wrapper .dataTables_filter input').addClass("m-wrap medium"); // modify table search input
        $('#sample_1_wrapper .dataTables_length select').addClass("m-wrap xsmall"); // modify table per page dropdown
            
		// Load FORMS
		$('#initialloading').clone(true).append('#new_form');
		$('#new_form #initialloading').show();

		// Buttons
		$('#create_new_user').click(function(){
			$('#new_form').html("");
    		$('#edit_form').html("");
			$('#new_form').show();
			$('#new_form').load('<?= base_url("user/newform"); ?>', function() {
				$('#new_form #initialloading').hide();
			});
			$('#frm_edit_user').hide();
			$('#frm_new_user').slideDown(600);
		})

		$('#btn_cancel').click(function(){
			$('#frm_new_user').slideUp(600, function() {
    			//
  			});
		})

		$('#btn_save').click(function(){  
  			$('#frm_new_user').slideUp(600, function() {});
  			$('#new_form').load("user/save", $("#frmdata").serializeArray(), function(data) {
    				if(data == "1")
    				{
						msg('<strong>Success!</strong> The user has been created.','alert-success',4200);
						reloadlist();
    				} else {
    					$('#frm_new_user').slideDown(600, function() {});
    				}
  			});
  		});
			

		$('#btn_cancel_edit').click(function(){
			
			$('#frm_edit_user').slideUp(600, function() {
    			$('#create_edit_user').show();
  			});
		})

		$('#btn_save_edit').click(function(){
			  		$('#frm_edit_user').slideUp(600, function() { 
			  			// do somenthing after this
			  				});
			  		$('#edit_form').load("user/save", $("#frmdata").serializeArray(), function(data) {
    				if(data == "1")
    				{
			    			msg('<strong>Success!</strong> The user has been updated.','alert-success',4200);
			    			reloadlist();					
    				} else {
    					$('#frm_edit_user').slideDown(600);
    				}
  			});
		})
    });

    function deleteuser(idu){
    	n = new Date().getTime();
    	id = "alert_"+n;
    	$("#alerdiv").append('<div class="alert" id="'+id+'"><button class="close" data-dismiss="alert"></button><strong>Are you sure!</strong> Are you sure you want to delete this user? &nbsp; <div  class="btn red mini" onClick="' + "$('#" + id + "').hide();" + '"><i class="icon-remove"></i> Cancel</div> &nbsp; <div class="btn green mini" onClick="deleteu(\'' + id +'\',\''+ idu +'\');"><i class="icon-trash"></i> Delete</div></div>');
    	$('#'+id).delay(7600).slideUp('slow');
    }

    function edituser(idu){
    	$('#frm_new_user').hide();
    	$('#new_form').html("");
    	$('#edit_form').html($("#loadcontainer").html());
    	$('#frm_edit_user').slideDown(600);
    	$('#edit_form').show();
    	$('#edit_form').load('<?= base_url("user/edit");?>/'+idu);
    }

	function deleteu(id,idu)
	{
		$('#' + id).hide();
		$.post('<?= base_url("user/remove");?>/'+idu,"1=1",function(data){ 
	    		if(data == "1")
	    		{
	    			msg('<strong>Success!</strong> The user has been deleted.','alert-success',4200);
	    			reloadlist();	
	    		} else {
	    			msg('<strong>Error!</strong> An error prevent the user to be deleted.','alert-error',4200);
	    			reloadlist();
	    		}
    		});
    		
	}

    function reloadlist()
    {
		$('#table_usuarios').dataTable().fnDraw(false);
    }

    function msg(message,type, time)
    {
    	n = new Date().getTime();
    	id = "alert_"+n;
    	$("#alerdiv").append('<div class="alert '+type+'" id="'+id+'"><button class="close" data-dismiss="alert"></button>'+ message +'</div>');
    	$('#'+id).delay(time).slideUp('slow');
    }
</script>