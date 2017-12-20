<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/21
 * Time: 18:22
 */

namespace app\admin\controller;


use app\admin\model\Article as ArticleM;
use app\admin\validate\Article as ArticleV;
use app\admin\model\Cate;
use think\Controller;
use think\Loader;

class Article extends Verify
{
    public function col()
    {
        $article=ArticleM::table('article')->paginate(3);
        $page=$article->render();
        $this->assign('page',$page);
        $this->assign('article',$article);
        return $this->fetch();
    }

    public function add()
    {
        //分类选项
        $cate=Cate::table('cate')->select();
        $this->assign('cate',$cate);
        if(request()->isPost())
        {
            $data=[
                'title'   =>input('title'),
                'author'  =>input('author'),
                'keywords'=>input('keywords'),
                'desc'    =>input('desc'),
                'cateid'   =>input('cateid'),
                'content' =>input('content'),
                'time'    =>time()
            ];
            if(input('state')=='on')
            {
                $data['state']=1;
            }
            $validate=new ArticleV();
            if(!$validate->scene('add')->check($data))
            {
                $this->error($validate->getError());
            }
            //判断图片
            if($_FILES['pic']['tmp_name'])
            {
                //验证图片
                $file = request()->file('pic');
                $info = $file->validate(['size'=>500000,'ext'=>'jpg,png,gif'])->move(ROOT_PATH . 'public' . DS . 'uploads');
                if($info)
                {
                    $data['pic']=$info->getSaveName();
                }
                else
                {
                    $this->error( $file->getError());
                }
            }

            $article=new ArticleM();
            if($article->data($data)->save())
            {
                $this->success('添加文章信息成功','admin/Article/col');
            }
            else
            {
                $this->error('添加文章信息失败');
            }
        }

        return $this->fetch();
    }

    public function edit()
    {
        $id=input('id');
        $article=ArticleM::get(input('id'));
        if(request()->isGet())
        {
            if($article=ArticleM::get(input('id')))
            {
                $cate=Cate::table('cate')->select();
                $this->assign('cate',$cate);
                $this->assign('article',$article);
                return $this->fetch();
            }
            else
            {
                $this->error('参数错误，请重新操作');
            }
        }
        else
        {
            $this->error('参数错误，请重新操作');
        }
        if(request()->isPost())
        {
            $data= [
                'title'=>input('title'),
                'author'=>input('author'),
                'desc'=>input('desc'),
                'keywords'=>input('keywords'),
                'content'=>input('content'),
                'state'=>input('state'),
                'time'=>time(),

                ];
            if(input('cateid')=='on')
            {
                $data['cateid']=1;
            }
            else
            {
                $data['cateid']=0;
            }

            if($_FILES['pic']['tmp_name'])
            {
                $file = request()->file('pic');
                $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
                if($info)
                {
                    $data['pic']=$info->getExtension();
                }
                else
                {
                    $this->error($file->getError());
                }

//            if($_FILES['pic']['tmp_name'])
//            {
//                $file = request()->file('pic');
//                $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
//                if($info)
//                {
//                    $data['pic']=$info->getSaveName();
//                }
//                else
//                {
//                    $this->error($file->getError());
//                }
            }
            if(ArticleM::table('article')->save($data,'id','=',$data['id']))
            {
                $this->success('修改文章成功','admin/Article/col');
            }
            else
            {
                $this->error('修改文章失败');
            }
        }
    }

    public function del()
    {
        if(request()->isGet())
        {
            if($id=input('id'))
            {
                if(ArticleM::where('id','=',$id)->delete())
                {
                    $this->success('删除文章成功','admin/Article/col');
                }
                else
                {
                    $this->error('删除文章失败');
                }
            }
            else
            {
                $this->error('ID参数错误');
            }
        }
        else
        {
            $this->error('方法参数错误');
        }
    }
}