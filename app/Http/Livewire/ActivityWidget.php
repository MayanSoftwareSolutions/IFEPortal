<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\UserSettings;
use Illuminate\Support\Facades\Auth;
use Spatie\Activitylog\Models\Activity;
use Livewire\WithPagination;

class ActivityWidget extends Component
{
    use WithPagination;

    public $search_from;
    public $search_to;
    public $module;

    protected $listener = ['resetfields'];
    
    public function mount()
    {
        $this->user = Auth::user();
        $this->settings = UserSettings::where('user_id', Auth::id())->first();
    }

    
    public function resetfields()
    {
        $this->reset('search_from','search_to','module');
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.activity-widget',
        ['activity' => Activity::where('causer_id', Auth::id())
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
        })->orderBy('id', 'DESC')->paginate(3)]
    );
    }
}
