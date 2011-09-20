<?php
// ----- / Default mottos -----
// Define default actions to print
$actions = array();

// Add actions to print 
$actions[] = 'Clear Cache'; 
$actions[] = 'run Coder';
$actions[] = 'Clear Cache';
$actions[] = 'Apply patch';
$actions[] = 'Clear Cache';
$actions[] = 'ask in #drupal';
$axtions[] = 'use Drush';

// ----- / User mottos -----
// Grab path and convert into GET.
// This is a request using a clean URL. Extract the path from REQUEST_URI.
$request_path = strtok($_SERVER['REQUEST_URI'], '?');
$base_path_len = strlen(rtrim(dirname($_SERVER['SCRIPT_NAME']), '\/'));

// Unescape and strip $base_path prefix, leaving q without a leading slash.
$path = substr(urldecode($request_path), $base_path_len + 1);

// Explode path
$path_parts = array();
$path_parts = explode('/', $path);

// ----- / Select motto for printing -----
// Check if path follows pattern for homemade mottos
if ($path_parts[0] == 'and' && isset($path_parts[1])) {
  $user_text = $path_parts[1];
  
  // clean up user text for printing
  $filtered_user_text = htmlspecialchars($user_text);
  $user_motto = str_replace('-',' ',$filtered_user_text);
  $current_action = $user_motto;  
} 
  else 
{  
  // Select an action to print
  $rand_keys = array_rand($actions, 1);
  $current_action = $actions[$rand_keys];
}