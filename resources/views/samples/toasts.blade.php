<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Toasts - Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>
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
                <h1 class="page-title">Toasts</h1>
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
                <div class="btn-list">
                  <a href="#" class="btn btn-2" data-bs-toggle="toast" data-bs-target="#toast-simple"> Simple toast </a>
                  <a href="#" class="btn btn-2" data-bs-toggle="toast" data-bs-target="#toast-cookies"> Cookies toast </a>
                </div>
              </div>
            </div>
            <div class="toast-container position-fixed bottom-0 end-0 p-3">
              <div class="toast" id="toast-simple" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="false">
                <div class="toast-header">
                  <span class="avatar avatar-xs me-2" style="background-image: url(./static/avatars/002m.jpg)"> </span>
                  <strong class="me-auto">Mallory Hulme</strong>
                  <small>11 mins ago</small>
                  <button type="button" class="ms-2 btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">Hello, world! This is a toast message.</div>
              </div>
              <div class="toast" id="toast-cookies" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="false">
                <div class="toast-header">
                  <span class="avatar avatar-xs me-2" style="background-image: url(./static/avatars/002m.jpg)"> </span>
                  <strong class="me-auto">Mallory Hulme</strong>
                  <small>11 mins ago</small>
                  <button type="button" class="ms-2 btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                  🍪&nbsp;Our site uses cookies. By continuing to use our site, you agree to our Cookie Policy.
                  <div class="mt-2 pt-2 border-top">
                    <a href="#" class="btn btn-primary btn-sm">I understand</a>
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
