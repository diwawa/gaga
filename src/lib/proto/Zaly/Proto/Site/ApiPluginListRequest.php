<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: site/api_plugin_list.proto

namespace Zaly\Proto\Site;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 **
 * action: api.plugin.list
 *
 * Generated from protobuf message <code>site.ApiPluginListRequest</code>
 */
class ApiPluginListRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.core.PluginUsageType usageType = 1;</code>
     */
    private $usageType = 0;

    public function __construct() {
        \GPBMetadata\Site\ApiPluginList::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.core.PluginUsageType usageType = 1;</code>
     * @return int
     */
    public function getUsageType()
    {
        return $this->usageType;
    }

    /**
     * Generated from protobuf field <code>.core.PluginUsageType usageType = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setUsageType($var)
    {
        GPBUtil::checkEnum($var, \Zaly\Proto\Core\PluginUsageType::class);
        $this->usageType = $var;

        return $this;
    }

}
