<?php
/**
 * Aalborg theme navbar
 * 
 */

// drop-down login
//echo elgg_view('core/account/login_dropdown');

?>

<a class="elgg-button-nav" rel="toggle" href="#elgg-nav-collapse" title="site menu">
	Menu
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</a>

<div class="elgg-nav-collapse" id="elgg-nav-collapse" title="menu">
	<?php echo elgg_view_menu('site'); ?>
</div>
