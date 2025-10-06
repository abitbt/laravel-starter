<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    @include('layouts.partials.meta')
    
    @stack('head')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body class="@yield('body-class')" data-bs-theme="auto">
    <script>
      // Theme switcher - loads before page render to prevent flash
      const getStoredTheme = () => localStorage.getItem('theme')
      const setStoredTheme = theme => localStorage.setItem('theme', theme)
      const getPreferredTheme = () => {
        const storedTheme = getStoredTheme()
        if (storedTheme) return storedTheme
        return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
      }
      const setTheme = theme => {
        if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
          document.documentElement.setAttribute('data-bs-theme', 'dark')
        } else {
          document.documentElement.setAttribute('data-bs-theme', theme)
        }
      }
      setTheme(getPreferredTheme())
    </script>
    
    <div class="page">
      @include('layouts.partials.navbar')
      
      @include('layouts.partials.breadcrumbs')
      
      <div class="page-wrapper">
        {{-- Page Header (optional, can be overridden or hidden) --}}
        @if(!isset($hideHeader))
          @hasSection('hide-header')
            {{-- Header hidden by section --}}
          @else
          <div class="page-header d-print-none">
            <div class="container-xl">
              <div class="row g-2 align-items-center">
                <div class="col">
                  @hasSection('pretitle')
                    <div class="page-pretitle">
                      @yield('pretitle')
                    </div>
                  @else
                    @isset($pretitle)
                      <div class="page-pretitle">
                        {{ $pretitle }}
                      </div>
                    @endisset
                  @endif
                  
                  <h1 class="page-title">
                    @yield('page-title', $pageTitle ?? config('app.name'))
                  </h1>
                  
                  @hasSection('description')
                    <div class="text-secondary mt-1">
                      @yield('description')
                    </div>
                  @else
                    @isset($description)
                      <div class="text-secondary mt-1">
                        {{ $description }}
                      </div>
                    @endisset
                  @endif
                </div>
                
                @hasSection('actions')
                  <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                      @yield('actions')
                    </div>
                  </div>
                @else
                  @isset($actions)
                    <div class="col-auto ms-auto d-print-none">
                      <div class="btn-list">
                        {!! $actions !!}
                      </div>
                    </div>
                  @endisset
                @endif
              </div>
              
              @hasSection('tabs')
                <div class="row mt-3">
                  <div class="col-12">
                    @yield('tabs')
                  </div>
                </div>
              @endif
            </div>
          </div>
          @endif
        @endif
        
        {{-- Flash Messages --}}
        @include('layouts.partials.flash-messages')
        
        {{-- Main Content --}}
        <main id="content" class="page-body">
          @yield('content')
        </main>
        
        @hasSection('footer')
          @yield('footer')
        @else
          @include('layouts.partials.footer')
        @endif
      </div>
    </div>

    @stack('modals')
    
    @yield('scripts')
    @stack('scripts')
  </body>
</html>
