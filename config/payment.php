<?php
return [
    'default' => [ //默认无支付模式
        'channel' => [
        ]
    ],   
    'vip' => [  //设置vip天数及相应的价格
        ['month' => 1, 'price' => 5],
        ['month' => 6, 'price' => 100],
        ['month' => 12, 'price' => 400]
    ],
    'money' => [1, 5, 10, 30, 50], //设置支付金额
    'promotional_rewards_rate' => 0.1, //设置充值提成比例，必须是小数
    'reg_rewards' => 1, //注册奖励金额，单位是元
    'mobile_bind_rewards' => 0 //绑定手机奖励金额，单位是元
];