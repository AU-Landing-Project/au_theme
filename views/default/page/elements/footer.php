<?php
/**
 * Elgg footer
 * The standard HTML footer that displays across the site
 *
 * @package Elgg
 * @subpackage Core
 *
 */
?>

<div id="footerLogo">
<a href="http://www.athabascau.ca">
	<img src="<?php echo elgg_get_site_url(); ?>mod/au_theme/graphics/logo_footer.jpg" alt="AU logo" title="Go to AU home page">
</a>
</div>
<div id="footer_links">
<?php echo elgg_view_menu('footer', array('sort_by' => 'priority', 'class' => 'elgg-menu-hz')); ?>
</div>

<?php
  // fix overflow layout for widgets...
  // very hacky for group profiles - will fix in new theme hopefully
?>
<script>
$(document).ready( function () {
  if($('.elgg-page-context-group_profile .elgg-body.elgg-main').length){
   $('.elgg-page-context-group_profile .elgg-body.elgg-main').addClass('clearfix');
   
   var fieldsheight = $('.elgg-page-context-group_profile .groups-profile-fields').height();
   var imgheight = $('.elgg-page-context-group_profile .groups-profile .elgg-image').height();
   
   var maxheight = Math.max(fieldsheight, imgheight) + 15;
   
   $('.elgg-page-context-group_profile .groups-profile').css('height', maxheight+'px');
  }
});
</script>