@if ($paginator->hasPages())
    {{-- Previous Page Link --}}
    @if ($paginator->onFirstPage())
    @else
        <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="block no-underline text-light hover:text-black px-5" aria-label="{{ __('pagination.previous') }}">More recent articles</a>
    @endif

    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="block no-underline text-light hover:text-black px-5" aria-label="{{ __('pagination.next') }}">Check more articles</a>
    @else
    @endif
@endif
