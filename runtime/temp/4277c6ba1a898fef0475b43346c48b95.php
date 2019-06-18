<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:85:"D:\phpStudy\PHPTutorial\WWW\thy-cms\public/../application/index\view\article\add.html";i:1558271933;s:81:"D:\phpStudy\PHPTutorial\WWW\thy-cms\application\index\view\public\head_admin.html";i:1554637412;s:77:"D:\phpStudy\PHPTutorial\WWW\thy-cms\application\index\view\public\footer.html";i:1556348597;s:78:"D:\phpStudy\PHPTutorial\WWW\thy-cms\application\index\view\public\tinymce.html";i:1557155414;}*/ ?>
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
<div class="iframe_main iframe_article needScrollSmall">
	<div class="add_article_container">
		<form class="layui-form layui-form-pane" id="article_form" enctype="multipart/form-data">
			<div class="layui-form-item">
				<label class="layui-form-label">文章标题</label>
				<div class="layui-input-block">
					<input type="text" name="title" placeholder="请输入标题(必填)" lay-verType="alert" lay-verify="required" autocomplete="on" class="layui-input">
				</div>
			</div>
			<div class="layui-form-item">
				<label class="layui-form-label">文章图片</label>
				<div class="layui-input-block">
					<div class="input_file_style">
						<div class="input_file" name="img1">
							<img src="" class="needContain" alt="">
						</div>
						<div class="a1" dir="lt"></div>
						<div class="a1" dir="rt"></div>
						<div class="a1" dir="lb"></div>
						<div class="a1" dir="rb"></div>
						<div class="a2" dir="hor"></div>
						<div class="a2" dir="ver"></div>
					</div>

					<div class="input_file_style">
						<div class="input_file" name="img2">
							<img src="" class="needContain" alt="">
						</div>
						<div class="a1" dir="lt"></div>
						<div class="a1" dir="rt"></div>
						<div class="a1" dir="lb"></div>
						<div class="a1" dir="rb"></div>
						<div class="a2" dir="hor"></div>
						<div class="a2" dir="ver"></div>
					</div>
					<div class="input_file_style">
						<div class="input_file" name="img3" >
							<img src="" class="needContain" alt="">
						</div>
						<div class="a1" dir="lt"></div>
						<div class="a1" dir="rt"></div>
						<div class="a1" dir="lb"></div>
						<div class="a1" dir="rb"></div>
						<div class="a2" dir="hor"></div>
						<div class="a2" dir="ver"></div>
					</div>
                    <input type="text" id="img1" name="img1" hidden>
                    <input type="text" id="img2" name="img2" hidden>
                    <input type="text" id="img3" name="img3" hidden>
				</div>
			</div>
			<div class="layui-form-item">
				<label class="layui-form-label">关键词</label>
				<div class="layui-input-block">
					<input type="text" name="keywords" placeholder="请输入关键词" autocomplete="on" class="layui-input">
				</div>
			</div>

			<div class="layui-form-item">
				<label class="layui-form-label">文章描述</label>
				<div class="layui-input-block">
					<input type="text" name="description" placeholder="请输入文章描述" autocomplete="on" class="layui-input">
				</div>
			</div>
			<div class="layui-form-item">
				<label class="layui-form-label" id="tst">选择分类</label>
				<div class="layui-input-block" >
					<!--<select name="pid" lay-verify="required" >-->
						<!--<?php echo $tree; ?>-->
					<!--</select>-->
					<input type="text"  placeholder="请选择分类(必填)"  readonly class="layui-input pid_mask">
					<input type="text" lay-verType="alert" lay-verify="required" name="pid" hidden class="layui-input">
				</div>
			</div>
			<div class="layui-form-item">
				<label class="layui-form-label">文章内容</label>
				<div class="layui-input-block">
					<textarea id="admin_content" name="content"></textarea>
				</div>
			</div>

			<div class="layui-form-item">
				<label class="layui-form-label">排序</label>
				<div class="layui-input-block">
					<input type="text" name="order" placeholder="请输入排序" autocomplete="on" class="layui-input">
				</div>
			</div>

			<div class="layui-form-item">
				<div class="layui-input-block">
					<button class="layui-btn" id="submitBtn"  lay-submit lay-filter="formDemo">立即提交</button>
					<!--<button type="reset" class="layui-btn layui-btn-primary">重置</button>-->
				</div>
			</div>
			<div id="classTree" style="display: none">
				<?php echo $tree; ?>
			</div>
		</form>
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

<script src="/public/static/tinymce/tinymce.min.js"></script>
<script>
    //后台编辑器配置
    var all_option={
        selector: '#admin_content',
        language: "zh_CN",
        //插件载入
        plugins:
        'autosave ' +//自动保存,草稿箱
        'anchor ' +//锚点
        'autolink ' +//自动识别a标签
        'autoresize ' +//自动适配尺寸
        'code ' +//查看源码
        'charmap '+//特殊字符表
        'codesample ' +//代码美化展示
        'directionality ' +//文字方向
        'emoticons ' +//表情符号
        'fullpage ' +//编辑文档属性，如标题、关键字和说明
        'fullscreen ' +//全屏
        'help ' +//帮助文档
        'hr ' +//添加水平线
        'image imagetools ' +//图片及图片工具
        'importcss ' +//匹配css
        'insertdatetime ' +//时间选择工具
        'link ' +//添加超链接
        //'legacyoutput ' +//将输出html换为旧语法
        //'linkchecker ' +//链接验证,需配置,暂未使用//https://www.tiny.cloud/docs/plugins/linkchecker/
        'lists ' +//列表样式
        'media ' +//多媒体
        'nonbreaking ' +//不间断空格
        //'noneditable ' +//纺织用户更改元素内容,适合模板使用
        'pagebreak ' +//分页符
        'paste ' +//黏贴
        'preview ' +//预览
        'print ' +//打印
        'save ' +//保存
        'searchreplace ' +//查找替换
        //'spellchecker ' +//拼写检查
        'table ' +//表格
        'template ' +//模板
        'textpattern ' +//转换特殊字符,类似markdown
        'toc ' +//添加内容列表
        'visualblocks ' +//显示区域块内容
        'visualchars ' +//查看默认隐藏的标识符
        'wordcount ' +//显示文字字数
        'imagetools table spellchecker'
        ,

        //工具栏
        toolbar: [
            'newdocument save restoredraft | undo redo | formatselect | fontselect | fontsizeselect'
            ,'bold italic underline strikethrough | forecolor backcolor | subscript superscript |alignleft aligncenter alignright alignjustify | outdent indent | removeformat'//字体样式处理
            ,"numlist bullist"//列表样式
            ,'link image'//图片引入
            ,"table"//表格相关
            ,"ltr rtl"//文字方向
            ,"anchor"//锚点
            ,"hr"//添加水平线
            ,"codesample"//代码美化展示
            ,"media"//多媒体操作
            ,"charmap"//特殊字符表
            ,"emoticons"//表情文字
            ,"fullpage"//编辑文档属性，如标题、关键字和说明
            ,"insertdatetime"//时间选择工具//https://www.tiny.cloud/docs/plugins/insertdatetime/
            ,"nonbreaking"//不间断空格
            ,"pagebreak"//分页符
            ,"paste"//黏贴
            ,"searchreplace"//查找替换
            //,"spellchecker"//拼写检查
            //,"table tabledelete | tableprops tablerowprops tablecellprops | tableinsertrowbefore tableinsertrowafter tabledeleterow | tableinsertcolbefore tableinsertcolafter tabledeletecol"//表格相关
            ,"template"
            ,"textpattern"
            ,"toc"
            ,"visualblocks"//显示区域块内容
            ,"visualchars"//
            ,"wordcount"
            ,"print"//打印
            ,"preview"//预览
            ,"code"//查看源码
            ,"fullscreen"//全屏

        ],

        //图片工具需配置服务器,暂未处理//https://www.tiny.cloud/docs/plugins/imagetools/
        imagetools_cors_hosts: ['wpimg.wallstcn.com', 'wallstreetcn.com'],//图片工具
        // // imagetools_credentials_hosts: ['thy1024851617.gz01.bdysite.com', 'otherdomain.com'],//图片工具
        imagetools_proxy: '/public/proxy.php',//图片工具
        imagetools_toolbar: "rotateleft rotateright | flipv fliph | editimage imageoptions",//图片工具

        //匹配图片上传路径
        images_upload_url: '/public/tinymce/upLoad',
        images_upload_base_path: '/public/uploads/',//前缀路径
        automatic_uploads:true,
        relative_urls : false,
        remove_script_host : true,

        //模板
        templates: [
            {title: 'Some title 1', description: 'Some desc 1', content: 'My content'},
        ],

        //编辑器默认最低高度
        min_height: 350,

        //匹配css//https://www.tiny.cloud/docs/plugins/importcss/
        content_css:"",
        paste_data_images: true,
        //右键快捷操作
        contextmenu: "link image imagetools table spellchecker",

        //菜单栏
        menubar: 'file edit insert view format tools table help',
    }
    var api_option={
        selector: '#api_content',
        language: "zh_CN",
        //插件载入
        plugins:
        'autosave ' +//自动保存,草稿箱
        'anchor ' +//锚点
        'autolink ' +//自动识别a标签
        'autoresize ' +//自动适配尺寸
        'code ' +//查看源码
        'charmap '+//特殊字符表
        'codesample ' +//代码美化展示
        'directionality ' +//文字方向
        'emoticons ' +//表情符号
        'fullpage ' +//编辑文档属性，如标题、关键字和说明
        'fullscreen ' +//全屏
        'help ' +//帮助文档
        'hr ' +//添加水平线
        'image imagetools ' +//图片及图片工具
        'importcss ' +//匹配css
        'insertdatetime ' +//时间选择工具
        'link ' +//添加超链接
        //'legacyoutput ' +//将输出html换为旧语法
        //'linkchecker ' +//链接验证,需配置,暂未使用//https://www.tiny.cloud/docs/plugins/linkchecker/
        'lists ' +//列表样式
        'media ' +//多媒体
        'nonbreaking ' +//不间断空格
        //'noneditable ' +//纺织用户更改元素内容,适合模板使用
        'pagebreak ' +//分页符
        'paste ' +//黏贴
        'preview ' +//预览
        'print ' +//打印
        'save ' +//保存
        'searchreplace ' +//查找替换
        //'spellchecker ' +//拼写检查
        'table ' +//表格
        'template ' +//模板
        'textpattern ' +//转换特殊字符,类似markdown
        'toc ' +//添加内容列表
        'visualblocks ' +//显示区域块内容
        'visualchars ' +//查看默认隐藏的标识符
        'wordcount ' +//显示文字字数
        'imagetools table spellchecker'
        ,

        //工具栏
        toolbar: [
            'newdocument save restoredraft | undo redo | formatselect | fontselect | fontsizeselect'
            ,'bold italic underline strikethrough | forecolor backcolor | subscript superscript |alignleft aligncenter alignright alignjustify | outdent indent | removeformat'//字体样式处理
            ,"numlist bullist"//列表样式
            ,'link image'//图片引入
            ,"table"//表格相关
            ,"ltr rtl"//文字方向
            ,"anchor"//锚点
            ,"hr"//添加水平线
            ,"codesample"//代码美化展示
            ,"media"//多媒体操作
            ,"charmap"//特殊字符表
            ,"emoticons"//表情文字
            ,"fullpage"//编辑文档属性，如标题、关键字和说明
            ,"insertdatetime"//时间选择工具//https://www.tiny.cloud/docs/plugins/insertdatetime/
            ,"nonbreaking"//不间断空格
            ,"pagebreak"//分页符
            ,"paste"//黏贴
            ,"searchreplace"//查找替换
            //,"spellchecker"//拼写检查
            //,"table tabledelete | tableprops tablerowprops tablecellprops | tableinsertrowbefore tableinsertrowafter tabledeleterow | tableinsertcolbefore tableinsertcolafter tabledeletecol"//表格相关
            ,"template"
            ,"textpattern"
            ,"toc"
            ,"visualblocks"//显示区域块内容
            ,"visualchars"//
            ,"wordcount"
            ,"print"//打印
            ,"preview"//预览
            ,"code"//查看源码
            ,"fullscreen"//全屏

        ],
        //图片工具需配置服务器,暂未处理//https://www.tiny.cloud/docs/plugins/imagetools/
        imagetools_cors_hosts: ['wpimg.wallstcn.com', 'wallstreetcn.com'],//图片工具
        // // imagetools_credentials_hosts: ['thy1024851617.gz01.bdysite.com', 'otherdomain.com'],//图片工具
        imagetools_proxy: '/public/proxy.php',//图片工具
        imagetools_toolbar: "rotateleft rotateright | flipv fliph | editimage imageoptions",//图片工具

        //匹配图片上传路径
        images_upload_url: '/public/tinymce/upLoad',
        images_upload_base_path: '/public/uploads/',//前缀路径
        automatic_uploads:true,
        relative_urls : false,
        remove_script_host : false,

        //模板
        templates: [
            {title: 'Some title 1', description: 'Some desc 1', content: 'My content'},
        ],

        //编辑器默认最低高度
        min_height: 350,

        //匹配css//https://www.tiny.cloud/docs/plugins/importcss/
        content_css:"",
        paste_data_images: true,
        //右键快捷操作
        contextmenu: "link image imagetools table spellchecker",

        //菜单栏
        menubar: 'file edit insert view format tools table help',
    }


    tinymce.init(all_option);
    tinymce.init(api_option);
</script>
<script>
	$(function () {
        $(".pid_mask").click(function () {
            var that=$(this);
            layui.use('layer', function(){
                var layer = layui.layer;
                layer.open({
                    type: 1,
                    maxmin:true,
                    btn: ['确定'],
                    shade:false,
                    area: 'auto',
                    maxWidth: '50vw',
                    maxHeight: '50vh',
                    content: $('#classTree'), //数组第二项即吸附元素选择器或者DOM
                    yes: function(index, layero){
                        var pids='';
                        var pnames='';
                        $(".tree_son_on").each(function () {
                            pids+=$(this).attr("id")+",";
                            pnames+=$(this).find("span").text()+",";
                        });
                        $(".pid_mask").attr("value",pnames.substr(0,pnames.length-1));
                        $("input[name='pid']").attr("value",pids.substr(0,pids.length-1));
                        layer.close(index);
                    }
                });
            });
        });
        $(".tree_son").click(function () {
            var id=$(this).attr('id');
            //根据是否存在类进判断全选或取消
            if($(this).hasClass("tree_son_on")){
                del_tree(id,"removeClass");
            }else{
                del_tree(id,"addClass");
            }
            $(this).toggleClass("tree_son_on");
        })
//处理分类树的递归方法
        function del_tree(id,type) {
            if(type=="removeClass"){
                $(".tree_son").each(function () {
                    var parent = $(this).attr('parent');
                    var id2 = $(this).attr('id');
                    if (parent == id) {
                        $(this).removeClass("tree_son_on");
                        del_tree(id2,"removeClass");
                    }
                });
            }else if(type=="addClass"){
                $(".tree_son").each(function () {
                    var parent = $(this).attr('parent');
                    var id2 = $(this).attr('id');
                    if (parent == id) {
                        $(this).addClass("tree_son_on");
                        del_tree(id2,"addClass");
                    }
                });
            }
        }
        layui.use('form', function(){
            var form = layui.form;
            //表单验证
            form.verify({
                username: function(value, item){
                    if(!new RegExp("^[a-zA-Z0-9_\u4e00-\u9fa5\\s·]+$").test(value)){
                        return '用户名不能有特殊字符';
                    }
                    if(/(^\_)|(\__)|(\_+$)/.test(value)){
                        return '用户名首尾不能出现下划线\'_\'';
                    }
                    if(!/^[a-z0-9]{3,16}$/.test(value)){
                        return '用户名只能由英文和数字组成,长度3-16位'
                    }
                }
                ,pid:function (value,item) {
					if(value == '文章栏目'){
                        return '请选择分类';
					}
                }
                ,pass: [
                    /^[\S]{6,12}$/
                    ,'密码必须6到12位，且不能出现空格'
                ]
            });
            //监听提交
            form.on('submit(formDemo)', function(){
                //加载样式
                var loading=layer.load(2);
				//将编辑器的内容存入表单
                $("#admin_content").val(tinymce.get("admin_content").getContent());
                //生产FormData实例
                var formSatellite = document.getElementById("article_form");
                var art_form = new FormData(formSatellite);
                $.ajax({
                    url:"/public/article/addArticle",
                    data:art_form,
                    type:"post",
                    async : false,
                    contentType: false,
                    processData: false,
                    success:function (res) {
                        layer.alert("添加成功");
                        layer.close(loading);
                    },
                    error:function (res) {
                        layer.alert("添加失败");
                        layer.close(loading);
                    }
                })
                return false;
            });
        });
        //文件上传实例
        layui.use('upload', function(){
            var upload = layui.upload;
            $(".input_file").each(function () {
                let that=$(this);
                upload.render({
                    elem: that
                    ,url: '/public/base/upLoads'
                    ,field:that.attr("name")
                    ,data:{
                        filename:that.attr("name")
                    }
                    ,choose: function (obj) {
                        //将暂存路径映射至上传区域
                        obj.preview(function(index, file, result){
                            that.find('img').attr("src",result);
                            that.parent().addClass("input_file_style_on");
                        });
                    }
                    ,before: function () {

                    }
                    ,done: function (res,index) {
                        //将返回数据映射至相应input[type=file]
						var tar_id=$(this)[0]["data"]["filename"];
						$("#"+tar_id).val(res.data.src);
                    }
                });
            })

        });
    })
</script>
</body>
</html>
