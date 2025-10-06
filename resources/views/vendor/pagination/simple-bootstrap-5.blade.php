@if ($paginator->hasPages())
  @if ($paginator->hasPages())

    <nav role="navigation" aria-label="Pagination Navigation">
      <nav role="navigation" aria-label="Pagination Navigation">

        <ul class="pagination m-0">
          <ul class="pagination m-0"> ($paginator->hasPages())

            {{-- Previous Page Link --}} <nav role="navigation" aria-label="{!! __('Pagination Navigation') !!}">

              @if ($paginator->onFirstPage())
                <ul class="pagination m-0">

                  <li class="page-item disabled" aria-disabled="true"> {{-- Previous Page Link --}}

                    <span class="page-link">
                      @if ($paginator->onFirstPage())
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                          fill="none" <li class="page-item disabled" aria-disabled="true">

                          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                          aria-hidden="true" <span class="page-link">

                            focusable="false" class="icon icon-1"> <svg xmlns="http://www.w3.org/2000/svg"
                              width="24" height="24" viewBox="0 0 24 24" fill="none" <path
                              d="M15 6l-6 6l6 6" /> stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" aria-hidden="true"

                        </svg> focusable="false" class="icon icon-1">

                    </span>
                    <path d="M15 6l-6 6l6 6" />

                  </li> </svg>
                @else
                  </span>

                  <li class="page-item"> </li>

                  <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">
                  @else
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                      fill="none" <li class="page-item">

                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                      aria-hidden="true" <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">

                        focusable="false" class="icon icon-1"> <svg xmlns="http://www.w3.org/2000/svg" width="24"
                          height="24" viewBox="0 0 24 24" fill="none" <path d="M15 6l-6 6l6 6" />
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        aria-hidden="true"

                    </svg> focusable="false" class="icon icon-1">

                  </a>
                  <path d="M15 6l-6 6l6 6" />

                  </li> </svg>
              @endif </a>

              </li>

              {{-- Next Page Link --}}
  @endif

  @if ($paginator->hasMorePages())

    <li class="page-item"> {{-- Next Page Link --}}

      <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">
        @if ($paginator->hasMorePages())
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" <li
            class="page-item">

            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" <a
              class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">

              focusable="false" class="icon icon-1"> <svg xmlns="http://www.w3.org/2000/svg" width="24"
                height="24" viewBox="0 0 24 24" fill="none" <path d="M9 6l6 6l-6 6" /> stroke="currentColor"
              stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"

          </svg> focusable="false" class="icon icon-1">

      </a>
      <path d="M9 6l6 6l-6 6" />

    </li> </svg>
  @else
    </a>

    <li class="page-item disabled" aria-disabled="true"> </li>

    <span class="page-link">
    @else
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" <li
        class="page-item disabled" aria-disabled="true">

        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"
        <span class="page-link">

          focusable="false" class="icon icon-1"> <svg xmlns="http://www.w3.org/2000/svg" width="24"
            height="24" viewBox="0 0 24 24" fill="none" <path d="M9 6l6 6l-6 6" /> stroke="currentColor"
          stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"

      </svg> focusable="false" class="icon icon-1">

    </span>
    <path d="M9 6l6 6l-6 6" />

    </li> </svg>
  @endif </span>

  </ul>
  </li>

  </nav>
@endif

@endif
</ul>

</nav>
@endif
