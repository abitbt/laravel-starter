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
                <h1 class="page-title">Search results</h1>
                <div class="text-secondary mt-1">About 2,410 result (0.19 seconds)</div>
              </div>
            </div>
          </div>
        </div>
        <!-- END PAGE HEADER -->
        <!-- END PAGE HEADER -->
        <!-- BEGIN PAGE BODY -->
        <main id="content" class="page-body">
          <div class="container-xl">
            <div class="row g-4">
              <div class="col-md-3">
                <form action="./" method="get" autocomplete="off" novalidate>
                  <div class="subheader mb-2">Category</div>
                  <nav class="list-group list-group-transparent mb-3">
                    <a class="list-group-item list-group-item-action d-flex align-items-center active" href="#">
                      Games
                      <small class="text-secondary ms-auto">24</small>
                    </a>
                    <a class="list-group-item list-group-item-action d-flex align-items-center" href="#">
                      Clothing
                      <small class="text-secondary ms-auto">11</small>
                    </a>
                    <a class="list-group-item list-group-item-action d-flex align-items-center" href="#">
                      Jewelery
                      <small class="text-secondary ms-auto">11</small>
                    </a>
                    <a class="list-group-item list-group-item-action d-flex align-items-center" href="#">
                      Toys
                      <small class="text-secondary ms-auto">54</small>
                    </a>
                  </nav>
                  <div class="subheader mb-2">Rating</div>
                  <div class="mb-3">
                    <label class="form-check">
                      <input type="radio" class="form-check-input" name="form-stars" value="5 stars" checked />
                      <span class="form-check-label">5 stars</span>
                    </label>
                    <label class="form-check">
                      <input type="radio" class="form-check-input" name="form-stars" value="4 stars" />
                      <span class="form-check-label">4 stars</span>
                    </label>
                    <label class="form-check">
                      <input type="radio" class="form-check-input" name="form-stars" value="3 stars" />
                      <span class="form-check-label">3 stars</span>
                    </label>
                    <label class="form-check">
                      <input type="radio" class="form-check-input" name="form-stars" value="2 and less stars" />
                      <span class="form-check-label">2 and less stars</span>
                    </label>
                  </div>
                  <div class="subheader mb-2">Tags</div>
                  <div class="mb-3">
                    <label class="form-check">
                      <input type="checkbox" class="form-check-input" name="form-tags[]" value="business" checked />
                      <span class="form-check-label">business</span>
                    </label>
                    <label class="form-check">
                      <input type="checkbox" class="form-check-input" name="form-tags[]" value="evening" />
                      <span class="form-check-label">evening</span>
                    </label>
                    <label class="form-check">
                      <input type="checkbox" class="form-check-input" name="form-tags[]" value="leisure" />
                      <span class="form-check-label">leisure</span>
                    </label>
                    <label class="form-check">
                      <input type="checkbox" class="form-check-input" name="form-tags[]" value="party" />
                      <span class="form-check-label">party</span>
                    </label>
                  </div>
                  <div class="subheader mb-2">Price</div>
                  <div class="row g-2 align-items-center mb-3">
                    <div class="col">
                      <div class="input-group">
                        <span class="input-group-text"> $ </span>
                        <input type="text" class="form-control" placeholder="from" value="3" autocomplete="off" />
                      </div>
                    </div>
                    <div class="col-auto">—</div>
                    <div class="col">
                      <div class="input-group">
                        <span class="input-group-text"> $ </span>
                        <input type="text" class="form-control" placeholder="to" autocomplete="off" />
                      </div>
                    </div>
                  </div>
                  <div class="subheader mb-2">Shipping</div>
                  <div>
                    <select name="" class="form-select">
                      <option>United Kingdom</option>
                      <option>USA</option>
                      <option>Germany</option>
                      <option>Poland</option>
                      <option>Other…</option>
                    </select>
                  </div>
                  <div class="mt-5">
                    <button class="btn btn-primary btn-4 w-100">Confirm changes</button>
                    <a href="#" class="btn btn-link btn-3 w-100"> Reset to defaults </a>
                  </div>
                </form>
              </div>
              <div class="col-md-9">
                <div class="row row-cards">
                  <div class="col-sm-6 col-lg-4">
                    <div class="card card-sm">
                      <a href="#" class="d-block"
                        ><img src="./static/photos/beautiful-blonde-woman-relaxing-with-a-can-of-coke-on-a-tree-stump-by-the-beach.jpg" class="card-img-top"
                      /></a>
                      <div class="card-body">
                        <div class="d-flex align-items-center">
                          <span class="avatar avatar-2 me-3 rounded" style="background-image: url(./static/avatars/000m.jpg)"> </span>
                          <div>
                            <div>Paweł Kuna</div>
                            <div class="text-secondary">3 days ago</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-lg-4">
                    <div class="card card-sm">
                      <a href="#" class="d-block"><img src="./static/photos/brainstorming-session-with-creative-designers.jpg" class="card-img-top" /></a>
                      <div class="card-body">
                        <div class="d-flex align-items-center">
                          <span class="avatar avatar-2 me-3 rounded" style="background-image: url(./static/avatars/052f.jpg)"> </span>
                          <div>
                            <div>Jeffie Lewzey</div>
                            <div class="text-secondary">now</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-lg-4">
                    <div class="card card-sm">
                      <a href="#" class="d-block"><img src="./static/photos/finances-us-dollars-and-bitcoins-currency-money.jpg" class="card-img-top" /></a>
                      <div class="card-body">
                        <div class="d-flex align-items-center">
                          <span class="avatar avatar-2 me-3 rounded" style="background-image: url(./static/avatars/002m.jpg)"> </span>
                          <div>
                            <div>Mallory Hulme</div>
                            <div class="text-secondary">now</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-lg-4">
                    <div class="card card-sm">
                      <a href="#" class="d-block"><img src="./static/photos/group-of-people-brainstorming-and-taking-notes-2.jpg" class="card-img-top" /></a>
                      <div class="card-body">
                        <div class="d-flex align-items-center">
                          <span class="avatar avatar-2 me-3 rounded" style="background-image: url(./static/avatars/003m.jpg)"> </span>
                          <div>
                            <div>Dunn Slane</div>
                            <div class="text-secondary">10 days ago</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-lg-4">
                    <div class="card card-sm">
                      <a href="#" class="d-block"
                        ><img src="./static/photos/blue-sofa-with-pillows-in-a-designer-living-room-interior.jpg" class="card-img-top"
                      /></a>
                      <div class="card-body">
                        <div class="d-flex align-items-center">
                          <span class="avatar avatar-2 me-3 rounded" style="background-image: url(./static/avatars/000f.jpg)"> </span>
                          <div>
                            <div>Emmy Levet</div>
                            <div class="text-secondary">now</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-lg-4">
                    <div class="card card-sm">
                      <a href="#" class="d-block"
                        ><img src="./static/photos/home-office-desk-with-macbook-iphone-calendar-watch-and-organizer.jpg" class="card-img-top"
                      /></a>
                      <div class="card-body">
                        <div class="d-flex align-items-center">
                          <span class="avatar avatar-2 me-3 rounded" style="background-image: url(./static/avatars/001f.jpg)"> </span>
                          <div>
                            <div>Maryjo Lebarree</div>
                            <div class="text-secondary">3 days ago</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-lg-4">
                    <div class="card card-sm">
                      <a href="#" class="d-block"><img src="./static/photos/young-woman-working-in-a-cafe.jpg" class="card-img-top" /></a>
                      <div class="card-body">
                        <div class="d-flex align-items-center">
                          <span class="avatar avatar-2 me-3 rounded" style="background-image: url(./static/avatars/004m.jpg)"> </span>
                          <div>
                            <div>Egan Poetz</div>
                            <div class="text-secondary">6 days ago</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-lg-4">
                    <div class="card card-sm">
                      <a href="#" class="d-block"><img src="./static/photos/everything-you-need-to-work-from-your-bed.jpg" class="card-img-top" /></a>
                      <div class="card-body">
                        <div class="d-flex align-items-center">
                          <span class="avatar avatar-2 me-3 rounded" style="background-image: url(./static/avatars/002f.jpg)"> </span>
                          <div>
                            <div>Kellie Skingley</div>
                            <div class="text-secondary">9 days ago</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-lg-4">
                    <div class="card card-sm">
                      <a href="#" class="d-block"><img src="./static/photos/young-entrepreneur-working-from-a-modern-cafe.jpg" class="card-img-top" /></a>
                      <div class="card-body">
                        <div class="d-flex align-items-center">
                          <span class="avatar avatar-2 me-3 rounded" style="background-image: url(./static/avatars/003f.jpg)"> </span>
                          <div>
                            <div>Christabel Charlwood</div>
                            <div class="text-secondary">now</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-lg-4">
                    <div class="card card-sm">
                      <a href="#" class="d-block"><img src="./static/photos/finances-us-dollars-and-bitcoins-currency-money-2.jpg" class="card-img-top" /></a>
                      <div class="card-body">
                        <div class="d-flex align-items-center">
                          <span class="avatar avatar-2 me-3 rounded" style="background-image: url(./static/avatars/063m.jpg)"> </span>
                          <div>
                            <div>Haskel Shelper</div>
                            <div class="text-secondary">now</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-lg-4">
                    <div class="card card-sm">
                      <a href="#" class="d-block"><img src="./static/photos/group-of-people-sightseeing-in-the-city.jpg" class="card-img-top" /></a>
                      <div class="card-body">
                        <div class="d-flex align-items-center">
                          <span class="avatar avatar-2 me-3 rounded" style="background-image: url(./static/avatars/006m.jpg)"> </span>
                          <div>
                            <div>Lorry Mion</div>
                            <div class="text-secondary">5 days ago</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-lg-4">
                    <div class="card card-sm">
                      <a href="#" class="d-block"><img src="./static/photos/color-palette-guide-sample-colors-catalog-.jpg" class="card-img-top" /></a>
                      <div class="card-body">
                        <div class="d-flex align-items-center">
                          <span class="avatar avatar-2 me-3 rounded" style="background-image: url(./static/avatars/004f.jpg)"> </span>
                          <div>
                            <div>Leesa Beaty</div>
                            <div class="text-secondary">now</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-lg-4">
                    <div class="card card-sm">
                      <a href="#" class="d-block"><img src="./static/photos/stylish-workplace-with-computer-at-home.jpg" class="card-img-top" /></a>
                      <div class="card-body">
                        <div class="d-flex align-items-center">
                          <span class="avatar avatar-2 me-3 rounded" style="background-image: url(./static/avatars/007m.jpg)"> </span>
                          <div>
                            <div>Perren Keemar</div>
                            <div class="text-secondary">4 days ago</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-lg-4">
                    <div class="card card-sm">
                      <a href="#" class="d-block"><img src="./static/photos/pink-desk-in-the-home-office.jpg" class="card-img-top" /></a>
                      <div class="card-body">
                        <div class="d-flex align-items-center">
                          <span class="avatar avatar-2 me-3 rounded"> SA </span>
                          <div>
                            <div>Sunny Airey</div>
                            <div class="text-secondary">5 days ago</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-lg-4">
                    <div class="card card-sm">
                      <a href="#" class="d-block"
                        ><img src="./static/photos/young-woman-sitting-on-the-sofa-and-working-on-her-laptop.jpg" class="card-img-top"
                      /></a>
                      <div class="card-body">
                        <div class="d-flex align-items-center">
                          <span class="avatar avatar-2 me-3 rounded" style="background-image: url(./static/avatars/009m.jpg)"> </span>
                          <div>
                            <div>Geoffry Flaunders</div>
                            <div class="text-secondary">7 days ago</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-lg-4">
                    <div class="card card-sm">
                      <a href="#" class="d-block"><img src="./static/photos/coffee-on-a-table-with-other-items.jpg" class="card-img-top" /></a>
                      <div class="card-body">
                        <div class="d-flex align-items-center">
                          <span class="avatar avatar-2 me-3 rounded" style="background-image: url(./static/avatars/010m.jpg)"> </span>
                          <div>
                            <div>Thatcher Keel</div>
                            <div class="text-secondary">9 days ago</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-lg-4">
                    <div class="card card-sm">
                      <a href="#" class="d-block"><img src="./static/photos/young-entrepreneur-working-from-a-modern-cafe-2.jpg" class="card-img-top" /></a>
                      <div class="card-body">
                        <div class="d-flex align-items-center">
                          <span class="avatar avatar-2 me-3 rounded" style="background-image: url(./static/avatars/005f.jpg)"> </span>
                          <div>
                            <div>Dyann Escala</div>
                            <div class="text-secondary">now</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-lg-4">
                    <div class="card card-sm">
                      <a href="#" class="d-block"
                        ><img src="./static/photos/soft-photo-of-woman-on-the-bed-with-the-book-and-cup-of-coffee-in-hands.jpg" class="card-img-top"
                      /></a>
                      <div class="card-body">
                        <div class="d-flex align-items-center">
                          <span class="avatar avatar-2 me-3 rounded" style="background-image: url(./static/avatars/006f.jpg)"> </span>
                          <div>
                            <div>Avivah Mugleston</div>
                            <div class="text-secondary">6 days ago</div>
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
