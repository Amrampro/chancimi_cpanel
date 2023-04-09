@if ($paginator->hasPages())
<div class="row">
    <div class="col-lg-12 mt--60">
        <nav>
            <ul class="edu-pagination">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                <li><a href="#" style="pointer-events: none;"><i class="ri-arrow-drop-left-line"></i></a></li>
                @else
                <li><a href="{{ $paginator->previousPageUrl() }}"><i class="ri-arrow-drop-left-line"></i></a></li>
                @endif
                {{-- - -Pages numbers- - --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="active"><a href="#" style="pointer-events: none;">{{ $page }}</a></li>
                            @else
                                <li><a href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach
                    @endif
                @endforeach
                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                <li><a href="{{ $paginator->nextPageUrl() }}"><i class="ri-arrow-drop-right-line"></i></a></li>
                @else
                    <li><a href="#" style="pointer-events: none;"><i class="ri-arrow-drop-right-line"></i></a></li>
                @endif
            </ul>
        </nav>
    </div>
</div>
@endif

{{-- This is the line to install customable pagination in your laravel project --}}
{{-- php artisan vendor:publish --tag=laravel-pagination --}}
