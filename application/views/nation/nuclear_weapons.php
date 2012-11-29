	<!--<section class="container">
		<div class="row">-->
			<div class="span10">
				<?php if ($this->session->flashdata('errormsg') != '') { ?>
					<div class="alert alert-error fade in" data-alert="alert">
						<a class="close" data-dismiss="alert" href="#">×</a>
						<span><?php echo $this->session->flashdata('errormsg'); ?></span>
					</div>
    			<?php } ?>
    			<table class="table table-bordered">
		        	<thead>
		          		<tr>
		            		<th colspan="2">Nuclear Weapons</th>
		          		</tr>
		        	</thead>
		        	<tbody>
		          		<tr>
		            		<td>Current Nuclear Weapons:</td>
		            		<td><?php echo $nation_info->nation_nuclear_weapons; ?></td>
		          		</tr>
		          		<tr>
		          			<td>Current Technology:</td>
		          			<td><?php echo $nation_info->nation_technology; ?></td>
		          		</tr>
		          		<tr>
		            		<td>Current Funds:</td>
		            		<td><?php echo $nation_info->nation_currency . $nation_info->nation_funds; ?></a></td>
		           		</tr>
		        	</tbody>
		      	</table>
			    	
                <div class="modal-footer"><?php if ($nation_info->nation_developed_nuclear_weapon == TRUE) 
		      			{ ?>
			      			<span class="alert alert-error pull-left">You can only develop one nuclear weapon a day.</span><a href="#" class="btn btn-primary" disabled>Develop Nuclear Weapon</a>
			      		<?php } else { ?>
			      			<a href="<?php echo site_url('/iNations/purchase_nuclear_weapon')?>" class="btn btn-primary">Develop Nuclear Weapon</a>
			      		<?php } ?>
                    <a href="<?php echo base_url(); ?>" class="btn" data-dismiss="modal">Close</a>
                </div>
		</div>
	</section>