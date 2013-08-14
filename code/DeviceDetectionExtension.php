<?php

require_once('Mobile_Detect.php');

class DeviceDetectionExtension extends DataExtension {
	
	private $detector = null;
	private $devices = array('phone', 'tablet', 'mobile', 'desktop');
	private $forceToDevice = 'phone'; // (bool) false or (string) phone, tablet, desktop
	
	public function __construct() {
		
		parent::__construct();
		
		$this->detector = new Mobile_Detect();
		
		if(isset($_GET['forceToDevice']) && $_GET['forceToDevice'] != '') {
			
			$this->forceToDevice = in_array($_GET['forceToDevice'], $this->devices) ? $_GET['forceToDevice'] : false;
			
		}
		
	}
	
	// Phones only - without Tablets and Desktops
	public function PhoneDevice() {
		
		return $this->forceToDevice
		? $this->forceToDevice == 'phone'
		: $this->detector->isMobile() && !$this->detector->isTablet();
		
	}
	
	// Tablets only - without Phones and Desktops
	public function TabletDevice() {
		
		return $this->forceToDevice
		? $this->forceToDevice == 'tablet'
		: $this->detector->isTablet();
		
	}
	
	// Phones and Tablets - without Desktops
	public function MobileDevice() {
		
		return $this->forceToDevice
		? $this->forceToDevice == 'mobile'
		: $this->detector->isMobile();
		
	}
	
	// Desktop only - without Phones and Tablets
	public function DesktopDevice() {
		
		return $this->forceToDevice
		? $this->forceToDevice == 'desktop'
		: !$this->detector->isMobile();
		
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
	
}
