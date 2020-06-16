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
// Trang chủ
Route::get('/', 'ShopController@index');
// Liên Hệ
Route::resource('/contact', 'ContactController');

// Chi tiet sản phẩn
Route::get('/chi-tiet-san-pham/{slug}_{id}', 'ShopController@getProduct')->name('shop.product');

// Tìm kiếm
Route::get('/tim-kiem', 'ShopController@search')->name('shop.search');

// Gio hang
Route::get('/dat-hang', 'CartController@index')->name('shop.cart');

// Thêm sản phẩm vào giỏ hàng
Route::get('/dat-hang/them-sp-vao-gio-hang/{id}', 'CartController@addToCart')->name('shop.cart.add-to-cart');

// Xóa SP khỏi giỏ hàng
Route::get('/dat-hang/xoa-sp-gio-hang/{id}', 'CartController@removeToCart')->name('shop.cart.remove-to-cart');

// Cập nhật giỏ hàng
Route::get('/dat-hang/cap-nhat-gio-hang', 'CartController@updateToCart')->name('shop.cart.update-to-cart');

// Áp dụng giảm giá
Route::get('/dat-hang/ma-giam-gia', 'CartController@checkCoupon')->name('shop.cart.check-coupon');

// Hủy đơn hàng
Route::get('/dat-hang/huy-don-hang', 'CartController@destroy')->name('shop.cart.destroy');

// Thanh toán
Route::get('/thanh-toan', 'CartController@checkout')->name('shop.cart.checkout');

Route::post('/thanh-toan', 'CartController@postCheckout')->name('shop.cart.checkout');


/////////////////////////////////////////
// Đăng nhập
Route::get('/admin/login', 'AdminController@login')->name('admin.login');

// Đăng xuất
Route::get('/admin/logout', 'AdminController@logout')->name('admin.logout');

Route::post('/admin/postLogin', 'AdminController@postLogin')->name('admin.postLogin');
Route::group(['prefix' => 'admin','as' => 'admin.','middleware' => ['CheckLogin']], function() {

	Route::get('/', 'AdminController@index')->name('dashboard');

    // Router cho category
	Route::resource('category', 'CategoryController');

    // Router cho Vendor
	   Route::resource('vendor','VendorController');

   	// Router cho Brand
	   Route::resource('image','ImageUploadController');

   	// Router cho Banner
	   Route::resource('banner','BannerController');

   	// Router cho Brand
	   Route::resource('brand','BrandController');

   	// Router cho Product
	   Route::resource('product','ProductController');

   	// Router cho User
	   Route::resource('user','UserController');

   	// Router cho Blog
   	Route::resource('blog','BlogController');

   	Route::post('delete', 'ImageUploadController@delete');
   	// Router cho Image
});

//
Route::get('/danh-muc/{slug}', 'ShopController@getProductsByCategory')->name('shop.category');

Route::get('/blogs-detalis/{slug}_{id}.html', 'ShopController@ViewBlog')->name('shop.blog');

Route::get('/danh-muc/{slug}/filter','ShopController@filter')->name('shop.filter');