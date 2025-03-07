# 东鼎 DDCreator 开发框架  --大道至简 · 急速开发

#### 项目介绍
DDCreator（简称DD6） 是一款遵循 MIT 协议的开源快速开发框架，基于最新版本的 ThinkPHP6（已兼容 ThinkPHP8）构建。在使用 DDCreator 之前，请务必阅读《免责声明》并同意相关条款。

我们专注于构建高效底层框架，旨在简化项目开发流程。框架提供完备的基础组件和 API 支持，助力快速开发各类 WEB 应用。考虑到不同业务场景的需求差异，框架免费提供基础功能，涵盖系统权限管理、存储配置以及常用功能集成等。

对于开发者而言，使用 DDCreator 需要具备一定的开发技能，包括 ThinkPHP、jQuery、LayUI 和 RequireJs。后台的 UI 界面基于最新版本的 LayUI 前端框架和 RequireJs 组件加载方式。默认情况下，后台加载了所有 LayUI 的组件，开发者可以直接在框架中使用这些组件（需要注意的是，独立页面的 js 加载顺序）。使用 RequireJs 可以方便地加载和管理插件，互联网上有丰富的资源可供下载并进行二次扩展。

为确保未来的功能和安全升级，我们强烈建议不要占用或修改 app/admin 和 ddlib 目录及代码。所有未来的功能和安全更新将通过 git pull 进行拉取升级。请确保您的项目遵循这一规则，以便顺利享受未来的升级服务。

此外，ddLibrary 作为系统的核心组件，封装了众多常用操作和多应用组件，旨在加速各种应用程序的开发过程。其设计精妙之处在于，它完全兼容原有的 ThinkPHP 生态，从而显著降低了编码的复杂性和成本。

在文件存储方面，该系统提供了多种灵活的存储选项，包括本地服务器存储、自建 Alist 存储，以及与七牛云、又拍云、阿里云和腾讯云等主流云服务商的对象存储服务无缝对接，并支持 CDN 加速，确保数据的高效传输和快速访问。

系统还自带了异步任务处理机制，能够并行处理多个任务，任务响应延时低于 0.5 秒。这一机制不仅提升了系统的处理能力，还确保了其在 Windows 和 Linux 平台上的兼容性，为开发者提供了更加广泛的应用场景。

#### 软件架构

DDCreator 是一个基于 ThinkPHP 6 & 8 开发的强大后台管理框架，专为简化后台管理流程而设计。为了保证最佳性能，该框架要求运行在 PHP7.1 或更高版本的环境中。 系统默认支持 Sqlite、MySql 和 SqlServer 三种数据库。如果您需要使用其他数据库，可能需要进行额外的配置或处理。我们建议您在开始开发之前，仔细阅读 DDCreator 的数据库设置说明，以确保正确配置您的数据库连接。


#### 安装教程

1.  下载：访问[东鼎DDCreator开源系统](https://gitee.com/dongdingsoft/ddcreator.git)， 用git或者下载zip包解压，建议用git，方便后期`git pull`升级；
2.  部署数据库：命令行执行 `php think migrate:run` 即可安装好sqlite数据库，具体数据库配置与安装说明；
3.  运行服务：`php think run` 

4. 访问地址：`127.0.0.1:8000` 具体运行配置请参考Thinkphp6官方文档

#### 使用说明

1.  数据库配置及安装
   
    创建空的数据库，其中 Sqlite 不需要创建；
    
    将数据库配置到 config/database.php 文件；

注意：数据库参数修改，除了要修改连接参数，还需要切换 default 默认连接名称，如下面的 mysql、sqlite 等。
```json
return [
     // 数据库类型
    'default' => 'sqlite',
    // 数据库连接参数
    'connections' => [
        'mysql'  => [ /* 具体参数省略 */ ], 
        'sqlite' => [ /* 具体参数省略 */ ],
    ]       
]
```



2.  默认后台地址：`http://127.0.0.1:8000/admin`

3.  默认账户与密码：`admin/admin`



#### 参与贡献

Wei Dong 54928382@qq.com

# 使用手册

具体手册建设中。。。

API手册可以查阅[ DDCreator PHPDoc](https://apidoc.gitee.com/dongdingsoft/ddcreator)



