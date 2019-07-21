# Laravel&VueJs 开发移动与桌面平台项目

> 通过这个项目来学习Laravel&Vue的开发过程


##开发环境

###开发技术栈
laravel+mysql+php+bootstrap+require.js+axios+vuejs+vuex...

### ideHelper
是一个帮助提高laravel代码提示功能的插件

###主要知识点

     一、利用Resouce资源控制器路由
```
    1.利用命令行在Article文件夹目录下创建一个名为ArticleController的资源控制器
    php artisan make:controller Article/ArticleController --resource
    #普通注册
    Route::resource('article', 'ArticleController');
    #限制指定路由
    Route::resource('article', 'ArticleController', ['only' => [
        'index', 'show', 'store', 'update', 'destroy']
    
  
```
    二、 解决ajax跨域访问
```
默认情况下前台发送Ajax是允许跨域请求的。我们可以在后台进行相关设置然后允许前台跨域请求。

允许单个域名访问 header('Access-Control-Allow-Origin:http://www.***.com');

允许多个域名
$origin = isset($_SERVER['HTTP_ORIGIN'])? $_SERVER['HTTP_ORIGIN'] : ''; 
$allow_origin = array( 	'http://www.***.com', 	'http://www.***.com' ); if(in_array($origin, $allow_origin)){ 	header('Access-Control-Allow-Origin:'.$origin); }

允许所有域名请求
header('Access-Control-Allow-Origin:*');
```
