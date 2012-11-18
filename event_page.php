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
print_header('Event_1');
?>

	<div class="row">
		<div class="eight columns">
			<h3>Event 1</h3>
			
			<!-- Grid Example -->
			<div class="row">
				<div class="twelve columns">
				<p> This is some event information.  Lorem ipsum sinet dolor est. Lorem ipsum sinet dolor est. Lorem ipsum sinet dolor est. Lorem ipsum sinet dolor est. Lorem ipsum sinet dolor est. Lorem ipsum sinet dolor est.
					<!-- Row Layout for forms -->
					<form>
					  <label>Register for Event:</label>
					  <input type="text" placeholder="Name" />
					  <div class="row">
					    <div class="six columns">
					      <input type="text" placeholder="Email" />
					    </div>
					    <div class="six columns">
					      <input type="text" placeholder="Phone Number" />
					    </div>
					  </div>
					  <textarea placeholder="Message"></textarea>
					</form>
				</div>
			</div>
		</div>

		<div class="four columns">
			<h4>Search Events by Keyword</h4>
			<input type="text" placeholder="Keyword(s)" />
			<div class="panel">
				<h4>More Upcoming Events</h4>
				<p>Cras luctus, massa quis mollis sollicitudin, tortor nisi tincidunt tortor, id volutpat massa mi ac nibh. Maecenas egestas convallis vehicula. Aliquam erat volutpat. </p>
			</div>			
			</div>	
		</div>
	</div>

<?php include('footer.php'); ?>

