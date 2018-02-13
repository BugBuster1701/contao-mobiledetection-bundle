# Contao Module MobileDetection
[![Latest Stable Version](https://poser.pugx.org/bugbuster/contao-mobiledetection-bundle/v/stable.svg)](https://packagist.org/packages/bugbuster/contao-mobiledetection-bundle) 
[![Total Downloads](https://poser.pugx.org/bugbuster/contao-mobiledetection-bundle/downloads.svg)](https://packagist.org/packages/bugbuster/contao-mobiledetection-bundle) 
[![Latest Unstable Version](https://poser.pugx.org/bugbuster/contao-mobiledetection-bundle/v/unstable.svg)](https://packagist.org/packages/bugbuster/contao-mobiledetection-bundle) 
[![License](https://poser.pugx.org/bugbuster/contao-mobiledetection-bundle/license.svg)](https://packagist.org/packages/bugbuster/contao-mobiledetection-bundle)

## About
Contao 4 Bundle "Mobile-Detection", based on "http://mobiledetect.net/"

Helperclasses for developer. Demo frontend module is present.

## Installation

### Over Composer
* Search for [bugbuster/contao-mobiledetection-bundle](https://packagist.org/packages/bugbuster/contao-mobiledetection-bundle)
* composer loads additionally "mobiledetect/mobiledetectlib" version 2.*

## Hooks help!
A Hook add a special class to page css class (in body tag):

* phone : mobile device, but no tablet
* tablet : mobile device and a tablet
* computer : no mobile device, no tablet

## Examples
Galaxy S II (Phone)

* ```<body id="top" class="android safari webkit sf4 mobile phone">```

Motorola Xoom (Tablet)

* ```<body id="top" class="android safari webkit sf3 mobile tablet">```

Linux Mint PC (Computer)

* ```<body id="top" class="unix firefox gecko fx18 computer">```


## Usage the Classes
You have two options:

* You're using the original class (Detection\MobileDetect).
* You're using the wrapper class (BugBuster\MobileDetection\Mobile_Detection).

### Mobile_Detect (original class) 

#### Composer version (with a namespace of the original class)
```php
use Detection\MobileDetect;

$detect = new MobileDetect(); 

// Check for any mobile device.
if ($detect->isMobile())
 
// Check for any tablet.
if($detect->isTablet())
 
// Check for any mobile device, excluding tablets.
if ($detect->isMobile() && !$detect->isTablet())
```
For the full list of available methods check the directory ![examples](https://github.com/serbanghita/Mobile-Detect).

### Mobile_Detection (wrapper class)
```php
use BugBuster\MobileDetection\Mobile_Detection;
...
$this->Mobile_Detection = new Mobile_Detection();

// Check device type
echo $this->Mobile_Detection->getDeviceType(); // phone|tablet|computer

// Check for any mobile device.
if ($this->Mobile_Detection->isMobile())

// Check for any tablet.
if ($this->Mobile_Detection->isTablet())

// Check mobile grade
echo $this->Mobile_Detection->getMobileGrade(); // A|B|C

// Check mobile rules
$arrRules = $this->Mobile_Detection->getMobileRules(); 
// result e.g. array('SamsungTablet','AndroidOS','Safari')
```
See demo module "MobileDetectionDemo".

