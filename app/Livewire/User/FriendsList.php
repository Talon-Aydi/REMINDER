<?php

namespace App\Livewire\User;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Friend;
use Livewire\Component;
use Livewire\Attributes\On;
use App\Enums\FriendStatus;
use Throwable;

class FriendsList extends Component
{
    #[On('add-friend')] 
    public function addFriend($id)
    {
        try {
            $userId = auth()->id();
    
            auth()->user()->friends()->syncWithoutDetaching([$id => ['status' => FriendStatus::Accepted]]);
            
            $friend = User::find($id);
            $friend->friends()->syncWithoutDetaching([$userId => ['status' => FriendStatus::Accepted]]);
            $this->dispatch('$refresh');
        } catch (Throwable $e)
        {
            report ($e);
        }
    }

    public function getFriends()
    {
        return Friend::join('users', 'friends.friend_id', '=', 'users.id')
        ->where('friends.user_id', auth()->id())
        ->select('users.*', 'friends.is_best_friend', 'friends.status')
        ->get();
    }

    public function render()
    {
        return view('livewire.user.dashboard.friends-list', [
            'friends' => $this->getFriends(),
        ]);
    }
}
