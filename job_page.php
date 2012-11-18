<?php
include('header.php');
// valid arguments: 
//  1st Level:
//   home (default)
//   events
//   news
//   resources
//  2nd Level:
//   events*
//   news*
//   resources*
print_header('exjob');
?>

	<div class="row">
		<div class="eight columns">
			<h3>Example Job</h3>
			
			<!-- Grid Example -->
			<div class="row">
				<div class="twelve columns">
				<p> This is a placeholder for the job's details.  Lorem ipsum sinet dolor est. Lorem ipsum sinet dolor est. Lorem ipsum sinet dolor est. Lorem ipsum sinet dolor est. Lorem ipsum sinet dolor est. Lorem ipsum sinet dolor est.</p>
				<p> This is a placeholder for the job's details.  Lorem ipsum sinet dolor est. Lorem ipsum sinet dolor est. Lorem ipsum sinet dolor est. Lorem ipsum sinet dolor est. Lorem ipsum sinet dolor est. Lorem ipsum sinet dolor est.</p>
				<p> This is a placeholder for the job's details.  Lorem ipsum sinet dolor est. Lorem ipsum sinet dolor est. Lorem ipsum sinet dolor est. Lorem ipsum sinet dolor est. Lorem ipsum sinet dolor est. Lorem ipsum sinet dolor est.</p>
				
				<h4>For more information:</h4>
				<p><b>Contact Name:</b> John Smith</p>
				<p><b>Contact Phone:</b> 555.555.5555</p>
				<p><b>Contact Email:</b> JS@examplecompany.com</p>
				<p><b>Application:</b> applications@examplecompany.com</p>
				</div>
			</div>
		</div>

		<div class="four columns">
			<h4>Search Jobs by Keyword</h4>
			<input type="text" placeholder="Keyword(s)" />
			<div class="panel">
				<h4>Featured Jobs</h4>
				<p>Cras luctus, massa quis mollis sollicitudin, tortor nisi tincidunt tortor, id volutpat massa mi ac nibh. Maecenas egestas convallis vehicula. Aliquam erat volutpat. </p>
			</div>			
			</div>	
		</div>
	</div>

<?php include('footer.php'); ?>

