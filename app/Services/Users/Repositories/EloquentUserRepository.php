<?php
/**
 * Evgenii Shumeiko (c) 2020.
 */

namespace App\Services\Users\Repositories;


use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class EloquentUserRepository implements UserRepositoryInterface
{
    public function find(int $id): ?User
    {
        return User::find($id);
    }

    public function findByVkId(int $vkUserId): ?User
    {
        return User::where('vk_id', $vkUserId)
            ->first();
    }

    /**
     * @param array $data
     * @return User
     */
    public function createFromArray(array $data): User
    {
        return User::create($data);
    }

    /**
     * @param User $user
     * @param array $data
     * @return User
     */
    public function updateFromArray(User $user, array $data): User
    {
        $user->update($data);
        return $user;
    }

    //TODO: make enums for UserRole
    public function isTeacher(User $user): bool
    {
        return $user->role === 'teacher';
    }

    public function isStudent(User $user): bool
    {
        return $user->role === 'student';
    }

    public function isMethodist(User $user): bool
    {
        return $user->role === 'methodist';
    }
}
