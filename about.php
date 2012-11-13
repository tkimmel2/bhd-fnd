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
			<h2>About Our Organization</h2>
			<div class="row">
				<div class="twelve columns">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tristique convallis lorem, et cursus orci convallis quis. Aenean volutpat mi eget quam tristique quis malesuada lectus interdum. Donec volutpat ornare elementum. Proin lorem ligula, congue ac pharetra in, rutrum ac magna. Nunc vulputate vulputate justo et eleifend. In hac habitasse platea dictumst. Integer semper ultricies nulla at tincidunt. Fusce vitae consectetur sapien. Suspendisse vel neque neque, sit amet tempus velit. Phasellus at erat ipsum. Sed tincidunt aliquam sagittis. Integer augue risus, semper laoreet tincidunt nec, dignissim vel sapien. Nunc eget libero tellus. Integer feugiat ante eros, et elementum ante. Proin vitae enim quam, ac consequat justo. Morbi malesuada aliquet ipsum sit amet posuere.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tristique convallis lorem, et cursus orci convallis quis. Aenean volutpat mi eget quam tristique quis malesuada lectus interdum. Donec volutpat ornare elementum. Proin lorem ligula, congue ac pharetra in, rutrum ac magna. Nunc vulputate vulputate justo et eleifend. In hac habitasse platea dictumst. Integer semper ultricies nulla at tincidunt. Fusce vitae consectetur sapien. Suspendisse vel neque neque, sit amet tempus velit. Phasellus at erat ipsum. Sed tincidunt aliquam sagittis. Integer augue risus, semper laoreet tincidunt nec, dignissim vel sapien. Nunc eget libero tellus. Integer feugiat ante eros, et elementum ante. Proin vitae enim quam, ac consequat justo. Morbi malesuada aliquet ipsum sit amet posuere.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tristique convallis lorem, et cursus orci convallis quis. Aenean volutpat mi eget quam tristique quis malesuada lectus interdum. Donec volutpat ornare elementum. Proin lorem ligula, congue ac pharetra in, rutrum ac magna. Nunc vulputate vulputate justo et eleifend. In hac habitasse platea dictumst. Integer semper ultricies nulla at tincidunt. Fusce vitae consectetur sapien. Suspendisse vel neque neque, sit amet tempus velit. Phasellus at erat ipsum. Sed tincidunt aliquam sagittis. Integer augue risus, semper laoreet tincidunt nec, dignissim vel sapien. Nunc eget libero tellus. Integer feugiat ante eros, et elementum ante. Proin vitae enim quam, ac consequat justo. Morbi malesuada aliquet ipsum sit amet posuere.</p>
				</div>
			</div>
			
		</div>

		<div class="four columns">
			<!-- Right sidebar -->
			<div class="panel">
				<h4>Member Directory</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tristique convallis lorem, et cursus orci convallis quis. Aenean volutpat mi eget quam tristique quis malesuada lectus interdum. </p>
				<a href="upcoming_events.php">View Member Directory</a>
			</div>

			<div class="panel">
				<h4>Become a Member</h4>
				<p>Interested in becoming a member?  Click here to find out about our organization's membership program</p>
			</div>
			
			<div class="panel">
				<h4>Newsletter</h4>
				<p>Sign up for our newsletter below.</p>
				<input type="text" placeholder="Your Name" />
				<input type="text" placeholder="Your Email" />
				<a class="small radius button" href="#">Submit</a>
			</div>
		<!-- end Right sidebar -->
		</div>
	</div>

<?php include('footer.php'); ?>

