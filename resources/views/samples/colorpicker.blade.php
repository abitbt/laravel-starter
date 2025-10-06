<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Color picker - Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>
    <!-- BEGIN PAGE LEVEL STYLES -->
    <!-- END PAGE LEVEL STYLES -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body>
    <a href="#content" class="visually-hidden skip-link">Skip to main content</a>
    <div class="page">
      @include('samples.includes.header')
    @include('samples.includes.navbar')
      <div class="page-wrapper">
        <!-- BEGIN PAGE HEADER -->
        <!-- BEGIN PAGE HEADER -->
        <div class="page-header d-print-none">
          <div class="container-xl">
            <div class="row g-2 align-items-center">
              <div class="col">
                <h1 class="page-title">Color picker</h1>
              </div>
            </div>
          </div>
        </div>
        <!-- END PAGE HEADER -->
        <!-- END PAGE HEADER -->
        <!-- BEGIN PAGE BODY -->
        <main id="content" class="page-body">
          <div class="container-xl">
            <div class="card">
              <div class="card-body">
                <h3 class="card-title">Basic</h3>
                <div class="row g-3">
                  <div class="col-2">
                    <div>
                      <input type="text" class="form-control d-block" id="colorpicker-1" value="#066fd1" />
                    </div>
                  </div>
                  <div class="col-2">
                    <div>
                      <input type="text" class="form-control d-block" id="colorpicker-2" value="#4299e1" />
                    </div>
                  </div>
                  <div class="col-2">
                    <div>
                      <input type="text" class="form-control d-block" id="colorpicker-3" value="#4263eb" />
                    </div>
                  </div>
                  <div class="col-2">
                    <div>
                      <input type="text" class="form-control d-block" id="colorpicker-4" value="#ae3ec9" />
                    </div>
                  </div>
                  <div class="col-2">
                    <div>
                      <input type="text" class="form-control d-block" id="colorpicker-5" value="#d6336c" />
                    </div>
                  </div>
                  <div class="col-2">
                    <div>
                      <input type="text" class="form-control d-block" id="colorpicker-6" value="#d63939" />
                    </div>
                  </div>
                  <div class="col-2">
                    <div>
                      <input type="text" class="form-control d-block" id="colorpicker-7" value="#f76707" />
                    </div>
                  </div>
                  <div class="col-2">
                    <div>
                      <input type="text" class="form-control d-block" id="colorpicker-8" value="#f59f00" />
                    </div>
                  </div>
                  <div class="col-2">
                    <div>
                      <input type="text" class="form-control d-block" id="colorpicker-9" value="#74b816" />
                    </div>
                  </div>
                  <div class="col-2">
                    <div>
                      <input type="text" class="form-control d-block" id="colorpicker-10" value="#2fb344" />
                    </div>
                  </div>
                  <div class="col-2">
                    <div>
                      <input type="text" class="form-control d-block" id="colorpicker-11" value="#0ca678" />
                    </div>
                  </div>
                  <div class="col-2">
                    <div>
                      <input type="text" class="form-control d-block" id="colorpicker-12" value="#17a2b8" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>
        <!-- END PAGE BODY -->
        @include('samples.includes.footer')
      </div>
    </div>
    @include('samples.includes.settings')
    <!-- BEGIN PAGE LIBRARIES -->
    <!-- END PAGE LIBRARIES -->
    @include('samples.includes.scripts')
  </body>
</html>
