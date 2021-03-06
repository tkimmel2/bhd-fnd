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
					  <label>Your Information:</label>
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
					  <p><a class="radius button" href="#">Submit</a></p>
					</form>
				</div>
			</div>
		</div>

		<div class="four columns">
			<h4>Newsletter</h4>
			<p>Sign up for our newsletter below.</p>
			<input type="text" placeholder="Your Name" />
			<input type="text" placeholder="Your Email" />
			<p><a class="small radius button" href="#">Submit</a></p>

			<div class="panel">
				<h4>Become a Member</h4>
				<p>Cras luctus, massa quis mollis sollicitudin, tortor nisi tincidunt tortor, id volutpat massa mi ac nibh. Maecenas egestas convallis vehicula. Aliquam erat volutpat.</p>
				<p><a class="small radius button" href="member_signup.php">Register Now</a></p>
			</div>

			<div class="panel">
				<h4>Featured Member</h4>
				<p>Showcase a 'featured member' of your organization here...  or something else.</p>
			</div>	
		</div>
	</div>

<?php include('footer.php'); ?>

