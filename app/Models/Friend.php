<?php

namespace App\Models;

use App\Enums\FriendStatus;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Attributes\Fillable;

#[Fillable(['user_id', 'friend_id', 'is_best_friend', 'status'])]
class Friend extends Pivot
{
    protected $table = 'friends';

    protected function casts(): array
    {
        return [
            'status' => FriendStatus::class,
            'is_best_friend' => 'boolean',
        ];
    }
}