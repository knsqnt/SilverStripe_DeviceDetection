<?php

require_once('Mobile_Detect.php');

class DeviceDetectionExtension extends DataExtension {
	
	// Phones only - without Tablets and Desktops
	public function PhoneDevice($__forceTrue = false) {
		
		$_return = (bool) $__forceTrue;
		
		if(!$_return) {
			
			$_detector = $this->theDetectorClass();
			$_return = $_detector->isMobile() && !$_detector->isTablet();
			
		}
		
		return $_return;
		
	}
	
	// Tablets only - without Phones and Desktops
	public function TabletDevice($__forceTrue = false) {
		
		$_return = (bool) $__forceTrue;
		
		if(!$_return) {
			
			$_detector = $this->theDetectorClass();
			$_return = $_detector->isTablet();
			
		}
		
		return $_return;
		
	}
	
	// Phones and Tablets - without Desktops
	public function MobileDevice() {
		
		$_return = (bool) $__forceTrue;
		
		if(!$_return) {
			
			$_detector = $this->theDetectorClass();
			$_return = $_detector->isMobile();
			
		}
		
		return $_return;
		
	}
	
	// Desktop only - without Phones and Tablets
	public function DesktopDevice() {
		
		$_return = (bool) $__forceTrue;
		
		if(!$_return) {
			
			$_detector = $this->theDetectorClass();
			$_return = !$_detector->isMobile();
			
		}
		
		return $_return;
		
	}
	
	// in case the thirdparty class changes
	private function theDetectorClass() {
		
		return new Mobile_Detect();
		
	}
	
}
