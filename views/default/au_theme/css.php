<?php
/**
 * CSS Aalborg theme
 *
 * @package AalborgTheme
 * @subpackage UI
 */
?>
/* <style> /**/

/* ******************
	main site stuff
*********************/

body {
	margin:0 auto;
	padding:0;
	background: #d2d2d2 url(<?php echo elgg_get_site_url(); ?>mod/au_theme/graphics/background.png) repeat-x top left; 
}



/* Fluid width container that does not wrap floats */
.elgg-body,
.elgg-col-last {
	display: block;
	width: auto;
	word-wrap: break-word;
	overflow: hidden;
	
	/* IE 6, 7 */
	zoom:1;
	*overflow:visible;
}

/* Header overrides */

a.elgg-heading-site img{
	float: left;
	position: relative; top: -6px;
}

div.elgg-page-header div.headerlinks {
	display: inline-block;
	float: right;
	text-align: right;
	margin: 40px 20px 15px 0px;
	color: #FFF;
}

div.headerlinks a, div.headerlinks a:hover {
	color: #FFF;
}

div.headerlinks .highlight {
	background-color: red;
	font-style: italic;
}

div.headerlinks .guestloginform {
	display: none;
}

div.headerlinks .guestloginform input.login-textarea {
	width: 150px;
}



/* Footer */

#footerLogo {
	display: inline-block;
	float: right;
	padding-top: 16px;
}

#footer_links {
	float: left;
	width: 750px;
	padding-top: 14px;
}

#footer_links .elgg-menu-footer-default {
	float: right;
	text-transform: uppercase;
	color: #000000;
	font-size: 80%;
}

#footer_links .elgg-menu-footer-default a{
	color: #B93D21;
}



/* ***************************************
	MISC
*****************************************/
#dashboard-info {
	border: 1px solid #DCDCDC;
	margin: 0 10px 15px;
}
.elgg-sidebar input[type=text],
.elgg-sidebar input[type=password] {
	box-shadow: inset 0 2px 6px rgba(0, 0, 0, 0.1);
}
.elgg-module .elgg-list-river {
	border-top: none;
}
.elgg-module .elgg-list {
	margin-top: 0;
}


/* ***************************************
	TOPBAR MENU DROPDOWN
*****************************************/
/*
.elgg-menu-item-au-logo {
	background: url(<?php echo elgg_get_site_url(); ?>mod/au_theme/graphics/logotopbar_notext.png) no-repeat;
}
*/
.elgg-topbar-dropdown {
	padding-bottom: 8px; /* forces button to reach bottom of topbar */
}
.elgg-menu-topbar > li > .elgg-topbar-dropdown:hover {
	color: #EEE;
	cursor: default;
}
.elgg-menu-topbar-alt ul {
	position: absolute;
	display: none;
	background-color: #FFF;
	border: 1px solid #DEDEDE;
	text-align: left;
	top: 33px;
	margin-left: -100px;
	width: 180px;

	border-radius: 0 0 3px 3px;
	box-shadow: 1px 3px 5px rgba(0, 0, 0, 0.25);
}
.elgg-menu-topbar-alt li ul > li > a {
	text-decoration: none;
	padding: 10px 20px;
	background-color: #FFF;
	color: #444;
}
.elgg-menu-topbar-alt li ul > li > a:hover {
	background-color: #F0F0F0;
	color: #444;
}
.elgg-menu-topbar-alt > li:hover > ul {
	display: block;
}
.elgg-menu-item-account > a:after {
	content: "\bb";
	margin-left: 6px;
}
/* ***************************************
	RESPONSIVE
*****************************************/
html {
	font-size: 100%;
	-webkit-text-size-adjust: 100%;
	-ms-text-size-adjust: 100%;
}
.elgg-button-nav {
	display: none;
	font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
	color: #FFF;
	float: left;
	padding: 14px 18px;
}
.elgg-button-nav:hover {
	color: #FFF;
	text-decoration: none;
	background-color: #B93D21;
}
.elgg-button-nav .icon-bar {
	background-color: #F5F5F5;
	border-radius: 1px 1px 1px 1px;
	box-shadow: 0 1px 0 rgba(0, 0, 0, 0.25);
	display: block;
	height: 2px;
	width: 22px;
}
.elgg-button-nav .icon-bar + .icon-bar {
	margin-top: 3px;
}

/* deal with tinymce in widget context 
	
	makes the text area fit to the container in widgets
*/


.elgg-widget-edit .mceToolbar td {
	    display:table-row;
	    float: left;
}
	
.elgg-widget-edit .mceToolbar td:nth-of-type(11){
   		clear: left;
}


@media only screen and (min-width: 800px) {
    table.mceLayout, textarea.richEditor {
       width: 100% !important;
    }
}

@media (max-width: 1030px) {
	.elgg-menu-topbar-default > li:first-child a {
		margin-left: 0;
	}
	.elgg-menu-topbar-alt > li > a.elgg-topbar-dropdown {
		margin-right: 0;
	}
	.elgg-page-footer {
		padding: 0 20px;
	}
}
@media (max-width: 880px) {
	.elgg-page-default {
		min-width: 0;
	}
	.elgg-layout-one-sidebar .elgg-main {
		width: 96%;
		padding: 1% 2% 1% 2%;
	}
	.elgg-layout-two-sidebar .elgg-main {
		width: 100%;
	}
	.elgg-layout-one-sidebar {
		width: 100%;
		float: left;
	}
	.elgg-layout-two-sidebar {
		width: 100%;
		float: left;
	}
	.elgg-sidebar {
		border-left: none;
		border-top: 1px solid #DCDCDC;
		width: 100%;
		float: left;
		padding: 27px 0 20px 0;
		margin: 0 0 10px 0;

		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
	}
	.elgg-sidebar-alt {
		display: none;
	}
	.elgg-menu-footer {
		float: none;
		text-align: center;
	}
	.elgg-river-item input[type=text] {
		width: 100%;
	}
	.elgg-river-item input[type=submit] {
		margin: 5px 0 0 0;
	}
	/***** CUSTOM INDEX ******/
	.elgg-col-1of2 {
		width: 100%;
	}
	.prl {
		padding-right: 0;
	}
	/***** WIDGETS ******/
	.elgg-col-1of3,
	.elgg-col-2of3,
	#elgg-widget-col-1,
	#elgg-widget-col-2,
	#elgg-widget-col-3,
	#elgg-widget-col-4,
	#elgg-widget-col-5
	#elgg-widget-col-6 {
		width: 100%;
		min-height: 0 !important;
	}
	.elgg-module-widget {
		margin: 0 0 15px;
	}
	.custom-index-col1 > .elgg-inner,
	.custom-index-col2 > .elgg-inner {
		padding: 0;
	}
}

@media (min-width: 727px) {
	.elgg-nav-collapse {
		display: block !important;
	}
}
@media (max-width: 726px) {

	.elgg-page-header > .elgg-inner h1 {
		padding-top: 10px;
	}
	.elgg-heading-site, .elgg-heading-site:hover {
		font-size: 1.6em;
	}
	.elgg-button-nav {
		cursor: pointer;
		display: block;
	}
	.elgg-nav-collapse {
		clear: both;
		display: none;
		width: 100%;
	}
	#login-dropdown a {
		padding: 10px 18px;
	}
	.elgg-menu-site {
		float: none;
		position: absolute;
	}
	.elgg-menu-site > li > ul {
		position: relative; /*menu fix */
		display: block;
		left: 0;
		margin-left: 0;
		border: none;
		box-shadow: none;
		/*background: none; */
	}
	.elgg-more,
	.elgg-menu-site-more li,
	.elgg-menu-site > li > ul {
		width: auto;
	}
	.elgg-menu-site ul li {
		float: none;
		margin: 0;
	}
	.elgg-more > a {
		border-bottom: 1px solid #294E6B;
	}
	.elgg-menu-site > li {
		border-top: 1px solid #294e6c;
		clear: both;
		float: none;
		margin: 0;
		width: 180px;
	}
	/*menu builder fix */
	.elgg-menu-site > li  ul {
		top:0;
		background-color: maroon;
	}
	
	#elgg-nav-collapse li {
		background-color: maroon;
	}
	
	.elgg-menu-site > li:first-child {
		border-top: none;
	}
	.elgg-menu-site > li > a {
		padding: 10px 18px;
	}
	.elgg-menu-site-more > li > a {
		color: #FFF;
		/*background: none;*/
		padding: 10px 18px 10px 10px;
	}
	.elgg-menu-site-more > li:last-child > a,
	.elgg-menu-site-more > li:last-child > a:hover {
		border-radius: 0;
	}
	.elgg-menu-site-more > li.elgg-state-selected > a,{
		
		/*do nothing */
	}
	.elgg-menu-site-more > li > a:hover {
		background-color: #B93D21;
		color: #FFF;
	}
	/* fixes for menu builder */
	
	
	.elgg-menu .elgg-child-menu {
		display:none;
		position:relative;
	}
/*	.elgg-menu .elgg-child-menu > li{
		position: relative;
		display: block;
	
	} */
	.menu-builder-access-0,.menu-builder-access-1,.menu-builder-access-2, .menu-builder-access-3,
	.menu-builder-access-4, .menu-builder-access-5 {
		position:absolute;
		background-color: grey;
		clear:both;
		display:block;
		width: 180px;
	}

	/* tinymce fixes */
	table.mceLayout, textarea.tinyMCE {
	    width: 100% !important;
	}
	.mceToolbar td {
	    display:table-row;
	    float: left;
	}
	.mceToolbar td:nth-of-type(11){
   		clear: left;
	}
	/*widget manager fixes */
	.widget_manager_widgets_lightbox_wrapper {
		width:50%;
	}
	
}


@media (max-width: 600px) {
	.groups-profile-fields {
		float: left;
		padding-left: 0;
	}
	#profile-owner-block {
		border-right: none;
		width: auto;
	}
	#profile-details {
		display: block;
		float: left;
	}
	#groups-tools > li {
		width: 100%;
		margin-bottom: 20px;
	}
	#groups-tools > li:nth-child(odd) {
		margin-right: 0;
	}
	#groups-tools > li:last-child {
		margin-bottom: 0;
	}
	.elgg-menu-entity, .elgg-menu-annotation {
		margin-left: 0;
	}
	.elgg-menu-entity > li, .elgg-menu-annotation > li {
		margin-left: 0;
		margin-right: 15px;
	}
	.elgg-subtext {
		float: left;
		margin-right: 15px;
	}
}


/* feedback form for feedback plugin */
#feedBackContent h1 {
    padding-top:10px;
    padding-left:10px;
    padding-bottom:10px;
    color: white;
    background-color: maroon;
    font-style: none;
    font-family: default;
    text-shadow: none;
    text-decoration: none;
}

#feedbackSuccess {
  padding: 5px;
  border: 1px solid #555555;
  background-color: #cecece;
  border-radius: 5px;
}


<?php
	
	/* add in extra CSS from admin settings
		this allows admin to override any CSS on the fly
	*/
	echo elgg_get_plugin_setting ('au_theme_tweakcss','au_theme');
	
