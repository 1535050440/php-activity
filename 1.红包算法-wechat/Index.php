<?php
namespace app\index\controller;

use app\common\service\RedPacket;
use think\Controller;

class Index extends Controller
{
    public function index()
    {
    }

    public function demo()
    {
    	$redPacket = new RedPacket();

        $total = 100;
        $num = 40;

        //  微信发红包算法
    	$arr = $redPacket->red_packet($total,$num,0.01);

    	print_r($arr);
    }
}
