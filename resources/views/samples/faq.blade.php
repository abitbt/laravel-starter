<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>
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
                <h1 class="page-title">Frequently Asked Questions</h1>
              </div>
              <!-- Page title actions -->
              <div class="col-auto ms-auto d-print-none">
                <div class="d-flex">
                  <!-- BEGIN BREADCRUMB -->
                  <nav aria-label="Breadcrumb">
                    <ol class="breadcrumb breadcrumb-arrows">
                      <li class="breadcrumb-item">
                        <a href="#">Tabler</a>
                      </li>
                      <li class="breadcrumb-item active" aria-current="page">Pages</li>
                    </ol>
                  </nav>
                  <!-- END BREADCRUMB -->
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
            <div class="card card-lg">
              <div class="card-body">
                <div class="space-y-4">
                  <div>
                    <h2 class="mb-3">1. Introduction</h2>
                    <div id="faq-1" class="accordion accordion-tabs" role="tablist" aria-multiselectable="true">
                      <div class="accordion-item">
                        <div class="accordion-header">
                          <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#faq-1-1" role="tab">
                            Welcome to our service!
                            <div class="accordion-button-toggle">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-down -->
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
                                <path d="M6 9l6 6l6 -6" />
                              </svg>
                            </div>
                          </button>
                        </div>
                        <div id="faq-1-1" class="accordion-collapse collapse show" role="tabpanel" data-bs-parent="#faq-1">
                          <div class="accordion-body pt-0">
                            <div>
                              <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum
                                in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?
                              </p>
                              <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum
                                in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <div class="accordion-header">
                          <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-1-2" role="tab">
                            Who are we?
                            <div class="accordion-button-toggle">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-down -->
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
                                <path d="M6 9l6 6l6 -6" />
                              </svg>
                            </div>
                          </button>
                        </div>
                        <div id="faq-1-2" class="accordion-collapse collapse" role="tabpanel" data-bs-parent="#faq-1">
                          <div class="accordion-body pt-0">
                            <div>
                              <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum
                                in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?
                              </p>
                              <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum
                                in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <div class="accordion-header">
                          <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-1-3" role="tab">
                            What are our values?
                            <div class="accordion-button-toggle">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-down -->
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
                                <path d="M6 9l6 6l6 -6" />
                              </svg>
                            </div>
                          </button>
                        </div>
                        <div id="faq-1-3" class="accordion-collapse collapse" role="tabpanel" data-bs-parent="#faq-1">
                          <div class="accordion-body pt-0">
                            <div>
                              <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum
                                in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?
                              </p>
                              <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum
                                in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <h2 class="mb-3">2. Functionality</h2>
                    <div id="faq-2" class="accordion accordion-tabs" role="tablist" aria-multiselectable="true">
                      <div class="accordion-item">
                        <div class="accordion-header">
                          <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#faq-2-1" role="tab">
                            What are the key features?
                            <div class="accordion-button-toggle">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-down -->
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
                                <path d="M6 9l6 6l6 -6" />
                              </svg>
                            </div>
                          </button>
                        </div>
                        <div id="faq-2-1" class="accordion-collapse collapse show" role="tabpanel" data-bs-parent="#faq-2">
                          <div class="accordion-body pt-0">
                            <div>
                              <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum
                                in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?
                              </p>
                              <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum
                                in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <div class="accordion-header">
                          <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-2-2" role="tab">
                            Does your App support mobile devices?
                            <div class="accordion-button-toggle">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-down -->
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
                                <path d="M6 9l6 6l6 -6" />
                              </svg>
                            </div>
                          </button>
                        </div>
                        <div id="faq-2-2" class="accordion-collapse collapse" role="tabpanel" data-bs-parent="#faq-2">
                          <div class="accordion-body pt-0">
                            <div>
                              <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum
                                in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?
                              </p>
                              <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum
                                in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <div class="accordion-header">
                          <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-2-3" role="tab">
                            Why should I choose your service?
                            <div class="accordion-button-toggle">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-down -->
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
                                <path d="M6 9l6 6l6 -6" />
                              </svg>
                            </div>
                          </button>
                        </div>
                        <div id="faq-2-3" class="accordion-collapse collapse" role="tabpanel" data-bs-parent="#faq-2">
                          <div class="accordion-body pt-0">
                            <div>
                              <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum
                                in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?
                              </p>
                              <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum
                                in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <div class="accordion-header">
                          <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-2-4" role="tab">
                            Is my data secure?
                            <div class="accordion-button-toggle">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-down -->
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
                                <path d="M6 9l6 6l6 -6" />
                              </svg>
                            </div>
                          </button>
                        </div>
                        <div id="faq-2-4" class="accordion-collapse collapse" role="tabpanel" data-bs-parent="#faq-2">
                          <div class="accordion-body pt-0">
                            <div>
                              <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum
                                in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?
                              </p>
                              <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum
                                in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <h2 class="mb-3">3. Payments</h2>
                    <div id="faq-3" class="accordion accordion-tabs" role="tablist" aria-multiselectable="true">
                      <div class="accordion-item">
                        <div class="accordion-header">
                          <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#faq-3-1" role="tab">
                            Is there any free plan?
                            <div class="accordion-button-toggle">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-down -->
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
                                <path d="M6 9l6 6l6 -6" />
                              </svg>
                            </div>
                          </button>
                        </div>
                        <div id="faq-3-1" class="accordion-collapse collapse show" role="tabpanel" data-bs-parent="#faq-3">
                          <div class="accordion-body pt-0">
                            <div>
                              <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum
                                in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?
                              </p>
                              <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum
                                in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <div class="accordion-header">
                          <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-3-2" role="tab">
                            What are the available payment options?
                            <div class="accordion-button-toggle">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-down -->
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
                                <path d="M6 9l6 6l6 -6" />
                              </svg>
                            </div>
                          </button>
                        </div>
                        <div id="faq-3-2" class="accordion-collapse collapse" role="tabpanel" data-bs-parent="#faq-3">
                          <div class="accordion-body pt-0">
                            <div>
                              <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum
                                in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?
                              </p>
                              <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum
                                in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <div class="accordion-header">
                          <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-3-3" role="tab">
                            Can I get a refund?
                            <div class="accordion-button-toggle">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-down -->
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
                                <path d="M6 9l6 6l6 -6" />
                              </svg>
                            </div>
                          </button>
                        </div>
                        <div id="faq-3-3" class="accordion-collapse collapse" role="tabpanel" data-bs-parent="#faq-3">
                          <div class="accordion-body pt-0">
                            <div>
                              <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum
                                in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?
                              </p>
                              <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum
                                in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?
                              </p>
                            </div>
                          </div>
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
