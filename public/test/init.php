<?php
/**
第一步：加载该文件
第二步：执行该文件的初始化代码--建立数据库，拷贝活动页面，拷贝对应控制器和路由
第三步：页面根据后台活动开启情况，进行展示

这里是第一步
**/

/**
活动初始化
1-创建数据库

*/

return [
	'createDatabase'=>'createDatabase.php',//创建数据库指令文件
	'controllers'=>[ //对应控制器
		'TestController.php',
	],
	'views'=>[ //对应视图
		'test.blade.php',
	]
]
