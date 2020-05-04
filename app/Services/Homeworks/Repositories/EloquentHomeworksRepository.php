<?php
/**
 * Evgenii Shumeiko (c) 2020.
 */

namespace App\Services\Homeworks\Repositories;


use App\Models\Homework;
use Illuminate\Database\Eloquent\Collection;

class EloquentHomeworksRepository implements HomeworksRepositoryInterface
{

    public function find(int $id): ?Homework
    {
        return Homework::find($id);
    }

    public function createFromArray(array $data): Homework
    {
        return Homework::create($data);
    }

    public function updateFromArray(Homework $homework, array $data): Homework
    {
        $homework->update($data);
        return $homework;
    }

    public function getAll(): Collection
    {
        return Homework::all();
    }
}
