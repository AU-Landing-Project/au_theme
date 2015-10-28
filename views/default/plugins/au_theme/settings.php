
<label><?php echo elgg_echo('au_theme:settings:enable_help'); ?></label><br>

<?php
  $options = array(
    'name' => "params[enable_help]",
    'value' => $vars['entity']->enable_help ? $vars['entity']->enable_help : "false",
    'options' => array(
      elgg_echo('au_theme:yes') => 'true',
      elgg_echo('au_theme:no') => 'false',
    ),
  );
  
  echo elgg_view('input/radio', $options);
?>

<br><br>
<label><?php echo elgg_echo('au_theme:settings:help_url'); ?></label><br>
<?php 
  $options = array(
    'name' => "params[help_url]",
    'value' => $vars['entity']->help_url,
  );
  
  echo elgg_view('input/text', $options);
?>

<br />
<label><?php echo elgg_echo('au_theme:settings:enable_compact_title_buttons'); ?></label><br>
<?php
  $options = array(
    'name' => "params[enable_compact_title_buttons]",
    'value' => $vars['entity']->enable_compact_title_buttons ? $vars['entity']->enable_compact_title_buttons : "false",
    'options' => array(
      elgg_echo('au_theme:yes') => 'true',
      elgg_echo('au_theme:no') => 'false',
    ),
  );
  
  echo elgg_view('input/radio', $options);
?>

<br />
<label><?php echo elgg_echo('au_theme:settings:compact_title_button_threshold'); ?></label><br>
<?php
  $options = array(
    'name' => "params[compact_title_button_threshold]",
    'value' => $vars['entity']->compact_title_button_threshold,
  );
  
  echo elgg_view('input/text', $options);
?>


<br />
<label><?php echo elgg_echo('au_theme:settings:tweakcss'); ?></label><br>
<?php
  $options = array(
    'name' => "params[au_theme_tweakcss]",
    'value' => $vars['entity']->au_theme_tweakcss,
  );
  
  echo elgg_view('input/plaintext', $options);
?>

