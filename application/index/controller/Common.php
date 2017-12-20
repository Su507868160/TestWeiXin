<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/23
 * Time: 0:25
 */

namespace app\index\controller;


use think\Controller;
use think\Db;

class Common extends Controller
{
    public function _initialize()
    {
        $cate=Db::name('cate')->select();
        $this->assign('cate',$cate);
    }

}