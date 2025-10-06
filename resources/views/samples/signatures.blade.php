<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Signatures - Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>
    <!-- BEGIN PAGE LEVEL STYLES -->
    <!-- END PAGE LEVEL STYLES -->
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
                <h1 class="page-title">Signatures</h1>
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
              <div class="col-lg-6">
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title">Confirm transfer</h3>
                    <p class="card-subtitle">Please confirm the transfer of funds by signing below.</p>
                    <form action="">
                      <div class="mb-3">
                        <label class="form-label required" for="signature-first-name">First name</label>
                        <input type="text" class="form-control" id="signature-first-name" name="first_name" />
                      </div>
                      <div class="mb-3">
                        <label class="form-label required" for="signature-last-name">Last name</label>
                        <input type="text" class="form-control" id="signature-last-name" name="last_name" />
                      </div>
                      <div class="mb-3">
                        <label class="form-label required">Signature</label>
                        <div class="signature position-relative">
                          <div class="position-absolute top-0 end-0 p-2">
                            <div class="btn btn-icon" id="signature-default-clear" title="Clear signature" data-bs-toggle="tooltip">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/trash -->
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
                                <path d="M4 7l16 0" />
                                <path d="M10 11l0 6" />
                                <path d="M14 11l0 6" />
                                <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                              </svg>
                            </div>
                          </div>
                          <canvas id="signature-default" width="400" height="400" class="signature-canvas"></canvas>
                        </div>
                      </div>
                    </form>
                    <div class="text-secondary fs-5">
                      I agree that the signature and initials will be the electronic representation of my signature and initials for all purposes when I (or my
                      agent) use them on documents, including legally binding contracts - just the same as a pen-and-paper signature or initial.
                    </div>
                    <div class="mt-4">
                      <div class="btn-list">
                        <button type="button" class="btn">Cancel</button>
                        <button type="button" class="btn btn-primary ms-auto">Confirm transfer</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="row row-cards">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                        <h3 class="card-title">Advanced demo</h3>
                        <div class="signature position-relative">
                          <div class="position-absolute top-0 end-0 p-2">
                            <div class="btn btn-icon" id="signature-advanced-clear" title="Clear signature" data-bs-toggle="tooltip">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/trash -->
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
                                <path d="M4 7l16 0" />
                                <path d="M10 11l0 6" />
                                <path d="M14 11l0 6" />
                                <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                              </svg>
                            </div>
                          </div>
                          <canvas id="signature-advanced" width="400" height="400" class="signature-canvas"></canvas>
                        </div>
                        <div class="mt-4">
                          <div class="row">
                            <div class="col">
                              <label for="signature-advanced-color" class="form-label visually-hidden">Pen color</label>
                              <input href="" type="color" id="signature-advanced-color" class="w-100 form-control form-control-color" />
                            </div>
                            <div class="col">
                              <button href="" class="btn w-100" id="signature-advanced-svg">Download SVG</button>
                            </div>
                            <div class="col">
                              <button href="" class="btn w-100" id="signature-advanced-png">Download PNG</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                        <a href="#" class="btn btn-2" data-bs-toggle="modal" data-bs-target="#modal-signature"> Open signature modal </a>
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
    <!-- BEGIN PAGE MODALS -->
    <div class="modal" tabindex="-1" id="modal-signature">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
            <h5 class="modal-title">Save your signature</h5>
            <div class="signature position-relative">
              <div class="position-absolute top-0 end-0 p-2">
                <div class="btn btn-icon" id="signature-modal-clear" title="Clear signature" data-bs-toggle="tooltip">
                  <!-- Download SVG icon from http://tabler.io/icons/icon/trash -->
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
                    <path d="M4 7l16 0" />
                    <path d="M10 11l0 6" />
                    <path d="M14 11l0 6" />
                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                  </svg>
                </div>
              </div>
              <canvas id="signature-modal" width="400" height="400" class="signature-canvas"></canvas>
            </div>
            <div class="text-secondary fs-5 mt-4">
              I agree that the signature and initials will be the electronic representation of my signature and initials for all purposes when I (or my agent)
              use them on documents, including legally binding contracts - just the same as a pen-and-paper signature or initial.
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary ms-auto" data-bs-dismiss="modal">Save my signature</button>
          </div>
        </div>
      </div>
    </div>
    <!-- END PAGE MODALS -->
    @include('samples.includes.settings')
    <!-- BEGIN PAGE LIBRARIES -->
    <!-- END PAGE LIBRARIES -->
    @include('samples.includes.scripts')
  </body>
</html>
