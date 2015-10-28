<?php
/**
 * CSS buttons
 *
 * @package Elgg.Core
 * @subpackage UI
 */
?>
/* <style> /**/

/* **************************
	BUTTONS
************************** */
.elgg-button {
	font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
	color: #FFF;
	width: auto;
	padding: 5px 12px;
	cursor: pointer;
	background: #8A2715 url(<?php echo elgg_get_site_url(); ?>_graphics/button_graduation.png) repeat-x left 10px;
	border: 1px solid #111; /* Fallback */
	border: 1px solid rgba(0, 0, 0, 0.2);

	border-radius: 3px;
	box-shadow: inset 0 0 1px rgba(255, 255, 255, 0.6);
}
a.elgg-button {
	padding: 6px 12px;
}

.elgg-button-submit {
	background:  #8A2715 url(<?php echo elgg_get_site_url(); ?>_graphics/button_graduation.png) repeat-x left 10px;
	/*none repeat scroll 0 0 #8A2715*/
    border: 1px solid #111;
    color: #FFFFFF;
    cursor: pointer;
   	font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
}

.elgg-button-submit:hover {
	background:  maroon url(<?php echo elgg_get_site_url(); ?>_graphics/button_graduation.png) repeat-x left 10px;
	*text-decoration: none; 
	color: #FFF;	
	border: 1px solid #111;	
      font-weight: bold;
}

.elgg-button:hover,
.elgg-button:focus {
	background: maroon url(<?php echo elgg_get_site_url(); ?>_graphics/button_graduation.png) repeat-x left 10px;
	*text-decoration: none; 
	color: #FFF;
	border: 1px solid #111;	
     font-weight: bold;
}
.elgg-button-submit.elgg-state-disabled {
	background: #999;
	border-color: #999;
	cursor: default;
}
.elgg-button-cancel {
	color: #FFF;
	background: #8A2715 url(<?php echo elgg_get_site_url(); ?>_graphics/button_graduation.png) repeat-x left 10px;
	border: 1px solid #999;
}

.elgg-button-cancel:hover {
	color: #FFF;
	background: maroon url(<?php echo elgg_get_site_url(); ?>_graphics/button_graduation.png) repeat-x left 10px;
	border: 1px solid #111;
     font-weight: bold;
}

.elgg-button-action:hover,
.elgg-button-action:focus {
	background: maroon url(<?php echo elgg_get_site_url(); ?>_graphics/button_graduation.png) repeat-x left 10px;
	text-decoration: none;
	border: 1px solid #111;
     font-weight: bold;
}

.elgg-button-delete {
	color: #FFF;
	text-decoration: none;
	border: 1px solid #111;
	background: maroon url(<?php echo elgg_get_site_url(); ?>_graphics/button_graduation.png) repeat-x left 10px;
	text-shadow: 1px 1px 0px black;
}

.elgg-button-delete:hover,
.elgg-button-delete:focus {
	background: maroon url(<?php echo elgg_get_site_url(); ?>_graphics/button_graduation.png) repeat-x left 10px;
	background-position: left 10px;
	text-decoration: none;
	border: 1px solid #111;	
     font-weight: bold;
}

.elgg-button-dropdown {
	padding:3px 6px;
	text-decoration:none;
	display:block;
	font-weight:bold;
	position:relative;
	margin-left:0;
	color: white;
	border:1px solid #F8718A;
	
	-webkit-border-radius:4px;
	-moz-border-radius:4px;
	border-radius:4px;
	
	-webkit-box-shadow: 0 0 0;
	-moz-box-shadow: 0 0 0;
	box-shadow: 0 0 0;
	
	/*background-image:url(<?php echo elgg_get_site_url(); ?>_graphics/elgg_sprites.png);
	background-position:-150px -51px;
	background-repeat:no-repeat;*/
}
.elgg-button-dropdown:hover,
.elgg-button-dropdown:focus,
.elgg-button-dropdown.elgg-state-active {
	color: #333;
	background: maroon url(<?php echo elgg_get_site_url(); ?>_graphics/button_graduation.png) repeat-x left 10px;
	text-decoration: none;
	font-weight: bold;
}
