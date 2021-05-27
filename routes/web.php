<?php
use App\info;
use Illuminate\Http\Request;
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

Route::get('/', 'mainController@index')->name('index');

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/about-us', function () {
    return view('about-us');
});
Route::get('/template', function () {
    return view('template.business-temp');
});

/*Route::get('/forms', function () {
    return view('forms');
}); */

//Route::get('page/{string}','mainController@show');
//  mainController  Route
Route::get('pages/{string}/','mainController@show');
Route::get('edit-portfolio/{id}','mainController@editPort');
Route::post('update-portfolio/{id}','mainController@updatePort')->name('update.portfolio');
Route::get('edit-products/{id}','mainController@editProduct');
Route::post('update-products/{id}','mainController@updateProduct')->name('update.product');
Route::get('create-products/{id}','mainController@createProduct');
Route::get('create-portfolio/{id}','mainController@createPort');
Route::post('product-form','mainController@storeProduct')->name('product.store');
Route::post('port-form','mainController@storePort')->name('portfolio.store');
Route::get('forms','mainController@create');
Route::post('form','mainController@store')->name('store');
//Route::post('delete/{id}','mainController@destroy')->name('delete');
Route::get('page/edit/{id}','mainController@edit');
Route::post('page/update/{id}','mainController@update')->name('update');
Route::post('page/delete/{id}','mainController@destroy')->name('delete');
Route::post('product/delete/{id}','mainController@destroyProduct')->name('productDelete');
Route::post('portfolio/delete/{id}','mainController@destroyPortfolio')->name('portfolioDelete');



//Report controller

Route::get('report', 'ReportController@viewReport');
Route::post('store-report','Reportcontroller@storeReport')->name('storeReport');

// search ------------------------------
Route::post('/search', function (Request $request){
     
    if(!empty(  $request->input( 'q' ))){
        $q =  $request->input( 'q' );

   
  
   
    
    $biz = info::where('website_name','LIKE','%'.$q.'%')->orWhere('biz_type','LIKE','%'.$q.'%')->get();
    if(count($biz) > 0)
        return view('result')->withDetails($biz)->withQuery ( $q );
    else return view ('result')->withMessage('No Details found. Try to search again !');

    }
    elseif(empty( $request->input( 'q' ))){
        
        return 'No data found';

    }
});

//Payment route ------------------------------------
Route::get('payment', 'PaymentController@index');
Route::post('charge', 'PaymentController@charge');
Route::get('paymentsuccess', 'PaymentController@payment_success');
Route::get('paymenterror', 'PaymentController@payment_error');

//Premium  route-----------------------------------------

Route::get('premium', 'PremiumController@Getform');
Route::post('premium-store', 'PremiumController@premiumSave')->name('premium.store');

//Premium |image| route -----------------------------------------
 Route::get('upload', 'PremiumController@uploadImage');
 Route::post('save', 'PremiumController@saveImage')->name('image.store');

 //ads |image| route -----------------------------------------
 Route::get('upload-ad', 'AdController@get_ad');
 Route::post('save-ad', 'AdController@store')->name('ad.store');
 Route::get('ad-upload', 'AdController@upload');


 // contact -----------------------------------------
 Route::get('/contact-page', 'ContactController@getContact');
 Route::post('/contact', 'ContactController@postContact')->name('contact.store');
 
 
//Admin route ------------------------------------------
Route::prefix('admin')->group(function() {
    Route::get('paid-ads-list', 'Auth\AdminController@adlist');
    Route::get('client/{id}', 'Auth\AdminController@show');
    Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::get('/register','Auth\RegisterAdminController@showReg')->name('admin.reg');
    Route::post('/post-login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('logout/', 'Auth\AdminLoginController@logout')->name('admin.logout');
    Route::get('/', 'Auth\AdminController@index')->name('admin.dashboard');
    Route::post('/reg-post', 'Auth\RegisterAdminController@createAdmin')->name('admin.reg.submit');
    Route::get('view-report', 'Auth\AdminController@reportView');
   }) ; 

//Admin route -----------------------------------------------------------
/*Route::namespace('Admin')->name('admin.')->prefix('admin')->group(function () {
    Route::get('login', 'AdminAuthController@getLogin')->name('login');
    Route::post('login', 'AdminAuthController@postLogin');
});*/
    

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('page','mainController');