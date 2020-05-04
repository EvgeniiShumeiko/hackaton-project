<?php
/**
 * Evgenii Shumeiko (c) 2020.
 */

namespace App\Services\Homeworks;


use App\Models\Homework;
use App\Models\User;
use App\Services\Homeworks\Handlers\GetQRCodeHandler;
use App\Services\Homeworks\Repositories\HomeworksRepositoryInterface;

class HomeworksService
{
    protected GetQRCodeHandler $getQrCodeHandler;
    protected HomeworksRepositoryInterface $homeworkRepository;
    public function __construct(
        GetQRCodeHandler $getQRCodeHandler,
        HomeworksRepositoryInterface $homeworkRepository
    )
    {
        $this->getQrCodeHandler = $getQRCodeHandler;
        $this->homeworkRepository = $homeworkRepository;
    }

    public function getQRCode(Homework $homework, User $user)
    {
        return $this->getQrCodeHandler->handle($homework, $user);
    }

    public function createFromArray(array $data)
    {
       return $this->homeworkRepository->createFromArray($data);
    }

    public function getAll()
    {
        return $this->homeworkRepository->getAll();
    }

    public function find(int $id)
    {
        return $this->homeworkRepository->find($id);
    }
}
