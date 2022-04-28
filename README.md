# PHPRandomRedrict
PHPRandomRedrict

一个简单的随机重定向工具。支持对关键词自定义待跳转的链接池。

DEMO：http://redirect.zhelper.net/?origin=virmach  跳转Virmach和Google

## 部署到Glitch

[New Project] -> [Import form Github] -> paste "https://github.com/kerms5/PHPRandomRedrict" , after done, [Show] -> [In a New Window].

## 使用方式

部署，修改links.txt文件，格式如下：

```
#virmach 关键词
https://virmach.com/  随机跳转链接1
https://google.com  随机跳转链接1
```

然后访问`yourdomain/?origin=virmach`即可触发关键词
