<div class="headerlinks">

<?php
/*
 * Build menu for when logged in
 */
  
  // help link, if set by the admin
  if (elgg_get_plugin_setting('enable_help', 'au_theme') == 'true') {
    $help_url = elgg_get_plugin_setting('help_url', 'au_theme');
    
    if(!empty($help_url)){
      echo elgg_view('output/url', array(
      	'text' => elgg_echo('au_theme:help'),
        'href' => $help_url,
        'class' => 'pagelinks',
        'is_trusted' => TRUE,
      ));
      
      echo "&nbsp;|&nbsp;";
    }
  }
  
  // feedback link, if set by the admin
  if (elgg_get_plugin_setting('enable_feedback', 'au_theme') == 'true') {
    $feedback_url = elgg_get_plugin_setting('feedback_url', 'au_theme');
    
    if(!empty($feedback_url)){
      echo elgg_view('output/url', array(
      	'text' => elgg_echo('au_theme:feedback'),
        'href' => "mailto:landing@athabascau.ca",
        'class' => 'pagelinks',
        'is_trusted' => TRUE,
      ));
      
      echo "&nbsp;|&nbsp;";
    }
  }

  
  // link to AU - shown always
  echo elgg_view('output/url', array(
  	'text' => elgg_echo('au_theme:au'),
    'href' => "http://www.athabascau.ca/",
    'class' => 'pagelinks',
    'title' => elgg_echo('au_theme:au'),
    'is_trusted' => TRUE,
  ));
      
  echo "&nbsp;|&nbsp;";
  
  
  // logout link - shown always
  echo elgg_view('output/url', array(
  	'text' => elgg_echo('logout'),
    'href' => "action/logout",
    'class' => 'pagelinks',
  ));
?>
</div><!-- /headerlinks -->