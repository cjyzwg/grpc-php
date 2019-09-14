<?php
namespace Rpc_proto;
class HelloClient extends \Grpc\BaseStub{
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }
    public function SayHello(\Rpc_proto\HelloRequest $argument,$metadata=[],$options=[]){
    	//注意下，这里需要加个proto.根据proto文件，和package名保持一致.
    	// (/proto.SearchService/Search) 是请求服务端那个服务和方法，基本和 proto 文件定义一样
        // (\Proto\SearchResponse) 是响应信息（那个类），基本和 proto 文件定义一样
        return $this->_simpleRequest('/rpc_proto.HelloServer/SayHello',
            $argument,
            ['\Rpc_proto\HelloReply', 'decode'],
            $metadata, $options);
    }
    public function GetHelloMsg(\Rpc_proto\HelloRequest $argument,$metadata=[],$options=[]){
    	//注意下，这里需要加个proto.根据proto文件，和package名保持一致.
    	// (/proto.SearchService/Search) 是请求服务端那个服务和方法，基本和 proto 文件定义一样
        // (\Proto\SearchResponse) 是响应信息（那个类），基本和 proto 文件定义一样
        return $this->_simpleRequest('/rpc_proto.HelloServer/GetHelloMsg',
            $argument,
            ['\Rpc_proto\HelloMessage', 'decode'],
            $metadata, $options);
    }
}
