<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/22
 * Time: 22:44
 */

namespace app\admin\controller;


use think\Controller;
class Verify extends Controller
{
    public function _initialize()
    {
        if(!session('username'))
        {
            $this->error('请您登录','admin/Login/login');
        }
    }
}