<?php
namespace app\admin\validate;

use think\Validate;

class Cate extends Validate
{
    protected $rule=[
        'catename'=>'require|unique'
    ];

    protected $message=[
        'catename.require'=>'栏目标题必填',
        'catename.unique'=>'栏目标题不可重复',
    ];

    protected $scene=[
        'add'=>['catename']
    ];
}