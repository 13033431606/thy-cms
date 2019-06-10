<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:64:"D:\WWW\thy-cms\public/../application/index\view\admin\index.html";i:1558623448;s:60:"D:\WWW\thy-cms\application\index\view\public\head_admin.html";i:1554637412;s:57:"D:\WWW\thy-cms\application\index\view\public\sidebar.html";i:1558106714;s:56:"D:\WWW\thy-cms\application\index\view\public\footer.html";i:1556348597;}*/ ?>
<!DOCTYPE HTML>
<html class="needScrollSmall">
<head>
	<meta charset="UTF-8">
<title>汤昊赟个人博客登陆页-不疯魔,不成活</title>
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" >
<!--<meta name="viewport" content="width=device-width initial-scale=1.0 minmum-scale=1.0 maxmun=1.0 user-scalable=no">-->
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
<link rel="Shortcut Icon" href="/public/static/Image/favicon.ico">
<link rel="stylesheet" href="/public/static/Css/normalize.min.css">
<link rel="stylesheet" href="/public/static/iconfont/iconfont.css">
<!--<link rel="stylesheet" href="/public/static/Css/animate.css">-->
<!--<link rel="stylesheet" href="/public/static/Css/magnifier.css">-->
<link rel="stylesheet" href="/public/static/Css/swiper.min.css">
<link rel="stylesheet" href="/public/static/layui/css/layui.css">
<!--<link rel="stylesheet" href="/public/static/Css/prettyPhoto.css">-->
<!--<link rel="stylesheet" href="/public/static/Css/hover/hover.css">-->
<!--<link rel="stylesheet" href="/public/static/Css/waves.min.css">-->
<!--<link rel="stylesheet" href="/public/static/Css/viewer.min.css">-->
<!--<link rel="stylesheet" href="/public/static/Css/liMarquee.css">-->
<!--<link rel="stylesheet" href="/public/static/Css/sidebar.css">-->
<!--<link rel="stylesheet" href="/public/static/Css/header.css">-->
<link rel="stylesheet" href="/public/static/Css/admin.css">
<link rel="stylesheet" href="/public/static/Css/media.css">
<!--<link rel="stylesheet" href="/public/static/Css/footer.css">-->
<script>
    /* 检查ie浏览器版本 */
    (function() {
        var o = navigator.userAgent.match(/MSIE (\d+)/);
        o = o && o[1];
        // ie9 以下 || o != null
        if (!!o && o < 9) {
            // 更新页面
            var newUrl=" /public/index/update"
            location.href = newUrl;
        }
    })();
</script>



</head>
<body>
<style>
	body { scrollbar-highlight-color: buttonface; scrollbar-shadow-color: buttonface; scrollbar-3dlight-color: buttonhighlight; scrollbar-track-color: #eeeeee; scrollbar-darkshadow-color: buttonshadow}
</style>
<div class="admin_main">
	<aside class="sidebar needScrollSmall">
    <div class="logo">
        <img src="/public/static/Image/logo.png" alt="">
    </div>
    <div class="menu">
        <li>
            <div class="father_row">
                <span><i class="iconfont icon-mobanguanli"></i>内容管理</span>
                <div class="slide_down">
                    <i class="layui-icon layui-icon-down"></i>
                </div>
            </div>
            <div class="son_row">
                <a thy_id="/public/article/index" target="admin_body">
                    <span>所有文章</span>
                </a>
            </div>
            <div class="son_row">
                <a thy_id="/public/article/add" target="admin_body">
                    <span>添加文章</span>
                </a>
            </div>
            <div class="son_row">
                <a thy_id="/public/category/index" target="admin_body">
                    <span>管理分类</span>
                </a>
            </div>
        </li>
        <li>
            <div class="father_row">
                <span><i class="iconfont icon-youdaoyunbiji"></i>随时笔记</span>
                <div class="slide_down">
                    <i class="layui-icon layui-icon-down"></i>
                </div>
            </div>
            <div class="son_row">
                <a thy_id="/public/note/index" target="admin_body">
                    <span>随时笔记</span>
                </a>
            </div>
        </li>
        <li>
            <div class="father_row">
                <span><i class="iconfont icon-ai-link"></i>API</span>
                <div class="slide_down">
                    <i class="layui-icon layui-icon-down"></i>
                </div>
            </div>
            <div class="son_row">
                <a thy_id="/public/api/index" target="admin_body">
                    <span>查看API</span>
                </a>
            </div>
        </li>
        <li>
            <div class="father_row">
                <span><i class="iconfont icon-icon02"></i>基础设置</span>
                <div class="slide_down">
                    <i class="layui-icon layui-icon-down"></i>
                </div>
            </div>
        </li>
    </div>
    <div class="temp_wrapper">
        <div class="progress_slide">
            <div class="layui-progress" id="temp_progress">
                <div class="layui-progress-bar" lay-percent="<?php echo $size; ?>/100"></div>
            </div>
        </div>
        <div class="des_slide">
            <div class="a1">
                <?php echo $size; ?>MB / 100MB
            </div>
            <div class="a2" id="temp_clear" onclick="sideBar.temlClear('/public/Thy/temp_clear');">
                <i class="layui-icon layui-icon-delete"></i>
            </div>
        </div>
    </div>
</aside>
</div>
<div class="main_container "lay-allowClose="true" lay-filter="admin_body">
	<div class="admin_header">
		<div class="header_menu"></div>
		<!--顶部tab切换头-->
		<div class="header_tab swiper-container">
			<div class="swiper-wrapper">
				<!--顶部tab切换位置-->
			</div>
		</div>
	</div>
	<!--占位DIV-->
	<div class="header_top_add"></div>
	<div class="iframe_tab">
		<!--顶部tab切换iframe位置-->
		<iframe src="/public/note" class="admin_body default_iframe"  frameborder="0"></iframe>
	</div>
</div>
<script src="/public/static/Js/jquery.min.js"></script>
<!--<script src="/public/static/Js/jquery.dotdotdot.min.js"></script>-->
<!--<script src="/public/static/Js/imgauto.js"></script>-->
<!--<script src="/public/static/Js/jquery.SuperSlide.2.1.1.js"></script>-->
<!--<script src="/public/static/Js/animate.js"></script>-->
<!--<script src="/public/static/Js/SmoothScroll.js"></script>-->
<script src="/public/static/layui/layui.js"></script>
<!--<script src="/public/static/Js/polyfill.object-fit.min.js"></script>-->
<script src="/public/static/Js/swiper.min.js"></script>
<!--<script src="/public/static/Js/wow.min.js"></script>-->
<!--<script src="/public/static/Js/jquery.prettyPhoto.js"></script>-->
<!--<script src="/public/static/Js/typeit.min.js"></script>-->
<script src="/public/static/Js/public.js"></script>
<script src="/public/static/Js/thyClass.js"></script>
<script src="/public/static/Js/index.js"></script>

<!--<script src="/public/static/Js/waves.min.js"></script>-->
<!--<script src="/public/static/Js/viewer.min.js"></script>-->
<!--<script src="/public/static/Js/jquery.liMarquee.js"></script>-->
<!--<script src="/public/static/Js/TweenMax.min.js"></script>-->
<!--<script src="/public/static/Js/magnifier.js"></script>-->
<!--<script src="/public/static/Js/jquery.waypoints.min.js"></script>-->
<!--<script src="/public/static/Js/jquery.countup.js"></script>-->
<!--<script type="text/javascript">-->
    <!--$('.counter').countUp();-->
<!--</script>-->

<script>
	function parentAddTab(aHref,text,aTarget) {
        tabHeader.addTab(aHref,text);
        tabHeader.addIframe(aHref,text,aTarget);
    }
</script>
</body>
</html>