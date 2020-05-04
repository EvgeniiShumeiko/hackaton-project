<?php

namespace App\Providers;

use App\Services\Homeworks\Repositories\EloquentHomeworksRepository;
use App\Services\Homeworks\Repositories\HomeworksRepositoryInterface;
use App\Services\Lessons\Repositories\EloquentLessonsRepository;
use App\Services\Lessons\Repositories\LessonsRepositoryInterface;
use App\Services\Subjects\Repositories\EloquentSubjectsRepository;
use App\Services\Subjects\Repositories\SubjectsRepositoryInterface;
use App\Services\Users\Repositories\EloquentUserRepository;
use App\Services\Users\Repositories\UserRepositoryInterface;
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
        $this->app->bind(UserRepositoryInterface::class, EloquentUserRepository::class);
        $this->app->bind(HomeworksRepositoryInterface::class, EloquentHomeworksRepository::class);
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
