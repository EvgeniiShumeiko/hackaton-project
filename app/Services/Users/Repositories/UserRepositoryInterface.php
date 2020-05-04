<?php
/**
 * Evgenii Shumeiko (c) 2020.
 */

namespace App\Services\Users\Repositories;


use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

interface UserRepositoryInterface
{
    public function find(int $id): ?User;

    public function findByVkId(int $vkUserId): ?User;

    public function createFromArray(array $data): User;

    public function updateFromArray(User $user, array $data): User;

    public function isTeacher(User $user): bool;

    public function isStudent(User $user): bool;

    public function isMethodist(User $user): bool;
}
