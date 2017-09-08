# framework

下载后，直接丢进Apache服务器里，最好是根目录，就可以运行了：

说明：格式为：
```http
http://127.0.0.1/foo/bar
```
其中，foo是controller目录下的文件名，bar是该文件中类的方法名。
也就是说，调用了类foo的bar方法。

如果只输入：
```http
http://127.0.0.1
```
那么，默认调用controller目录下的index文件，执行该类中的def方法。

控制器中，可以使用渲染html的方法：
```php
$res->render("hello");
```

目前，还没有做模板引擎。

欢迎与我交流：

新浪微博 @制造一个大新闻