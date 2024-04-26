<?php
function safe_input($data) {
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  $data = trim($data);
  return $data;
}
function pr ($input) {
  echo "<pre>";
  print_r($input);
  echo "</pre>";
}
function prx ($input) {
  echo "<pre>";
  print_r($input);
  echo "</pre>";
  die();
}