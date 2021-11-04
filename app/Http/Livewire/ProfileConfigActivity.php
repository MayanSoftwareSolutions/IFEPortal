<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\UserSettings;
use Illuminate\Support\Facades\Auth;
use Spatie\Activitylog\Models\Activity;
use Livewire\WithPagination;

class ProfileConfigActivity extends Component
{
    use WithPagination;

    public $user;
    public $settings;
    public bool $profile_widget;
    public bool $activity_widget;
    public bool $user_notifications;
    public bool $email_notifications;
    public $success;
    public $search_from;
    public $search_to;
    public $module;

    protected $listener = ['resetfields'];
    
    public function mount()
    {
        $this->settings = UserSettings::where('user_id', $this->user->id)->first();
        $this->profile_widget = (bool) $this->settings->user_profile_widget;
        $this->activity_widget = (bool) $this->settings->user_activity_log_widget;
        $this->user_notifications = (bool) $this->settings->user_notifications;
    }

    public function change($field)
    {

        $getSetting = $this->settings->$field;

        if($getSetting == 1)
        {
            $change = UserSettings::where('id', $this->settings->id)->update(
            [$field => 0]
        );
        }
        elseif($getSetting == 0)
        {
            $change = UserSettings::where('id', $this->settings->id)->update(
            [$field => 1]);
        }

        $this->success = 'Your setting have now been applied';
        session()->flash('message', $this->success);
        $this->emitTo('dashboard-sortable', '$refresh');

    }

    public function resetfields()
    {
        $this->reset('search_from','search_to','module');
        $this->resetPage();
    }

    public function render()
    {
        
    return view('livewire.profile-config-activity',
        ['activity' => Activity::where('causer_id', $this->user->id )
        ->where(function($query)
        {
            if($this->search_from != null)
            {
                $query->whereBetween('created_at',[$this->search_from, now()]);
                if($this->search_to != null){
                    $query->whereBetween('created_at',[$this->search_from, $this->search_to]);
                }
            }
            if($this->module !=null)
            {
                $query->where('log_name', $this->module);
            }
        })->orderBy('id', 'DESC')->paginate(3)]);
    }
}
