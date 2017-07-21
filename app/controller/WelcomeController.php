<?php 

namespace app\controller;

class WelcomeController extends \wf\app\web\Controller {
    
    public function indexAction() {
        $this->getView()
        ->assign('pageTitle', 'Welcome to Windwork')
        ->assign('hi', '欢迎来到Windwork的小世界！')
        ->assign('slogan', 'Windwork是一个用于快速开发高并发Web应用的轻量级PHP框架， 专注于解决易学易用、高效健壮、松耦合问题的快速开发方案。')
        ->render();        
    }    
}
