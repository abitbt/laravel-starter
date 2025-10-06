<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Accordion - Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>
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
              <h1 class="page-title">Accordion</h1>
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
                  <div class="accordion" id="accordion-default">
                    <div class="accordion-item">
                      <div class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapse-1-default" aria-expanded="true">
                          What makes Tabler different from other UI frameworks?
                          <div class="accordion-button-toggle">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-down -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                              fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon icon-1">
                              <path d="M6 9l6 6l6 -6" />
                            </svg>
                          </div>
                        </button>
                      </div>
                      <div id="collapse-1-default" class="accordion-collapse show collapse"
                        data-bs-parent="#accordion-default">
                        <div class="accordion-body">
                          Tabler offers a modern, responsive design with a clean aesthetic, built on Bootstrap for ease
                          of use and flexibility.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <div class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapse-2-default" aria-expanded="false">
                          How can I customize Tabler components to fit my design needs?
                          <div class="accordion-button-toggle">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-down -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                              fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon icon-1">
                              <path d="M6 9l6 6l6 -6" />
                            </svg>
                          </div>
                        </button>
                      </div>
                      <div id="collapse-2-default" class="accordion-collapse collapse"
                        data-bs-parent="#accordion-default">
                        <div class="accordion-body">
                          You can customize Tabler components using CSS variables, SCSS, and utility classes to match
                          your design preferences.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <div class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapse-3-default" aria-expanded="false">
                          Is Tabler optimized for performance and fast loading times?
                          <div class="accordion-button-toggle">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-down -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                              fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon icon-1">
                              <path d="M6 9l6 6l6 -6" />
                            </svg>
                          </div>
                        </button>
                      </div>
                      <div id="collapse-3-default" class="accordion-collapse collapse"
                        data-bs-parent="#accordion-default">
                        <div class="accordion-body">
                          Yes, Tabler is lightweight, optimized for modern browsers, and follows best practices for fast
                          loading and efficiency.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <div class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapse-4-default" aria-expanded="false">
                          How accessible are Tabler components?
                          <div class="accordion-button-toggle">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-down -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"
                              class="icon icon-1">
                              <path d="M6 9l6 6l6 -6" />
                            </svg>
                          </div>
                        </button>
                      </div>
                      <div id="collapse-4-default" class="accordion-collapse collapse"
                        data-bs-parent="#accordion-default">
                        <div class="accordion-body">
                          Tabler components follow WAI-ARIA standards and support keyboard navigation, screen readers,
                          and accessibility best practices.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <div class="accordion accordion-flush" id="accordion-flush">
                  <div class="accordion-item">
                    <div class="accordion-header">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse-1-flush" aria-expanded="true">
                        What makes Tabler different from other UI frameworks?
                        <div class="accordion-button-toggle">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-down -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon icon-1">
                            <path d="M6 9l6 6l6 -6" />
                          </svg>
                        </div>
                      </button>
                    </div>
                    <div id="collapse-1-flush" class="accordion-collapse show collapse"
                      data-bs-parent="#accordion-flush">
                      <div class="accordion-body">
                        Tabler offers a modern, responsive design with a clean aesthetic, built on Bootstrap for ease of
                        use and flexibility.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <div class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse-2-flush" aria-expanded="false">
                        How can I customize Tabler components to fit my design needs?
                        <div class="accordion-button-toggle">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-down -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon icon-1">
                            <path d="M6 9l6 6l6 -6" />
                          </svg>
                        </div>
                      </button>
                    </div>
                    <div id="collapse-2-flush" class="accordion-collapse collapse" data-bs-parent="#accordion-flush">
                      <div class="accordion-body">
                        You can customize Tabler components using CSS variables, SCSS, and utility classes to match your
                        design preferences.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <div class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse-3-flush" aria-expanded="false">
                        Is Tabler optimized for performance and fast loading times?
                        <div class="accordion-button-toggle">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-down -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon icon-1">
                            <path d="M6 9l6 6l6 -6" />
                          </svg>
                        </div>
                      </button>
                    </div>
                    <div id="collapse-3-flush" class="accordion-collapse collapse" data-bs-parent="#accordion-flush">
                      <div class="accordion-body">
                        Yes, Tabler is lightweight, optimized for modern browsers, and follows best practices for fast
                        loading and efficiency.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <div class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse-4-flush" aria-expanded="false">
                        How accessible are Tabler components?
                        <div class="accordion-button-toggle">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-down -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon icon-1">
                            <path d="M6 9l6 6l6 -6" />
                          </svg>
                        </div>
                      </button>
                    </div>
                    <div id="collapse-4-flush" class="accordion-collapse collapse" data-bs-parent="#accordion-flush">
                      <div class="accordion-body">
                        Tabler components follow WAI-ARIA standards and support keyboard navigation, screen readers, and
                        accessibility best practices.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <div class="card-body">
                  <div class="accordion accordion-tabs" id="accordion-tabs">
                    <div class="accordion-item">
                      <div class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapse-1-tabs" aria-expanded="true">
                          What makes Tabler different from other UI frameworks?
                          <div class="accordion-button-toggle">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-down -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"
                              class="icon icon-1">
                              <path d="M6 9l6 6l6 -6" />
                            </svg>
                          </div>
                        </button>
                      </div>
                      <div id="collapse-1-tabs" class="accordion-collapse show collapse"
                        data-bs-parent="#accordion-tabs">
                        <div class="accordion-body">
                          Tabler offers a modern, responsive design with a clean aesthetic, built on Bootstrap for ease
                          of use and flexibility.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <div class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapse-2-tabs" aria-expanded="false">
                          How can I customize Tabler components to fit my design needs?
                          <div class="accordion-button-toggle">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-down -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"
                              class="icon icon-1">
                              <path d="M6 9l6 6l6 -6" />
                            </svg>
                          </div>
                        </button>
                      </div>
                      <div id="collapse-2-tabs" class="accordion-collapse collapse" data-bs-parent="#accordion-tabs">
                        <div class="accordion-body">
                          You can customize Tabler components using CSS variables, SCSS, and utility classes to match
                          your design preferences.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <div class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapse-3-tabs" aria-expanded="false">
                          Is Tabler optimized for performance and fast loading times?
                          <div class="accordion-button-toggle">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-down -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"
                              class="icon icon-1">
                              <path d="M6 9l6 6l6 -6" />
                            </svg>
                          </div>
                        </button>
                      </div>
                      <div id="collapse-3-tabs" class="accordion-collapse collapse" data-bs-parent="#accordion-tabs">
                        <div class="accordion-body">
                          Yes, Tabler is lightweight, optimized for modern browsers, and follows best practices for fast
                          loading and efficiency.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <div class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapse-4-tabs" aria-expanded="false">
                          How accessible are Tabler components?
                          <div class="accordion-button-toggle">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-down -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"
                              class="icon icon-1">
                              <path d="M6 9l6 6l6 -6" />
                            </svg>
                          </div>
                        </button>
                      </div>
                      <div id="collapse-4-tabs" class="accordion-collapse collapse" data-bs-parent="#accordion-tabs">
                        <div class="accordion-body">
                          Tabler components follow WAI-ARIA standards and support keyboard navigation, screen readers,
                          and accessibility best practices.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <div class="card-body">
                  <div class="accordion accordion-inverted" id="accordion-inverted">
                    <div class="accordion-item">
                      <div class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapse-1-inverted" aria-expanded="true">
                          What makes Tabler different from other UI frameworks?
                          <div class="accordion-button-toggle">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-down -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"
                              class="icon icon-1">
                              <path d="M6 9l6 6l6 -6" />
                            </svg>
                          </div>
                        </button>
                      </div>
                      <div id="collapse-1-inverted" class="accordion-collapse show collapse"
                        data-bs-parent="#accordion-inverted">
                        <div class="accordion-body">
                          Tabler offers a modern, responsive design with a clean aesthetic, built on Bootstrap for ease
                          of use and flexibility.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <div class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapse-2-inverted" aria-expanded="false">
                          How can I customize Tabler components to fit my design needs?
                          <div class="accordion-button-toggle">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-down -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"
                              class="icon icon-1">
                              <path d="M6 9l6 6l6 -6" />
                            </svg>
                          </div>
                        </button>
                      </div>
                      <div id="collapse-2-inverted" class="accordion-collapse collapse"
                        data-bs-parent="#accordion-inverted">
                        <div class="accordion-body">
                          You can customize Tabler components using CSS variables, SCSS, and utility classes to match
                          your design preferences.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <div class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapse-3-inverted" aria-expanded="false">
                          Is Tabler optimized for performance and fast loading times?
                          <div class="accordion-button-toggle">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-down -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"
                              class="icon icon-1">
                              <path d="M6 9l6 6l6 -6" />
                            </svg>
                          </div>
                        </button>
                      </div>
                      <div id="collapse-3-inverted" class="accordion-collapse collapse"
                        data-bs-parent="#accordion-inverted">
                        <div class="accordion-body">
                          Yes, Tabler is lightweight, optimized for modern browsers, and follows best practices for fast
                          loading and efficiency.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <div class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapse-4-inverted" aria-expanded="false">
                          How accessible are Tabler components?
                          <div class="accordion-button-toggle">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-down -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"
                              class="icon icon-1">
                              <path d="M6 9l6 6l6 -6" />
                            </svg>
                          </div>
                        </button>
                      </div>
                      <div id="collapse-4-inverted" class="accordion-collapse collapse"
                        data-bs-parent="#accordion-inverted">
                        <div class="accordion-body">
                          Tabler components follow WAI-ARIA standards and support keyboard navigation, screen readers,
                          and accessibility best practices.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <div class="card-body">
                  <div class="accordion accordion-inverted accordion-plus" id="accordion-inverted-plus">
                    <div class="accordion-item">
                      <div class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapse-1-inverted-plus" aria-expanded="true">
                          What makes Tabler different from other UI frameworks?
                          <div class="accordion-button-toggle accordion-button-toggle-plus">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"
                              class="icon icon-1">
                              <path d="M12 5l0 14" />
                              <path d="M5 12l14 0" />
                            </svg>
                          </div>
                        </button>
                      </div>
                      <div id="collapse-1-inverted-plus" class="accordion-collapse show collapse"
                        data-bs-parent="#accordion-inverted-plus">
                        <div class="accordion-body">
                          Tabler offers a modern, responsive design with a clean aesthetic, built on Bootstrap for ease
                          of use and flexibility.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <div class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapse-2-inverted-plus" aria-expanded="false">
                          How can I customize Tabler components to fit my design needs?
                          <div class="accordion-button-toggle accordion-button-toggle-plus">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"
                              class="icon icon-1">
                              <path d="M12 5l0 14" />
                              <path d="M5 12l14 0" />
                            </svg>
                          </div>
                        </button>
                      </div>
                      <div id="collapse-2-inverted-plus" class="accordion-collapse collapse"
                        data-bs-parent="#accordion-inverted-plus">
                        <div class="accordion-body">
                          You can customize Tabler components using CSS variables, SCSS, and utility classes to match
                          your design preferences.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <div class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapse-3-inverted-plus" aria-expanded="false">
                          Is Tabler optimized for performance and fast loading times?
                          <div class="accordion-button-toggle accordion-button-toggle-plus">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"
                              class="icon icon-1">
                              <path d="M12 5l0 14" />
                              <path d="M5 12l14 0" />
                            </svg>
                          </div>
                        </button>
                      </div>
                      <div id="collapse-3-inverted-plus" class="accordion-collapse collapse"
                        data-bs-parent="#accordion-inverted-plus">
                        <div class="accordion-body">
                          Yes, Tabler is lightweight, optimized for modern browsers, and follows best practices for fast
                          loading and efficiency.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <div class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapse-4-inverted-plus" aria-expanded="false">
                          How accessible are Tabler components?
                          <div class="accordion-button-toggle accordion-button-toggle-plus">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"
                              class="icon icon-1">
                              <path d="M12 5l0 14" />
                              <path d="M5 12l14 0" />
                            </svg>
                          </div>
                        </button>
                      </div>
                      <div id="collapse-4-inverted-plus" class="accordion-collapse collapse"
                        data-bs-parent="#accordion-inverted-plus">
                        <div class="accordion-body">
                          Tabler components follow WAI-ARIA standards and support keyboard navigation, screen readers,
                          and accessibility best practices.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <div class="card-body">
                  <div class="accordion" id="accordion-icons">
                    <div class="accordion-item">
                      <div class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapse-1-icons" aria-expanded="true">
                          <div class="accordion-button-icon">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/link -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"
                              class="icon icon-1">
                              <path d="M9 15l6 -6" />
                              <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464" />
                              <path
                                d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463" />
                            </svg>
                          </div>
                          What makes Tabler different from other UI frameworks?
                          <div class="accordion-button-toggle">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-down -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"
                              class="icon icon-1">
                              <path d="M6 9l6 6l6 -6" />
                            </svg>
                          </div>
                        </button>
                      </div>
                      <div id="collapse-1-icons" class="accordion-collapse show collapse"
                        data-bs-parent="#accordion-icons">
                        <div class="accordion-body">
                          Tabler offers a modern, responsive design with a clean aesthetic, built on Bootstrap for ease
                          of use and flexibility.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <div class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapse-2-icons" aria-expanded="false">
                          <div class="accordion-button-icon">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/link -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"
                              class="icon icon-1">
                              <path d="M9 15l6 -6" />
                              <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464" />
                              <path
                                d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463" />
                            </svg>
                          </div>
                          How can I customize Tabler components to fit my design needs?
                          <div class="accordion-button-toggle">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-down -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"
                              class="icon icon-1">
                              <path d="M6 9l6 6l6 -6" />
                            </svg>
                          </div>
                        </button>
                      </div>
                      <div id="collapse-2-icons" class="accordion-collapse collapse"
                        data-bs-parent="#accordion-icons">
                        <div class="accordion-body">
                          You can customize Tabler components using CSS variables, SCSS, and utility classes to match
                          your design preferences.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <div class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapse-3-icons" aria-expanded="false">
                          <div class="accordion-button-icon">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/link -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"
                              class="icon icon-1">
                              <path d="M9 15l6 -6" />
                              <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464" />
                              <path
                                d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463" />
                            </svg>
                          </div>
                          Is Tabler optimized for performance and fast loading times?
                          <div class="accordion-button-toggle">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-down -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"
                              class="icon icon-1">
                              <path d="M6 9l6 6l6 -6" />
                            </svg>
                          </div>
                        </button>
                      </div>
                      <div id="collapse-3-icons" class="accordion-collapse collapse"
                        data-bs-parent="#accordion-icons">
                        <div class="accordion-body">
                          Yes, Tabler is lightweight, optimized for modern browsers, and follows best practices for fast
                          loading and efficiency.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <div class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapse-4-icons" aria-expanded="false">
                          <div class="accordion-button-icon">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/link -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"
                              class="icon icon-1">
                              <path d="M9 15l6 -6" />
                              <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464" />
                              <path
                                d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463" />
                            </svg>
                          </div>
                          How accessible are Tabler components?
                          <div class="accordion-button-toggle">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-down -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"
                              class="icon icon-1">
                              <path d="M6 9l6 6l6 -6" />
                            </svg>
                          </div>
                        </button>
                      </div>
                      <div id="collapse-4-icons" class="accordion-collapse collapse"
                        data-bs-parent="#accordion-icons">
                        <div class="accordion-body">
                          Tabler components follow WAI-ARIA standards and support keyboard navigation, screen readers,
                          and accessibility best practices.
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
