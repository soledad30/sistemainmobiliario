@if ($paginator->hasPages())
    {{-- <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-between"> --}}
    <div class="d-flex mb-4">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
        {{-- <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md"> --}}
        <span class="btn btn-primary text-left ">
        {{-- {!! __('pagination.previous') !!} --}}
                ← Previos
            </span>
        @else
            {{-- <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                {!! __('pagination.previous') !!}
            </a> --}}
            <a class="btn btn-primary text-uppercase " href="{{ $paginator->previousPageUrl() }}">← Previos</a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            {{-- <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                {!! __('pagination.next') !!}
            </a> --}}
            <a class="btn btn-primary text-uppercase ms-auto" href="{{ $paginator->nextPageUrl() }}">Siguiente →</a>
        @else
            {{-- <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md"> --}}
            <span class="btn btn-primary text-uppercase ms-auto">
                {{-- {!! __('pagination.next') !!} --}}
                Siguiente →
            </span>
        @endif
    </div>
    {{-- </nav> --}}
@endif
