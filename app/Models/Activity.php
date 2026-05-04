<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $table = 'activity';

    protected $primaryKey = 'activity_id';

    protected $casts = [
        'activity_deadline' => 'datetime',
    ];

    protected $fillable = [
        'activity_title',
        'activity_description',
        'activity_completion',
        'activity_deadline',
        'activity_user_id',
    ];
}
