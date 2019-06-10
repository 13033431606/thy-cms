define({ "api": [
  {
    "type": "post",
    "url": "/article/:id",
    "title": "文章数据获取",
    "name": "Article",
    "group": "Article",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>单个文章id,或文章id集合(用&quot;,&quot;分割)</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "请求样式:",
          "content": "data:{\"id\":\"130\"}\ndata:{\"id\":\"129,130\"}",
          "type": "js"
        }
      ]
    },
    "success": {
      "fields": {
        "成功返回": [
          {
            "group": "成功返回",
            "type": "Number",
            "optional": false,
            "field": "code",
            "description": "<p>状态标识码</p>"
          },
          {
            "group": "成功返回",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>状态信息</p>"
          },
          {
            "group": "成功返回",
            "type": "Array",
            "optional": false,
            "field": "data",
            "description": "<p>文章数组</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "样本数据:",
          "content": "{\n\"code\": \"200\",\n\"message\": \"链接成功\",\n\"data\": [{\n\"id\": 130,\n\"pid\": \"22\",\n\"title\": \"imagetools\",\n\"keywords\": \"\",\n\"description\": \"https:\\/\\/www.tiny.cloud\\/docs\\/plugins\\/imagetools\\/\",\n\"img\": \"\",\n\"content\": \"<!DOCTYPE html>\\r\\n<html>\\r\\n<head>\\r\\n<\\/head>\\r\\n<body>\\r\\n\\r\\n<\\/body>\\r\\n<\\/html>\",\n\"time\": \"2019-03-14 11:05:44\",\n\"order\": 0,\n\"click\": 0,\n\"system\": 0,\n\"img1\": \"20190427\\\\ba79fe2829e42419bd71c0b04e090d0c.jpg\",\n\"img2\": \"\",\n\"img3\": \"\",\n\"img4\": \"\",\n\"img5\": \"\",\n\"img6\": \"\"\n}]\n}",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "./api.php",
    "groupTitle": "Article",
    "error": {
      "examples": [
        {
          "title": "访问失败:",
          "content": "{\n\"code\": \"502\",\n\"message\": \"链接失败\",\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "type": "post",
    "url": "/category/:id",
    "title": "分类数据获取",
    "name": "Category",
    "group": "Category",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>单个分类id,或分类id集合(用&quot;,&quot;分割)</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "请求样式:",
          "content": "data:{\"id\":\"19\"}\ndata:{\"id\":\"18,19\"}",
          "type": "js"
        }
      ]
    },
    "success": {
      "examples": [
        {
          "title": "样本数据:",
          "content": "{\n\"code\": \"200\",\n\"message\": \"链接成功\",\n\"data\": [{\n\"id\": 19,\n\"code\": \"1,13,15,19,\",\n\"name\": \"js\",\n\"parent\": \"15\",\n\"order\": 0,\n\"type\": 1,\n\"keywords\": \"\",\n\"description\": \"\",\n\"img\": \"\",\n\"content\": \"\"\n}]\n}",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "./api.php",
    "groupTitle": "Category",
    "error": {
      "examples": [
        {
          "title": "访问失败:",
          "content": "{\n\"code\": \"502\",\n\"message\": \"链接失败\",\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "type": "post",
    "url": "/getTree/:id",
    "title": "分类树结构获取",
    "name": "getTree",
    "group": "Category",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>单个父辈id</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "请求样式:",
          "content": "data:{\"id\":\"15\"}",
          "type": "js"
        }
      ]
    },
    "success": {
      "examples": [
        {
          "title": "样本数据:",
          "content": "[{\n\"id\": 15,\n\"code\": \"1,13,15,\",\n\"name\": \"前端\",\n\"parent\": \"13\",\n\"order\": 0,\n\"type\": 1,\n\"keywords\": \"\",\n\"description\": \"\",\n\"img\": \"\",\n\"content\": \"\",\n\"son\": [{\n\"id\": 19,\n\"code\": \"1,13,15,19,\",\n\"name\": \"js\",\n\"parent\": \"15\",\n\"order\": 0,\n\"type\": 1,\n\"keywords\": \"\",\n\"description\": \"\",\n\"img\": \"\",\n\"content\": \"\"\n}, {\n\"id\": 20,\n\"code\": \"1,13,15,20,\",\n\"name\": \"css\",\n\"parent\": \"15\",\n\"order\": 0,\n\"type\": 1,\n\"keywords\": \"\",\n\"description\": \"\",\n\"img\": \"\",\n\"content\": \"\"\n}, {\n\"id\": 14,\n\"code\": \"1,13,15,14,\",\n\"name\": \"vue\",\n\"parent\": \"15\",\n\"order\": 0,\n\"type\": 1,\n\"keywords\": \"\",\n\"description\": \"\",\n\"img\": \"\",\n\"content\": \"\"\n}, {\n\"id\": 22,\n\"code\": \"1,13,15,22,\",\n\"name\": \"tinymce\",\n\"parent\": \"15\",\n\"order\": 0,\n\"type\": 1,\n\"keywords\": \"\",\n\"description\": \"\",\n\"img\": \"\",\n\"content\": \"<!DOCTYPE html>\\r\\n<html>\\r\\n<head>\\r\\n<\\/head>\\r\\n<body>\\r\\n\\r\\n<\\/body>\\r\\n<\\/html>\"\n}]\n}]",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "./api.php",
    "groupTitle": "Category"
  },
  {
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "optional": false,
            "field": "varname1",
            "description": "<p>No type.</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "varname2",
            "description": "<p>With type.</p>"
          }
        ]
      }
    },
    "type": "",
    "url": "",
    "version": "0.0.0",
    "filename": "./doc/main.js",
    "group": "D__phpStudy_PHPTutorial_WWW_thycms_public_api_doc_main_js",
    "groupTitle": "D__phpStudy_PHPTutorial_WWW_thycms_public_api_doc_main_js",
    "name": ""
  },
  {
    "type": "post",
    "url": "/:token",
    "title": "令牌",
    "name": "Token",
    "group": "Token",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "token",
            "defaultValue": "thycms",
            "description": "<p>用来识别api调用者</p>"
          }
        ]
      }
    },
    "version": "0.0.0",
    "filename": "./api.php",
    "groupTitle": "Token"
  }
] });
