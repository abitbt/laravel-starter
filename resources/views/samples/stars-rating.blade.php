<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Star Ratings - Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>
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
                <h1 class="page-title">Star Ratings</h1>
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
              <div class="col-md-4">
                <div class="row row-cards">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                        <div class="h3 card-title">Basic</div>
                        <div>
                          <select id="rating-default">
                            <option value="">Select a rating</option>
                            <option value="5">Excellent</option>
                            <option value="4" selected>Very Good</option>
                            <option value="3">Average</option>
                            <option value="2">Poor</option>
                            <option value="1">Terrible</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                        <div class="h3 card-title">Different icon</div>
                        <div class="space-y">
                          <select id="rating-default">
                            <option value="">Select a rating</option>
                            <option value="5">Excellent</option>
                            <option value="4" selected>Very Good</option>
                            <option value="3">Average</option>
                            <option value="2">Poor</option>
                            <option value="1">Terrible</option>
                          </select>
                          <select id="rating-heart">
                            <option value="">Select a rating</option>
                            <option value="5">Excellent</option>
                            <option value="4" selected>Very Good</option>
                            <option value="3">Average</option>
                            <option value="2">Poor</option>
                            <option value="1">Terrible</option>
                          </select>
                          <select id="rating-ghost">
                            <option value="">Select a rating</option>
                            <option value="5">Excellent</option>
                            <option value="4" selected>Very Good</option>
                            <option value="3">Average</option>
                            <option value="2">Poor</option>
                            <option value="1">Terrible</option>
                          </select>
                          <select id="rating-circle">
                            <option value="">Select a rating</option>
                            <option value="5">Excellent</option>
                            <option value="4" selected>Very Good</option>
                            <option value="3">Average</option>
                            <option value="2">Poor</option>
                            <option value="1">Terrible</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  <div class="card-body">
                    <div class="h3 card-title">Custom colors</div>
                    <div class="space-y">
                      <select id="rating-color">
                        <option value="">Select a rating</option>
                        <option value="5">Excellent</option>
                        <option value="4">Very Good</option>
                        <option value="3" selected>Average</option>
                        <option value="2">Poor</option>
                        <option value="1">Terrible</option>
                      </select>
                      <select id="rating-color-primary">
                        <option value="">Select a rating</option>
                        <option value="5">Excellent</option>
                        <option value="4">Very Good</option>
                        <option value="3" selected>Average</option>
                        <option value="2">Poor</option>
                        <option value="1">Terrible</option>
                      </select>
                      <select id="rating-color-red">
                        <option value="">Select a rating</option>
                        <option value="5">Excellent</option>
                        <option value="4">Very Good</option>
                        <option value="3" selected>Average</option>
                        <option value="2">Poor</option>
                        <option value="1">Terrible</option>
                      </select>
                      <select id="rating-color-lime">
                        <option value="">Select a rating</option>
                        <option value="5">Excellent</option>
                        <option value="4">Very Good</option>
                        <option value="3" selected>Average</option>
                        <option value="2">Poor</option>
                        <option value="1">Terrible</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  <div class="card-body">
                    <div class="h3 card-title">Custom sizes</div>
                    <div class="space-y">
                      <select id="rating-size-sm">
                        <option value="">Select a rating</option>
                        <option value="5">Excellent</option>
                        <option value="4">Very Good</option>
                        <option value="3" selected>Average</option>
                        <option value="2">Poor</option>
                        <option value="1">Terrible</option>
                      </select>
                      <select id="rating-size-primary">
                        <option value="">Select a rating</option>
                        <option value="5">Excellent</option>
                        <option value="4">Very Good</option>
                        <option value="3" selected>Average</option>
                        <option value="2">Poor</option>
                        <option value="1">Terrible</option>
                      </select>
                      <select id="rating-size-md">
                        <option value="">Select a rating</option>
                        <option value="5">Excellent</option>
                        <option value="4">Very Good</option>
                        <option value="3" selected>Average</option>
                        <option value="2">Poor</option>
                        <option value="1">Terrible</option>
                      </select>
                      <select id="rating-size-lg">
                        <option value="">Select a rating</option>
                        <option value="5">Excellent</option>
                        <option value="4">Very Good</option>
                        <option value="3" selected>Average</option>
                        <option value="2">Poor</option>
                        <option value="1">Terrible</option>
                      </select>
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
