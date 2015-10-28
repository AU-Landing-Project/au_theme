<div class="headerlinks">

<?php

/*
 * 	Build non-logged in menu
 */

echo '<span class="highlight">' . elgg_echo('au_theme:loginhelp') . '</span><br>';

  // link to AU - shown always
  echo elgg_view('output/url', array(
  	'text' => elgg_echo('au_theme:au'),
    'href' => "http://www.athabascau.ca/",
    'class' => 'pagelinks',
    'title' => elgg_echo('au_theme:au'),
    'is_trusted' => TRUE,
  ));
      
  echo "&nbsp;|&nbsp;";
  
  // link to AU CAS login - only shown if cas plugin is enabled
  if(elgg_is_active_plugin('au_cas_auth')){
    // grab casurl
    $url = current_page_url();
    if ($_SESSION['last_forward_from']) {
      $url = $_SESSION['last_forward_from'];
    }
    $cas_url = au_cas_auth_build_cas_url($url, FALSE);
  
    echo elgg_view('output/url', array(
  		'text' => elgg_echo('au_theme:au:login'),
    	'href' => $cas_url,
    	'class' => 'pagelinks bold',
    ));
      
    echo "&nbsp;|&nbsp;";
  }
  
  
  // toggle login form for guests
?>
	<a class="guestlogin" href="javascript:void(0);"><?php echo elgg_echo('au_theme:au:guest'); ?></a>

<div class="guestloginform">
	<?php 
	  echo elgg_view_form('au_guestlogin', array('action' => 'action/login'));
	?>
</div>

<script>
$(document).ready(function() {
	$(".headerlinks .guestlogin").click(function() {
		$(".guestloginform").slideToggle('slow');
	});
});
</script>
</div><!-- /headerlinks -->