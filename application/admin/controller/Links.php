<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/19
 * Time: 22:58
 */

namespace app\admin\controller;


use app\admin\validate\Links as LinkVal;
use think\Controller;
use think\Db;


class Links extends Verify
{
    //列表页
    public function col()
    {
        $link=Db::table('links')->paginate(1);
        $page=$link->render();
        $this->assign('page',$page);
        $this->assign('link',$link);
        return $this->fetch();
    }
    //添加页
    public function add()
    {
        if(request()->isPost())
        {
            $data=[
                'title'=>input('title'),
                'url'  =>input('url'),
                'desc' =>input('desc')
            ];
            $validate=new LinkVal();
            if(!$validate->scene('add')->check($data))
            {
                $this->error($validate->getError());
            }
            if(Db::table('links')->insert($data))
            {
                $this->success('链接添加成功','admin/Links/col');
            }
            else
            {
                $this->error('链接添加失败');
            }
        }
        return $this->fetch();
    }
    //修改页
    public function edit()
    {
        $id=input('id');
        $link=Db::table('links')->find($id);
        if(request()->isGet())
        {
            $this->assign('link',$link);
            return $this->fetch();
        }
        if(request()->isPost())
        {
            $data=[
                'title'=>input('title'),
                'url'  =>input('url'),
                'desc' =>input('desc')
            ];
            $validate=new LinkVal();
            if(!($validate->scene('edit')->check($data)))
            {
                $this->error($validate->getError());
            }
            if($data['title']==$link['title'] && $data['url']==$link['url'] && $data['desc']==$link['desc'])
            {
                $this->error('您的信息未修改，请确认');
            }
            $res=Db::table('links')->where('id','=',$id)
                ->setField(['title'=>$data['title'],'url'=>$data['url'],'desc'=>$data['desc']]);
            if($res)
            {
                $this->success('修改链接成功','admin/Links/col');
            }
            else
            {
                $this->error('修改连接失败');
            }

        }

    }
    //删除页
    public function del()
    {
        if(request()->isGet())
        {
            $id=input('id');
            if(Db::table('links')->delete($id))
            {
                $this->success('删除链接成功','admin/Links/col');
            }
            else
            {
                $this->error('删除链接失败');
            }
        }
        return $this->fetch();
    }
}