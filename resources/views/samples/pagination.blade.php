<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Pagination - Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>
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
                <h1 class="page-title">Pagination</h1>
              </div>
            </div>
          </div>
        </div>
        <!-- END PAGE HEADER -->
        <!-- END PAGE HEADER -->
        <!-- BEGIN PAGE BODY -->
        <main id="content" class="page-body">
          <div class="container-xl">
            <div class="row row-cards">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <!-- BEGIN PAGINATION -->
                    <ul class="pagination">
                      <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-left -->
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            aria-hidden="true"
                            focusable="false"
                            class="icon icon-1"
                          >
                            <path d="M15 6l-6 6l6 6" />
                          </svg>
                        </a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#">1</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#">2</a>
                      </li>
                      <li class="page-item active">
                        <a class="page-link" href="#">3</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#">4</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#">5</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-right -->
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            aria-hidden="true"
                            focusable="false"
                            class="icon icon-1"
                          >
                            <path d="M9 6l6 6l-6 6" />
                          </svg>
                        </a>
                      </li>
                    </ul>
                    <!-- END PAGINATION -->
                    <!-- BEGIN PAGINATION -->
                    <ul class="pagination">
                      <li class="page-item disabled">
                        <a class="page-link page-text" href="#" tabindex="-1" aria-disabled="true"> Previous </a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#">1</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#">2</a>
                      </li>
                      <li class="page-item active">
                        <a class="page-link" href="#">3</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#">4</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#">5</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link page-text" href="#"> Next </a>
                      </li>
                    </ul>
                    <!-- END PAGINATION -->
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <!-- BEGIN PAGINATION -->
                    <ul class="pagination">
                      <li class="page-item page-prev disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                          <div class="page-item-subtitle">previous</div>
                          <div class="page-item-title">Getting started</div>
                        </a>
                      </li>
                      <li class="page-item page-next">
                        <a class="page-link" href="#">
                          <div class="page-item-subtitle">next</div>
                          <div class="page-item-title">Breadcrumbs</div>
                        </a>
                      </li>
                    </ul>
                    <!-- END PAGINATION -->
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
