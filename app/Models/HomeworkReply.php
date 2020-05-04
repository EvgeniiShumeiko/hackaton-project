<?php
/**
 * Evgenii Shumeiko (c) 2020.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeworkReply extends Model
{
    public function homework()
    {
        return $this->hasOne(Homework::class);
    }
}
