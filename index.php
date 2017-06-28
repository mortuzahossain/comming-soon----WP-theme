<?php
global $cs;
$header_text		= $cs['heading_text'];
$sub_header_text	= $cs['sub_heading_text'];
$logo				= $cs['logo-img']['url'];
$background			= $cs['back-img']['url'];
$footer_text		= $cs['footer_text'];
$show_footer		= $cs['show_footer'];
$mailchimp			= $cs['subscribe_link'];

?>


<!DOCTYPE html>
<html style="background: url(<?php echo $background; ?>);margin: 0;background-position: center;background-size: cover;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>" />
	
	<title><?php bloginfo( 'title' ); ?></title>
	<?php wp_head(); ?>
</head>
<body>
	<div class="wrapper">
		<div class="logo">
			<img src="<?php echo $logo; ?>" alt="GraphBerry coming soon theme"> 
		</div>

		<h1><?php echo $header_text; ?></h1>
		<h2><?php echo $sub_header_text; ?></h2>

		<ul class="countdown">
            <li>
                <span class="days">00</span>
                <p class="days_ref">days</p>
            </li>
            <li>
                <span class="hours">OO</span>
                <p class="hours_ref">hours</p>
            </li>
            <li>
                <span class="minutes">00</span>
                <p class="minutes_ref">minutes</p>
            </li>
            <li>
                <span class="seconds">00</span>
                <p class="seconds_ref">seconds</p>
            </li>
        </ul>
		
		<form action="<?php echo $mailchimp; ?>" method="post" id="mc-form">
			<input id="mc-email" type="email" placeholder="Email Address">
			<input type="submit" value="Keep me updated">
			<label for="mc-email" class="mc-label"></label>
		</form>
		
		<ul class="social">

			<?php 
			   	if (isset($cs['contact_social']) && !empty($cs['contact_social'])) {
			   		foreach ($cs['contact_social'] as $single_social) {
			   			?>
			   			    <li><a href="<?php echo $single_social['url'];?>"><i class="icon-<?php echo $single_social['title'];?>"></i></a></li>
			   			<?php
			   			if ($single_social['sort'] == 5) break;
			   		}
			   	} else {
			?>
			<li><a href=""><i class="icon-facebook"></i></a></li>
			<li><a href=""><i class="icon-twitter-1"></i></a></li>
			<li><a href=""><i class="icon-behance"></i></a></li>
			<li><a href=""><i class="icon-dribbble-1"></i></a></li>
			<li><a href=""><i class="icon-pinterest-circled"></i></a></li>
			<li><a href=""><i class="icon-gplus-1"></i></a></li>
			
			<?php } ?>

		</ul>
		<?php if($show_footer=='1'){ ?>
		<div class="copyright">
			<p><?php echo $footer_text; ?></p>
		</div>
		<?php } ?>
	</div>
	<?php wp_footer(); ?>
</body>
</html>