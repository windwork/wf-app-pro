<?php
/**
 * 
 */
return [
    'enableHook' => 1, // 启用Hook
    
    // 设置方式1：钩子类名或钩子类的实例,如：'\\user\\hook\\Acl', new \app\user\hook\Acl()
    // 设置方式2：钩子类名或钩子类的实例+数组参数,如：['\\user\\hook\\Acl', [$param1, $param2, ....]], [new \app\user\hook\Acl(), [$param1, $param2, ....]]
    
    
    // 加载完系统配置后触发的钩子，目的是增加修改系统配置信息
    // 只在创建Application单例时执行一次，框架仅初始化了request、response、自动加载、默认异常处理，其他库不可用；
    'appRuntimeAft' => [
        //'\app\system\hook\InitOptionHook', // 读取数据库保存的配置信息
    ],
    
    // 初始化控制器前在控制器基类构造函数中触发的钩子
    'dspNewControllerFore' => [
        //'\app\user\hook\AuthHook', //权限控制
        //'\app\system\hook\BannedIPHook', // IP 禁止
        //'\app\system\hook\PauseServiceHook', // 系统暂停服务信息，在后台设置
        //'\app\system\hook\AdminCPLogHook', // 后台操作日志
    ],
    
    // 执行action前触发的钩子
    'dspRunActionFore' => [        
    ],
        
    // 发送响应内容前触发的钩子，可对输出内容进行处理过滤
    'dspOutputFore' => [
    ],
        
    // 发送响应内容（程序执行完）后触发的钩
    'dspResponseAft' => [
    ],
];