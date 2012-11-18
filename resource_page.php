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
print_header('exresource');
?>

	<div class="row">
		<div class="eight columns">
			<h3>Example Resource Details</h3>
			
			<!-- Grid Example -->
			<div class="row">
				<div class="twelve columns">
				<p> This is a placeholder for information about a given 'resource' (linked to from the resource master list). Lorem ipsum sinet dolor est. Lorem ipsum sinet dolor est. Lorem ipsum sinet dolor est. Lorem ipsum sinet dolor est. Lorem ipsum sinet dolor est. Lorem ipsum sinet dolor est. Nulla libero metus, pulvinar et hendrerit id, pharetra in eros. Integer interdum tortor sit amet odio mollis volutpat. Nullam vitae lorem orci, vel tempus libero. Mauris quis aliquam lacus.</p>
				<p>Lorem ipsum sinet dolor est. Lorem ipsum sinet dolor est. Lorem ipsum sinet dolor est. Lorem ipsum sinet dolor est. Lorem ipsum sinet dolor est. Lorem ipsum sinet dolor est.Nulla libero metus, pulvinar et hendrerit id, pharetra in eros. Integer interdum tortor sit amet odio mollis volutpat. Nullam vitae lorem orci, vel tempus libero. Mauris quis aliquam lacus.</p>
				<p>Lorem ipsum sinet dolor est. Lorem ipsum sinet dolor est. Lorem ipsum sinet dolor est. Lorem ipsum sinet dolor est. Lorem ipsum sinet dolor est. Lorem ipsum sinet dolor est.</p>
				</div>
			</div>
		</div>

		<div class="four columns">
			<h4>Subscribe to our Newsletter</h4>
			<input type="text" placeholder="Your Email" />
			<div class="panel">
				<a href="member_signup.php"><h4>Become a Member</h4></a>
				<p>Cras luctus, massa quis mollis sollicitudin, tortor nisi tincidunt tortor, id volutpat massa mi ac nibh. Maecenas egestas convallis vehicula. Aliquam erat volutpat...</p>
			</div>			
			</div>	
		</div>
	</div>

<?php include('footer.php'); ?>

