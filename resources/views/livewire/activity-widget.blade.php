<div>
  <div wire:loading.delay>
        <div id="loading-screen" class="w-full h-full fixed block top-0 left-0 bg-white opacity-75 z-50">
            <span class="text-green-500 opacity-75 top-1/2 my-0 mx-auto block relative w-0 h-0">
                <svg class="animate-spin -ml-1 mr-3 h-10 w-10 text-purple-800" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-75" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
            </span>
        </div>
    </div>

        <div class="rounded-lg shadow-lg w-full md:w-full p-4 bg-white dark:bg-gray-800 overflow-hidden">
            <div class="w-full items-center justify-center mb-2">
            <p class="text-gray-800 dark:text-white text-md font-bold"> 
                My Activity 
            </p>
            </div> 
            <div x-data={show:false} class="mb-4">
                <p class="relative items-right justify-right">
                    <button  @click="show=!show" class="bg-gray-200 ml-3 text-gray-700 font-bold border-gray-500 rounded hover:bg-blue-700 hover:text-white px-2 py-1 text-xs focus:outline-none" type="button">
                    <p x-show="!show">Search</p>
                    <p x-show="show">Close</p>
                    </button>
                    @if($search_from != null)
                    <button wire:click="resetfields" class="bg-gray-200 text-gray-700 font-bold border-gray-500 rounded hover:bg-red-600 hover:text-white px-2 py-1 text-xs focus:outline-none" type="button">
                      Reset
                    </button>
                    @endif

                </p> 
                <div x-show="show" class="flex w-full px-4 py-3 text-gray-700">
                  <form class="w-full">
                    @csrf
                    <div class="flex flex-wrap inline-block -mx-3 mb-2">
                      <div class="flex-1 @if($search_from != null) md:w-1/3 @endif md:w-1/2 sm:w-full px-3 mb-3 md:mb-0">
                        <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2" for="search_from">
                          From
                        </label>
                        <input type="date" wire:model="search_from" class="appearance-none text-xs font-bold block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 autocomplete-off" id="search_from" placeholder="From">
                        @error('search_from') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                      </div>
                      @if($search_from != null)
                      <div class="flex-1 md:w-1/3 px-3 sm:w-full mb-6 md:mb-0">
                        <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2" for="search_to">
                          To
                        </label>
                        <input type="date" wire:model="search_to" class="appearance-none block w-full text-xs font-bold bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 autocomplete-off" id="search_to" placeholder="To">
                        @error('search_to') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                      </div>
                      @endif
                      <div class="flex-1 @if($search_from != null) md:w-1/3 @endif md:w-1/2 sm:w-full px-3 mb-6 md:mb-0">
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
        @if(count($activity) < 1)
        <div class="flex items-start bg-gray-200 mb-6 border rounded-lg shadow-lg p-4 justify-between">
            <span class="rounded-full text-white dark:text-gray-800">
              <img src="https://img.icons8.com/material/40/000000/jump-rope.png" class="h-7 w-7 m-1 text-gray-800"/>
            </span>
            <div class="flex items-center w-full justify-center">
                <div class="flex mt-2 text-sm flex-col w-full ml-2 items-center text-center justify-center">
                <p class="block text-md font-bold text-gray-700"> Opps... We cannot find any activity. If this is a new user there might not be any activity !</p>
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
              <span class="font-bold mr-1"> You </span>
              {{ $log->description }} a {{ $log->log_name }} which was saved in our databases on the {{ $log->created_at->format('j F, Y') }}. Any further updates from others will not be shown here.
            </p>
            <p class="text-purple-500 text-xs">
              {{ $log->created_at->diffForHumans() }}
            </p>
          </div>
        </div>
      </div> 
      @endforeach 
      @if (count($activity))
      <div class="bg-white w-full mx-auto m-1 p-4">
        <div>
          {{ $activity->links('livewire-pagination-links') }}
        </div>
      </div> 
      @endif
      @endif
</div>