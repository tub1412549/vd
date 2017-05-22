<?php 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('hoclaravel/{ten}',function($ten){
	return 'Ten cua ban la: '.$ten;
});
//Tạo Route với tham số truyền vào là rỗng
//Route::get('tenban/{ten?}',function($ten= "Mỹ Tú"){
//	return 'ten bạn là : '.$ten;
//});
//Kiểm tra lỗi trong Route
Route::get('thongtin/{ten}/{tuoi}',function($ten,$tuoi){
	return "ten bạn là : $ten tuổi bạn là : $tuoi";
});
//Lấy thông tin từ trang view
Route::get('call-view',function(){
	$hoten="Hà Mỹ Tú";
	return view('view',compact('hoten'));
});
//Gọi tới trang Controller
Route::get('goi-controller','Controller@test');
// Tạo định danh cho Route
Route::get('goi-dinhdanh',['as'=>'gdd',function(){
	return "Chào Bạn";
}]);
//Tạo nhóm trong Route
Route::group(['prefix'=>'monan'],function(){
	Route::get('com',function(){
			echo "Đây là cơm";
	});
	Route::get('pho',function(){
			echo "Đây là phở";
	});
	Route::get('mi',function(){
			echo "Đây là mì";
	});

});
Route::get('goi-master',function(){
		return view('views.master');
	});
//Bài & : URL
//Lấy URL
Route::get('url/full',function(){
	return URL::full();
});
//Tạo Database
Route::get('schema',function(){
	Schema::create('mytu',function($table){
		$table->increments('id');
		$table->string('hoten');
	});
});
Route::get('schema/rename',function(){
	Schema::rename('mytu','foxit');
});
Route::get('getdata',function(){
	$table = App\User::find(1);
	echo $table->name;
});