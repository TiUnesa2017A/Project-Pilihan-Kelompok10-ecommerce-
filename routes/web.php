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

Route::get('/', 'WelcomeController@index')->name('welcome');



Route::group(['prefix' => 'admin', 'middleware' => ['admin', 'auth']], function(){

	Route::resource('/', 'AdminController');
	Route::resource('/product', 'ProductController');
	Route::get('/allOrders', 'OrderController@allOrders')->name('allOrders');
	Route::get('/pendingOrder', 'OrderController@pendingOrder')->name('pendingOrder');
	Route::get('/delivered', 'OrderController@deliver')->name('deliver');  
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/blog', 'BlogController@index')->name('blog'); 
 
Route::get('/faq', 'FaqController@index')->name('faq'); 
Route::get('/aboutus', 'AboutusController@index')->name('aboutus');
Route::get('/contactus', 'ContactusController@index')->name('contactus'); 
Route::get('/artikel', 'ArtikelController@index')->name('artikel');

Route::group(['middleware' => ['auth']], function(){
Route::get('/produk', function () {
	$cartItems = Cart::content();
    $products = App\Product::paginate(6);
    return view('produk', compact('products', 'cartItems'));
})->name('produk');
// Route::get('/showproduct/{id}', function () {
// 	$cartItems = Cart::content();
// 	$products = App\Product::paginate(1);
//     return view('showproduct', compact('products', 'cartItems'));
// })->name('showproduct');
Route::get('/product', 'ProductController@index')->name('product');
Route::get('/cod', 'CodController@index')->name('cod');
Route::get('/addToCart/{id}', 'CartController@addToCart')->name('addToCart');
Route::get('/showproduct', 'ProductController@showproduct')->name('showproduct');

Route::get('/cart', 'CartController@cartIndex')->name('cartIndex');
Route::match(['put', 'patch'], '/cart/{cart}','CartController@updateCart')->name('updateCart');
Route::delete('/cart{id}','CartController@deleteCart')->name('deleteCart');

Route::get('/payment-method', 'PaymentController@paymentMethod')->name('paymentMethod');
Route::get('/credit-paymnet', 'PaymentController@creditPayment')->name('creditPayment');
Route::get('/bank-transfer-paymnet', 'PaymentController@bankTransfer')->name('bankTransfer');

Route::get('/sukses', 'SuksesController@index')->name('sukses'); 
Route::get('/thanks', 'PaymentController@thanks')->name('thanks'); 

Route::post('/bankOrder','PaymentController@bankOrder')->name('bankOrder');

});

Route::get('/status-order/{id}', 'OrderController@statusOrder')->name('statusOrder');