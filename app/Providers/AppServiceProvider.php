<?php

namespace App\Providers;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(
            'admin.category', 
            function ($view) {
                $view->with('shareData',Category::with('subcategory')->where('is_active',1)->get());
            }
        );
    }
}
