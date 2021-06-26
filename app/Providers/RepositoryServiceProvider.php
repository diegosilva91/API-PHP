<?php

namespace App\Providers;

use App\Repository\External\QuestionRepository;
use App\Repository\QuestionRepositoryInterface;
use App\Support\Repository\Contracts\RepositoryInterface;
use App\Support\Repository\ExternalRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind(QuestionRepositoryInterface::class, QuestionRepository::class);
        $this->app->bind(RepositoryInterface::class, ExternalRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
