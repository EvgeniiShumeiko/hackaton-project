<?php


namespace App\Services\Lessons\Repositories;


use App\Models\Lesson;

interface LessonsRepositoryInterface
{
    public function findById(int $id): ?Lesson;

    public function createFromArray(array $data): Lesson;

}
