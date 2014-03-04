<?php

global $config;
$config->environment = 'development';

defined('SITE_PATH')  ? null : define('SITE_PATH', '/path/to/site');
defined('SITE_URI')   ? null : define('SITE_URI', 'http://example.tld');