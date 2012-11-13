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
					<a href="about.php" style="display: block; text-align: right;">Learn more ➤</a>
				</div>
			</div>
			<h3>Recent News:</h3>
			<!-- Grid Example -->
			<div class="panel">
				<div class="row">
					<div class="twelve columns">
	          <h4>News Item Title</h4>
						<div>
	            <p>October 31, 2012 - Author Name</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="twelve columns">
	          <h4>News Item Title</h4>
						<div>
	            <p>October 23, 2012 - Author Name</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="twelve columns">
	          <h4>News Item Title</h4>
						<div>
	            <p>October 16, 2012 - Author Name</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
					</div>
				</div>
				<a href="news.php">All News Posts</a>
			</div>
		</div>

		<div class="four columns">
			<!-- Right sidebar -->
			<div class="panel">
				<h4>Upcoming Events</h4>
				<dl>
					<dt><strong>Nov 5, 2012</strong> - <a href="events-one.php">Event Name goes here</a></dt>
	       	<dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</dd>

					<dt><strong>Nov 9, 2012</strong> - <a href="events-one.php">Event Name</a></dt>
          <dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</dd>

					<dt><strong>Nov 15, 2012</strong> - <a href="events-one.php">Longer Event name which will wrap or be truncated</a></dt>
          <dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed.</dd>
				</dl>
				<a href="upcoming_events.php">All upcoming Events</a>
			</div>

			<div class="panel">
				<h4>Newsletter</h4>
				<p>Sign up for our newsletter below.</p>
				<input type="text" placeholder="Your Name" />
				<input type="text" placeholder="Your Email" />
				<a class="small radius button" href="#">Submit</a>
			</div>

			<div class="panel">
				<h4>Become a Member</h4>
				<p>Interested in becoming a member?  Click here to find out about our organization's membership program</p>
			</div>
		<!-- end Right sidebar -->
		</div>
	</div>

<?php include('footer.php'); ?>

