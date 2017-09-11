<?php 
/**
 * 链接相关设置
 */
return [
    'class'            => '\\wf\\route\\adapter\\Simple',
    'useModule'        => 0,       // 是否启用模块
    
    // 默认请求响应action
    'defaultMod'       => '',   // 默认模块
    'defaultCtl'       => 'welcome',  // 默认控制器
    'defaultAct'       => 'index',    // 默认action

    // 命令行下需要设置应用网站首页，如：https://windwork.org/demo/
    'siteUrl'          => '',
    
    // 子站点URL，根据模块、控制器识别，把优先设置放前面
    'domain'      => [
    ],
        
    // hostInfo         => '', // 从siteUrl中自动提取
    // basePath         => '', // 从siteUrl中自动提取
        
    // static、theme 文件夹使用的网址，如：https://static.windwork.org/demo/
    'staticPath'       => '',                  

    'rewrite'          => 1,       // 启用URLRewrite
    'rewriteExt'       => '.html', // 链接后缀，如：.html
    'fullUrl'          => 0,       // 是否使用完整URL（http://开头）
    'encode'           => 0,       // 是否对链接参数进行编码
        
    // 链接别名，简短URL规则，把长链接缩短成端链接的规则
    // 下标只允许包含字母数字和下划线
    'alias' => [
    ],
];