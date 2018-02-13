<?php 

/**
 * Contao Open Source CMS, Copyright (C) 2005-2018 Leo Feyer
 *
 * @copyright  Glen Langer 2018 <http://contao.ninja>
 * @author     Glen Langer (BugBuster)
 * @package    Mobiledetection
 * @license    LGPL
 * @filesource
 * @see	       https://github.com/BugBuster1701/contao-mobiledetection-bundle
 */

/**
 * -------------------------------------------------------------------------
 * FRONT END MODULES
 * -------------------------------------------------------------------------
 *
 * List all fontend modules and their class names.
 *
 *   $GLOBALS['FE_MOD'] = array
 *   (
 *       'group_1' => array
 *       (
 *           'module_1' => 'Contentlass',
 *           'module_2' => 'Contentlass'
 *       )
 *   );
 *
 * Use function array_insert() to modify an existing CTE array.
 */

array_insert($GLOBALS['FE_MOD'], 4, array
(
    'MobileDetectionDemo' => array
    (
        'mobiledeviceinfo' => 'BugBuster\MobileDetection\ModuleDeviceInfo',
    )
));

/**
 * -------------------------------------------------------------------------
 * HOOKS
 * -------------------------------------------------------------------------
 */
$GLOBALS['TL_HOOKS']['generatePage'][]      = array('BugBuster\MobileDetection\Mobile_Detection_Hooks', 'insertInsertTagMD');
$GLOBALS['TL_HOOKS']['replaceInsertTags'][] = array('BugBuster\MobileDetection\Mobile_Detection_Hooks', 'mobiledetectionReplaceInsertTags');



