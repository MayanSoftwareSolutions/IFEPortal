<div>
  <div class="p-3">
    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 rounded-lg "> 
        @can('other_config') 
        <div class="col-span-1 bg-gray-200 p-3 rounded">
            <div class="shadow-lg rounded-xl w-full md:w-60 p-4 bg-white dark:bg-gray-800 relative overflow-hidden">
            <p class="text-gray-600 dark:text-white text-sm font-bold mb-6"> User's Configuration </p>
            <div class="grid grid-cols-3 gap-4">
                <div class="flex flex-col items-center">
                <div class="relative">
                    <div class="block relative">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-green-700 hover:animate-wiggle" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    </div>
                    <div width="10" height="10" class="text-white rounded-full focus-outline-none absolute bottom-0 right-0 w-4 h-4 px-2" viewBox="0 0 1792 1792">
                        <input type="checkbox" wire:click="change('user_profile_widget')" wire:model:="profile_widget" value="{{ $profile_widget }}" class="form-checkbox text-xs rounded-full" @if ($profile_widget) checked="checked" @endif>
                    </div>
                </div>
                <span class="text-gray-600 dark:text-gray-400 text-xs mt-2"> Profile </span>
                </div>
                <div class="flex flex-col items-center">
                <div class="relative">
                    <div class="block relative">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-purple-600 hover:animate-wiggle" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                    </svg>
                    </div>
                    <div width="10" height="10" class="text-white rounded-full focus-outline-none absolute bottom-0 right-0 w-4 h-4 px-2" viewBox="0 0 1792 1792">
                        <input type="checkbox" wire:click="change('user_activity_log_widget')" wire:model:="activity_widget" name="activity_widget" value="{{ $activity_widget }}" class="form-checkbox text-xs rounded-full" @if ($activity_widget) checked="checked" @endif>
                    </div>
                </div>
                <span class="text-gray-600 dark:text-gray-400 text-xs mt-2">Activity</span>
                </div>
                <div class="flex flex-col items-center">
                <div class="relative">
                    <div class="block relative">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-gray-500 hover:animate-wiggle" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                    </svg>
                </div>
                    <div width="10" height="10" class="text-white rounded-full focus-outline-none absolute bottom-0 right-0 w-4 h-4 px-2" viewBox="0 0 1792 1792">
                        <input type="checkbox" wire:click="change('user_notifications')" wire:model:="user_notifications" name="user_notifications" value="{{ $user_notifications }}" class="form-checkbox text-xs rounded-full" @if ($user_notifications) checked="checked" @endif>
                    </div>
                </div>
                <span class="text-gray-600 dark:text-gray-400 text-xs mt-2">Notifications</span>
                </div>
                <div class="flex flex-col items-center">
                <div class="relative">
                    <div class="block relative">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    </div>
                    <div width="10" height="10" class="text-white rounded-full focus-outline-none absolute bottom-0 right-0 w-4 h-4 px-2" viewBox="0 0 1792 1792">
                        <input type="checkbox" class="form-checkbox text-xs rounded-full" checked>
                    </div>
                </div>
                <span class="text-gray-600 dark:text-gray-400 text-xs mt-2">Tracking</span>
                </div>
                <div class="flex flex-col items-center">
                <div class="relative">
                    <div class="block relative">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                    </svg>
                    </div>
                    <div width="10" height="10" class="text-white rounded-full focus-outline-none absolute bottom-0 right-0 w-4 h-4 px-2" viewBox="0 0 1792 1792">
                        <input type="checkbox" class="form-checkbox text-xs rounded-full" checked>
                    </div>
                </div>
                <span class="text-gray-600 dark:text-gray-400 text-xs mt-2"> Notices </span>
                </div>
                <div class="flex flex-col items-center">
                <div class="relative">
                    <div class="block relative">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-red-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                    </svg>
                    </div>
                    <div width="10" height="10" class="text-white rounded-full focus-outline-none absolute bottom-0 right-0 w-4 h-4 px-2" viewBox="0 0 1792 1792">
                        <input type="checkbox" class="form-checkbox text-xs rounded-full" checked>
                    </div>
                </div>
                <span class="text-gray-600 dark:text-gray-400 text-xs mt-2">Performance</span>
                </div>
                @if (session()->has('message'))
                <div class="flex items-center" id="success-message">
                <div class="m-auto">
                    <div class="p-1 ">
                    <div class="w-52 bg-gray-200 p-2 text-center text-xs font-bold rounded-full">
                        Configuration Saved
                    </div>
                    </div>
                </div>
                </div>
                @endif
            </div>
            
            </div>
      </div>
       
      @endcan 
       
    <div class="col-span-2 bg-gray-200 p-3 rounded"> 

        <div class="rounded-lg shadow-lg w-full md:w-full p-4 bg-white dark:bg-gray-800 overflow-hidden">
            <div class="w-full items-center justify-center mb-8">
            <p class="text-gray-600 text-sm dark:text-white text-md font-bold"> 
                User's Activty 
            </p>
            <div x-data={show:false} class="mt-4 mb-4 mr-4 ">
                <p class="relative items-right justify-right">
                    <button  @click="show=!show" class="bg-gray-200 text-gray-700 font-bold border-gray-500 rounded hover:bg-blue-700 hover:text-white px-2 py-1 text-xs focus:outline-none" type="button">
                    <p x-show="!show">Search</p>
                    <p x-show="show">Close</p>
                    </button>
                    @if($search_from != null)
                    <button wire:click="resetfields" wire:click="$refresh" class="bg-gray-200 text-gray-700 font-bold border-gray-500 rounded hover:bg-red-600 hover:text-white px-2 py-1 text-xs focus:outline-none" type="button">
                      Reset
                    </button>
                    @endif
                </p> 
                <div x-show="show" class="flex w-full px-4 py-3 text-gray-700">
                  <form class="w-full">
                    @csrf
                    <div class="flex flex-wrap inline-block -mx-3 mb-2">
                      <div class="flex-1 w-full sm:w-full px-3 mb-3 md:mb-0">
                        <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2" for="search_from">
                          From
                        </label>
                        <input type="date" wire:model="search_from" class="appearance-none text-xs font-bold block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 autocomplete-off" id="search_from" placeholder="From">
                      </div>
                      @if($search_from != null)
                      <div class="flex-1 w-full px-3 sm:w-full mb-4 md:mb-2">
                        <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2" for="search_to">
                          To
                        </label>
                        <input type="date" wire:model="search_to" class="appearance-none block w-full text-xs font-bold bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 autocomplete-off" id="search_to" placeholder="To">
                      </div>
                      @endif
                    </div>
                    <div class="flex flex-wrap inline-block -mx-3">
                      <div class="flex-1 w-full sm:w-full px-3">
                        <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                          Module
                        </label>
                        <div class="relative">
                          <select wire:model="module" class="block appearance-none w-full bg-gray-200 font-bold border border-gray-200 text-xs font-bold text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                            <option class="font-bold" value="">All</option>
                            <option class="font-bold" value="user">Users</option>
                            <option class="font-bold" value="configuration">Configurations</option>
                            <option class="font-bold" value="role">Permissions</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
            </div>
            </div> 
        @if(count($activity) < 1) 
        <div class="flex items-start bg-gray-200 mb-6 border rounded-lg shadow-lg p-4 justify-between">
            <span class="rounded-full text-white dark:text-gray-800">
              <span class="rounded-full text-white dark:text-gray-800">
              <img src="https://img.icons8.com/material/40/000000/jump-rope.png" class="h-7 w-7 m-1 text-gray-800"/>
            </span>
            </span>
            <div class="flex items-center w-full justify-between">
                <div class="flex text-sm flex-col w-full ml-2 items-center text-center justify-center">
                <p class="block text-md font-bold text-gray-700"> Opps... We cannot find any activity. If this is incorrect, please contact the administrator </p>
                </div>
            </div>
        </div>
      @else 
      @foreach($activity as $log) 
      <div class="flex items-start mb-6 rounded justify-between">
        <span class="rounded-full text-white dark:text-gray-800 p-2">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
          </svg>
        </span>
        <div class="flex items-center w-full justify-between">
          <div class="flex text-sm flex-col w-full ml-2 items-start justify-between">
            <p class="block text-xs font-semibold text-gray-700">
              <span class="font-bold mr-1"> {{ $user->name }} </span>
              {{ $log->description }} a {{ $log->log_name }} which was saved in our databases on the {{ $log->created_at->format('j F, Y') }}.
            </p>
            <p class="text-purple-500 text-xs">
              {{ $log->created_at->diffForHumans() }}
            </p>
          </div>
        </div>
      </div> 
      @endforeach 
      <div class="bg-white w-full mx-auto m-1 p-1">
        <div>
          {{ $activity->links('livewire-pagination-links') }}
        </div>
      </div> 
      @endif
  
    </div> 
         
    </div>
  </div>

</div>