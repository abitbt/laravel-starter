<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Offcanvas - Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>
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
                <h1 class="page-title">Offcanvas</h1>
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
                <a class="btn" data-bs-toggle="offcanvas" href="#offcanvasStart" role="button" aria-controls="offcanvasStart"> Toggle start offcanvas </a>
                <a class="btn" data-bs-toggle="offcanvas" href="#offcanvasEnd" role="button" aria-controls="offcanvasEnd"> Toggle end offcanvas </a>
                <a class="btn" data-bs-toggle="offcanvas" href="#offcanvasTop" role="button" aria-controls="offcanvasTop"> Toggle top offcanvas </a>
                <a class="btn" data-bs-toggle="offcanvas" href="#offcanvasBottom" role="button" aria-controls="offcanvasBottom"> Toggle bottom offcanvas </a>
              </div>
            </div>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasStart" aria-labelledby="offcanvasStartLabel">
              <div class="offcanvas-header">
                <h2 class="offcanvas-title" id="offcanvasStartLabel">Start offcanvas</h2>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body">
                <div>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda ea est, eum exercitationem fugiat illum itaque laboriosam magni
                  necessitatibus, nemo nisi numquam quae reiciendis repellat sit soluta unde. Aut!
                </div>
                <div class="mt-3">
                  <button class="btn btn-primary" type="button" data-bs-dismiss="offcanvas">Close offcanvas</button>
                </div>
              </div>
            </div>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEnd" aria-labelledby="offcanvasEndLabel">
              <div class="offcanvas-header">
                <h2 class="offcanvas-title" id="offcanvasEndLabel">End offcanvas</h2>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body">
                <div>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda ea est, eum exercitationem fugiat illum itaque laboriosam magni
                  necessitatibus, nemo nisi numquam quae reiciendis repellat sit soluta unde. Aut!
                </div>
                <div class="mt-3">
                  <button class="btn btn-primary" type="button" data-bs-dismiss="offcanvas">Close offcanvas</button>
                </div>
              </div>
            </div>
            <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
              <div class="offcanvas-header">
                <h2 class="offcanvas-title" id="offcanvasTopLabel">Top offcanvas</h2>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body">
                <div>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda ea est, eum exercitationem fugiat illum itaque laboriosam magni
                  necessitatibus, nemo nisi numquam quae reiciendis repellat sit soluta unde. Aut!
                </div>
                <div class="mt-3">
                  <button class="btn btn-primary" type="button" data-bs-dismiss="offcanvas">Close offcanvas</button>
                </div>
              </div>
            </div>
            <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
              <div class="offcanvas-header">
                <h2 class="offcanvas-title" id="offcanvasBottomLabel">Bottom offcanvas</h2>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body">
                <div>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda ea est, eum exercitationem fugiat illum itaque laboriosam magni
                  necessitatibus, nemo nisi numquam quae reiciendis repellat sit soluta unde. Aut!
                </div>
                <div class="mt-3">
                  <button class="btn btn-primary" type="button" data-bs-dismiss="offcanvas">Close offcanvas</button>
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
