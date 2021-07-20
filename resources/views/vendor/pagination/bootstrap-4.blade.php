@if ($paginator->hasPages())
    {{--    <nav>--}}
    <ul class="clearfix">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class=" prev disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                <a href=""><span class="fa fa-angle-left"></span></a>
            </li>
        @else
            <li class="prev">
                <a class="" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')"><span class="fa fa-angle-left"></span></a>
            </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class=" active disabled" aria-disabled="true"><a href="#" class="">{{ $element }}</a></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class=" active" aria-current="page"><a href="#" class="">{{ $page }}</a></li>
                    @else
                        <li class=""><a class="" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="next">
                <a class="" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')"><span class="fa fa-angle-right"></span></a>
            </li>
        @else
            <li class=" next disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                <a href="#"><span class="fa fa-angle-right"></span></a>
            </li>
        @endif
    </ul>
    {{--    </nav>--}}
@endif
