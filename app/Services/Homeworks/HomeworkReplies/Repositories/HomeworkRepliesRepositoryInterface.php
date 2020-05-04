<?php
/**
 * Evgenii Shumeiko (c) 2020.
 */

namespace App\Services\Homeworks\HomeworkReplies\Repositories;


use App\Models\HomeworkReply;
use Illuminate\Database\Eloquent\Collection;

interface HomeworkRepliesRepositoryInterface
{
    public function find(int $id): ?HomeworkReply;

    public function createFromArray(array $data): HomeworkReply;

    public function updateFromArray(HomeworkReply $homeworkReply, array $data): HomeworkReply;

    public function getHomeworkRepliesByHomeworkId(int $id): Collection;
}
