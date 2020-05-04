<?php
/**
 * Evgenii Shumeiko (c) 2020.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Homework extends Model
{
    public function replies()
    {
        return $this->hasMany(HomeworkReply::class);
    }
}
