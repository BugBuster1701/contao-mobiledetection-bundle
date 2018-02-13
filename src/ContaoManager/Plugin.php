<?php

/**
 * @copyright  Glen Langer 2018 <http://contao.ninja>
 * @author     Glen Langer (BugBuster)
 * @license    LGPL-3.0+
 * @see	       https://github.com/BugBuster1701/contao-mobiledetection-bundle
 *
 */

namespace BugBuster\MobiledetectionBundle\ContaoManager;

use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;


/**
 * Plugin for the Contao Manager.
 *
 * @author Glen Langer (BugBuster)
 */
class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create('BugBuster\MobiledetectionBundle\BugBusterMobiledetectionBundle')
                ->setLoadAfter(['Contao\CoreBundle\ContaoCoreBundle'])
        ];
    }
    

}
