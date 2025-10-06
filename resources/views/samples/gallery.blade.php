<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Gallery - Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>
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
                <h1 class="page-title">Gallery</h1>
                <div class="text-secondary mt-1">1-15 of 241 photos</div>
              </div>
              <!-- Page title actions -->
              <div class="col-auto ms-auto d-print-none">
                <div class="d-flex">
                  <div class="me-3">
                    <div class="input-icon">
                      <input type="text" value="" class="form-control" placeholder="Search…" />
                      <span class="input-icon-addon">
                        <!-- Download SVG icon from http://tabler.io/icons/icon/search -->
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
                          <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                          <path d="M21 21l-6 -6" />
                        </svg>
                      </span>
                    </div>
                  </div>
                  <a href="#" class="btn btn-primary btn-3">
                    <!-- Download SVG icon from http://tabler.io/icons/icon/plus -->
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
                      class="icon icon-2"
                    >
                      <path d="M12 5l0 14" />
                      <path d="M5 12l14 0" />
                    </svg>
                    Add event
                  </a>
                </div>
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
              <div class="col-sm-6 col-lg-4">
                <div class="card card-sm">
                  <a href="#" class="d-block"
                    ><img src="./static/photos/beautiful-blonde-woman-relaxing-with-a-can-of-coke-on-a-tree-stump-by-the-beach.jpg" class="card-img-top"
                  /></a>
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <span class="avatar avatar-2 me-3 rounded" style="background-image: url(./static/avatars/000m.jpg)"> </span>
                      <div>
                        <div>Paweł Kuna</div>
                        <div class="text-secondary">3 days ago</div>
                      </div>
                      <div class="ms-auto">
                        <a href="#" class="text-secondary">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/eye -->
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
                            <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                            <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                          </svg>
                          467
                        </a>
                        <a href="#" class="ms-3 text-secondary">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
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
                            class="icon icon-2"
                          >
                            <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                          </svg>
                          67
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4">
                <div class="card card-sm">
                  <a href="#" class="d-block"><img src="./static/photos/brainstorming-session-with-creative-designers.jpg" class="card-img-top" /></a>
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <span class="avatar avatar-2 me-3 rounded" style="background-image: url(./static/avatars/052f.jpg)"> </span>
                      <div>
                        <div>Jeffie Lewzey</div>
                        <div class="text-secondary">now</div>
                      </div>
                      <div class="ms-auto">
                        <a href="#" class="text-secondary">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/eye -->
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
                            <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                            <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                          </svg>
                          300
                        </a>
                        <a href="#" class="ms-3 text-secondary">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
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
                            class="icon icon-2"
                          >
                            <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                          </svg>
                          20
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4">
                <div class="card card-sm">
                  <a href="#" class="d-block"><img src="./static/photos/finances-us-dollars-and-bitcoins-currency-money.jpg" class="card-img-top" /></a>
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <span class="avatar avatar-2 me-3 rounded" style="background-image: url(./static/avatars/002m.jpg)"> </span>
                      <div>
                        <div>Mallory Hulme</div>
                        <div class="text-secondary">now</div>
                      </div>
                      <div class="ms-auto">
                        <a href="#" class="text-secondary">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/eye -->
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
                            <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                            <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                          </svg>
                          300
                        </a>
                        <a href="#" class="ms-3 text-secondary">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
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
                            class="icon icon-filled text-red icon-2"
                          >
                            <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                          </svg>
                          20
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4">
                <div class="card card-sm">
                  <a href="#" class="d-block"><img src="./static/photos/group-of-people-brainstorming-and-taking-notes-2.jpg" class="card-img-top" /></a>
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <span class="avatar avatar-2 me-3 rounded" style="background-image: url(./static/avatars/003m.jpg)"> </span>
                      <div>
                        <div>Dunn Slane</div>
                        <div class="text-secondary">10 days ago</div>
                      </div>
                      <div class="ms-auto">
                        <a href="#" class="text-secondary">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/eye -->
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
                            <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                            <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                          </svg>
                          479
                        </a>
                        <a href="#" class="ms-3 text-secondary">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
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
                            class="icon icon-filled text-red icon-2"
                          >
                            <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                          </svg>
                          71
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4">
                <div class="card card-sm">
                  <a href="#" class="d-block"
                    ><img src="./static/photos/blue-sofa-with-pillows-in-a-designer-living-room-interior.jpg" class="card-img-top"
                  /></a>
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <span class="avatar avatar-2 me-3 rounded" style="background-image: url(./static/avatars/000f.jpg)"> </span>
                      <div>
                        <div>Emmy Levet</div>
                        <div class="text-secondary">now</div>
                      </div>
                      <div class="ms-auto">
                        <a href="#" class="text-secondary">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/eye -->
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
                            <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                            <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                          </svg>
                          300
                        </a>
                        <a href="#" class="ms-3 text-secondary">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
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
                            class="icon icon-filled text-red icon-2"
                          >
                            <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                          </svg>
                          20
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4">
                <div class="card card-sm">
                  <a href="#" class="d-block"
                    ><img src="./static/photos/home-office-desk-with-macbook-iphone-calendar-watch-and-organizer.jpg" class="card-img-top"
                  /></a>
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <span class="avatar avatar-2 me-3 rounded" style="background-image: url(./static/avatars/001f.jpg)"> </span>
                      <div>
                        <div>Maryjo Lebarree</div>
                        <div class="text-secondary">3 days ago</div>
                      </div>
                      <div class="ms-auto">
                        <a href="#" class="text-secondary">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/eye -->
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
                            <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                            <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                          </svg>
                          405
                        </a>
                        <a href="#" class="ms-3 text-secondary">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
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
                            class="icon icon-filled text-red icon-2"
                          >
                            <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                          </svg>
                          23
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4">
                <div class="card card-sm">
                  <a href="#" class="d-block"><img src="./static/photos/young-woman-working-in-a-cafe.jpg" class="card-img-top" /></a>
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <span class="avatar avatar-2 me-3 rounded" style="background-image: url(./static/avatars/004m.jpg)"> </span>
                      <div>
                        <div>Egan Poetz</div>
                        <div class="text-secondary">6 days ago</div>
                      </div>
                      <div class="ms-auto">
                        <a href="#" class="text-secondary">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/eye -->
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
                            <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                            <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                          </svg>
                          332
                        </a>
                        <a href="#" class="ms-3 text-secondary">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
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
                            class="icon icon-filled text-red icon-2"
                          >
                            <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                          </svg>
                          51
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4">
                <div class="card card-sm">
                  <a href="#" class="d-block"><img src="./static/photos/everything-you-need-to-work-from-your-bed.jpg" class="card-img-top" /></a>
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <span class="avatar avatar-2 me-3 rounded" style="background-image: url(./static/avatars/002f.jpg)"> </span>
                      <div>
                        <div>Kellie Skingley</div>
                        <div class="text-secondary">9 days ago</div>
                      </div>
                      <div class="ms-auto">
                        <a href="#" class="text-secondary">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/eye -->
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
                            <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                            <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                          </svg>
                          369
                        </a>
                        <a href="#" class="ms-3 text-secondary">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
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
                            class="icon icon-filled text-red icon-2"
                          >
                            <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                          </svg>
                          70
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4">
                <div class="card card-sm">
                  <a href="#" class="d-block"><img src="./static/photos/young-entrepreneur-working-from-a-modern-cafe.jpg" class="card-img-top" /></a>
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <span class="avatar avatar-2 me-3 rounded" style="background-image: url(./static/avatars/003f.jpg)"> </span>
                      <div>
                        <div>Christabel Charlwood</div>
                        <div class="text-secondary">now</div>
                      </div>
                      <div class="ms-auto">
                        <a href="#" class="text-secondary">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/eye -->
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
                            <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                            <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                          </svg>
                          555
                        </a>
                        <a href="#" class="ms-3 text-secondary">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
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
                            class="icon icon-2"
                          >
                            <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                          </svg>
                          73
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4">
                <div class="card card-sm">
                  <a href="#" class="d-block"><img src="./static/photos/finances-us-dollars-and-bitcoins-currency-money-2.jpg" class="card-img-top" /></a>
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <span class="avatar avatar-2 me-3 rounded" style="background-image: url(./static/avatars/063m.jpg)"> </span>
                      <div>
                        <div>Haskel Shelper</div>
                        <div class="text-secondary">now</div>
                      </div>
                      <div class="ms-auto">
                        <a href="#" class="text-secondary">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/eye -->
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
                            <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                            <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                          </svg>
                          300
                        </a>
                        <a href="#" class="ms-3 text-secondary">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
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
                            class="icon icon-filled text-red icon-2"
                          >
                            <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                          </svg>
                          20
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4">
                <div class="card card-sm">
                  <a href="#" class="d-block"><img src="./static/photos/group-of-people-sightseeing-in-the-city.jpg" class="card-img-top" /></a>
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <span class="avatar avatar-2 me-3 rounded" style="background-image: url(./static/avatars/006m.jpg)"> </span>
                      <div>
                        <div>Lorry Mion</div>
                        <div class="text-secondary">5 days ago</div>
                      </div>
                      <div class="ms-auto">
                        <a href="#" class="text-secondary">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/eye -->
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
                            <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                            <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                          </svg>
                          424
                        </a>
                        <a href="#" class="ms-3 text-secondary">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
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
                            class="icon icon-2"
                          >
                            <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                          </svg>
                          45
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4">
                <div class="card card-sm">
                  <a href="#" class="d-block"><img src="./static/photos/color-palette-guide-sample-colors-catalog-.jpg" class="card-img-top" /></a>
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <span class="avatar avatar-2 me-3 rounded" style="background-image: url(./static/avatars/004f.jpg)"> </span>
                      <div>
                        <div>Leesa Beaty</div>
                        <div class="text-secondary">now</div>
                      </div>
                      <div class="ms-auto">
                        <a href="#" class="text-secondary">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/eye -->
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
                            <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                            <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                          </svg>
                          300
                        </a>
                        <a href="#" class="ms-3 text-secondary">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
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
                            class="icon icon-2"
                          >
                            <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                          </svg>
                          20
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4">
                <div class="card card-sm">
                  <a href="#" class="d-block"><img src="./static/photos/stylish-workplace-with-computer-at-home.jpg" class="card-img-top" /></a>
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <span class="avatar avatar-2 me-3 rounded" style="background-image: url(./static/avatars/007m.jpg)"> </span>
                      <div>
                        <div>Perren Keemar</div>
                        <div class="text-secondary">4 days ago</div>
                      </div>
                      <div class="ms-auto">
                        <a href="#" class="text-secondary">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/eye -->
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
                            <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                            <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                          </svg>
                          393
                        </a>
                        <a href="#" class="ms-3 text-secondary">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
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
                            class="icon icon-2"
                          >
                            <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                          </svg>
                          95
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4">
                <div class="card card-sm">
                  <a href="#" class="d-block"><img src="./static/photos/pink-desk-in-the-home-office.jpg" class="card-img-top" /></a>
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <span class="avatar avatar-2 me-3 rounded"> SA </span>
                      <div>
                        <div>Sunny Airey</div>
                        <div class="text-secondary">5 days ago</div>
                      </div>
                      <div class="ms-auto">
                        <a href="#" class="text-secondary">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/eye -->
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
                            <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                            <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                          </svg>
                          301
                        </a>
                        <a href="#" class="ms-3 text-secondary">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
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
                            class="icon icon-2"
                          >
                            <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                          </svg>
                          99
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4">
                <div class="card card-sm">
                  <a href="#" class="d-block"
                    ><img src="./static/photos/young-woman-sitting-on-the-sofa-and-working-on-her-laptop.jpg" class="card-img-top"
                  /></a>
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <span class="avatar avatar-2 me-3 rounded" style="background-image: url(./static/avatars/009m.jpg)"> </span>
                      <div>
                        <div>Geoffry Flaunders</div>
                        <div class="text-secondary">7 days ago</div>
                      </div>
                      <div class="ms-auto">
                        <a href="#" class="text-secondary">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/eye -->
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
                            <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                            <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                          </svg>
                          596
                        </a>
                        <a href="#" class="ms-3 text-secondary">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
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
                            class="icon icon-2"
                          >
                            <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                          </svg>
                          64
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-flex mt-5">
              <!-- BEGIN PAGINATION -->
              <ul class="pagination ms-auto">
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
