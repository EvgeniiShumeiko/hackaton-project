<?php
/**
 * Evgenii Shumeiko (c) 2020.
 */

namespace App\Services\Homeworks\HomeworkReplies\Repositories;


use App\Models\HomeworkReply;
use Illuminate\Database\Eloquent\Collection;

class EloquentHomeworkRepliesRepository implements HomeworkRepliesRepositoryInterface
{

    public function find(int $id): ?HomeworkReply
    {
        return HomeworkReply::find($id);
    }

    public function createFromArray(array $data): HomeworkReply
    {
        return HomeworkReply::create($data);
    }

    public function updateFromArray(HomeworkReply $homeworkReply, array $data): HomeworkReply
    {
        $homeworkReply->update($data);
        return $homeworkReply;
    }


    public function getHomeworkRepliesByHomeworkId(int $id): Collection
    {
        return HomeworkReply::whereHomeworkId($id)->all();
    }
}
