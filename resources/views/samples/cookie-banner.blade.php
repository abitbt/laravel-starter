<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Cookie banner - Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
  </title>
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
              <h1 class="page-title">Cookie banner</h1>
            </div>
          </div>
        </div>
      </div>
      <!-- END PAGE HEADER -->
      <!-- END PAGE HEADER -->
      <!-- BEGIN PAGE BODY -->
      <main id="content" class="page-body">
        <div class="container-xl">
          <div class="offcanvas offcanvas-bottom show h-auto" tabindex="-1" id="offcanvasBottom" aria-modal="true"
            role="dialog">
            <div class="offcanvas-body">
              <div class="container">
                <div class="row align-items-center">
                  <div class="col">
                    <strong>Do you like cookies?</strong> 🍪 We use cookies to ensure you get the best experience on our
                    website.
                    <a href="./terms-of-service.html" target="_blank">Learn more</a>
                  </div>
                  <div class="col-auto">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="offcanvas">Essential Cookies
                      Only</button>
                  </div>
                  <div class="col-auto">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="offcanvas">Allow All
                      Cookies</button>
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
  @include('samples.includes.scripts')
</body>

</html>
