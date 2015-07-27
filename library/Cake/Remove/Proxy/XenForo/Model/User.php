<?php
namespace Cake\Remove\Proxy;

if (false) {

    class XFCP_XenForo_Model_User extends \XenForo_Model_User
    {
    }
}

class XenForo_Model_User extends XFCP_XenForo_Model_User
{
    use XenForo_ModelTrait;
}