<?php
/**
 * Evgenii Shumeiko (c) 2020.
 */

namespace App\Services\Homeworks\HomeworkReplies;


use App\Models\HomeworkReply;
use App\Services\Homeworks\HomeworkReplies\Repositories\HomeworkRepliesRepositoryInterface;
use DemeterChain\C;
use Illuminate\Database\Eloquent\Collection;

class HomeworkRepliesService
{

    protected HomeworkRepliesRepositoryInterface $homeworkRepliesRepository;

    public function __construct(HomeworkRepliesRepositoryInterface $homeworkRepliesRepository)
    {
        $this->homeworkRepliesRepository = $homeworkRepliesRepository;
    }

    public function find(int $id)
    {
        $this->homeworkRepliesRepository->find($id);
    }

    public function createFromArray(array $data)
    {
        return $this->homeworkRepliesRepository->createFromArray($data);
    }

    public function updateFromArray(HomeworkReply $homeworkReply, array $data)
    {
        return $this->homeworkRepliesRepository->updateFromArray($homeworkReply, $data);
    }

    public function getHomeworkRepliesByHomeworkId(int $homework_id): Collection
    {
        return $this->homeworkRepliesRepository->getHomeworkRepliesByHomeworkId($homework_id);
    }

}
