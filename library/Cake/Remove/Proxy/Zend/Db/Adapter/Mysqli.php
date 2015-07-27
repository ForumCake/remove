<?php
namespace Cake\Remove\Proxy;

if (false) {

	class XFCP_Zend_Db_Adapter_Mysqli extends \Zend_Db_Adapter_Mysqli
	{
	}
}

class Zend_Db_Adapter_Mysqli extends XFCP_Zend_Db_Adapter_Mysqli
{
    use Zend_Db_AdapterTrait;
}