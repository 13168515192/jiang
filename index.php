<?php
//设置目录分隔符，防止多种系统的目录分隔符"/",或"\"不一致导致的兼容性问题
define("d",DIRECTORY_SEPARATOR);
// __DIR__ 指向当前正在执行PHP文件所在的目录
define("root",__DIR__.d);
//设置MVC框架的路径
define("con_path",root.d."controller".d);
define("model_path",root.d."model".d);
define("view_path",root.d."view".d);


include './model/model.php';
include './controller/controller.php';