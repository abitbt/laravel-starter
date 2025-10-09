{{-- Breadcrumbs Partial --}}
@hasSection('breadcrumbs')
  <div class="page-header d-print-none">
    <div class="container-xl">
      <div class="row align-items-center">
        <div class="col">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-alternate">
              <li class="breadcrumb-item">
                <a href="{{ url('/') }}">
                  <x-tabler-home class="icon" aria-hidden="true" />
                  Home
                </a>
              </li>
              @yield('breadcrumbs')
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
@endif
