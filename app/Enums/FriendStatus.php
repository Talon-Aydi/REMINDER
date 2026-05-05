<?php

namespace App\Enums;

enum FriendStatus: string
{
    case Accepted = 'accepted';
    case Pending = 'pending';
    case Refused = 'refused';
    case Blocked = 'blocked';
    case Open = 'open';
}