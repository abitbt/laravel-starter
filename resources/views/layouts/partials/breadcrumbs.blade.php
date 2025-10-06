{{-- Breadcrumbs Partial --}}
@if(isset($breadcrumbs) && count($breadcrumbs) > 0)
  <div class="page-header d-print-none">
    <div class="container-xl">
      <div class="row align-items-center">
        <div class="col">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-alternate">
              <li class="breadcrumb-item">
                <a href="{{ url('/') }}">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon" aria-hidden="true">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                    <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                    <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                  </svg>
                  Home
                </a>
              </li>
              @foreach($breadcrumbs as $breadcrumb)
                @if(!$loop->last)
                  <li class="breadcrumb-item">
                    <a href="{{ $breadcrumb['url'] }}">{{ $breadcrumb['title'] }}</a>
                  </li>
                @else
                  <li class="breadcrumb-item active" aria-current="page">
                    {{ $breadcrumb['title'] }}
                  </li>
                @endif
              @endforeach
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
@endif
