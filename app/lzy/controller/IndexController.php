<?php
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2018 http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 罗志禹 <lzy_email@sian.cn>
// +----------------------------------------------------------------------
namespace app\lzy\controller;

use cmf\controller\HomeBaseController;
use think\Config;

class IndexController extends HomeBaseController
{
    public function index()
    {
        return $this->fetch();
    }
    public function CreatPass(){
            //获取全部配置项
        dump(Config::get());
    }
}
