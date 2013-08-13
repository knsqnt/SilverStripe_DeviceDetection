Documentation
=============

Use the following functions to check what device the page will be delivered at:

- PhoneDevice() for phone devices
- TabletDevice() for tablet devices
- MobileDevice() for phone and tablet devices
- DesktopDevice() for desktop devices

You can also parse "true" to force the method return true. That way you can easily test the mobile version on your desktop.

Use DeviceClass() to add classes to html elements. This will output on of these:

- mobile phone
- mobile tablet
- desktop

Examples
--------

These functions can either be used inside the page controller or the template files.

**Controller**

$this->PhoneDevice()
$this->PhoneDevice(true)

**Template**

$PhoneDevice
$PhoneDevice(true)
