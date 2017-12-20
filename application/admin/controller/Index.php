<?php
namespace app\admin\controller;

use app\admin\validate\Admin;
use think\Controller;
use think\Db;

class Index extends Verify
{
    //主页
    public function index()
    {
        return $this->fetch();
    }
    //添加管理员
    public function add()
    {
        if(request()->isPost())
        {
            $data=[
                'username'=>input('username'),
                'password'=>input('password')
            ];
            $validate=new Admin();
            //验证失败进入
            if(!$validate->scene('add')->check($data))
            {
                return $this->error($validate->getError());
            }
            //输入数据库
            if(Db::table('admin')->insert($data))
            {
                return $this->success('添加管理员成功','col');
            }
            else
            {
                return $this->error('添加管理员失败');
            }
        }
        return $this->fetch();
    }
    //修改页
    public function edit()
    {
        $id=input('id');
        if(request()->isGet())
        {
            $res=Db::table('admin')->find($id);
            $this->assign('admin',$res);
            return $this->fetch();
        }
        if(request()->isPost())
        {
            $data=[
                'username'=>input('username'),
                'password'=>input('password')
            ];
            if($data['password'] && $data['username'])
            {
                $validate=new Admin();
                if(!($validate->scene('edit')->check($data)))
                {
                    $this->error($validate->getError());
                }
                $data['password']=md5($data['password']);
                $res=Db::table('admin')->where('id','=',$id)->setfield(['username'=>$data['username'],'password'=>$data['password']]);
                if($res)
                {
                    $this->success('修改成功','col');
                }
                else
                {
                    $this->error('修改失败');
                }
            }
            else
            {
                $this->success('用户名密码未更改','col');
            }

        }
    }
    //列表页
    public function col()
    {
        $list=Db::table('admin')->paginate(1);
        $page = $list->render();
        $this->assign('list',$list);
        $this->assign('page',$page);

        return $this->fetch();

    }
    //删除管理员
    public function del()
    {
        if(request()->isGet())
        {
            if(Db::table('admin')->delete(input('id')))
            {
                $this->success('删除管理员成功','col');
            }
            else
            {
                $this->error('删除管理员失败');
            }
        }
    }

}
