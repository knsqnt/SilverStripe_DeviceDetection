Documentation
=============

Use the following functions to check what device the page will be delivered at:

- PhoneDevice() for phone devices
- TabletDevice() for tablet devices
- MobileDevice() for phone and tablet devices
- DesktopDevice() for desktop devices

Use DeviceClass() to add classes to html elements. This will output on of these:

- mobile phone
- mobile tablet
- desktop

Use variable $forceToDevice inside DeviceDetectionExtension class to manually set a device:

- phone (string)
- tablet (string)
- desktop (string)
- false (boolean)

When the variable is set to a device, each function will return the value accordings to this setting.

To force using a device via GET parameter, just use ?forceToDevice={deviceName}. This will overwrite the class variable.

Examples
--------

These functions can either be used inside the page controller or the template files.

**Controller**

$this->PhoneDevice(), $this->DeviceClass()

**Template**

$PhoneDevice, $DeviceClass

**GET Parameter**

?forceToDevice=phone, ?forceToDevice=0