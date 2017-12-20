<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/22
 * Time: 18:46
 */

namespace app\admin\controller;

use think\Controller;
use think\Db;
use think\Session;

class Login extends Controller
{
    public function login()
    {
        if(request()->isPost())
        {
            $data= [
                'username'=>input('username'),
                'password'=>input('password'),
                 'code'   =>input('code'),
            ];
            Session::set('username',input('username'));
            $captcha = new \think\captcha\Captcha();
            if (!$captcha->check($data['code'])) {
                $this->error('验证码错误');
            }

            $login=Db::table('admin')->where('username','=',$data['username'])->field(['id','username','password'])->select();

            Session::set('id',$login[0]['id']);

            if($login)
            {
                if(md5($data['password'])==$login[0]['password'])
                {
                    $this->success('欢迎您，正在登录……','admin/Index/index','',1);
                }
            }
            else
            {
                $this->error('用户或密码错误');
            }

        }
        return $this->fetch();
    }

    public function logout()
    {
        Session(null);
        $this->success('退出登录','admin/Login/login');
    }

    public function send()
    {

    }

    public function emailCheck()
    {

    }


}