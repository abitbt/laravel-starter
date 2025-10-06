<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Email inbox - Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>
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
                <h1 class="page-title">Inbox</h1>
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
              <div class="row g-0">
                <div class="col-xxl-3 email-border border-end">
                  <div class="offcanvas-xxl offcanvas-start h-100 file-offcanvas" tabindex="-1" id="emailSidebaroffcanvas">
                    <div class="card-body h-100">
                      <div>
                        <a href="#" class="btn btn-primary btn-5 d-none d-sm-block" data-bs-toggle="modal" data-bs-target="#modal-new-email">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/pencil -->
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
                            <path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" />
                            <path d="M13.5 6.5l4 4" />
                          </svg>
                          Compose
                        </a>
                      </div>
                      <div class="mt-3 nav nav-vertical">
                        <a href="#" class="nav-link text-danger fw-bold">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/inbox -->
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
                            class="icon me-2 icon-2"
                          >
                            <path d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />
                            <path d="M4 13h3l3 3h4l3 -3h3" />
                          </svg>
                          Inbox<span class="badge badge-danger ms-auto">20</span>
                        </a>
                        <a href="#" class="nav-link"
                          ><!-- Download SVG icon from http://tabler.io/icons/icon/star -->
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
                            class="icon me-2 icon-2"
                          >
                            <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg
                          >Starred</a
                        >
                        <a href="#" class="nav-link"
                          ><!-- Download SVG icon from http://tabler.io/icons/icon/clock -->
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
                            class="icon me-2 icon-2"
                          >
                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                            <path d="M12 7v5l3 3" /></svg
                          >Snoozed</a
                        >
                        <a href="#" class="nav-link"
                          ><!-- Download SVG icon from http://tabler.io/icons/icon/file -->
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
                            class="icon me-2 icon-2"
                          >
                            <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                            <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /></svg
                          >Draft<span class="badge badge-info ms-auto">32</span></a
                        >
                        <a href="#" class="nav-link"
                          ><!-- Download SVG icon from http://tabler.io/icons/icon/mail-up -->
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
                            class="icon me-2 icon-2"
                          >
                            <path d="M12 19h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v5.5" />
                            <path d="M19 22v-6" />
                            <path d="M22 19l-3 -3l-3 3" />
                            <path d="M3 7l9 6l9 -6" /></svg
                          >Sent Mail</a
                        >
                        <a href="#" class="nav-link"
                          ><!-- Download SVG icon from http://tabler.io/icons/icon/trash -->
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
                            class="icon me-2 icon-2"
                          >
                            <path d="M4 7l16 0" />
                            <path d="M10 11l0 6" />
                            <path d="M14 11l0 6" />
                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg
                          >Trash</a
                        >
                        <a href="#" class="nav-link"
                          ><!-- Download SVG icon from http://tabler.io/icons/icon/tag -->
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
                            class="icon me-2 icon-2"
                          >
                            <path d="M7.5 7.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                            <path
                              d="M3 6v5.172a2 2 0 0 0 .586 1.414l7.71 7.71a2.41 2.41 0 0 0 3.408 0l5.592 -5.592a2.41 2.41 0 0 0 0 -3.408l-7.71 -7.71a2 2 0 0 0 -1.414 -.586h-5.172a3 3 0 0 0 -3 3z"
                            /></svg
                          >Important</a
                        >
                        <a href="#" class="nav-link"
                          ><!-- Download SVG icon from http://tabler.io/icons/icon/alert-octagon -->
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
                            class="icon me-2 icon-2"
                          >
                            <path
                              d="M12.802 2.165l5.575 2.389c.48 .206 .863 .589 1.07 1.07l2.388 5.574c.22 .512 .22 1.092 0 1.604l-2.389 5.575c-.206 .48 -.589 .863 -1.07 1.07l-5.574 2.388c-.512 .22 -1.092 .22 -1.604 0l-5.575 -2.389a2.036 2.036 0 0 1 -1.07 -1.07l-2.388 -5.574a2.036 2.036 0 0 1 0 -1.604l2.389 -5.575c.206 -.48 .589 -.863 1.07 -1.07l5.574 -2.388a2.036 2.036 0 0 1 1.604 0z"
                            />
                            <path d="M12 8v4" />
                            <path d="M12 16h.01" /></svg
                          >Spam</a
                        >
                      </div>
                      <div class="mt-4">
                        <h6 class="subheader">Labels</h6>
                        <div class="mt-2 nav nav-vertical">
                          <a href="#" class="nav-link">
                            <div class="badge bg-info me-2"></div>
                            Updates
                          </a>
                          <a href="#" class="nav-link">
                            <div class="badge bg-warning me-2"></div>
                            Friends
                          </a>
                          <a href="#" class="nav-link">
                            <div class="badge bg-success me-2"></div>
                            Family
                          </a>
                          <a href="#" class="nav-link">
                            <div class="badge bg-primary me-2"></div>
                            Social
                          </a>
                          <a href="#" class="nav-link">
                            <div class="badge bg-danger me-2"></div>
                            Important
                          </a>
                          <a href="#" class="nav-link">
                            <div class="badge bg-purple me-2"></div>
                            Promotions
                          </a>
                        </div>
                      </div>
                      <div class="mt-5">
                        <h6 class="subheader">Storage</h6>
                        <div class="progress progress-3 my-2">
                          <div
                            class="progress-bar"
                            style="width: 46%"
                            role="progressbar"
                            aria-valuenow="46"
                            aria-valuemin="0"
                            aria-valuemax="100"
                            aria-label="46% Complete"
                          >
                            <span class="visually-hidden">46% Complete</span>
                          </div>
                        </div>
                        <p class="text-muted font-13 mb-0">7.02 GB (46%) of 15 GB used</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xxl-9">
                  <div class="card-body">
                    <div class="d-flex flex-wrap align-items-center gap-2">
                      <div class="d-xxl-none d-inline-flex">
                        <button
                          class="btn btn-icon"
                          type="button"
                          data-bs-toggle="offcanvas"
                          data-bs-target="#emailSidebaroffcanvas"
                          aria-controls="emailSidebaroffcanvas"
                        >
                          <!-- Download SVG icon from http://tabler.io/icons/icon/menu-2 -->
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
                            <path d="M4 6l16 0" />
                            <path d="M4 12l16 0" />
                            <path d="M4 18l16 0" />
                          </svg>
                        </button>
                      </div>
                      <div class="btn-group">
                        <a href="#" class="btn btn-2 btn-icon" aria-label="Button">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/archive -->
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
                            <path d="M3 4m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                            <path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-10" />
                            <path d="M10 12l4 0" />
                          </svg>
                        </a>
                        <a href="#" class="btn btn-2 btn-icon" aria-label="Button">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/alert-octagon -->
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
                            <path
                              d="M12.802 2.165l5.575 2.389c.48 .206 .863 .589 1.07 1.07l2.388 5.574c.22 .512 .22 1.092 0 1.604l-2.389 5.575c-.206 .48 -.589 .863 -1.07 1.07l-5.574 2.388c-.512 .22 -1.092 .22 -1.604 0l-5.575 -2.389a2.036 2.036 0 0 1 -1.07 -1.07l-2.388 -5.574a2.036 2.036 0 0 1 0 -1.604l2.389 -5.575c.206 -.48 .589 -.863 1.07 -1.07l5.574 -2.388a2.036 2.036 0 0 1 1.604 0z"
                            />
                            <path d="M12 8v4" />
                            <path d="M12 16h.01" />
                          </svg>
                        </a>
                        <a href="#" class="btn btn-2 btn-icon" aria-label="Button">
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
                            class="icon icon-2"
                          >
                            <path d="M4 7l16 0" />
                            <path d="M10 11l0 6" />
                            <path d="M14 11l0 6" />
                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                          </svg>
                        </a>
                      </div>
                      <div class="btn-group">
                        <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/folder -->
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
                            <path d="M5 4h4l3 3h7a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2" />
                          </svg>
                        </button>
                        <div class="dropdown-menu">
                          <span class="dropdown-header">Move to</span>
                          <a class="dropdown-item" href="#">Social</a>
                          <a class="dropdown-item" href="#">Promotions</a>
                          <a class="dropdown-item" href="#">Updates</a>
                          <a class="dropdown-item" href="#">Forums</a>
                        </div>
                      </div>
                      <div class="btn-group">
                        <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/tag -->
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
                            <path d="M7.5 7.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                            <path
                              d="M3 6v5.172a2 2 0 0 0 .586 1.414l7.71 7.71a2.41 2.41 0 0 0 3.408 0l5.592 -5.592a2.41 2.41 0 0 0 0 -3.408l-7.71 -7.71a2 2 0 0 0 -1.414 -.586h-5.172a3 3 0 0 0 -3 3z"
                            />
                          </svg>
                        </button>
                        <div class="dropdown-menu">
                          <span class="dropdown-header">Label as:</span>
                          <a class="dropdown-item" href="#">Updates</a>
                          <a class="dropdown-item" href="#">Social</a>
                          <a class="dropdown-item" href="#">Promotions</a>
                          <a class="dropdown-item" href="#">Forums</a>
                        </div>
                      </div>
                      <div class="btn-group">
                        <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
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
                          More
                        </button>
                        <div class="dropdown-menu">
                          <span class="dropdown-header">More Options :</span>
                          <a class="dropdown-item" href="#">Mark as Unread</a>
                          <a class="dropdown-item" href="#">Add to Tasks</a>
                          <a class="dropdown-item" href="#">Add Star</a>
                          <a class="dropdown-item" href="#">Mute</a>
                        </div>
                      </div>
                    </div>
                    <div class="mt-3">
                      <ul class="email-list">
                        <li>
                          <div class="email-sender-info">
                            <div class="checkbox-wrapper-mail">
                              <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="mail-e1" />
                                <label class="form-check-label" for="mail-e1"></label>
                              </div>
                            </div>
                            <span class="star-toggle"
                              ><!-- Download SVG icon from http://tabler.io/icons/icon/star -->
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
                                <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg
                            ></span>
                            <a href="#" class="email-title">Lucas, me (4)</a>
                          </div>
                          <div class="email-content">
                            <a href="#" class="email-subject"
                              >Direct message on Twitter &nbsp;–&nbsp;
                              <span>@LucasKriebel - Very cool :) You have a new direct message. Open Twitter to read and reply now.</span>
                            </a>
                            <div class="email-date">2025-08-27T11:49:00Z</div>
                          </div>
                          <div class="email-action-icons">
                            <ul class="list-inline">
                              <li class="list-inline-item">
                                <a href="#"
                                  ><!-- Download SVG icon from http://tabler.io/icons/icon/archive -->
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
                                    <path d="M3 4m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                                    <path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-10" />
                                    <path d="M10 12l4 0" /></svg
                                ></a>
                              </li>
                              <li class="list-inline-item">
                                <a href="#"
                                  ><!-- Download SVG icon from http://tabler.io/icons/icon/trash -->
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
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg
                                ></a>
                              </li>
                              <li class="list-inline-item">
                                <a href="#">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/mail-opened -->
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
                                    class="icon email-action-icons-item icon-2"
                                  >
                                    <path d="M3 9l9 6l9 -6l-9 -6l-9 6" />
                                    <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                                    <path d="M3 19l6 -6" />
                                    <path d="M15 13l6 6" />
                                  </svg>
                                </a>
                              </li>
                              <li class="list-inline-item">
                                <a href="#"
                                  ><!-- Download SVG icon from http://tabler.io/icons/icon/clock -->
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
                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                    <path d="M12 7v5l3 3" /></svg
                                ></a>
                              </li>
                            </ul>
                          </div>
                        </li>
                        <li>
                          <div class="email-sender-info">
                            <div class="checkbox-wrapper-mail">
                              <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="mail-e2" />
                                <label class="form-check-label" for="mail-e2"></label>
                              </div>
                            </div>
                            <span class="star-toggle"
                              ><!-- Download SVG icon from http://tabler.io/icons/icon/star -->
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
                                <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg
                            ></span>
                            <a href="#" class="email-title">Acme Support</a>
                          </div>
                          <div class="email-content">
                            <a href="#" class="email-subject"
                              >Your ticket #48213 has been updated &nbsp;–&nbsp;
                              <span
                                >Hi, we've added a detailed note to your request regarding billing. Please review the update and let us know if anything looks
                                off.</span
                              >
                            </a>
                            <div class="email-date">2025-08-26T09:15:00Z</div>
                          </div>
                          <div class="email-action-icons">
                            <ul class="list-inline">
                              <li class="list-inline-item">
                                <a href="#"
                                  ><!-- Download SVG icon from http://tabler.io/icons/icon/archive -->
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
                                    <path d="M3 4m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                                    <path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-10" />
                                    <path d="M10 12l4 0" /></svg
                                ></a>
                              </li>
                              <li class="list-inline-item">
                                <a href="#"
                                  ><!-- Download SVG icon from http://tabler.io/icons/icon/trash -->
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
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg
                                ></a>
                              </li>
                              <li class="list-inline-item">
                                <a href="#">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/mail-opened -->
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
                                    class="icon email-action-icons-item icon-2"
                                  >
                                    <path d="M3 9l9 6l9 -6l-9 -6l-9 6" />
                                    <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                                    <path d="M3 19l6 -6" />
                                    <path d="M15 13l6 6" />
                                  </svg>
                                </a>
                              </li>
                              <li class="list-inline-item">
                                <a href="#"
                                  ><!-- Download SVG icon from http://tabler.io/icons/icon/clock -->
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
                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                    <path d="M12 7v5l3 3" /></svg
                                ></a>
                              </li>
                            </ul>
                          </div>
                        </li>
                        <li>
                          <div class="email-sender-info">
                            <div class="checkbox-wrapper-mail">
                              <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="mail-e3" />
                                <label class="form-check-label" for="mail-e3"></label>
                              </div>
                            </div>
                            <span class="star-toggle"
                              ><!-- Download SVG icon from http://tabler.io/icons/icon/star -->
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
                                <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg
                            ></span>
                            <a href="#" class="email-title">Marketing Weekly</a>
                          </div>
                          <div class="email-content">
                            <a href="#" class="email-subject"
                              >10 growth tactics you can try today &nbsp;–&nbsp;
                              <span
                                >We curated a list of actionable ideas from top marketers to boost acquisition, retention, and activation this quarter.</span
                              >
                            </a>
                            <div class="email-date">2025-08-25T17:02:00Z</div>
                          </div>
                          <div class="email-action-icons">
                            <ul class="list-inline">
                              <li class="list-inline-item">
                                <a href="#"
                                  ><!-- Download SVG icon from http://tabler.io/icons/icon/archive -->
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
                                    <path d="M3 4m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                                    <path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-10" />
                                    <path d="M10 12l4 0" /></svg
                                ></a>
                              </li>
                              <li class="list-inline-item">
                                <a href="#"
                                  ><!-- Download SVG icon from http://tabler.io/icons/icon/trash -->
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
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg
                                ></a>
                              </li>
                              <li class="list-inline-item">
                                <a href="#">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/mail-opened -->
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
                                    class="icon email-action-icons-item icon-2"
                                  >
                                    <path d="M3 9l9 6l9 -6l-9 -6l-9 6" />
                                    <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                                    <path d="M3 19l6 -6" />
                                    <path d="M15 13l6 6" />
                                  </svg>
                                </a>
                              </li>
                              <li class="list-inline-item">
                                <a href="#"
                                  ><!-- Download SVG icon from http://tabler.io/icons/icon/clock -->
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
                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                    <path d="M12 7v5l3 3" /></svg
                                ></a>
                              </li>
                            </ul>
                          </div>
                        </li>
                        <li>
                          <div class="email-sender-info">
                            <div class="checkbox-wrapper-mail">
                              <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="mail-e4" />
                                <label class="form-check-label" for="mail-e4"></label>
                              </div>
                            </div>
                            <span class="star-toggle"
                              ><!-- Download SVG icon from http://tabler.io/icons/icon/star -->
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
                                <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg
                            ></span>
                            <a href="#" class="email-title">GitHub</a>
                          </div>
                          <div class="email-content">
                            <a href="#" class="email-subject"
                              >[tabler] New issue assigned to you &nbsp;–&nbsp;
                              <span>Issue #3294: Update email inbox page to use data file. Please triage, add labels, and provide an estimate.</span>
                            </a>
                            <div class="email-date">2025-08-25T08:41:00Z</div>
                          </div>
                          <div class="email-action-icons">
                            <ul class="list-inline">
                              <li class="list-inline-item">
                                <a href="#"
                                  ><!-- Download SVG icon from http://tabler.io/icons/icon/archive -->
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
                                    <path d="M3 4m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                                    <path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-10" />
                                    <path d="M10 12l4 0" /></svg
                                ></a>
                              </li>
                              <li class="list-inline-item">
                                <a href="#"
                                  ><!-- Download SVG icon from http://tabler.io/icons/icon/trash -->
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
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg
                                ></a>
                              </li>
                              <li class="list-inline-item">
                                <a href="#">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/mail-opened -->
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
                                    class="icon email-action-icons-item icon-2"
                                  >
                                    <path d="M3 9l9 6l9 -6l-9 -6l-9 6" />
                                    <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                                    <path d="M3 19l6 -6" />
                                    <path d="M15 13l6 6" />
                                  </svg>
                                </a>
                              </li>
                              <li class="list-inline-item">
                                <a href="#"
                                  ><!-- Download SVG icon from http://tabler.io/icons/icon/clock -->
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
                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                    <path d="M12 7v5l3 3" /></svg
                                ></a>
                              </li>
                            </ul>
                          </div>
                        </li>
                        <li>
                          <div class="email-sender-info">
                            <div class="checkbox-wrapper-mail">
                              <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="mail-e5" />
                                <label class="form-check-label" for="mail-e5"></label>
                              </div>
                            </div>
                            <span class="star-toggle"
                              ><!-- Download SVG icon from http://tabler.io/icons/icon/star -->
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
                                <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg
                            ></span>
                            <a href="#" class="email-title">me (2), Stripe</a>
                          </div>
                          <div class="email-content">
                            <a href="#" class="email-subject"
                              >Payout scheduled &nbsp;–&nbsp;
                              <span>A payout of $1,248.32 is scheduled for tomorrow. Funds typically arrive within 2 business days.</span>
                            </a>
                            <div class="email-date">2025-08-24T12:30:00Z</div>
                          </div>
                          <div class="email-action-icons">
                            <ul class="list-inline">
                              <li class="list-inline-item">
                                <a href="#"
                                  ><!-- Download SVG icon from http://tabler.io/icons/icon/archive -->
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
                                    <path d="M3 4m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                                    <path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-10" />
                                    <path d="M10 12l4 0" /></svg
                                ></a>
                              </li>
                              <li class="list-inline-item">
                                <a href="#"
                                  ><!-- Download SVG icon from http://tabler.io/icons/icon/trash -->
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
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg
                                ></a>
                              </li>
                              <li class="list-inline-item">
                                <a href="#">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/mail-opened -->
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
                                    class="icon email-action-icons-item icon-2"
                                  >
                                    <path d="M3 9l9 6l9 -6l-9 -6l-9 6" />
                                    <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                                    <path d="M3 19l6 -6" />
                                    <path d="M15 13l6 6" />
                                  </svg>
                                </a>
                              </li>
                              <li class="list-inline-item">
                                <a href="#"
                                  ><!-- Download SVG icon from http://tabler.io/icons/icon/clock -->
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
                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                    <path d="M12 7v5l3 3" /></svg
                                ></a>
                              </li>
                            </ul>
                          </div>
                        </li>
                        <li>
                          <div class="email-sender-info">
                            <div class="checkbox-wrapper-mail">
                              <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="mail-e6" />
                                <label class="form-check-label" for="mail-e6"></label>
                              </div>
                            </div>
                            <span class="star-toggle"
                              ><!-- Download SVG icon from http://tabler.io/icons/icon/star -->
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
                                <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg
                            ></span>
                            <a href="#" class="email-title">Figma</a>
                          </div>
                          <div class="email-content">
                            <a href="#" class="email-subject"
                              >You were invited to a file &nbsp;–&nbsp;
                              <span>Anna shared ‘Inbox redesign v3’ with you. Review the latest components and leave feedback in comments.</span>
                            </a>
                            <div class="email-date">2025-08-24T07:58:00Z</div>
                          </div>
                          <div class="email-action-icons">
                            <ul class="list-inline">
                              <li class="list-inline-item">
                                <a href="#"
                                  ><!-- Download SVG icon from http://tabler.io/icons/icon/archive -->
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
                                    <path d="M3 4m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                                    <path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-10" />
                                    <path d="M10 12l4 0" /></svg
                                ></a>
                              </li>
                              <li class="list-inline-item">
                                <a href="#"
                                  ><!-- Download SVG icon from http://tabler.io/icons/icon/trash -->
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
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg
                                ></a>
                              </li>
                              <li class="list-inline-item">
                                <a href="#">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/mail-opened -->
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
                                    class="icon email-action-icons-item icon-2"
                                  >
                                    <path d="M3 9l9 6l9 -6l-9 -6l-9 6" />
                                    <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                                    <path d="M3 19l6 -6" />
                                    <path d="M15 13l6 6" />
                                  </svg>
                                </a>
                              </li>
                              <li class="list-inline-item">
                                <a href="#"
                                  ><!-- Download SVG icon from http://tabler.io/icons/icon/clock -->
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
                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                    <path d="M12 7v5l3 3" /></svg
                                ></a>
                              </li>
                            </ul>
                          </div>
                        </li>
                        <li>
                          <div class="email-sender-info">
                            <div class="checkbox-wrapper-mail">
                              <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="mail-e7" />
                                <label class="form-check-label" for="mail-e7"></label>
                              </div>
                            </div>
                            <span class="star-toggle"
                              ><!-- Download SVG icon from http://tabler.io/icons/icon/star -->
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
                                <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg
                            ></span>
                            <a href="#" class="email-title">Calendly</a>
                          </div>
                          <div class="email-content">
                            <a href="#" class="email-subject"
                              >Event confirmed for Fri 3 PM &nbsp;–&nbsp;
                              <span>Your meeting with Chris is confirmed for this Friday at 3 PM. A calendar invite with the video link was attached.</span>
                            </a>
                            <div class="email-date">2025-08-23T14:21:00Z</div>
                          </div>
                          <div class="email-action-icons">
                            <ul class="list-inline">
                              <li class="list-inline-item">
                                <a href="#"
                                  ><!-- Download SVG icon from http://tabler.io/icons/icon/archive -->
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
                                    <path d="M3 4m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                                    <path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-10" />
                                    <path d="M10 12l4 0" /></svg
                                ></a>
                              </li>
                              <li class="list-inline-item">
                                <a href="#"
                                  ><!-- Download SVG icon from http://tabler.io/icons/icon/trash -->
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
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg
                                ></a>
                              </li>
                              <li class="list-inline-item">
                                <a href="#">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/mail-opened -->
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
                                    class="icon email-action-icons-item icon-2"
                                  >
                                    <path d="M3 9l9 6l9 -6l-9 -6l-9 6" />
                                    <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                                    <path d="M3 19l6 -6" />
                                    <path d="M15 13l6 6" />
                                  </svg>
                                </a>
                              </li>
                              <li class="list-inline-item">
                                <a href="#"
                                  ><!-- Download SVG icon from http://tabler.io/icons/icon/clock -->
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
                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                    <path d="M12 7v5l3 3" /></svg
                                ></a>
                              </li>
                            </ul>
                          </div>
                        </li>
                        <li>
                          <div class="email-sender-info">
                            <div class="checkbox-wrapper-mail">
                              <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="mail-e8" />
                                <label class="form-check-label" for="mail-e8"></label>
                              </div>
                            </div>
                            <span class="star-toggle"
                              ><!-- Download SVG icon from http://tabler.io/icons/icon/star -->
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
                                <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg
                            ></span>
                            <a href="#" class="email-title">Twitter</a>
                          </div>
                          <div class="email-content">
                            <a href="#" class="email-subject"
                              >New followers this week &nbsp;–&nbsp;
                              <span>You gained 27 new followers. See who followed you and engage with their posts to grow reach.</span>
                            </a>
                            <div class="email-date">2025-08-23T06:12:00Z</div>
                          </div>
                          <div class="email-action-icons">
                            <ul class="list-inline">
                              <li class="list-inline-item">
                                <a href="#"
                                  ><!-- Download SVG icon from http://tabler.io/icons/icon/archive -->
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
                                    <path d="M3 4m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                                    <path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-10" />
                                    <path d="M10 12l4 0" /></svg
                                ></a>
                              </li>
                              <li class="list-inline-item">
                                <a href="#"
                                  ><!-- Download SVG icon from http://tabler.io/icons/icon/trash -->
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
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg
                                ></a>
                              </li>
                              <li class="list-inline-item">
                                <a href="#">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/mail-opened -->
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
                                    class="icon email-action-icons-item icon-2"
                                  >
                                    <path d="M3 9l9 6l9 -6l-9 -6l-9 6" />
                                    <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                                    <path d="M3 19l6 -6" />
                                    <path d="M15 13l6 6" />
                                  </svg>
                                </a>
                              </li>
                              <li class="list-inline-item">
                                <a href="#"
                                  ><!-- Download SVG icon from http://tabler.io/icons/icon/clock -->
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
                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                    <path d="M12 7v5l3 3" /></svg
                                ></a>
                              </li>
                            </ul>
                          </div>
                        </li>
                        <li>
                          <div class="email-sender-info">
                            <div class="checkbox-wrapper-mail">
                              <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="mail-e9" />
                                <label class="form-check-label" for="mail-e9"></label>
                              </div>
                            </div>
                            <span class="star-toggle"
                              ><!-- Download SVG icon from http://tabler.io/icons/icon/star -->
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
                                <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg
                            ></span>
                            <a href="#" class="email-title">Product Hunt</a>
                          </div>
                          <div class="email-content">
                            <a href="#" class="email-subject"
                              >Today's top launches &nbsp;–&nbsp;
                              <span>Catch up on trending products you might like. Today's list features tools for design and developer productivity.</span>
                            </a>
                            <div class="email-date">2025-08-22T19:33:00Z</div>
                          </div>
                          <div class="email-action-icons">
                            <ul class="list-inline">
                              <li class="list-inline-item">
                                <a href="#"
                                  ><!-- Download SVG icon from http://tabler.io/icons/icon/archive -->
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
                                    <path d="M3 4m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                                    <path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-10" />
                                    <path d="M10 12l4 0" /></svg
                                ></a>
                              </li>
                              <li class="list-inline-item">
                                <a href="#"
                                  ><!-- Download SVG icon from http://tabler.io/icons/icon/trash -->
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
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg
                                ></a>
                              </li>
                              <li class="list-inline-item">
                                <a href="#">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/mail-opened -->
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
                                    class="icon email-action-icons-item icon-2"
                                  >
                                    <path d="M3 9l9 6l9 -6l-9 -6l-9 6" />
                                    <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                                    <path d="M3 19l6 -6" />
                                    <path d="M15 13l6 6" />
                                  </svg>
                                </a>
                              </li>
                              <li class="list-inline-item">
                                <a href="#"
                                  ><!-- Download SVG icon from http://tabler.io/icons/icon/clock -->
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
                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                    <path d="M12 7v5l3 3" /></svg
                                ></a>
                              </li>
                            </ul>
                          </div>
                        </li>
                        <li>
                          <div class="email-sender-info">
                            <div class="checkbox-wrapper-mail">
                              <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="mail-e10" />
                                <label class="form-check-label" for="mail-e10"></label>
                              </div>
                            </div>
                            <span class="star-toggle"
                              ><!-- Download SVG icon from http://tabler.io/icons/icon/star -->
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
                                <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg
                            ></span>
                            <a href="#" class="email-title">Notion</a>
                          </div>
                          <div class="email-content">
                            <a href="#" class="email-subject"
                              >Weekly summary: Inbox project &nbsp;–&nbsp;
                              <span>3 tasks completed, 2 comments, 1 new page added. Click through to see highlights and next steps.</span>
                            </a>
                            <div class="email-date">2025-08-22T08:00:00Z</div>
                          </div>
                          <div class="email-action-icons">
                            <ul class="list-inline">
                              <li class="list-inline-item">
                                <a href="#"
                                  ><!-- Download SVG icon from http://tabler.io/icons/icon/archive -->
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
                                    <path d="M3 4m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                                    <path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-10" />
                                    <path d="M10 12l4 0" /></svg
                                ></a>
                              </li>
                              <li class="list-inline-item">
                                <a href="#"
                                  ><!-- Download SVG icon from http://tabler.io/icons/icon/trash -->
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
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg
                                ></a>
                              </li>
                              <li class="list-inline-item">
                                <a href="#">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/mail-opened -->
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
                                    class="icon email-action-icons-item icon-2"
                                  >
                                    <path d="M3 9l9 6l9 -6l-9 -6l-9 6" />
                                    <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                                    <path d="M3 19l6 -6" />
                                    <path d="M15 13l6 6" />
                                  </svg>
                                </a>
                              </li>
                              <li class="list-inline-item">
                                <a href="#"
                                  ><!-- Download SVG icon from http://tabler.io/icons/icon/clock -->
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
                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                    <path d="M12 7v5l3 3" /></svg
                                ></a>
                              </li>
                            </ul>
                          </div>
                        </li>
                        <li>
                          <div class="email-sender-info">
                            <div class="checkbox-wrapper-mail">
                              <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="mail-e11" />
                                <label class="form-check-label" for="mail-e11"></label>
                              </div>
                            </div>
                            <span class="star-toggle"
                              ><!-- Download SVG icon from http://tabler.io/icons/icon/star -->
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
                                <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg
                            ></span>
                            <a href="#" class="email-title">AWS</a>
                          </div>
                          <div class="email-content">
                            <a href="#" class="email-subject"
                              >Billing alert threshold reached &nbsp;–&nbsp;
                              <span>Your usage exceeded the alert threshold for this month. Consider upgrading your plan or adjusting limits.</span>
                            </a>
                            <div class="email-date">2025-08-21T18:45:00Z</div>
                          </div>
                          <div class="email-action-icons">
                            <ul class="list-inline">
                              <li class="list-inline-item">
                                <a href="#"
                                  ><!-- Download SVG icon from http://tabler.io/icons/icon/archive -->
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
                                    <path d="M3 4m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                                    <path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-10" />
                                    <path d="M10 12l4 0" /></svg
                                ></a>
                              </li>
                              <li class="list-inline-item">
                                <a href="#"
                                  ><!-- Download SVG icon from http://tabler.io/icons/icon/trash -->
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
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg
                                ></a>
                              </li>
                              <li class="list-inline-item">
                                <a href="#">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/mail-opened -->
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
                                    class="icon email-action-icons-item icon-2"
                                  >
                                    <path d="M3 9l9 6l9 -6l-9 -6l-9 6" />
                                    <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                                    <path d="M3 19l6 -6" />
                                    <path d="M15 13l6 6" />
                                  </svg>
                                </a>
                              </li>
                              <li class="list-inline-item">
                                <a href="#"
                                  ><!-- Download SVG icon from http://tabler.io/icons/icon/clock -->
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
                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                    <path d="M12 7v5l3 3" /></svg
                                ></a>
                              </li>
                            </ul>
                          </div>
                        </li>
                        <li>
                          <div class="email-sender-info">
                            <div class="checkbox-wrapper-mail">
                              <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="mail-e12" />
                                <label class="form-check-label" for="mail-e12"></label>
                              </div>
                            </div>
                            <span class="star-toggle"
                              ><!-- Download SVG icon from http://tabler.io/icons/icon/star -->
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
                                <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg
                            ></span>
                            <a href="#" class="email-title">LinkedIn</a>
                          </div>
                          <div class="email-content">
                            <a href="#" class="email-subject"
                              >Someone viewed your profile &nbsp;–&nbsp;
                              <span>See who looked at your profile this week. Strengthen your network by following up with recent viewers.</span>
                            </a>
                            <div class="email-date">2025-08-21T10:27:00Z</div>
                          </div>
                          <div class="email-action-icons">
                            <ul class="list-inline">
                              <li class="list-inline-item">
                                <a href="#"
                                  ><!-- Download SVG icon from http://tabler.io/icons/icon/archive -->
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
                                    <path d="M3 4m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                                    <path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-10" />
                                    <path d="M10 12l4 0" /></svg
                                ></a>
                              </li>
                              <li class="list-inline-item">
                                <a href="#"
                                  ><!-- Download SVG icon from http://tabler.io/icons/icon/trash -->
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
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg
                                ></a>
                              </li>
                              <li class="list-inline-item">
                                <a href="#">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/mail-opened -->
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
                                    class="icon email-action-icons-item icon-2"
                                  >
                                    <path d="M3 9l9 6l9 -6l-9 -6l-9 6" />
                                    <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                                    <path d="M3 19l6 -6" />
                                    <path d="M15 13l6 6" />
                                  </svg>
                                </a>
                              </li>
                              <li class="list-inline-item">
                                <a href="#"
                                  ><!-- Download SVG icon from http://tabler.io/icons/icon/clock -->
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
                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                    <path d="M12 7v5l3 3" /></svg
                                ></a>
                              </li>
                            </ul>
                          </div>
                        </li>
                        <li>
                          <div class="email-sender-info">
                            <div class="checkbox-wrapper-mail">
                              <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="mail-e13" />
                                <label class="form-check-label" for="mail-e13"></label>
                              </div>
                            </div>
                            <span class="star-toggle"
                              ><!-- Download SVG icon from http://tabler.io/icons/icon/star -->
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
                                <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg
                            ></span>
                            <a href="#" class="email-title">Google Alerts</a>
                          </div>
                          <div class="email-content">
                            <a href="#" class="email-subject"
                              >Alert for: Tabler UI &nbsp;–&nbsp;
                              <span>New articles mentioning Tabler UI were found. Skim the summaries and set alerts for related keywords.</span>
                            </a>
                            <div class="email-date">2025-08-20T16:14:00Z</div>
                          </div>
                          <div class="email-action-icons">
                            <ul class="list-inline">
                              <li class="list-inline-item">
                                <a href="#"
                                  ><!-- Download SVG icon from http://tabler.io/icons/icon/archive -->
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
                                    <path d="M3 4m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                                    <path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-10" />
                                    <path d="M10 12l4 0" /></svg
                                ></a>
                              </li>
                              <li class="list-inline-item">
                                <a href="#"
                                  ><!-- Download SVG icon from http://tabler.io/icons/icon/trash -->
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
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg
                                ></a>
                              </li>
                              <li class="list-inline-item">
                                <a href="#">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/mail-opened -->
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
                                    class="icon email-action-icons-item icon-2"
                                  >
                                    <path d="M3 9l9 6l9 -6l-9 -6l-9 6" />
                                    <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                                    <path d="M3 19l6 -6" />
                                    <path d="M15 13l6 6" />
                                  </svg>
                                </a>
                              </li>
                              <li class="list-inline-item">
                                <a href="#"
                                  ><!-- Download SVG icon from http://tabler.io/icons/icon/clock -->
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
                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                    <path d="M12 7v5l3 3" /></svg
                                ></a>
                              </li>
                            </ul>
                          </div>
                        </li>
                        <li>
                          <div class="email-sender-info">
                            <div class="checkbox-wrapper-mail">
                              <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="mail-e14" />
                                <label class="form-check-label" for="mail-e14"></label>
                              </div>
                            </div>
                            <span class="star-toggle"
                              ><!-- Download SVG icon from http://tabler.io/icons/icon/star -->
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
                                <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg
                            ></span>
                            <a href="#" class="email-title">Medium</a>
                          </div>
                          <div class="email-content">
                            <a href="#" class="email-subject"
                              >Stories you might like &nbsp;–&nbsp;
                              <span>Handpicked stories based on your reading history. Discover deep dives on design systems and UX workflows.</span>
                            </a>
                            <div class="email-date">2025-08-20T07:05:00Z</div>
                          </div>
                          <div class="email-action-icons">
                            <ul class="list-inline">
                              <li class="list-inline-item">
                                <a href="#"
                                  ><!-- Download SVG icon from http://tabler.io/icons/icon/archive -->
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
                                    <path d="M3 4m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                                    <path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-10" />
                                    <path d="M10 12l4 0" /></svg
                                ></a>
                              </li>
                              <li class="list-inline-item">
                                <a href="#"
                                  ><!-- Download SVG icon from http://tabler.io/icons/icon/trash -->
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
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg
                                ></a>
                              </li>
                              <li class="list-inline-item">
                                <a href="#">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/mail-opened -->
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
                                    class="icon email-action-icons-item icon-2"
                                  >
                                    <path d="M3 9l9 6l9 -6l-9 -6l-9 6" />
                                    <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                                    <path d="M3 19l6 -6" />
                                    <path d="M15 13l6 6" />
                                  </svg>
                                </a>
                              </li>
                              <li class="list-inline-item">
                                <a href="#"
                                  ><!-- Download SVG icon from http://tabler.io/icons/icon/clock -->
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
                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                    <path d="M12 7v5l3 3" /></svg
                                ></a>
                              </li>
                            </ul>
                          </div>
                        </li>
                        <li>
                          <div class="email-sender-info">
                            <div class="checkbox-wrapper-mail">
                              <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="mail-e15" />
                                <label class="form-check-label" for="mail-e15"></label>
                              </div>
                            </div>
                            <span class="star-toggle"
                              ><!-- Download SVG icon from http://tabler.io/icons/icon/star -->
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
                                <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg
                            ></span>
                            <a href="#" class="email-title">Slack</a>
                          </div>
                          <div class="email-content">
                            <a href="#" class="email-subject"
                              >Missed messages in #design &nbsp;–&nbsp;
                              <span>You have 14 unread messages across 3 channels. Catch up now to keep the conversation moving.</span>
                            </a>
                            <div class="email-date">2025-08-19T21:43:00Z</div>
                          </div>
                          <div class="email-action-icons">
                            <ul class="list-inline">
                              <li class="list-inline-item">
                                <a href="#"
                                  ><!-- Download SVG icon from http://tabler.io/icons/icon/archive -->
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
                                    <path d="M3 4m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                                    <path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-10" />
                                    <path d="M10 12l4 0" /></svg
                                ></a>
                              </li>
                              <li class="list-inline-item">
                                <a href="#"
                                  ><!-- Download SVG icon from http://tabler.io/icons/icon/trash -->
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
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg
                                ></a>
                              </li>
                              <li class="list-inline-item">
                                <a href="#">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/mail-opened -->
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
                                    class="icon email-action-icons-item icon-2"
                                  >
                                    <path d="M3 9l9 6l9 -6l-9 -6l-9 6" />
                                    <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                                    <path d="M3 19l6 -6" />
                                    <path d="M15 13l6 6" />
                                  </svg>
                                </a>
                              </li>
                              <li class="list-inline-item">
                                <a href="#"
                                  ><!-- Download SVG icon from http://tabler.io/icons/icon/clock -->
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
                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                    <path d="M12 7v5l3 3" /></svg
                                ></a>
                              </li>
                            </ul>
                          </div>
                        </li>
                        <li>
                          <div class="email-sender-info">
                            <div class="checkbox-wrapper-mail">
                              <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="mail-e16" />
                                <label class="form-check-label" for="mail-e16"></label>
                              </div>
                            </div>
                            <span class="star-toggle"
                              ><!-- Download SVG icon from http://tabler.io/icons/icon/star -->
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
                                <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg
                            ></span>
                            <a href="#" class="email-title">Sentry</a>
                          </div>
                          <div class="email-content">
                            <a href="#" class="email-subject"
                              >New error: TypeError in preview &nbsp;–&nbsp;
                              <span>Tabler preview threw TypeError: cannot read properties of undefined. Investigate stack trace and recent commits.</span>
                            </a>
                            <div class="email-date">2025-08-19T11:20:00Z</div>
                          </div>
                          <div class="email-action-icons">
                            <ul class="list-inline">
                              <li class="list-inline-item">
                                <a href="#"
                                  ><!-- Download SVG icon from http://tabler.io/icons/icon/archive -->
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
                                    <path d="M3 4m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                                    <path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-10" />
                                    <path d="M10 12l4 0" /></svg
                                ></a>
                              </li>
                              <li class="list-inline-item">
                                <a href="#"
                                  ><!-- Download SVG icon from http://tabler.io/icons/icon/trash -->
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
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg
                                ></a>
                              </li>
                              <li class="list-inline-item">
                                <a href="#">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/mail-opened -->
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
                                    class="icon email-action-icons-item icon-2"
                                  >
                                    <path d="M3 9l9 6l9 -6l-9 -6l-9 6" />
                                    <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                                    <path d="M3 19l6 -6" />
                                    <path d="M15 13l6 6" />
                                  </svg>
                                </a>
                              </li>
                              <li class="list-inline-item">
                                <a href="#"
                                  ><!-- Download SVG icon from http://tabler.io/icons/icon/clock -->
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
                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                    <path d="M12 7v5l3 3" /></svg
                                ></a>
                              </li>
                            </ul>
                          </div>
                        </li>
                        <li>
                          <div class="email-sender-info">
                            <div class="checkbox-wrapper-mail">
                              <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="mail-e17" />
                                <label class="form-check-label" for="mail-e17"></label>
                              </div>
                            </div>
                            <span class="star-toggle"
                              ><!-- Download SVG icon from http://tabler.io/icons/icon/star -->
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
                                <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg
                            ></span>
                            <a href="#" class="email-title">Dribbble</a>
                          </div>
                          <div class="email-content">
                            <a href="#" class="email-subject"
                              >New shots from designers you follow &nbsp;–&nbsp;
                              <span>A fresh batch of inspiration is here. Explore new shots and save your favorites to collections.</span>
                            </a>
                            <div class="email-date">2025-08-18T15:37:00Z</div>
                          </div>
                          <div class="email-action-icons">
                            <ul class="list-inline">
                              <li class="list-inline-item">
                                <a href="#"
                                  ><!-- Download SVG icon from http://tabler.io/icons/icon/archive -->
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
                                    <path d="M3 4m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                                    <path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-10" />
                                    <path d="M10 12l4 0" /></svg
                                ></a>
                              </li>
                              <li class="list-inline-item">
                                <a href="#"
                                  ><!-- Download SVG icon from http://tabler.io/icons/icon/trash -->
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
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg
                                ></a>
                              </li>
                              <li class="list-inline-item">
                                <a href="#">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/mail-opened -->
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
                                    class="icon email-action-icons-item icon-2"
                                  >
                                    <path d="M3 9l9 6l9 -6l-9 -6l-9 6" />
                                    <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                                    <path d="M3 19l6 -6" />
                                    <path d="M15 13l6 6" />
                                  </svg>
                                </a>
                              </li>
                              <li class="list-inline-item">
                                <a href="#"
                                  ><!-- Download SVG icon from http://tabler.io/icons/icon/clock -->
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
                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                    <path d="M12 7v5l3 3" /></svg
                                ></a>
                              </li>
                            </ul>
                          </div>
                        </li>
                        <li>
                          <div class="email-sender-info">
                            <div class="checkbox-wrapper-mail">
                              <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="mail-e18" />
                                <label class="form-check-label" for="mail-e18"></label>
                              </div>
                            </div>
                            <span class="star-toggle"
                              ><!-- Download SVG icon from http://tabler.io/icons/icon/star -->
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
                                <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg
                            ></span>
                            <a href="#" class="email-title">Airbnb</a>
                          </div>
                          <div class="email-content">
                            <a href="#" class="email-subject"
                              >Plan your next getaway &nbsp;–&nbsp;
                              <span>Deals on stays you'll love this fall. Flexible dates and free cancellation on many options.</span>
                            </a>
                            <div class="email-date">2025-08-18T06:50:00Z</div>
                          </div>
                          <div class="email-action-icons">
                            <ul class="list-inline">
                              <li class="list-inline-item">
                                <a href="#"
                                  ><!-- Download SVG icon from http://tabler.io/icons/icon/archive -->
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
                                    <path d="M3 4m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                                    <path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-10" />
                                    <path d="M10 12l4 0" /></svg
                                ></a>
                              </li>
                              <li class="list-inline-item">
                                <a href="#"
                                  ><!-- Download SVG icon from http://tabler.io/icons/icon/trash -->
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
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg
                                ></a>
                              </li>
                              <li class="list-inline-item">
                                <a href="#">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/mail-opened -->
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
                                    class="icon email-action-icons-item icon-2"
                                  >
                                    <path d="M3 9l9 6l9 -6l-9 -6l-9 6" />
                                    <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                                    <path d="M3 19l6 -6" />
                                    <path d="M15 13l6 6" />
                                  </svg>
                                </a>
                              </li>
                              <li class="list-inline-item">
                                <a href="#"
                                  ><!-- Download SVG icon from http://tabler.io/icons/icon/clock -->
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
                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                    <path d="M12 7v5l3 3" /></svg
                                ></a>
                              </li>
                            </ul>
                          </div>
                        </li>
                        <li>
                          <div class="email-sender-info">
                            <div class="checkbox-wrapper-mail">
                              <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="mail-e19" />
                                <label class="form-check-label" for="mail-e19"></label>
                              </div>
                            </div>
                            <span class="star-toggle"
                              ><!-- Download SVG icon from http://tabler.io/icons/icon/star -->
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
                                <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg
                            ></span>
                            <a href="#" class="email-title">Google Calendar</a>
                          </div>
                          <div class="email-content">
                            <a href="#" class="email-subject"
                              >Reminder: Standup in 10 minutes &nbsp;–&nbsp;
                              <span>Daily standup starts at 9:30 AM. Share yesterday's progress, today's plan, and blockers.</span>
                            </a>
                            <div class="email-date">2025-08-17T09:20:00Z</div>
                          </div>
                          <div class="email-action-icons">
                            <ul class="list-inline">
                              <li class="list-inline-item">
                                <a href="#"
                                  ><!-- Download SVG icon from http://tabler.io/icons/icon/archive -->
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
                                    <path d="M3 4m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                                    <path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-10" />
                                    <path d="M10 12l4 0" /></svg
                                ></a>
                              </li>
                              <li class="list-inline-item">
                                <a href="#"
                                  ><!-- Download SVG icon from http://tabler.io/icons/icon/trash -->
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
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg
                                ></a>
                              </li>
                              <li class="list-inline-item">
                                <a href="#">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/mail-opened -->
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
                                    class="icon email-action-icons-item icon-2"
                                  >
                                    <path d="M3 9l9 6l9 -6l-9 -6l-9 6" />
                                    <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                                    <path d="M3 19l6 -6" />
                                    <path d="M15 13l6 6" />
                                  </svg>
                                </a>
                              </li>
                              <li class="list-inline-item">
                                <a href="#"
                                  ><!-- Download SVG icon from http://tabler.io/icons/icon/clock -->
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
                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                    <path d="M12 7v5l3 3" /></svg
                                ></a>
                              </li>
                            </ul>
                          </div>
                        </li>
                        <li>
                          <div class="email-sender-info">
                            <div class="checkbox-wrapper-mail">
                              <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="mail-e20" />
                                <label class="form-check-label" for="mail-e20"></label>
                              </div>
                            </div>
                            <span class="star-toggle"
                              ><!-- Download SVG icon from http://tabler.io/icons/icon/star -->
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
                                <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg
                            ></span>
                            <a href="#" class="email-title">Superstore</a>
                          </div>
                          <div class="email-content">
                            <a href="#" class="email-subject"
                              >Exclusive 25% off for you &nbsp;–&nbsp;
                              <span>Save big on electronics this weekend only. Limited quantities—use code WEEKEND25 at checkout.</span>
                            </a>
                            <div class="email-date">2025-08-16T13:00:00Z</div>
                          </div>
                          <div class="email-action-icons">
                            <ul class="list-inline">
                              <li class="list-inline-item">
                                <a href="#"
                                  ><!-- Download SVG icon from http://tabler.io/icons/icon/archive -->
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
                                    <path d="M3 4m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                                    <path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-10" />
                                    <path d="M10 12l4 0" /></svg
                                ></a>
                              </li>
                              <li class="list-inline-item">
                                <a href="#"
                                  ><!-- Download SVG icon from http://tabler.io/icons/icon/trash -->
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
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg
                                ></a>
                              </li>
                              <li class="list-inline-item">
                                <a href="#">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/mail-opened -->
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
                                    class="icon email-action-icons-item icon-2"
                                  >
                                    <path d="M3 9l9 6l9 -6l-9 -6l-9 6" />
                                    <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                                    <path d="M3 19l6 -6" />
                                    <path d="M15 13l6 6" />
                                  </svg>
                                </a>
                              </li>
                              <li class="list-inline-item">
                                <a href="#"
                                  ><!-- Download SVG icon from http://tabler.io/icons/icon/clock -->
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
                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                    <path d="M12 7v5l3 3" /></svg
                                ></a>
                              </li>
                            </ul>
                          </div>
                        </li>
                      </ul>
                    </div>
                    <div class="row">
                      <div class="col-7 mt-1">Showing 1 - 20 of 20</div>
                      <!-- end col-->
                      <div class="col-5">
                        <div class="btn-group float-end">
                          <button type="button" class="btn btn-icon">
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
                          </button>
                          <button type="button" class="btn btn-icon">
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
                          </button>
                        </div>
                      </div>
                      <!-- end col-->
                    </div>
                    <!-- end row-->
                  </div>
                </div>
              </div>
            </div>
            <!-- BEGIN MODAL -->
            <!-- END MODAL -->
          </div>
        </main>
        <!-- END PAGE BODY -->
        @include('samples.includes.footer')
      </div>
    </div>
    <!-- BEGIN PAGE MODALS -->
    <div class="modal modal-blur fade" id="modal-new-email" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-1 modal-dialog-centered" role="document">
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
    <!-- END PAGE MODALS -->
    @include('samples.includes.settings')
    <!-- BEGIN PAGE LIBRARIES -->
    <!-- END PAGE LIBRARIES -->
    @include('samples.includes.scripts')
  </body>
</html>
