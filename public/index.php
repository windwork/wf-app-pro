<?php
/**
 * Windwork
 * 
 * 一个开源的PHP轻量级高效Web开发框架
 * 
 * @copyright   Copyright (c) 2008-2016 Windwork Team. (http://www.windwork.org)
 * @license     http://opensource.org/licenses/MIT    MIT License
 */

/**
 * 入口
 * Windwork框架为单入口模式，所有mvc业务流程均通过index.php进入。
 * （不使用框架的mvc架构时可从其他入口进入）
 */

/**
 * 入口常量，声明该常量后才是有效的程序入口
 * @var bool
 */
define('IS_IN', true);


// 是否开启调试模式，正式环境设为 false
define('WF_DEBUG', true);

// 程序源码文件夹完整路径
define('ROOT_DIR', dirname(__DIR__));

// 加载 composer autoload
require_once '../vendor/autoload.php';

$app = \wf\web\Application::app('../config/', 'develop');
$app->run();
