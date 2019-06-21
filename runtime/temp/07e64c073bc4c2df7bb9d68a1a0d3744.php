<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:66:"D:\WWW\thy-cms\public/../application/index\view\article\index.html";i:1561078100;s:60:"D:\WWW\thy-cms\application\index\view\public\head_admin.html";i:1554637412;s:56:"D:\WWW\thy-cms\application\index\view\public\footer.html";i:1556348597;}*/ ?>
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
	<!--表格主体-->
	<table id="articleTable" lay-filter="article" lay-data="{id: 'idTest'}" type="radio"></table>

	<!--表格操作栏-->
	<script type="text/html" id="editBar">
		<a class="layui-btn layui-btn-xs layui-btn-primary" lay-event="detail">查看</a>
		<a class="layui-btn layui-btn-xs layui-btn-thy" lay-event="edit">编辑</a>
		<a class="layui-btn layui-btn-xs layui-btn-danger" lay-event="del">删除</a>
	</script>

	<!--顶部工具栏-->
	<script type="text/html" id="toolBar">
		<div class="layui-btn-container">
			<button class="layui-btn layui-btn-sm layui-btn-thy" lay-event="add">添加</button>
			<button class="layui-btn layui-btn-sm layui-btn-thy" lay-event="delete">删除</button>
			<!--<button class="layui-btn layui-btn-sm" lay-event="update">编辑</button>-->
		</div>
	</script>
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
    $(function () {
        layui.use('table', function(){
            var table = layui.table;

            //表格公用参数设置
            var tableOptions={
                elem: '#articleTable'
                ,url: '/public/article/getData' //数据接口
                ,page: true //开启分页
				,limit:15
				,limits:[15,30,45,60]
                ,toolbar: '#toolBar'
                ,loading:true
                ,parseData: function(res){ //res 即为原始返回的数据
                    return {
                        "code": res.code, //解析接口状态
                        "msg": res.msg, //解析提示文本
                        "count": res.count, //解析数据长度
                        "data": res.data//解析数据列表
                    };
                },
                cols:[[
                    {field: 'select', type: 'checkbox', width:80, fixed: 'left'}
                    ,{field: 'id', title: 'ID', width:80, sort: true, fixed: 'left'}
                    ,{field: 'title', title: '标题',edit:"text",minwidth:350}
                    ,{field: 'cat', title: '分类', width:200, sort: true}
                    ,{field: 'img1', title: '图片',width:70
                        ,templet: function(d){
                            //调取文章的图片
                            if (d.img1){
                                return "<img style='max-width: 100%;max-height: 100%' src='/public/uploads/"+d.img1+"'>"
                            }
                            else{
                                return "<img style='max-width: 100%;max-height: 100%' src='/public/static/Image/logo.png'>"
                            }
                        }
                    }
                    ,{field: 'order',edit:"text", title: '排序',width:70,sort: true}
                    ,{field: 'time', title: '添加时间',sort: true,width:180}
                    // ,{title: '操作',width:160
                    //    ,templet: function(d){
                    //        return "<a class='layui-btn layui-btn-xs layui-btn-thy' href='/public/article/edit/?id="+d.id+"'>编辑</a>" +
                    // 		"<a class='layui-btn layui-btn-xs layui-btn-danger' href='/public/article/delArticle/?id=\"+d.id+\"'>删除</a>"
                    //    }
                    // }
                    ,{title: '操作',width:170,toolbar:"#editBar"}

                ]]

            }

            //表单数据读取
            table.render(tableOptions);

            //监听单元格编辑
            table.on('edit(article)', function(obj){ //注：edit是固定事件名，test是table原始容器的属性 lay-filter="对应的值"
                // console.log(obj.value); //得到修改后的值
                // console.log(obj.field); //当前编辑的字段名
                // console.log(obj.data); //所在行的所有相关数据
                var editData=new Object()
                editData[obj.field]=obj.value;
                $.ajax({
                    url: "/public/article/editArticle?id="+obj.data.id,
                    type: 'post',
                    dataType: 'json',
                    data:editData,
                    success: function (res) {
                        layer.msg('修改成功');
                    },
                    error:function (res) {
                        layer.msg("修改成功");
                    }
                })

            });

            //表单操作的监听事件
            table.on('tool(article)', function(obj){ //注：tool是工具条事件名，test是table原始容器的属性 lay-filter="对应的值"
                var data = obj.data; //获得当前行数据
                var layEvent = obj.event; //获得 lay-event 对应的值（也可以是表头的 event 参数对应的值）
                var tr = obj.tr; //获得当前行 tr 的DOM对象
                if(layEvent === 'detail'){ //查看
                   	window.open("http://www.thy-blog.com/#/article_info/"+data.id);
                } else if(layEvent === 'del'){ //删除
                    layer.confirm('真的删除行么', function(index){
                        layer.close(index);
                        //提交删除方法
                        $.ajax({
                            url: "/public/article/delArticle",
                            type: 'post',
                            dataType: 'json',
                            data:{
                                id:data.id
                            },
                            success: function (data) {
                                if(data != 0){
                                    obj.del(); //删除对应行（tr）的DOM结构，并更新缓存
                                    layer.msg('删除成功');
                                }else{
                                    layer.msg('删除失败');
                                }
                            },
                        })
                    });
                } else if(layEvent === 'edit'){ //编辑
                    var id=obj.data.id;
                    let text=obj.data.title;
                    let aHref=$.parseHTML("/public/article/edit?id="+id);
                    let aTarget="admin_body";
                    parent.window.parentAddTab(aHref,text,aTarget);
                }
            });

            //顶部操作栏
            table.on('toolbar(article)', function(obj){
                var checkStatus = table.checkStatus(obj.config.id);
                switch(obj.event){
                    case 'add':
                        let text="添加文章";
                        let aHref=$.parseHTML("/public/article/add");
                        let aTarget="admin_body";
                        parent.window.parentAddTab(aHref,text,aTarget);
                        break;
                    case 'delete':

                        //将选中的元素id转为字符串
                        layer.confirm('真的删除行么', function(index){
                            layer.close(index);
                            var id_str='';
                            for(var i=0;i<checkStatus.data.length;i++){
                                id_str+=checkStatus.data[i].id+","
                            }
                            id_str=id_str.substring(0,id_str.length-1);

                            //提交删除方法
                            $.ajax({
                                url: "/public/article/delAllArticle",
                                type: 'post',
                                dataType: 'json',
                                data:{
                                    id:id_str
                                },
                                success: function (data) {
                                    if(data != 0){
                                        layui.use('layer', function(){
                                            var layer = layui.layer;
                                            layer.msg('删除成功');

                                            //重新渲染表格
                                            var tableIns = table.render(tableOptions);
                                            tableIns.reload({
                                                page: {
                                                    curr: 1
                                                }
                                            });
                                        });
                                    }else{
                                        layui.use('layer', function(){
                                            var layer = layui.layer;
                                            layer.msg('删除失败');
                                        });
                                    }
                                },
                            })
                        });
                        break;
                    case 'update':
                        layer.msg('编辑');
                        break;
                };
            });
        });
    })
</script>


</body>
</html>