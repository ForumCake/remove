<?php
namespace Cake\Remove;

class Install_Controller
{

    public static function install($existingAddOn, array $addOnData, \SimpleXMLElement $xml)
    {
        if (\XenForo_Application::$versionId < 1030070) {
            // note: this can't be phrased
            throw new \XenForo_Exception('This add-on requires XenForo 1.3.0 or higher.', true);
        }

        $addOns = \XenForo_Application::get('addOns');
        if (!isset($addOns['Cake'])) {
            // note: this can't be phrased
            throw new \XenForo_Exception('This add-on requires Cake 1.0.0 or higher.', true);
        }

        \Cake\Install_Controller::install($existingAddOn, $addOnData, $xml);
    }

    public static function uninstall(array $addOnData)
    {
        \Cake\Install_Controller::uninstall($addOnData);
    }
}