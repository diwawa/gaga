<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: platform/api_platform_login.proto

namespace Zaly\Proto\Platform;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>platform.ApiPlatformLoginResponse</code>
 */
class ApiPlatformLoginResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * user flag, tell page is display  userInfo or not
     *
     * Generated from protobuf field <code>.platform.LoginUserType loginUserType = 1;</code>
     */
    private $loginUserType = 0;

    public function __construct() {
        \GPBMetadata\Platform\ApiPlatformLogin::initOnce();
        parent::__construct();
    }

    /**
     * user flag, tell page is display  userInfo or not
     *
     * Generated from protobuf field <code>.platform.LoginUserType loginUserType = 1;</code>
     * @return int
     */
    public function getLoginUserType()
    {
        return $this->loginUserType;
    }

    /**
     * user flag, tell page is display  userInfo or not
     *
     * Generated from protobuf field <code>.platform.LoginUserType loginUserType = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setLoginUserType($var)
    {
        GPBUtil::checkEnum($var, \Zaly\Proto\Platform\LoginUserType::class);
        $this->loginUserType = $var;

        return $this;
    }

}
