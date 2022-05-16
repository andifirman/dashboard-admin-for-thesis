<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\User;

class AppServiceProvider extends ServiceProvider
{

  /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      view()->composer('partials.activeusers', function ($view) {
        $view->with('activeusers', User::activeusers());
      });
    }


    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    
}
