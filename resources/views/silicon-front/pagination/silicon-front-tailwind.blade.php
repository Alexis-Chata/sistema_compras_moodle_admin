@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="d-sm-flex justify-content-sm-between align-items-sm-center mt-4 mt-sm-3">
        <div>
            <p class="text-sm text-gray-700 leading-5 text-center">
                {!! __('Showing') !!}
                @if ($paginator->firstItem())
                    <span class="font-medium">{{ $paginator->firstItem() }}</span>
                    {!! __('to') !!}
                    <span class="font-medium">{{ $paginator->lastItem() }}</span>
                @else
                    {{ $paginator->count() }}
                @endif
                {!! __('of') !!}
                <span class="font-medium">{{ $paginator->total() }}</span>
                {!! __('results') !!}
            </p>
        </div>

        <nav class="d-flex justify-content-center mb-0" aria-label="navigation">
            <ul class="pagination pagination-sm pagination-primary-soft d-inline-block d-md-flex rounded mb-0">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <li class="page-item mb-0 disabled"><a class="page-link disabled" @disabled(true) href="#" tabindex="-1"><i class="fas fa-angle-left"></i></a></li>
                @else
                    <li class="page-item mb-0"><a class="page-link" href="{{ $paginator->previousPageUrl() }}" tabindex="-1"><i class="fas fa-angle-left"></i></a></li>
                @endif

                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li class="page-item mb-0 disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="page-item mb-0 active" aria-current="page"><span class="page-link">{{ $page }}</span></li>
                            @else
                                <li class="page-item mb-0"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <li class="page-item mb-0"><a class="page-link" href="{{ $paginator->nextPageUrl() }}"><i class="fas fa-angle-right"></i></a></li>
                @else
                    <li class="page-item mb-0 disabled"><a class="page-link disabled" @disabled(true) href="#"><i class="fas fa-angle-right"></i></a></li>
                @endif
            </ul>
        </nav>
    </nav>
@endif
