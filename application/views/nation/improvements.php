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
		            		<th>Max</th>
		          		</tr>
		        	</thead>
		        	<tbody>
		          		<?php foreach ($improvement_info->result() as $item) {
		          			echo '<tr>
		          						<td>' . $item->improvement_name . '</td>
		          						<td>' . $nation_info->nation_currency . $item->improvement_cost . '</td>
		          						<td> <a href="' . site_url("inations/improvement?id=" . $item->id) . '">Purchase</a></td>
		          						<td width="20px" text-align="center">' . $item->improvement_max_quantity . '</td>
		          				 </tr>';
		          			}
		          		?>
		        	</tbody>
		      	</table>
			</div>
		</div>
	</section>