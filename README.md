# grpc php client 
**服务端取的是https://www.jianshu.com/p/7fe7a8507745 案例**

#### 可能需要执行
> export GO111MODULE=on  
go mod tidy

1、protoc --proto_path=../../ --php_out=. helloServer.proto  
2、在client/phpclient/Rpc_proto 文件夹新建HelloClient.php  

    <?php
		namespace Rpc_proto;
		class HelloClient extends \Grpc\BaseStub{
			public function __construct($hostname, $opts, $channel = null) {
				parent::__construct($hostname, $opts, $channel);
			}
			public function SayHello(\Rpc_proto\HelloRequest $argument,$metadata=[],$options=[]){
				return $this->_simpleRequest('/rpc_proto.HelloServer/SayHello',
					$argument,
					['\Rpc_proto\HelloReply', 'decode'],
					$metadata, $options);
			}
			public function GetHelloMsg(\Rpc_proto\HelloRequest $argument,$metadata=[],$options=[]){
				return $this->_simpleRequest('/rpc_proto.HelloServer/GetHelloMsg',
					$argument,
					['\Rpc_proto\HelloMessage', 'decode'],
					$metadata, $options);
			}
		}
	?>
3、cd client/phpclient && composer update  
4、cd server && go run server.go  
5、新建hello.php,并执行php hello.php
结果：
> helloGreenHat  
this is from server HAHA!