<?php

date_default_timezone_set('America/Chicago');

require_once dirname(__DIR__) . "/vendor/autoload.php";
require_once dirname(__DIR__) . "/src/settings.php";

foreach ($setupSettings as $key => $value) {
    define(strtoupper($key), $value);
}

$currentPath = $_SERVER['REQUEST_URI'];
$htmlAttributes = [
  'body_classes' => [],
];

if ($currentPath == '/') {
  $head_title = 'Gavin Vaught';
  ob_start();
  include('templates/header.php');
  $page_top = ob_get_contents();
  ob_end_clean();
  ob_start();
  include('templates/homepage.php');
  $page = ob_get_contents();
  ob_end_clean();
  $page_bottom = '';
  $body_class = 'homepage';
}

include "templates/html.php";