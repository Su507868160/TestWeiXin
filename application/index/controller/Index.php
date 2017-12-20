<?php
namespace app\index\controller;



use think\Db;

class Index extends Common
{
    public function index()
    {
        $article=Db::table('article')->paginate(1);
        $page=$article->render();
        $this->assign('article',$article);
        $this->assign('page',$page);
        return $this->fetch();
    }
}
