<?php
require_once '../../vendor/autoload.php';

use Thrift\Transport\TSocket;
use Thrift\Protocol\TBinaryProtocol;

// 传输方式（需与服务端一致）
$socket = new TSocket("127.0.0.1", 8656);
// 传输协议（需与服务端一致）
$transport = new \Thrift\Transport\TBufferedTransport($socket);
$protocol  = new TBinaryProtocol($transport);

// 实例化业务public/query
$client    = new \ApiClient($protocol);
$transport->open();
//  调用服务方法
$qlStr = "MapPedInfoesRoles(TradeStatusName:['待派','等待师傅接单'],PkId:['DD603447-FB15-259C-AACA-9B70E60FD6F6','3FD8FBFF-F9B0-43F4-0F4F-881E474EEB11'])[0,10]:{PkId,MasterConfirmTime[desc],diff:datediff(HOUR,CreateTime,ISNULL(MasterFinishTime,getdate())),StatusName}";

var_dump($client->search($qlStr));
$transport->close();