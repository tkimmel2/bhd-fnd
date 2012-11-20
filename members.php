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
print_header('members');
?>

	<div class="row">
		<div class="eight columns">
			<h3 style="text-align: center;">Member Organizations</h3>
			<p style="text-align:center;"><b> A-D | <a href="#">C-H</a> | <a href="#">I-M</a> | <a href="#">N-Q</a> | <a href="#">R-U</a> | <a href="#">V-Z</a> </b></p>
				<ul class="accordion">
				  <li class="active">
				    <div class="title">
				      <h5>AAA Organization Name</h5>
				    </div>
				    <div class="content">
				      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				    </div>
				  </li>
				  <li>
				    <div class="title">
				      <h5>BBB Organization Name</h5>
				    </div>
				    <div class="content">
				      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				    </div>
				  </li>
				  <li>
				    <div class="title">
				      <h5>CCC Organization Name</h5>
				    </div>
				    <div class="content">
				      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				    </div>
				  </li>
				</ul>
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

