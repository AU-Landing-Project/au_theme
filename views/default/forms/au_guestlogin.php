<?php
/**
 * small horizontal login form for guests
 */
?>
<label><?php echo elgg_echo('username'); ?></label>
<?php 
  $options = array(
    'name' => 'username',
    'class' => 'login-textarea',
  );
  
  echo elgg_view('input/text', $options);
  
  echo "&nbsp;";
?>
<label><?php echo elgg_echo('password'); ?></label>
<?php 
  $options = array(
    'name' => "password",
    'class' => "login-textarea",
  );
  
  echo elgg_view('input/password', $options);
  
  echo elgg_view('input/submit', array('value' => elgg_echo('login')));