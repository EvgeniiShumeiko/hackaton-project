<?php
/**
 * Evgenii Shumeiko (c) 2020.
 */

namespace App\Services\Users;


use App\Models\User;
use App\Services\Users\Handlers\CreateUserHandler;
use App\Services\Users\Handlers\UpdateUserHandler;
use App\Services\Users\Repositories\UserRepositoryInterface;

class UsersService
{

    /** @var CreateUserHandler */
    private $createUserHandler;
    /** @var UpdateUserHandler */
    private $updateUserHandler;
    /** @var UserRepositoryInterface */
    private $userRepository;

    public function __construct(
        CreateUserHandler $createUserHandler,
        UpdateUserHandler $updateUserHandler,
        UserRepositoryInterface $userRepository
    )
    {
        $this->createUserHandler = $createUserHandler;
        $this->updateUserHandler = $updateUserHandler;
        $this->userRepository = $userRepository;
    }

    public function isTeacher(User $model)
    {
        return $this->userRepository->isTeacher($model);
    }

    public function isStudent(User $model)
    {
        return $this->userRepository->isStudent($model);
    }

    public function isMethodist(User $model)
    {
        return $this->userRepository->isMethodist($model);
    }

    public function find(int $id)
    {
        return $this->userRepository->find($id);
    }

    public function findByVkId(int $VkUserId): ?User
    {
        return $this->userRepository->findByVkId($VkUserId);
    }

    /**
     * @param array $data
     * @return User
     */
    public function createUser(array $data): User
    {
        return $this->createUserHandler->handle($data);
    }

    /**
     * @param User $user
     * @param array $data
     * @return User
     */
    public function updateUser(User $user, array $data): User
    {
        return $this->updateUserHandler->handle($user, $data);
    }

}
