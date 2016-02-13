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
/*
*	Get Request
*/

Route::get('/dashboard', function() {
    $activeClass['parent'] ='dashboard';
	$activeClass['child'] ='';
		
    return view('admin.dashboard.dashboard',compact('activeClass'));
});

/*Route::get('/dashboard', function () {
	$activeClass['parent'] ='dashboard';
	$activeClass['child'] ='';
		
    return view('admin.dashboard.dashboard',compact('activeClass'));
});*/

Route::get('/dashboard/login','UserController@login');
Route::get('/signup','UserController@signup');

/*
*	Client Route
*/

Route::get('/client/index','ClientController@index');
Route::get('/client/create','ClientController@create');
Route::post('/client/store','ClientController@store');
Route::get('/client/edit/{id}','ClientController@edit');
Route::post('/client/update','ClientController@update');
Route::post('/client/destroy','ClientController@destroy');

/*
*	User Route
*/
Route::get('/user/index','UserController@index');
Route::get('/user/create','UserController@create');
Route::post('/user/store','UserController@store');
Route::get('/user/edit/{id}','UserController@edit');
Route::post('/user/update','UserController@update');
Route::post('/user/destroy','UserController@destroy');
Route::post('/forgetpassword','UserController@forgetPassword');

/*
*	Product Route
*/
Route::get('/product/index','ProductController@index');
Route::get('/product/create','ProductController@create');
Route::post('/product/store','ProductController@store');
Route::get('/product/edit/{id}','ProductController@edit');
Route::post('/product/update','ProductController@update');
Route::post('/product/destroy','ProductController@destroy');//delete product
Route::post('/product/addToCart','ProductController@addToCart');//add to cart
Route::post('/product/removeFromCart','ProductController@removeFromCart');//remove from cart
Route::get('/product/details/{id}','ProductController@productDetails');//product details
Route::post('/upload','UploadController@index');
Route::post('/upload','UploadController@index');
/*
*	Page Route
*/
Route::get('/page/index','PageController@index');
Route::get('/page/create','PageController@create');
Route::post('/page/store','PageController@store');
Route::get('/page/edit/{id}','PageController@edit');
Route::post('/page/update','PageController@update');
Route::post('/page/destroy','PageController@destroy');
/*
*	Category Route
*/
Route::get('/category/index','CategoryController@index');
Route::get('/category/create','CategoryController@create');
Route::post('/category/store','CategoryController@store');
Route::get('/category/edit/{id}','CategoryController@edit');
Route::post('/category/update','CategoryController@update');
Route::post('/category/destroy','CategoryController@destroy');
Route::post('/category/image/destroy','CategoryController@destroyCategoryImage');
/*
*	Sub Category Route
*/
Route::get('/subcategory/index','CategoryController@subindex');
Route::get('/subcategory/create','CategoryController@subcreate');
Route::post('/subcategory/store','CategoryController@storesubcategory');
Route::get('/subcategory/edit/{id}','CategoryController@editSubcategory');
Route::post('/subcategory/update','CategoryController@updateSubcategory');
Route::post('/subcategoy/destroy','CategoryController@destroySubCategory');

/*
*	Order Route
*/
Route::get('/order/index','OrderController@index');
Route::get('/order/create','OrderController@create');
Route::get('/order/show','OrderController@show');
Route::post('/order/store','OrderController@store');
Route::get('/order/edit/{id}','OrderController@edit');
Route::post('/order/update','OrderController@update');
Route::post('/order/destroy','OrderController@destroy');
Route::post('/cart/clear','OrderController@clearCart');

Route::get('/order/history', ['middleware' => 'auth', 'uses' => 'OrderController@orderHistory']);
Route::get('/order/details/{id}', ['middleware' => 'auth', 'uses' => 'OrderController@orderDetails']);

//Route::get('/order/history','OrderController@orderHistory');

Route::get('/order/success/{id}','OrderController@success');
Route::get('/order/error','OrderController@error');
Route::get('/order/print/{id}','OrderController@printOrder');


Route::get('/registration', function () {
    return view('admin.user.registration');
});

Route::get('/profile', function () {
    return view('admin.user.profile');
});

/*
*	Post Request
*/
Route::post('/login','UserController@validateUser');

Route::get('login/{email}/{password}', function ($email,$password) {
    return view('admin.user.login');
});


/*
*	Website Route	
*/
Route::get('/','HomeController@index');
Route::get('/products','ProductController@productsList');
Route::get('/checkout','ProductController@checkout');
Route::get('/checkout/method','ProductController@checkoutMethod');

Route::get('/customer/login','UserController@LoginAndRegistration');
Route::get('/customer/registration','UserController@LoginAndRegistration');

Route::post('/customer/login','UserController@customerLogin');
Route::get('/logout','UserController@logout');
Route::post('/customer/registration','UserController@registration');

/**
 * 
 */
Route::get('/profile', ['middleware' => 'auth', function() {
    return view('admin.user.login');
}]);

Route::get('login/fb', function() {
    $facebook = new Facebook(Config::get('facebook'));
    $params = array(
        'redirect_uri' => url('/login/fb/callback'),
        'scope' => 'email',
    );
    return Redirect::to($facebook->getLoginUrl($params));
});


Route::get('login/fb/callback', function() {
    $code = Input::get('code');
    if (strlen($code) == 0) return Redirect::to('/')->with('message', 'There was an error communicating with Facebook');

    $facebook = new Facebook(Config::get('facebook'));
    $uid = $facebook->getUser();

    if ($uid == 0) return Redirect::to('/')->with('message', 'There was an error');

    $me = $facebook->api('/me');

    echo "<pre>";
        print_r($me);
    echo "</pre>";
    //dd($me);
});