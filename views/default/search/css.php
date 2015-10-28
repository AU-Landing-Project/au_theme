<?php
/**
 * Elgg Search css
 *
 */
?>

/**********************************
Search plugin
***********************************/
.elgg-search-header {
	display: block;
	position: relative;
	margin-bottom: 15px;
}
.elgg-search input[type=text] {
	width: 200px;
	border: 1px solid #BBBBBB;
	border-radius: 4px;
	background-color: white;
	background-position: 2px -916px;
	color: #b93d21;
	position: absolute; right: 1px;
}
.elgg-search input[type=submit] {
	display: none;
}
.search-list li {
	padding: 5px 0 0;
}
.search-heading-category {
	margin-top: 20px;
	color: #666;
}

.search-highlight {
	background-color: #BBDAF7;
}
.search-highlight-color1 {
	background-color: #BBDAF7;
}
.search-highlight-color2 {
	background-color: #A0FFFF;
}
.search-highlight-color3 {
	background-color: #FDFFC3;
}
.search-highlight-color4 {
	background-color: #CCC;
}
.search-highlight-color5 {
	background-color: #08A7E7;
}
@media (max-width: 600px) {

	.elgg-search-header input[type=text]{
		position: relative; right: 1px;
		
	}
}
