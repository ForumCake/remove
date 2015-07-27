<?php
namespace Cake\Remove;

class Application
{

    public static $db = null;

    /**
     *
     * @return Zend_Db_Adapter_Abstract
     */
    public static function getDb()
    {
        if (self::$db === null) {
            $db = \XenForo_Application::getDb();

            $config = $db->getConfig();

            $class = get_class($db);

            $createClass = \XenForo_Application::resolveDynamicClass($class);

            self::$db = new $createClass($config);

            $connection = $db->getConnection();
            self::$db->setConnection($connection);

            $profiler = $db->getProfiler();
            self::$db->setProfiler($profiler);
        }

        return self::$db;
    }
}