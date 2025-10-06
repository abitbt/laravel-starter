{{-- Flash Messages Partial --}}
@if(session()->has('success') || session()->has('error') || session()->has('warning') || session()->has('info'))
<div class="page-body">
  <div class="container-xl mb-3">
    @if(session('success'))
      <div class="alert alert-success alert-dismissible" role="alert">
        <div class="d-flex">
          <div>
            <x-tabler-check class="icon alert-icon" aria-hidden="true" />
          </div>
          <div>{{ session('success') }}</div>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    
    @if(session('error'))
      <div class="alert alert-danger alert-dismissible" role="alert">
        <div class="d-flex">
          <div>
            <x-tabler-alert-triangle class="icon alert-icon" aria-hidden="true" />
          </div>
          <div>{{ session('error') }}</div>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    
    @if(session('warning'))
      <div class="alert alert-warning alert-dismissible" role="alert">
        <div class="d-flex">
          <div>
            <x-tabler-alert-triangle class="icon alert-icon" aria-hidden="true" />
          </div>
          <div>{{ session('warning') }}</div>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    
    @if(session('info'))
      <div class="alert alert-info alert-dismissible" role="alert">
        <div class="d-flex">
          <div>
            <x-tabler-info-circle class="icon alert-icon" aria-hidden="true" />
          </div>
          <div>{{ session('info') }}</div>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
  </div>
</div>
@endif