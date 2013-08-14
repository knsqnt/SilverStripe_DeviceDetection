<?php

define('DEVICE_DETECTION_BASE', basename(dirname(__FILE__)));

if(class_exists('DataObject')) {
	
	DataObject::add_extension('DeviceDetectionExtension');
	
}
