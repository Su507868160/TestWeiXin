<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/19
 * Time: 23:20
 */

namespace app\admin\validate;


use think\Validate;

class Links extends Validate
{
    //规则
    protected $rule=[
        'title'=>'require',
        'url'  =>'require'
    ];
    //声明
    protected $message=[
        'title'=>'标题必填',
        'url'  =>'链接必填'
    ];
    //场景
    protected $scene=[
        'add'=>['title','url'],
        'edit'=>['title','url'],
    ];
}