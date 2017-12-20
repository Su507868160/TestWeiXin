<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/25
 * Time: 18:17
 */

namespace app\index\controller;


use think\Controller;
use think\Db;

class Search extends Controller
{
    public function search()
    {
        if(request()->isGet())
        {
            $key=input('keyword');
            $where['title']=['like','%'.$key.'%'];
            $search=Db::table('article')->where($where)->paginate($listRows =2, $simple = false, $config = [
                'query'=>array('keyword'=>$key),
                ]);
            if($search)
            {
                $page=$search->render();
                $this->assign('page',$page);
                $cate=Db::table('cate')->select();
                $this->assign('cate',$cate);
                $this->assign('article',$search);
                return $this->fetch('search');
            }
            else
            {
                $this->error('暂时无数据','index/index/index','','2');
            }

        }
    }
}