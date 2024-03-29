<?php

// Controllers

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ExtraController;
use App\Http\Controllers\ExtraTypeController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\Security\RolePermission;
use App\Http\Controllers\Security\RoleController;
use App\Http\Controllers\Security\PermissionController;
use App\Http\Controllers\UserController;
use App\Models\Order;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Artisan;
// Packages
use Illuminate\Support\Facades\Route;

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

require __DIR__ . '/auth.php';

Route::get('/storage', function () {
    Artisan::call('storage:link');
});

//UI Pages Routs

Route::group(['middleware' => 'auth'], function () {
    // Permission Module
    Route::get('/', [HomeController::class, 'index'])->name('index');
    Route::get('/uisheet', [HomeController::class, 'uisheet'])->name('uisheet');

    Route::get('/role-permission', [RolePermission::class, 'index'])->name('role.permission.list');
    Route::resource('permission', PermissionController::class);
    Route::resource('role', RoleController::class);
    Route::post('/delete-category/{category}', [CategoryController::class, 'deleteCategory'])->name('categories.delete');
    // Dashboard Routes
    Route::get('/change-lang/{locale}', [HomeController::class, 'changeLanguage'])->name('changeLang');
    Route::any('/print/orders/count', [ProductController::class, 'countInvoice'])->name('orders.count');


    Route::post('/start-order/{id}', [ProductController::class, 'startOrder'])->name('startOrder');
    Route::post('/end-order/{id}', [ProductController::class, 'endOrder'])->name('endOrder');
    Route::get('/add-to-customer-cart/{customer_id}/{product_id}/{quantity}/{type}', [ProductController::class, 'submitCart'])->name('submitCart');
    Route::get('/get-cart/{customer_id}', [ProductController::class, 'getCart'])->name('getCart');
    Route::get('/remove-cart/{cart_id}', [ProductController::class, 'removeCart'])->name('removeCart');
    Route::get('/submit-order/{cart_id}/{discount}', [ProductController::class, 'submitOrder'])->name('submitOrder');
    Route::get('/remove-cart-item/{cart_item_id}', [ProductController::class, 'removeCartItem'])->name('removeCartItem');
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
    Route::get('/pos', [ProductController::class, 'pos'])->name('pos');
    Route::get('/get-add-extra-section/{item_id}', [ProductController::class, 'getExtraSectionAjax'])->name('pos.addExtraAjax');
    Route::post('/pos/add-extra', [ProductController::class, 'addExtra'])->name('pos.addExtra');
    Route::get('/kitchen', [ProductController::class, 'kitchen'])->name('kitchen');
    Route::get('/assembly', [ProductController::class, 'assembly'])->name('assembly');
    Route::get('/all-orders', [ProductController::class, 'allOrders'])->name('orders.all');
    // Route::get('/kitchen_agency', [ProductController::class, 'kitchen_discount_zero'])->name('kitchen_discount_zero');
    Route::get('/all-orders-agency-report', [ProductController::class, 'get_all_orders_with_discount_zero'])->name('orders.all_discount_zero');
    Route::get('/order-detail/{order}', [ProductController::class, 'showOrder'])->name('orders.show');
    Route::get('/change-status/{order}/{status}', [ProductController::class, 'changeStatus'])->name('changeStatus');
    Route::get('orders/print/{order}', [ProductController::class, 'printInvoice'])->name('orders.print');
    Route::get('cashier/notifications/{user_id}', [HomeController::class, 'notificationsAjax'])->name('cashier.tNotifications');
    Route::get('get-category-products/{category_id}', [ProductController::class, 'getCategoryProducts'])->name('getCategoryProducts');


    Route::resource('types', ExtraTypeController::class);
    Route::resource('extras', ExtraController::class);
    Route::resource('questions', QuestionController::class);
    Route::resource('feedbacks', FeedbackController::class);
    Route::resource('customers', CustomerController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductController::class);
    Route::resource('languages', LanguageController::class);

    // Users Module
    Route::resource('users', UserController::class);
});

//App Details Page => 'Dashboard'], function() {
Route::group(['prefix' => 'menu-style'], function () {
    //MenuStyle Page Routs
    Route::get('horizontal', [HomeController::class, 'horizontal'])->name('menu-style.horizontal');
    Route::get('dual-horizontal', [HomeController::class, 'dualhorizontal'])->name('menu-style.dualhorizontal');
    Route::get('dual-compact', [HomeController::class, 'dualcompact'])->name('menu-style.dualcompact');
    Route::get('boxed', [HomeController::class, 'boxed'])->name('menu-style.boxed');
    Route::get('boxed-fancy', [HomeController::class, 'boxedfancy'])->name('menu-style.boxedfancy');
});

//App Details Page => 'special-pages'], function() {
Route::group(['prefix' => 'special-pages'], function () {
    //Example Page Routs
    Route::get('billing', [HomeController::class, 'billing'])->name('special-pages.billing');
    Route::get('calender', [HomeController::class, 'calender'])->name('special-pages.calender');
    Route::get('kanban', [HomeController::class, 'kanban'])->name('special-pages.kanban');
    Route::get('pricing', [HomeController::class, 'pricing'])->name('special-pages.pricing');
    Route::get('rtl-support', [HomeController::class, 'rtlsupport'])->name('special-pages.rtlsupport');
    Route::get('timeline', [HomeController::class, 'timeline'])->name('special-pages.timeline');
});

//Widget Routs
Route::group(['prefix' => 'widget'], function () {
    Route::get('widget-basic', [HomeController::class, 'widgetbasic'])->name('widget.widgetbasic');
    Route::get('widget-chart', [HomeController::class, 'widgetchart'])->name('widget.widgetchart');
    Route::get('widget-card', [HomeController::class, 'widgetcard'])->name('widget.widgetcard');
});

//Maps Routs
Route::group(['prefix' => 'maps'], function () {
    Route::get('google', [HomeController::class, 'google'])->name('maps.google');
    Route::get('vector', [HomeController::class, 'vector'])->name('maps.vector');
});

//Auth pages Routs
Route::group(['prefix' => 'auth'], function () {
    Route::get('signin', [HomeController::class, 'signin'])->name('auth.signin');
    Route::get('signup', [HomeController::class, 'signup'])->name('auth.signup');
    Route::get('confirmmail', [HomeController::class, 'confirmmail'])->name('auth.confirmmail');
    Route::get('lockscreen', [HomeController::class, 'lockscreen'])->name('auth.lockscreen');
    Route::get('recoverpw', [HomeController::class, 'recoverpw'])->name('auth.recoverpw');
    Route::get('userprivacysetting', [HomeController::class, 'userprivacysetting'])->name('auth.userprivacysetting');
});

//Error Page Route
Route::group(['prefix' => 'errors'], function () {
    Route::get('error404', [HomeController::class, 'error404'])->name('errors.error404');
    Route::get('error500', [HomeController::class, 'error500'])->name('errors.error500');
    Route::get('maintenance', [HomeController::class, 'maintenance'])->name('errors.maintenance');
});


//Forms Pages Routs
Route::group(['prefix' => 'forms'], function () {
    Route::get('element', [HomeController::class, 'element'])->name('forms.element');
    Route::get('wizard', [HomeController::class, 'wizard'])->name('forms.wizard');
    Route::get('validation', [HomeController::class, 'validation'])->name('forms.validation');
});


//Table Page Routs
Route::group(['prefix' => 'table'], function () {
    Route::get('bootstraptable', [HomeController::class, 'bootstraptable'])->name('table.bootstraptable');
    Route::get('datatable', [HomeController::class, 'datatable'])->name('table.datatable');
});

//Icons Page Routs
Route::group(['prefix' => 'icons'], function () {
    Route::get('solid', [HomeController::class, 'solid'])->name('icons.solid');
    Route::get('outline', [HomeController::class, 'outline'])->name('icons.outline');
    Route::get('dualtone', [HomeController::class, 'dualtone'])->name('icons.dualtone');
    Route::get('colored', [HomeController::class, 'colored'])->name('icons.colored');
});
//Extra Page Routs
Route::get('privacy-policy', [HomeController::class, 'privacypolicy'])->name('pages.privacy-policy');
Route::get('terms-of-use', [HomeController::class, 'termsofuse'])->name('pages.term-of-use');
