@if ($paginator->hasPages())
  <nav class="d-flex justify-content-between justify-items-center">
    <div class="d-flex justify-content-between flex-fill d-sm-none">
      <ul class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
          <li class="page-item disabled" aria-disabled="true">
            <span class="page-link">@lang('pagination.previous')</span>
          </li>
        @else
          <li class="page-item">
            <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a>
          </li>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
          <li class="page-item">
            <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a>
          </li>
        @else
          <li class="page-item disabled" aria-disabled="true">
            <span class="page-link">@lang('pagination.next')</span>
          </li>
        @endif
      </ul>
    </div>

    <div class="d-none d-sm-block w-100">
      <div class="row g-2 justify-content-between">
        <div class="d-flex align-items-center col-auto">
          <p class="text-secondary m-0">
            Showing
            <strong>{{ $paginator->firstItem() }}</strong>
            to
            <strong>{{ $paginator->lastItem() }}</strong>
            of
            <strong>{{ $paginator->total() }}</strong>
            results
          </p>
        </div>
        <div class="col-auto">
          <ul class="pagination m-0">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
              <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                <span class="page-link" aria-hidden="true">
                  <x-tabler-chevron-left class="icon icon-1" />
                </span>
              </li>
            @else
              <li class="page-item">
                <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev"
                  aria-label="@lang('pagination.previous')">
                  <x-tabler-chevron-left class="icon icon-1" />
                </a>
              </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
              {{-- "Three Dots" Separator --}}
              @if (is_string($element))
                <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span>
                </li>
              @endif

              {{-- Array Of Links --}}
              @if (is_array($element))
                @foreach ($element as $page => $url)
                  @if ($page == $paginator->currentPage())
                    <li class="page-item active" aria-current="page"><span class="page-link">{{ $page }}</span>
                    </li>
                  @else
                    <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                  @endif
                @endforeach
              @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
              <li class="page-item">
                <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next"
                  aria-label="@lang('pagination.next')">
                  <x-tabler-chevron-right class="icon icon-1" />
                </a>
              </li>
            @else
              <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                <span class="page-link" aria-hidden="true">
                  <x-tabler-chevron-right class="icon icon-1" />
                </span>
              </li>
            @endif
          </ul>
        </div>
      </div>
    </div>
@endif
