<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:83:"D:\phpStudy\PHPTutorial\WWW\thycms\public/../application/index\view\note\index.html";i:1558877341;s:80:"D:\phpStudy\PHPTutorial\WWW\thycms\application\index\view\public\head_admin.html";i:1554637412;}*/ ?>
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
<script src="/public/vue/vue.js"></script>
<body>
<div class="iframe_main iframe_note needScrollSmall" id="app">
	<div class="tips">待完成 :
		<li v-for="item in todo_lists">
			{{item.content}}
		</li>
	</div>
	<div class="input">
		<input type="text" class="layui-input" v-model.trim="todo" v-on:keyup.enter="add" placeholder="输入内容...">
	</div>
	<div class="filter">
		<li v-for="(item,index) in nav" v-on:click="show(item.tar,index)" v-bind:class="{filter_li_on:index==class_current}">
			{{item.name}}
		</li>
	</div>
	<div class="lists">
		<li v-show="ing" v-for="(item,index) in todo_lists" class="todo_li">
			<div class="dot"></div>
			<div class="content" v-on:blur="edit_content(item.id,$event)" contenteditable="ture">
				{{item.content}}
			</div>
			<div class="time">
				{{item.create_time}}
			</div>
			<div class="id">
				{{item.id}}
			</div>
			<div class="finish layui-btn layui-btn-xs" v-on:click="finish(index,item.id)">
				<i class="layui-icon layui-icon-ok"></i>
			</div>
			<div class="close layui-btn layui-btn-xs layui-btn-danger" v-on:click="close(index,item.id)">
				<i class="layui-icon layui-icon-close"></i>
			</div>
		</li>
		<li v-show="done"  v-for="(item,index) in done_lists" class="done_li">
			<div class="dot"></div>
			{{item.content}}
			<div class="id">
				{{item.id}}
			</div>
			<div class="time">
				{{item.edit_time}}
			</div>
		</li>
		<li v-show="close"  v-for="(item,index) in close_lists" class="close_li">
			<div class="dot"></div>
			{{item.content}}
			<div class="id">
				{{item.id}}
			</div>
			<div class="time">
				{{item.edit_time}}
			</div>
		</li>
	</div>
</div>
<script src="/public/vue/axios.min.js"></script>
<script>
    let data_url="/public/note/data";//初始化数据
    let add_url="/public/note/add";//添加todo内容的链接
    let edit_url="/public/note/edit";//编辑的链接

	//获取当前时间
    function getNowFormatDate() {
        var date = new Date();
        var seperator1 = "-";
        var seperator2 = ":";
        var month = date.getMonth() + 1 < 10 ? "0" + (date.getMonth() + 1) : date.getMonth() + 1;
        var strDate = date.getDate() < 10 ? "0" + date.getDate() : date.getDate();
        var currentdate = date.getFullYear() + seperator1 + month + seperator1 + strDate
            + " " + date.getHours() + seperator2 + date.getMinutes()
            + seperator2 + date.getSeconds();
        return currentdate;
    }

	let app=new Vue({
		el:"#app",
		data:{
		    todo:"",
			nav:[
				{name:"全部",tar:"all"},
                {name:"未完成",tar:"ing"},
                {name:"已完成",tar:"done"},
                {name:"已删除",tar:"close"},
			],
			lists:[],//todo状态为1,done状态为2,close状态为3,保留状态为4
			todo_lists:[],
            done_lists:[],
            close_lists:[],
			class_current:'0',
			ing:true,
			done:true,
		},
		mounted:function(){
		    var that=this;
			axios({
				url:data_url
			}).then((res)=>{
			    for(let i=0,len=res.data.length;i<len;i++){
			        that.lists.push(res.data[i]);
			        switch (res.data[i].state){
						case 1:
                        	that.todo_lists.push(res.data[i]);
                        	break;
						case 2:
                            that.done_lists.push(res.data[i]);
                            break;
                        case 3:
                            that.close_lists.push(res.data[i]);
                            break;
					}
				}
			})
		},
		methods:{
            edit_content:function (id,e) {
				this.edit(id,"edit",e.target.innerText)
            }
		    ,
		    show:function (tar,index) {
				this.class_current=index;
				switch (tar){
					case "all":
                        this.ing=true;
                        this.done=true;
                        this.close=true;
                        break;
					case "ing":
                        this.ing=true;
                        this.done=false;
                        this.close=false;
                        break;
                    case "done":
                        this.ing=false;
                        this.done=true;
                        this.close=false;
                        break;
                    case "close":
                        this.ing=false;
                        this.done=false;
                        this.close=true;
                        break;
				}
            }
		    ,
		    clear:function(){
		      this.todo='';
			},
			edit:function(id,type,content=''){
		        let data={
		            id:id,
		            type:type,
					edit_content:content,
					edit_time:getNowFormatDate()
				};
				axios({
					method:"get",
					params:data,
					url:edit_url
				});

			},
		    add:function () {
                let that=this;
                if(this.todo!=''){
                    let data={
                        state:1,//todo状态为1
                        content:this.todo,
						create_time:getNowFormatDate()
                    };
                    axios({
                        method:"get",
                        url:add_url,
                        params:data,
                    }).then((res)=>{
                        that.todo_lists.unshift(data);
                        this.clear();
                    });
                }
            },
			close:function (index,id) {
                this.edit(id,"close");

                this.todo_lists[index]["edit_time"]=getNowFormatDate();
                this.todo_lists[index]["state"]=2;
                let data=this.todo_lists[index];

                this.close_lists.unshift(data);
                this.todo_lists.splice(index,1);
                this.clear();

            },
			finish:function (index,id) {
                this.edit(id,"done");

                this.todo_lists[index]["edit_time"]=getNowFormatDate();
                this.todo_lists[index]["state"]=2;
                let data=this.todo_lists[index];

                this.done_lists.unshift(data);
                this.todo_lists.splice(index,1);
                this.clear();
            }
		}
	})
</script>
</body>
</html>