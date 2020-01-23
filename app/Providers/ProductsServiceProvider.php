<?php
/**
 * Created by PhpStorm.
 * User: neosoft
 * Date: 23/1/20
 * Time: 10:31 AM
 */
namespace  App\Providers;

use Illuminate\Support\ServiceProvider;

class ProductsServiceProvider extends ServiceProvider{

    /*registered  Products Repository and Interface*/

    public function register()
    {
        $this->app->bind(
            'App\Contracts\ProductsRepositoryInterface',
            'App\Eloquent\Repositories\ProductsRepository'
        );
    }
}