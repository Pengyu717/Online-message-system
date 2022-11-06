# 留言系统

## 简介
此项目是由Pengyu717早期于pengxiazai.com（目前已无法访问）创造的使用Hypertext Preprocessor即“超文本预处理器“与.db文件（数据库，可用文本文档打开）运行的在线留言系统。

此项目可能不再维护

最后编辑日期 2022年11月6日
## 说明
此项目包含多个文件（夹）
<br>根目录：</br>
- chat1（PHP文件，用于填写发布信息）
- doAdd（PHP文件，用于向服务器检查提交信息是否合法并提交发布信息表单并向用户显示成功信息）
- doDel（PHP文件，用于向服务器检查提交信息是否合法并提交删除信息表单并向用户显示成功信息）
- doDelAdmin（PHP文件，管理员管理页面用于向服务器提交删除信息表单并向管理员显示成功信息）
- ly.db（.db文件，存储留言信息的数据库文件，可用文本文档编辑器打开）
- show（PHP文件，向所有用户展示留言信息）
- showAdmin（PHP文件，向管理员展示留言信息并具有删除权限）
<br>safe文件夹</br>
<br></br>
- index（PHP文件用于管理员账户登录）
<br>safe/user文件夹</br>
<br></br>
- users（TXT文件，用于存储管理员密码格式：用户名【换行】密码）

注意！
- 运行此项目需要您的服务器安装有能解析Hypertext Preprocessor即“超文本预处理器“文件的程式，且对于数据库文件（ly.db）存放的位置有”删除“，”写入“等基础权限。
 - [常规体](fonts/wqy-microhei-0.2.0-beta.ttc)
 - [细体](fonts/wqy-microhei-lite-0.2.0-beta.ttc)

> 基于 Google 的 `Droid Sans Fallback`。

## 版权声明和使用协议
本字体版权为 [Google 公司](https://www.google.com/intl/en/contact/)和[文泉驿信任委员会（Board of Trustees）](http://wenq.org/wqy2/index.cgi?CopyrightPolicy)所有，请遵循字体授权使用该字体。

