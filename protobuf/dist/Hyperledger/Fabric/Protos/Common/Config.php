<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: common/configtx.proto

namespace Hyperledger\Fabric\Protos\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Config represents the config for a particular channel
 *
 * Generated from protobuf message <code>common.Config</code>
 */
class Config extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 sequence = 1;</code>
     */
    private $sequence = 0;
    /**
     * Generated from protobuf field <code>.common.ConfigGroup channel_group = 2;</code>
     */
    private $channel_group = null;

    public function __construct() {
        \GPBMetadata\Common\Configtx::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>uint64 sequence = 1;</code>
     * @return int|string
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * Generated from protobuf field <code>uint64 sequence = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSequence($var)
    {
        GPBUtil::checkUint64($var);
        $this->sequence = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.common.ConfigGroup channel_group = 2;</code>
     * @return \Hyperledger\Fabric\Protos\Common\ConfigGroup
     */
    public function getChannelGroup()
    {
        return $this->channel_group;
    }

    /**
     * Generated from protobuf field <code>.common.ConfigGroup channel_group = 2;</code>
     * @param \Hyperledger\Fabric\Protos\Common\ConfigGroup $var
     * @return $this
     */
    public function setChannelGroup($var)
    {
        GPBUtil::checkMessage($var, \Hyperledger\Fabric\Protos\Common\ConfigGroup::class);
        $this->channel_group = $var;

        return $this;
    }

}
