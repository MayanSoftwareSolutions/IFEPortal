<div>
 <div class="flex flex-wrap right-0 ml-2 mt-3">
  <div>
    <details x-data x-ref="dropdown" @click.away="$refs.dropdown.removeAttribute('open');" class="relative inline-block text-left">
      <summary>
        <div class="inline-flex justify-center w-full rounded-md border shadow-sm px-4 py-2 bg-white text-xs font-bold text-gray-900 hover:bg-gray-50 focus:outline-none" style="min-width:3rem">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
          </svg>
        </div>
      </summary>

      <details-menu role="menu" class="origin-top-right absolute left-0 mt-2 w-auto z-50 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none">

        <div class="py-1" role="none">
          <form>
            @csrf
          <div class="block px-4 py-2 text-xs flex justify-between text-gray-900 font-bold hover:bg-gray-100 hover:text-gray-900" role="menuitem" style="min-width:12rem">
            Dashboard Widgets
          </div>
          <ul class="flex flex-col divide divide-y border">
              <li class="flex flex-row">
                  <div class="select-none cursor-pointer flex flex-1 items-center p-2">
                      <div class="flex flex-col w-10 h-10 justify-center items-center mr-4">
                          <div href="#" class="block relative">
                              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
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
                      <div class="flex flex-col w-10 h-10 justify-center items-center mr-4">
                          <div href="#" class="block relative">
                              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
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
            <div class="block px-4 py-2 text-xs flex justify-between text-gray-900 font-bold hover:bg-gray-100 hover:text-gray-900" role="menuitem" style="min-width:12rem">
            System Settings
            </div>
            <ul class="flex flex-col divide divide-y border">
              <li class="flex flex-row">
                  <div class="select-none cursor-pointer flex flex-1 items-center p-2">
                      <div class="flex flex-col w-10 h-10 justify-center items-center mr-4">
                          <div href="#" class="block relative">
                              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
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
          </form>
        </div>
      </details-menu>
    </details>

  </div>
</div>

   @if (session()->has('message'))
   <div class="system-alert bg-white dark:bg-gray-800 w-52 shadow-sm mx-auto rounded-lg p-4">
      <div class="flex items-center text-center">
        <div class="block relative">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
            </svg>
        </div>
          <div class="flex flex-col ml-2 justify-between">
              <span class="font-bold text-gray-700 text-xs">
                  {{ session('message') }}
              </span>
          </div>
      </div>
    </div>
  @endif
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
