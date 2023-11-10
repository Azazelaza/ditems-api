<?php

use App\Http\Controllers\AddressInvoiceController;
use App\Http\Controllers\AddressShippingController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthAdminController;
use App\Http\Controllers\AuthUserController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ContentPageController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\InvoicesController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\MercadoPagoController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\RoleForAdminController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\UserController;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('user/login', [AuthUserController::class, 'login']);
Route::post('user/register', [AuthUserController::class, 'register']);
Route::post('user/check', [AuthUserController::class, 'renewToken']);
Route::post('admin/login', [AuthAdminController::class, 'login']);
Route::post('admin/check', [AuthAdminController::class, 'renewToken']);
Route::post('admin/register', [AuthAdminController::class, 'register']);
Route::get('/page/{id}', [ContentPageController::class, 'show']);
Route::get('/products/company/{id}', [ProductController::class, 'showByCompany']);
Route::get('/membership/company/{id}', [MembershipController::class, 'showByCompany']);
Route::post('/ticket', [TicketController::class, 'store']);
Route::post('/uploadImage', [ContentPageController::class, 'uploadImage']);
Route::get('product/{id}', [ProductController::class, 'show']);
Route::get('/states', [StateController::class, 'showAll']);
Route::get('/cfdi', [InvoicesController::class, 'showCfdi']);
Route::apiResource('/order', OrderController::class);

Route::group(['middleware' => ['auth:admin', 'scopes:admin']], function () {
    Route::prefix('userAdmin')->group(function () {
        Route::apiResource('/admin', AdminController::class);
        Route::post('admin/logout', [AuthAdminController::class, 'logout']);
        Route::post('admin/resetPassword', [AuthAdminController::class, 'resetPassword']);
        Route::put('/page/{id}', [ContentPageController::class, 'update']);
        Route::apiResource('/company', CompanyController::class);
        Route::apiResource('/roleforadmin', RoleForAdminController::class);
        Route::apiResource('/country', CountryController::class);
        Route::apiResource('/city', CityController::class);
        Route::apiResource('/invoice', InvoicesController::class);
        Route::apiResource('/role', RoleController::class);
        Route::apiResource('/products', ProductController::class);
        Route::apiResource('/membership', MembershipController::class);
        Route::apiResource('/ticket', TicketController::class);
        Route::put('/ticket/status/{id}', [TicketController::class, 'updateStatus']);
        Route::get('/ticket/company/{id}', [TicketController::class, 'showByCompany']);
        Route::get('/roleforadmin/admin/{id}', [RoleForAdminController::class, 'showByAdmin']);
        Route::get('/roleforadmin/rol/{id}', [RoleForAdminController::class, 'showByRol']);
        Route::get('/invoice/downloadTaxCertificate/{id}', [InvoicesController::class, 'downloadTaxCertificate']);
        Route::post('/uploadGalleryProduct', [ProductController::class, 'uploadGalleryProduct']);
        Route::post('/destroyGalleryProduct', [ProductController::class, 'destroyGalleryProduct']);
    });
});

Route::group(['middleware' => ['auth:user', 'scopes:user']], function () {
    Route::apiResource('/user', UserController::class);
    Route::post('user/logout', [AuthUserController::class, 'logout']);
    Route::post('user/resetPassword', [AuthAdminController::class, 'resetPassword']);
    Route::apiResource('/addressInvoice', AddressInvoiceController::class);
    Route::apiResource('/checkout', AddressInvoiceController::class);
    Route::post('/payment', [MercadoPagoController::class, 'create']);




    Route::get('/addressInvoice/user/{id}', [AddressInvoiceController::class, 'showByUser']);
    Route::post('/addressInvoice/uploadTaxCertificate', [AddressInvoiceController::class, 'uploadTaxCertificate']);
    Route::get('/addressInvoice/downloadTaxCertificate/{id}', [AddressInvoiceController::class, 'downloadTaxCertificate']);
    Route::get('/addressShipping/user/{id}', [AddressShippingController::class, 'showByUser']);
    Route::apiResource('/addressShipping', AddressShippingController::class);
});

Route::post('/checkout/notify', [MercadoPagoController::class, 'notify']);
