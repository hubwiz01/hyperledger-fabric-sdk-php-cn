<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: peer/configuration.proto

namespace GPBMetadata\Peer;

class Configuration
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(hex2bin(
            "0ade010a18706565722f636f6e66696775726174696f6e2e70726f746f12" .
            "0670726f746f7322370a0b416e63686f72506565727312280a0c616e6368" .
            "6f725f706565727318012003280b32122e70726f746f732e416e63686f72" .
            "5065657222280a0a416e63686f7250656572120c0a04686f737418012001" .
            "2809120c0a04706f7274180220012805424f0a226f72672e68797065726c" .
            "65646765722e6661627269632e70726f746f732e706565725a2967697468" .
            "75622e636f6d2f68797065726c65646765722f6661627269632f70726f74" .
            "6f732f70656572620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
