<?php

use Illuminate\Support\Facades\Route;




Route::get('/', 'Backend\DashboardController@index')->name('dashboard');





Route::namespace('Backend')->prefix('admin')->name('admin.')->middleware(['auth', 'administrator'])->group(function () {
        return 'Test';
});
