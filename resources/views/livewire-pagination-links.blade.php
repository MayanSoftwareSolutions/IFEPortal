<div>
    @if ($paginator->hasPages())
        <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-between">
            <span>
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <span class="relative inline-flex items-center px-4 py-2 text-xs font-bold text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md">
                        {!! __('pagination.previous') !!}
                    </span>
                @else
                    <button wire:click="previousPage" wire:loading.attr="disabled" rel="prev" class="relative inline-flex items-center px-4 py-2 text-xs font-bold text-black bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                        {!! __('pagination.previous') !!}
                    </button>
                @endif
            </span>
            <span>
                {{-- Next Page Link --}}

                    <span class="relative inline-flex items-center px-4 py-2 text-xs font-bold text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md">
                       <div> 
                        <p class="text-xs leading-5 text-gray-700">
                            {!! __('Showing') !!}
                            <span class="font-bold">{{ $paginator->firstItem() }}</span>
                            {!! __('to') !!}
                            <span class="font-bold">{{ $paginator->lastItem() }}</span>
                            {!! __('of') !!}
                            <span class="font-bold">{{ $paginator->total() }}</span>
                            {!! __('records') !!}
                        </p>
                       </div>
                    </span>
            </span>
 
            <span>
                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <button wire:click="nextPage" wire:loading.attr="disabled" rel="next" class="relative inline-flex items-center px-4 py-2 text-xs font-bold text-black bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                        {!! __('pagination.next') !!}
                    </button>
                @else
                    <span class="relative inline-flex items-center px-4 py-2 text-xs font-bold text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md">
                        {!! __('pagination.next') !!}
                    </span>
                @endif
            </span>
        </nav>
    @endif
</div>