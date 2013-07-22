<?php

if (! defined('ABSPATH'))
  die('Please do not directly access this file');

include_once(get_template_directory() . '/functions.php');

define('BWD_PATH', get_stylesheet_directory());
define('BWD_LIB', CRTC_PATH . '/lib');
define('BWD_FUNCTIONS', CRTC_LIB . '/functions');
define('BWD_CLASSES', CRTC_LIB . '/classes');

include_once(BWD_FUNCTIONS . '/bwd_html5.php');
include_once(BWD_CLASSES . '/bwd_loop.php');

include_once(BWD_FUNCTIONS . '/bwd_header_html.php');
include_once(BWD_FUNCTIONS . '/bwd_sidebars.php');
include_once(BWD_FUNCTIONS . '/bwd_footer_html.php');



