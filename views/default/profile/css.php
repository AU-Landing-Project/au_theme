<?php
/**
 * Elgg Profile CSS
 *
 * @package Profile
 */
?>
/* <style> */
/* ***************************************
	Profile
*************************************** */
.profile {
	float: left;
	margin-bottom: 15px;
}
.profile .elgg-inner {
	border: 1px solid #DCDCDC;
	border-radius: 3px;
}
#profile-details {
	padding: 15px;
}

/* fix for profile manager */
#profile-details .pll {
	
	width:100%;	
}
#custom_fields_userdetails {
	width: 100%;
}


/*** ownerblock ***/
#profile-owner-block {
	float: left;
	border-right: 1px solid #DCDCDC;
	padding: 15px;
	clear:none;
}
#profile-owner-block .large {
	margin-bottom: 10px;
}
#profile-owner-block a.elgg-button-action {
	margin-bottom: 4px;
	display: table;
}
.profile-admin-menu {
	display: none;
}
.profile-admin-menu-wrapper a {
	display: block;
	margin: 3px 0 5px 0;
	padding: 2px 4px 2px 16px;
}
.profile-admin-menu-wrapper:before {
	content: "\00BB";
	float: left;
	padding-top: 1px;
}
.profile-admin-menu-wrapper li a {
	color: #FF0000;
	margin-bottom: 0;
}
.profile-admin-menu-wrapper a:hover {
	color: #000;
}
/*** profile details ***/
#profile-details .wire-status {
	margin-top: 10px;
	width: 80%;
}
#profile-details .odd {
	border-bottom: 1px solid #DCDCDC;
	margin: 0;
	padding: 5px 0;
}
#profile-details .even {
	border-bottom: 1px solid #DCDCDC;
	margin: 0;
	padding: 5px 0;
}
.profile-aboutme-title {
	margin: 0;
	padding: 5px 4px 2px 0;
}
.profile-aboutme-contents {
	padding: 0;
}
.profile-banned-user {
	border: 1px solid red;
	padding: 4px 8px;
	border-radius: 3px;
}
