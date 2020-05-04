<?php


namespace App\Services\Lessons\Repositories;


use App\Models\Lesson;

class EloquentLessonsRepository implements LessonsRepositoryInterface
{

    public function findById(int $id): ?Lesson
    {
        return Lesson::find($id);
    }

    public function createFromArray(array $data): Lesson
    {
        return Lesson::create($data);
    }

}
