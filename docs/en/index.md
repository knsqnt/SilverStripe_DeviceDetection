SilverStripe_DeviceDetect Documentation
=======================================

Use the following functions to check what device the page will be delivered at:

- PhoneDevice() for phone devices
- TabletDevice() for tablet devices
- MobileDevice() for phone and tablet devices
- DesktopDevice() for desktop devices

Examples
--------

These functions can either be used inside the page controller or the template files.

**Controller**

$this->PhoneDevice()

**Template**

$PhoneDevice()