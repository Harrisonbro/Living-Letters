<?php

global $config;
$config->environment = 'live';

defined('SITE_CSS')         ? null : define('SITE_CSS', SITE_URI . '/css');
defined('SITE_CSS_PATH')    ? null : define('SITE_CSS_PATH', SITE_PATH . '/css');
defined('SITE_IMAGES')      ? null : define('SITE_IMAGES', SITE_URI . '/images');
defined('SITE_IMAGES_PATH') ? null : define('SITE_IMAGES_PATH', SITE_PATH . '/images');
defined('SITE_JS')          ? null : define('SITE_JS', SITE_URI . '/js');
defined('SITE_JS_PATH')     ? null : define('SITE_JS_PATH', SITE_PATH . '/js');