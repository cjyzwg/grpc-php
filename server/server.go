package main

import (
    "fmt"
    pb "github.com/cjyzwg/grpc-php/rpc_proto"
    "golang.org/x/net/context"
    "google.golang.org/grpc"
    "net"
)

const (
    port = ":18881"
)

type server struct{}

//实现RPC SayHello 接口
func (this *server) SayHello(ctx context.Context, in *pb.HelloRequest) (*pb.HelloReply, error) {
    return &pb.HelloReply{Message: "hello" + in.Name}, nil
}

//实现RPC GetHelloMsg 接口
func (this *server) GetHelloMsg(ctx context.Context, in *pb.HelloRequest) (*pb.HelloMessage, error) {
    return &pb.HelloMessage{Msg: "this is from server HAHA!"}, nil
}

func main() {
    listen, err := net.Listen("tcp", port)

    if err != nil {
        fmt.Println("failed to listen : ", err)
        return
    }

    //得到一个gRPC 服务句柄
    srv := grpc.NewServer()
    //将 server 结构体注册到 gRPC 服务
    pb.RegisterHelloServerServer(srv, &server{})
    //启动监听gRPC服务
    if err := srv.Serve(listen); err != nil {
        fmt.Println("failed to serve, ", err)
        return
    }
}
