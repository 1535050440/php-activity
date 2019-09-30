# php-activity
PHP 【算法大全】①：微信发红包算法     /    ②：抽奖算法

## ①：1001[微信发红包算法]

````php
ThinkPhp5.1 文件放置位置：（app\common\service\RedPacket.php）

执行:
        $redPacket = new RedPacket();

        $total = 100;
        $num = 40;

        //  微信发红包算法
    	$arr = $redPacket->red_packet($total,$num,0.01);

````