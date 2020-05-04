<?php


namespace App\Services\Subjects\Repositories;


use App\Models\Subject;
use Illuminate\Database\Eloquent\Collection;

class EloquentSubjectsRepository implements SubjectsRepositoryInterface
{
    public function getAll(): Collection
    {
        return Subject::all();
    }

}
