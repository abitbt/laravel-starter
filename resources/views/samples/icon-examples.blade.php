{{-- 
  Icon Component Examples
  Copy and paste these examples into your Blade templates
--}}

{{-- BUTTONS WITH ICONS --}}
<button class="btn btn-primary">
    <x-tabler-plus class="icon" />
    Create New
</button>

<button class="btn btn-success">
    <x-tabler-check class="icon" />
    Save Changes
</button>

<button class="btn btn-danger">
    <x-tabler-trash class="icon" />
    Delete
</button>

{{-- ICON-ONLY BUTTONS --}}
<button class="btn btn-icon" aria-label="Edit">
    <x-tabler-edit class="icon" />
</button>

<button class="btn btn-icon btn-primary" aria-label="Settings">
    <x-tabler-settings class="icon" />
</button>

{{-- ALERTS --}}
<div class="alert alert-success">
    <div class="d-flex">
        <div><x-tabler-check class="icon alert-icon" /></div>
        <div>Successfully saved!</div>
    </div>
</div>

<div class="alert alert-danger">
    <div class="d-flex">
        <div><x-tabler-alert-triangle class="icon alert-icon" /></div>
        <div>An error occurred!</div>
    </div>
</div>

{{-- CARDS WITH ICONS --}}
<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            <x-tabler-user class="icon me-2" />
            User Profile
        </h3>
    </div>
    <div class="card-body">
        Content here
    </div>
</div>

{{-- LIST WITH ICONS --}}
<ul class="list-unstyled">
    <li class="mb-2">
        <x-tabler-check class="icon text-success me-2" />
        Completed task
    </li>
    <li class="mb-2">
        <x-tabler-clock class="icon text-warning me-2" />
        Pending task
    </li>
    <li class="mb-2">
        <x-tabler-x class="icon text-danger me-2" />
        Failed task
    </li>
</ul>

{{-- INPUT GROUPS --}}
<div class="input-group">
    <span class="input-group-text">
        <x-tabler-search class="icon" />
    </span>
    <input type="text" class="form-control" placeholder="Search...">
</div>

<div class="input-group">
    <span class="input-group-text">
        <x-tabler-mail class="icon" />
    </span>
    <input type="email" class="form-control" placeholder="Email">
</div>

{{-- BADGES WITH ICONS --}}
<span class="badge bg-success">
    <x-tabler-check class="icon icon-sm" />
    Active
</span>

<span class="badge bg-danger">
    <x-tabler-x class="icon icon-sm" />
    Inactive
</span>

{{-- DROPDOWN MENU --}}
<div class="dropdown">
    <button class="btn dropdown-toggle" data-bs-toggle="dropdown">
        <x-tabler-dots-vertical class="icon" />
    </button>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="#">
            <x-tabler-edit class="icon me-2" />
            Edit
        </a>
        <a class="dropdown-item" href="#">
            <x-tabler-download class="icon me-2" />
            Download
        </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item text-danger" href="#">
            <x-tabler-trash class="icon me-2" />
            Delete
        </a>
    </div>
</div>

{{-- TABLE WITH ICONS --}}
<table class="table">
    <thead>
        <tr>
            <th>Status</th>
            <th>Name</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><x-tabler-circle-check class="icon text-success" /></td>
            <td>John Doe</td>
            <td>
                <button class="btn btn-sm btn-icon">
                    <x-tabler-edit class="icon" />
                </button>
                <button class="btn btn-sm btn-icon text-danger">
                    <x-tabler-trash class="icon" />
                </button>
            </td>
        </tr>
    </tbody>
</table>

{{-- TABS WITH ICONS --}}
<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link active" href="#">
            <x-tabler-home class="icon me-2" />
            Home
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <x-tabler-user class="icon me-2" />
            Profile
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <x-tabler-settings class="icon me-2" />
            Settings
        </a>
    </li>
</ul>

{{-- STAT CARDS --}}
<div class="row row-cards">
    <div class="col-sm-6 col-lg-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="subheader">Total Users</div>
                </div>
                <div class="d-flex align-items-baseline">
                    <div class="h1 mb-0 me-2">2,146</div>
                    <div class="me-auto">
                        <span class="text-green d-inline-flex align-items-center lh-1">
                            12% <x-tabler-trending-up class="icon ms-1" />
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- EMPTY STATE --}}
<div class="empty">
    <div class="empty-icon">
        <x-tabler-inbox class="icon icon-xl" />
    </div>
    <p class="empty-title">No results found</p>
    <p class="empty-subtitle text-secondary">
        Try adjusting your search or filter to find what you're looking for.
    </p>
    <div class="empty-action">
        <button class="btn btn-primary">
            <x-tabler-plus class="icon" />
            Add new item
        </button>
    </div>
</div>

{{-- LOADING STATE --}}
<div class="text-center">
    <x-tabler-loader class="icon icon-lg text-primary" />
    <p class="text-secondary mt-2">Loading...</p>
</div>
