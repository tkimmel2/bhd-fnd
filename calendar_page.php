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
print_header('Calendar Page');
?>

	<div class="row">
		<div class="eight columns">
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

		<div class="four columns">
			<h4>Some Sidebar Content</h4>
			<p>Here we have some sidebar content: site navigation, calendars, or something else</p>

			<h4>More Sidebar Content</h4>
			<p>Our Partners (or other links?)</p>
			<ul class="disc">
				<li><a href="http://google.com">Google is Great!</a><br />Search the whole internets.</li>
				<li><a href="http://espn.com">ESPN is on Drupal</a><br />Did you know that some of the largest sites on the net run Drupal?</li>
				<li><a href="http://drupal.org">Drupal Community</a><br />Want to know more about Drupal?  Check out the Drupal.org homepage.</li>
			</ul>
		</div>
	</div>

<?php include('footer.php'); ?>

