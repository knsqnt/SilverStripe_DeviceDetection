<?php

define('DEVICE_DETECTION_BASE', basename(dirname(__FILE__)));

if(class_exists('SiteTree')) {
	
	SiteTree::add_extension('DeviceDetectionExtension');
	
}
