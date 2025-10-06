<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Modals - Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>
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
                <h1 class="page-title">Modals</h1>
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
                <div class="row g-5">
                  <div class="d-none d-md-block col-3">
                    <div class="nav nav-vertical sticky-top pt-4">
                      <a href="#modal-simple" class="nav-link">Simple modal</a>
                      <a href="#modal-large" class="nav-link">Large modal</a>
                      <a href="#modal-small" class="nav-link">Small modal</a>
                      <a href="#modal-full-width" class="nav-link">Full width modal</a>
                      <a href="#modal-scrollable" class="nav-link">Scrollable modal</a>
                      <a href="#modal-report" class="nav-link">Modal with form</a>
                      <a href="#modal-success" class="nav-link">Success modal</a>
                      <a href="#modal-danger" class="nav-link">Danger modal</a>
                      <a href="#modal-team" class="nav-link">Modal with simple form</a>
                      <a href="#modal-signature" class="nav-link">Modal with signature form</a>
                      <a href="#modal-new-email" class="nav-link">New email modal</a>
                    </div>
                  </div>
                  <div class="col">
                    <div class="space-y-6">
                      <div>
                        <h3>Simple modal</h3>
                        <!-- BEGIN MODAL -->
                        <div
                          class="modal modal-blur fade position-relative rounded d-block show bg-surface-backdrop py-6 w-auto h-auto z-0"
                          id="modal-simple"
                          tabindex="-1"
                          role="dialog"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-3 modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci animi beatae delectus deleniti dolorem eveniet facere fuga
                                iste nemo nesciunt nihil odio perspiciatis, quia quis reprehenderit sit tempora totam unde.
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save changes</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END MODAL -->
                      </div>
                      <div>
                        <h3>Large modal</h3>
                        <!-- BEGIN MODAL -->
                        <div
                          class="modal modal-blur fade position-relative rounded d-block show bg-surface-backdrop py-6 w-auto h-auto z-0"
                          id="modal-large"
                          tabindex="-1"
                          role="dialog"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title">Large modal</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci animi beatae delectus deleniti dolorem eveniet facere fuga
                                iste nemo nesciunt nihil odio perspiciatis, quia quis reprehenderit sit tempora totam unde.
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save changes</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END MODAL -->
                      </div>
                      <div>
                        <h3>Small modal</h3>
                        <!-- BEGIN MODAL -->
                        <div
                          class="modal modal-blur fade position-relative rounded d-block show bg-surface-backdrop py-6 w-auto h-auto z-0"
                          id="modal-small"
                          tabindex="-1"
                          role="dialog"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-body">
                                <div class="modal-title">Are you sure?</div>
                                <div>If you proceed, you will lose all your personal data.</div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-link link-secondary me-auto" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Yes, delete all my data</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END MODAL -->
                      </div>
                      <div>
                        <h3>Full width modal</h3>
                        <!-- BEGIN MODAL -->
                        <div
                          class="modal modal-blur fade position-relative rounded d-block show bg-surface-backdrop py-6 w-auto h-auto z-0"
                          id="modal-full-width"
                          tabindex="-1"
                          role="dialog"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-full-width modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title">Full width modal</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci animi beatae delectus deleniti dolorem eveniet facere fuga
                                iste nemo nesciunt nihil odio perspiciatis, quia quis reprehenderit sit tempora totam unde.
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save changes</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END MODAL -->
                      </div>
                      <div>
                        <h3>Scrollable modal</h3>
                        <!-- BEGIN MODAL -->
                        <div
                          class="modal modal-blur fade position-relative rounded d-block show bg-surface-backdrop py-6 w-auto h-auto z-0"
                          style="max-height: 30rem"
                          id="modal-scrollable"
                          tabindex="-1"
                          role="dialog"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-5 modal-dialog-centered modal-dialog-scrollable" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title">Scrollable modal</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <p>
                                  Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo
                                  risus, porta ac consectetur ac, vestibulum at eros.
                                </p>
                                <p>
                                  Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus
                                  dolor auctor.
                                </p>
                                <p>
                                  Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed
                                  odio dui. Donec ullamcorper nulla non metus auctor fringilla.
                                </p>
                                <p>
                                  Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo
                                  risus, porta ac consectetur ac, vestibulum at eros.
                                </p>
                                <p>
                                  Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus
                                  dolor auctor.
                                </p>
                                <p>
                                  Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed
                                  odio dui. Donec ullamcorper nulla non metus auctor fringilla.
                                </p>
                                <p>
                                  Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo
                                  risus, porta ac consectetur ac, vestibulum at eros.
                                </p>
                                <p>
                                  Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus
                                  dolor auctor.
                                </p>
                                <p>
                                  Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed
                                  odio dui. Donec ullamcorper nulla non metus auctor fringilla.
                                </p>
                                <p>
                                  Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo
                                  risus, porta ac consectetur ac, vestibulum at eros.
                                </p>
                                <p>
                                  Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus
                                  dolor auctor.
                                </p>
                                <p>
                                  Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed
                                  odio dui. Donec ullamcorper nulla non metus auctor fringilla.
                                </p>
                                <p>
                                  Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo
                                  risus, porta ac consectetur ac, vestibulum at eros.
                                </p>
                                <p>
                                  Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus
                                  dolor auctor.
                                </p>
                                <p>
                                  Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed
                                  odio dui. Donec ullamcorper nulla non metus auctor fringilla.
                                </p>
                                <p>
                                  Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo
                                  risus, porta ac consectetur ac, vestibulum at eros.
                                </p>
                                <p>
                                  Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus
                                  dolor auctor.
                                </p>
                                <p>
                                  Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed
                                  odio dui. Donec ullamcorper nulla non metus auctor fringilla.
                                </p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save changes</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END MODAL -->
                      </div>
                      <div>
                        <h3>Modal with form</h3>
                        <!-- BEGIN MODAL -->
                        <div
                          class="modal modal-blur fade position-relative rounded d-block show bg-surface-backdrop py-6 w-auto h-auto z-0"
                          id="modal-report"
                          tabindex="-1"
                          role="dialog"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title">New report</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <div class="mb-3">
                                  <label class="form-label">Name</label>
                                  <input type="text" class="form-control" name="example-text-input" placeholder="Your report name" />
                                </div>
                                <label class="form-label">Report type</label>
                                <div class="form-selectgroup-boxes row mb-3">
                                  <div class="col-lg-6">
                                    <label class="form-selectgroup-item">
                                      <input type="radio" name="report-type" value="1" class="form-selectgroup-input" checked />
                                      <span class="form-selectgroup-label d-flex align-items-center p-3">
                                        <span class="me-3">
                                          <span class="form-selectgroup-check"></span>
                                        </span>
                                        <span class="form-selectgroup-label-content">
                                          <span class="form-selectgroup-title strong mb-1">Simple</span>
                                          <span class="d-block text-secondary">Provide only basic data needed for the report</span>
                                        </span>
                                      </span>
                                    </label>
                                  </div>
                                  <div class="col-lg-6">
                                    <label class="form-selectgroup-item">
                                      <input type="radio" name="report-type" value="1" class="form-selectgroup-input" />
                                      <span class="form-selectgroup-label d-flex align-items-center p-3">
                                        <span class="me-3">
                                          <span class="form-selectgroup-check"></span>
                                        </span>
                                        <span class="form-selectgroup-label-content">
                                          <span class="form-selectgroup-title strong mb-1">Advanced</span>
                                          <span class="d-block text-secondary"
                                            >Insert charts and additional advanced analyses to be inserted in the report</span
                                          >
                                        </span>
                                      </span>
                                    </label>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-lg-8">
                                    <div class="mb-3">
                                      <label class="form-label">Report url</label>
                                      <div class="input-group input-group-flat">
                                        <span class="input-group-text"> https://tabler.io/reports/ </span>
                                        <input type="text" class="form-control ps-0" value="report-01" autocomplete="off" />
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-lg-4">
                                    <div class="mb-3">
                                      <label class="form-label">Visibility</label>
                                      <select class="form-select">
                                        <option value="1" selected>Private</option>
                                        <option value="2">Public</option>
                                        <option value="3">Hidden</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="modal-body">
                                <div class="row">
                                  <div class="col-lg-6">
                                    <div class="mb-3">
                                      <label class="form-label">Client name</label>
                                      <input type="text" class="form-control" />
                                    </div>
                                  </div>
                                  <div class="col-lg-6">
                                    <div class="mb-3">
                                      <label class="form-label">Reporting period</label>
                                      <input type="date" class="form-control" />
                                    </div>
                                  </div>
                                  <div class="col-lg-12">
                                    <div>
                                      <label class="form-label">Additional information</label>
                                      <textarea class="form-control" rows="3"></textarea>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <a href="#" class="btn btn-link link-secondary btn-3" data-bs-dismiss="modal"> Cancel </a>
                                <a href="#" class="btn btn-primary btn-5 ms-auto" data-bs-dismiss="modal">
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
                                  Create new report
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END MODAL -->
                      </div>
                      <div>
                        <h3>Success modal</h3>
                        <!-- BEGIN MODAL -->
                        <div
                          class="modal modal-blur fade position-relative rounded d-block show bg-surface-backdrop py-6 w-auto h-auto z-0"
                          id="modal-success"
                          tabindex="-1"
                          role="dialog"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              <div class="modal-status bg-success"></div>
                              <div class="modal-body text-center py-4">
                                <!-- Download SVG icon from http://tabler.io/icons/icon/circle-check -->
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
                                  class="icon mb-2 text-green icon-lg"
                                >
                                  <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                  <path d="M9 12l2 2l4 -4" />
                                </svg>
                                <h3>Payment succedeed</h3>
                                <div class="text-secondary">
                                  Your payment of $290 has been successfully submitted. Your invoice has been sent to support@tabler.io.
                                </div>
                              </div>
                              <div class="modal-footer">
                                <div class="w-100">
                                  <div class="row">
                                    <div class="col">
                                      <a href="#" class="btn btn-3 w-100" data-bs-dismiss="modal"> Go to dashboard </a>
                                    </div>
                                    <div class="col">
                                      <a href="#" class="btn btn-success btn-4 w-100" data-bs-dismiss="modal"> View invoice </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END MODAL -->
                      </div>
                      <div>
                        <h3>Danger modal</h3>
                        <!-- BEGIN MODAL -->
                        <div
                          class="modal modal-blur fade position-relative rounded d-block show bg-surface-backdrop py-6 w-auto h-auto z-0"
                          id="modal-danger"
                          tabindex="-1"
                          role="dialog"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              <div class="modal-status bg-danger"></div>
                              <div class="modal-body text-center py-4">
                                <!-- Download SVG icon from http://tabler.io/icons/icon/alert-triangle -->
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
                                  class="icon mb-2 text-danger icon-lg"
                                >
                                  <path d="M12 9v4" />
                                  <path
                                    d="M10.363 3.591l-8.106 13.534a1.914 1.914 0 0 0 1.636 2.871h16.214a1.914 1.914 0 0 0 1.636 -2.87l-8.106 -13.536a1.914 1.914 0 0 0 -3.274 0z"
                                  />
                                  <path d="M12 16h.01" />
                                </svg>
                                <h3>Are you sure?</h3>
                                <div class="text-secondary">Do you really want to remove 84 files? What you've done cannot be undone.</div>
                              </div>
                              <div class="modal-footer">
                                <div class="w-100">
                                  <div class="row">
                                    <div class="col">
                                      <a href="#" class="btn btn-3 w-100" data-bs-dismiss="modal"> Cancel </a>
                                    </div>
                                    <div class="col">
                                      <a href="#" class="btn btn-danger btn-4 w-100" data-bs-dismiss="modal"> Delete 84 items </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END MODAL -->
                      </div>
                      <div>
                        <h3>Modal with simple form</h3>
                        <!-- BEGIN MODAL -->
                        <div
                          class="modal modal-blur fade position-relative rounded d-block show bg-surface-backdrop py-6 w-auto h-auto z-0"
                          id="modal-team"
                          tabindex="-1"
                          role="dialog"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-3 modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title">Add a new team</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <div class="row mb-3 align-items-end">
                                  <div class="col-auto">
                                    <a href="#" class="avatar avatar-upload rounded avatar-1">
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
                                  <div class="col">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" />
                                  </div>
                                </div>
                                <div class="mb-3">
                                  <label class="form-label">Pick your team color</label>
                                  <div class="row g-2">
                                    <div class="col-auto">
                                      <label class="form-colorinput">
                                        <input name="color" type="radio" value="dark" class="form-colorinput-input" />
                                        <span class="form-colorinput-color bg-dark"></span>
                                      </label>
                                    </div>
                                    <div class="col-auto">
                                      <label class="form-colorinput form-colorinput-light">
                                        <input name="color" type="radio" value="white" class="form-colorinput-input" checked />
                                        <span class="form-colorinput-color bg-white"></span>
                                      </label>
                                    </div>
                                    <div class="col-auto">
                                      <label class="form-colorinput">
                                        <input name="color" type="radio" value="blue" class="form-colorinput-input" />
                                        <span class="form-colorinput-color bg-blue"></span>
                                      </label>
                                    </div>
                                    <div class="col-auto">
                                      <label class="form-colorinput">
                                        <input name="color" type="radio" value="azure" class="form-colorinput-input" />
                                        <span class="form-colorinput-color bg-azure"></span>
                                      </label>
                                    </div>
                                    <div class="col-auto">
                                      <label class="form-colorinput">
                                        <input name="color" type="radio" value="indigo" class="form-colorinput-input" />
                                        <span class="form-colorinput-color bg-indigo"></span>
                                      </label>
                                    </div>
                                    <div class="col-auto">
                                      <label class="form-colorinput">
                                        <input name="color" type="radio" value="purple" class="form-colorinput-input" />
                                        <span class="form-colorinput-color bg-purple"></span>
                                      </label>
                                    </div>
                                    <div class="col-auto">
                                      <label class="form-colorinput">
                                        <input name="color" type="radio" value="pink" class="form-colorinput-input" />
                                        <span class="form-colorinput-color bg-pink"></span>
                                      </label>
                                    </div>
                                    <div class="col-auto">
                                      <label class="form-colorinput">
                                        <input name="color" type="radio" value="red" class="form-colorinput-input" />
                                        <span class="form-colorinput-color bg-red"></span>
                                      </label>
                                    </div>
                                    <div class="col-auto">
                                      <label class="form-colorinput">
                                        <input name="color" type="radio" value="orange" class="form-colorinput-input" />
                                        <span class="form-colorinput-color bg-orange"></span>
                                      </label>
                                    </div>
                                    <div class="col-auto">
                                      <label class="form-colorinput">
                                        <input name="color" type="radio" value="yellow" class="form-colorinput-input" />
                                        <span class="form-colorinput-color bg-yellow"></span>
                                      </label>
                                    </div>
                                    <div class="col-auto">
                                      <label class="form-colorinput">
                                        <input name="color" type="radio" value="lime" class="form-colorinput-input" />
                                        <span class="form-colorinput-color bg-lime"></span>
                                      </label>
                                    </div>
                                    <div class="col-auto">
                                      <label class="form-colorinput">
                                        <input name="color" type="radio" value="green" class="form-colorinput-input" />
                                        <span class="form-colorinput-color bg-green"></span>
                                      </label>
                                    </div>
                                  </div>
                                </div>
                                <div>
                                  <label class="form-label">Additional info</label>
                                  <textarea class="form-control"></textarea>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Add Team</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END MODAL -->
                      </div>
                      <div>
                        <h3>Modal with signature form</h3>
                        <!-- BEGIN MODAL -->
                        <div
                          class="modal modal-blur fade position-relative rounded d-block show bg-surface-backdrop py-6 w-auto h-auto z-0"
                          id="modal-signature"
                          tabindex="-1"
                          role="dialog"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-3 modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              <div class="modal-body">
                                <h3 class="card-title">Confirm transfer</h3>
                                <p class="card-subtitle">Please confirm the transfer of funds by signing below.</p>
                                <form action="">
                                  <div class="mb-3">
                                    <label class="form-label required">Signature</label>
                                    <div class="position-relative select-none">
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
                                        <canvas id="signature-default" width="684" height="400" class="signature-canvas"></canvas>
                                      </div>
                                    </div>
                                  </div>
                                </form>
                                <div class="text-secondary fs-5">
                                  I agree that the signature and initials will be the electronic representation of my signature and initials for all purposes
                                  when I (or my agent) use them on documents, including legally binding contracts - just the same as a pen-and-paper signature
                                  or initial.
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn">Cancel</button>
                                <button type="button" class="btn btn-primary ms-auto">Confirm transfer</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END MODAL -->
                      </div>
                      <div>
                        <h3>New email modal</h3>
                        <!-- BEGIN MODAL -->
                        <div
                          class="modal modal-blur fade position-relative rounded d-block show bg-surface-backdrop py-6 w-auto h-auto z-0"
                          id="modal-new-email"
                          tabindex="-1"
                          role="dialog"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-3 modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title">New Message</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <form>
                                  <div class="mb-3">
                                    <label class="form-label">To</label>
                                    <input type="text" class="form-control" placeholder="Example@email.com" />
                                  </div>
                                  <div class="mb-3">
                                    <label class="form-label">Subject</label>
                                    <input type="text" class="form-control" placeholder="Your subject" />
                                  </div>
                                  <div>
                                    <label class="form-label">Message</label>
                                    <form method="post">
                                      <textarea id="hugerte-email-message">Hello, <b>Tabler</b>!</textarea>
                                    </form>
                                  </div>
                                </form>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary ms-auto" data-bs-dismiss="modal">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/send -->
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
                                    <path d="M10 14l11 -11" />
                                    <path d="M21 3l-6.5 18a.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a.55 .55 0 0 1 0 -1l18 -6.5" />
                                  </svg>
                                  Send Message
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END MODAL -->
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
    <!-- BEGIN PAGE LIBRARIES -->
    <!-- END PAGE LIBRARIES -->
    @include('samples.includes.scripts')
  </body>
</html>
