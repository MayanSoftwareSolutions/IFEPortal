<div>
 <div class="flex flex-wrap right-0 ml-2 mt-3" x-data="{open:false}">
  <div>
    <div class="relative inline-block text-left">
      <div>
        <div @click="open = true" class="inline-flex justify-center w-full rounded-md border shadow-sm px-4 py-2 bg-white text-xs font-bold text-gray-900 hover:bg-gray-50 focus:outline-none" style="min-width:3rem">
          <a href="#">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
          </svg>
        </a>
        </div>
      </div>

      <div role="menu" class="origin-top-right absolute left-0 mt-2 w-auto z-50 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none">

        <div x-show="open" @click.away="open=false" x-transition:enter-start="transition ease-in duration-3000" class=" bg-gray-200 py-1" role="none">
          <form>
            @csrf
          <div class="block px-4 py-2 text-xs flex justify-between text-gray-900 font-bold bg-gray-200 hover:text-gray-900" role="menuitem" style="min-width:12rem">
            Dashboard Widgets
          </div>
          <ul class="flex flex-col bg-white divide divide-y border-top">
              <li class="flex flex-row">
                  <div class="select-none cursor-pointer flex flex-1 items-center p-2">
                      <div class="flex flex-col w-10 h-10 justify-center items-center">
                          <div class="block relative">
                              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-700 hover:animate-wiggle" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                              </svg>
                          </div>
                      </div>
                      <div class="flex-1 pl-1">
                          <div class="font-bold text-xs text-gray-700 dark:text-white">
                              Profile
                          </div>
                      </div>
                      <div class="text-gray-600 dark:text-gray-200 text-xs">
                          <div class="relative inline-block w-8 ml-2 align-middle select-none transition duration-200 ease-in">
                            <input wire:click="change('user_profile_widget')" wire:model:="profile_widget" type="checkbox" name="profile_widget" value="{{ $profile_widget }}" class="focus:outline-none toggle-checkbox absolute block w-4 h4 rounded-full bg-white border-4 text-green-600 appearance-none cursor-pointer" @if ($profile_widget) checked="checked" @endif/>
                            <label for="profile_widget" class="toggle_label block overflow-hidden h-4 rounded-full bg-gray-300 cursor-pointer"></label>
                          </div>
                      </div>
                  </div>
              </li>
              <li class="flex flex-row">
                  <div class="select-none cursor-pointer flex flex-1 items-center p-2">
                      <div class="flex flex-col w-10 h-10 justify-center items-center">
                          <div class="block relative">
                              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-600 hover:animate-wiggle" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                              </svg>
                          </div>
                      </div>
                      <div class="flex-1 pl-1">
                          <div class="font-bold text-xs text-gray-700 dark:text-white">
                              Activity
                          </div>
                      </div>
                      <div class="text-gray-600 dark:text-gray-200 text-xs">
                          <div class="relative inline-block w-8 ml-2 align-middle select-none transition duration-200 ease-in">
                            <input wire:click="change('user_activity_log_widget')" wire:model:="activity_widget" type="checkbox" name="activity_widget" value="{{ $activity_widget }}" class="focus:outline-none toggle-checkbox absolute block w-4 h4 rounded-full bg-white border-4 text-green-600 appearance-none cursor-pointer" @if ($activity_widget) checked="checked" @endif/>
                            <label for="activity_widget" class="toggle_label block overflow-hidden h-4 rounded-full bg-gray-300 cursor-pointer"></label>
                          </div>
                      </div>
                  </div>
              </li>
            </ul>
            <div class="block px-4 py-2 text-xs flex justify-between text-gray-900 font-bold bg-gray-200 hover:text-gray-900" role="menuitem" style="min-width:12rem">
            System Settings
            </div>
            <ul class="flex flex-col bg-white divide divide-y border-top">
              <li class="flex flex-row">
                  <div class="select-none cursor-pointer flex flex-1 items-center p-2">
                      <div class="flex flex-col w-10 h-10 justify-center items-center">
                          <div class="block relative">
                              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500 hover:animate-wiggle" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                              </svg>
                          </div>
                      </div>
                      <div class="flex-1 pl-1">
                          <div class="font-bold text-gray-700 text-xs dark:text-white">
                              Notifications
                          </div>
                      </div>
                      <div class="text-gray-600 dark:text-gray-200 text-xs">
                          <div class="relative inline-block w-8 ml-2 align-middle select-none transition duration-200 ease-in">
                            <input wire:click="change('user_notifications')" wire:model:="user_notifications" type="checkbox" name="user_notifications" value="{{ $user_notifications }}" class="focus:outline-none toggle-checkbox absolute block w-4 h4 rounded-full bg-white border-4 text-green-600 appearance-none cursor-pointer" @if ($user_notifications) checked="checked" @endif/>
                            <label for="user_notifications" class="toggle_label block overflow-hidden h-4 rounded-full bg-gray-300 cursor-pointer"></label>
                          </div>
                      </div>
                  </div>
              </li>
          </ul>
          @if (session()->has('message'))
            <ul class="flex flex-col divide divide-y border-top bg-gray-200">
              <li class="flex flex-row items-center">
                  <div class="select-none cursor-pointer flex flex-1 items-center p-2">
                      <div class="flex-1 p-1 text-center">
                          <div class="font-bold text-gray-700 text-xs dark:text-white">
                              {{ session('message') }}
                          </div>
                      </div>
                  </div>
              </li>
          </ul>
            @endif
          </form>
        </div>
      </div>
    </div>

  </div>
</div>

  <style>
    summary {
        list-style-type: none;
    }

    summary::-webkit-details-marker {
        display: none;
    }

    .toggle-checkbox:checked {
    @apply: right-0;
    right: 0;
    border-color: #108f40;
    }
    .toggle-checkbox:checked + .toggle-label {
    @apply: bg-green-400;
    background-color: #108f40;
    }
  </style>

</div>
