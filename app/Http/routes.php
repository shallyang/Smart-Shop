<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('index');
// });

    	
    	



// 测试路由中间件
Route::get('login',function(){
	
	return view('admins/login');
});

Route::get('logins',['middleware'=>'Login',function(){
	echo '这是后台首页';
}]);

// Route::controller('/admin/user','AdminUserController');
// Route::controller('/admin/goods','AdminGoodsController');
// Route::controller('/admin/order','AdminOrderController');
Route::controller('/admin/login','AdminLoginController');
// Route::controller('/admin/webconfig','AdminWebConfigController');