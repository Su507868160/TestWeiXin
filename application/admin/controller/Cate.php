<?php
namespace app\admin\controller;

use think\Controller;
use app\admin\model\Cate as CateM;
use app\admin\validate\Cate as CateV;
use think\Loader;

class Cate extends Verify
{
    //列表页
    public function col()
    {
        $cate=CateM::table('cate')->paginate(1);
        $page=$cate->render();
        $this->assign('page',$page);
        $this->assign('cate',$cate);
        return $this->fetch();
    }
    //添加页
    public function add()
    {
        if(request()->isPost())
        {
            if( $name=input('catename'))
            {
                $validate=new CateV();
                if($validate->scene('add')->check($name))
                {
                    $this->error($validate->getError());
                }
                //方法二
//                $validate = Loader::validate('Cate');
//                if(!$validate->scene('add')->check($name))
//                {
//                    $this->error($validate->getError());
//                }

                $cate=new CateM;
                $res=$cate->data(['catename'=>$name])->save();
                dump($name);
                if($res)
                {
                    $this->success('添加栏目成功','admin/Cate/col');
                }
                else
                {
                    $this->error('添加栏目失败');
                }
            }
            else
            {
                $this->error('您的数据为空，请重新操作！');
            }
        }
        return $this->fetch();
    }
    //修改页
    public function edit()
    {
        $id=input('id');
        $cate=CateM::get($id);
        if(request()->isGet())
        {
            if($id || $cate)
            {
                $this->assign('cate',$cate);
                return $this->fetch();
            }
        }
        if(request()->isPost())
        {
            $data=[
                'id'=>input('id'),
                'catename'=>input('catename')
            ];
            if($data)
            {
                $cate=new CateM();
               // $res=$cate->save(['catename'=>$data['catename']],$data['id']);
                $res=$cate->where('id', '=',$data['id'])->update(['catename'=>$data['catename']],$data['id']);
               dump(CateM::getLastSql($res));
                if($res)
                {
                    $this->success('修改栏目成功','admin/Cate/col');
                }
                else
                {
                    $this->error('修改栏目失败');
                }
            }
        }

    }
    //删除页
    public function del()
    {
        if(request()->isGet())
        {
            if(CateM::where('id','=',input('id'))->delete())
            {
                $this->success('删除栏目成功','admin/Cate/col');
            }
            else
            {
                $this->error('删除栏目失败');
            }
        }
        return $this->fetch();
    }
}