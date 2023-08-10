@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex items-center justify-between mt-5 pb-3 px-2">
        <span class="font-medium text-gray-600">
            {!! __('Showing') !!} <span class="font-semibold">{{ $paginator->firstItem() }}</span>
            {!! __('to') !!} <span class="font-semibold">{{ $paginator->lastItem() }}</span>
            {!! __('of') !!} <span class="font-semibold">{{ $paginator->total() }}</span> {!! __('results') !!}
        </span>

        <div class="flex justify-end flex-1">
            @if ($paginator->onFirstPage())
                <span
                    class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default rounded-md leading-5">
                    {!! __('Previous') !!}
                </span>
            @else
                <button wire:click="previousPage" rel="prev"
                    class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md leading-5 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:ring ring-blue active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                    {!! __('Previous') !!}
                </button>
            @endif

            @if ($paginator->hasMorePages())
                <button wire:click="nextPage" rel="next"
                    class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md leading-5 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:ring ring-blue active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                    {!! __('Next') !!}
                </button>
            @else
                <span
                    class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default rounded-md leading-5">
                    {!! __('Next') !!}
                </span>
            @endif
        </div>
    </nav>
@endif
