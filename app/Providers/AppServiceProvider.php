<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Videos;
use App\Models\Videos_cat;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        $rs = Videos_cat::where("active","=",1)->get();
        view()->share("list_cat",$rs);
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
