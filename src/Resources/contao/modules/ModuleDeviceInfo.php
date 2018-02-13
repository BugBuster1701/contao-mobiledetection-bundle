<?php

/**
 * Contao Open Source CMS, Copyright (C) 2005-2018 Leo Feyer
 *
 * Contao FE Module "Device Info"
 *
 * @copyright  Glen Langer 2018 <http://contao.ninja>
 * @author     Glen Langer (BugBuster)
 * @package    Mobiledetection
 * @license    LGPL
 * @filesource
 * @see	       https://github.com/BugBuster1701/contao-mobiledetection-bundle
 */

/**
 * Run in a custom namespace, so the class can be replaced
 */
namespace BugBuster\MobileDetection;

use BugBuster\MobileDetection\Mobile_Detection;

/**
 * Class ModuleDeviceInfo
 * Use Mobile_Detection 
 *
 * @copyright  Glen Langer 2018 <http://contao.ninja>
 * @author     Glen Langer (BugBuster)
 * @package    Mobiledetection
 */
class ModuleDeviceInfo extends \Module
{

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'mod_mobiledetection_device_fe';
    
    public $Mobile_Detection = null;

    /**
     * Display a wildcard in the back end
     * @return string
     */
    public function generate()
    {
        if (TL_MODE == 'BE')
        {
            $objTemplate = new \BackendTemplate('be_wildcard');
            $objTemplate->wildcard = '### Mobile_Detection Device Info ###';
            	
            $objTemplate->title = $this->headline;
            $objTemplate->id    = $this->id;
            $objTemplate->link  = $this->name;

            $objTemplate->href = 'contao/main.php?do=themes&amp;table=tl_module&amp;act=edit&amp;id=' . $this->id;

            return $objTemplate->parse();
        }
        return parent::generate();
    }


    /**
     * Generate module
     */
    protected function compile()
    {
        // Import Mobile_Detection
        //$this->import('\MobileDetection\Mobile_Detection','Mobile_Detection');
        $this->Mobile_Detection = new Mobile_Detection();

        $this->Template->agent     = $this->Mobile_Detection->getUserAgent();
        $this->Template->device    = $this->Mobile_Detection->getDeviceType();
        $this->Template->mobile    = $this->Mobile_Detection->isMobile();
        $this->Template->tablet    = $this->Mobile_Detection->isTablet();
        $this->Template->grade     = $this->Mobile_Detection->getMobileGrade();
        $this->Template->arrRules  = $this->Mobile_Detection->getMobileRules();
        
        // get module version
        $this->Template->version       = $this->Mobile_Detection->getVersion();
        $this->Template->versionvendor = $this->Mobile_Detection->getVersionVendor();
    }

}
