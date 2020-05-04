<?php
/**
 * Evgenii Shumeiko (c) 2020.
 */

namespace App\Services\Homeworks\Repositories;


use App\Models\Homework;
use Illuminate\Database\Eloquent\Collection;

interface HomeworksRepositoryInterface
{
    public function find(int $id): ?Homework;

    public function getAll(): Collection;

    public function createFromArray(array $data): Homework;

    public function updateFromArray(Homework $homework, array $data): Homework;

    public function getHomeworkByIdWithReplies(int $homework_id): ?Homework;
}
