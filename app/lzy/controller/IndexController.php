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

class IndexController extends HomeBaseController
{
    public function index()
    {
        return $this->fetch();
    }
    public function CreatPass(){
        $result = "###" . md5(md5(config('database.authcode') . '123456'));
        echo $result;die;
    }
}
