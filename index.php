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
print_header('home');
?>

	<div class="row">
		<div class="eight columns">
			<h3>Featured Content Area</h3>

			<!-- Grid Example -->
			<div class="row">
				<div class="twelve columns">
					<div class="panel">
						<p>This area is used for featured content.  This area can be used to automatically display the latest news postings.</p><br/><br/><br/>
					</div>
				</div>
			</div>
			
			<h3>About Our Organization</h3>
			<div class="row">
				<div class="twelve columns">
					<div class="panel">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tristique convallis lorem, et cursus orci convallis quis. Aenean volutpat mi eget quam tristique quis malesuada lectus interdum. Donec volutpat ornare elementum. Proin lorem ligula, congue ac pharetra in, rutrum ac magna. Nunc vulputate vulputate justo et eleifend. In hac habitasse platea dictumst. Integer semper ultricies nulla at tincidunt. Fusce vitae consectetur sapien. Suspendisse vel neque neque, sit amet tempus velit. Phasellus at erat ipsum. Sed tincidunt aliquam sagittis. Integer augue risus, semper laoreet tincidunt nec, dignissim vel sapien. Nunc eget libero tellus. Integer feugiat ante eros, et elementum ante. Proin vitae enim quam, ac consequat justo. Morbi malesuada aliquet ipsum sit amet posuere.</p>
					</div>
				</div>
			</div>			
		</div>

		<div class="four columns">
			<h4>Upcoming Events</h4>
				<div class="panel">
					<p>Here we can display some upcoming events</p><br/><br/><br/><br/>
					<br/><br/>				
				</div>
			<h4>Sign up for our Newsletter</h4>
			<input type="text" placeholder="Your Email" />
			<h4>Become a Member</h4>
				<div class="panel">
					<p>Interested in becoming a member?  Click here to find out about our organization's membership program</p>
				</div>			
		</div>
	</div>

<?php include('footer.php'); ?>

