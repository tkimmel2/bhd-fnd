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
print_header('exnews');
?>

	<div class="row">
		<div class="eight columns">
			<h3>Example News Story</h3>
			
			<!-- Grid Example -->
			<div class="row">
				<div class="twelve columns">
				<p> This is a placeholder for the some news. Lorem ipsum sinet dolor est. Lorem ipsum sinet dolor est. Lorem ipsum sinet dolor est. Lorem ipsum sinet dolor est. Lorem ipsum sinet dolor est. Lorem ipsum sinet dolor est. Nulla libero metus, pulvinar et hendrerit id, pharetra in eros. Integer interdum tortor sit amet odio mollis volutpat. Nullam vitae lorem orci, vel tempus libero. Mauris quis aliquam lacus.</p>
				<p>Lorem ipsum sinet dolor est. Lorem ipsum sinet dolor est. Lorem ipsum sinet dolor est. Lorem ipsum sinet dolor est. Lorem ipsum sinet dolor est. Lorem ipsum sinet dolor est.Nulla libero metus, pulvinar et hendrerit id, pharetra in eros. Integer interdum tortor sit amet odio mollis volutpat. Nullam vitae lorem orci, vel tempus libero. Mauris quis aliquam lacus.</p>
				<p>Lorem ipsum sinet dolor est. Lorem ipsum sinet dolor est. Lorem ipsum sinet dolor est. Lorem ipsum sinet dolor est. Lorem ipsum sinet dolor est. Lorem ipsum sinet dolor est.</p>
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
				<h4>Featured News Teaser</h4>
				<p>Cras luctus, massa quis mollis sollicitudin, tortor nisi tincidunt tortor, id volutpat massa mi ac nibh. Maecenas egestas convallis vehicula. Aliquam erat volutpat...</p>
			</div>			
			</div>	
		</div>
	</div>

<?php include('footer.php'); ?>

