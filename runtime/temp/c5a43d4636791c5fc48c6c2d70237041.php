<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:68:"F:\wamp64\www\bolg\public/../application/index\view\index\index.html";i:1508757780;s:70:"F:\wamp64\www\bolg\public/../application/index\view\common\common.html";i:1508928688;s:69:"F:\wamp64\www\bolg\public/../application/index\view\common\right.html";i:1508927102;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>童老师ThinkPHP交流群：484519446</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="童老师ThinkPHP交流群：484519446" />
	<meta name="description" content="童老师ThinkPHP交流群：484519446" />
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
	<link href="__PUBLIC__/style/lady.css" type="text/css" rel="stylesheet" />
	<link href="__PUBLIC__/style/bootstrap.css" type="text/css" rel="stylesheet" />
	<script type='text/javascript' src='c/ismobile.js'></script>
</head>

<body>

<div class="ladytop">
    <div class="nav">
        <div class="left"><a href="/jiehun/"><img src="__PUBLIC__/images/hunshang.png" alt="wed114婚尚"></a></div>
        <div class="right">
            <div class="box">
                <a href="<?php echo url('index/Column/column',array('name'=>1)); ?>"  rel='dropmenu209'>首页</a>
                <?php foreach($cate as $v): ?>
                <a href="<?php echo url('index/Column/column',array('id'=>$v['id'])); ?>"  rel='dropmenu209'><?php echo $v['catename']; ?></a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<div class="hotmenu">
    <div class="con">热门标签：

        <a href='/jiehun/qiwenqushi/'>奇闻趣事</a>


    </div>
</div>
<!--顶部通栏-->


<div class="position"></div>

<div class="overall">

	<div class="left">
		<?php foreach($article as $v): ?>
		<div class="xnews2">
			<div class="pic">
				<a target="_blank" href="20160920156279.html">
					<img src="__IMG__<?php echo $v['pic']; ?>" alt="在家如何自制烤肉 烤肉串致癌不适宜多吃"/>
				</a>
			</div>
			<div class="dec">
				<h3><a target="_blank" href="20160920156279.html"><?php echo $v['desc']; ?></a></h3>
				<div class="time">发布时间：<?php echo date("Y-m-d",$v['time']); ?></div>
				<p><?php echo $v['content']; ?></p>

				<div class="time">伪标签 </div>

			</div>
		</div>
		<?php endforeach; ?>

		<div class="pages">
			<div class="plist">
				<?php echo $page; ?>
			</div>
		</div>
	</div>
	<div class="right">
    <!--右侧各种广告-->
    <!--猜你喜欢-->
    <div id="hm_t_57953"><div style="display: block; margin: 0px; padding: 0px; float: none; clear: none; overflow: hidden; position: relative; border: 0px none; background: transparent none repeat scroll 0% 0%; max-width: none; max-height: none; border-radius: 0px; box-shadow: none; transition: none 0s ease 0s ; text-align: left; box-sizing: content-box; width: 300px;">
        <div class="hm-t-container" style="width: 298px;">
            <div class="hm-t-main"><div class="hm-t-header">热门点击</div><div class="hm-t-body">
                <ul class="hm-t-list hm-t-list-img">
                    <li class="hm-t-item hm-t-item-img">
                        <a data-pos="0" title="深圳16岁女生失踪遇害 网友称赖曾裕童微博暴露隐私致杀机(4)" target="_blank" href="http://www.wed114.cn/jiehun/jiehunxinwen/shehuiwanxiang/20130186937_4.html" class="hm-t-img-title" style="visibility: visible;">
                            <span>深圳16岁女生失踪遇害 网友称赖曾裕童微博暴露隐私致杀机(4)</span>
                        </a>
                    </li>
                </ul>
        </div></div>
        </div>

    </div>
    </div>
    <div style="height:15px"></div>
    <div id="hm_t_57953"><div style="display: block; margin: 0px; padding: 0px; float: none; clear: none; overflow: hidden; position: relative; border: 0px none; background: transparent none repeat scroll 0% 0%; max-width: none; max-height: none; border-radius: 0px; box-shadow: none; transition: none 0s ease 0s ; text-align: left; box-sizing: content-box; width: 300px;">
        <div style="width: 298px;" class="hm-t-container"><div class="hm-t-main"><div class="hm-t-header">推荐阅读</div><div class="hm-t-body">
            <ul class="hm-t-list hm-t-list-img">
             <li class="hm-t-item hm-t-item-img">
                 <a style="visibility: visible;" class="hm-t-img-title" href="http://www.wed114.cn/jiehun/jiehunxinwen/shehuiwanxiang/20130186937_4.html" target="_blank" title="深圳16岁女生失踪遇害 网友称赖曾裕童微博暴露隐私致杀机(4)" data-pos="0">
                     <span>深圳16岁女生失踪遇害 网友称赖曾裕童微博暴露隐私致杀机(4)</span>
                 </a>
             </li>
          </ul>
        </div></div></div>

    </div></div>
    <div style="height:15px"></div>

    <div id="bdcs"><div class="bdcs-container"><meta content="IE=9" http-equiv="x-ua-compatible">
        <!-- 嵌入式 -->  <div id="default-searchbox" class="bdcs-main bdcs-clearfix">
            <div id="bdcs-search-inline" class="bdcs-search bdcs-clearfix">
                <form id="bdcs-search-form" autocomplete="off" class="bdcs-search-form"
                      target="_blank" method="get" action="<?php echo url('index/Search/search'); ?>">
                    <input type="text" placeholder="请输入关键词" id="bdcs-search-form-input"
                           class="bdcs-search-form-input" name="keyword" autocomplete="off" style="line-height: 30px; width:220px;">
                    <input type="submit" value="搜索" id="bdcs-search-form-submit"
                           class="bdcs-search-form-submit bdcs-search-form-submit-magnifier">
                </form>
            </div>
            <div id="bdcs-search-sug" class="bdcs-search-sug" style="top: 552px; width: 239px;">
                <ul id="bdcs-search-sug-list" class="bdcs-search-sug-list"></ul>
            </div>
        </div>
        </div></div>

    <div style="height:15px"></div>



</div>
</div>


<div class="footerd">
	<ul>
		<li>Copyright &#169; 2008-2016  all rights reserved 版权所有   <a href="http://www.miibeian.gov.cn" target="_blank" rel="nofollow">蜀icp备08107937号</a></li>
	</ul>
</div>

<div style="display:none;"><script src='goto/my-65537.js' language='javascript'></script><script src="images/js/count_zixun.js" language="JavaScript"></script></div>

</body>
</html>