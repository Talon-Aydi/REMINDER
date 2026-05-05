<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['activity_title', 'activity_description', 'activity_completion', 'activity_deadline', 'activity_user_id'])]
class Activity extends Model
{
    protected $table = 'activity';

    protected $primaryKey = 'activity_id';

    protected $casts = [
        'activity_deadline' => 'datetime',
    ];
}
