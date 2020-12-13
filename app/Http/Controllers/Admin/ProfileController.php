<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function add()
    {
        return view('admin.profile.create');
    }

    public function create()
    {
        return redirect('admin/profile/create');
    }

    public function edit()
    {
        return view('admin.profile.edit');
    }

    public function update()
    {
        return redirect('admin/profile/edit');
    }
}

Route::group(['prefix' => 'admin'], function() {
    Route::get('news/create', 'Admin\NewsController@add');
});

//kadai3
//Route::group(['prefix' => 'admin'], function() {
    //Route::get('XXX', 'Admin\AAAController@bbb');
//});

//kadai4
Route::group(['prefix' => 'admin'], function() {
     Route::get('admin/profile/create', 'Admin\NewsController@add');
     Route::get('admin/profile/edit', 'Admin\NewsController@edit');
});