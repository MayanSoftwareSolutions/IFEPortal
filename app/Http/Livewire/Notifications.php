<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Http\Models\User;
use Illuminate\Support\Facades\Auth;

class Notifications extends Component
{
    use WithPagination;

    protected $listener = ['markNotificationAsRead', 'read'];

    public function markNotificationAsRead($id)
    {
        Auth::user()->unreadNotifications->where('id', $id)->markAsRead();
    }

    public function read()
    {
        $notifications = auth()->user()->unreadNotifications;
        $notifications->markAsRead();
    }

    public function render()
    {
        return view('livewire.notifications',
        ['notifications'=>auth()->user()->unreadNotifications()->paginate(3)],
        ['countNotifications'=>Auth::user()->unreadNotifications()->count()],);
    }
}
