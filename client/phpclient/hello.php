<?php
require __DIR__ . '/vendor/autoload.php';
$client = new \Rpc_proto\HelloClient('127.0.0.1:18881', [
    'credentials' => Grpc\ChannelCredentials::createInsecure()
]);
$request = new \Rpc_proto\HelloRequest();
$request->setName("GreenHat");
$res = $client->SayHello($request)->wait();
list($reply, $status) = $res;
$data = $reply->getMessage();
echo $data."\n";
$res2 = $client->GetHelloMsg($request)->wait();
list($reply2,$status) = $res2;
$data2 = $reply2->getMsg();
echo $data2."\n";
die();
