<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: common/configtx.proto

namespace Hyperledger\Fabric\Protos\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>common.ConfigUpdateEnvelope</code>
 */
class ConfigUpdateEnvelope extends \Google\Protobuf\Internal\Message
{
    /**
     * A marshaled ConfigUpdate structure
     *
     * Generated from protobuf field <code>bytes config_update = 1;</code>
     */
    private $config_update = '';
    /**
     * Signatures over the config_update
     *
     * Generated from protobuf field <code>repeated .common.ConfigSignature signatures = 2;</code>
     */
    private $signatures;

    public function __construct() {
        \GPBMetadata\Common\Configtx::initOnce();
        parent::__construct();
    }

    /**
     * A marshaled ConfigUpdate structure
     *
     * Generated from protobuf field <code>bytes config_update = 1;</code>
     * @return string
     */
    public function getConfigUpdate()
    {
        return $this->config_update;
    }

    /**
     * A marshaled ConfigUpdate structure
     *
     * Generated from protobuf field <code>bytes config_update = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setConfigUpdate($var)
    {
        GPBUtil::checkString($var, False);
        $this->config_update = $var;

        return $this;
    }

    /**
     * Signatures over the config_update
     *
     * Generated from protobuf field <code>repeated .common.ConfigSignature signatures = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSignatures()
    {
        return $this->signatures;
    }

    /**
     * Signatures over the config_update
     *
     * Generated from protobuf field <code>repeated .common.ConfigSignature signatures = 2;</code>
     * @param \Hyperledger\Fabric\Protos\Common\ConfigSignature[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSignatures($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Hyperledger\Fabric\Protos\Common\ConfigSignature::class);
        $this->signatures = $arr;

        return $this;
    }

}
