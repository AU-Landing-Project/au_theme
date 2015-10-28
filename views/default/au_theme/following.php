<?php

$user = elgg_get_page_owner_entity();

$title = elgg_echo('friends:owned', array($user->name));

$body = elgg_list_entities_from_relationship(array(
    'type' => array('user'),
    'relationship' => 'friend',
    'relationship_guid' => $user->getGUID(),
    'inverse_relationship' => false,
    'full_view' => false
));

echo "<br><br>";
echo elgg_view_module('main', $title, $body, $vars);