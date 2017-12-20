<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/19
 * Time: 15:15
 */

namespace app\index\controller;


use think\Db;

class Article extends Common
{
    public function article()
    {
        if(request()->isGet())
        {
            $res=Db::table('article')->where('id','=',input('id'))->setInc('click');
            $article=Db::table('article')->where('id','=',input('id'))->select();
            $this->assign('article',$article[0]);
        }
        return $this->fetch();
    }
}