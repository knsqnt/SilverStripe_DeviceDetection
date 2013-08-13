<?php

require_once('Mobile_Detect.php');

class DeviceDetectionExtension extends DataExtension {
	
	// Phones only - without Tablets and Desktops
	public function PhoneDevice() {
		
		$_detect = new Mobile_Detect();
		
		return $_detect->isMobile() && !$_detect->isTablet();
		
	}
	
	// Tablets only - without Phones and Desktops
	public function TabletDevice() {
		
		$_detect = new Mobile_Detect();
		
		return $_detect->isTablet();
		
	}
	
	// Phones and Tablets - without Desktops
	public function MobileDevice() {
		
		$_detect = new Mobile_Detect();
		
		return $_detect->isMobile();
		
	}
	
	// Desktop only - without Phones and Tablets
	public function DesktopDevice() {
		
		$_detect = new MobileDevice();
		
		return !$_detect->isMobile();
		
	}
	
}
