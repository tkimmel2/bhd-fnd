<?php
function print_header($active = 'home') {
?>
<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
	<meta charset="utf-8" />

	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width" />

	<title>Welcome to the BrickHouse</title>

	<!-- Included CSS Files -->
	<link rel="stylesheet" href="stylesheets/app.css">

	<script src="javascripts/foundation/modernizr.foundation.js"></script>

</head>
<body>

	<div class="row">
		<div class="twelve columns">
			<h2>Site Title</h2>
			<p>Site Slogan goes here.</p>

      <!-- main navigation -->
      <ul class="nav-bar">
        <li<?php if($active == 'home') { ?> class="active"<?php } ?>><a href="index.php">Home</a></li>
        <li class="<?php if(stripos($active, 'events') !== FALSE) { ?>active <?php } ?>has-flyout">
          <a href="calendar_page.php">Events</a>
          <a href="#" class="flyout-toggle"><span> </span></a>
          <ul class="flyout">
            <li<?php if($active == 'upcoming_events') { ?> class="active"<?php } ?>><a href="upcoming_events.php">Upcoming Events</a></li>
            <li<?php if($active == 'events_calendar') { ?> class="active"<?php } ?>><a href="calendar_page.php">Event Calendar</a></li>
            <li<?php if($active == 'events3') { ?> class="active"<?php } ?>><a href="#">Sub Nav 3</a></li>
            <li<?php if($active == 'events4') { ?> class="active"<?php } ?>><a href="#">Sub Nav 4</a></li>
            <li<?php if($active == 'events5') { ?> class="active"<?php } ?>><a href="#">Sub Nav Item 5</a></li>
          </ul>
        </li>
        <li class="<?php if(stripos($active, 'news') !== FALSE) { ?>active <?php } ?>has-flyout">
          <a href="news.php">News</a>
          <a href="#" class="flyout-toggle"><span> </span></a>
          <ul class="flyout">
            <li<?php if($active == 'news1') { ?> class="active"<?php } ?>><a href="#">Sub Nav Item 1</a></li>
            <li<?php if($active == 'news2') { ?> class="active"<?php } ?>><a href="#">Sub Nav Item 2</a></li>
          </ul>
        </li>
        <li class="<?php if(stripos($active, 'resources') !== FALSE) { ?>active <?php } ?>has-flyout">
          <a href="#">Resources</a>
          <a href="#" class="flyout-toggle"><span> </span></a>
          <ul class="flyout">
            <li<?php if($active == 'resources1') { ?> class="active"<?php } ?>><a href="#">Sub Nav Item 1</a></li>
            <li<?php if($active == 'resources2') { ?> class="active"<?php } ?>><a href="#">Sub Nav Item 2</a></li>
          </ul>
        </li>
        <li<?php if($active == 'contact_us') { ?> class="active"<?php } ?>><a href="contact_us.php">Contact Us</a></li>
      </ul>
      
		</div>
	</div>
<?php
}
?>
