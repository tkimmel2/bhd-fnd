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
print_header('contact_us');
?>

	<div class="row">
		<div class="eight columns">
			<h3>Contact Us</h3>
			
			<!-- Grid Example -->
			<div class="row">
				<div class="twelve columns">
				<p> If you're trying to contact us, you can reach us at (555) 555-5555 during normal business hours.  If you'd like to have us contact you, please fill out the form below and a representative will call or email you.
					<!-- Row Layout for forms -->
					<form>
					  <label>Contact Information:</label>
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

