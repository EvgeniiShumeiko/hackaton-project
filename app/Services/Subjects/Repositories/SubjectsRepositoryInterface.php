<?php


namespace App\Services\Subjects\Repositories;


use Illuminate\Database\Eloquent\Collection;

interface SubjectsRepositoryInterface
{
    public function getAll(): Collection;

}
