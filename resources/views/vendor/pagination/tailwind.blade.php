@if ($paginator->hasPages())
    <div class="flex justify-center mt-6">
        <nav class="inline-flex rounded-md shadow-sm">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <span class="px-3 py-1 text-gray-400 bg-white border border-gray-300 rounded-l-md cursor-not-allowed">Previous</span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="px-3 py-1 text-gray-700 bg-white border border-gray-300 rounded-l-md hover:bg-gray-100">Previous</a>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <span class="px-3 py-1 text-gray-500 bg-white border-t border-b border-gray-300">{{ $element }}</span>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <span class="px-3 py-1 text-white bg-blue-600 border border-gray-300">{{ $page }}</span>
                        @else
                            <a href="{{ $url }}" class="px-3 py-1 text-gray-700 bg-white border border-gray-300 hover:bg-gray-100">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="px-3 py-1 text-gray-700 bg-white border border-gray-300 rounded-r-md hover:bg-gray-100">Next</a>
            @else
                <span class="px-3 py-1 text-gray-400 bg-white border border-gray-300 rounded-r-md cursor-not-allowed">Next</span>
            @endif
        </nav>
    </div>
@endif
