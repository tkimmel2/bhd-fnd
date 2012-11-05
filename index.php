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
			<h3>Home Page Main</h3>

			<!-- Grid Example -->
			<div class="row">
				<div class="twelve columns">
					<div class="panel">
						<p>Here we have a main content area.  This can be one large section as demonstrated here, or broken up into colums like this:</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="six columns">
					<div class="panel">
						<p>Here is a left column...</p>
					</div>
				</div>
				<div class="six columns">
					<div class="panel">
						<p>...together with a right column</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="four columns">
					<div class="panel">
						<p>Or maybe a left...</p>
					</div>
				</div>
				<div class="four columns">
					<div class="panel">
						<p>...a middle...</p>
					</div>
				</div>
				<div class="four columns">
					<div class="panel">
						<p>...and a right column?</p>
					</div>
				</div>
			</div>

			<h3>Pages can also have Tabs, like this:</h3>
			<dl class="tabs">
				<dd class="active"><a href="#simple1">Roasted Chicken</a></dd>
				<dd><a href="#simple2">Ingredients</a></dd>
				<dd><a href="#simple3">Preperation</a></dd>
			</dl>

			<ul class="tabs-content">
				<li class="active" id="simple1Tab"><img src="images/rstChx.jpg"></li>
				<li id="simple2Tab">
					<ul class="ingredientsList">
                      <li class="ingredient">1 (3- to 3 1/2-lb) chicken, quartered (see cooks' note, below) and wing tips discarded</li>
                      <li class="ingredient">2 tablespoons olive oil</li>
                      <li class="ingredient">2 1/4 teaspoons salt</li>
                      <li class="ingredient">1 3/4 teaspoons black pepper</li>
                      <li class="ingredient">1 lb boiling potatoes, cut into 1-inch wedges</li>
                      <li class="ingredient">2 zucchini (1 lb total), quartered lengthwise, then cut crosswise into 2 1/2- to 3-inch lengths</li>
                      <li class="ingredient">1 medium onion, halved lengthwise, then cut crosswise into 1/4-inch-thick slices</li>
                      <li class="ingredient">1/2 cup reduced-sodium chicken broth</li>
                      <li class="ingredient">1 tablespoon fresh lemon juice</li>
                    </ul>
                </li>
				<li id="simple3Tab">
					<p>Put oven rack in upper third of oven and preheat oven to 500&#176;F.
		            </p>
		            <p>Pat chicken dry, then toss with 1 tablespoon oil, 1 1/4 teaspoons salt, and 1 teaspoon pepper in a bowl. Arrange chicken, skin sides up, without pieces touching, in roasting pan, leaving a 2-inch border around edges of pan.
		            </p>
		            <p>Toss potatoes, zucchini, and onion with remaining tablespoon oil, remaining teaspoon salt, and remaining 3/4 teaspoon pepper in same bowl, then spread in 1 layer around chicken, arranging zucchini skin sides up. Stir together broth and lemon juice and pour into pan around chicken and vegetables.
		            </p>
		            <p>Roast, uncovered, until chicken is pale golden and cooked through, about 30 minutes.</p>
		            <p>Remove pan from oven and preheat broiler. Broil chicken and vegetables 3 inches from heat until chicken is golden brown, about 6 minutes. Serve chicken and vegetables with pan juices.</p> 
            </li>
			</ul>


		</div>

		<div class="four columns">
			<h4>Some Sidebar Content</h4>
			<p>Here we have some sidebar content: site navigation, calendars, or something else</p>

			<h4>More Sidebar Content</h4>
			<p>Our Partners (or other links?)</p>
			<ul class="disc">
				<li><a href="http://google.com">Google is Great!</a><br />Search the whole internets.</li>
				<li><a href="http://espn.com">ESPN is on Drupal</a><br />Did you know that some of the largest sites on the net run Drupal?</li>
				<li><a href="http://drupal.org">Drupal Community</a><br />Want to know more about Drupal?  Check out the Drupal.org homepage.</li>
			</ul>
		</div>
	</div>

<?php include('footer.php'); ?>

