@extends('layouts.app')

@section('page-title', 'Layout Features Demo')

@section('pretitle')
  Comprehensive Showcase
@endsection

@section('description')
  This page demonstrates all the available features of the app layout including headers, breadcrumbs, actions, tabs,
  modals, and more.
@endsection

@section('actions')
  <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-demo">
    <x-tabler-plus class="icon" />
    Primary Action
  </a>
  <a href="#" class="btn btn-outline-secondary">
    <x-tabler-download class="icon" />
    Download
  </a>
  <div class="btn-group">
    <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown">
      <x-tabler-dots class="icon" />
      More
    </button>
    <div class="dropdown-menu dropdown-menu-end">
      <a class="dropdown-item" href="#">
        <x-tabler-file-export class="icon dropdown-item-icon" />
        Export
      </a>
      <a class="dropdown-item" href="#">
        <x-tabler-share class="icon dropdown-item-icon" />
        Share
      </a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item text-danger" href="#">
        <x-tabler-trash class="icon dropdown-item-icon" />
        Delete
      </a>
    </div>
  </div>
@endsection

@section('tabs')
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item" role="presentation">
      <a href="#tab-overview" class="nav-link active" data-bs-toggle="tab" role="tab" aria-selected="true">
        <x-tabler-home class="icon" />
        Overview
      </a>
    </li>
    <li class="nav-item" role="presentation">
      <a href="#tab-components" class="nav-link" data-bs-toggle="tab" role="tab">
        <x-tabler-components class="icon" />
        Components
      </a>
    </li>
    <li class="nav-item" role="presentation">
      <a href="#tab-settings" class="nav-link" data-bs-toggle="tab" role="tab">
        <x-tabler-settings class="icon" />
        Settings
      </a>
    </li>
    <li class="nav-item ms-auto" role="presentation">
      <a href="#tab-advanced" class="nav-link" data-bs-toggle="tab" role="tab">
        <x-tabler-flask class="icon" />
        Advanced
      </a>
    </li>
  </ul>
@endsection

@php
  $breadcrumbs = [
      ['title' => 'Dashboard', 'url' => '/'],
      ['title' => 'Examples', 'url' => '#'],
      ['title' => 'Demo Page', 'url' => ''],
  ];
@endphp

@section('content')
  <div class="container-xl">
    <div class="tab-content">
      <!-- Overview Tab -->
      <div class="tab-pane fade show active" id="tab-overview" role="tabpanel">
        <div class="row row-deck row-cards">
          <!-- Layout Features Card -->
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Layout Features Demonstrated</h3>
              </div>
              <div class="card-body">
                <div class="row g-3">
                  <div class="col-md-6 col-lg-4">
                    <div class="d-flex align-items-center gap-2">
                      <x-tabler-check class="icon text-success" />
                      <div>
                        <strong>Page Header</strong>
                        <div class="text-secondary small">With pretitle, title, and description</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4">
                    <div class="d-flex align-items-center gap-2">
                      <x-tabler-check class="icon text-success" />
                      <div>
                        <strong>Action Buttons</strong>
                        <div class="text-secondary small">Multiple actions in header</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4">
                    <div class="d-flex align-items-center gap-2">
                      <x-tabler-check class="icon text-success" />
                      <div>
                        <strong>Breadcrumbs</strong>
                        <div class="text-secondary small">Navigation trail support</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4">
                    <div class="d-flex align-items-center gap-2">
                      <x-tabler-check class="icon text-success" />
                      <div>
                        <strong>Tabs</strong>
                        <div class="text-secondary small">Tabbed content organization</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4">
                    <div class="d-flex align-items-center gap-2">
                      <x-tabler-check class="icon text-success" />
                      <div>
                        <strong>Theme Switcher</strong>
                        <div class="text-secondary small">Light/Dark/Auto modes</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4">
                    <div class="d-flex align-items-center gap-2">
                      <x-tabler-check class="icon text-success" />
                      <div>
                        <strong>Responsive Navbar</strong>
                        <div class="text-secondary small">Mobile-friendly navigation</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4">
                    <div class="d-flex align-items-center gap-2">
                      <x-tabler-check class="icon text-success" />
                      <div>
                        <strong>Flash Messages</strong>
                        <div class="text-secondary small">Success/Error notifications</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4">
                    <div class="d-flex align-items-center gap-2">
                      <x-tabler-check class="icon text-success" />
                      <div>
                        <strong>Modals</strong>
                        <div class="text-secondary small">Stack-based modal system</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4">
                    <div class="d-flex align-items-center gap-2">
                      <x-tabler-check class="icon text-success" />
                      <div>
                        <strong>Custom Scripts</strong>
                        <div class="text-secondary small">Stack and section support</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Sample Cards -->
          <div class="col-md-6 col-lg-4">
            <div class="card">
              <div class="card-status-top bg-primary"></div>
              <div class="card-body">
                <h3 class="card-title">
                  <x-tabler-layout class="icon me-2" />
                  Card with Status
                </h3>
                <p class="text-secondary">Cards support status bars, headers, footers, and various content layouts.</p>
              </div>
              <div class="card-footer">
                <a href="#" class="btn btn-primary w-100">Learn More</a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="card">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <div class="subheader">Total Users</div>
                  <div class="ms-auto">
                    <span class="text-success d-inline-flex align-items-center">
                      12%
                      <x-tabler-trending-up class="icon ms-1" />
                    </span>
                  </div>
                </div>
                <div class="h1 mb-3">2,568</div>
                <div class="d-flex mb-2">
                  <div>Active</div>
                  <div class="ms-auto">
                    <span class="text-secondary">2,345</span>
                  </div>
                </div>
                <div class="progress progress-sm">
                  <div class="progress-bar bg-primary" style="width: 91.3%" role="progressbar" aria-valuenow="91.3"
                    aria-valuemin="0" aria-valuemax="100">
                    <span class="visually-hidden">91.3% Complete</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="card">
              <div class="card-stamp">
                <div class="card-stamp-icon bg-blue">
                  <x-tabler-star class="icon" />
                </div>
              </div>
              <div class="card-body">
                <h3 class="card-title">Card with Stamp</h3>
                <p class="text-secondary">The stamp feature adds a decorative corner element to your cards.</p>
                <div class="mt-3">
                  <span class="badge bg-blue-lt">Featured</span>
                  <span class="badge bg-green-lt">New</span>
                </div>
              </div>
            </div>
          </div>

          <!-- Alert Examples -->
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Alert Components</h3>
              </div>
              <div class="card-body">
                <div class="alert alert-success mb-3" role="alert">
                  <div class="d-flex">
                    <div>
                      <x-tabler-check class="icon alert-icon" />
                    </div>
                    <div>
                      <h4 class="alert-title">Success!</h4>
                      <div class="text-secondary">Your operation completed successfully.</div>
                    </div>
                  </div>
                </div>
                <div class="alert alert-info mb-3" role="alert">
                  <div class="d-flex">
                    <div>
                      <x-tabler-info-circle class="icon alert-icon" />
                    </div>
                    <div>
                      <h4 class="alert-title">Information</h4>
                      <div class="text-secondary">Here's some helpful information for you.</div>
                    </div>
                  </div>
                </div>
                <div class="alert alert-warning mb-3" role="alert">
                  <div class="d-flex">
                    <div>
                      <x-tabler-alert-triangle class="icon alert-icon" />
                    </div>
                    <div>
                      <h4 class="alert-title">Warning</h4>
                      <div class="text-secondary">Please be careful with this action.</div>
                    </div>
                  </div>
                </div>
                <div class="alert alert-danger mb-0" role="alert">
                  <div class="d-flex">
                    <div>
                      <x-tabler-alert-circle class="icon alert-icon" />
                    </div>
                    <div>
                      <h4 class="alert-title">Error</h4>
                      <div class="text-secondary">Something went wrong. Please try again.</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- List Group -->
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List Items</h3>
              </div>
              <div class="list-group list-group-flush">
                <div class="list-group-item">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <span class="avatar"
                        style="background-image: url(https://ui-avatars.com/api/?name=JD&background=066fd1&color=fff)"></span>
                    </div>
                    <div class="col text-truncate">
                      <div class="text-reset d-block">John Doe</div>
                      <div class="text-secondary text-truncate mt-n1">john@example.com</div>
                    </div>
                    <div class="col-auto">
                      <a href="#" class="btn btn-sm btn-icon btn-ghost-secondary">
                        <x-tabler-chevron-right class="icon" />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="list-group-item">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <span class="avatar"
                        style="background-image: url(https://ui-avatars.com/api/?name=JS&background=d63939&color=fff)"></span>
                    </div>
                    <div class="col text-truncate">
                      <div class="text-reset d-block">Jane Smith</div>
                      <div class="text-secondary text-truncate mt-n1">jane@example.com</div>
                    </div>
                    <div class="col-auto">
                      <a href="#" class="btn btn-sm btn-icon btn-ghost-secondary">
                        <x-tabler-chevron-right class="icon" />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="list-group-item">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <span class="avatar"
                        style="background-image: url(https://ui-avatars.com/api/?name=BJ&background=2fb344&color=fff)"></span>
                    </div>
                    <div class="col text-truncate">
                      <div class="text-reset d-block">Bob Johnson</div>
                      <div class="text-secondary text-truncate mt-n1">bob@example.com</div>
                    </div>
                    <div class="col-auto">
                      <a href="#" class="btn btn-sm btn-icon btn-ghost-secondary">
                        <x-tabler-chevron-right class="icon" />
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Timeline -->
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Activity Timeline</h3>
              </div>
              <div class="card-body">
                <ul class="steps steps-vertical">
                  <li class="step-item active">
                    <div class="h4 m-0">Project Created</div>
                    <div class="text-secondary">Initial setup completed</div>
                    <div class="text-secondary small">2 hours ago</div>
                  </li>
                  <li class="step-item active">
                    <div class="h4 m-0">Database Configured</div>
                    <div class="text-secondary">MySQL connection established</div>
                    <div class="text-secondary small">1 hour ago</div>
                  </li>
                  <li class="step-item">
                    <div class="h4 m-0">Deploy to Production</div>
                    <div class="text-secondary">Pending approval</div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Components Tab -->
      <div class="tab-pane fade" id="tab-components" role="tabpanel">
        <div class="row row-deck row-cards">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Button Variations</h3>
              </div>
              <div class="card-body">
                <div class="mb-3">
                  <button type="button" class="btn btn-primary">Primary</button>
                  <button type="button" class="btn btn-secondary">Secondary</button>
                  <button type="button" class="btn btn-success">Success</button>
                  <button type="button" class="btn btn-info">Info</button>
                  <button type="button" class="btn btn-warning">Warning</button>
                  <button type="button" class="btn btn-danger">Danger</button>
                </div>
                <div class="mb-3">
                  <button type="button" class="btn btn-outline-primary">Outline Primary</button>
                  <button type="button" class="btn btn-outline-secondary">Outline Secondary</button>
                  <button type="button" class="btn btn-ghost-primary">Ghost Primary</button>
                  <button type="button" class="btn btn-ghost-secondary">Ghost Secondary</button>
                </div>
                <div>
                  <button type="button" class="btn btn-primary btn-icon">
                    <x-tabler-heart class="icon" />
                  </button>
                  <button type="button" class="btn btn-secondary btn-icon">
                    <x-tabler-star class="icon" />
                  </button>
                  <button type="button" class="btn btn-success">
                    <x-tabler-check class="icon" />
                    With Icon
                  </button>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Badges</h3>
              </div>
              <div class="card-body">
                <span class="badge bg-primary">Primary</span>
                <span class="badge bg-secondary">Secondary</span>
                <span class="badge bg-success">Success</span>
                <span class="badge bg-danger">Danger</span>
                <span class="badge bg-warning">Warning</span>
                <span class="badge bg-info">Info</span>
                <hr>
                <span class="badge bg-primary-lt">Light Primary</span>
                <span class="badge bg-secondary-lt">Light Secondary</span>
                <span class="badge bg-success-lt">Light Success</span>
                <hr>
                <span class="badge badge-outline text-primary">Outline Primary</span>
                <span class="badge badge-outline text-secondary">Outline Secondary</span>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Avatars</h3>
              </div>
              <div class="card-body">
                <div class="avatar-list avatar-list-stacked mb-3">
                  <span class="avatar avatar-sm"
                    style="background-image: url(https://ui-avatars.com/api/?name=A&background=066fd1&color=fff)"></span>
                  <span class="avatar avatar-sm"
                    style="background-image: url(https://ui-avatars.com/api/?name=B&background=d63939&color=fff)"></span>
                  <span class="avatar avatar-sm"
                    style="background-image: url(https://ui-avatars.com/api/?name=C&background=2fb344&color=fff)"></span>
                  <span class="avatar avatar-sm"
                    style="background-image: url(https://ui-avatars.com/api/?name=D&background=f59f00&color=fff)"></span>
                  <span class="avatar avatar-sm">+5</span>
                </div>
                <div class="mb-3">
                  <span class="avatar avatar-xs"
                    style="background-image: url(https://ui-avatars.com/api/?name=XS&background=066fd1&color=fff)"></span>
                  <span class="avatar avatar-sm"
                    style="background-image: url(https://ui-avatars.com/api/?name=SM&background=066fd1&color=fff)"></span>
                  <span class="avatar"
                    style="background-image: url(https://ui-avatars.com/api/?name=MD&background=066fd1&color=fff)"></span>
                  <span class="avatar avatar-lg"
                    style="background-image: url(https://ui-avatars.com/api/?name=LG&background=066fd1&color=fff)"></span>
                  <span class="avatar avatar-xl"
                    style="background-image: url(https://ui-avatars.com/api/?name=XL&background=066fd1&color=fff)"></span>
                </div>
                <div>
                  <span class="avatar avatar-rounded"
                    style="background-image: url(https://ui-avatars.com/api/?name=R&background=066fd1&color=fff)"></span>
                  <span class="avatar"
                    style="background-image: url(https://ui-avatars.com/api/?name=D&background=066fd1&color=fff)"></span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Form Elements</h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="form-label">Text Input</label>
                      <input type="text" class="form-control" placeholder="Enter text">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Select</label>
                      <select class="form-select">
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Textarea</label>
                      <textarea class="form-control" rows="3" placeholder="Enter description"></textarea>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="form-label">Checkboxes</label>
                      <div>
                        <label class="form-check">
                          <input class="form-check-input" type="checkbox" checked>
                          <span class="form-check-label">Option 1</span>
                        </label>
                        <label class="form-check">
                          <input class="form-check-input" type="checkbox">
                          <span class="form-check-label">Option 2</span>
                        </label>
                      </div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Radio Buttons</label>
                      <div>
                        <label class="form-check">
                          <input class="form-check-input" type="radio" name="radio-group" checked>
                          <span class="form-check-label">Radio 1</span>
                        </label>
                        <label class="form-check">
                          <input class="form-check-input" type="radio" name="radio-group">
                          <span class="form-check-label">Radio 2</span>
                        </label>
                      </div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Switch</label>
                      <div>
                        <label class="form-check form-switch">
                          <input class="form-check-input" type="checkbox" checked>
                          <span class="form-check-label">Enable feature</span>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Settings Tab -->
      <div class="tab-pane fade" id="tab-settings" role="tabpanel">
        <div class="row row-deck row-cards">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Settings Panel</h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <h3>Layout Options</h3>
                    <p class="text-secondary">You can customize various aspects of the layout:</p>
                    <ul>
                      <li>Hide header with <code>@@section('hide-header')</code></li>
                      <li>Set pretitle with <code>@@section('pretitle')</code></li>
                      <li>Add actions with <code>@@section('actions')</code></li>
                      <li>Include tabs with <code>@@section('tabs')</code></li>
                      <li>Custom footer with <code>@@section('footer')</code></li>
                    </ul>
                  </div>
                  <div class="col-md-6">
                    <h3>Available Stacks</h3>
                    <p class="text-secondary">Use these stacks to inject content:</p>
                    <ul>
                      <li><code>@@push('head')</code> - Add to document head</li>
                      <li><code>@@push('modals')</code> - Add modal dialogs</li>
                      <li><code>@@push('scripts')</code> - Add JavaScript</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Passing Methods</h3>
              </div>
              <div class="table-responsive">
                <table class="card-table table-vcenter table">
                  <thead>
                    <tr>
                      <th>Method</th>
                      <th>Example</th>
                      <th>Use Case</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><code>@@section</code></td>
                      <td><code>@@section('page-title', 'My Title')</code></td>
                      <td>Simple text or HTML content</td>
                    </tr>
                    <tr>
                      <td><code>@@php</code></td>
                      <td><code>@@php $breadcrumbs = [...];</code></td>
                      <td>Complex data structures</td>
                    </tr>
                    <tr>
                      <td>Controller</td>
                      <td><code>return view('page', ['title' => 'My Title'])</code></td>
                      <td>Dynamic data from backend</td>
                    </tr>
                    <tr>
                      <td><code>@@push</code></td>
                      <td><code>@@push('scripts')</code></td>
                      <td>Adding to stacks incrementally</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Advanced Tab -->
      <div class="tab-pane fade" id="tab-advanced" role="tabpanel">
        <div class="row row-deck row-cards">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Advanced Features</h3>
                <div class="card-actions">
                  <button class="btn btn-sm btn-primary" onclick="showToast()">
                    Show Toast
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="accordion" id="accordion-demo">
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse-1">
                        Custom Scripts & Styles
                      </button>
                    </h2>
                    <div id="collapse-1" class="accordion-collapse show collapse" data-bs-parent="#accordion-demo">
                      <div class="accordion-body pt-0">
                        <p>You can add custom scripts and styles using the available stacks:</p>
                        <pre class="bg-light rounded p-3"><code>@@push('head')
  &lt;style&gt;
    .custom-class { color: red; }
  &lt;/style&gt;
@@endpush</code></pre>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse-2">
                        Modal System
                      </button>
                    </h2>
                    <div id="collapse-2" class="accordion-collapse collapse" data-bs-parent="#accordion-demo">
                      <div class="accordion-body pt-0">
                        <p>Modals can be added using the modals stack. Click the "Primary Action" button in the header to
                          see a demo.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse-3">
                        Theme System
                      </button>
                    </h2>
                    <div id="collapse-3" class="accordion-collapse collapse" data-bs-parent="#accordion-demo">
                      <div class="accordion-body pt-0">
                        <p>The layout includes an automatic theme switcher that persists user preferences. Try switching
                          between light and dark modes using the navbar theme selector.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Empty State</h3>
              </div>
              <div class="card-body">
                <div class="empty">
                  <div class="empty-icon">
                    <x-tabler-mood-sad class="icon" />
                  </div>
                  <p class="empty-title">No results found</p>
                  <p class="empty-subtitle text-secondary">
                    Try adjusting your search or filter to find what you're looking for.
                  </p>
                  <div class="empty-action">
                    <a href="#" class="btn btn-primary">
                      <x-tabler-plus class="icon" />
                      Create New
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Progress Indicators</h3>
              </div>
              <div class="card-body">
                <div class="mb-3">
                  <div class="d-flex mb-1">
                    <div>Task 1</div>
                    <div class="ms-auto">100%</div>
                  </div>
                  <div class="progress progress-sm">
                    <div class="progress-bar bg-success" style="width: 100%"></div>
                  </div>
                </div>
                <div class="mb-3">
                  <div class="d-flex mb-1">
                    <div>Task 2</div>
                    <div class="ms-auto">75%</div>
                  </div>
                  <div class="progress progress-sm">
                    <div class="progress-bar bg-primary" style="width: 75%"></div>
                  </div>
                </div>
                <div>
                  <div class="d-flex mb-1">
                    <div>Task 3</div>
                    <div class="ms-auto">25%</div>
                  </div>
                  <div class="progress progress-sm">
                    <div class="progress-bar bg-warning" style="width: 25%"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('modals')
  <div class="modal fade" id="modal-demo" tabindex="-1" aria-labelledby="modal-demo-title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal-demo-title">Demo Modal</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>This is a demonstration of the modal system. Modals are added using the
            <code>@@push('modals')</code> directive.
          </p>
          <p class="text-secondary mb-0">You can have as many modals as you need, and they can be triggered from anywhere
            in your page.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save Changes</button>
        </div>
      </div>
    </div>
  </div>
@endpush

@push('scripts')
  <script>
    // Demo toast notification
    function showToast() {
      const toastHtml = `
        <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check text-success me-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
              <path d="M5 12l5 5l10 -10"></path>
            </svg>
            <strong class="me-auto">Success</strong>
            <small>Just now</small>
            <button type="button" class="ms-2 btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            This is a toast notification! Custom scripts work perfectly.
          </div>
        </div>
      `;

      // Create container if it doesn't exist
      let container = document.querySelector('.toast-container');
      if (!container) {
        container = document.createElement('div');
        container.className = 'toast-container position-fixed bottom-0 end-0 p-3';
        document.body.appendChild(container);
      }

      // Add and show toast
      container.innerHTML = toastHtml;
      const toast = container.querySelector('.toast');
      setTimeout(() => toast.remove(), 5000);
    }

    // Theme switcher (already in layout, but we can interact with it)
    document.addEventListener('DOMContentLoaded', function() {
      const themeSwitchers = document.querySelectorAll('[data-bs-theme-value]');
      themeSwitchers.forEach(switcher => {
        switcher.addEventListener('click', function(e) {
          e.preventDefault();
          const theme = this.getAttribute('data-bs-theme-value');
          localStorage.setItem('theme', theme);

          if (theme === 'auto') {
            const isDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
            document.documentElement.setAttribute('data-bs-theme', isDark ? 'dark' : 'light');
          } else {
            document.documentElement.setAttribute('data-bs-theme', theme);
          }
        });
      });
    });
  </script>
@endpush

@push('head')
  <style>
    /* Custom styles demonstration */
    .steps-vertical {
      list-style: none;
      padding-left: 0;
    }

    .step-item {
      position: relative;
      padding-left: 2rem;
      padding-bottom: 1.5rem;
    }

    .step-item:before {
      content: '';
      position: absolute;
      left: 0;
      top: 0;
      width: 1.5rem;
      height: 1.5rem;
      background: var(--tblr-border-color);
      border-radius: 50%;
      z-index: 1;
    }

    .step-item.active:before {
      background: var(--tblr-primary);
    }

    .step-item:not(:last-child):after {
      content: '';
      position: absolute;
      left: 0.75rem;
      top: 1.5rem;
      bottom: 0;
      width: 2px;
      background: var(--tblr-border-color);
    }
  </style>
@endpush
