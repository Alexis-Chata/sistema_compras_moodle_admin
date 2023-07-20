@if ($paginator->hasPages())
    <nav class="mt-4 d-flex justify-content-center" aria-label="navigation">
        <ul class="pagination pagination-primary-soft d-inline-block d-md-flex rounded mb-0">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item mb-0 disabled"><a class="page-link" href="#" tabindex="-1"><i
                            class="fas fa-angle-double-left"></i></a></li>
            @else
                <li class="page-item mb-0"><a class="page-link" href="{{ $paginator->previousPageUrl() }}" tabindex="-1"><i
                            class="fas fa-angle-double-left"></i></a></li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item mb-0 disabled" aria-disabled="true"><span
                            class="page-link">{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item mb-0 active" aria-current="page"><span
                                    class="page-link">{{ $page }}</span></li>
                        @else
                            <li class="page-item mb-0"><a class="page-link"
                                    href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
            <li class="page-item mb-0"><a class="page-link" href="{{ $paginator->nextPageUrl() }}"><i class="fas fa-angle-double-right"></i></a>
            </li>
            @else
            <li class="page-item mb-0 disabled"><a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a>
            </li>
            @endif
        </ul>
    </nav>
@endif
