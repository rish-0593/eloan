<?php

namespace App\Providers;

use App\Models\SocialSite;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
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
        Blade::if('canassign', function (string $value) {
            return auth()->user()->can($value) || auth()->user()->impersonator()?->can($value);
        });

        if(Schema::hasTable('social_sites')){
            view()->share('socials',
                SocialSite::active()->get()
            );
        }
    }
}
