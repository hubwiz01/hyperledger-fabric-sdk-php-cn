<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ledger/rwset/rwset.proto

namespace Hyperledger\Fabric\Protos\Ledger\RWSet;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * NsReadWriteSet encapsulates the read-write set for a chaincode
 *
 * Generated from protobuf message <code>rwset.NsReadWriteSet</code>
 */
class NsReadWriteSet extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string namespace = 1;</code>
     */
    private $namespace = '';
    /**
     * Data model specific serialized proto message (e.g., kvrwset.KVRWSet for KV and Document data models)
     *
     * Generated from protobuf field <code>bytes rwset = 2;</code>
     */
    private $rwset = '';

    public function __construct() {
        \GPBMetadata\Ledger\Rwset\Rwset::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>string namespace = 1;</code>
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * Generated from protobuf field <code>string namespace = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setNamespace($var)
    {
        GPBUtil::checkString($var, True);
        $this->namespace = $var;

        return $this;
    }

    /**
     * Data model specific serialized proto message (e.g., kvrwset.KVRWSet for KV and Document data models)
     *
     * Generated from protobuf field <code>bytes rwset = 2;</code>
     * @return string
     */
    public function getRwset()
    {
        return $this->rwset;
    }

    /**
     * Data model specific serialized proto message (e.g., kvrwset.KVRWSet for KV and Document data models)
     *
     * Generated from protobuf field <code>bytes rwset = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setRwset($var)
    {
        GPBUtil::checkString($var, False);
        $this->rwset = $var;

        return $this;
    }

}

