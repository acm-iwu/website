<?php
  require_once 'common/pages.php';

  if (!isset($page)) {
    throw new RuntimeException('You must set the page before including the header.');
  }
?>

<!doctype html>
<html>
  <head>
    <title><?= get_page_title($page) ?></title>
  </head>

  <body>
