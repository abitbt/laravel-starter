<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>
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
                <h1 class="page-title">Tables</h1>
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
              <div class="col-lg-8">
                <div class="card">
                  <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Title</th>
                          <th>Email</th>
                          <th>Role</th>
                          <th class="w-1"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Paweł Kuna</td>
                          <td class="text-secondary">UI Designer, Training</td>
                          <td class="text-secondary"><a href="#" class="text-reset">paweluna@howstuffworks.com</a></td>
                          <td class="text-secondary">User</td>
                          <td>
                            <a href="#">Edit</a>
                          </td>
                        </tr>
                        <tr>
                          <td>Jeffie Lewzey</td>
                          <td class="text-secondary">Chemical Engineer, Support</td>
                          <td class="text-secondary"><a href="#" class="text-reset">jlewzey1@seesaa.net</a></td>
                          <td class="text-secondary">User</td>
                          <td>
                            <a href="#">Edit</a>
                          </td>
                        </tr>
                        <tr>
                          <td>Mallory Hulme</td>
                          <td class="text-secondary">Geologist IV, Support</td>
                          <td class="text-secondary"><a href="#" class="text-reset">mhulme2@domainmarket.com</a></td>
                          <td class="text-secondary">User</td>
                          <td>
                            <a href="#">Edit</a>
                          </td>
                        </tr>
                        <tr>
                          <td>Dunn Slane</td>
                          <td class="text-secondary">Research Nurse, Sales</td>
                          <td class="text-secondary"><a href="#" class="text-reset">dslane3@epa.gov</a></td>
                          <td class="text-secondary">Owner</td>
                          <td>
                            <a href="#">Edit</a>
                          </td>
                        </tr>
                        <tr>
                          <td>Emmy Levet</td>
                          <td class="text-secondary">VP Product Management, Accounting</td>
                          <td class="text-secondary"><a href="#" class="text-reset">elevet4@senate.gov</a></td>
                          <td class="text-secondary">User</td>
                          <td>
                            <a href="#">Edit</a>
                          </td>
                        </tr>
                        <tr>
                          <td>Maryjo Lebarree</td>
                          <td class="text-secondary">Civil Engineer, Product Management</td>
                          <td class="text-secondary"><a href="#" class="text-reset">mlebarree5@unc.edu</a></td>
                          <td class="text-secondary">User</td>
                          <td>
                            <a href="#">Edit</a>
                          </td>
                        </tr>
                        <tr>
                          <td>Egan Poetz</td>
                          <td class="text-secondary">Research Nurse, Engineering</td>
                          <td class="text-secondary"><a href="#" class="text-reset">epoetz6@free.fr</a></td>
                          <td class="text-secondary">Admin</td>
                          <td>
                            <a href="#">Edit</a>
                          </td>
                        </tr>
                        <tr>
                          <td>Kellie Skingley</td>
                          <td class="text-secondary">Teacher, Services</td>
                          <td class="text-secondary"><a href="#" class="text-reset">kskingley7@columbia.edu</a></td>
                          <td class="text-secondary">Owner</td>
                          <td>
                            <a href="#">Edit</a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title">Top Pages</h3>
                    <table class="table table-sm table-borderless">
                      <thead>
                        <tr>
                          <th>Page</th>
                          <th class="text-end">Visitors</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <div class="progressbg">
                              <div class="progress progress-3 progressbg-progress">
                                <div
                                  class="progress-bar bg-primary-lt"
                                  style="width: 82.54%"
                                  role="progressbar"
                                  aria-valuenow="82.54"
                                  aria-valuemin="0"
                                  aria-valuemax="100"
                                  aria-label="82.54% Complete"
                                >
                                  <span class="visually-hidden">82.54% Complete</span>
                                </div>
                              </div>
                              <div class="progressbg-text">/</div>
                            </div>
                          </td>
                          <td class="w-1 fw-bold text-end">4896</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="progressbg">
                              <div class="progress progress-3 progressbg-progress">
                                <div
                                  class="progress-bar bg-primary-lt"
                                  style="width: 76.29%"
                                  role="progressbar"
                                  aria-valuenow="76.29"
                                  aria-valuemin="0"
                                  aria-valuemax="100"
                                  aria-label="76.29% Complete"
                                >
                                  <span class="visually-hidden">76.29% Complete</span>
                                </div>
                              </div>
                              <div class="progressbg-text">/form-elements.html</div>
                            </div>
                          </td>
                          <td class="w-1 fw-bold text-end">3652</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="progressbg">
                              <div class="progress progress-3 progressbg-progress">
                                <div
                                  class="progress-bar bg-primary-lt"
                                  style="width: 72.65%"
                                  role="progressbar"
                                  aria-valuenow="72.65"
                                  aria-valuemin="0"
                                  aria-valuemax="100"
                                  aria-label="72.65% Complete"
                                >
                                  <span class="visually-hidden">72.65% Complete</span>
                                </div>
                              </div>
                              <div class="progressbg-text">/index.html</div>
                            </div>
                          </td>
                          <td class="w-1 fw-bold text-end">3256</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="progressbg">
                              <div class="progress progress-3 progressbg-progress">
                                <div
                                  class="progress-bar bg-primary-lt"
                                  style="width: 44.89%"
                                  role="progressbar"
                                  aria-valuenow="44.89"
                                  aria-valuemin="0"
                                  aria-valuemax="100"
                                  aria-label="44.89% Complete"
                                >
                                  <span class="visually-hidden">44.89% Complete</span>
                                </div>
                              </div>
                              <div class="progressbg-text">/icons.html</div>
                            </div>
                          </td>
                          <td class="w-1 fw-bold text-end">986</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="progressbg">
                              <div class="progress progress-3 progressbg-progress">
                                <div
                                  class="progress-bar bg-primary-lt"
                                  style="width: 41.12%"
                                  role="progressbar"
                                  aria-valuenow="41.12"
                                  aria-valuemin="0"
                                  aria-valuemax="100"
                                  aria-label="41.12% Complete"
                                >
                                  <span class="visually-hidden">41.12% Complete</span>
                                </div>
                              </div>
                              <div class="progressbg-text">/docs/</div>
                            </div>
                          </td>
                          <td class="w-1 fw-bold text-end">912</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="progressbg">
                              <div class="progress progress-3 progressbg-progress">
                                <div
                                  class="progress-bar bg-primary-lt"
                                  style="width: 32.65%"
                                  role="progressbar"
                                  aria-valuenow="32.65"
                                  aria-valuemin="0"
                                  aria-valuemax="100"
                                  aria-label="32.65% Complete"
                                >
                                  <span class="visually-hidden">32.65% Complete</span>
                                </div>
                              </div>
                              <div class="progressbg-text">/accordion.html</div>
                            </div>
                          </td>
                          <td class="w-1 fw-bold text-end">855</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="progressbg">
                              <div class="progress progress-3 progressbg-progress">
                                <div
                                  class="progress-bar bg-primary-lt"
                                  style="width: 16.22%"
                                  role="progressbar"
                                  aria-valuenow="16.22"
                                  aria-valuemin="0"
                                  aria-valuemax="100"
                                  aria-label="16.22% Complete"
                                >
                                  <span class="visually-hidden">16.22% Complete</span>
                                </div>
                              </div>
                              <div class="progressbg-text">/datagrid.html</div>
                            </div>
                          </td>
                          <td class="w-1 fw-bold text-end">764</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="progressbg">
                              <div class="progress progress-3 progressbg-progress">
                                <div
                                  class="progress-bar bg-primary-lt"
                                  style="width: 8.69%"
                                  role="progressbar"
                                  aria-valuenow="8.69"
                                  aria-valuemin="0"
                                  aria-valuemax="100"
                                  aria-label="8.69% Complete"
                                >
                                  <span class="visually-hidden">8.69% Complete</span>
                                </div>
                              </div>
                              <div class="progressbg-text">/datatables.html</div>
                            </div>
                          </td>
                          <td class="w-1 fw-bold text-end">686</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="progressbg">
                              <div class="progress progress-3 progressbg-progress">
                                <div
                                  class="progress-bar bg-primary-lt"
                                  style="width: 28.45%"
                                  role="progressbar"
                                  aria-valuenow="28.45"
                                  aria-valuemin="0"
                                  aria-valuemax="100"
                                  aria-label="28.45% Complete"
                                >
                                  <span class="visually-hidden">28.45% Complete</span>
                                </div>
                              </div>
                              <div class="progressbg-text">/buttons.html</div>
                            </div>
                          </td>
                          <td class="w-1 fw-bold text-end">542</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="progressbg">
                              <div class="progress progress-3 progressbg-progress">
                                <div
                                  class="progress-bar bg-primary-lt"
                                  style="width: 31.23%"
                                  role="progressbar"
                                  aria-valuenow="31.23"
                                  aria-valuemin="0"
                                  aria-valuemax="100"
                                  aria-label="31.23% Complete"
                                >
                                  <span class="visually-hidden">31.23% Complete</span>
                                </div>
                              </div>
                              <div class="progressbg-text">/cards.html</div>
                            </div>
                          </td>
                          <td class="w-1 fw-bold text-end">498</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="progressbg">
                              <div class="progress progress-3 progressbg-progress">
                                <div
                                  class="progress-bar bg-primary-lt"
                                  style="width: 35.67%"
                                  role="progressbar"
                                  aria-valuenow="35.67"
                                  aria-valuemin="0"
                                  aria-valuemax="100"
                                  aria-label="35.67% Complete"
                                >
                                  <span class="visually-hidden">35.67% Complete</span>
                                </div>
                              </div>
                              <div class="progressbg-text">/typography.html</div>
                            </div>
                          </td>
                          <td class="w-1 fw-bold text-end">423</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="progressbg">
                              <div class="progress progress-3 progressbg-progress">
                                <div
                                  class="progress-bar bg-primary-lt"
                                  style="width: 42.18%"
                                  role="progressbar"
                                  aria-valuenow="42.18"
                                  aria-valuemin="0"
                                  aria-valuemax="100"
                                  aria-label="42.18% Complete"
                                >
                                  <span class="visually-hidden">42.18% Complete</span>
                                </div>
                              </div>
                              <div class="progressbg-text">/alerts.html</div>
                            </div>
                          </td>
                          <td class="w-1 fw-bold text-end">387</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="progressbg">
                              <div class="progress progress-3 progressbg-progress">
                                <div
                                  class="progress-bar bg-primary-lt"
                                  style="width: 38.76%"
                                  role="progressbar"
                                  aria-valuenow="38.76"
                                  aria-valuemin="0"
                                  aria-valuemax="100"
                                  aria-label="38.76% Complete"
                                >
                                  <span class="visually-hidden">38.76% Complete</span>
                                </div>
                              </div>
                              <div class="progressbg-text">/modals.html</div>
                            </div>
                          </td>
                          <td class="w-1 fw-bold text-end">356</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="progressbg">
                              <div class="progress progress-3 progressbg-progress">
                                <div
                                  class="progress-bar bg-primary-lt"
                                  style="width: 45.83%"
                                  role="progressbar"
                                  aria-valuenow="45.83"
                                  aria-valuemin="0"
                                  aria-valuemax="100"
                                  aria-label="45.83% Complete"
                                >
                                  <span class="visually-hidden">45.83% Complete</span>
                                </div>
                              </div>
                              <div class="progressbg-text">/tables.html</div>
                            </div>
                          </td>
                          <td class="w-1 fw-bold text-end">312</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="progressbg">
                              <div class="progress progress-3 progressbg-progress">
                                <div
                                  class="progress-bar bg-primary-lt"
                                  style="width: 52.94%"
                                  role="progressbar"
                                  aria-valuenow="52.94"
                                  aria-valuemin="0"
                                  aria-valuemax="100"
                                  aria-label="52.94% Complete"
                                >
                                  <span class="visually-hidden">52.94% Complete</span>
                                </div>
                              </div>
                              <div class="progressbg-text">/charts.html</div>
                            </div>
                          </td>
                          <td class="w-1 fw-bold text-end">289</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="progressbg">
                              <div class="progress progress-3 progressbg-progress">
                                <div
                                  class="progress-bar bg-primary-lt"
                                  style="width: 48.69%"
                                  role="progressbar"
                                  aria-valuenow="48.69"
                                  aria-valuemin="0"
                                  aria-valuemax="100"
                                  aria-label="48.69% Complete"
                                >
                                  <span class="visually-hidden">48.69% Complete</span>
                                </div>
                              </div>
                              <div class="progressbg-text">/pricing.html</div>
                            </div>
                          </td>
                          <td class="w-1 fw-bold text-end">267</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="progressbg">
                              <div class="progress progress-3 progressbg-progress">
                                <div
                                  class="progress-bar bg-primary-lt"
                                  style="width: 55.1%"
                                  role="progressbar"
                                  aria-valuenow="55.10"
                                  aria-valuemin="0"
                                  aria-valuemax="100"
                                  aria-label="55.10% Complete"
                                >
                                  <span class="visually-hidden">55.10% Complete</span>
                                </div>
                              </div>
                              <div class="progressbg-text">/blog/</div>
                            </div>
                          </td>
                          <td class="w-1 fw-bold text-end">245</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="progressbg">
                              <div class="progress progress-3 progressbg-progress">
                                <div
                                  class="progress-bar bg-primary-lt"
                                  style="width: 61.62%"
                                  role="progressbar"
                                  aria-valuenow="61.62"
                                  aria-valuemin="0"
                                  aria-valuemax="100"
                                  aria-label="61.62% Complete"
                                >
                                  <span class="visually-hidden">61.62% Complete</span>
                                </div>
                              </div>
                              <div class="progressbg-text">/profile.html</div>
                            </div>
                          </td>
                          <td class="w-1 fw-bold text-end">198</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="card">
                  <div class="table-responsive">
                    <table class="table table-vcenter card-table table-striped">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Title</th>
                          <th>Email</th>
                          <th>Role</th>
                          <th class="w-1"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Maryjo Lebarree</td>
                          <td class="text-secondary">Civil Engineer, Product Management</td>
                          <td class="text-secondary"><a href="#" class="text-reset">mlebarree5@unc.edu</a></td>
                          <td class="text-secondary">User</td>
                          <td>
                            <a href="#">Edit</a>
                          </td>
                        </tr>
                        <tr>
                          <td>Egan Poetz</td>
                          <td class="text-secondary">Research Nurse, Engineering</td>
                          <td class="text-secondary"><a href="#" class="text-reset">epoetz6@free.fr</a></td>
                          <td class="text-secondary">User</td>
                          <td>
                            <a href="#">Edit</a>
                          </td>
                        </tr>
                        <tr>
                          <td>Kellie Skingley</td>
                          <td class="text-secondary">Teacher, Services</td>
                          <td class="text-secondary"><a href="#" class="text-reset">kskingley7@columbia.edu</a></td>
                          <td class="text-secondary">User</td>
                          <td>
                            <a href="#">Edit</a>
                          </td>
                        </tr>
                        <tr>
                          <td>Christabel Charlwood</td>
                          <td class="text-secondary">Tax Accountant, Engineering</td>
                          <td class="text-secondary"><a href="#" class="text-reset">ccharlwood8@nifty.com</a></td>
                          <td class="text-secondary">Owner</td>
                          <td>
                            <a href="#">Edit</a>
                          </td>
                        </tr>
                        <tr>
                          <td>Haskel Shelper</td>
                          <td class="text-secondary">Staff Scientist, Legal</td>
                          <td class="text-secondary"><a href="#" class="text-reset">hshelper9@woothemes.com</a></td>
                          <td class="text-secondary">User</td>
                          <td>
                            <a href="#">Edit</a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="card">
                  <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Title</th>
                          <th>Role</th>
                          <th class="w-1"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <div class="d-flex py-1 align-items-center">
                              <span class="avatar avatar-2 me-2" style="background-image: url(./static/avatars/006m.jpg)"> </span>
                              <div class="flex-fill">
                                <div class="font-weight-medium">Lorry Mion</div>
                                <div class="text-secondary"><a href="#" class="text-reset">lmiona@livejournal.com</a></div>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div>Automation Specialist IV</div>
                            <div class="text-secondary">Accounting</div>
                          </td>
                          <td class="text-secondary">User</td>
                          <td>
                            <a href="#">Edit</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="d-flex py-1 align-items-center">
                              <span class="avatar avatar-2 me-2" style="background-image: url(./static/avatars/004f.jpg)"> </span>
                              <div class="flex-fill">
                                <div class="font-weight-medium">Leesa Beaty</div>
                                <div class="text-secondary"><a href="#" class="text-reset">lbeatyb@alibaba.com</a></div>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div>Editor</div>
                            <div class="text-secondary">Services</div>
                          </td>
                          <td class="text-secondary">User</td>
                          <td>
                            <a href="#">Edit</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="d-flex py-1 align-items-center">
                              <span class="avatar avatar-2 me-2" style="background-image: url(./static/avatars/007m.jpg)"> </span>
                              <div class="flex-fill">
                                <div class="font-weight-medium">Perren Keemar</div>
                                <div class="text-secondary"><a href="#" class="text-reset">pkeemarc@yahoo.com</a></div>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div>Analog Circuit Design manager</div>
                            <div class="text-secondary">Services</div>
                          </td>
                          <td class="text-secondary">User</td>
                          <td>
                            <a href="#">Edit</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="d-flex py-1 align-items-center">
                              <span class="avatar avatar-2 me-2"> SA </span>
                              <div class="flex-fill">
                                <div class="font-weight-medium">Sunny Airey</div>
                                <div class="text-secondary"><a href="#" class="text-reset">saireyd@prlog.org</a></div>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div>Nuclear Power Engineer</div>
                            <div class="text-secondary">Engineering</div>
                          </td>
                          <td class="text-secondary">Owner</td>
                          <td>
                            <a href="#">Edit</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="d-flex py-1 align-items-center">
                              <span class="avatar avatar-2 me-2" style="background-image: url(./static/avatars/009m.jpg)"> </span>
                              <div class="flex-fill">
                                <div class="font-weight-medium">Geoffry Flaunders</div>
                                <div class="text-secondary"><a href="#" class="text-reset">gflaunderse@loc.gov</a></div>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div>Software Test Engineer II</div>
                            <div class="text-secondary">Accounting</div>
                          </td>
                          <td class="text-secondary">User</td>
                          <td>
                            <a href="#">Edit</a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="card">
                  <div class="table-responsive">
                    <table class="table table-vcenter table-mobile-md card-table">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Title</th>
                          <th>Role</th>
                          <th class="w-1"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td data-label="Name">
                            <div class="d-flex py-1 align-items-center">
                              <span class="avatar avatar-2 me-2" style="background-image: url(./static/avatars/010m.jpg)"> </span>
                              <div class="flex-fill">
                                <div class="font-weight-medium">Thatcher Keel</div>
                                <div class="text-secondary"><a href="#" class="text-reset">tkeelf@blogger.com</a></div>
                              </div>
                            </div>
                          </td>
                          <td data-label="Title">
                            <div>VP Sales</div>
                            <div class="text-secondary">Business Development</div>
                          </td>
                          <td class="text-secondary" data-label="Role">User</td>
                          <td>
                            <div class="btn-list flex-nowrap">
                              <a href="#" class="btn btn-1"> Edit </a>
                              <div class="dropdown">
                                <button class="btn dropdown-toggle align-text-top" data-bs-toggle="dropdown">Actions</button>
                                <div class="dropdown-menu dropdown-menu-end">
                                  <a class="dropdown-item" href="#"> Action </a>
                                  <a class="dropdown-item" href="#"> Another action </a>
                                </div>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td data-label="Name">
                            <div class="d-flex py-1 align-items-center">
                              <span class="avatar avatar-2 me-2" style="background-image: url(./static/avatars/005f.jpg)"> </span>
                              <div class="flex-fill">
                                <div class="font-weight-medium">Dyann Escala</div>
                                <div class="text-secondary"><a href="#" class="text-reset">descalag@usatoday.com</a></div>
                              </div>
                            </div>
                          </td>
                          <td data-label="Title">
                            <div>Mechanical Systems Engineer</div>
                            <div class="text-secondary">Sales</div>
                          </td>
                          <td class="text-secondary" data-label="Role">User</td>
                          <td>
                            <div class="btn-list flex-nowrap">
                              <a href="#" class="btn btn-1"> Edit </a>
                              <div class="dropdown">
                                <button class="btn dropdown-toggle align-text-top" data-bs-toggle="dropdown">Actions</button>
                                <div class="dropdown-menu dropdown-menu-end">
                                  <a class="dropdown-item" href="#"> Action </a>
                                  <a class="dropdown-item" href="#"> Another action </a>
                                </div>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td data-label="Name">
                            <div class="d-flex py-1 align-items-center">
                              <span class="avatar avatar-2 me-2" style="background-image: url(./static/avatars/006f.jpg)"> </span>
                              <div class="flex-fill">
                                <div class="font-weight-medium">Avivah Mugleston</div>
                                <div class="text-secondary"><a href="#" class="text-reset">amuglestonh@intel.com</a></div>
                              </div>
                            </div>
                          </td>
                          <td data-label="Title">
                            <div>Actuary</div>
                            <div class="text-secondary">Sales</div>
                          </td>
                          <td class="text-secondary" data-label="Role">User</td>
                          <td>
                            <div class="btn-list flex-nowrap">
                              <a href="#" class="btn btn-1"> Edit </a>
                              <div class="dropdown">
                                <button class="btn dropdown-toggle align-text-top" data-bs-toggle="dropdown">Actions</button>
                                <div class="dropdown-menu dropdown-menu-end">
                                  <a class="dropdown-item" href="#"> Action </a>
                                  <a class="dropdown-item" href="#"> Another action </a>
                                </div>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td data-label="Name">
                            <div class="d-flex py-1 align-items-center">
                              <span class="avatar avatar-2 me-2"> AA </span>
                              <div class="flex-fill">
                                <div class="font-weight-medium">Arlie Armstead</div>
                                <div class="text-secondary"><a href="#" class="text-reset">aarmsteadi@yellowpages.com</a></div>
                              </div>
                            </div>
                          </td>
                          <td data-label="Title">
                            <div>VP Quality Control</div>
                            <div class="text-secondary">Accounting</div>
                          </td>
                          <td class="text-secondary" data-label="Role">Owner</td>
                          <td>
                            <div class="btn-list flex-nowrap">
                              <a href="#" class="btn btn-1"> Edit </a>
                              <div class="dropdown">
                                <button class="btn dropdown-toggle align-text-top" data-bs-toggle="dropdown">Actions</button>
                                <div class="dropdown-menu dropdown-menu-end">
                                  <a class="dropdown-item" href="#"> Action </a>
                                  <a class="dropdown-item" href="#"> Another action </a>
                                </div>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td data-label="Name">
                            <div class="d-flex py-1 align-items-center">
                              <span class="avatar avatar-2 me-2" style="background-image: url(./static/avatars/008f.jpg)"> </span>
                              <div class="flex-fill">
                                <div class="font-weight-medium">Tessie Curzon</div>
                                <div class="text-secondary"><a href="#" class="text-reset">tcurzonj@hp.com</a></div>
                              </div>
                            </div>
                          </td>
                          <td data-label="Title">
                            <div>Research Nurse</div>
                            <div class="text-secondary">Product Management</div>
                          </td>
                          <td class="text-secondary" data-label="Role">User</td>
                          <td>
                            <div class="btn-list flex-nowrap">
                              <a href="#" class="btn btn-1"> Edit </a>
                              <div class="dropdown">
                                <button class="btn dropdown-toggle align-text-top" data-bs-toggle="dropdown">Actions</button>
                                <div class="dropdown-menu dropdown-menu-end">
                                  <a class="dropdown-item" href="#"> Action </a>
                                  <a class="dropdown-item" href="#"> Another action </a>
                                </div>
                              </div>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Invoices</h3>
                  </div>
                  <div class="card-body border-bottom py-3">
                    <div class="d-flex">
                      <div class="text-secondary">
                        Show
                        <div class="mx-2 d-inline-block">
                          <input type="text" class="form-control form-control-sm" value="8" size="3" aria-label="Invoices count" />
                        </div>
                        entries
                      </div>
                      <div class="ms-auto text-secondary">
                        Search:
                        <div class="ms-2 d-inline-block">
                          <input type="text" class="form-control form-control-sm" aria-label="Search invoice" />
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="table-responsive">
                    <table class="table table-selectable card-table table-vcenter text-nowrap datatable">
                      <thead>
                        <tr>
                          <th class="w-1"><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select all invoices" /></th>
                          <th class="w-1">
                            No.
                            <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-up -->
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
                              class="icon icon-sm icon-thick icon-2"
                            >
                              <path d="M6 15l6 -6l6 6" />
                            </svg>
                          </th>
                          <th>Invoice Subject</th>
                          <th>Client</th>
                          <th>VAT No.</th>
                          <th>Created</th>
                          <th>Status</th>
                          <th>Price</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><input class="form-check-input m-0 align-middle table-selectable-check" type="checkbox" aria-label="Select invoice" /></td>
                          <td><span class="text-secondary">001401</span></td>
                          <td><a href="invoice.html" class="text-reset" tabindex="-1">Design Works</a></td>
                          <td>
                            <span class="flag flag-xs flag-country-us me-2"></span>
                            Carlson Limited
                          </td>
                          <td>87956621</td>
                          <td>15 Dec 2017</td>
                          <td><span class="badge bg-success me-1"></span> Paid</td>
                          <td>$887</td>
                          <td class="text-end">
                            <span class="dropdown">
                              <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                              <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#"> Action </a>
                                <a class="dropdown-item" href="#"> Another action </a>
                              </div>
                            </span>
                          </td>
                        </tr>
                        <tr>
                          <td><input class="form-check-input m-0 align-middle table-selectable-check" type="checkbox" aria-label="Select invoice" /></td>
                          <td><span class="text-secondary">001402</span></td>
                          <td><a href="invoice.html" class="text-reset" tabindex="-1">UX Wireframes</a></td>
                          <td>
                            <span class="flag flag-xs flag-country-gb me-2"></span>
                            Adobe
                          </td>
                          <td>87956421</td>
                          <td>12 Apr 2017</td>
                          <td><span class="badge bg-warning me-1"></span> Pending</td>
                          <td>$1200</td>
                          <td class="text-end">
                            <span class="dropdown">
                              <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                              <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#"> Action </a>
                                <a class="dropdown-item" href="#"> Another action </a>
                              </div>
                            </span>
                          </td>
                        </tr>
                        <tr>
                          <td><input class="form-check-input m-0 align-middle table-selectable-check" type="checkbox" aria-label="Select invoice" /></td>
                          <td><span class="text-secondary">001403</span></td>
                          <td><a href="invoice.html" class="text-reset" tabindex="-1">New Dashboard</a></td>
                          <td>
                            <span class="flag flag-xs flag-country-de me-2"></span>
                            Bluewolf
                          </td>
                          <td>87952621</td>
                          <td>23 Oct 2017</td>
                          <td><span class="badge bg-warning me-1"></span> Pending</td>
                          <td>$534</td>
                          <td class="text-end">
                            <span class="dropdown">
                              <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                              <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#"> Action </a>
                                <a class="dropdown-item" href="#"> Another action </a>
                              </div>
                            </span>
                          </td>
                        </tr>
                        <tr>
                          <td><input class="form-check-input m-0 align-middle table-selectable-check" type="checkbox" aria-label="Select invoice" /></td>
                          <td><span class="text-secondary">001404</span></td>
                          <td><a href="invoice.html" class="text-reset" tabindex="-1">Landing Page</a></td>
                          <td>
                            <span class="flag flag-xs flag-country-br me-2"></span>
                            Salesforce
                          </td>
                          <td>87953421</td>
                          <td>2 Sep 2017</td>
                          <td><span class="badge bg-secondary me-1"></span> Due in 2 Weeks</td>
                          <td>$1500</td>
                          <td class="text-end">
                            <span class="dropdown">
                              <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                              <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#"> Action </a>
                                <a class="dropdown-item" href="#"> Another action </a>
                              </div>
                            </span>
                          </td>
                        </tr>
                        <tr>
                          <td><input class="form-check-input m-0 align-middle table-selectable-check" type="checkbox" aria-label="Select invoice" /></td>
                          <td><span class="text-secondary">001405</span></td>
                          <td><a href="invoice.html" class="text-reset" tabindex="-1">Marketing Templates</a></td>
                          <td>
                            <span class="flag flag-xs flag-country-pl me-2"></span>
                            Printic
                          </td>
                          <td>87956621</td>
                          <td>29 Jan 2018</td>
                          <td><span class="badge bg-danger me-1"></span> Paid Today</td>
                          <td>$648</td>
                          <td class="text-end">
                            <span class="dropdown">
                              <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                              <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#"> Action </a>
                                <a class="dropdown-item" href="#"> Another action </a>
                              </div>
                            </span>
                          </td>
                        </tr>
                        <tr>
                          <td><input class="form-check-input m-0 align-middle table-selectable-check" type="checkbox" aria-label="Select invoice" /></td>
                          <td><span class="text-secondary">001406</span></td>
                          <td><a href="invoice.html" class="text-reset" tabindex="-1">Sales Presentation</a></td>
                          <td>
                            <span class="flag flag-xs flag-country-br me-2"></span>
                            Tabdaq
                          </td>
                          <td>87956621</td>
                          <td>4 Feb 2018</td>
                          <td><span class="badge bg-secondary me-1"></span> Due in 3 Weeks</td>
                          <td>$300</td>
                          <td class="text-end">
                            <span class="dropdown">
                              <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                              <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#"> Action </a>
                                <a class="dropdown-item" href="#"> Another action </a>
                              </div>
                            </span>
                          </td>
                        </tr>
                        <tr>
                          <td><input class="form-check-input m-0 align-middle table-selectable-check" type="checkbox" aria-label="Select invoice" /></td>
                          <td><span class="text-secondary">001407</span></td>
                          <td><a href="invoice.html" class="text-reset" tabindex="-1">Logo & Print</a></td>
                          <td>
                            <span class="flag flag-xs flag-country-us me-2"></span>
                            Apple
                          </td>
                          <td>87956621</td>
                          <td>22 Mar 2018</td>
                          <td><span class="badge bg-success me-1"></span> Paid Today</td>
                          <td>$2500</td>
                          <td class="text-end">
                            <span class="dropdown">
                              <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                              <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#"> Action </a>
                                <a class="dropdown-item" href="#"> Another action </a>
                              </div>
                            </span>
                          </td>
                        </tr>
                        <tr>
                          <td><input class="form-check-input m-0 align-middle table-selectable-check" type="checkbox" aria-label="Select invoice" /></td>
                          <td><span class="text-secondary">001408</span></td>
                          <td><a href="invoice.html" class="text-reset" tabindex="-1">Icons</a></td>
                          <td>
                            <span class="flag flag-xs flag-country-pl me-2"></span>
                            Tookapic
                          </td>
                          <td>87956621</td>
                          <td>13 May 2018</td>
                          <td><span class="badge bg-success me-1"></span> Paid Today</td>
                          <td>$940</td>
                          <td class="text-end">
                            <span class="dropdown">
                              <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                              <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#"> Action </a>
                                <a class="dropdown-item" href="#"> Another action </a>
                              </div>
                            </span>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="card-footer">
                    <div class="row g-2 justify-content-center justify-content-sm-between">
                      <div class="col-auto d-flex align-items-center">
                        <p class="m-0 text-secondary">Showing <strong>1 to 8</strong> of <strong>16 entries</strong></p>
                      </div>
                      <div class="col-auto">
                        <!-- BEGIN PAGINATION -->
                        <ul class="pagination m-0 ms-auto">
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
                  </div>
                </div>
              </div>
              <div class="col-12">
                <!--<script>
	document.addEventListener("DOMContentLoaded", function() {
		const list = new List('table-', {
			sortClass: 'table-sort',
			listClass: 'table-tbody',
			valueNames: [ 'sort-name', 'sort-content', 'sort-status', 'sort-date', 'sort-tags', 'sort-category']
		});
	})
</script>-->
                <div class="card">
                  <div class="card-table">
                    <div class="card-header">
                      <div class="row w-full">
                        <div class="col">
                          <h3 class="card-title mb-0">Employee</h3>
                          <p class="text-secondary m-0">Table description.</p>
                        </div>
                        <div class="col-md-auto col-sm-12">
                          <div class="ms-auto d-flex flex-wrap btn-list">
                            <div class="input-group input-group-flat w-auto">
                              <span class="input-group-text">
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
                              <input id="advanced-table-search" type="text" class="form-control" autocomplete="off" />
                              <span class="input-group-text">
                                <kbd>ctrl + K</kbd>
                              </span>
                            </div>
                            <a href="#" class="btn btn-icon" aria-label="Button">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/dots -->
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
                                <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                              </svg>
                            </a>
                            <div class="dropdown">
                              <a href="#" class="btn dropdown-toggle" data-bs-toggle="dropdown">Download</a>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Third action</a>
                              </div>
                            </div>
                            <a href="#" class="btn btn-0"> Button </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div id="advanced-table">
                      <div class="table-responsive">
                        <table class="table table-vcenter table-selectable">
                          <thead>
                            <tr>
                              <th class="w-1"></th>
                              <th>
                                <button class="table-sort d-flex justify-content-between" data-sort="sort-name">Name</button>
                              </th>
                              <th>
                                <button class="table-sort d-flex justify-content-between" data-sort="sort-city">City</button>
                              </th>
                              <th>
                                <button class="table-sort d-flex justify-content-between" data-sort="sort-status">Status</button>
                              </th>
                              <th>
                                <button class="table-sort d-flex justify-content-between" data-sort="sort-date">Start date</button>
                              </th>
                              <th>
                                <button class="table-sort d-flex justify-content-between" data-sort="sort-tags">Tags</button>
                              </th>
                              <th>
                                <button class="table-sort d-flex justify-content-between" data-sort="sort-category">Category</button>
                              </th>
                            </tr>
                          </thead>
                          <tbody class="table-tbody">
                            <tr>
                              <td>
                                <input
                                  class="form-check-input m-0 align-middle table-selectable-check"
                                  type="checkbox"
                                  aria-label="Select invoice"
                                  value="true"
                                />
                              </td>
                              <td class="sort-name">
                                <span class="avatar avatar-xs me-2" style="background-image: url(./static/avatars/000m.jpg)"> </span>
                                Paweł Kuna
                              </td>
                              <td class="sort-city">Peimei, China</td>
                              <td class="sort-status">
                                <span class="badge bg-success-lt">Active</span>
                              </td>
                              <td class="sort-date">December 08, 2024</td>
                              <td class="sort-tags">
                                <div class="badges-list">
                                  <span class="badge">Event</span>
                                  <span class="badge">Tickets</span>
                                </div>
                              </td>
                              <td class="sort-category py-0">
                                <span class="on-unchecked"> Individual </span>
                                <div class="on-checked">
                                  <div class="d-flex justify-content-end">
                                    <a href="#" class="btn btn-2 btn-icon" aria-label="Button">
                                      <!-- Download SVG icon from http://tabler.io/icons/icon/dots -->
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
                                        <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                      </svg>
                                    </a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  class="form-check-input m-0 align-middle table-selectable-check"
                                  type="checkbox"
                                  aria-label="Select invoice"
                                  value="true"
                                />
                              </td>
                              <td class="sort-name">
                                <span class="avatar avatar-xs me-2" style="background-image: url(./static/avatars/052f.jpg)"> </span>
                                Jeffie Lewzey
                              </td>
                              <td class="sort-city">Indaial, Brazil</td>
                              <td class="sort-status">
                                <span class="badge bg-danger-lt">Inactive</span>
                              </td>
                              <td class="sort-date">January 01, 2024</td>
                              <td class="sort-tags">
                                <div class="badges-list">
                                  <span class="badge">QTA</span>
                                  <span class="badge">Event</span>
                                </div>
                              </td>
                              <td class="sort-category py-0">
                                <span class="on-unchecked"> Agencies </span>
                                <div class="on-checked">
                                  <div class="d-flex justify-content-end">
                                    <a href="#" class="btn btn-2 btn-icon" aria-label="Button">
                                      <!-- Download SVG icon from http://tabler.io/icons/icon/dots -->
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
                                        <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                      </svg>
                                    </a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  class="form-check-input m-0 align-middle table-selectable-check"
                                  type="checkbox"
                                  aria-label="Select invoice"
                                  value="true"
                                />
                              </td>
                              <td class="sort-name">
                                <span class="avatar avatar-xs me-2" style="background-image: url(./static/avatars/002m.jpg)"> </span>
                                Mallory Hulme
                              </td>
                              <td class="sort-city">Cimuncang, Indonesia</td>
                              <td class="sort-status">
                                <span class="badge">Requested</span>
                              </td>
                              <td class="sort-date">January 01, 2024</td>
                              <td class="sort-tags">
                                <div class="badges-list">
                                  <span class="badge">Tickets</span>
                                </div>
                              </td>
                              <td class="sort-category py-0">
                                <span class="on-unchecked"> Agencies </span>
                                <div class="on-checked">
                                  <div class="d-flex justify-content-end">
                                    <a href="#" class="btn btn-2 btn-icon" aria-label="Button">
                                      <!-- Download SVG icon from http://tabler.io/icons/icon/dots -->
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
                                        <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                      </svg>
                                    </a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  class="form-check-input m-0 align-middle table-selectable-check"
                                  type="checkbox"
                                  aria-label="Select invoice"
                                  value="true"
                                />
                              </td>
                              <td class="sort-name">
                                <span class="avatar avatar-xs me-2" style="background-image: url(./static/avatars/003m.jpg)"> </span>
                                Dunn Slane
                              </td>
                              <td class="sort-city">Liutang, China</td>
                              <td class="sort-status">
                                <span class="badge bg-success-lt">Active</span>
                              </td>
                              <td class="sort-date">September 01, 2024</td>
                              <td class="sort-tags">
                                <div class="badges-list">
                                  <span class="badge">QTA</span>
                                  <span class="badge">Event</span>
                                  <span class="badge">Tickets</span>
                                  <span class="badge">TODO</span>
                                </div>
                              </td>
                              <td class="sort-category py-0">
                                <span class="on-unchecked"> Ticket </span>
                                <div class="on-checked">
                                  <div class="d-flex justify-content-end">
                                    <a href="#" class="btn btn-2 btn-icon" aria-label="Button">
                                      <!-- Download SVG icon from http://tabler.io/icons/icon/dots -->
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
                                        <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                      </svg>
                                    </a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  class="form-check-input m-0 align-middle table-selectable-check"
                                  type="checkbox"
                                  aria-label="Select invoice"
                                  value="true"
                                />
                              </td>
                              <td class="sort-name">
                                <span class="avatar avatar-xs me-2" style="background-image: url(./static/avatars/000f.jpg)"> </span>
                                Emmy Levet
                              </td>
                              <td class="sort-city">Kaliprak, Indonesia</td>
                              <td class="sort-status">
                                <span class="badge bg-success-lt">Active</span>
                              </td>
                              <td class="sort-date">January 01, 2024</td>
                              <td class="sort-tags">
                                <div class="badges-list">
                                  <span class="badge">QTA</span>
                                  <span class="badge">Event</span>
                                  <span class="badge">Tickets</span>
                                  <span class="badge">TODO</span>
                                </div>
                              </td>
                              <td class="sort-category py-0">
                                <span class="on-unchecked"> Agencies </span>
                                <div class="on-checked">
                                  <div class="d-flex justify-content-end">
                                    <a href="#" class="btn btn-2 btn-icon" aria-label="Button">
                                      <!-- Download SVG icon from http://tabler.io/icons/icon/dots -->
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
                                        <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                      </svg>
                                    </a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  class="form-check-input m-0 align-middle table-selectable-check"
                                  type="checkbox"
                                  aria-label="Select invoice"
                                  value="true"
                                />
                              </td>
                              <td class="sort-name">
                                <span class="avatar avatar-xs me-2" style="background-image: url(./static/avatars/001f.jpg)"> </span>
                                Maryjo Lebarree
                              </td>
                              <td class="sort-city">Hantai, China</td>
                              <td class="sort-status">
                                <span class="badge bg-danger-lt">Inactive</span>
                              </td>
                              <td class="sort-date">July 17, 2024</td>
                              <td class="sort-tags">
                                <div class="badges-list">
                                  <span class="badge">Event</span>
                                  <span class="badge">Tickets</span>
                                </div>
                              </td>
                              <td class="sort-category py-0">
                                <span class="on-unchecked"> Individual </span>
                                <div class="on-checked">
                                  <div class="d-flex justify-content-end">
                                    <a href="#" class="btn btn-2 btn-icon" aria-label="Button">
                                      <!-- Download SVG icon from http://tabler.io/icons/icon/dots -->
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
                                        <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                      </svg>
                                    </a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  class="form-check-input m-0 align-middle table-selectable-check"
                                  type="checkbox"
                                  aria-label="Select invoice"
                                  value="true"
                                />
                              </td>
                              <td class="sort-name">
                                <span class="avatar avatar-xs me-2" style="background-image: url(./static/avatars/004m.jpg)"> </span>
                                Egan Poetz
                              </td>
                              <td class="sort-city">Villaguay, Argentina</td>
                              <td class="sort-status">
                                <span class="badge bg-success-lt">Active</span>
                              </td>
                              <td class="sort-date">November 22, 2024</td>
                              <td class="sort-tags">
                                <div class="badges-list">
                                  <span class="badge">QTA</span>
                                  <span class="badge">Event</span>
                                  <span class="badge">Tickets</span>
                                  <span class="badge">TODO</span>
                                </div>
                              </td>
                              <td class="sort-category py-0">
                                <span class="on-unchecked"> Event </span>
                                <div class="on-checked">
                                  <div class="d-flex justify-content-end">
                                    <a href="#" class="btn btn-2 btn-icon" aria-label="Button">
                                      <!-- Download SVG icon from http://tabler.io/icons/icon/dots -->
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
                                        <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                      </svg>
                                    </a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  class="form-check-input m-0 align-middle table-selectable-check"
                                  type="checkbox"
                                  aria-label="Select invoice"
                                  value="true"
                                />
                              </td>
                              <td class="sort-name">
                                <span class="avatar avatar-xs me-2" style="background-image: url(./static/avatars/002f.jpg)"> </span>
                                Kellie Skingley
                              </td>
                              <td class="sort-city">Sidon, Lebanon</td>
                              <td class="sort-status">
                                <span class="badge bg-danger-lt">Inactive</span>
                              </td>
                              <td class="sort-date">November 29, 2024</td>
                              <td class="sort-tags">
                                <div class="badges-list">
                                  <span class="badge">Event</span>
                                  <span class="badge">Tickets</span>
                                </div>
                              </td>
                              <td class="sort-category py-0">
                                <span class="on-unchecked"> Ticket </span>
                                <div class="on-checked">
                                  <div class="d-flex justify-content-end">
                                    <a href="#" class="btn btn-2 btn-icon" aria-label="Button">
                                      <!-- Download SVG icon from http://tabler.io/icons/icon/dots -->
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
                                        <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                      </svg>
                                    </a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  class="form-check-input m-0 align-middle table-selectable-check"
                                  type="checkbox"
                                  aria-label="Select invoice"
                                  value="true"
                                />
                              </td>
                              <td class="sort-name">
                                <span class="avatar avatar-xs me-2" style="background-image: url(./static/avatars/003f.jpg)"> </span>
                                Christabel Charlwood
                              </td>
                              <td class="sort-city">Recarei, Portugal</td>
                              <td class="sort-status">
                                <span class="badge bg-danger-lt">Inactive</span>
                              </td>
                              <td class="sort-date">May 30, 2024</td>
                              <td class="sort-tags">
                                <div class="badges-list">
                                  <span class="badge">QTA</span>
                                  <span class="badge">Event</span>
                                </div>
                              </td>
                              <td class="sort-category py-0">
                                <span class="on-unchecked"> Agencies </span>
                                <div class="on-checked">
                                  <div class="d-flex justify-content-end">
                                    <a href="#" class="btn btn-2 btn-icon" aria-label="Button">
                                      <!-- Download SVG icon from http://tabler.io/icons/icon/dots -->
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
                                        <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                      </svg>
                                    </a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  class="form-check-input m-0 align-middle table-selectable-check"
                                  type="checkbox"
                                  aria-label="Select invoice"
                                  value="true"
                                />
                              </td>
                              <td class="sort-name">
                                <span class="avatar avatar-xs me-2" style="background-image: url(./static/avatars/063m.jpg)"> </span>
                                Haskel Shelper
                              </td>
                              <td class="sort-city">Porto Alto, Portugal</td>
                              <td class="sort-status">
                                <span class="badge bg-danger-lt">Inactive</span>
                              </td>
                              <td class="sort-date">January 01, 2024</td>
                              <td class="sort-tags">
                                <div class="badges-list">
                                  <span class="badge">QTA</span>
                                  <span class="badge">Event</span>
                                </div>
                              </td>
                              <td class="sort-category py-0">
                                <span class="on-unchecked"> Agencies </span>
                                <div class="on-checked">
                                  <div class="d-flex justify-content-end">
                                    <a href="#" class="btn btn-2 btn-icon" aria-label="Button">
                                      <!-- Download SVG icon from http://tabler.io/icons/icon/dots -->
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
                                        <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                      </svg>
                                    </a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  class="form-check-input m-0 align-middle table-selectable-check"
                                  type="checkbox"
                                  aria-label="Select invoice"
                                  value="true"
                                />
                              </td>
                              <td class="sort-name">
                                <span class="avatar avatar-xs me-2" style="background-image: url(./static/avatars/006m.jpg)"> </span>
                                Lorry Mion
                              </td>
                              <td class="sort-city">Embu, Kenya</td>
                              <td class="sort-status">
                                <span class="badge">Requested</span>
                              </td>
                              <td class="sort-date">August 30, 2024</td>
                              <td class="sort-tags">
                                <div class="badges-list">
                                  <span class="badge">Tickets</span>
                                </div>
                              </td>
                              <td class="sort-category py-0">
                                <span class="on-unchecked"> Individual </span>
                                <div class="on-checked">
                                  <div class="d-flex justify-content-end">
                                    <a href="#" class="btn btn-2 btn-icon" aria-label="Button">
                                      <!-- Download SVG icon from http://tabler.io/icons/icon/dots -->
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
                                        <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                      </svg>
                                    </a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  class="form-check-input m-0 align-middle table-selectable-check"
                                  type="checkbox"
                                  aria-label="Select invoice"
                                  value="true"
                                />
                              </td>
                              <td class="sort-name">
                                <span class="avatar avatar-xs me-2" style="background-image: url(./static/avatars/004f.jpg)"> </span>
                                Leesa Beaty
                              </td>
                              <td class="sort-city">Quaraí, Brazil</td>
                              <td class="sort-status">
                                <span class="badge bg-success-lt">Active</span>
                              </td>
                              <td class="sort-date">January 01, 2024</td>
                              <td class="sort-tags">
                                <div class="badges-list">
                                  <span class="badge">QTA</span>
                                  <span class="badge">Event</span>
                                  <span class="badge">Tickets</span>
                                  <span class="badge">TODO</span>
                                </div>
                              </td>
                              <td class="sort-category py-0">
                                <span class="on-unchecked"> Agencies </span>
                                <div class="on-checked">
                                  <div class="d-flex justify-content-end">
                                    <a href="#" class="btn btn-2 btn-icon" aria-label="Button">
                                      <!-- Download SVG icon from http://tabler.io/icons/icon/dots -->
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
                                        <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                      </svg>
                                    </a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  class="form-check-input m-0 align-middle table-selectable-check"
                                  type="checkbox"
                                  aria-label="Select invoice"
                                  value="true"
                                />
                              </td>
                              <td class="sort-name">
                                <span class="avatar avatar-xs me-2" style="background-image: url(./static/avatars/007m.jpg)"> </span>
                                Perren Keemar
                              </td>
                              <td class="sort-city">Dadiya, Nigeria</td>
                              <td class="sort-status">
                                <span class="badge bg-danger-lt">Inactive</span>
                              </td>
                              <td class="sort-date">September 13, 2024</td>
                              <td class="sort-tags">
                                <div class="badges-list">
                                  <span class="badge">QTA</span>
                                  <span class="badge">Event</span>
                                </div>
                              </td>
                              <td class="sort-category py-0">
                                <span class="on-unchecked"> Individual </span>
                                <div class="on-checked">
                                  <div class="d-flex justify-content-end">
                                    <a href="#" class="btn btn-2 btn-icon" aria-label="Button">
                                      <!-- Download SVG icon from http://tabler.io/icons/icon/dots -->
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
                                        <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                      </svg>
                                    </a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  class="form-check-input m-0 align-middle table-selectable-check"
                                  type="checkbox"
                                  aria-label="Select invoice"
                                  value="true"
                                />
                              </td>
                              <td class="sort-name">
                                <span class="avatar avatar-xs me-2"> SA </span>
                                Sunny Airey
                              </td>
                              <td class="sort-city">Hamburg, Germany</td>
                              <td class="sort-status">
                                <span class="badge bg-success-lt">Active</span>
                              </td>
                              <td class="sort-date">February 08, 2024</td>
                              <td class="sort-tags">
                                <div class="badges-list">
                                  <span class="badge">QTA</span>
                                  <span class="badge">Event</span>
                                  <span class="badge">Tickets</span>
                                  <span class="badge">TODO</span>
                                </div>
                              </td>
                              <td class="sort-category py-0">
                                <span class="on-unchecked"> Event </span>
                                <div class="on-checked">
                                  <div class="d-flex justify-content-end">
                                    <a href="#" class="btn btn-2 btn-icon" aria-label="Button">
                                      <!-- Download SVG icon from http://tabler.io/icons/icon/dots -->
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
                                        <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                      </svg>
                                    </a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  class="form-check-input m-0 align-middle table-selectable-check"
                                  type="checkbox"
                                  aria-label="Select invoice"
                                  value="true"
                                />
                              </td>
                              <td class="sort-name">
                                <span class="avatar avatar-xs me-2" style="background-image: url(./static/avatars/009m.jpg)"> </span>
                                Geoffry Flaunders
                              </td>
                              <td class="sort-city">Kavār, Iran</td>
                              <td class="sort-status">
                                <span class="badge bg-success-lt">Active</span>
                              </td>
                              <td class="sort-date">June 17, 2024</td>
                              <td class="sort-tags">
                                <div class="badges-list">
                                  <span class="badge">QTA</span>
                                  <span class="badge">Event</span>
                                  <span class="badge">Tickets</span>
                                  <span class="badge">TODO</span>
                                </div>
                              </td>
                              <td class="sort-category py-0">
                                <span class="on-unchecked"> Event </span>
                                <div class="on-checked">
                                  <div class="d-flex justify-content-end">
                                    <a href="#" class="btn btn-2 btn-icon" aria-label="Button">
                                      <!-- Download SVG icon from http://tabler.io/icons/icon/dots -->
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
                                        <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                      </svg>
                                    </a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  class="form-check-input m-0 align-middle table-selectable-check"
                                  type="checkbox"
                                  aria-label="Select invoice"
                                  value="true"
                                />
                              </td>
                              <td class="sort-name">
                                <span class="avatar avatar-xs me-2" style="background-image: url(./static/avatars/010m.jpg)"> </span>
                                Thatcher Keel
                              </td>
                              <td class="sort-city">Nanchoc, Peru</td>
                              <td class="sort-status">
                                <span class="badge bg-danger-lt">Inactive</span>
                              </td>
                              <td class="sort-date">November 11, 2024</td>
                              <td class="sort-tags">
                                <div class="badges-list">
                                  <span class="badge">Event</span>
                                  <span class="badge">Tickets</span>
                                </div>
                              </td>
                              <td class="sort-category py-0">
                                <span class="on-unchecked"> Ticket </span>
                                <div class="on-checked">
                                  <div class="d-flex justify-content-end">
                                    <a href="#" class="btn btn-2 btn-icon" aria-label="Button">
                                      <!-- Download SVG icon from http://tabler.io/icons/icon/dots -->
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
                                        <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                      </svg>
                                    </a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  class="form-check-input m-0 align-middle table-selectable-check"
                                  type="checkbox"
                                  aria-label="Select invoice"
                                  value="true"
                                />
                              </td>
                              <td class="sort-name">
                                <span class="avatar avatar-xs me-2" style="background-image: url(./static/avatars/005f.jpg)"> </span>
                                Dyann Escala
                              </td>
                              <td class="sort-city">Nóvita, Colombia</td>
                              <td class="sort-status">
                                <span class="badge bg-success-lt">Active</span>
                              </td>
                              <td class="sort-date">January 01, 2024</td>
                              <td class="sort-tags">
                                <div class="badges-list">
                                  <span class="badge">QTA</span>
                                  <span class="badge">Event</span>
                                  <span class="badge">Tickets</span>
                                  <span class="badge">TODO</span>
                                </div>
                              </td>
                              <td class="sort-category py-0">
                                <span class="on-unchecked"> Agencies </span>
                                <div class="on-checked">
                                  <div class="d-flex justify-content-end">
                                    <a href="#" class="btn btn-2 btn-icon" aria-label="Button">
                                      <!-- Download SVG icon from http://tabler.io/icons/icon/dots -->
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
                                        <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                      </svg>
                                    </a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  class="form-check-input m-0 align-middle table-selectable-check"
                                  type="checkbox"
                                  aria-label="Select invoice"
                                  value="true"
                                />
                              </td>
                              <td class="sort-name">
                                <span class="avatar avatar-xs me-2" style="background-image: url(./static/avatars/006f.jpg)"> </span>
                                Avivah Mugleston
                              </td>
                              <td class="sort-city">Kista, Sweden</td>
                              <td class="sort-status">
                                <span class="badge bg-success-lt">Active</span>
                              </td>
                              <td class="sort-date">April 08, 2024</td>
                              <td class="sort-tags">
                                <div class="badges-list">
                                  <span class="badge">QTA</span>
                                  <span class="badge">Event</span>
                                  <span class="badge">Tickets</span>
                                  <span class="badge">TODO</span>
                                </div>
                              </td>
                              <td class="sort-category py-0">
                                <span class="on-unchecked"> Event </span>
                                <div class="on-checked">
                                  <div class="d-flex justify-content-end">
                                    <a href="#" class="btn btn-2 btn-icon" aria-label="Button">
                                      <!-- Download SVG icon from http://tabler.io/icons/icon/dots -->
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
                                        <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                      </svg>
                                    </a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  class="form-check-input m-0 align-middle table-selectable-check"
                                  type="checkbox"
                                  aria-label="Select invoice"
                                  value="true"
                                />
                              </td>
                              <td class="sort-name">
                                <span class="avatar avatar-xs me-2"> AA </span>
                                Arlie Armstead
                              </td>
                              <td class="sort-city">Jacobina, Brazil</td>
                              <td class="sort-status">
                                <span class="badge">Requested</span>
                              </td>
                              <td class="sort-date">January 01, 2024</td>
                              <td class="sort-tags">
                                <div class="badges-list">
                                  <span class="badge">QTA</span>
                                  <span class="badge">Event</span>
                                </div>
                              </td>
                              <td class="sort-category py-0">
                                <span class="on-unchecked"> Agencies </span>
                                <div class="on-checked">
                                  <div class="d-flex justify-content-end">
                                    <a href="#" class="btn btn-2 btn-icon" aria-label="Button">
                                      <!-- Download SVG icon from http://tabler.io/icons/icon/dots -->
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
                                        <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                      </svg>
                                    </a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  class="form-check-input m-0 align-middle table-selectable-check"
                                  type="checkbox"
                                  aria-label="Select invoice"
                                  value="true"
                                />
                              </td>
                              <td class="sort-name">
                                <span class="avatar avatar-xs me-2" style="background-image: url(./static/avatars/008f.jpg)"> </span>
                                Tessie Curzon
                              </td>
                              <td class="sort-city">Hetang, China</td>
                              <td class="sort-status">
                                <span class="badge bg-danger-lt">Inactive</span>
                              </td>
                              <td class="sort-date">January 01, 2024</td>
                              <td class="sort-tags">
                                <div class="badges-list">
                                  <span class="badge">QTA</span>
                                  <span class="badge">Event</span>
                                </div>
                              </td>
                              <td class="sort-category py-0">
                                <span class="on-unchecked"> Agencies </span>
                                <div class="on-checked">
                                  <div class="d-flex justify-content-end">
                                    <a href="#" class="btn btn-2 btn-icon" aria-label="Button">
                                      <!-- Download SVG icon from http://tabler.io/icons/icon/dots -->
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
                                        <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                      </svg>
                                    </a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  class="form-check-input m-0 align-middle table-selectable-check"
                                  type="checkbox"
                                  aria-label="Select invoice"
                                  value="true"
                                />
                              </td>
                              <td class="sort-name">
                                <span class="avatar avatar-xs me-2" style="background-image: url(./static/avatars/009f.jpg)"> </span>
                                Flossi Uttley
                              </td>
                              <td class="sort-city">Gaomiaoji, China</td>
                              <td class="sort-status">
                                <span class="badge bg-success-lt">Active</span>
                              </td>
                              <td class="sort-date">September 18, 2024</td>
                              <td class="sort-tags">
                                <div class="badges-list">
                                  <span class="badge">QTA</span>
                                  <span class="badge">Event</span>
                                  <span class="badge">Tickets</span>
                                  <span class="badge">TODO</span>
                                </div>
                              </td>
                              <td class="sort-category py-0">
                                <span class="on-unchecked"> Individual </span>
                                <div class="on-checked">
                                  <div class="d-flex justify-content-end">
                                    <a href="#" class="btn btn-2 btn-icon" aria-label="Button">
                                      <!-- Download SVG icon from http://tabler.io/icons/icon/dots -->
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
                                        <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                      </svg>
                                    </a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  class="form-check-input m-0 align-middle table-selectable-check"
                                  type="checkbox"
                                  aria-label="Select invoice"
                                  value="true"
                                />
                              </td>
                              <td class="sort-name">
                                <span class="avatar avatar-xs me-2" style="background-image: url(./static/avatars/010f.jpg)"> </span>
                                Cesya Spritt
                              </td>
                              <td class="sort-city">Göteborg, Sweden</td>
                              <td class="sort-status">
                                <span class="badge">Requested</span>
                              </td>
                              <td class="sort-date">January 01, 2024</td>
                              <td class="sort-tags">
                                <div class="badges-list">
                                  <span class="badge">Tickets</span>
                                </div>
                              </td>
                              <td class="sort-category py-0">
                                <span class="on-unchecked"> Agencies </span>
                                <div class="on-checked">
                                  <div class="d-flex justify-content-end">
                                    <a href="#" class="btn btn-2 btn-icon" aria-label="Button">
                                      <!-- Download SVG icon from http://tabler.io/icons/icon/dots -->
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
                                        <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                      </svg>
                                    </a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  class="form-check-input m-0 align-middle table-selectable-check"
                                  type="checkbox"
                                  aria-label="Select invoice"
                                  value="true"
                                />
                              </td>
                              <td class="sort-name">
                                <span class="avatar avatar-xs me-2" style="background-image: url(./static/avatars/011m.jpg)"> </span>
                                Johnnie Gilby
                              </td>
                              <td class="sort-city">Panayagan, Indonesia</td>
                              <td class="sort-status">
                                <span class="badge">Requested</span>
                              </td>
                              <td class="sort-date">January 01, 2024</td>
                              <td class="sort-tags">
                                <div class="badges-list">
                                  <span class="badge">Tickets</span>
                                </div>
                              </td>
                              <td class="sort-category py-0">
                                <span class="on-unchecked"> Agencies </span>
                                <div class="on-checked">
                                  <div class="d-flex justify-content-end">
                                    <a href="#" class="btn btn-2 btn-icon" aria-label="Button">
                                      <!-- Download SVG icon from http://tabler.io/icons/icon/dots -->
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
                                        <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                      </svg>
                                    </a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  class="form-check-input m-0 align-middle table-selectable-check"
                                  type="checkbox"
                                  aria-label="Select invoice"
                                  value="true"
                                />
                              </td>
                              <td class="sort-name">
                                <span class="avatar avatar-xs me-2" style="background-image: url(./static/avatars/012m.jpg)"> </span>
                                Ban Rzehor
                              </td>
                              <td class="sort-city">Denver, United States</td>
                              <td class="sort-status">
                                <span class="badge bg-success-lt">Active</span>
                              </td>
                              <td class="sort-date">December 22, 2024</td>
                              <td class="sort-tags">
                                <div class="badges-list">
                                  <span class="badge">QTA</span>
                                  <span class="badge">Event</span>
                                  <span class="badge">Tickets</span>
                                  <span class="badge">TODO</span>
                                </div>
                              </td>
                              <td class="sort-category py-0">
                                <span class="on-unchecked"> Event </span>
                                <div class="on-checked">
                                  <div class="d-flex justify-content-end">
                                    <a href="#" class="btn btn-2 btn-icon" aria-label="Button">
                                      <!-- Download SVG icon from http://tabler.io/icons/icon/dots -->
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
                                        <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                      </svg>
                                    </a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  class="form-check-input m-0 align-middle table-selectable-check"
                                  type="checkbox"
                                  aria-label="Select invoice"
                                  value="true"
                                />
                              </td>
                              <td class="sort-name">
                                <span class="avatar avatar-xs me-2" style="background-image: url(./static/avatars/011f.jpg)"> </span>
                                Carroll Erat
                              </td>
                              <td class="sort-city">Šentilj v Slov. Goricah, Slovenia</td>
                              <td class="sort-status">
                                <span class="badge bg-success-lt">Active</span>
                              </td>
                              <td class="sort-date">August 06, 2024</td>
                              <td class="sort-tags">
                                <div class="badges-list">
                                  <span class="badge">QTA</span>
                                  <span class="badge">Event</span>
                                  <span class="badge">Tickets</span>
                                  <span class="badge">TODO</span>
                                </div>
                              </td>
                              <td class="sort-category py-0">
                                <span class="on-unchecked"> Event </span>
                                <div class="on-checked">
                                  <div class="d-flex justify-content-end">
                                    <a href="#" class="btn btn-2 btn-icon" aria-label="Button">
                                      <!-- Download SVG icon from http://tabler.io/icons/icon/dots -->
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
                                        <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                      </svg>
                                    </a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  class="form-check-input m-0 align-middle table-selectable-check"
                                  type="checkbox"
                                  aria-label="Select invoice"
                                  value="true"
                                />
                              </td>
                              <td class="sort-name">
                                <span class="avatar avatar-xs me-2" style="background-image: url(./static/avatars/012f.jpg)"> </span>
                                Marsha Labat
                              </td>
                              <td class="sort-city">Cabrero, Chile</td>
                              <td class="sort-status">
                                <span class="badge bg-success-lt">Active</span>
                              </td>
                              <td class="sort-date">January 01, 2024</td>
                              <td class="sort-tags">
                                <div class="badges-list">
                                  <span class="badge">QTA</span>
                                  <span class="badge">Event</span>
                                  <span class="badge">Tickets</span>
                                  <span class="badge">TODO</span>
                                </div>
                              </td>
                              <td class="sort-category py-0">
                                <span class="on-unchecked"> Agencies </span>
                                <div class="on-checked">
                                  <div class="d-flex justify-content-end">
                                    <a href="#" class="btn btn-2 btn-icon" aria-label="Button">
                                      <!-- Download SVG icon from http://tabler.io/icons/icon/dots -->
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
                                        <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                      </svg>
                                    </a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  class="form-check-input m-0 align-middle table-selectable-check"
                                  type="checkbox"
                                  aria-label="Select invoice"
                                  value="true"
                                />
                              </td>
                              <td class="sort-name">
                                <span class="avatar avatar-xs me-2" style="background-image: url(./static/avatars/013m.jpg)"> </span>
                                Elston Muffett
                              </td>
                              <td class="sort-city">Terara, Indonesia</td>
                              <td class="sort-status">
                                <span class="badge">Requested</span>
                              </td>
                              <td class="sort-date">April 09, 2024</td>
                              <td class="sort-tags">
                                <div class="badges-list">
                                  <span class="badge">Tickets</span>
                                </div>
                              </td>
                              <td class="sort-category py-0">
                                <span class="on-unchecked"> Ticket </span>
                                <div class="on-checked">
                                  <div class="d-flex justify-content-end">
                                    <a href="#" class="btn btn-2 btn-icon" aria-label="Button">
                                      <!-- Download SVG icon from http://tabler.io/icons/icon/dots -->
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
                                        <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                      </svg>
                                    </a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  class="form-check-input m-0 align-middle table-selectable-check"
                                  type="checkbox"
                                  aria-label="Select invoice"
                                  value="true"
                                />
                              </td>
                              <td class="sort-name">
                                <span class="avatar avatar-xs me-2" style="background-image: url(./static/avatars/013f.jpg)"> </span>
                                Leigha Gorce
                              </td>
                              <td class="sort-city">Barrie, Canada</td>
                              <td class="sort-status">
                                <span class="badge bg-success-lt">Active</span>
                              </td>
                              <td class="sort-date">March 21, 2024</td>
                              <td class="sort-tags">
                                <div class="badges-list">
                                  <span class="badge">QTA</span>
                                  <span class="badge">Event</span>
                                  <span class="badge">Tickets</span>
                                  <span class="badge">TODO</span>
                                </div>
                              </td>
                              <td class="sort-category py-0">
                                <span class="on-unchecked"> Ticket </span>
                                <div class="on-checked">
                                  <div class="d-flex justify-content-end">
                                    <a href="#" class="btn btn-2 btn-icon" aria-label="Button">
                                      <!-- Download SVG icon from http://tabler.io/icons/icon/dots -->
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
                                        <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                      </svg>
                                    </a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  class="form-check-input m-0 align-middle table-selectable-check"
                                  type="checkbox"
                                  aria-label="Select invoice"
                                  value="true"
                                />
                              </td>
                              <td class="sort-name">
                                <span class="avatar avatar-xs me-2"> TB </span>
                                Tallie Bettis
                              </td>
                              <td class="sort-city">Pojan, Albania</td>
                              <td class="sort-status">
                                <span class="badge bg-danger-lt">Inactive</span>
                              </td>
                              <td class="sort-date">January 01, 2024</td>
                              <td class="sort-tags">
                                <div class="badges-list">
                                  <span class="badge">QTA</span>
                                  <span class="badge">Event</span>
                                </div>
                              </td>
                              <td class="sort-category py-0">
                                <span class="on-unchecked"> Agencies </span>
                                <div class="on-checked">
                                  <div class="d-flex justify-content-end">
                                    <a href="#" class="btn btn-2 btn-icon" aria-label="Button">
                                      <!-- Download SVG icon from http://tabler.io/icons/icon/dots -->
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
                                        <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                      </svg>
                                    </a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  class="form-check-input m-0 align-middle table-selectable-check"
                                  type="checkbox"
                                  aria-label="Select invoice"
                                  value="true"
                                />
                              </td>
                              <td class="sort-name">
                                <span class="avatar avatar-xs me-2" style="background-image: url(./static/avatars/015f.jpg)"> </span>
                                Merrily Garforth
                              </td>
                              <td class="sort-city">Tupaciguara, Brazil</td>
                              <td class="sort-status">
                                <span class="badge bg-success-lt">Active</span>
                              </td>
                              <td class="sort-date">January 01, 2024</td>
                              <td class="sort-tags">
                                <div class="badges-list">
                                  <span class="badge">QTA</span>
                                  <span class="badge">Event</span>
                                  <span class="badge">Tickets</span>
                                  <span class="badge">TODO</span>
                                </div>
                              </td>
                              <td class="sort-category py-0">
                                <span class="on-unchecked"> Agencies </span>
                                <div class="on-checked">
                                  <div class="d-flex justify-content-end">
                                    <a href="#" class="btn btn-2 btn-icon" aria-label="Button">
                                      <!-- Download SVG icon from http://tabler.io/icons/icon/dots -->
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
                                        <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                      </svg>
                                    </a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  class="form-check-input m-0 align-middle table-selectable-check"
                                  type="checkbox"
                                  aria-label="Select invoice"
                                  value="true"
                                />
                              </td>
                              <td class="sort-name">
                                <span class="avatar avatar-xs me-2"> EB </span>
                                Errol Blackley
                              </td>
                              <td class="sort-city">Poroj, Macedonia</td>
                              <td class="sort-status">
                                <span class="badge">Requested</span>
                              </td>
                              <td class="sort-date">January 01, 2024</td>
                              <td class="sort-tags">
                                <div class="badges-list">
                                  <span class="badge">Tickets</span>
                                </div>
                              </td>
                              <td class="sort-category py-0">
                                <span class="on-unchecked"> Agencies </span>
                                <div class="on-checked">
                                  <div class="d-flex justify-content-end">
                                    <a href="#" class="btn btn-2 btn-icon" aria-label="Button">
                                      <!-- Download SVG icon from http://tabler.io/icons/icon/dots -->
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
                                        <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                      </svg>
                                    </a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  class="form-check-input m-0 align-middle table-selectable-check"
                                  type="checkbox"
                                  aria-label="Select invoice"
                                  value="true"
                                />
                              </td>
                              <td class="sort-name">
                                <span class="avatar avatar-xs me-2" style="background-image: url(./static/avatars/016f.jpg)"> </span>
                                Ninon Don
                              </td>
                              <td class="sort-city">Baiguo, China</td>
                              <td class="sort-status">
                                <span class="badge bg-success-lt">Active</span>
                              </td>
                              <td class="sort-date">November 09, 2024</td>
                              <td class="sort-tags">
                                <div class="badges-list">
                                  <span class="badge">QTA</span>
                                  <span class="badge">Event</span>
                                  <span class="badge">Tickets</span>
                                  <span class="badge">TODO</span>
                                </div>
                              </td>
                              <td class="sort-category py-0">
                                <span class="on-unchecked"> Ticket </span>
                                <div class="on-checked">
                                  <div class="d-flex justify-content-end">
                                    <a href="#" class="btn btn-2 btn-icon" aria-label="Button">
                                      <!-- Download SVG icon from http://tabler.io/icons/icon/dots -->
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
                                        <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                      </svg>
                                    </a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  class="form-check-input m-0 align-middle table-selectable-check"
                                  type="checkbox"
                                  aria-label="Select invoice"
                                  value="true"
                                />
                              </td>
                              <td class="sort-name">
                                <span class="avatar avatar-xs me-2" style="background-image: url(./static/avatars/015m.jpg)"> </span>
                                Delaney Cairney
                              </td>
                              <td class="sort-city">Linhares, Portugal</td>
                              <td class="sort-status">
                                <span class="badge bg-danger-lt">Inactive</span>
                              </td>
                              <td class="sort-date">January 01, 2024</td>
                              <td class="sort-tags">
                                <div class="badges-list">
                                  <span class="badge">QTA</span>
                                  <span class="badge">Event</span>
                                </div>
                              </td>
                              <td class="sort-category py-0">
                                <span class="on-unchecked"> Agencies </span>
                                <div class="on-checked">
                                  <div class="d-flex justify-content-end">
                                    <a href="#" class="btn btn-2 btn-icon" aria-label="Button">
                                      <!-- Download SVG icon from http://tabler.io/icons/icon/dots -->
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
                                        <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                      </svg>
                                    </a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  class="form-check-input m-0 align-middle table-selectable-check"
                                  type="checkbox"
                                  aria-label="Select invoice"
                                  value="true"
                                />
                              </td>
                              <td class="sort-name">
                                <span class="avatar avatar-xs me-2" style="background-image: url(./static/avatars/017f.jpg)"> </span>
                                Gratia Gooley
                              </td>
                              <td class="sort-city">Ruma, Serbia</td>
                              <td class="sort-status">
                                <span class="badge bg-success-lt">Active</span>
                              </td>
                              <td class="sort-date">January 11, 2024</td>
                              <td class="sort-tags">
                                <div class="badges-list">
                                  <span class="badge">QTA</span>
                                  <span class="badge">Event</span>
                                  <span class="badge">Tickets</span>
                                  <span class="badge">TODO</span>
                                </div>
                              </td>
                              <td class="sort-category py-0">
                                <span class="on-unchecked"> Event </span>
                                <div class="on-checked">
                                  <div class="d-flex justify-content-end">
                                    <a href="#" class="btn btn-2 btn-icon" aria-label="Button">
                                      <!-- Download SVG icon from http://tabler.io/icons/icon/dots -->
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
                                        <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                      </svg>
                                    </a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  class="form-check-input m-0 align-middle table-selectable-check"
                                  type="checkbox"
                                  aria-label="Select invoice"
                                  value="true"
                                />
                              </td>
                              <td class="sort-name">
                                <span class="avatar avatar-xs me-2" style="background-image: url(./static/avatars/018f.jpg)"> </span>
                                Odelinda McCosh
                              </td>
                              <td class="sort-city">Chengxiang, China</td>
                              <td class="sort-status">
                                <span class="badge bg-success-lt">Active</span>
                              </td>
                              <td class="sort-date">January 01, 2024</td>
                              <td class="sort-tags">
                                <div class="badges-list">
                                  <span class="badge">QTA</span>
                                  <span class="badge">Event</span>
                                  <span class="badge">Tickets</span>
                                  <span class="badge">TODO</span>
                                </div>
                              </td>
                              <td class="sort-category py-0">
                                <span class="on-unchecked"> Agencies </span>
                                <div class="on-checked">
                                  <div class="d-flex justify-content-end">
                                    <a href="#" class="btn btn-2 btn-icon" aria-label="Button">
                                      <!-- Download SVG icon from http://tabler.io/icons/icon/dots -->
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
                                        <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                      </svg>
                                    </a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  class="form-check-input m-0 align-middle table-selectable-check"
                                  type="checkbox"
                                  aria-label="Select invoice"
                                  value="true"
                                />
                              </td>
                              <td class="sort-name">
                                <span class="avatar avatar-xs me-2" style="background-image: url(./static/avatars/016m.jpg)"> </span>
                                Wilburt Siegertsz
                              </td>
                              <td class="sort-city">Veiga, Portugal</td>
                              <td class="sort-status">
                                <span class="badge">Requested</span>
                              </td>
                              <td class="sort-date">March 12, 2024</td>
                              <td class="sort-tags">
                                <div class="badges-list">
                                  <span class="badge">Tickets</span>
                                </div>
                              </td>
                              <td class="sort-category py-0">
                                <span class="on-unchecked"> Ticket </span>
                                <div class="on-checked">
                                  <div class="d-flex justify-content-end">
                                    <a href="#" class="btn btn-2 btn-icon" aria-label="Button">
                                      <!-- Download SVG icon from http://tabler.io/icons/icon/dots -->
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
                                        <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                      </svg>
                                    </a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  class="form-check-input m-0 align-middle table-selectable-check"
                                  type="checkbox"
                                  aria-label="Select invoice"
                                  value="true"
                                />
                              </td>
                              <td class="sort-name">
                                <span class="avatar avatar-xs me-2" style="background-image: url(./static/avatars/019f.jpg)"> </span>
                                Julietta Coke
                              </td>
                              <td class="sort-city">Malaga, Philippines</td>
                              <td class="sort-status">
                                <span class="badge bg-danger-lt">Inactive</span>
                              </td>
                              <td class="sort-date">January 01, 2024</td>
                              <td class="sort-tags">
                                <div class="badges-list">
                                  <span class="badge">QTA</span>
                                  <span class="badge">Event</span>
                                </div>
                              </td>
                              <td class="sort-category py-0">
                                <span class="on-unchecked"> Agencies </span>
                                <div class="on-checked">
                                  <div class="d-flex justify-content-end">
                                    <a href="#" class="btn btn-2 btn-icon" aria-label="Button">
                                      <!-- Download SVG icon from http://tabler.io/icons/icon/dots -->
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
                                        <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                      </svg>
                                    </a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  class="form-check-input m-0 align-middle table-selectable-check"
                                  type="checkbox"
                                  aria-label="Select invoice"
                                  value="true"
                                />
                              </td>
                              <td class="sort-name">
                                <span class="avatar avatar-xs me-2" style="background-image: url(./static/avatars/017m.jpg)"> </span>
                                Portie Christou
                              </td>
                              <td class="sort-city">Gaoping, China</td>
                              <td class="sort-status">
                                <span class="badge bg-success-lt">Active</span>
                              </td>
                              <td class="sort-date">April 28, 2024</td>
                              <td class="sort-tags">
                                <div class="badges-list">
                                  <span class="badge">Event</span>
                                  <span class="badge">Tickets</span>
                                </div>
                              </td>
                              <td class="sort-category py-0">
                                <span class="on-unchecked"> Event </span>
                                <div class="on-checked">
                                  <div class="d-flex justify-content-end">
                                    <a href="#" class="btn btn-2 btn-icon" aria-label="Button">
                                      <!-- Download SVG icon from http://tabler.io/icons/icon/dots -->
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
                                        <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                      </svg>
                                    </a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  class="form-check-input m-0 align-middle table-selectable-check"
                                  type="checkbox"
                                  aria-label="Select invoice"
                                  value="true"
                                />
                              </td>
                              <td class="sort-name">
                                <span class="avatar avatar-xs me-2" style="background-image: url(./static/avatars/018m.jpg)"> </span>
                                Emmott Dowsett
                              </td>
                              <td class="sort-city">Roanoke, United States</td>
                              <td class="sort-status">
                                <span class="badge bg-success-lt">Active</span>
                              </td>
                              <td class="sort-date">October 22, 2024</td>
                              <td class="sort-tags">
                                <div class="badges-list">
                                  <span class="badge">QTA</span>
                                  <span class="badge">Event</span>
                                  <span class="badge">Tickets</span>
                                  <span class="badge">TODO</span>
                                </div>
                              </td>
                              <td class="sort-category py-0">
                                <span class="on-unchecked"> Agencies </span>
                                <div class="on-checked">
                                  <div class="d-flex justify-content-end">
                                    <a href="#" class="btn btn-2 btn-icon" aria-label="Button">
                                      <!-- Download SVG icon from http://tabler.io/icons/icon/dots -->
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
                                        <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                      </svg>
                                    </a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  class="form-check-input m-0 align-middle table-selectable-check"
                                  type="checkbox"
                                  aria-label="Select invoice"
                                  value="true"
                                />
                              </td>
                              <td class="sort-name">
                                <span class="avatar avatar-xs me-2" style="background-image: url(./static/avatars/019m.jpg)"> </span>
                                Rooney Cassy
                              </td>
                              <td class="sort-city">Mulan, China</td>
                              <td class="sort-status">
                                <span class="badge bg-success-lt">Active</span>
                              </td>
                              <td class="sort-date">January 01, 2024</td>
                              <td class="sort-tags">
                                <div class="badges-list">
                                  <span class="badge">QTA</span>
                                  <span class="badge">Event</span>
                                  <span class="badge">Tickets</span>
                                  <span class="badge">TODO</span>
                                </div>
                              </td>
                              <td class="sort-category py-0">
                                <span class="on-unchecked"> Agencies </span>
                                <div class="on-checked">
                                  <div class="d-flex justify-content-end">
                                    <a href="#" class="btn btn-2 btn-icon" aria-label="Button">
                                      <!-- Download SVG icon from http://tabler.io/icons/icon/dots -->
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
                                        <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                      </svg>
                                    </a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  class="form-check-input m-0 align-middle table-selectable-check"
                                  type="checkbox"
                                  aria-label="Select invoice"
                                  value="true"
                                />
                              </td>
                              <td class="sort-name">
                                <span class="avatar avatar-xs me-2" style="background-image: url(./static/avatars/020m.jpg)"> </span>
                                Haze Hubbert
                              </td>
                              <td class="sort-city">El Arenal, Mexico</td>
                              <td class="sort-status">
                                <span class="badge bg-success-lt">Active</span>
                              </td>
                              <td class="sort-date">October 08, 2024</td>
                              <td class="sort-tags">
                                <div class="badges-list">
                                  <span class="badge">QTA</span>
                                  <span class="badge">Event</span>
                                  <span class="badge">Tickets</span>
                                  <span class="badge">TODO</span>
                                </div>
                              </td>
                              <td class="sort-category py-0">
                                <span class="on-unchecked"> Ticket </span>
                                <div class="on-checked">
                                  <div class="d-flex justify-content-end">
                                    <a href="#" class="btn btn-2 btn-icon" aria-label="Button">
                                      <!-- Download SVG icon from http://tabler.io/icons/icon/dots -->
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
                                        <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                      </svg>
                                    </a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  class="form-check-input m-0 align-middle table-selectable-check"
                                  type="checkbox"
                                  aria-label="Select invoice"
                                  value="true"
                                />
                              </td>
                              <td class="sort-name">
                                <span class="avatar avatar-xs me-2" style="background-image: url(./static/avatars/021m.jpg)"> </span>
                                Mata Codlin
                              </td>
                              <td class="sort-city">Mar del Plata, Argentina</td>
                              <td class="sort-status">
                                <span class="badge bg-success-lt">Active</span>
                              </td>
                              <td class="sort-date">June 16, 2024</td>
                              <td class="sort-tags">
                                <div class="badges-list">
                                  <span class="badge">QTA</span>
                                  <span class="badge">Event</span>
                                  <span class="badge">Tickets</span>
                                  <span class="badge">TODO</span>
                                </div>
                              </td>
                              <td class="sort-category py-0">
                                <span class="on-unchecked"> Event </span>
                                <div class="on-checked">
                                  <div class="d-flex justify-content-end">
                                    <a href="#" class="btn btn-2 btn-icon" aria-label="Button">
                                      <!-- Download SVG icon from http://tabler.io/icons/icon/dots -->
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
                                        <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                      </svg>
                                    </a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  class="form-check-input m-0 align-middle table-selectable-check"
                                  type="checkbox"
                                  aria-label="Select invoice"
                                  value="true"
                                />
                              </td>
                              <td class="sort-name">
                                <span class="avatar avatar-xs me-2" style="background-image: url(./static/avatars/022m.jpg)"> </span>
                                Parker Oaten
                              </td>
                              <td class="sort-city">Witzenhausen, Germany</td>
                              <td class="sort-status">
                                <span class="badge bg-success-lt">Active</span>
                              </td>
                              <td class="sort-date">May 07, 2024</td>
                              <td class="sort-tags">
                                <div class="badges-list">
                                  <span class="badge">QTA</span>
                                  <span class="badge">Event</span>
                                  <span class="badge">Tickets</span>
                                  <span class="badge">TODO</span>
                                </div>
                              </td>
                              <td class="sort-category py-0">
                                <span class="on-unchecked"> Individual </span>
                                <div class="on-checked">
                                  <div class="d-flex justify-content-end">
                                    <a href="#" class="btn btn-2 btn-icon" aria-label="Button">
                                      <!-- Download SVG icon from http://tabler.io/icons/icon/dots -->
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
                                        <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                      </svg>
                                    </a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  class="form-check-input m-0 align-middle table-selectable-check"
                                  type="checkbox"
                                  aria-label="Select invoice"
                                  value="true"
                                />
                              </td>
                              <td class="sort-name">
                                <span class="avatar avatar-xs me-2" style="background-image: url(./static/avatars/023m.jpg)"> </span>
                                Johannes Paternoster
                              </td>
                              <td class="sort-city">Pirallahı, Azerbaijan</td>
                              <td class="sort-status">
                                <span class="badge bg-success-lt">Active</span>
                              </td>
                              <td class="sort-date">September 23, 2024</td>
                              <td class="sort-tags">
                                <div class="badges-list">
                                  <span class="badge">QTA</span>
                                  <span class="badge">Event</span>
                                  <span class="badge">Tickets</span>
                                  <span class="badge">TODO</span>
                                </div>
                              </td>
                              <td class="sort-category py-0">
                                <span class="on-unchecked"> Agencies </span>
                                <div class="on-checked">
                                  <div class="d-flex justify-content-end">
                                    <a href="#" class="btn btn-2 btn-icon" aria-label="Button">
                                      <!-- Download SVG icon from http://tabler.io/icons/icon/dots -->
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
                                        <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                      </svg>
                                    </a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  class="form-check-input m-0 align-middle table-selectable-check"
                                  type="checkbox"
                                  aria-label="Select invoice"
                                  value="true"
                                />
                              </td>
                              <td class="sort-name">
                                <span class="avatar avatar-xs me-2" style="background-image: url(./static/avatars/024m.jpg)"> </span>
                                Cary Baleine
                              </td>
                              <td class="sort-city">Pokrovka, Kyrgyzstan</td>
                              <td class="sort-status">
                                <span class="badge bg-success-lt">Active</span>
                              </td>
                              <td class="sort-date">January 01, 2024</td>
                              <td class="sort-tags">
                                <div class="badges-list">
                                  <span class="badge">QTA</span>
                                  <span class="badge">Event</span>
                                  <span class="badge">Tickets</span>
                                  <span class="badge">TODO</span>
                                </div>
                              </td>
                              <td class="sort-category py-0">
                                <span class="on-unchecked"> Agencies </span>
                                <div class="on-checked">
                                  <div class="d-flex justify-content-end">
                                    <a href="#" class="btn btn-2 btn-icon" aria-label="Button">
                                      <!-- Download SVG icon from http://tabler.io/icons/icon/dots -->
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
                                        <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                      </svg>
                                    </a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  class="form-check-input m-0 align-middle table-selectable-check"
                                  type="checkbox"
                                  aria-label="Select invoice"
                                  value="true"
                                />
                              </td>
                              <td class="sort-name">
                                <span class="avatar avatar-xs me-2" style="background-image: url(./static/avatars/020f.jpg)"> </span>
                                Riane Milward
                              </td>
                              <td class="sort-city">Erling, China</td>
                              <td class="sort-status">
                                <span class="badge bg-danger-lt">Inactive</span>
                              </td>
                              <td class="sort-date">February 04, 2024</td>
                              <td class="sort-tags">
                                <div class="badges-list">
                                  <span class="badge">QTA</span>
                                  <span class="badge">Event</span>
                                </div>
                              </td>
                              <td class="sort-category py-0">
                                <span class="on-unchecked"> Agencies </span>
                                <div class="on-checked">
                                  <div class="d-flex justify-content-end">
                                    <a href="#" class="btn btn-2 btn-icon" aria-label="Button">
                                      <!-- Download SVG icon from http://tabler.io/icons/icon/dots -->
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
                                        <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                      </svg>
                                    </a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  class="form-check-input m-0 align-middle table-selectable-check"
                                  type="checkbox"
                                  aria-label="Select invoice"
                                  value="true"
                                />
                              </td>
                              <td class="sort-name">
                                <span class="avatar avatar-xs me-2" style="background-image: url(./static/avatars/025m.jpg)"> </span>
                                Reynold Indgs
                              </td>
                              <td class="sort-city">Huayllo, Peru</td>
                              <td class="sort-status">
                                <span class="badge bg-success-lt">Active</span>
                              </td>
                              <td class="sort-date">January 01, 2024</td>
                              <td class="sort-tags">
                                <div class="badges-list">
                                  <span class="badge">QTA</span>
                                  <span class="badge">Event</span>
                                  <span class="badge">Tickets</span>
                                  <span class="badge">TODO</span>
                                </div>
                              </td>
                              <td class="sort-category py-0">
                                <span class="on-unchecked"> Agencies </span>
                                <div class="on-checked">
                                  <div class="d-flex justify-content-end">
                                    <a href="#" class="btn btn-2 btn-icon" aria-label="Button">
                                      <!-- Download SVG icon from http://tabler.io/icons/icon/dots -->
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
                                        <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                      </svg>
                                    </a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  class="form-check-input m-0 align-middle table-selectable-check"
                                  type="checkbox"
                                  aria-label="Select invoice"
                                  value="true"
                                />
                              </td>
                              <td class="sort-name">
                                <span class="avatar avatar-xs me-2" style="background-image: url(./static/avatars/026m.jpg)"> </span>
                                Parke Moneypenny
                              </td>
                              <td class="sort-city">Karawatung, Indonesia</td>
                              <td class="sort-status">
                                <span class="badge">Requested</span>
                              </td>
                              <td class="sort-date">June 08, 2024</td>
                              <td class="sort-tags">
                                <div class="badges-list">
                                  <span class="badge">Tickets</span>
                                </div>
                              </td>
                              <td class="sort-category py-0">
                                <span class="on-unchecked"> Agencies </span>
                                <div class="on-checked">
                                  <div class="d-flex justify-content-end">
                                    <a href="#" class="btn btn-2 btn-icon" aria-label="Button">
                                      <!-- Download SVG icon from http://tabler.io/icons/icon/dots -->
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
                                        <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                      </svg>
                                    </a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  class="form-check-input m-0 align-middle table-selectable-check"
                                  type="checkbox"
                                  aria-label="Select invoice"
                                  value="true"
                                />
                              </td>
                              <td class="sort-name">
                                <span class="avatar avatar-xs me-2" style="background-image: url(./static/avatars/021f.jpg)"> </span>
                                Sandi Keys
                              </td>
                              <td class="sort-city">Samannūd, Egypt</td>
                              <td class="sort-status">
                                <span class="badge bg-success-lt">Active</span>
                              </td>
                              <td class="sort-date">January 01, 2024</td>
                              <td class="sort-tags">
                                <div class="badges-list">
                                  <span class="badge">QTA</span>
                                  <span class="badge">Event</span>
                                  <span class="badge">Tickets</span>
                                  <span class="badge">TODO</span>
                                </div>
                              </td>
                              <td class="sort-category py-0">
                                <span class="on-unchecked"> Agencies </span>
                                <div class="on-checked">
                                  <div class="d-flex justify-content-end">
                                    <a href="#" class="btn btn-2 btn-icon" aria-label="Button">
                                      <!-- Download SVG icon from http://tabler.io/icons/icon/dots -->
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
                                        <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                      </svg>
                                    </a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  class="form-check-input m-0 align-middle table-selectable-check"
                                  type="checkbox"
                                  aria-label="Select invoice"
                                  value="true"
                                />
                              </td>
                              <td class="sort-name">
                                <span class="avatar avatar-xs me-2" style="background-image: url(./static/avatars/022f.jpg)"> </span>
                                Peria Errichiello
                              </td>
                              <td class="sort-city">Xukou, China</td>
                              <td class="sort-status">
                                <span class="badge">Requested</span>
                              </td>
                              <td class="sort-date">January 01, 2024</td>
                              <td class="sort-tags">
                                <div class="badges-list">
                                  <span class="badge">Tickets</span>
                                </div>
                              </td>
                              <td class="sort-category py-0">
                                <span class="on-unchecked"> Agencies </span>
                                <div class="on-checked">
                                  <div class="d-flex justify-content-end">
                                    <a href="#" class="btn btn-2 btn-icon" aria-label="Button">
                                      <!-- Download SVG icon from http://tabler.io/icons/icon/dots -->
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
                                        <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                      </svg>
                                    </a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="card-footer d-flex align-items-center">
                        <div class="dropdown">
                          <a class="btn dropdown-toggle" data-bs-toggle="dropdown">
                            <span id="page-count" class="me-1">20</span>
                            <span>records</span>
                          </a>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" onclick="setPageListItems(event)" data-value="10">10 records</a>
                            <a class="dropdown-item" onclick="setPageListItems(event)" data-value="20">20 records</a>
                            <a class="dropdown-item" onclick="setPageListItems(event)" data-value="50">50 records</a>
                            <a class="dropdown-item" onclick="setPageListItems(event)" data-value="100">100 records</a>
                          </div>
                        </div>
                        <!-- BEGIN PAGINATION -->
                        <ul class="pagination m-0 ms-auto">
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
                            <a class="page-link" href="#">6</a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#">7</a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#">8</a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#">9</a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#">10</a>
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
                  </div>
                </div>
                <script>
                  const advancedTable = {
                    headers: [
                      {"data-sort":"sort-name", name:"Name" },
                      {"data-sort":"sort-city", name:"City" },
                      {"data-sort":"sort-status", name:"Status" },
                      {"data-sort":"sort-date", name:"Start date" },
                      {"data-sort":"sort-tags", name:"Tags" },
                      {"data-sort":"sort-category", name:"Category" },
                    ],
                  };
                  const setPageListItems = (e) => {
                    window.tabler_list["advanced-table"].page = parseInt(e.target.dataset.value);
                    window.tabler_list["advanced-table"].update();
                    document.querySelector("#page-count").innerHTML = e.target.dataset.value;
                  };
                  window.tabler_list = window.tabler_list || {};
                  document.addEventListener("DOMContentLoaded", function () {
                    const list = (window.tabler_list["advanced-table"] = new List("advanced-table", {
                      sortClass:"table-sort",
                      listClass:"table-tbody",
                      page: parseInt("20"),
                      pagination: {
                        item: (value) => {
                          return `<li class="page-item"><a class="page-link cursor-pointer">${value.page}</a></li>`;
                        },
                        innerWindow: 1,
                        outerWindow: 1,
                        left: 0,
                        right: 0,
                      },
                      valueNames: advancedTable.headers.map((header) => header["data-sort"]),
                    }));
                    const searchInput = document.querySelector("#advanced-table-search");
                    if (searchInput) {
                      searchInput.addEventListener("input", () => {
                        list.search(searchInput.value);
                      });
                    }
                  });
                </script>
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
