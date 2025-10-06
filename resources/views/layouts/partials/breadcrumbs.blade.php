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
                  <x-tabler-home class="icon" aria-hidden="true" />
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
