<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: common/common.proto

namespace Hyperledger\Fabric\Protos\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * LastConfig is the encoded value for the Metadata message which is encoded in the LAST_CONFIGURATION block metadata index
 *
 * Generated from protobuf message <code>common.LastConfig</code>
 */
class LastConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 index = 1;</code>
     */
    private $index = 0;

    public function __construct() {
        \GPBMetadata\Common\Common::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>uint64 index = 1;</code>
     * @return int|string
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * Generated from protobuf field <code>uint64 index = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setIndex($var)
    {
        GPBUtil::checkUint64($var);
        $this->index = $var;

        return $this;
    }

}
