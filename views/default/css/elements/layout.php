<?php
/**
 * Page Layout
 *
 * Contains CSS for the page shell and page layout
 *
 * Default layout: 990px wide, centered. Used in default page shell
 *
 * @package Elgg.Core
 * @subpackage UI
 */
?>
/* <style> /**/

/* ***************************************
	PAGE LAYOUT
*************************************** */
/***** DEFAULT LAYOUT ******/
<?php // the width is on the page rather than topbar to handle small viewports ?>
.elgg-page-default {
	min-width: 800px;
}
.elgg-page-default .elgg-page-header > .elgg-inner {
	max-width: 990px;
	margin: 0 auto;
	min-height: 65px;
}
.elgg-page-default .elgg-page-navbar > .elgg-inner {
	max-width: 990px;
	margin: 0 auto;
	height: auto;
	border-top-left-radius: 1em;
	border-top-right-radius: 1em;	
}
.elgg-page-default .elgg-page-body > .elgg-inner {
	max-width: 990px;
	margin: 0 auto;
}
.elgg-page-default .elgg-page-footer > .elgg-inner {
	max-width: 990px;
	margin: 0 auto;
	padding: 5px 0;
	border-top: 1px solid #DEDEDE;
}

/***** TOPBAR ******/
.elgg-page-topbar {
	background: #424242;
	border-top: 1px solid #424242;
	border-bottom: 1px solid #000000;
	padding: 0 20px;
	position: relative;
	height: 32px;
	z-index: 9000;
	display: none;
}

/***** PAGE MESSAGES ******/
.elgg-system-messages {
	position: fixed;
	top: 32px;
	right: 20px;
	max-width: 500px;
	z-index: 2000;
}
.elgg-system-messages li {
	margin-top: 10px;
}
.elgg-system-messages li p {
	margin: 0;
}

/***** PAGE HEADER ******/
.elgg-page-header {
	padding: 5px 20px 10px;
	position: relative;
}
.elgg-page-header > .elgg-inner {
	position: relative;
}
/***** PAGE NAVBAR ******/
.elgg-page-navbar {
	padding: 0 20px;
	position: relative;
	background: transparent;

}
.elgg-page-navbar > .elgg-inner {
	position: relative;
	border-bottom: 1px solid #EBEBEB;
	background: #d2d2d2;
	
}

/* Header overrides */

a.elgg-heading-site img{
	float: left;
}

div.elgg-page-header div.headerlinks {
	display: inline-block;
	float: right;
	text-align: right;
	margin: 40px 20px 15px 0px;
	color: white;
}

div.headerlinks a, div.headerlinks a:hover {
	color: white;
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



/***** PAGE BODY LAYOUT ******/
.elgg-page-body {
	padding: 0 20px;
	margin:0 auto;
	/*background: #d2d2d2 url(<?php echo elgg_get_site_url(); ?>mod/au_theme/graphics/background.png) repeat-x top left; */
}

.elgg-page-body > .elgg-inner {
	background: #ffffff;
	margin-left: 10px; 
}


.elgg-layout {
	min-height: 360px;
	height:100%;
}
.elgg-widgets {
	float: right;
}
.elgg-sidebar {
	position: relative;
	padding: 10px 25px 10px 5px;
	float: right;
	width: 19%;
	margin: 0;
	border-left: 1px solid #EBEBEB;
	background: #eeeeee;
	height: 100%;
}

.elgg-sidebar-alt {
	position: relative;
	padding: 20px 10px 10px 10px;
	float: left;
	width: 16.161616%;
	margin: 0 30px 0 0;
	border-right: 1px solid #EBEBEB;
	background: #eeeeee;
	height: 100%;
}
/* hack to make sidebar appear to extend to footer 
	note that it's a compromise - if the main area
	is short, there's a grey space below it.
*/

.elgg-layout-one-sidebar {
	width: 100%;
	min-height: 360px;
	background-color: #EEEEEE;
}

/* end hack */

/* indent a little for single column page */
.elgg-layout-one-column{	
	padding-left: 5px;
}	


.elgg-main {
	position: relative;
	min-height: 360px;
	padding: 12px 0 10px 0;
	background: white;
}
.elgg-main > .elgg-head {
	padding-bottom: 5px;
	border-bottom: 1px solid #EBEBEB;
	margin-bottom: 10px;
}
.elgg-layout-one-sidebar .elgg-main {
	float: left;
	width: 69%;
	/*margin-left: 10px;*/
	padding: 15px 35px 10px 30px;
	height: 100%;
}
.elgg-layout-two-sidebar .elgg-main {
	float: left;
	width: 50.101010%;
	margin-left: 10px;
	height: 100%;
}

/***** PAGE FOOTER ******/
.elgg-page-footer {
	color: #999;
	padding: 0 10px;
	position: relative;
	clear: both;
}

.elgg-page-footer a:hover {
	color: maroon;
}
