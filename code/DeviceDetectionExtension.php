<?php

require_once('Mobile_Detect.php');

class DeviceDetectionExtension extends DataExtension {
	
	private $forceToDevice = false; // (bool) false or (string) phone, tablet, desktop
	
	// Phones only - without Tablets and Desktops
	public function PhoneDevice() {
		
		$_detector = $this->getDetector();
		
		return $this->forceToDevice
		? $this->forceToDevice == 'phone'
		: $_detector->isMobile() && !$_detector->isTablet();
		
	}
	
	// Tablets only - without Phones and Desktops
	public function TabletDevice() {
		
		return $this->forceToDevice
		? $this->forceToDevice == 'tablet'
		: $this->getDetector()->isTablet();
		
	}
	
	// Phones and Tablets - without Desktops
	public function MobileDevice() {
		
		return $this->forceToDevice
		? $this->forceToDevice == 'mobile'
		: $this->getDetector()->isMobile();
		
	}
	
	// Desktop only - without Phones and Tablets
	public function DesktopDevice() {
		
		return $this->forceToDevice
		? $this->forceToDevice == 'desktop'
		: !$this->getDetector()->isMobile();
		
	}
	
	public function DeviceClass() {
		
		if($this->PhoneDevice() && (!$this->forceToDevice || $this->forceToDevice == 'phone')) {
			
			return 'mobile phone';
			
		} else if($this->TabletDevice() && (!$this->forceToDevice || $this->forceToDevice == 'tablet')) {
			
			return 'mobile tablet';
			
		} else if($this->DesktopDevice() && (!$this->forceToDevice || $this->forceToDevice == 'desktop')) {
			
			return 'desktop';
			
		} else {
			
			return false;
			
		}
		
	}
	
	// in case the thirdparty class changes
	private function getDetector() {
		
		return new Mobile_Detect();
		
	}
	
}
