{{-- <div class="col-lg-12 col-md-12 pagi-area">
    <nav aria-label="navigation">
        <ul class="pagination">
            <li><a href="#">Previous</a></li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">Next</a></li>
        </ul>
    </nav>
</div> --}}
{{-- This is the line to install customable pagination in your laravel project --}}
{{-- php artisan vendor:publish --tag=laravel-pagination --}}
@if ($paginator->hasPages())
    <div class="col-lg-12 col-md-12 pagi-area">
        <nav aria-label="navigation">
            <ul class="pagination">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    {{-- <li class="disabled" aria-disabled="true">
                        <span aria-hidden="true">&lsaquo; Previous</span>
                    </li> --}}
                    <li class="disabled" aria-disabled="true"><a style="pointer-events: none;" href="#">&lsaquo; Previous</a></li>
                @else
                    <li><a href="{{ $paginator->previousPageUrl() }}">&lsaquo; Previous</a></li>
                @endif
                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                {{-- <li class="active" aria-current="page"><span>{{ $page }}</span></li> --}}
                                <li class="active"><a style="pointer-events: none;" href="#">{{ $page }}</a></li>
                            @else
                                <li><a href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <li><a href="{{ $paginator->nextPageUrl() }}">Next &rsaquo;</a></li>
                @else
                    {{-- <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                        <span aria-hidden="true">Next &rsaquo;</span>
                    </li> --}}
                    <li class="disabled" aria-disabled="true"><a style="pointer-events: none;" href="#">Next &rsaquo;</a></li>
                @endif
            </ul>
        </nav>
    </div>
@endif
