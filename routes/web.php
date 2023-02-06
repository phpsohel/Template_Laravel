<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\ExtraFeatureControoler;
use App\Http\Controllers\Admin\GeneralSettingController;

// All Route
// =========================
Route::get('/clear', function() {
    Artisan::call('cache:clear');
        dd("Cache Clear All");
});

// Login
// ===============
Route::get('/', function () {
    return redirect('/login');
});


//Admin
// ============================
Route::middleware(['auth'])->group(function () {
    Route::resource('extra',ExtraFeatureControoler::class);

    Route::controller(MemberController::class)->group(function(){
        Route::get('member/index', 'index')->name('member.index');
        Route::post('member/store', 'store')->name('member.store');
        Route::get('member/show/{id}', 'show')->name('member.show');
        Route::get('member/edit/{id}', 'edit')->name('member.edit');
        Route::post('member/update/{id}', 'update')->name('member.update');
        Route::get('member/delete/{id}', 'destroy')->name('member.delete');

        Route::get('member/request_list', 'request_list')->name('member.request_list');
        Route::get('member/reject_list', 'reject_list')->name('member.reject_list');

        Route::get('member/report', 'report')->name('member.report');
        Route::get('member/report', 'report')->name('member.report');
        Route::get('search/member/report', 'Ajaxreport')->name('member.search.report');
    });

    Route::controller(AdminController::class)->group(function()
        {
        Route::get('/', 'index')->name('index');
        Route::get('password-change', 'PasswordChange')->name('password-change');
        Route::post('store/password-change', 'StorePasswordChange')->name('store.password-change');
        Route::get('logout', 'Logout')->name('logout');
        Route::get('summer-note', 'Summernote')->name('summer-note');
        }
    );
    //User Route
    Route::controller(UserController::class)->group(function()
        {
            Route::get('user', 'index')->name('user');
            Route::post('user/store', 'store')->name('user.store');
            Route::post('user/update/{id}', 'update')->name('user.update');
            Route::get('user/delete/{id}', 'destroy')->name('user.destroy');
            Route::get('user/user_profile', 'user_profile')->name('user.profile');
            Route::post('user/update_profile/{id}', 'update_profile')->name('user.update_profile');
        }
    );
    //Role Route
    Route::controller(RoleController::class)->group(function(){
            Route::get('role/index', 'index')->name('role.index');
            Route::post('role/store', 'store')->name('role.store');
            Route::post('role/update/{id}', 'roleupdate')->name('role.roleupdate');
            Route::get('role/delete/{id}', 'destroy')->name('role.destroy');
            Route::get('role/permission/{id}', 'permission')->name('role.permission');
            Route::post('role/permission-store/{id}', 'permissionUpdate')->name('role.permission-store');
    });
    //General Setting Route
    Route::controller(GeneralSettingController::class)->group(function(){
            Route::get('setting/index', 'index')->name('setting.index');
            Route::post('setting/store', 'store')->name('setting.store');
            Route::post('setting/update/{id}', 'update')->name('setting.update');
    });

});

//Search
// =================
Route::controller(AdminController::class)->group(function()
    {
       Route::get('/search', 'search')->name('admin.search');
       Route::get('/search/get-bl-number', 'getBLNumber')->name('admin.getblnumber');
    }
);


Route::get('tables', function(){
    return view('admin.data-table');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
