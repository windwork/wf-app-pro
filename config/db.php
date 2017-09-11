<?php
/**
 * 数据库连接参数设置
 * 
 * 非专业人员请不要随意编辑该文件
 */
return [
    // 主数据库
    'default' => [
        'class'          => '\\wf\\db\\adapter\\PDOMySQL',    // MySQLi/PDOMySQL
        'host'           => '127.0.0.1',   // 本机测试
        'port'           => '3306',        // 数据库服务器端口
        'name'           => 'windworkdb',  // 数据库名
        'user'           => 'root',        // 数据库连接用户名
        'pass'           => '123456',      // 数据库连接密码
        'tablePrefix'    => 'wk_',         // 表前缀
        'debug'          => 0,
    ],
    
    // 主从分离，启用后，从slave读，从default写
    /*
    'slave' => array(
        // 数据库设置
        'class'          => '\\wf\\db\\adapter\\PDOMySQL',
        'host'           => '127.0.0.1',   // 本机测试
        'port'           => '3306',        // 数据库服务器端口
        'name'           => 'windworkdb',  // 数据库名
        'user'           => 'root',        // 数据库连接用户名
        'pass'           => '123456',      // 数据库连接密码
        'tablePrefix'    => 'wk_',         // 表前缀
        'debug'          => 0,
    ),
    */
];
