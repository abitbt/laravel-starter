<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Segmented control - Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>
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
                <h1 class="page-title">Segmented control</h1>
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
              <div class="col-md-6">
                <div class="card">
                  <div class="card-body">
                    <nav class="nav nav-segmented nav-1" role="tablist">
                      <button class="nav-link active" role="tab" data-bs-toggle="tab" aria-selected="true" aria-current="page">1</button>
                      <button class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false">2</button>
                      <button class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false">3</button>
                      <button class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false">4</button>
                    </nav>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card">
                  <div class="card-body">
                    <nav class="nav nav-segmented nav-1" role="tablist">
                      <button class="nav-link active" role="tab" data-bs-toggle="tab" aria-selected="true" aria-current="page">👦</button>
                      <button class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false">👦🏿</button>
                      <button class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false">👦🏾</button>
                      <button class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false">👦🏽</button>
                      <button class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false">👦🏼</button>
                      <button class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false">👦🏻</button>
                    </nav>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card">
                  <div class="card-body">
                    <nav class="nav nav-segmented nav-1" role="tablist">
                      <button class="nav-link active" role="tab" data-bs-toggle="tab" aria-selected="true" aria-current="page">
                        <!-- Download SVG icon from http://tabler.io/icons/icon/home -->
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
                          class="icon nav-link-icon icon-2"
                        >
                          <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                          <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                          <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                        </svg>
                      </button>
                      <button class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false">
                        <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
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
                          class="icon nav-link-icon icon-2"
                        >
                          <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                        </svg>
                      </button>
                      <button class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false">
                        <!-- Download SVG icon from http://tabler.io/icons/icon/clock -->
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
                          class="icon nav-link-icon icon-2"
                        >
                          <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                          <path d="M12 7v5l3 3" />
                        </svg>
                      </button>
                      <button class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false">
                        <!-- Download SVG icon from http://tabler.io/icons/icon/ghost -->
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
                          class="icon nav-link-icon icon-2"
                        >
                          <path
                            d="M5 11a7 7 0 0 1 14 0v7a1.78 1.78 0 0 1 -3.1 1.4a1.65 1.65 0 0 0 -2.6 0a1.65 1.65 0 0 1 -2.6 0a1.65 1.65 0 0 0 -2.6 0a1.78 1.78 0 0 1 -3.1 -1.4v-7"
                          />
                          <path d="M10 10l.01 0" />
                          <path d="M14 10l.01 0" />
                          <path d="M10 14a3.5 3.5 0 0 0 4 0" />
                        </svg>
                      </button>
                      <button class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false">
                        <!-- Download SVG icon from http://tabler.io/icons/icon/bold -->
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
                          class="icon nav-link-icon icon-2"
                        >
                          <path d="M7 5h6a3.5 3.5 0 0 1 0 7h-6z" />
                          <path d="M13 12h1a3.5 3.5 0 0 1 0 7h-7v-7" />
                        </svg>
                      </button>
                      <button class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false">
                        <!-- Download SVG icon from http://tabler.io/icons/icon/italic -->
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
                          class="icon nav-link-icon icon-2"
                        >
                          <path d="M11 5l6 0" />
                          <path d="M7 19l6 0" />
                          <path d="M14 5l-4 14" />
                        </svg>
                      </button>
                      <button class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false">
                        <!-- Download SVG icon from http://tabler.io/icons/icon/underline -->
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
                          class="icon nav-link-icon icon-2"
                        >
                          <path d="M7 5v5a5 5 0 0 0 10 0v-5" />
                          <path d="M5 19h14" />
                        </svg>
                      </button>
                    </nav>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card">
                  <div class="card-body">
                    <nav class="nav nav-segmented nav-2" role="tablist">
                      <button class="nav-link active" role="tab" data-bs-toggle="tab" aria-selected="true" aria-current="page">
                        <!-- Download SVG icon from http://tabler.io/icons/icon/list -->
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
                          class="icon nav-link-icon icon-2"
                        >
                          <path d="M9 6l11 0" />
                          <path d="M9 12l11 0" />
                          <path d="M9 18l11 0" />
                          <path d="M5 6l0 .01" />
                          <path d="M5 12l0 .01" />
                          <path d="M5 18l0 .01" />
                        </svg>
                        List
                      </button>
                      <button class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false">
                        <!-- Download SVG icon from http://tabler.io/icons/icon/layout -->
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
                          class="icon nav-link-icon icon-2"
                        >
                          <path d="M4 4m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v1a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                          <path d="M4 13m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                          <path d="M14 4m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                        </svg>
                        Kanban
                      </button>
                      <button class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false">
                        <!-- Download SVG icon from http://tabler.io/icons/icon/calendar -->
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
                          class="icon nav-link-icon icon-2"
                        >
                          <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z" />
                          <path d="M16 3v4" />
                          <path d="M8 3v4" />
                          <path d="M4 11h16" />
                          <path d="M11 15h1" />
                          <path d="M12 15v3" />
                        </svg>
                        Calendar
                      </button>
                      <button class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false">
                        <!-- Download SVG icon from http://tabler.io/icons/icon/files -->
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
                          class="icon nav-link-icon icon-2"
                        >
                          <path d="M15 3v4a1 1 0 0 0 1 1h4" />
                          <path d="M18 17h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h4l5 5v7a2 2 0 0 1 -2 2z" />
                          <path d="M16 17v2a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h2" />
                        </svg>
                        Files
                      </button>
                    </nav>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card">
                  <div class="card-body">
                    <nav class="nav nav-segmented nav-segmented-vertical nav-3" role="tablist">
                      <button class="nav-link active" role="tab" data-bs-toggle="tab" aria-selected="true" aria-current="page">
                        <!-- Download SVG icon from http://tabler.io/icons/icon/list -->
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
                          class="icon nav-link-icon icon-2"
                        >
                          <path d="M9 6l11 0" />
                          <path d="M9 12l11 0" />
                          <path d="M9 18l11 0" />
                          <path d="M5 6l0 .01" />
                          <path d="M5 12l0 .01" />
                          <path d="M5 18l0 .01" />
                        </svg>
                        List
                      </button>
                      <button class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false">
                        <!-- Download SVG icon from http://tabler.io/icons/icon/layout -->
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
                          class="icon nav-link-icon icon-2"
                        >
                          <path d="M4 4m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v1a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                          <path d="M4 13m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                          <path d="M14 4m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                        </svg>
                        Kanban
                      </button>
                      <button class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false">
                        <!-- Download SVG icon from http://tabler.io/icons/icon/calendar -->
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
                          class="icon nav-link-icon icon-2"
                        >
                          <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z" />
                          <path d="M16 3v4" />
                          <path d="M8 3v4" />
                          <path d="M4 11h16" />
                          <path d="M11 15h1" />
                          <path d="M12 15v3" />
                        </svg>
                        Calendar
                      </button>
                      <button class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false">
                        <!-- Download SVG icon from http://tabler.io/icons/icon/files -->
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
                          class="icon nav-link-icon icon-2"
                        >
                          <path d="M15 3v4a1 1 0 0 0 1 1h4" />
                          <path d="M18 17h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h4l5 5v7a2 2 0 0 1 -2 2z" />
                          <path d="M16 17v2a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h2" />
                        </svg>
                        Files
                      </button>
                    </nav>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card">
                  <div class="card-body">
                    <nav class="nav nav-segmented nav-segmented-vertical nav-3" role="tablist">
                      <button class="nav-link active" role="tab" data-bs-toggle="tab" aria-selected="true" aria-current="page">
                        <!-- Download SVG icon from http://tabler.io/icons/icon/home -->
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
                          class="icon nav-link-icon icon-2"
                        >
                          <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                          <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                          <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                        </svg>
                      </button>
                      <button class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false">
                        <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
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
                          class="icon nav-link-icon icon-2"
                        >
                          <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                        </svg>
                      </button>
                      <button class="nav-link disabled" role="tab" data-bs-toggle="tab" aria-selected="false" aria-disabled="true">
                        <!-- Download SVG icon from http://tabler.io/icons/icon/clock -->
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
                          class="icon nav-link-icon icon-2"
                        >
                          <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                          <path d="M12 7v5l3 3" />
                        </svg>
                      </button>
                      <button class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false">
                        <!-- Download SVG icon from http://tabler.io/icons/icon/ghost -->
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
                          class="icon nav-link-icon icon-2"
                        >
                          <path
                            d="M5 11a7 7 0 0 1 14 0v7a1.78 1.78 0 0 1 -3.1 1.4a1.65 1.65 0 0 0 -2.6 0a1.65 1.65 0 0 1 -2.6 0a1.65 1.65 0 0 0 -2.6 0a1.78 1.78 0 0 1 -3.1 -1.4v-7"
                          />
                          <path d="M10 10l.01 0" />
                          <path d="M14 10l.01 0" />
                          <path d="M10 14a3.5 3.5 0 0 0 4 0" />
                        </svg>
                      </button>
                      <button class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false">
                        <!-- Download SVG icon from http://tabler.io/icons/icon/bold -->
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
                          class="icon nav-link-icon icon-2"
                        >
                          <path d="M7 5h6a3.5 3.5 0 0 1 0 7h-6z" />
                          <path d="M13 12h1a3.5 3.5 0 0 1 0 7h-7v-7" />
                        </svg>
                      </button>
                      <button class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false">
                        <!-- Download SVG icon from http://tabler.io/icons/icon/italic -->
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
                          class="icon nav-link-icon icon-2"
                        >
                          <path d="M11 5l6 0" />
                          <path d="M7 19l6 0" />
                          <path d="M14 5l-4 14" />
                        </svg>
                      </button>
                      <button class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false">
                        <!-- Download SVG icon from http://tabler.io/icons/icon/underline -->
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
                          class="icon nav-link-icon icon-2"
                        >
                          <path d="M7 5v5a5 5 0 0 0 10 0v-5" />
                          <path d="M5 19h14" />
                        </svg>
                      </button>
                    </nav>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card">
                  <div class="card-body">
                    <nav class="nav nav-segmented nav-2" role="tablist">
                      <button class="nav-link active" role="tab" data-bs-toggle="tab" aria-selected="true" aria-current="page">Daily</button>
                      <button class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false">Weekly</button>
                      <button class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false">Monthly</button>
                      <button class="nav-link disabled" role="tab" data-bs-toggle="tab" aria-selected="false" aria-disabled="true">Quarterly</button>
                      <button class="nav-link disabled" role="tab" data-bs-toggle="tab" aria-selected="false" aria-disabled="true">Yearly</button>
                    </nav>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card">
                  <div class="card-body">
                    <nav class="nav nav-segmented nav-segmented-vertical nav-2" role="tablist">
                      <button class="nav-link active" role="tab" data-bs-toggle="tab" aria-selected="true" aria-current="page">Daily</button>
                      <button class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false">Weekly</button>
                      <button class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false">Monthly</button>
                      <button class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false">Quarterly</button>
                      <button class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false">Yearly</button>
                    </nav>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card">
                  <div class="card-body">
                    <nav class="nav nav-segmented nav-2" role="tablist">
                      <input type="radio" class="nav-link-input" name="segmented" id="segmented-checkbox-1" checked />
                      <label for="segmented-checkbox-1" class="nav-link" role="tab" aria-selected="true" aria-current="page"> Daily </label>
                      <input type="radio" class="nav-link-input" name="segmented" id="segmented-checkbox-2" />
                      <label for="segmented-checkbox-2" class="nav-link" role="tab" aria-selected="false"> Weekly </label>
                      <input type="radio" class="nav-link-input" name="segmented" id="segmented-checkbox-3" />
                      <label for="segmented-checkbox-3" class="nav-link" role="tab" aria-selected="false"> Monthly </label>
                      <input type="radio" class="nav-link-input" name="segmented" id="segmented-checkbox-4" />
                      <label for="segmented-checkbox-4" class="nav-link" role="tab" aria-selected="false"> Quarterly </label>
                      <input type="radio" class="nav-link-input" name="segmented" id="segmented-checkbox-5" />
                      <label for="segmented-checkbox-5" class="nav-link" role="tab" aria-selected="false"> Yearly </label>
                    </nav>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card">
                  <div class="card-body">
                    <nav class="nav nav-segmented nav-2 w-100" role="tablist">
                      <button class="nav-link active" role="tab" data-bs-toggle="tab" aria-selected="true" aria-current="page">Daily</button>
                      <button class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false">Weekly</button>
                      <button class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false">Monthly</button>
                      <button class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false">Quarterly</button>
                      <button class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false">Yearly</button>
                    </nav>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card">
                  <div class="card-body">
                    <div class="space-y">
                      <div>
                        <nav class="nav nav-segmented nav-2 w-100" role="tablist">
                          <button class="nav-link active" role="tab" data-bs-toggle="tab" aria-selected="true" aria-current="page">Overview</button>
                          <button class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false">Analytics</button>
                          <button class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false">Reports</button>
                          <button class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false">Notifications</button>
                        </nav>
                      </div>
                      <div>
                        <nav class="nav nav-segmented nav-2 w-100" role="tablist">
                          <button class="nav-link active" role="tab" data-bs-toggle="tab" aria-selected="true" aria-current="page">Account</button>
                          <button class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false">Password</button>
                        </nav>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card">
                  <div class="card-body">
                    <div class="space-y">
                      <div>
                        <nav class="nav nav-segmented nav-sm" role="tablist">
                          <button class="nav-link active" role="tab" data-bs-toggle="tab" aria-selected="true" aria-current="page">List</button>
                          <button class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false">Kanban</button>
                          <button class="nav-link disabled" role="tab" data-bs-toggle="tab" aria-selected="false" aria-disabled="true">Calendar</button>
                          <button class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false">Files</button>
                        </nav>
                      </div>
                      <div>
                        <nav class="nav nav-segmented nav-2" role="tablist">
                          <button class="nav-link active" role="tab" data-bs-toggle="tab" aria-selected="true" aria-current="page">List</button>
                          <button class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false">Kanban</button>
                          <button class="nav-link disabled" role="tab" data-bs-toggle="tab" aria-selected="false" aria-disabled="true">Calendar</button>
                          <button class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false">Files</button>
                        </nav>
                      </div>
                      <div>
                        <nav class="nav nav-segmented nav-lg" role="tablist">
                          <button class="nav-link active" role="tab" data-bs-toggle="tab" aria-selected="true" aria-current="page">List</button>
                          <button class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false">Kanban</button>
                          <button class="nav-link disabled" role="tab" data-bs-toggle="tab" aria-selected="false" aria-disabled="true">Calendar</button>
                          <button class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false">Files</button>
                        </nav>
                      </div>
                      <div>
                        <nav class="nav nav-segmented nav-sm" role="tablist">
                          <button class="nav-link active" role="tab" data-bs-toggle="tab" aria-selected="true" aria-current="page">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/list -->
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
                              class="icon nav-link-icon icon-2"
                            >
                              <path d="M9 6l11 0" />
                              <path d="M9 12l11 0" />
                              <path d="M9 18l11 0" />
                              <path d="M5 6l0 .01" />
                              <path d="M5 12l0 .01" />
                              <path d="M5 18l0 .01" />
                            </svg>
                            List
                          </button>
                          <button class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/layout -->
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
                              class="icon nav-link-icon icon-2"
                            >
                              <path d="M4 4m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v1a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                              <path d="M4 13m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                              <path d="M14 4m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                            </svg>
                            Kanban
                          </button>
                          <button class="nav-link disabled" role="tab" data-bs-toggle="tab" aria-selected="false" aria-disabled="true">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/calendar -->
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
                              class="icon nav-link-icon icon-2"
                            >
                              <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z" />
                              <path d="M16 3v4" />
                              <path d="M8 3v4" />
                              <path d="M4 11h16" />
                              <path d="M11 15h1" />
                              <path d="M12 15v3" />
                            </svg>
                            Calendar
                          </button>
                          <button class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/files -->
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
                              class="icon nav-link-icon icon-2"
                            >
                              <path d="M15 3v4a1 1 0 0 0 1 1h4" />
                              <path d="M18 17h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h4l5 5v7a2 2 0 0 1 -2 2z" />
                              <path d="M16 17v2a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h2" />
                            </svg>
                            Files
                          </button>
                        </nav>
                      </div>
                      <div>
                        <nav class="nav nav-segmented nav-3" role="tablist">
                          <button class="nav-link active" role="tab" data-bs-toggle="tab" aria-selected="true" aria-current="page">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/list -->
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
                              class="icon nav-link-icon icon-2"
                            >
                              <path d="M9 6l11 0" />
                              <path d="M9 12l11 0" />
                              <path d="M9 18l11 0" />
                              <path d="M5 6l0 .01" />
                              <path d="M5 12l0 .01" />
                              <path d="M5 18l0 .01" />
                            </svg>
                            List
                          </button>
                          <button class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/layout -->
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
                              class="icon nav-link-icon icon-2"
                            >
                              <path d="M4 4m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v1a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                              <path d="M4 13m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                              <path d="M14 4m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                            </svg>
                            Kanban
                          </button>
                          <button class="nav-link disabled" role="tab" data-bs-toggle="tab" aria-selected="false" aria-disabled="true">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/calendar -->
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
                              class="icon nav-link-icon icon-2"
                            >
                              <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z" />
                              <path d="M16 3v4" />
                              <path d="M8 3v4" />
                              <path d="M4 11h16" />
                              <path d="M11 15h1" />
                              <path d="M12 15v3" />
                            </svg>
                            Calendar
                          </button>
                          <button class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/files -->
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
                              class="icon nav-link-icon icon-2"
                            >
                              <path d="M15 3v4a1 1 0 0 0 1 1h4" />
                              <path d="M18 17h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h4l5 5v7a2 2 0 0 1 -2 2z" />
                              <path d="M16 17v2a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h2" />
                            </svg>
                            Files
                          </button>
                        </nav>
                      </div>
                      <div>
                        <nav class="nav nav-segmented nav-lg" role="tablist">
                          <button class="nav-link active" role="tab" data-bs-toggle="tab" aria-selected="true" aria-current="page">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/list -->
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
                              class="icon nav-link-icon icon-2"
                            >
                              <path d="M9 6l11 0" />
                              <path d="M9 12l11 0" />
                              <path d="M9 18l11 0" />
                              <path d="M5 6l0 .01" />
                              <path d="M5 12l0 .01" />
                              <path d="M5 18l0 .01" />
                            </svg>
                            List
                          </button>
                          <button class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/layout -->
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
                              class="icon nav-link-icon icon-2"
                            >
                              <path d="M4 4m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v1a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                              <path d="M4 13m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                              <path d="M14 4m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                            </svg>
                            Kanban
                          </button>
                          <button class="nav-link disabled" role="tab" data-bs-toggle="tab" aria-selected="false" aria-disabled="true">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/calendar -->
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
                              class="icon nav-link-icon icon-2"
                            >
                              <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z" />
                              <path d="M16 3v4" />
                              <path d="M8 3v4" />
                              <path d="M4 11h16" />
                              <path d="M11 15h1" />
                              <path d="M12 15v3" />
                            </svg>
                            Calendar
                          </button>
                          <button class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/files -->
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
                              class="icon nav-link-icon icon-2"
                            >
                              <path d="M15 3v4a1 1 0 0 0 1 1h4" />
                              <path d="M18 17h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h4l5 5v7a2 2 0 0 1 -2 2z" />
                              <path d="M16 17v2a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h2" />
                            </svg>
                            Files
                          </button>
                        </nav>
                      </div>
                      <div>
                        <nav class="nav nav-segmented nav-sm" role="tablist">
                          <button class="nav-link active" role="tab" data-bs-toggle="tab" aria-selected="true" aria-current="page">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/list -->
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
                              class="icon nav-link-icon icon-2"
                            >
                              <path d="M9 6l11 0" />
                              <path d="M9 12l11 0" />
                              <path d="M9 18l11 0" />
                              <path d="M5 6l0 .01" />
                              <path d="M5 12l0 .01" />
                              <path d="M5 18l0 .01" />
                            </svg>
                          </button>
                          <button class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/layout -->
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
                              class="icon nav-link-icon icon-2"
                            >
                              <path d="M4 4m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v1a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                              <path d="M4 13m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                              <path d="M14 4m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                            </svg>
                          </button>
                          <button class="nav-link disabled" role="tab" data-bs-toggle="tab" aria-selected="false" aria-disabled="true">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/calendar -->
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
                              class="icon nav-link-icon icon-2"
                            >
                              <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z" />
                              <path d="M16 3v4" />
                              <path d="M8 3v4" />
                              <path d="M4 11h16" />
                              <path d="M11 15h1" />
                              <path d="M12 15v3" />
                            </svg>
                          </button>
                          <button class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/files -->
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
                              class="icon nav-link-icon icon-2"
                            >
                              <path d="M15 3v4a1 1 0 0 0 1 1h4" />
                              <path d="M18 17h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h4l5 5v7a2 2 0 0 1 -2 2z" />
                              <path d="M16 17v2a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h2" />
                            </svg>
                          </button>
                        </nav>
                      </div>
                      <div>
                        <nav class="nav nav-segmented nav-2" role="tablist">
                          <button class="nav-link active" role="tab" data-bs-toggle="tab" aria-selected="true" aria-current="page">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/list -->
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
                              class="icon nav-link-icon icon-2"
                            >
                              <path d="M9 6l11 0" />
                              <path d="M9 12l11 0" />
                              <path d="M9 18l11 0" />
                              <path d="M5 6l0 .01" />
                              <path d="M5 12l0 .01" />
                              <path d="M5 18l0 .01" />
                            </svg>
                          </button>
                          <button class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/layout -->
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
                              class="icon nav-link-icon icon-2"
                            >
                              <path d="M4 4m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v1a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                              <path d="M4 13m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                              <path d="M14 4m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                            </svg>
                          </button>
                          <button class="nav-link disabled" role="tab" data-bs-toggle="tab" aria-selected="false" aria-disabled="true">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/calendar -->
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
                              class="icon nav-link-icon icon-2"
                            >
                              <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z" />
                              <path d="M16 3v4" />
                              <path d="M8 3v4" />
                              <path d="M4 11h16" />
                              <path d="M11 15h1" />
                              <path d="M12 15v3" />
                            </svg>
                          </button>
                          <button class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/files -->
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
                              class="icon nav-link-icon icon-2"
                            >
                              <path d="M15 3v4a1 1 0 0 0 1 1h4" />
                              <path d="M18 17h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h4l5 5v7a2 2 0 0 1 -2 2z" />
                              <path d="M16 17v2a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h2" />
                            </svg>
                          </button>
                        </nav>
                      </div>
                      <div>
                        <nav class="nav nav-segmented nav-lg" role="tablist">
                          <button class="nav-link active" role="tab" data-bs-toggle="tab" aria-selected="true" aria-current="page">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/list -->
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
                              class="icon nav-link-icon icon-2"
                            >
                              <path d="M9 6l11 0" />
                              <path d="M9 12l11 0" />
                              <path d="M9 18l11 0" />
                              <path d="M5 6l0 .01" />
                              <path d="M5 12l0 .01" />
                              <path d="M5 18l0 .01" />
                            </svg>
                          </button>
                          <button class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/layout -->
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
                              class="icon nav-link-icon icon-2"
                            >
                              <path d="M4 4m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v1a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                              <path d="M4 13m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                              <path d="M14 4m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                            </svg>
                          </button>
                          <button class="nav-link disabled" role="tab" data-bs-toggle="tab" aria-selected="false" aria-disabled="true">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/calendar -->
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
                              class="icon nav-link-icon icon-2"
                            >
                              <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z" />
                              <path d="M16 3v4" />
                              <path d="M8 3v4" />
                              <path d="M4 11h16" />
                              <path d="M11 15h1" />
                              <path d="M12 15v3" />
                            </svg>
                          </button>
                          <button class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/files -->
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
                              class="icon nav-link-icon icon-2"
                            >
                              <path d="M15 3v4a1 1 0 0 0 1 1h4" />
                              <path d="M18 17h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h4l5 5v7a2 2 0 0 1 -2 2z" />
                              <path d="M16 17v2a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h2" />
                            </svg>
                          </button>
                        </nav>
                      </div>
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
