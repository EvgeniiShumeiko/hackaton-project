<?php

namespace App\Providers;

use App\Services\Lessons\Repositories\EloquentLessonsRepository;
use App\Services\Lessons\Repositories\LessonsRepositoryInterface;
use App\Services\Subjects\Repositories\EloquentSubjectsRepository;
use App\Services\Subjects\Repositories\SubjectsRepositoryInterface;
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
        $this->app->bind(SubjectsRepositoryInterface::class, EloquentSubjectsRepository::class);
        $this->app->bind(LessonsRepositoryInterface::class, EloquentLessonsRepository::class);
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
