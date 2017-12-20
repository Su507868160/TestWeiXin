<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/19
 * Time: 19:02
 */

namespace app\admin\validate;


use think\Validate;

class Admin extends Validate
{
    protected $rule=[
        'username'=>'require|min:5',
        'password'=>'require|[A-Z]\w{4,9}'
    ];
    protected $message=[
        'username.require'=>'用户名必填',
        'username.min'=>'用户名不能小于5位',
        'password'=>'密码必填，大写字母开头，数字字母下划线5-10位'
    ];

    protected $scene=[
        'add'=>['username','password'],
        'edit'=>['username','password']
    ];
}