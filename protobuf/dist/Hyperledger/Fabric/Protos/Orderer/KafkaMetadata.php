<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: orderer/kafka.proto

namespace Hyperledger\Fabric\Protos\Orderer;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * LastOffsetPersisted is the encoded value for the Metadata message
 * which is encoded in the ORDERER block metadata index for the case
 * of the Kafka-based orderer.
 *
 * Generated from protobuf message <code>orderer.KafkaMetadata</code>
 */
class KafkaMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 last_offset_persisted = 1;</code>
     */
    private $last_offset_persisted = 0;

    public function __construct() {
        \GPBMetadata\Orderer\Kafka::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>int64 last_offset_persisted = 1;</code>
     * @return int|string
     */
    public function getLastOffsetPersisted()
    {
        return $this->last_offset_persisted;
    }

    /**
     * Generated from protobuf field <code>int64 last_offset_persisted = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLastOffsetPersisted($var)
    {
        GPBUtil::checkInt64($var);
        $this->last_offset_persisted = $var;

        return $this;
    }

}
