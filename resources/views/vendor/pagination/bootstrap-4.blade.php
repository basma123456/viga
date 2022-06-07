<style>
    /*//test*/
    .page-item.active .page-link{
        color: white;
        background-color: #D072FF ;
        border-color: #D072FF ;



    }


    .uk-card-primary.uk-card-body .uk-link,
    .uk-card-primary.uk-card-body a, .uk-card-primary>:not([class*=uk-card-media]) .uk-link,
    .uk-card-primary>:not([class*=uk-card-media]) a, .uk-card-secondary.uk-card-body .uk-link,
    .uk-card-secondary.uk-card-body a, .uk-card-secondary>:not([class*=uk-card-media]) .uk-link,
    .uk-card-secondary>:not([class*=uk-card-media]) a, .uk-light .uk-link, .uk-light a,
    .uk-offcanvas-bar .uk-link, .uk-offcanvas-bar a, .uk-overlay-primary .uk-link,
    .uk-overlay-primary a, .uk-section-primary:not(.uk-preserve-color) .uk-link,
    .uk-section-primary:not(.uk-preserve-color) a,
    .uk-section-secondary:not(.uk-preserve-color) .uk-link,
    .uk-section-secondary:not(.uk-preserve-color) a,
    .uk-tile-primary:not(.uk-preserve-color) .uk-link,
    .uk-tile-primary:not(.uk-preserve-color) a,
    .uk-tile-secondary:not(.uk-preserve-color) .uk-link,
    .uk-tile-secondary:not(.uk-preserve-color) a{
        color: navy;

    }
    /*//test*/
</style>

@if ($paginator->hasPages())
    <nav>
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span class="page-link" aria-hidden="true">&lsaquo;</span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active" aria-current="page"><span class="page-link">{{ $page }}</span></li>
                        @else
                            <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                </li>
            @else
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="page-link" aria-hidden="true">&rsaquo;</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
