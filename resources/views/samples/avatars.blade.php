<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Avatars - Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>
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
                <h1 class="page-title">Avatars</h1>
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
              <div class="col-4">
                <div class="card">
                  <div class="card-body">
                    <h2 class="card-title">Default avatar</h2>
                    <span class="avatar avatar-0">
                      <!-- Download SVG icon from http://tabler.io/icons/icon/user -->
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
                        class="icon avatar-icon icon-2"
                      >
                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                      </svg>
                    </span>
                  </div>
                </div>
              </div>
              <div class="col-4">
                <div class="card">
                  <div class="card-body">
                    <h2 class="card-title">Avatar with icon</h2>
                    <div class="avatar-list">
                      <span class="avatar avatar-1">
                        <!-- Download SVG icon from http://tabler.io/icons/icon/user -->
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
                          class="icon avatar-icon icon-2"
                        >
                          <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                          <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                        </svg>
                      </span>
                      <span class="avatar avatar-1">
                        <!-- Download SVG icon from http://tabler.io/icons/icon/settings -->
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
                          class="icon avatar-icon icon-2"
                        >
                          <path
                            d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z"
                          />
                          <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                        </svg>
                      </span>
                      <span class="avatar avatar-1">
                        <!-- Download SVG icon from http://tabler.io/icons/icon/car -->
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
                          class="icon avatar-icon icon-2"
                        >
                          <path d="M7 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                          <path d="M17 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                          <path d="M5 17h-2v-6l2 -5h9l4 5h1a2 2 0 0 1 2 2v4h-2m-4 0h-6m-6 -6h15m-6 0v-5" />
                        </svg>
                      </span>
                      <span class="avatar avatar-1">
                        <!-- Download SVG icon from http://tabler.io/icons/icon/balloon -->
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
                          class="icon avatar-icon icon-2"
                        >
                          <path d="M14 8a2 2 0 0 0 -2 -2" />
                          <path d="M6 8a6 6 0 1 1 12 0c0 4.97 -2.686 9 -6 9s-6 -4.03 -6 -9" />
                          <path d="M12 17v1a2 2 0 0 1 -2 2h-3a2 2 0 0 0 -2 2" />
                        </svg>
                      </span>
                      <span class="avatar avatar-1">
                        <!-- Download SVG icon from http://tabler.io/icons/icon/users -->
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
                          class="icon avatar-icon icon-2"
                        >
                          <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                          <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                          <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                          <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                        </svg>
                      </span>
                      <span class="avatar avatar-1">
                        <!-- Download SVG icon from http://tabler.io/icons/icon/users-group -->
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
                          class="icon avatar-icon icon-2"
                        >
                          <path d="M10 13a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                          <path d="M8 21v-1a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v1" />
                          <path d="M15 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                          <path d="M17 10h2a2 2 0 0 1 2 2v1" />
                          <path d="M5 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                          <path d="M3 13v-1a2 2 0 0 1 2 -2h2" />
                        </svg>
                      </span>
                      <span class="avatar avatar-1">
                        <!-- Download SVG icon from http://tabler.io/icons/icon/apps -->
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
                          class="icon avatar-icon icon-2"
                        >
                          <path d="M4 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                          <path d="M4 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                          <path d="M14 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                          <path d="M14 7l6 0" />
                          <path d="M17 4l0 6" />
                        </svg>
                      </span>
                      <span class="avatar avatar-1">
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
                          class="icon avatar-icon icon-2"
                        >
                          <path
                            d="M5 11a7 7 0 0 1 14 0v7a1.78 1.78 0 0 1 -3.1 1.4a1.65 1.65 0 0 0 -2.6 0a1.65 1.65 0 0 1 -2.6 0a1.65 1.65 0 0 0 -2.6 0a1.78 1.78 0 0 1 -3.1 -1.4v-7"
                          />
                          <path d="M10 10l.01 0" />
                          <path d="M14 10l.01 0" />
                          <path d="M10 14a3.5 3.5 0 0 0 4 0" />
                        </svg>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-4">
                <div class="card">
                  <div class="card-body">
                    <h2 class="card-title">Avatar with icon</h2>
                    <div class="avatar-list">
                      <span class="avatar avatar-2 bg-blue-lt">
                        <!-- Download SVG icon from http://tabler.io/icons/icon/user -->
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
                          class="icon avatar-icon icon-2"
                        >
                          <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                          <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                        </svg>
                      </span>
                      <span class="avatar avatar-2 bg-azure-lt">
                        <!-- Download SVG icon from http://tabler.io/icons/icon/user -->
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
                          class="icon avatar-icon icon-2"
                        >
                          <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                          <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                        </svg>
                      </span>
                      <span class="avatar avatar-2 bg-indigo-lt">
                        <!-- Download SVG icon from http://tabler.io/icons/icon/user -->
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
                          class="icon avatar-icon icon-2"
                        >
                          <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                          <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                        </svg>
                      </span>
                      <span class="avatar avatar-2 bg-purple-lt">
                        <!-- Download SVG icon from http://tabler.io/icons/icon/user -->
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
                          class="icon avatar-icon icon-2"
                        >
                          <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                          <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                        </svg>
                      </span>
                      <span class="avatar avatar-2 bg-pink-lt">
                        <!-- Download SVG icon from http://tabler.io/icons/icon/user -->
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
                          class="icon avatar-icon icon-2"
                        >
                          <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                          <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                        </svg>
                      </span>
                      <span class="avatar avatar-2 bg-red-lt">
                        <!-- Download SVG icon from http://tabler.io/icons/icon/user -->
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
                          class="icon avatar-icon icon-2"
                        >
                          <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                          <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                        </svg>
                      </span>
                      <span class="avatar avatar-2 bg-orange-lt">
                        <!-- Download SVG icon from http://tabler.io/icons/icon/user -->
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
                          class="icon avatar-icon icon-2"
                        >
                          <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                          <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                        </svg>
                      </span>
                      <span class="avatar avatar-2 bg-yellow-lt">
                        <!-- Download SVG icon from http://tabler.io/icons/icon/user -->
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
                          class="icon avatar-icon icon-2"
                        >
                          <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                          <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                        </svg>
                      </span>
                      <span class="avatar avatar-2 bg-lime-lt">
                        <!-- Download SVG icon from http://tabler.io/icons/icon/user -->
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
                          class="icon avatar-icon icon-2"
                        >
                          <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                          <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                        </svg>
                      </span>
                      <span class="avatar avatar-2 bg-green-lt">
                        <!-- Download SVG icon from http://tabler.io/icons/icon/user -->
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
                          class="icon avatar-icon icon-2"
                        >
                          <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                          <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                        </svg>
                      </span>
                      <span class="avatar avatar-2 bg-teal-lt">
                        <!-- Download SVG icon from http://tabler.io/icons/icon/user -->
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
                          class="icon avatar-icon icon-2"
                        >
                          <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                          <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                        </svg>
                      </span>
                      <span class="avatar avatar-2 bg-cyan-lt">
                        <!-- Download SVG icon from http://tabler.io/icons/icon/user -->
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
                          class="icon avatar-icon icon-2"
                        >
                          <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                          <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                        </svg>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-4">
                <div class="card">
                  <div class="card-body">
                    <h2 class="card-title">Simple avatar</h2>
                    <div class="avatar-list">
                      <span class="avatar avatar-1" style="background-image: url(./static/avatars/000m.jpg)"> </span>
                      <span class="avatar avatar-1" style="background-image: url(./static/avatars/052f.jpg)"> </span>
                      <span class="avatar avatar-1" style="background-image: url(./static/avatars/002m.jpg)"> </span>
                      <span class="avatar avatar-1" style="background-image: url(./static/avatars/003m.jpg)"> </span>
                      <span class="avatar avatar-1" style="background-image: url(./static/avatars/000f.jpg)"> </span>
                      <span class="avatar avatar-1" style="background-image: url(./static/avatars/001f.jpg)"> </span>
                      <span class="avatar avatar-1" style="background-image: url(./static/avatars/004m.jpg)"> </span>
                      <span class="avatar avatar-1" style="background-image: url(./static/avatars/002f.jpg)"> </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-4">
                <div class="card">
                  <div class="card-body">
                    <h2 class="card-title">Avatar placeholder</h2>
                    <div class="avatar-list">
                      <span class="avatar avatar-1"> PK </span>
                      <span class="avatar avatar-1"> JL </span>
                      <span class="avatar avatar-1"> MH </span>
                      <span class="avatar avatar-1"> DS </span>
                      <span class="avatar avatar-1"> EL </span>
                      <span class="avatar avatar-1"> ML </span>
                      <span class="avatar avatar-1"> EP </span>
                      <span class="avatar avatar-1"> KS </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-4">
                <div class="card">
                  <div class="card-body">
                    <h2 class="card-title">Avatar shapes</h2>
                    <div class="avatar-list">
                      <span class="avatar avatar-0">
                        <!-- Download SVG icon from http://tabler.io/icons/icon/user -->
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
                          class="icon avatar-icon icon-2"
                        >
                          <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                          <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                        </svg>
                      </span>
                      <span class="avatar avatar-1 rounded-circle">
                        <!-- Download SVG icon from http://tabler.io/icons/icon/user -->
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
                          class="icon avatar-icon icon-2"
                        >
                          <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                          <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                        </svg>
                      </span>
                      <span class="avatar avatar-1 rounded-0">
                        <!-- Download SVG icon from http://tabler.io/icons/icon/user -->
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
                          class="icon avatar-icon icon-2"
                        >
                          <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                          <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                        </svg>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6">
                <div class="card">
                  <div class="card-body">
                    <h2 class="card-title">Avatar sizes</h2>
                    <div class="row">
                      <div class="col-6">
                        <div class="avatar-list">
                          <span class="avatar avatar-xxs">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/user -->
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
                              class="icon avatar-icon icon-2"
                            >
                              <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                              <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                            </svg>
                          </span>
                          <span class="avatar avatar-xs">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/user -->
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
                              class="icon avatar-icon icon-2"
                            >
                              <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                              <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                            </svg>
                          </span>
                          <span class="avatar avatar-sm">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/user -->
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
                              class="icon avatar-icon icon-2"
                            >
                              <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                              <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                            </svg>
                          </span>
                          <span class="avatar avatar-md">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/user -->
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
                              class="icon avatar-icon icon-2"
                            >
                              <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                              <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                            </svg>
                          </span>
                          <span class="avatar avatar-lg">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/user -->
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
                              class="icon avatar-icon icon-2"
                            >
                              <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                              <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                            </svg>
                          </span>
                          <span class="avatar avatar-xl">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/user -->
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
                              class="icon avatar-icon icon-2"
                            >
                              <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                              <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                            </svg>
                          </span>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="avatar-list">
                          <span class="avatar avatar-xxs"> PK </span>
                          <span class="avatar avatar-xs"> PK </span>
                          <span class="avatar avatar-sm"> PK </span>
                          <span class="avatar avatar-md"> PK </span>
                          <span class="avatar avatar-lg"> PK </span>
                          <span class="avatar avatar-xl"> PK </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6">
                <div class="card">
                  <div class="card-body">
                    <h2 class="card-title">Avatar lists</h2>
                    <div class="row g-3">
                      <div class="col-6">
                        <div class="avatar-list avatar-list-stacked avatar-list-xxs">
                          <span class="avatar avatar-1" style="background-image: url(./static/avatars/000m.jpg)"> </span>
                          <span class="avatar avatar-1" style="background-image: url(./static/avatars/052f.jpg)"> </span>
                          <span class="avatar avatar-1" style="background-image: url(./static/avatars/002m.jpg)"> </span>
                          <span class="avatar avatar-1" style="background-image: url(./static/avatars/003m.jpg)"> </span>
                          <span class="avatar avatar-1" style="background-image: url(./static/avatars/000f.jpg)"> </span>
                          <a class="avatar avatar-2">
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
                              class="icon avatar-icon icon-2"
                            >
                              <path d="M12 5l0 14" />
                              <path d="M5 12l14 0" />
                            </svg>
                          </a>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="avatar-list avatar-list-stacked avatar-list-xxs">
                          <span class="avatar avatar-2 rounded-circle" style="background-image: url(./static/avatars/000m.jpg)"> </span>
                          <span class="avatar avatar-2 rounded-circle" style="background-image: url(./static/avatars/052f.jpg)"> </span>
                          <span class="avatar avatar-2 rounded-circle" style="background-image: url(./static/avatars/002m.jpg)"> </span>
                          <span class="avatar avatar-2 rounded-circle" style="background-image: url(./static/avatars/003m.jpg)"> </span>
                          <span class="avatar avatar-2 rounded-circle" style="background-image: url(./static/avatars/000f.jpg)"> </span>
                          <a class="avatar avatar-3 rounded-circle">
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
                              class="icon avatar-icon icon-2"
                            >
                              <path d="M12 5l0 14" />
                              <path d="M5 12l14 0" />
                            </svg>
                          </a>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="avatar-list avatar-list-stacked avatar-list-xs">
                          <span class="avatar avatar-1" style="background-image: url(./static/avatars/000m.jpg)"> </span>
                          <span class="avatar avatar-1" style="background-image: url(./static/avatars/052f.jpg)"> </span>
                          <span class="avatar avatar-1" style="background-image: url(./static/avatars/002m.jpg)"> </span>
                          <span class="avatar avatar-1" style="background-image: url(./static/avatars/003m.jpg)"> </span>
                          <span class="avatar avatar-1" style="background-image: url(./static/avatars/000f.jpg)"> </span>
                          <a class="avatar avatar-2">
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
                              class="icon avatar-icon icon-2"
                            >
                              <path d="M12 5l0 14" />
                              <path d="M5 12l14 0" />
                            </svg>
                          </a>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="avatar-list avatar-list-stacked avatar-list-xs">
                          <span class="avatar avatar-2 rounded-circle" style="background-image: url(./static/avatars/000m.jpg)"> </span>
                          <span class="avatar avatar-2 rounded-circle" style="background-image: url(./static/avatars/052f.jpg)"> </span>
                          <span class="avatar avatar-2 rounded-circle" style="background-image: url(./static/avatars/002m.jpg)"> </span>
                          <span class="avatar avatar-2 rounded-circle" style="background-image: url(./static/avatars/003m.jpg)"> </span>
                          <span class="avatar avatar-2 rounded-circle" style="background-image: url(./static/avatars/000f.jpg)"> </span>
                          <a class="avatar avatar-3 rounded-circle">
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
                              class="icon avatar-icon icon-2"
                            >
                              <path d="M12 5l0 14" />
                              <path d="M5 12l14 0" />
                            </svg>
                          </a>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="avatar-list avatar-list-stacked avatar-list-sm">
                          <span class="avatar avatar-1" style="background-image: url(./static/avatars/000m.jpg)"> </span>
                          <span class="avatar avatar-1" style="background-image: url(./static/avatars/052f.jpg)"> </span>
                          <span class="avatar avatar-1" style="background-image: url(./static/avatars/002m.jpg)"> </span>
                          <span class="avatar avatar-1" style="background-image: url(./static/avatars/003m.jpg)"> </span>
                          <span class="avatar avatar-1" style="background-image: url(./static/avatars/000f.jpg)"> </span>
                          <a class="avatar avatar-2">
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
                              class="icon avatar-icon icon-2"
                            >
                              <path d="M12 5l0 14" />
                              <path d="M5 12l14 0" />
                            </svg>
                          </a>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="avatar-list avatar-list-stacked avatar-list-sm">
                          <span class="avatar avatar-2 rounded-circle" style="background-image: url(./static/avatars/000m.jpg)"> </span>
                          <span class="avatar avatar-2 rounded-circle" style="background-image: url(./static/avatars/052f.jpg)"> </span>
                          <span class="avatar avatar-2 rounded-circle" style="background-image: url(./static/avatars/002m.jpg)"> </span>
                          <span class="avatar avatar-2 rounded-circle" style="background-image: url(./static/avatars/003m.jpg)"> </span>
                          <span class="avatar avatar-2 rounded-circle" style="background-image: url(./static/avatars/000f.jpg)"> </span>
                          <a class="avatar avatar-3 rounded-circle">
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
                              class="icon avatar-icon icon-2"
                            >
                              <path d="M12 5l0 14" />
                              <path d="M5 12l14 0" />
                            </svg>
                          </a>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="avatar-list avatar-list-stacked avatar-list-md">
                          <span class="avatar avatar-1" style="background-image: url(./static/avatars/000m.jpg)"> </span>
                          <span class="avatar avatar-1" style="background-image: url(./static/avatars/052f.jpg)"> </span>
                          <span class="avatar avatar-1" style="background-image: url(./static/avatars/002m.jpg)"> </span>
                          <span class="avatar avatar-1" style="background-image: url(./static/avatars/003m.jpg)"> </span>
                          <span class="avatar avatar-1" style="background-image: url(./static/avatars/000f.jpg)"> </span>
                          <a class="avatar avatar-2">
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
                              class="icon avatar-icon icon-2"
                            >
                              <path d="M12 5l0 14" />
                              <path d="M5 12l14 0" />
                            </svg>
                          </a>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="avatar-list avatar-list-stacked avatar-list-md">
                          <span class="avatar avatar-2 rounded-circle" style="background-image: url(./static/avatars/000m.jpg)"> </span>
                          <span class="avatar avatar-2 rounded-circle" style="background-image: url(./static/avatars/052f.jpg)"> </span>
                          <span class="avatar avatar-2 rounded-circle" style="background-image: url(./static/avatars/002m.jpg)"> </span>
                          <span class="avatar avatar-2 rounded-circle" style="background-image: url(./static/avatars/003m.jpg)"> </span>
                          <span class="avatar avatar-2 rounded-circle" style="background-image: url(./static/avatars/000f.jpg)"> </span>
                          <a class="avatar avatar-3 rounded-circle">
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
                              class="icon avatar-icon icon-2"
                            >
                              <path d="M12 5l0 14" />
                              <path d="M5 12l14 0" />
                            </svg>
                          </a>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="avatar-list avatar-list-stacked avatar-list-lg">
                          <span class="avatar avatar-1" style="background-image: url(./static/avatars/000m.jpg)"> </span>
                          <span class="avatar avatar-1" style="background-image: url(./static/avatars/052f.jpg)"> </span>
                          <span class="avatar avatar-1" style="background-image: url(./static/avatars/002m.jpg)"> </span>
                          <span class="avatar avatar-1" style="background-image: url(./static/avatars/003m.jpg)"> </span>
                          <span class="avatar avatar-1" style="background-image: url(./static/avatars/000f.jpg)"> </span>
                          <a class="avatar avatar-2">
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
                              class="icon avatar-icon icon-2"
                            >
                              <path d="M12 5l0 14" />
                              <path d="M5 12l14 0" />
                            </svg>
                          </a>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="avatar-list avatar-list-stacked avatar-list-lg">
                          <span class="avatar avatar-2 rounded-circle" style="background-image: url(./static/avatars/000m.jpg)"> </span>
                          <span class="avatar avatar-2 rounded-circle" style="background-image: url(./static/avatars/052f.jpg)"> </span>
                          <span class="avatar avatar-2 rounded-circle" style="background-image: url(./static/avatars/002m.jpg)"> </span>
                          <span class="avatar avatar-2 rounded-circle" style="background-image: url(./static/avatars/003m.jpg)"> </span>
                          <span class="avatar avatar-2 rounded-circle" style="background-image: url(./static/avatars/000f.jpg)"> </span>
                          <a class="avatar avatar-3 rounded-circle">
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
                              class="icon avatar-icon icon-2"
                            >
                              <path d="M12 5l0 14" />
                              <path d="M5 12l14 0" />
                            </svg>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-4">
                <div class="card">
                  <div class="card-body">
                    <h2 class="card-title">Avatar placeholder</h2>
                    <a href="#" class="avatar avatar-upload avatar-xxs">
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
                        class="icon icon-1"
                      >
                        <path d="M12 5l0 14" />
                        <path d="M5 12l14 0" />
                      </svg>
                    </a>
                    <a href="#" class="avatar avatar-upload avatar-xs">
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
                        class="icon icon-1"
                      >
                        <path d="M12 5l0 14" />
                        <path d="M5 12l14 0" />
                      </svg>
                    </a>
                    <a href="#" class="avatar avatar-upload avatar-sm">
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
                        class="icon icon-1"
                      >
                        <path d="M12 5l0 14" />
                        <path d="M5 12l14 0" />
                      </svg>
                    </a>
                    <a href="#" class="avatar avatar-upload avatar-md">
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
                        class="icon icon-1"
                      >
                        <path d="M12 5l0 14" />
                        <path d="M5 12l14 0" />
                      </svg>
                    </a>
                    <a href="#" class="avatar avatar-upload avatar-lg">
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
                        class="icon icon-1"
                      >
                        <path d="M12 5l0 14" />
                        <path d="M5 12l14 0" />
                      </svg>
                    </a>
                    <a href="#" class="avatar avatar-upload avatar-xl">
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
                        class="icon icon-1"
                      >
                        <path d="M12 5l0 14" />
                        <path d="M5 12l14 0" />
                      </svg>
                    </a>
                    <a href="#" class="avatar avatar-upload avatar-2xl">
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
                        class="icon icon-1"
                      >
                        <path d="M12 5l0 14" />
                        <path d="M5 12l14 0" />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-4">
                <div class="card">
                  <div class="card-body">
                    <h2 class="card-title">Avatar statuses</h2>
                    <span class="avatar avatar-3 rounded-circle" style="background-image: url(./static/avatars/000m.jpg)"
                      ><span class="badge bg-red"></span>
                    </span>
                    <span class="avatar avatar-3 rounded-circle" style="background-image: url(./static/avatars/052f.jpg)"
                      ><span class="badge bg-green"></span>
                    </span>
                    <span class="avatar avatar-3 rounded-circle" style="background-image: url(./static/avatars/002m.jpg)"
                      ><span class="badge bg-blue"></span>
                    </span>
                    <span class="avatar avatar-3 rounded-circle" style="background-image: url(./static/avatars/003m.jpg)"
                      ><span class="badge bg-yellow"></span>
                    </span>
                    <span class="avatar avatar-3 rounded-circle" style="background-image: url(./static/avatars/000f.jpg)"
                      ><span class="badge bg-secondary"></span>
                    </span>
                  </div>
                </div>
              </div>
              <div class="col-4">
                <div class="card">
                  <div class="card-body">
                    <h2 class="card-title">Avatar brands</h2>
                    <span class="avatar avatar-2" style="background-image: url(./static/avatars/000m.jpg)"
                      ><span class="avatar-brand" style="background-image: url(./static/brands/netflix.svg)"></span>
                    </span>
                    <span class="avatar avatar-2" style="background-image: url(./static/avatars/052f.jpg)"
                      ><span class="avatar-brand" style="background-image: url(./static/brands/amazon.svg)"></span>
                    </span>
                    <span class="avatar avatar-2" style="background-image: url(./static/avatars/002m.jpg)"
                      ><span class="avatar-brand" style="background-image: url(./static/brands/messenger.svg)"></span>
                    </span>
                    <span class="avatar avatar-2" style="background-image: url(./static/avatars/003m.jpg)"
                      ><span class="avatar-brand" style="background-image: url(./static/brands/figma.svg)"></span>
                    </span>
                    <span class="avatar avatar-2" style="background-image: url(./static/avatars/000f.jpg)"
                      ><span class="avatar-brand" style="background-image: url(./static/brands/twitch.svg)"></span>
                    </span>
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
