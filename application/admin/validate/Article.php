<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/21
 * Time: 18:23
 */

namespace app\admin\validate;


use think\Validate;

class Article extends Validate
{
    protected $rule=[
        'title'=>'require|unique:article|max:30|min:10',
        'author'=>'require'
    ];

    protected $message=[
        'title.require'   =>'标题必填',
        'title.unique'    =>'标题不可重复',
        'title.max'       =>'标题不可超过30字符',
        'title.min'       =>'标题不可少于10字符',
        'author.require'  =>'作者必填'
    ];

    protected $scene=[
        'add'   =>['title','author'],
        'edit'  =>['title','author']
    ];
}