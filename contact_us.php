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
			<h4>Sign up for our Newsletter</h4>
			<input type="text" placeholder="Your Email" />
			<div class="panel">
				<h4>Become a Member</h4>
				<p>Interested in becoming a member?  Click here to find out about our organization's membership program</p>
			</div>			

			<div class="panel">
				<h4>Featured Member</h4>
				<p>Showcase a 'featured member' of your organization here...  or something else.</p>
			</div>	
		</div>
	</div>

<?php include('footer.php'); ?>

