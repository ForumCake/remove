<?php
namespace Cake\Remove\Proxy;

trait Zend_Db_AdapterTrait
{

    public function setConnection($connection)
    {
        $this->_connection = $connection;
    }
}