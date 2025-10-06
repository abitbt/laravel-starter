<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Charts - Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>
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
                <h1 class="page-title">Charts</h1>
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
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex">
                      <h3 class="card-title">Active users</h3>
                      <div class="ms-auto">
                        <div class="dropdown">
                          <a
                            class="dropdown-toggle text-secondary"
                            id="active-users-dropdown"
                            href="#"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                            aria-label="Select time range for active users"
                            >Last 7 days</a
                          >
                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="active-users-dropdown">
                            <a class="dropdown-item" href="#" aria-current="true">Last 7 days</a>
                            <a class="dropdown-item" href="#">Last 30 days</a>
                            <a class="dropdown-item" href="#">Last 3 months</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <div id="chart-active-users-2" class="position-relative"></div>
                      </div>
                      <div class="col-md-auto">
                        <div class="divide-y divide-y-fill">
                          <div class="px-3">
                            <div class="text-secondary"><span class="status-dot bg-primary"></span> Mobile</div>
                            <div class="h2">11,425</div>
                          </div>
                          <div class="px-3">
                            <div class="text-secondary"><span class="status-dot bg-azure"></span> Desktop</div>
                            <div class="h2">6,458</div>
                          </div>
                          <div class="px-3">
                            <div class="text-secondary"><span class="status-dot bg-green"></span> Tablet</div>
                            <div class="h2">3,985</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex">
                      <h3 class="card-title">Social referrals</h3>
                      <div class="ms-auto">
                        <div class="dropdown">
                          <a
                            class="dropdown-toggle text-secondary"
                            id="social-referrals-dropdown"
                            href="#"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                            aria-label="Select time range for sales data"
                            >Last 7 days</a
                          >
                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="social-referrals-dropdown">
                            <a class="dropdown-item" href="#" aria-current="true">Last 7 days</a>
                            <a class="dropdown-item" href="#">Last 30 days</a>
                            <a class="dropdown-item" href="#">Last 3 months</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div id="chart-social-referrals" class="position-relative"></div>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <div id="chart-tasks-overview" class="position-relative"></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-xl-4">
                <div class="card">
                  <div class="card-body">
                    <div id="chart-demo-pie" class="position-relative"></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-xl-4">
                <div class="card">
                  <div class="card-body">
                    <div id="chart-completion-tasks" class="position-relative"></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-xl-4">
                <div class="card">
                  <div class="card-body">
                    <div id="chart-completion-tasks-2" class="position-relative"></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-xl-4">
                <div class="card">
                  <div class="card-body">
                    <div id="chart-completion-tasks-3" class="position-relative"></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-xl-4">
                <div class="card">
                  <div class="card-body">
                    <div id="chart-completion-tasks-4" class="position-relative"></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-xl-4">
                <div class="card">
                  <div class="card-body">
                    <div id="chart-completion-tasks-5" class="position-relative"></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-xl-4">
                <div class="card">
                  <div class="card-body">
                    <div id="chart-completion-tasks-6" class="position-relative"></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-xl-4">
                <div class="card">
                  <div class="card-body">
                    <div id="chart-completion-tasks-7" class="position-relative"></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-xl-4">
                <div class="card">
                  <div class="card-body">
                    <div id="chart-completion-tasks-8" class="position-relative"></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-xl-4">
                <div class="card">
                  <div class="card-body">
                    <div id="chart-completion-tasks-9" class="position-relative"></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-xl-4">
                <div class="card">
                  <div class="card-body">
                    <div id="chart-completion-tasks-10" class="position-relative"></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-xl-4">
                <div class="card">
                  <div class="card-body">
                    <div id="chart-completion-tasks-11" class="position-relative"></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-xl-4">
                <div class="card">
                  <div class="card-body">
                    <div id="chart-campaigns" class="position-relative"></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-xl-4">
                <div class="card">
                  <div class="card-body">
                    <div id="chart-tasks" class="position-relative"></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-xl-4">
                <div class="card">
                  <div class="card-body">
                    <div id="chart-line-stroke" class="position-relative"></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-xl-4">
                <div class="card">
                  <div class="card-body">
                    <div id="chart-stepline" class="position-relative"></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-xl-4">
                <div class="card">
                  <div class="card-body">
                    <div id="chart-temperature" class="position-relative"></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-xl-4">
                <div class="card">
                  <div class="card-body">
                    <div id="chart-area" class="position-relative"></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-xl-4">
                <div class="card">
                  <div class="card-body">
                    <div id="chart-area-spline" class="position-relative"></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-xl-4">
                <div class="card">
                  <div class="card-body">
                    <div id="chart-area-spline-stacked" class="position-relative"></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-xl-4">
                <div class="card">
                  <div class="card-body">
                    <div id="chart-spline" class="position-relative"></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-xl-4">
                <div class="card">
                  <div class="card-body">
                    <div id="chart-scatter" class="position-relative"></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-xl-4">
                <div class="card">
                  <div class="card-body">
                    <div id="chart-combination" class="position-relative"></div>
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
