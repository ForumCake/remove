<?php
namespace Cake\Remove\Proxy;

if (false) {

	class XFCP_Zend_Db_Adapter_Pdo_Mysql extends \Zend_Db_Adapter_Pdo_Mysql
	{
	}
}

class Zend_Db_Adapter_Pdo_Mysql extends XFCP_Zend_Db_Adapter_Pdo_Mysql
{
    use Zend_Db_AdapterTrait;
}