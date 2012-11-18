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
print_header('member_signup');
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
					  <label>Organization Information:</label>
					  <input type="text" placeholder="Organization Name" />
					  <div class="row">
					    <div class="six columns">
					      <input type="text" placeholder="Website URL" />
					    </div>
					    <div class="six columns">
					      <input type="text" placeholder="Phone Number" />
					    </div>
					  </div>
					  <label>Mailing Address:</label>
					  <input type="text" placeholder="Street Address" />
					  <div class="row">
					    <div class="six columns">
					      <input type="text" placeholder="State" />
					    </div>
					    <div class="six columns">
					      <input type="text" placeholder="Zip Code" />
					    </div>
					  </div>
					  <label>Organization's Main Contact:</label>
					  <input type="text" placeholder="Contact Name" />
					  <div class="row">
					    <div class="six columns">
					      <input type="text" placeholder="Contact Phone" />
					    </div>
					    <div class="six columns">
					      <input type="text" placeholder="Contact Email" />
					    </div>
					  </div>
					  
					  <textarea placeholder="Message"></textarea>
					</form>
				</div>
			</div>
		</div>

		<div class="four columns">
			<h4>Search Member Organizations</h4>
			<input type="text" placeholder="Keyword(s)" />
			<div class="panel">
				<h4>Need Help?  Contact Us:</h4>
				<p>If you have any issues with signing up, please feel free to contact us at 555.555.5555</p>
			</div>			
		</div>
	</div>

<?php include('footer.php'); ?>

