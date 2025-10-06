<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Progress - Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>
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
                <h1 class="page-title">Progress</h1>
              </div>
            </div>
          </div>
        </div>
        <!-- END PAGE HEADER -->
        <!-- END PAGE HEADER -->
        <!-- BEGIN PAGE BODY -->
        <main id="content" class="page-body">
          <div class="container-xl">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3">
              <div class="col">
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title">Default</h3>
                    <div class="space-y">
                      <div class="progress progress-1">
                        <div
                          class="progress-bar"
                          style="width: 0%"
                          role="progressbar"
                          aria-valuenow="0"
                          aria-valuemin="0"
                          aria-valuemax="100"
                          aria-label="0% Complete"
                        >
                          <span class="visually-hidden">0% Complete</span>
                        </div>
                      </div>
                      <div class="progress progress-1">
                        <div
                          class="progress-bar"
                          style="width: 20%"
                          role="progressbar"
                          aria-valuenow="20"
                          aria-valuemin="0"
                          aria-valuemax="100"
                          aria-label="20% Complete"
                        >
                          <span class="visually-hidden">20% Complete</span>
                        </div>
                      </div>
                      <div class="progress progress-1">
                        <div
                          class="progress-bar"
                          style="width: 40%"
                          role="progressbar"
                          aria-valuenow="40"
                          aria-valuemin="0"
                          aria-valuemax="100"
                          aria-label="40% Complete"
                        >
                          <span class="visually-hidden">40% Complete</span>
                        </div>
                      </div>
                      <div class="progress progress-1">
                        <div
                          class="progress-bar"
                          style="width: 100%"
                          role="progressbar"
                          aria-valuenow="100"
                          aria-valuemin="0"
                          aria-valuemax="100"
                          aria-label="100% Complete"
                        >
                          <span class="visually-hidden">100% Complete</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title">With value</h3>
                    <div class="space-y">
                      <div class="progress progress-lg">
                        <div
                          class="progress-bar"
                          style="width: 10%"
                          role="progressbar"
                          aria-valuenow="10"
                          aria-valuemin="0"
                          aria-valuemax="100"
                          aria-label="10% Complete"
                        >
                          10%
                        </div>
                      </div>
                      <div class="progress progress-lg">
                        <div
                          class="progress-bar"
                          style="width: 20%"
                          role="progressbar"
                          aria-valuenow="20"
                          aria-valuemin="0"
                          aria-valuemax="100"
                          aria-label="20% Complete"
                        >
                          20%
                        </div>
                      </div>
                      <div class="progress progress-lg">
                        <div
                          class="progress-bar"
                          style="width: 90%"
                          role="progressbar"
                          aria-valuenow="90"
                          aria-valuemin="0"
                          aria-valuemax="100"
                          aria-label="90% Complete"
                        >
                          90%
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title">Colors</h3>
                    <div class="space-y">
                      <div class="progress progress-2">
                        <div
                          class="progress-bar bg-blue"
                          style="width: 20%"
                          role="progressbar"
                          aria-valuenow="20"
                          aria-valuemin="0"
                          aria-valuemax="100"
                          aria-label="20% Complete"
                        >
                          <span class="visually-hidden">20% Complete</span>
                        </div>
                      </div>
                      <div class="progress progress-2">
                        <div
                          class="progress-bar bg-green"
                          style="width: 40%"
                          role="progressbar"
                          aria-valuenow="40"
                          aria-valuemin="0"
                          aria-valuemax="100"
                          aria-label="40% Complete"
                        >
                          <span class="visually-hidden">40% Complete</span>
                        </div>
                      </div>
                      <div class="progress progress-2">
                        <div
                          class="progress-bar bg-yellow"
                          style="width: 60%"
                          role="progressbar"
                          aria-valuenow="60"
                          aria-valuemin="0"
                          aria-valuemax="100"
                          aria-label="60% Complete"
                        >
                          <span class="visually-hidden">60% Complete</span>
                        </div>
                      </div>
                      <div class="progress progress-2">
                        <div
                          class="progress-bar bg-red"
                          style="width: 80%"
                          role="progressbar"
                          aria-valuenow="80"
                          aria-valuemin="0"
                          aria-valuemax="100"
                          aria-label="80% Complete"
                        >
                          <span class="visually-hidden">80% Complete</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title">Sizes</h3>
                    <div class="space-y">
                      <div class="progress progress-sm">
                        <div
                          class="progress-bar"
                          style="width: 20%"
                          role="progressbar"
                          aria-valuenow="20"
                          aria-valuemin="0"
                          aria-valuemax="100"
                          aria-label="20% Complete"
                        >
                          <span class="visually-hidden">20% Complete</span>
                        </div>
                      </div>
                      <div class="progress progress-1">
                        <div
                          class="progress-bar"
                          style="width: 40%"
                          role="progressbar"
                          aria-valuenow="40"
                          aria-valuemin="0"
                          aria-valuemax="100"
                          aria-label="40% Complete"
                        >
                          <span class="visually-hidden">40% Complete</span>
                        </div>
                      </div>
                      <div class="progress progress-lg">
                        <div
                          class="progress-bar"
                          style="width: 60%"
                          role="progressbar"
                          aria-valuenow="60"
                          aria-valuemin="0"
                          aria-valuemax="100"
                          aria-label="60% Complete"
                        >
                          <span class="visually-hidden">60% Complete</span>
                        </div>
                      </div>
                      <div class="progress progress-xl">
                        <div
                          class="progress-bar"
                          style="width: 80%"
                          role="progressbar"
                          aria-valuenow="80"
                          aria-valuemin="0"
                          aria-valuemax="100"
                          aria-label="80% Complete"
                        >
                          <span class="visually-hidden">80% Complete</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title">Indeterminate</h3>
                    <div class="space-y">
                      <div class="progress progress-1">
                        <div class="progress-bar progress-bar-indeterminate"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title">Multiple values</h3>
                    <div class="space-y">
                      <div class="progress progress-1">
                        <div class="progress-bar bg-blue" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                        <div class="progress-bar bg-red" style="width: 30%" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                        <div class="progress-bar bg-green" style="width: 10%" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <div class="progress progress-2 progress-separated">
                        <div class="progress-bar bg-blue" style="width: 10%" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        <div class="progress-bar bg-red" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                        <div class="progress-bar bg-green" style="width: 30%" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                        <div
                          class="progress-bar bg-yellow"
                          style="width: 40%"
                          role="progressbar"
                          aria-valuenow="40"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title">Striped</h3>
                    <div class="space-y">
                      <div class="progress progress-3">
                        <div
                          class="progress-bar bg-blue progress-bar-striped"
                          style="width: 20%"
                          role="progressbar"
                          aria-valuenow="20"
                          aria-valuemin="0"
                          aria-valuemax="100"
                          aria-label="20% Complete"
                        >
                          <span class="visually-hidden">20% Complete</span>
                        </div>
                      </div>
                      <div class="progress progress-3">
                        <div
                          class="progress-bar bg-green progress-bar-striped"
                          style="width: 40%"
                          role="progressbar"
                          aria-valuenow="40"
                          aria-valuemin="0"
                          aria-valuemax="100"
                          aria-label="40% Complete"
                        >
                          <span class="visually-hidden">40% Complete</span>
                        </div>
                      </div>
                      <div class="progress progress-3">
                        <div
                          class="progress-bar bg-yellow progress-bar-striped"
                          style="width: 60%"
                          role="progressbar"
                          aria-valuenow="60"
                          aria-valuemin="0"
                          aria-valuemax="100"
                          aria-label="60% Complete"
                        >
                          <span class="visually-hidden">60% Complete</span>
                        </div>
                      </div>
                      <div class="progress progress-3">
                        <div
                          class="progress-bar bg-red progress-bar-striped"
                          style="width: 80%"
                          role="progressbar"
                          aria-valuenow="80"
                          aria-valuemin="0"
                          aria-valuemax="100"
                          aria-label="80% Complete"
                        >
                          <span class="visually-hidden">80% Complete</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title">Animated</h3>
                    <div class="space-y">
                      <div class="progress progress-3">
                        <div
                          class="progress-bar progress-bar-striped progress-bar-animated"
                          style="width: 20%"
                          role="progressbar"
                          aria-valuenow="20"
                          aria-valuemin="0"
                          aria-valuemax="100"
                          aria-label="20% Complete"
                        >
                          <span class="visually-hidden">20% Complete</span>
                        </div>
                      </div>
                      <div class="progress progress-4">
                        <div
                          class="progress-bar bg-green progress-bar-striped progress-bar-animated"
                          style="width: 40%"
                          role="progressbar"
                          aria-valuenow="40"
                          aria-valuemin="0"
                          aria-valuemax="100"
                          aria-label="40% Complete"
                        >
                          <span class="visually-hidden">40% Complete</span>
                        </div>
                      </div>
                      <div class="progress progress-4">
                        <div
                          class="progress-bar bg-yellow progress-bar-striped progress-bar-animated"
                          style="width: 60%"
                          role="progressbar"
                          aria-valuenow="60"
                          aria-valuemin="0"
                          aria-valuemax="100"
                          aria-label="60% Complete"
                        >
                          <span class="visually-hidden">60% Complete</span>
                        </div>
                      </div>
                      <div class="progress progress-4">
                        <div
                          class="progress-bar bg-red progress-bar-striped progress-bar-animated"
                          style="width: 80%"
                          role="progressbar"
                          aria-valuenow="80"
                          aria-valuemin="0"
                          aria-valuemax="100"
                          aria-label="80% Complete"
                        >
                          <span class="visually-hidden">80% Complete</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title">Animated with JavaScript</h3>
                    <div class="row align-items-center g-0">
                      <div class="col">
                        <div class="progress progress-2" id="progress-animated">
                          <div
                            class="progress-bar"
                            style="width: 0%"
                            role="progressbar"
                            aria-valuenow="0"
                            aria-valuemin="0"
                            aria-valuemax="100"
                            aria-label="0% Complete"
                          >
                            <span class="visually-hidden">0% Complete</span>
                          </div>
                        </div>
                      </div>
                      <div class="col-2 text-end" id="progress-animated-value">0%</div>
                    </div>
                    <div class="btn-list mt-3">
                      <button class="btn btn-sm" id="progress-animated-0">0%</button>
                      <button class="btn btn-sm" id="progress-animated-10">10%</button>
                      <button class="btn btn-sm" id="progress-animated-50">50%</button>
                      <button class="btn btn-sm" id="progress-animated-100">100%</button>
                      <button class="btn btn-sm ms-3" id="progress-animated-minus-10">-10%</button>
                      <button class="btn btn-sm" id="progress-animated-add-10">+10%</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title">Steps Progress</h3>
                    <div class="space-y">
                      <ol class="progress-steps">
                        <li class="progress-steps-item bg-primary" aria-current="step">
                          <span class="visually-hidden"> Step 1 </span>
                        </li>
                        <li class="progress-steps-item">
                          <span class="visually-hidden"> Step 2 </span>
                        </li>
                        <li class="progress-steps-item">
                          <span class="visually-hidden"> Step 3 </span>
                        </li>
                      </ol>
                      <ol class="progress-steps">
                        <li class="progress-steps-item bg-primary">
                          <span class="visually-hidden"> Step 1 </span>
                        </li>
                        <li class="progress-steps-item bg-primary">
                          <span class="visually-hidden"> Step 2 </span>
                        </li>
                        <li class="progress-steps-item bg-primary">
                          <span class="visually-hidden"> Step 3 </span>
                        </li>
                        <li class="progress-steps-item bg-primary" aria-current="step">
                          <span class="visually-hidden"> Step 4 </span>
                        </li>
                        <li class="progress-steps-item">
                          <span class="visually-hidden"> Step 5 </span>
                        </li>
                      </ol>
                      <ol class="progress-steps">
                        <li class="progress-steps-item bg-red" aria-current="step">
                          <span class="visually-hidden"> Step 1 </span>
                        </li>
                        <li class="progress-steps-item">
                          <span class="visually-hidden"> Step 2 </span>
                        </li>
                        <li class="progress-steps-item">
                          <span class="visually-hidden"> Step 3 </span>
                        </li>
                        <li class="progress-steps-item">
                          <span class="visually-hidden"> Step 4 </span>
                        </li>
                        <li class="progress-steps-item">
                          <span class="visually-hidden"> Step 5 </span>
                        </li>
                        <li class="progress-steps-item">
                          <span class="visually-hidden"> Step 6 </span>
                        </li>
                        <li class="progress-steps-item">
                          <span class="visually-hidden"> Step 7 </span>
                        </li>
                        <li class="progress-steps-item">
                          <span class="visually-hidden"> Step 8 </span>
                        </li>
                        <li class="progress-steps-item">
                          <span class="visually-hidden"> Step 9 </span>
                        </li>
                        <li class="progress-steps-item">
                          <span class="visually-hidden"> Step 10 </span>
                        </li>
                      </ol>
                      <ol class="progress-steps">
                        <li class="progress-steps-item bg-green">
                          <span class="visually-hidden"> Step 1 </span>
                        </li>
                        <li class="progress-steps-item bg-green">
                          <span class="visually-hidden"> Step 2 </span>
                        </li>
                        <li class="progress-steps-item bg-green">
                          <span class="visually-hidden"> Step 3 </span>
                        </li>
                        <li class="progress-steps-item bg-green">
                          <span class="visually-hidden"> Step 4 </span>
                        </li>
                        <li class="progress-steps-item bg-green">
                          <span class="visually-hidden"> Step 5 </span>
                        </li>
                        <li class="progress-steps-item bg-green">
                          <span class="visually-hidden"> Step 6 </span>
                        </li>
                        <li class="progress-steps-item bg-green">
                          <span class="visually-hidden"> Step 7 </span>
                        </li>
                        <li class="progress-steps-item bg-green" aria-current="step">
                          <span class="visually-hidden"> Step 8 </span>
                        </li>
                      </ol>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title">Progress Background</h3>
                    <div class="space-y">
                      <div class="progressbg">
                        <div class="progress progress-3 progressbg-progress">
                          <div
                            class="progress-bar bg-primary-lt"
                            style="width: 85%"
                            role="progressbar"
                            aria-valuenow="85"
                            aria-valuemin="0"
                            aria-valuemax="100"
                            aria-label="85% Complete"
                          >
                            <span class="visually-hidden">85% Complete</span>
                          </div>
                        </div>
                        <div class="progressbg-text">Poland</div>
                        <div class="progressbg-value">85%</div>
                      </div>
                      <div class="progressbg">
                        <div class="progress progress-3 progressbg-progress">
                          <div
                            class="progress-bar bg-primary-lt"
                            style="width: 65%"
                            role="progressbar"
                            aria-valuenow="65"
                            aria-valuemin="0"
                            aria-valuemax="100"
                            aria-label="65% Complete"
                          >
                            <span class="visually-hidden">65% Complete</span>
                          </div>
                        </div>
                        <div class="progressbg-text">Germany</div>
                        <div class="progressbg-value">65%</div>
                      </div>
                      <div class="progressbg">
                        <div class="progress progress-3 progressbg-progress">
                          <div
                            class="progress-bar bg-primary-lt"
                            style="width: 45%"
                            role="progressbar"
                            aria-valuenow="45"
                            aria-valuemin="0"
                            aria-valuemax="100"
                            aria-label="45% Complete"
                          >
                            <span class="visually-hidden">45% Complete</span>
                          </div>
                        </div>
                        <div class="progressbg-text">United States</div>
                        <div class="progressbg-value">45%</div>
                      </div>
                      <div class="progressbg">
                        <div class="progress progress-3 progressbg-progress">
                          <div
                            class="progress-bar bg-primary-lt"
                            style="width: 25%"
                            role="progressbar"
                            aria-valuenow="25"
                            aria-valuemin="0"
                            aria-valuemax="100"
                            aria-label="25% Complete"
                          >
                            <span class="visually-hidden">25% Complete</span>
                          </div>
                        </div>
                        <div class="progressbg-text">France</div>
                        <div class="progressbg-value">25%</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title">Progress Background Colors</h3>
                    <div class="space-y">
                      <div class="progressbg">
                        <div class="progress progress-3 progressbg-progress">
                          <div
                            class="progress-bar bg-success-lt"
                            style="width: 75%"
                            role="progressbar"
                            aria-valuenow="75"
                            aria-valuemin="0"
                            aria-valuemax="100"
                            aria-label="75% Complete"
                          >
                            <span class="visually-hidden">75% Complete</span>
                          </div>
                        </div>
                        <div class="progressbg-text">Success</div>
                        <div class="progressbg-value">75%</div>
                      </div>
                      <div class="progressbg">
                        <div class="progress progress-3 progressbg-progress">
                          <div
                            class="progress-bar bg-warning-lt"
                            style="width: 60%"
                            role="progressbar"
                            aria-valuenow="60"
                            aria-valuemin="0"
                            aria-valuemax="100"
                            aria-label="60% Complete"
                          >
                            <span class="visually-hidden">60% Complete</span>
                          </div>
                        </div>
                        <div class="progressbg-text">Warning</div>
                        <div class="progressbg-value">60%</div>
                      </div>
                      <div class="progressbg">
                        <div class="progress progress-3 progressbg-progress">
                          <div
                            class="progress-bar bg-danger-lt"
                            style="width: 40%"
                            role="progressbar"
                            aria-valuenow="40"
                            aria-valuemin="0"
                            aria-valuemax="100"
                            aria-label="40% Complete"
                          >
                            <span class="visually-hidden">40% Complete</span>
                          </div>
                        </div>
                        <div class="progressbg-text">Danger</div>
                        <div class="progressbg-value">40%</div>
                      </div>
                      <div class="progressbg">
                        <div class="progress progress-3 progressbg-progress">
                          <div
                            class="progress-bar bg-info-lt"
                            style="width: 90%"
                            role="progressbar"
                            aria-valuenow="90"
                            aria-valuemin="0"
                            aria-valuemax="100"
                            aria-label="90% Complete"
                          >
                            <span class="visually-hidden">90% Complete</span>
                          </div>
                        </div>
                        <div class="progressbg-text">Info</div>
                        <div class="progressbg-value">90%</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title">Progress Description</h3>
                    <div class="space-y">
                      <div>
                        <div class="d-flex mb-1 align-items-center lh-1">
                          <div class="fs-5 font-weight-bolder m-0">Project completion</div>
                          <span class="ms-auto fs-6 strong">85%</span>
                        </div>
                        <div class="progress progress-3">
                          <div
                            class="progress-bar bg-green"
                            style="width: 85%"
                            role="progressbar"
                            aria-valuenow="85"
                            aria-valuemin="0"
                            aria-valuemax="100"
                            aria-label="85% Complete"
                          >
                            <span class="visually-hidden">85% Complete</span>
                          </div>
                        </div>
                      </div>
                      <div>
                        <div class="d-flex mb-1 align-items-center lh-1">
                          <div class="fs-5 font-weight-bolder m-0">Storage usage</div>
                          <div class="fs-6 text-secondary ms-2">2.4GB of 5GB</div>
                          <span class="ms-auto fs-6 strong">48%</span>
                        </div>
                        <div class="progress progress-4">
                          <div
                            class="progress-bar bg-blue"
                            style="width: 48%"
                            role="progressbar"
                            aria-valuenow="48"
                            aria-valuemin="0"
                            aria-valuemax="100"
                            aria-label="48% Complete"
                          >
                            <span class="visually-hidden">48% Complete</span>
                          </div>
                        </div>
                      </div>
                      <div>
                        <div class="d-flex mb-1 align-items-center lh-1">
                          <div class="fs-5 font-weight-bolder m-0">Download progress</div>
                          <span class="ms-auto fs-6 strong">75%</span>
                        </div>
                        <div class="progress progress-3">
                          <div
                            class="progress-bar bg-yellow"
                            style="width: 75%"
                            role="progressbar"
                            aria-valuenow="75"
                            aria-valuemin="0"
                            aria-valuemax="100"
                            aria-label="75% Complete"
                          >
                            <span class="visually-hidden">75% Complete</span>
                          </div>
                        </div>
                      </div>
                      <div>
                        <div class="d-flex mb-1 align-items-center lh-1">
                          <div class="fs-5 font-weight-bolder m-0">Skills assessment</div>
                          <div class="fs-6 text-secondary ms-2">HTML/CSS</div>
                          <span class="ms-auto fs-6 strong">92%</span>
                        </div>
                        <div class="progress progress-4">
                          <div
                            class="progress-bar bg-red"
                            style="width: 92%"
                            role="progressbar"
                            aria-valuenow="92"
                            aria-valuemin="0"
                            aria-valuemax="100"
                            aria-label="92% Complete"
                          >
                            <span class="visually-hidden">92% Complete</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title">Progress Description Sizes</h3>
                    <div class="space-y">
                      <div>
                        <div class="d-flex mb-1 align-items-center lh-1">
                          <div class="fs-5 font-weight-bolder m-0">Small progress</div>
                          <span class="ms-auto fs-6 strong">60%</span>
                        </div>
                        <div class="progress progress-sm">
                          <div
                            class="progress-bar bg-blue"
                            style="width: 60%"
                            role="progressbar"
                            aria-valuenow="60"
                            aria-valuemin="0"
                            aria-valuemax="100"
                            aria-label="60% Complete"
                          >
                            <span class="visually-hidden">60% Complete</span>
                          </div>
                        </div>
                      </div>
                      <div>
                        <div class="d-flex mb-1 align-items-center lh-1">
                          <div class="fs-5 font-weight-bolder m-0">Default progress</div>
                          <span class="ms-auto fs-6 strong">70%</span>
                        </div>
                        <div class="progress progress-3">
                          <div
                            class="progress-bar bg-green"
                            style="width: 70%"
                            role="progressbar"
                            aria-valuenow="70"
                            aria-valuemin="0"
                            aria-valuemax="100"
                            aria-label="70% Complete"
                          >
                            <span class="visually-hidden">70% Complete</span>
                          </div>
                        </div>
                      </div>
                      <div>
                        <div class="d-flex mb-1 align-items-center lh-1">
                          <div class="fs-5 font-weight-bolder m-0">Large progress</div>
                          <span class="ms-auto fs-6 strong">80%</span>
                        </div>
                        <div class="progress progress-lg">
                          <div
                            class="progress-bar bg-orange"
                            style="width: 80%"
                            role="progressbar"
                            aria-valuenow="80"
                            aria-valuemin="0"
                            aria-valuemax="100"
                            aria-label="80% Complete"
                          >
                            <span class="visually-hidden">80% Complete</span>
                          </div>
                        </div>
                      </div>
                      <div>
                        <div class="d-flex mb-1 align-items-center lh-1">
                          <div class="fs-5 font-weight-bolder m-0">Extra large</div>
                          <span class="ms-auto fs-6 strong">90%</span>
                        </div>
                        <div class="progress progress-xl">
                          <div
                            class="progress-bar bg-purple"
                            style="width: 90%"
                            role="progressbar"
                            aria-valuenow="90"
                            aria-valuemin="0"
                            aria-valuemax="100"
                            aria-label="90% Complete"
                          >
                            <span class="visually-hidden">90% Complete</span>
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
