<?php

namespace App\Providers;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespaceWeb = 'App\Http\Controllers\Web';
    protected $namespaceApi = 'App\Http\Controllers\Api';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function boot(Router $router)
    {
        //

        parent::boot($router);
    }

    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function map(Router $router)
    {
        $this->mapWebRoutes($router);

        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    protected function mapWebRoutes(Router $router)
    {
        /**
         *  Web
         */
        $router->group(['middleware' => ['web']], function ($router) {

            $npwClient = $this->namespaceWeb . '\Client';
            $npwAdmin = $this->namespaceWeb . '\Admin';

            $router->group(['namespace' => $npwClient], function() {
                require app_path('Http/Routes/routes-web-client.php');
            });

            $router->get('admin-console-login', ['as' => 'admin.login', 'uses' => $npwAdmin . '\AuthController@getLogin']);
            $router->post('admin-console-login', ['middleware' => ['first.user'], 'uses' => $npwAdmin . '\AuthController@postLogin']);
            $router->get('admin-console-logout', ['as' => 'admin.logout', 'uses' => $npwAdmin . '\AuthController@getLogout']);
            $router->group(['namespace' => $npwAdmin, 'prefix' => 'admin-console', 'middleware' => ['auth']], function() {
                require app_path('Http/Routes/routes-web-admin.php');
            });
        });


        /**
         *  API
         */
        $router->group(['prefix' => 'api', 'middleware' => ['web']], function($router) {
            $npwClient = $this->namespaceApi . '\Client';
            $npwAdmin = $this->namespaceApi . '\Admin';

            $router->group(['namespace' => $npwClient, 'prefix' => 'client'], function($router) {
                require app_path('Http/Routes/routes-api-client.php');
            });

            $router->group(['namespace' => $npwAdmin, 'prefix' => 'admin', 'middleware' => ['auth']], function($router) {
                require app_path('Http/Routes/routes-api-admin.php');
            });
        });
    }
}
