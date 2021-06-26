<?php

namespace App\Providers;

use App\Repository\External\QuestionRepository;
use App\Repository\QuestionRepositoryInterface;
use App\Support\Repository\Contracts\RepositoryInterface;
use App\Support\Repository\ExternalRepository;
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
        //
    }
}
