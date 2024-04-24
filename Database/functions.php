<?php
function safe_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
function pr ($input) {
  echo "<pre>";
  print_r($input);
  echo "</pre>";
}