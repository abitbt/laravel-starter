<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Badges - Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>
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
                <h1 class="page-title">Badges</h1>
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
                <div class="row row-cards">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                        <h1>Example heading <span class="badge">New</span></h1>
                        <h2>Example heading <span class="badge">New</span></h2>
                        <h3>Example heading <span class="badge">New</span></h3>
                        <h4>Example heading <span class="badge">New</span></h4>
                        <h5>Example heading <span class="badge">New</span></h5>
                        <h6>Example heading <span class="badge">New</span></h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                        <h3 class="card-title">Badge sizes</h3>
                        <div class="space-y">
                          <div class="badges-list">
                            <span class="badge badge-sm">Default</span>
                            <span class="badge badge-sm"
                              ><!-- Download SVG icon from http://tabler.io/icons/icon/check -->
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
                                <path d="M5 12l5 5l10 -10" />
                              </svg>
                              Left icon</span
                            >
                            <span class="badge badge-sm"
                              >Right icon<!-- Download SVG icon from http://tabler.io/icons/icon/arrow-right -->
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
                                <path d="M5 12l14 0" />
                                <path d="M13 18l6 -6" />
                                <path d="M13 6l6 6" /></svg
                            ></span>
                            <span class="badge badge-icononly badge-sm"
                              ><!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                                aria-hidden="true"
                                focusable="false"
                                class="icon icon-2"
                              >
                                <path
                                  d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                                /></svg
                            ></span>
                          </div>
                          <div class="badges-list">
                            <span class="badge">Default</span>
                            <span class="badge"
                              ><!-- Download SVG icon from http://tabler.io/icons/icon/check -->
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
                                <path d="M5 12l5 5l10 -10" />
                              </svg>
                              Left icon</span
                            >
                            <span class="badge"
                              >Right icon<!-- Download SVG icon from http://tabler.io/icons/icon/arrow-right -->
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
                                <path d="M5 12l14 0" />
                                <path d="M13 18l6 -6" />
                                <path d="M13 6l6 6" /></svg
                            ></span>
                            <span class="badge badge-icononly"
                              ><!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                                aria-hidden="true"
                                focusable="false"
                                class="icon icon-2"
                              >
                                <path
                                  d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                                /></svg
                            ></span>
                          </div>
                          <div class="badges-list">
                            <span class="badge badge-lg">Default</span>
                            <span class="badge badge-lg"
                              ><!-- Download SVG icon from http://tabler.io/icons/icon/check -->
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
                                <path d="M5 12l5 5l10 -10" />
                              </svg>
                              Left icon</span
                            >
                            <span class="badge badge-lg"
                              >Right icon<!-- Download SVG icon from http://tabler.io/icons/icon/arrow-right -->
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
                                <path d="M5 12l14 0" />
                                <path d="M13 18l6 -6" />
                                <path d="M13 6l6 6" /></svg
                            ></span>
                            <span class="badge badge-icononly badge-lg"
                              ><!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                                aria-hidden="true"
                                focusable="false"
                                class="icon icon-2"
                              >
                                <path
                                  d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                                /></svg
                            ></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                        <h3 class="card-title">Positioned badges</h3>
                        <div class="btn-list">
                          <button type="button" class="btn">Notifications <span class="badge text-bg-secondary ms-2">4</span></button>
                          <button type="button" class="btn">
                            Inbox
                            <span class="badge bg-red badge-notification text-red-fg">
                              9+
                              <span class="visually-hidden">unread messages</span>
                            </span>
                          </button>
                          <button type="button" class="btn">
                            Profile
                            <span class="badge badge-dot bg-red badge-notification"></span>
                          </button>
                          <button type="button" class="btn">
                            Settings
                            <span class="badge badge-dot bg-red badge-notification badge-blink"></span>
                          </button>
                          <button type="button" class="btn btn-icon">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/bell -->
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
                              <path d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                              <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
                            </svg>
                            <span class="badge badge-dot bg-red badge-notification badge-blink"></span>
                          </button>
                          <button type="button" class="btn btn-icon btn-action">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/bell -->
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
                              <path d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                              <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
                            </svg>
                            <span class="badge badge-dot bg-red badge-notification"></span>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-8">
                <div class="row row-cards">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                        <h3 class="card-title">Basic badges</h3>
                        <div class="badges-list">
                          <span class="badge bg-default text-default-fg">Default</span>
                          <span class="badge bg-blue text-blue-fg">Blue</span>
                          <span class="badge bg-azure text-azure-fg">Azure</span>
                          <span class="badge bg-indigo text-indigo-fg">Indigo</span>
                          <span class="badge bg-purple text-purple-fg">Purple</span>
                          <span class="badge bg-pink text-pink-fg">Pink</span>
                          <span class="badge bg-red text-red-fg">Red</span>
                          <span class="badge bg-orange text-orange-fg">Orange</span>
                          <span class="badge bg-yellow text-yellow-fg">Yellow</span>
                          <span class="badge bg-lime text-lime-fg">Lime</span>
                          <span class="badge bg-green text-green-fg">Green</span>
                          <span class="badge bg-teal text-teal-fg">Teal</span>
                          <span class="badge bg-cyan text-cyan-fg">Cyan</span>
                          <span class="badge bg-dark text-dark-fg">Dark</span>
                          <span class="badge bg-light text-light-fg">Light</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                        <h3 class="card-title">Light badges</h3>
                        <div class="badges-list">
                          <span class="badge bg-default-lt">Default</span>
                          <span class="badge bg-blue-lt">Blue</span>
                          <span class="badge bg-azure-lt">Azure</span>
                          <span class="badge bg-indigo-lt">Indigo</span>
                          <span class="badge bg-purple-lt">Purple</span>
                          <span class="badge bg-pink-lt">Pink</span>
                          <span class="badge bg-red-lt">Red</span>
                          <span class="badge bg-orange-lt">Orange</span>
                          <span class="badge bg-yellow-lt">Yellow</span>
                          <span class="badge bg-lime-lt">Lime</span>
                          <span class="badge bg-green-lt">Green</span>
                          <span class="badge bg-teal-lt">Teal</span>
                          <span class="badge bg-cyan-lt">Cyan</span>
                          <span class="badge bg-dark-lt">Dark</span>
                          <span class="badge bg-light-lt">Light</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                        <h3 class="card-title">Outline badges</h3>
                        <div class="badges-list">
                          <span class="badge badge-outline text-default">Default</span>
                          <span class="badge badge-outline text-blue">Blue</span>
                          <span class="badge badge-outline text-azure">Azure</span>
                          <span class="badge badge-outline text-indigo">Indigo</span>
                          <span class="badge badge-outline text-purple">Purple</span>
                          <span class="badge badge-outline text-pink">Pink</span>
                          <span class="badge badge-outline text-red">Red</span>
                          <span class="badge badge-outline text-orange">Orange</span>
                          <span class="badge badge-outline text-yellow">Yellow</span>
                          <span class="badge badge-outline text-lime">Lime</span>
                          <span class="badge badge-outline text-green">Green</span>
                          <span class="badge badge-outline text-teal">Teal</span>
                          <span class="badge badge-outline text-cyan">Cyan</span>
                          <span class="badge badge-outline text-dark">Dark</span>
                          <span class="badge badge-outline text-light">Light</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                        <h3 class="card-title">Badges with icons</h3>
                        <div class="badges-list">
                          <span class="badge bg-default text-default-fg">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="currentColor"
                              aria-hidden="true"
                              focusable="false"
                              class="icon icon-2"
                            >
                              <path
                                d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                              />
                            </svg>
                            Default
                          </span>
                          <span class="badge bg-blue text-blue-fg">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="currentColor"
                              aria-hidden="true"
                              focusable="false"
                              class="icon icon-2"
                            >
                              <path
                                d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                              />
                            </svg>
                            Blue
                          </span>
                          <span class="badge bg-azure text-azure-fg">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="currentColor"
                              aria-hidden="true"
                              focusable="false"
                              class="icon icon-2"
                            >
                              <path
                                d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                              />
                            </svg>
                            Azure
                          </span>
                          <span class="badge bg-indigo text-indigo-fg">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="currentColor"
                              aria-hidden="true"
                              focusable="false"
                              class="icon icon-2"
                            >
                              <path
                                d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                              />
                            </svg>
                            Indigo
                          </span>
                          <span class="badge bg-purple text-purple-fg">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="currentColor"
                              aria-hidden="true"
                              focusable="false"
                              class="icon icon-2"
                            >
                              <path
                                d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                              />
                            </svg>
                            Purple
                          </span>
                          <span class="badge bg-pink text-pink-fg">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="currentColor"
                              aria-hidden="true"
                              focusable="false"
                              class="icon icon-2"
                            >
                              <path
                                d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                              />
                            </svg>
                            Pink
                          </span>
                          <span class="badge bg-red text-red-fg">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="currentColor"
                              aria-hidden="true"
                              focusable="false"
                              class="icon icon-2"
                            >
                              <path
                                d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                              />
                            </svg>
                            Red
                          </span>
                          <span class="badge bg-orange text-orange-fg">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="currentColor"
                              aria-hidden="true"
                              focusable="false"
                              class="icon icon-2"
                            >
                              <path
                                d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                              />
                            </svg>
                            Orange
                          </span>
                          <span class="badge bg-yellow text-yellow-fg">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="currentColor"
                              aria-hidden="true"
                              focusable="false"
                              class="icon icon-2"
                            >
                              <path
                                d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                              />
                            </svg>
                            Yellow
                          </span>
                          <span class="badge bg-lime text-lime-fg">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="currentColor"
                              aria-hidden="true"
                              focusable="false"
                              class="icon icon-2"
                            >
                              <path
                                d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                              />
                            </svg>
                            Lime
                          </span>
                          <span class="badge bg-green text-green-fg">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="currentColor"
                              aria-hidden="true"
                              focusable="false"
                              class="icon icon-2"
                            >
                              <path
                                d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                              />
                            </svg>
                            Green
                          </span>
                          <span class="badge bg-teal text-teal-fg">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="currentColor"
                              aria-hidden="true"
                              focusable="false"
                              class="icon icon-2"
                            >
                              <path
                                d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                              />
                            </svg>
                            Teal
                          </span>
                          <span class="badge bg-cyan text-cyan-fg">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="currentColor"
                              aria-hidden="true"
                              focusable="false"
                              class="icon icon-2"
                            >
                              <path
                                d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                              />
                            </svg>
                            Cyan
                          </span>
                          <span class="badge bg-dark text-dark-fg">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="currentColor"
                              aria-hidden="true"
                              focusable="false"
                              class="icon icon-2"
                            >
                              <path
                                d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                              />
                            </svg>
                            Dark
                          </span>
                          <span class="badge bg-light text-light-fg">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="currentColor"
                              aria-hidden="true"
                              focusable="false"
                              class="icon icon-2"
                            >
                              <path
                                d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                              />
                            </svg>
                            Light
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-3">
                <div class="dropdown-menu dropdown-menu-demo dropdown-menu-arrow">
                  <a class="dropdown-item" href="#">
                    Action
                    <span class="badge bg-primary text-primary-fg ms-auto">12</span>
                  </a>
                  <a class="dropdown-item" href="#">
                    Another action
                    <span class="badge bg-green ms-auto"></span>
                  </a>
                </div>
              </div>
              <div class="col-sm-6 col-lg-9">
                <div class="row row-cards">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                        <div class="btn-list">
                          <button class="btn">Default badge <span class="badge bg-default text-default-fg ms-2">1</span></button>
                          <button class="btn">Blue badge <span class="badge bg-blue text-blue-fg ms-2">2</span></button>
                          <button class="btn">Azure badge <span class="badge bg-azure text-azure-fg ms-2">3</span></button>
                          <button class="btn">Indigo badge <span class="badge bg-indigo text-indigo-fg ms-2">4</span></button>
                          <button class="btn">Purple badge <span class="badge bg-purple text-purple-fg ms-2">5</span></button>
                          <button class="btn">Pink badge <span class="badge bg-pink text-pink-fg ms-2">6</span></button>
                          <button class="btn">Red badge <span class="badge bg-red text-red-fg ms-2">7</span></button>
                          <button class="btn">Orange badge <span class="badge bg-orange text-orange-fg ms-2">8</span></button>
                          <button class="btn">Yellow badge <span class="badge bg-yellow text-yellow-fg ms-2">9</span></button>
                          <button class="btn">Lime badge <span class="badge bg-lime text-lime-fg ms-2">10</span></button>
                          <button class="btn">Green badge <span class="badge bg-green text-green-fg ms-2">11</span></button>
                          <button class="btn">Teal badge <span class="badge bg-teal text-teal-fg ms-2">12</span></button>
                          <button class="btn">Cyan badge <span class="badge bg-cyan text-cyan-fg ms-2">13</span></button>
                          <button class="btn">Dark badge <span class="badge bg-dark text-dark-fg ms-2">14</span></button>
                          <button class="btn">Light badge <span class="badge bg-light text-light-fg ms-2">15</span></button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                        <div class="btn-list">
                          <button class="btn position-relative">
                            Default badge <span class="badge bg-default text-default-fg badge-notification badge-pill">1</span>
                          </button>
                          <button class="btn position-relative">
                            Blue badge <span class="badge bg-blue text-blue-fg badge-notification badge-pill">2</span>
                          </button>
                          <button class="btn position-relative">
                            Azure badge <span class="badge bg-azure text-azure-fg badge-notification badge-pill">3</span>
                          </button>
                          <button class="btn position-relative">
                            Indigo badge <span class="badge bg-indigo text-indigo-fg badge-notification badge-pill">4</span>
                          </button>
                          <button class="btn position-relative">
                            Purple badge <span class="badge bg-purple text-purple-fg badge-notification badge-pill">5</span>
                          </button>
                          <button class="btn position-relative">
                            Pink badge <span class="badge bg-pink text-pink-fg badge-notification badge-pill">6</span>
                          </button>
                          <button class="btn position-relative">Red badge <span class="badge bg-red text-red-fg badge-notification badge-pill">7</span></button>
                          <button class="btn position-relative">
                            Orange badge <span class="badge bg-orange text-orange-fg badge-notification badge-pill">8</span>
                          </button>
                          <button class="btn position-relative">
                            Yellow badge <span class="badge bg-yellow text-yellow-fg badge-notification badge-pill">9</span>
                          </button>
                          <button class="btn position-relative">
                            Lime badge <span class="badge bg-lime text-lime-fg badge-notification badge-pill">10</span>
                          </button>
                          <button class="btn position-relative">
                            Green badge <span class="badge bg-green text-green-fg badge-notification badge-pill">11</span>
                          </button>
                          <button class="btn position-relative">
                            Teal badge <span class="badge bg-teal text-teal-fg badge-notification badge-pill">12</span>
                          </button>
                          <button class="btn position-relative">
                            Cyan badge <span class="badge bg-cyan text-cyan-fg badge-notification badge-pill">13</span>
                          </button>
                          <button class="btn position-relative">
                            Dark badge <span class="badge bg-dark text-dark-fg badge-notification badge-pill">14</span>
                          </button>
                          <button class="btn position-relative">
                            Light badge <span class="badge bg-light text-light-fg badge-notification badge-pill">15</span>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                        <div class="btn-list">
                          <button class="btn position-relative">Default badge <span class="badge bg-default badge-notification badge-blink"></span></button>
                          <button class="btn position-relative">Blue badge <span class="badge bg-blue badge-notification badge-blink"></span></button>
                          <button class="btn position-relative">Azure badge <span class="badge bg-azure badge-notification badge-blink"></span></button>
                          <button class="btn position-relative">Indigo badge <span class="badge bg-indigo badge-notification badge-blink"></span></button>
                          <button class="btn position-relative">Purple badge <span class="badge bg-purple badge-notification badge-blink"></span></button>
                          <button class="btn position-relative">Pink badge <span class="badge bg-pink badge-notification badge-blink"></span></button>
                          <button class="btn position-relative">Red badge <span class="badge bg-red badge-notification badge-blink"></span></button>
                          <button class="btn position-relative">Orange badge <span class="badge bg-orange badge-notification badge-blink"></span></button>
                          <button class="btn position-relative">Yellow badge <span class="badge bg-yellow badge-notification badge-blink"></span></button>
                          <button class="btn position-relative">Lime badge <span class="badge bg-lime badge-notification badge-blink"></span></button>
                          <button class="btn position-relative">Green badge <span class="badge bg-green badge-notification badge-blink"></span></button>
                          <button class="btn position-relative">Teal badge <span class="badge bg-teal badge-notification badge-blink"></span></button>
                          <button class="btn position-relative">Cyan badge <span class="badge bg-cyan badge-notification badge-blink"></span></button>
                          <button class="btn position-relative">Dark badge <span class="badge bg-dark badge-notification badge-blink"></span></button>
                          <button class="btn position-relative">Light badge <span class="badge bg-light badge-notification badge-blink"></span></button>
                        </div>
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
