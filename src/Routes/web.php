<?php


    /*
    |--------------------------------------------------------------------------
    | LaravelDash Routes
    |--------------------------------------------------------------------------
    |
    | This file is where you may override any of the routes that are included
    | with LaravelDash.
    |
    */


    Route::prefix(config('dashboard.prefix'))->group(function (){


        Route::get('/',function (){

            return view('LaravelDashboard::welcome');

        });

        Route::get('Dashboard','Yasser\LaravelDashboard\Controllers\LaravelDashboardController@index')->name('dashboard.home');

        Route::resource('post','Yasser\LaravelDashboard\Controllers\LaravelPostController');

        Route::get('Settings','Yasser\LaravelDashboard\Controllers\LaravelSettingsController@index')->name('dashboard.settings.index');

        Route::put('Settings','Yasser\LaravelDashboard\Controllers\LaravelSettingsController@Update')->name('dashboard.settings.update');

        Route::post('Settings/upload/avatar','Yasser\LaravelDashboard\Controllers\LaravelSettingsController@Upload')->name('dashboard.settings.upload_avatar');

        Route::post('Settings/delete','Yasser\LaravelDashboard\Controllers\LaravelSettingsController@Delete')->name('dashboard.settings.delete_account.destroy');

        Route::get('Manage','Yasser\LaravelDashboard\Controllers\LaravelManageController@index')->name('dashboard.manage.index');

        Route::get('JsonManage','Yasser\LaravelDashboard\Controllers\LaravelManageController@Response')->name('dashboard.manage.jsonData');

        Route::get('Users','Yasser\LaravelDashboard\Controllers\LaravelSubscribeController@index')->name('dashboard.users');

        Route::post('Users','Yasser\LaravelDashboard\Controllers\LaravelSubscribeController@store')->name('dashboard.users.store');

        Route::put('Manage/{id}/{type}','Yasser\LaravelDashboard\Controllers\LaravelManageController@Delete')->name('dashboard.manage.delete');

        Route::get('Checkout','Yasser\LaravelDashboard\Controllers\LaravelCheckoutController@index')->name('dashboard.checkout.index');

        Route::get('Store','Yasser\LaravelDashboard\Controllers\LaravelStoreController@index')->name('dashboard.store.index');

        Route::post('Store','Yasser\LaravelDashboard\Controllers\LaravelStoreController@store')->name('dashboard.store.store');

        Route::post('View/device/{id}','Yasser\LaravelDashboard\Controllers\LaravelPostController@DevicesStore')->name('dashboard.post.DevicesStore');

        Route::get('published/{folder}/{file}','Yasser\LaravelDashboard\Controllers\LaravelDashboardController@Dashboard_assets')->name('dashboard.assets');

        Route::get('ViewsState','Yasser\LaravelDashboard\Controllers\LaravelDashboardController@ViewsState')->name('dashboard.views.state');

        Route::get('Sell','Yasser\LaravelDashboard\Controllers\LaravelSellController@index')->name('dashboard.sell.index');

    });

    ?>
