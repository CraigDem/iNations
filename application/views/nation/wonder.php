	<style>
		.team_colour {
			border: black 1px solid;
		}
	</style>
	
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
		            		<th>Wonder</th>
		            		<th>Cost</th>
		            		<th>Purchase</th>
		          		</tr>
		        	</thead>
		        	<tbody>
		          		<?php
		          			echo '<tr>
		          						<td>' . $wonder_info->wonder_name . '</td>
		          						<td>' . $wonder_info->wonder_cost . '</td>
		          						<td> <a href="' . site_url("inations/wonder?id=" . $wonder_info->id) . '">Purchase</a></td>
		          				 </tr>';
		          		
		          		?>
		        	</tbody>
		      	</table>
			</div>
		</div>
	</section>