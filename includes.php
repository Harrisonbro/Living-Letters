<?php

$config = new stdClass();
if(file_exists('config.local.php')) { require_once('config.local.php'); }
require_once('config.php');
