<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Videos;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $rs = Videos::groupBy("videos_cat")->get();
        // foreach ($rs as $key => $value) {
        //     echo $value->videos_title;
        // }

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
