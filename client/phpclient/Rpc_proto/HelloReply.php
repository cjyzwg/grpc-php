<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: helloServer.proto

namespace Rpc_proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response message containing the greetings
 *
 * Generated from protobuf message <code>rpc_proto.HelloReply</code>
 */
class HelloReply extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string message = 1;</code>
     */
    private $message = '';

    public function __construct() {
        \GPBMetadata\HelloServer::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>string message = 1;</code>
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Generated from protobuf field <code>string message = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->message = $var;

        return $this;
    }

}

