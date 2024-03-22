<?php

namespace App\Providers;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use App\Models\BasicSettings;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();
    
        $frontendViews = [
            'frontend.layouts.footer',
            'frontend.layouts.header',
            'frontend.layouts.menu',
            'frontend.layouts.menu',
            'frontend.about',
            'frontend.contact',
            'frontend.index',
        ];
    
        $backendViews = [
            'backend.layouts.*',
        ];
    
        view()->composer(array_merge($frontendViews, $backendViews), function ($view) {
            $setting = BasicSettings::first();
            
            if ($setting) {
                $view->with(compact('setting'));
            }
        });
    }
}
