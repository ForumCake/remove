<?php
namespace Cake\Remove\Proxy;

trait XenForo_ModelTrait
{

    protected $_useCakeRemoveDbProxy = false;

    protected function _getDb()
    {
        if ($this->_db === null && $this->_useCakeRemoveDbProxy) {
            $this->_db = \Cake\Remove\Application::getDb();
        }

        if (($this->_db instanceof Zend_Db_Adapter_Mysqli || $this->_db instanceof Zend_Db_Adapter_Pdo_Mysql) &&
             $this->_useCakeRemoveDbProxy) {
            return $this->_db;
        }

        return parent::_getDb();
    }
}