<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/19
 * Time: 15:17
 */

namespace app\index\controller;


use think\Db;

class Column extends Common
{
    public function column()
    {
        if(request()->isGet())
        {
            if(input('id'))
            {
                $article=Db::table('article')->where('cateid','=',input('id'))->select();
                $this->assign('article',$article);
                return $this->fetch();
            }
            else if(input('name'))
            {
                $article=Db::table('article')->select();
                $this->assign('article',$article);
                return $this->fetch();
            }
        }
    }
}