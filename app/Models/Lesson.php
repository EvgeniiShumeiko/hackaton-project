<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    public function subject()
    {
        return $this->hasOne(Subject::class);
    }
}
