<?php
namespace Cake\Remove;

class Install_FileHealthCheck extends \Cake\Install_FileHealthCheckBase
{
    
    public function getFileHashes()
    {
        return array(
        	'library/Cake/Remove/addon-Cake_Remove.xml' => 'c8e4dd182a1fe4d934f3d7fd28eea48a',
        	'library/Cake/Remove/Application.php' => '00812982e31a4e604c93eaa21e3f65e9',
        	'library/Cake/Remove/Install/Controller.php' => '893e33ff229a9059a5122560df9b2f1d',
        	'library/Cake/Remove/Install/Data.php' => '0d3ef5b993c9a8a79d7959dc6d5fca8b',
        	'library/Cake/Remove/Proxy/XenForo/Model/User.php' => '849f4b301107a25c3e12812c70253a1e',
        	'library/Cake/Remove/Proxy/XenForo/ModelTrait.php' => '61899fa6acc97ae7be7419d367622284',
        	'library/Cake/Remove/Proxy/Zend/Db/Adapter/Mysqli.php' => '998ee430d1ac1ed53c365c696691434e',
        	'library/Cake/Remove/Proxy/Zend/Db/Adapter/Pdo/Mysql.php' => '93dcf02da27bd9f50c307a51279cc867',
        	'library/Cake/Remove/Proxy/Zend/Db/AdapterTrait.php' => '6b28a189245a29ed8acfa423f2237180',
        	'library/Cake/Remove/Proxy.php' => '6c6edcd10a41747c2028c356ea956407',
        );
    }
}