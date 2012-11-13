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
print_header('events_calendar');
?>

	<div class="row">
		<div class="twelve columns">
			<h3>Calendar Page</h3>

			<!-- Grid Example -->
			<div class="row">
				<div class="twelve columns">
					<div class="panel">
						<img src="images/fullcalendar.png">
					</div>
				</div>
			</div>
		</div>
	</div>

<?php include('footer.php'); ?>

