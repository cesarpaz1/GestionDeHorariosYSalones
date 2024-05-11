<?php

use Illuminate\Routing\Router;
use App\Admin\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use OpenAdmin\Admin\Facades\Admin;


Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
});
