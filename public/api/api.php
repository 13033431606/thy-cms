<?php
/**
 * @apiDefine FoundError
 *
 * @apiErrorExample 访问失败:
{
"code": "502",
"message": "链接失败",
}
 */

/**
 * @api {post} /:token 令牌
 * @apiName Token
 * @apiGroup Token
 * @apiParam {String} [token=thycms] 用来识别api调用者
 */

/**
 * @api {post} /article/:id 文章数据获取
 * @apiName Article
 * @apiGroup Article
 *
 * @apiParam {String} id 单个文章id,或文章id集合(用","分割)
 *
 * @apiSuccess (成功返回) {Number} code 状态标识码
 * @apiSuccess (成功返回) {String} message  状态信息
 * @apiSuccess (成功返回) {Array} data  文章数组
 *
 * @apiParamExample {js} 请求样式:
 * data:{"id":"130"}
 * data:{"id":"129,130"}
 *
 * @apiSuccessExample 样本数据:
{
"code": "200",
"message": "链接成功",
"data": [{
"id": 130,
"pid": "22",
"title": "imagetools",
"keywords": "",
"description": "https:\/\/www.tiny.cloud\/docs\/plugins\/imagetools\/",
"img": "",
"content": "<!DOCTYPE html>\r\n<html>\r\n<head>\r\n<\/head>\r\n<body>\r\n\r\n<\/body>\r\n<\/html>",
"time": "2019-03-14 11:05:44",
"order": 0,
"click": 0,
"system": 0,
"img1": "20190427\\ba79fe2829e42419bd71c0b04e090d0c.jpg",
"img2": "",
"img3": "",
"img4": "",
"img5": "",
"img6": ""
}]
}
 * @apiUse FoundError
 */


/**
 * @api {post} /category/:id 分类数据获取
 * @apiName Category
 * @apiGroup Category
 *
 * @apiParam {String} id 单个分类id,或分类id集合(用","分割)
 *
 * @apiParamExample {js} 请求样式:
 * data:{"id":"19"}
 * data:{"id":"18,19"}
 *
 * @apiSuccessExample 样本数据:
 * {
"code": "200",
"message": "链接成功",
"data": [{
"id": 19,
"code": "1,13,15,19,",
"name": "js",
"parent": "15",
"order": 0,
"type": 1,
"keywords": "",
"description": "",
"img": "",
"content": ""
}]
}
 * @apiUse FoundError
 *
 */

/**
 * @api {post} /getTree/:id 分类树结构获取
 * @apiName getTree
 * @apiGroup Category
 *
 * @apiParam {String} id 单个父辈id
 *
 * @apiParamExample {js} 请求样式:
 * data:{"id":"15"}
 *
 * @apiSuccessExample 样本数据:
 * [{
"id": 15,
"code": "1,13,15,",
"name": "前端",
"parent": "13",
"order": 0,
"type": 1,
"keywords": "",
"description": "",
"img": "",
"content": "",
"son": [{
"id": 19,
"code": "1,13,15,19,",
"name": "js",
"parent": "15",
"order": 0,
"type": 1,
"keywords": "",
"description": "",
"img": "",
"content": ""
}, {
"id": 20,
"code": "1,13,15,20,",
"name": "css",
"parent": "15",
"order": 0,
"type": 1,
"keywords": "",
"description": "",
"img": "",
"content": ""
}, {
"id": 14,
"code": "1,13,15,14,",
"name": "vue",
"parent": "15",
"order": 0,
"type": 1,
"keywords": "",
"description": "",
"img": "",
"content": ""
}, {
"id": 22,
"code": "1,13,15,22,",
"name": "tinymce",
"parent": "15",
"order": 0,
"type": 1,
"keywords": "",
"description": "",
"img": "",
"content": "<!DOCTYPE html>\r\n<html>\r\n<head>\r\n<\/head>\r\n<body>\r\n\r\n<\/body>\r\n<\/html>"
}]
}]
 */