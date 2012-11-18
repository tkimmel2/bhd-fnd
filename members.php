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
			<h3>Member Organizations</h3>
				<ul class="accordion">
				  <li class="active">
				    <div class="title">
				      <h5>Organization Name Here</h5>
				    </div>
				    <div class="content">
				      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				    </div>
				  </li>
				  <li>
				    <div class="title">
				      <h5>Example Organization 2</h5>
				    </div>
				    <div class="content">
				      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				    </div>
				  </li>
				  <li>
				    <div class="title">
				      <h5>Example Organization 3</h5>
				    </div>
				    <div class="content">
				      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				    </div>
				  </li>
				</ul>
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

