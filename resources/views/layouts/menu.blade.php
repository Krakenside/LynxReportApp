<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>OneUI - Bootstrap 5 Admin Template &amp; UI Framework</title>

    <meta name="description" content="OneUI - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="OneUI - Bootstrap 5 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="OneUI">
    <meta property="og:description" content="OneUI - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="assets/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="assets/js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="assets/js/plugins/datatables-buttons-bs5/css/buttons.bootstrap5.min.css">
    <link rel="stylesheet" href="assets/js/plugins/datatables-responsive-bs5/css/responsive.bootstrap5.min.css">

    <!-- OneUI framework -->
    <link rel="stylesheet" id="css-main" href="assets/css/oneui.min.css">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/amethyst.min.css"> -->
    <!-- END Stylesheets -->
  </head>

  <body>
    <!-- Page Container -->
    <!--
        Available classes for #page-container:

    GENERIC

      'remember-theme'                            Remembers active color theme and dark mode between pages using localStorage when set through
                                                  - Theme helper buttons [data-toggle="theme"],
                                                  - Layout helper buttons [data-toggle="layout" data-action="dark_mode_[on/off/toggle]"]
                                                  - ..and/or One.layout('dark_mode_[on/off/toggle]')

    SIDEBAR & SIDE OVERLAY

      'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
      'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
      'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
      'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
      'sidebar-dark'                              Dark themed sidebar

      'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
      'side-overlay-o'                            Visible Side Overlay by default

      'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

      'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

    HEADER

      ''                                          Static Header if no class is added
      'page-header-fixed'                         Fixed Header

    HEADER STYLE

      ''                                          Light themed Header
      'page-header-dark'                          Dark themed Header

    MAIN CONTENT LAYOUT

      ''                                          Full width Main Content if no class is added
      'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
      'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)

    DARK MODE

      'sidebar-dark page-header-dark dark-mode'   Enable dark mode (light sidebar/header is not supported with dark mode)
    -->
    <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">
      <!-- Side Overlay-->
      <aside id="side-overlay">
        <!-- Side Header -->
        <div class="content-header border-bottom">
          <!-- User Avatar -->
          <a class="img-link me-1" href="javascript:void(0)">
            <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar10.jpg" alt="">
          </a>
          <!-- END User Avatar -->

          <!-- User Info -->
          <div class="ms-2">
            <a class="text-dark fw-semibold fs-sm" href="javascript:void(0)">John Smith</a>
          </div>
          <!-- END User Info -->

          <!-- Close Side Overlay -->
          <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
          <a class="ms-auto btn btn-sm btn-alt-danger" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_close">
            <i class="fa fa-fw fa-times"></i>
          </a>
          <!-- END Close Side Overlay -->
        </div>
        <!-- END Side Header -->

        <!-- Side Content -->
        <div class="content-side">
          <!-- Side Overlay Tabs -->
          <div class="block block-transparent pull-x pull-t">
            <ul class="nav nav-tabs nav-tabs-block nav-justified" role="tablist">
              <li class="nav-item">
                <button type="button" class="nav-link active" id="so-overview-tab" data-bs-toggle="tab" data-bs-target="#so-overview" role="tab" aria-controls="so-overview" aria-selected="true">
                  <i class="fa fa-fw fa-coffee text-gray opacity-75 me-1"></i> Overview
                </button>
              </li>
              <li class="nav-item">
                <button type="button" class="nav-link" id="so-sales-tab" data-bs-toggle="tab" data-bs-target="#so-sales" role="tab" aria-controls="so-sales" aria-selected="false">
                  <i class="fa fa-fw fa-chart-line text-gray opacity-75 me-1"></i> Sales
                </button>
              </li>
            </ul>
            <div class="block-content tab-content overflow-hidden">
              <!-- Overview Tab -->
              <div class="tab-pane pull-x fade fade-left show active" id="so-overview" role="tabpanel" aria-labelledby="so-overview-tab">
                <!-- Activity -->
                <div class="block block-transparent">
                  <div class="block-header block-header-default">
                    <h3 class="block-title">Recent Activity</h3>
                    <div class="block-options">
                      <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                        <i class="si si-refresh"></i>
                      </button>
                      <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                    </div>
                  </div>
                  <div class="block-content">
                    <!-- Activity List -->
                    <ul class="nav-items mb-0">
                      <li>
                        <a class="text-dark d-flex py-2" href="javascript:void(0)">
                          <div class="flex-shrink-0 me-3 ms-2">
                            <i class="fa fa-fw fa-plus text-success"></i>
                          </div>
                          <div class="flex-grow-1 fs-sm">
                            <div class="fw-semibold">New sale ($15)</div>
                            <div>Admin Template</div>
                            <small class="text-muted">3 min ago</small>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a class="text-dark d-flex py-2" href="javascript:void(0)">
                          <div class="flex-shrink-0 me-3 ms-2">
                            <i class="fa fa-fw fa-pencil-alt text-info"></i>
                          </div>
                          <div class="flex-grow-1 fs-sm">
                            <div class="fw-semibold">You edited the file</div>
                            <div>Documentation.doc</div>
                            <small class="text-muted">15 min ago</small>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a class="text-dark d-flex py-2" href="javascript:void(0)">
                          <div class="flex-shrink-0 me-3 ms-2">
                            <i class="fa fa-fw fa-trash text-danger"></i>
                          </div>
                          <div class="flex-grow-1 fs-sm">
                            <div class="fw-semibold">Project deleted</div>
                            <div>Line Icon Set</div>
                            <small class="text-muted">4 hours ago</small>
                          </div>
                        </a>
                      </li>
                    </ul>
                    <!-- END Activity List -->
                  </div>
                </div>
                <!-- END Activity -->

                <!-- Online Friends -->
                <div class="block block-transparent">
                  <div class="block-header block-header-default">
                    <h3 class="block-title">Online Friends</h3>
                    <div class="block-options">
                      <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                        <i class="si si-refresh"></i>
                      </button>
                      <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                    </div>
                  </div>
                  <div class="block-content">
                    <!-- Users Navigation -->
                    <ul class="nav-items mb-0">
                      <li>
                        <a class="d-flex py-2" href="javascript:void(0)">
                          <div class="me-3 ms-2 overlay-container overlay-bottom">
                            <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar3.jpg" alt="">
                            <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-success"></span>
                          </div>
                          <div class="flex-grow-1 fs-sm">
                            <div class="fw-semibold">Lori Grant</div>
                            <div class="text-muted">Copywriter</div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a class="d-flex py-2" href="javascript:void(0)">
                          <div class="me-3 ms-2 overlay-container overlay-bottom">
                            <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar12.jpg" alt="">
                            <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-success"></span>
                          </div>
                          <div class="flex-grow-1 fs-sm">
                            <div class="fw-semibold">Thomas Riley</div>
                            <div class="text-muted">Web Developer</div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a class="d-flex py-2" href="javascript:void(0)">
                          <div class="me-3 ms-2 overlay-container overlay-bottom">
                            <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar3.jpg" alt="">
                            <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-success"></span>
                          </div>
                          <div class="flex-grow-1 fs-sm">
                            <div class="fw-semibold">Melissa Rice</div>
                            <div class="text-muted">Web Designer</div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a class="d-flex py-2" href="javascript:void(0)">
                          <div class="me-3 ms-2 overlay-container overlay-bottom">
                            <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar4.jpg" alt="">
                            <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-warning"></span>
                          </div>
                          <div class="flex-grow-1 fs-sm">
                            <div class="fw-semibold">Danielle Jones</div>
                            <div class="text-muted">Photographer</div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a class="d-flex py-2" href="javascript:void(0)">
                          <div class="me-3 ms-2 overlay-container overlay-bottom">
                            <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar16.jpg" alt="">
                            <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-warning"></span>
                          </div>
                          <div class="flex-grow-1 fs-sm">
                            <div class="fw-semibold">Jose Wagner</div>
                            <div class="text-muted">Graphic Designer</div>
                          </div>
                        </a>
                      </li>
                    </ul>
                    <!-- END Users Navigation -->
                  </div>
                </div>
                <!-- END Online Friends -->

                <!-- Quick Settings -->
                <div class="block block-transparent mb-0">
                  <div class="block-header block-header-default">
                    <h3 class="block-title">Quick Settings</h3>
                    <div class="block-options">
                      <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                    </div>
                  </div>
                  <div class="block-content">
                    <!-- Quick Settings Form -->
                    <form action="be_pages_dashboard.html" method="POST" onsubmit="return false;">
                      <div class="mb-4">
                        <p class="fs-sm fw-semibold mb-2">
                          Online Status
                        </p>
                        <div class="form-check form-switch">
                          <input class="form-check-input" type="checkbox" value="" id="so-settings-check1" name="so-settings-check1" checked>
                          <label class="form-check-label fs-sm" for="so-settings-check1">Show your status to all</label>
                        </div>
                      </div>
                      <div class="mb-4">
                        <p class="fs-sm fw-semibold mb-2">
                          Auto Updates
                        </p>
                        <div class="form-check form-switch">
                          <input class="form-check-input" type="checkbox" value="" id="so-settings-check2" name="so-settings-check2" checked>
                          <label class="form-check-label fs-sm" for="so-settings-check2">Keep up to date</label>
                        </div>
                      </div>
                      <div class="mb-4">
                        <p class="fs-sm fw-semibold mb-1">
                          Application Alerts
                        </p>
                        <div class="space-y-2">
                          <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" value="" id="so-settings-check3" name="so-settings-check3" checked>
                            <label class="form-check-label fs-sm" for="so-settings-check3">Email Notifications</label>
                          </div>
                          <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" value="" id="so-settings-check4" name="so-settings-check4" checked>
                            <label class="form-check-label fs-sm" for="so-settings-check4">SMS Notifications</label>
                          </div>
                        </div>
                      </div>
                      <div class="mb-4">
                        <p class="fs-sm fw-semibold mb-1">
                          API
                        </p>
                        <div class="form-check form-switch">
                          <input class="form-check-input" type="checkbox" value="" id="so-settings-check5" name="so-settings-check5" checked>
                          <label class="form-check-label fs-sm" for="so-settings-check5">Enable access</label>
                        </div>
                      </div>
                    </form>
                    <!-- END Quick Settings Form -->
                  </div>
                </div>
                <!-- END Quick Settings -->
              </div>
              <!-- END Overview Tab -->

              <!-- Sales Tab -->
              <div class="tab-pane pull-x fade fade-right" id="so-sales" role="tabpanel" aria-labelledby="so-sales-tab">
                <div class="block block-transparent mb-0">
                  <!-- Stats -->
                  <div class="block-content">
                    <div class="row items-push pull-t">
                      <div class="col-6">
                        <div class="fs-sm fw-semibold text-uppercase">Sales</div>
                        <a class="fs-lg" href="javascript:void(0)">22.030</a>
                      </div>
                      <div class="col-6">
                        <div class="fs-sm fw-semibold text-uppercase">Balance</div>
                        <a class="fs-lg" href="javascript:void(0)">$4.589,00</a>
                      </div>
                    </div>
                  </div>
                  <!-- END Stats -->

                  <!-- Today -->
                  <div class="block-content block-content-full block-content-sm bg-body-light">
                    <div class="row">
                      <div class="col-6">
                        <span class="fs-sm fw-semibold text-uppercase">Today</span>
                      </div>
                      <div class="col-6 text-end">
                        <span class="ext-muted">$996</span>
                      </div>
                    </div>
                  </div>
                  <div class="block-content">
                    <ul class="nav-items push">
                      <li>
                        <a class="text-dark d-flex py-2" href="javascript:void(0)">
                          <div class="flex-shrink-0 me-3 ms-2">
                            <i class="fa fa-fw fa-plus text-success"></i>
                          </div>
                          <div class="flex-grow-1 fs-sm">
                            <div class="fw-semibold">New sale! + $249</div>
                            <small class="text-muted">3 min ago</small>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a class="text-dark d-flex py-2" href="javascript:void(0)">
                          <div class="flex-shrink-0 me-3 ms-2">
                            <i class="fa fa-fw fa-plus text-success"></i>
                          </div>
                          <div class="flex-grow-1 fs-sm">
                            <div class="fw-semibold">New sale! + $129</div>
                            <small class="text-muted">50 min ago</small>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a class="text-dark d-flex py-2" href="javascript:void(0)">
                          <div class="flex-shrink-0 me-3 ms-2">
                            <i class="fa fa-fw fa-plus text-success"></i>
                          </div>
                          <div class="flex-grow-1 fs-sm">
                            <div class="fw-semibold">New sale! + $119</div>
                            <small class="text-muted">2 hours ago</small>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a class="text-dark d-flex py-2" href="javascript:void(0)">
                          <div class="flex-shrink-0 me-3 ms-2">
                            <i class="fa fa-fw fa-plus text-success"></i>
                          </div>
                          <div class="flex-grow-1 fs-sm">
                            <div class="fw-semibold">New sale! + $499</div>
                            <small class="text-muted">3 hours ago</small>
                          </div>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <!-- END Today -->

                  <!-- Yesterday -->
                  <div class="block-content block-content-full block-content-sm bg-body-light">
                    <div class="row">
                      <div class="col-6">
                        <span class="fs-sm fw-semibold text-uppercase">Yesterday</span>
                      </div>
                      <div class="col-6 text-end">
                        <span class="text-muted">$765</span>
                      </div>
                    </div>
                  </div>
                  <div class="block-content">
                    <ul class="nav-items push">
                      <li>
                        <a class="text-dark d-flex py-2" href="javascript:void(0)">
                          <div class="flex-shrink-0 me-3 ms-2">
                            <i class="fa fa-fw fa-plus text-success"></i>
                          </div>
                          <div class="flex-grow-1 fs-sm">
                            <div class="fw-semibold">New sale! + $249</div>
                            <small class="text-muted">26 hours ago</small>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a class="text-dark d-flex py-2" href="javascript:void(0)">
                          <div class="flex-shrink-0 me-3 ms-2">
                            <i class="fa fa-fw fa-minus text-danger"></i>
                          </div>
                          <div class="flex-grow-1 fs-sm">
                            <div class="fw-semibold">Product Purchase - $50</div>
                            <small class="text-muted">28 hours ago</small>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a class="text-dark d-flex py-2" href="javascript:void(0)">
                          <div class="flex-shrink-0 me-3 ms-2">
                            <i class="fa fa-fw fa-plus text-success"></i>
                          </div>
                          <div class="flex-grow-1 fs-sm">
                            <div class="fw-semibold">New sale! + $119</div>
                            <small class="text-muted">29 hours ago</small>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a class="text-dark d-flex py-2" href="javascript:void(0)">
                          <div class="flex-shrink-0 me-3 ms-2">
                            <i class="fa fa-fw fa-minus text-danger"></i>
                          </div>
                          <div class="flex-grow-1 fs-sm">
                            <div class="fw-semibold">Paypal Withdrawal - $300</div>
                            <small class="text-muted">37 hours ago</small>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a class="text-dark d-flex py-2" href="javascript:void(0)">
                          <div class="flex-shrink-0 me-3 ms-2">
                            <i class="fa fa-fw fa-plus text-success"></i>
                          </div>
                          <div class="flex-grow-1 fs-sm">
                            <div class="fw-semibold">New sale! + $129</div>
                            <small class="text-muted">39 hours ago</small>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a class="text-dark d-flex py-2" href="javascript:void(0)">
                          <div class="flex-shrink-0 me-3 ms-2">
                            <i class="fa fa-fw fa-plus text-success"></i>
                          </div>
                          <div class="flex-grow-1 fs-sm">
                            <div class="fw-semibold">New sale! + $119</div>
                            <small class="text-muted">45 hours ago</small>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a class="text-dark d-flex py-2" href="javascript:void(0)">
                          <div class="flex-shrink-0 me-3 ms-2">
                            <i class="fa fa-fw fa-plus text-success"></i>
                          </div>
                          <div class="flex-grow-1 fs-sm">
                            <div class="fw-semibold">New sale! + $499</div>
                            <small class="text-muted">46 hours ago</small>
                          </div>
                        </a>
                      </li>
                    </ul>

                    <!-- More -->
                    <div class="text-center">
                      <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                        <i class="fa fa-arrow-down opacity-50 me-1"></i> Load More..
                      </a>
                    </div>
                    <!-- END More -->
                  </div>
                  <!-- END Yesterday -->
                </div>
              </div>
              <!-- END Sales Tab -->
            </div>
          </div>
          <!-- END Side Overlay Tabs -->
        </div>
        <!-- END Side Content -->
      </aside>
      <!-- END Side Overlay -->


      <!-- Sidebar -->
      <!--
          Sidebar Mini Mode - Display Helper classes

          Adding 'smini-hide' class to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
          Adding 'smini-show' class to an element will make it visible (opacity: 1) when the sidebar is in mini mode
              If you would like to disable the transition animation, make sure to also add the 'no-transition' class to your element

          Adding 'smini-hidden' to an element will hide it when the sidebar is in mini mode
          Adding 'smini-visible' to an element will show it (display: inline-block) only when the sidebar is in mini mode
          Adding 'smini-visible-block' to an element will show it (display: block) only when the sidebar is in mini mode
      -->
      <nav id="sidebar" aria-label="Main Navigation">
        <!-- Side Header -->
        <div class="content-header">
          <!-- Logo -->
          <a class="fw-semibold text-dual" href="index.html">
            <span class="smini-visible">
              <i class="fa fa-circle-notch text-primary"></i>
            </span>
            <span class="smini-hide fs-5 tracking-wider">One<span class="fw-normal">UI</span></span>
          </a>
          <!-- END Logo -->

          <!-- Extra -->
          <div>
            <!-- Dark Mode -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="layout" data-action="dark_mode_toggle">
              <i class="far fa-moon"></i>
            </button>
            <!-- END Dark Mode -->

            <!-- Options -->
            <div class="dropdown d-inline-block ms-1">
              <button type="button" class="btn btn-sm btn-alt-secondary" id="sidebar-themes-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="far fa-circle"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end fs-sm smini-hide border-0" aria-labelledby="sidebar-themes-dropdown">
                <!-- Color Themes -->
                <!-- Layout API, functionality initialized in Template._uiHandleTheme() -->
                <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="default" href="#">
                  <span>Default</span>
                  <i class="fa fa-circle text-default"></i>
                </a>
                <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="assets/css/themes/amethyst.min.css" href="#">
                  <span>Amethyst</span>
                  <i class="fa fa-circle text-amethyst"></i>
                </a>
                <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="assets/css/themes/city.min.css" href="#">
                  <span>City</span>
                  <i class="fa fa-circle text-city"></i>
                </a>
                <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="assets/css/themes/flat.min.css" href="#">
                  <span>Flat</span>
                  <i class="fa fa-circle text-flat"></i>
                </a>
                <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="assets/css/themes/modern.min.css" href="#">
                  <span>Modern</span>
                  <i class="fa fa-circle text-modern"></i>
                </a>
                <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="assets/css/themes/smooth.min.css" href="#">
                  <span>Smooth</span>
                  <i class="fa fa-circle text-smooth"></i>
                </a>
                <!-- END Color Themes -->

                <div class="dropdown-divider"></div>

                <!-- Sidebar Styles -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <a class="dropdown-item fw-medium" data-toggle="layout" data-action="sidebar_style_light" href="javascript:void(0)">
                  <span>Sidebar Light</span>
                </a>
                <a class="dropdown-item fw-medium" data-toggle="layout" data-action="sidebar_style_dark" href="javascript:void(0)">
                  <span>Sidebar Dark</span>
                </a>
                <!-- END Sidebar Styles -->

                <div class="dropdown-divider"></div>

                <!-- Header Styles -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <a class="dropdown-item fw-medium" data-toggle="layout" data-action="header_style_light" href="javascript:void(0)">
                  <span>Header Light</span>
                </a>
                <a class="dropdown-item fw-medium" data-toggle="layout" data-action="header_style_dark" href="javascript:void(0)">
                  <span>Header Dark</span>
                </a>
                <!-- END Header Styles -->
              </div>
            </div>
            <!-- END Options -->

            <!-- Close Sidebar, Visible only on mobile screens -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <a class="d-lg-none btn btn-sm btn-alt-secondary ms-1" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
              <i class="fa fa-fw fa-times"></i>
            </a>
            <!-- END Close Sidebar -->
          </div>
          <!-- END Extra -->
        </div>
        <!-- END Side Header -->

        <!-- Sidebar Scrolling -->
        <div class="js-sidebar-scroll">
          <!-- Side Navigation -->
          <div class="content-side">
            <ul class="nav-main">
              <li class="nav-main-item">
                <a class="nav-main-link" href="be_pages_dashboard.html">
                  <i class="nav-main-link-icon si si-speedometer"></i>
                  <span class="nav-main-link-name">Dashboard</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon si si-layers"></i>
                  <span class="nav-main-link-name">Page Packs</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <i class="nav-main-link-icon si si-bag"></i>
                      <span class="nav-main-link-name">e-Commerce</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_ecom_dashboard.html">
                          <span class="nav-main-link-name">Dashboard</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_ecom_orders.html">
                          <span class="nav-main-link-name">Orders</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_ecom_order.html">
                          <span class="nav-main-link-name">Order</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_ecom_products.html">
                          <span class="nav-main-link-name">Products</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_ecom_product_edit.html">
                          <span class="nav-main-link-name">Product Edit</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_ecom_customer.html">
                          <span class="nav-main-link-name">Customer</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <i class="nav-main-link-icon si si-handbag"></i>
                      <span class="nav-main-link-name">e-Commerce Store</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_ecom_store_home.html">
                          <span class="nav-main-link-name">Home</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_ecom_store_search.html">
                          <span class="nav-main-link-name">Search Results</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_ecom_store_products.html">
                          <span class="nav-main-link-name">Products List</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_ecom_store_product.html">
                          <span class="nav-main-link-name">Product Page</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_ecom_store_checkout.html">
                          <span class="nav-main-link-name">Checkout</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <i class="nav-main-link-icon si si-pencil"></i>
                      <span class="nav-main-link-name">Blog</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_blog_classic.html">
                          <span class="nav-main-link-name">Classic</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_blog_list.html">
                          <span class="nav-main-link-name">List</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_blog_grid.html">
                          <span class="nav-main-link-name">Grid</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_blog_story.html">
                          <span class="nav-main-link-name">Story</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_blog_story_cover.html">
                          <span class="nav-main-link-name">Story Cover</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <i class="nav-main-link-icon si si-graduation"></i>
                      <span class="nav-main-link-name">e-Learning</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_elearning_courses.html">
                          <span class="nav-main-link-name">Courses</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_elearning_course.html">
                          <span class="nav-main-link-name">Course</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_elearning_lesson.html">
                          <span class="nav-main-link-name">Lesson</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <i class="nav-main-link-icon si si-bubbles"></i>
                      <span class="nav-main-link-name">Forum</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_forum_categories.html">
                          <span class="nav-main-link-name">Categories</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_forum_topics.html">
                          <span class="nav-main-link-name">Topics</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_forum_discussion.html">
                          <span class="nav-main-link-name">Discussion</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <i class="nav-main-link-icon si si-magnet"></i>
                      <span class="nav-main-link-name">Boxed Backend</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="bd_dashboard.html">
                          <span class="nav-main-link-name">Dashboard</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="bd_search.html">
                          <span class="nav-main-link-name">Search</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="bd_simple_1.html">
                          <span class="nav-main-link-name">Simple 1</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="bd_simple_2.html">
                          <span class="nav-main-link-name">Simple 2</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="bd_image_1.html">
                          <span class="nav-main-link-name">Image 1</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="bd_image_2.html">
                          <span class="nav-main-link-name">Image 2</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="bd_video_1.html">
                          <span class="nav-main-link-name">Video 1</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="bd_video_2.html">
                          <span class="nav-main-link-name">Video 2</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="nav-main-heading">User Interface</li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon si si-energy"></i>
                  <span class="nav-main-link-name">Blocks</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_blocks_styles.html">
                      <span class="nav-main-link-name">Styles</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_blocks_options.html">
                      <span class="nav-main-link-name">Options</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_blocks_forms.html">
                      <span class="nav-main-link-name">Forms</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_blocks_themed.html">
                      <span class="nav-main-link-name">Themed</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_blocks_api.html">
                      <span class="nav-main-link-name">API</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon si si-badge"></i>
                  <span class="nav-main-link-name">Elements</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_ui_grid.html">
                      <span class="nav-main-link-name">Grid</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_ui_typography.html">
                      <span class="nav-main-link-name">Typography</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_ui_icons.html">
                      <span class="nav-main-link-name">Icons</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_ui_buttons.html">
                      <span class="nav-main-link-name">Buttons</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_ui_buttons_groups.html">
                      <span class="nav-main-link-name">Button Groups</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_ui_dropdowns.html">
                      <span class="nav-main-link-name">Dropdowns</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_ui_tabs.html">
                      <span class="nav-main-link-name">Tabs</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_ui_navigation.html">
                      <span class="nav-main-link-name">Navigation</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_ui_navigation_horizontal.html">
                      <span class="nav-main-link-name">Horizontal Navigation</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_ui_mega_menu.html">
                      <span class="nav-main-link-name">Mega Menu</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_ui_progress.html">
                      <span class="nav-main-link-name">Progress</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_ui_alerts.html">
                      <span class="nav-main-link-name">Alerts</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_ui_tooltips.html">
                      <span class="nav-main-link-name">Tooltips</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_ui_popovers.html">
                      <span class="nav-main-link-name">Popovers</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_ui_modals.html">
                      <span class="nav-main-link-name">Modals</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_ui_images.html">
                      <span class="nav-main-link-name">Images Overlay</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_ui_timeline.html">
                      <span class="nav-main-link-name">Timeline</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_ui_ribbons.html">
                      <span class="nav-main-link-name">Ribbons</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_ui_animations.html">
                      <span class="nav-main-link-name">Animations</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_ui_color_themes.html">
                      <span class="nav-main-link-name">Color Themes</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-main-item open">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                  <i class="nav-main-link-icon si si-grid"></i>
                  <span class="nav-main-link-name">Tables</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_tables_styles.html">
                      <span class="nav-main-link-name">Styles</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_tables_responsive.html">
                      <span class="nav-main-link-name">Responsive</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_tables_helpers.html">
                      <span class="nav-main-link-name">Helpers</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link active" href="be_tables_datatables.html">
                      <span class="nav-main-link-name">DataTables</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon si si-note"></i>
                  <span class="nav-main-link-name">Forms</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_forms_elements.html">
                      <span class="nav-main-link-name">Elements</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_forms_layouts.html">
                      <span class="nav-main-link-name">Layouts</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_forms_input_groups.html">
                      <span class="nav-main-link-name">Input Groups</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_forms_plugins.html">
                      <span class="nav-main-link-name">Plugins</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_forms_editors.html">
                      <span class="nav-main-link-name">Editors</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <span class="nav-main-link-name">CKEditor 5</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_forms_ckeditor5_classic.html">
                          <span class="nav-main-link-name">Classic</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_forms_ckeditor5_inline.html">
                          <span class="nav-main-link-name">Inline</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_forms_validation.html">
                      <span class="nav-main-link-name">Validation</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-main-heading">Develop</li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon si si-wrench"></i>
                  <span class="nav-main-link-name">Components</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_comp_loaders.html">
                      <span class="nav-main-link-name">Loaders</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_comp_image_cropper.html">
                      <span class="nav-main-link-name">Image Cropper</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_comp_appear.html">
                      <span class="nav-main-link-name">Appear</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_comp_charts.html">
                      <span class="nav-main-link-name">Charts</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_comp_calendar.html">
                      <span class="nav-main-link-name">Calendar</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_comp_sliders.html">
                      <span class="nav-main-link-name">Sliders</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_comp_carousel.html">
                      <span class="nav-main-link-name">Carousel</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_comp_syntax_highlighting.html">
                      <span class="nav-main-link-name">Syntax Highlighting</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_comp_rating.html">
                      <span class="nav-main-link-name">Rating</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_comp_maps_vector.html">
                      <span class="nav-main-link-name">Vector Maps</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_comp_dialogs.html">
                      <span class="nav-main-link-name">Dialogs</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_comp_notifications.html">
                      <span class="nav-main-link-name">Notifications</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_comp_gallery.html">
                      <span class="nav-main-link-name">Gallery</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon si si-magic-wand"></i>
                  <span class="nav-main-link-name">Layout</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <span class="nav-main-link-name">Page</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_layout_page_default.html">
                          <span class="nav-main-link-name">Default</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_layout_page_flipped.html">
                          <span class="nav-main-link-name">Flipped</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_layout_page_native_scrolling.html">
                          <span class="nav-main-link-name">Native Scrolling</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <span class="nav-main-link-name">Dark Mode</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_layout_dark_mode_on.html">
                          <span class="nav-main-link-name">On</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_layout_dark_mode_off.html">
                          <span class="nav-main-link-name">Off</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <span class="nav-main-link-name">Main Content</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_layout_content_main_full_width.html">
                          <span class="nav-main-link-name">Full Width</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_layout_content_main_narrow.html">
                          <span class="nav-main-link-name">Narrow</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_layout_content_main_boxed.html">
                          <span class="nav-main-link-name">Boxed</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <span class="nav-main-link-name">Header</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-heading">Fixed</li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_layout_header_fixed_light.html">
                          <span class="nav-main-link-name">Light</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_layout_header_fixed_dark.html">
                          <span class="nav-main-link-name">Dark</span>
                        </a>
                      </li>
                      <li class="nav-main-heading">Static</li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_layout_header_static_light.html">
                          <span class="nav-main-link-name">Light</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_layout_header_static_dark.html">
                          <span class="nav-main-link-name">Dark</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <span class="nav-main-link-name">Sidebar</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_layout_sidebar_mini.html">
                          <span class="nav-main-link-name">Mini</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_layout_sidebar_light.html">
                          <span class="nav-main-link-name">Light</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_layout_sidebar_dark.html">
                          <span class="nav-main-link-name">Dark</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_layout_sidebar_hidden.html">
                          <span class="nav-main-link-name">Hidden</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <span class="nav-main-link-name">Side Overlay</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_layout_side_overlay_visible.html">
                          <span class="nav-main-link-name">Visible</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_layout_side_overlay_mode_hover.html">
                          <span class="nav-main-link-name">Hover Mode</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_layout_side_overlay_no_page_overlay.html">
                          <span class="nav-main-link-name">No Page Overlay</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_layout_api.html">
                      <span class="nav-main-link-name">API</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon si si-puzzle"></i>
                  <span class="nav-main-link-name">Multi Level Menu</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="#">
                      <span class="nav-main-link-name">Link 1-1</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="#">
                      <span class="nav-main-link-name">Link 1-2</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <span class="nav-main-link-name">Sub Level 2</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="#">
                          <span class="nav-main-link-name">Link 2-1</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="#">
                          <span class="nav-main-link-name">Link 2-2</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                          <span class="nav-main-link-name">Sub Level 3</span>
                        </a>
                        <ul class="nav-main-submenu">
                          <li class="nav-main-item">
                            <a class="nav-main-link" href="#">
                              <span class="nav-main-link-name">Link 3-1</span>
                            </a>
                          </li>
                          <li class="nav-main-item">
                            <a class="nav-main-link" href="#">
                              <span class="nav-main-link-name">Link 3-2</span>
                            </a>
                          </li>
                          <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                              <span class="nav-main-link-name">Sub Level 4</span>
                            </a>
                            <ul class="nav-main-submenu">
                              <li class="nav-main-item">
                                <a class="nav-main-link" href="#">
                                  <span class="nav-main-link-name">Link 4-1</span>
                                </a>
                              </li>
                              <li class="nav-main-item">
                                <a class="nav-main-link" href="#">
                                  <span class="nav-main-link-name">Link 4-2</span>
                                </a>
                              </li>
                              <li class="nav-main-item">
                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                  <span class="nav-main-link-name">Sub Level 5</span>
                                </a>
                                <ul class="nav-main-submenu">
                                  <li class="nav-main-item">
                                    <a class="nav-main-link" href="#">
                                      <span class="nav-main-link-name">Link 5-1</span>
                                    </a>
                                  </li>
                                  <li class="nav-main-item">
                                    <a class="nav-main-link" href="#">
                                      <span class="nav-main-link-name">Link 5-2</span>
                                    </a>
                                  </li>
                                  <li class="nav-main-item">
                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                      <span class="nav-main-link-name">Sub Level 6</span>
                                    </a>
                                    <ul class="nav-main-submenu">
                                      <li class="nav-main-item">
                                        <a class="nav-main-link" href="#">
                                          <span class="nav-main-link-name">Link 6-1</span>
                                        </a>
                                      </li>
                                      <li class="nav-main-item">
                                        <a class="nav-main-link" href="#">
                                          <span class="nav-main-link-name">Link 6-2</span>
                                        </a>
                                      </li>
                                    </ul>
                                  </li>
                                </ul>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="nav-main-heading">Pages</li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon si si-layers"></i>
                  <span class="nav-main-link-name">Generic</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_pages_generic_blank.html">
                      <span class="nav-main-link-name">Blank</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_pages_generic_blank_block.html">
                      <span class="nav-main-link-name">Blank with Block</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_pages_generic_search.html">
                      <span class="nav-main-link-name">Search</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_pages_generic_profile.html">
                      <span class="nav-main-link-name">Profile</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_pages_generic_profile_edit.html">
                      <span class="nav-main-link-name">Profile Edit</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_pages_generic_inbox.html">
                      <span class="nav-main-link-name">Inbox</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_pages_generic_invoice.html">
                      <span class="nav-main-link-name">Invoice</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_pages_generic_pricing_plans.html">
                      <span class="nav-main-link-name">Pricing Plans</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_pages_generic_faq.html">
                      <span class="nav-main-link-name">FAQ</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_pages_generic_team.html">
                      <span class="nav-main-link-name">Team</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_pages_generic_contact.html">
                      <span class="nav-main-link-name">Contact</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_pages_generic_support.html">
                      <span class="nav-main-link-name">Support</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_pages_generic_upgrade_plan.html">
                      <span class="nav-main-link-name">Upgrade Plan</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_pages_sidebar_mini_nav.html">
                      <span class="nav-main-link-name">Sidebar with mini nav</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_pages_dashboard_v1.html">
                      <span class="nav-main-link-name">Dashboard v1</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="op_maintenance.html">
                      <span class="nav-main-link-name">Maintenance</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="op_status.html">
                      <span class="nav-main-link-name">Status</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="op_installation.html">
                      <span class="nav-main-link-name">Installation</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="op_checkout.html">
                      <span class="nav-main-link-name">Checkout</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="op_coming_soon.html">
                      <span class="nav-main-link-name">Coming Soon</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon si si-lock"></i>
                  <span class="nav-main-link-name">Authentication</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_pages_auth_all.html">
                      <span class="nav-main-link-name">All</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="op_auth_signin.html">
                      <span class="nav-main-link-name">Sign In</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="op_auth_signin2.html">
                      <span class="nav-main-link-name">Sign In 2</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="op_auth_signin3.html">
                      <span class="nav-main-link-name">Sign In 3</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="op_auth_signup.html">
                      <span class="nav-main-link-name">Sign Up</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="op_auth_signup2.html">
                      <span class="nav-main-link-name">Sign Up 2</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="op_auth_signup3.html">
                      <span class="nav-main-link-name">Sign Up 3</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="op_auth_lock.html">
                      <span class="nav-main-link-name">Lock Screen</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="op_auth_lock2.html">
                      <span class="nav-main-link-name">Lock Screen 2</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="op_auth_lock3.html">
                      <span class="nav-main-link-name">Lock Screen 3</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="op_auth_reminder.html">
                      <span class="nav-main-link-name">Pass Reminder</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="op_auth_reminder2.html">
                      <span class="nav-main-link-name">Pass Reminder 2</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="op_auth_reminder3.html">
                      <span class="nav-main-link-name">Pass Reminder 3</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon si si-fire"></i>
                  <span class="nav-main-link-name">Error Pages</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_pages_error_all.html">
                      <span class="nav-main-link-name">All</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="op_error_400.html">
                      <span class="nav-main-link-name">400</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="op_error_401.html">
                      <span class="nav-main-link-name">401</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="op_error_403.html">
                      <span class="nav-main-link-name">403</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="op_error_404.html">
                      <span class="nav-main-link-name">404</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="op_error_500.html">
                      <span class="nav-main-link-name">500</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="op_error_503.html">
                      <span class="nav-main-link-name">503</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon si si-cup"></i>
                  <span class="nav-main-link-name">Get Started</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="gs_backend.html">
                      <span class="nav-main-link-name">Backend</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="gs_backend_boxed.html">
                      <span class="nav-main-link-name">Backend Boxed</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="gs_landing.html">
                      <span class="nav-main-link-name">Landing</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="gs_rtl_backend.html">
                      <span class="nav-main-link-name">RTL Backend</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="gs_rtl_backend_boxed.html">
                      <span class="nav-main-link-name">RTL Backend Boxed</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="gs_rtl_landing.html">
                      <span class="nav-main-link-name">RTL Landing</span>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <!-- END Side Navigation -->
        </div>
        <!-- END Sidebar Scrolling -->
      </nav>
      <!-- END Sidebar -->

      <!-- Header -->
      <header id="page-header">
        <!-- Header Content -->
        <div class="content-header">
          <!-- Left Section -->
          <div class="d-flex align-items-center">
            <!-- Toggle Sidebar -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
            <button type="button" class="btn btn-sm btn-alt-secondary me-2 d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
              <i class="fa fa-fw fa-bars"></i>
            </button>
            <!-- END Toggle Sidebar -->

            <!-- Toggle Mini Sidebar -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
            <button type="button" class="btn btn-sm btn-alt-secondary me-2 d-none d-lg-inline-block" data-toggle="layout" data-action="sidebar_mini_toggle">
              <i class="fa fa-fw fa-ellipsis-v"></i>
            </button>
            <!-- END Toggle Mini Sidebar -->

            <!-- Open Search Section (visible on smaller screens) -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-sm btn-alt-secondary d-md-none" data-toggle="layout" data-action="header_search_on">
              <i class="fa fa-fw fa-search"></i>
            </button>
            <!-- END Open Search Section -->

            <!-- Search Form (visible on larger screens) -->
            <form class="d-none d-md-inline-block" action="be_pages_generic_search.html" method="POST">
              <div class="input-group input-group-sm">
                <input type="text" class="form-control form-control-alt" placeholder="Search.." id="page-header-search-input2" name="page-header-search-input2">
                <span class="input-group-text border-0">
                  <i class="fa fa-fw fa-search"></i>
                </span>
              </div>
            </form>
            <!-- END Search Form -->
          </div>
          <!-- END Left Section -->

          <!-- Right Section -->
          <div class="d-flex align-items-center">
            <!-- User Dropdown -->
            <div class="dropdown d-inline-block ms-2">
              <button type="button" class="btn btn-sm btn-alt-secondary d-flex align-items-center" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="rounded-circle" src="assets/media/avatars/avatar10.jpg" alt="Header Avatar" style="width: 21px;">
                <span class="d-none d-sm-inline-block ms-2">John</span>
                <i class="fa fa-fw fa-angle-down d-none d-sm-inline-block opacity-50 ms-1 mt-1"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-md dropdown-menu-end p-0 border-0" aria-labelledby="page-header-user-dropdown">
                <div class="p-3 text-center bg-body-light border-bottom rounded-top">
                  <img class="img-avatar img-avatar48 img-avatar-thumb" src="assets/media/avatars/avatar10.jpg" alt="">
                  <p class="mt-2 mb-0 fw-medium">John Smith</p>
                  <p class="mb-0 text-muted fs-sm fw-medium">Web Developer</p>
                </div>
                <div class="p-2">
                  <a class="dropdown-item d-flex align-items-center justify-content-between" href="be_pages_generic_inbox.html">
                    <span class="fs-sm fw-medium">Inbox</span>
                    <span class="badge rounded-pill bg-primary ms-2">3</span>
                  </a>
                  <a class="dropdown-item d-flex align-items-center justify-content-between" href="be_pages_generic_profile.html">
                    <span class="fs-sm fw-medium">Profile</span>
                    <span class="badge rounded-pill bg-primary ms-2">1</span>
                  </a>
                  <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                    <span class="fs-sm fw-medium">Settings</span>
                  </a>
                </div>
                <div role="separator" class="dropdown-divider m-0"></div>
                <div class="p-2">
                  <a class="dropdown-item d-flex align-items-center justify-content-between" href="op_auth_lock.html">
                    <span class="fs-sm fw-medium">Lock Account</span>
                  </a>
                  <a class="dropdown-item d-flex align-items-center justify-content-between" href="op_auth_signin.html">
                    <span class="fs-sm fw-medium">Log Out</span>
                  </a>
                </div>
              </div>
            </div>
            <!-- END User Dropdown -->

            <!-- Notifications Dropdown -->
            <div class="dropdown d-inline-block ms-2">
              <button type="button" class="btn btn-sm btn-alt-secondary" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-fw fa-bell"></i>
                <span class="text-primary">•</span>
              </button>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0 border-0 fs-sm" aria-labelledby="page-header-notifications-dropdown">
                <div class="p-2 bg-body-light border-bottom text-center rounded-top">
                  <h5 class="dropdown-header text-uppercase">Notifications</h5>
                </div>
                <ul class="nav-items mb-0">
                  <li>
                    <a class="text-dark d-flex py-2" href="javascript:void(0)">
                      <div class="flex-shrink-0 me-2 ms-3">
                        <i class="fa fa-fw fa-check-circle text-success"></i>
                      </div>
                      <div class="flex-grow-1 pe-2">
                        <div class="fw-semibold">You have a new follower</div>
                        <span class="fw-medium text-muted">15 min ago</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="text-dark d-flex py-2" href="javascript:void(0)">
                      <div class="flex-shrink-0 me-2 ms-3">
                        <i class="fa fa-fw fa-plus-circle text-primary"></i>
                      </div>
                      <div class="flex-grow-1 pe-2">
                        <div class="fw-semibold">1 new sale, keep it up</div>
                        <span class="fw-medium text-muted">22 min ago</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="text-dark d-flex py-2" href="javascript:void(0)">
                      <div class="flex-shrink-0 me-2 ms-3">
                        <i class="fa fa-fw fa-times-circle text-danger"></i>
                      </div>
                      <div class="flex-grow-1 pe-2">
                        <div class="fw-semibold">Update failed, restart server</div>
                        <span class="fw-medium text-muted">26 min ago</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="text-dark d-flex py-2" href="javascript:void(0)">
                      <div class="flex-shrink-0 me-2 ms-3">
                        <i class="fa fa-fw fa-plus-circle text-primary"></i>
                      </div>
                      <div class="flex-grow-1 pe-2">
                        <div class="fw-semibold">2 new sales, keep it up</div>
                        <span class="fw-medium text-muted">33 min ago</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="text-dark d-flex py-2" href="javascript:void(0)">
                      <div class="flex-shrink-0 me-2 ms-3">
                        <i class="fa fa-fw fa-user-plus text-success"></i>
                      </div>
                      <div class="flex-grow-1 pe-2">
                        <div class="fw-semibold">You have a new subscriber</div>
                        <span class="fw-medium text-muted">41 min ago</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="text-dark d-flex py-2" href="javascript:void(0)">
                      <div class="flex-shrink-0 me-2 ms-3">
                        <i class="fa fa-fw fa-check-circle text-success"></i>
                      </div>
                      <div class="flex-grow-1 pe-2">
                        <div class="fw-semibold">You have a new follower</div>
                        <span class="fw-medium text-muted">42 min ago</span>
                      </div>
                    </a>
                  </li>
                </ul>
                <div class="p-2 border-top text-center">
                  <a class="d-inline-block fw-medium" href="javascript:void(0)">
                    <i class="fa fa-fw fa-arrow-down me-1 opacity-50"></i> Load More..
                  </a>
                </div>
              </div>
            </div>
            <!-- END Notifications Dropdown -->

            <!-- Toggle Side Overlay -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-sm btn-alt-secondary ms-2" data-toggle="layout" data-action="side_overlay_toggle">
              <i class="fa fa-fw fa-list-ul fa-flip-horizontal"></i>
            </button>
            <!-- END Toggle Side Overlay -->
          </div>
          <!-- END Right Section -->
        </div>
        <!-- END Header Content -->

        <!-- Header Search -->
        <div id="page-header-search" class="overlay-header bg-body-extra-light">
          <div class="content-header">
            <form class="w-100" action="be_pages_generic_search.html" method="POST">
              <div class="input-group">
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-alt-danger" data-toggle="layout" data-action="header_search_off">
                  <i class="fa fa-fw fa-times-circle"></i>
                </button>
                <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
              </div>
            </form>
          </div>
        </div>
        <!-- END Header Search -->

        <!-- Header Loader -->
        <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
        <div id="page-header-loader" class="overlay-header bg-body-extra-light">
          <div class="content-header">
            <div class="w-100 text-center">
              <i class="fa fa-fw fa-circle-notch fa-spin"></i>
            </div>
          </div>
        </div>
        <!-- END Header Loader -->
      </header>
      <!-- END Header -->

      <!-- Main Container -->
      <main id="main-container">
        <!-- Hero -->
        <div class="bg-body-light">
          <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
              <div class="flex-grow-1">
                <h1 class="h3 fw-bold mb-2">
                  DataTables
                </h1>
                <h2 class="fs-base lh-base fw-medium text-muted mb-0">
                  Tables transformed with dynamic features.
                </h2>
              </div>
              <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                  <li class="breadcrumb-item">
                    <a class="link-fx" href="javascript:void(0)">Tables</a>
                  </li>
                  <li class="breadcrumb-item" aria-current="page">
                    DataTables
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
          <!-- Dynamic Table Full -->
          <div class="block block-rounded">
            <div class="block-header block-header-default">
              <h3 class="block-title">Dynamic Table <small>Full</small></h3>
            </div>
            <div class="block-content block-content-full">
              <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
              <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                <thead>
                  <tr>
                    <th class="text-center" style="width: 80px;">ID</th>
                    <th>Name</th>
                    <th class="d-none d-sm-table-cell" style="width: 30%;">Email</th>
                    <th class="d-none d-sm-table-cell" style="width: 15%;">Access</th>
                    <th style="width: 15%;">Registered</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-center fs-sm">1</td>
                    <td class="fw-semibold fs-sm">Jose Wagner</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client1<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">4 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">2</td>
                    <td class="fw-semibold fs-sm">Lori Moore</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client2<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">4 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">3</td>
                    <td class="fw-semibold fs-sm">Carol Ray</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client3<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">6 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">4</td>
                    <td class="fw-semibold fs-sm">Jose Parker</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client4<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">10 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">5</td>
                    <td class="fw-semibold fs-sm">Melissa Rice</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client5<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">9 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">6</td>
                    <td class="fw-semibold fs-sm">Adam McCoy</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client6<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">9 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">7</td>
                    <td class="fw-semibold fs-sm">Jose Mills</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client7<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">2 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">8</td>
                    <td class="fw-semibold fs-sm">Wayne Garcia</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client8<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">6 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">9</td>
                    <td class="fw-semibold fs-sm">Danielle Jones</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client9<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">9 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">10</td>
                    <td class="fw-semibold fs-sm">Betty Kelley</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client10<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">9 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">11</td>
                    <td class="fw-semibold fs-sm">Laura Carr</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client11<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">2 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">12</td>
                    <td class="fw-semibold fs-sm">Alice Moore</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client12<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">7 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">13</td>
                    <td class="fw-semibold fs-sm">Carl Wells</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client13<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">2 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">14</td>
                    <td class="fw-semibold fs-sm">Wayne Garcia</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client14<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">6 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">15</td>
                    <td class="fw-semibold fs-sm">Andrea Gardner</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client15<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">6 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">16</td>
                    <td class="fw-semibold fs-sm">Ralph Murray</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client16<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">5 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">17</td>
                    <td class="fw-semibold fs-sm">Adam McCoy</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client17<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">3 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">18</td>
                    <td class="fw-semibold fs-sm">Andrea Gardner</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client18<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">7 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">19</td>
                    <td class="fw-semibold fs-sm">Sara Fields</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client19<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">4 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">20</td>
                    <td class="fw-semibold fs-sm">Jose Parker</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client20<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">10 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">21</td>
                    <td class="fw-semibold fs-sm">Carol White</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client21<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">3 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">22</td>
                    <td class="fw-semibold fs-sm">Amanda Powell</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client22<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">9 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">23</td>
                    <td class="fw-semibold fs-sm">Jack Estrada</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client23<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">2 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">24</td>
                    <td class="fw-semibold fs-sm">Scott Young</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client24<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">4 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">25</td>
                    <td class="fw-semibold fs-sm">Helen Jacobs</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client25<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">9 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">26</td>
                    <td class="fw-semibold fs-sm">Carol Ray</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client26<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">8 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">27</td>
                    <td class="fw-semibold fs-sm">Thomas Riley</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client27<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">8 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">28</td>
                    <td class="fw-semibold fs-sm">Lisa Jenkins</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client28<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">6 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">29</td>
                    <td class="fw-semibold fs-sm">David Fuller</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client29<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">10 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">30</td>
                    <td class="fw-semibold fs-sm">Justin Hunt</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client30<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">4 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">31</td>
                    <td class="fw-semibold fs-sm">Danielle Jones</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client31<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">9 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">32</td>
                    <td class="fw-semibold fs-sm">David Fuller</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client32<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">2 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">33</td>
                    <td class="fw-semibold fs-sm">Henry Harrison</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client33<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">5 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">34</td>
                    <td class="fw-semibold fs-sm">Jesse Fisher</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client34<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">6 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">35</td>
                    <td class="fw-semibold fs-sm">Albert Ray</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client35<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">2 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">36</td>
                    <td class="fw-semibold fs-sm">Helen Jacobs</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client36<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">8 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">37</td>
                    <td class="fw-semibold fs-sm">Amber Harvey</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client37<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">8 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">38</td>
                    <td class="fw-semibold fs-sm">Adam McCoy</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client38<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">2 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">39</td>
                    <td class="fw-semibold fs-sm">Amber Harvey</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client39<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">7 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">40</td>
                    <td class="fw-semibold fs-sm">Helen Jacobs</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client40<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">2 days ago</span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- END Dynamic Table Full -->

          <!-- Dynamic Table Full Pagination -->
          <div class="block block-rounded">
            <div class="block-header block-header-default">
              <h3 class="block-title">Dynamic Table <small>Full pagination</small></h3>
            </div>
            <div class="block-content block-content-full">
              <!-- DataTables init on table by adding .js-dataTable-full-pagination class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
              <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
                <thead>
                  <tr>
                    <th class="text-center" style="width: 80px;">ID</th>
                    <th>Name</th>
                    <th class="d-none d-sm-table-cell" style="width: 30%;">Email</th>
                    <th class="d-none d-sm-table-cell" style="width: 15%;">Access</th>
                    <th style="width: 15%;">Registered</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-center fs-sm">1</td>
                    <td class="fw-semibold fs-sm">Alice Moore</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client1<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">8 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">2</td>
                    <td class="fw-semibold fs-sm">Megan Fuller</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client2<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">7 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">3</td>
                    <td class="fw-semibold fs-sm">Megan Fuller</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client3<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">3 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">4</td>
                    <td class="fw-semibold fs-sm">Carl Wells</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client4<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">4 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">5</td>
                    <td class="fw-semibold fs-sm">Jeffrey Shaw</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client5<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">5 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">6</td>
                    <td class="fw-semibold fs-sm">Carol Ray</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client6<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">6 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">7</td>
                    <td class="fw-semibold fs-sm">Andrea Gardner</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client7<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">10 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">8</td>
                    <td class="fw-semibold fs-sm">Jack Greene</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client8<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">10 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">9</td>
                    <td class="fw-semibold fs-sm">Jose Parker</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client9<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">10 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">10</td>
                    <td class="fw-semibold fs-sm">Melissa Rice</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client10<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">7 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">11</td>
                    <td class="fw-semibold fs-sm">Barbara Scott</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client11<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">4 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">12</td>
                    <td class="fw-semibold fs-sm">Alice Moore</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client12<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">10 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">13</td>
                    <td class="fw-semibold fs-sm">Lori Moore</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client13<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">10 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">14</td>
                    <td class="fw-semibold fs-sm">Jose Mills</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client14<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">10 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">15</td>
                    <td class="fw-semibold fs-sm">Megan Fuller</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client15<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">2 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">16</td>
                    <td class="fw-semibold fs-sm">Megan Fuller</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client16<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">4 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">17</td>
                    <td class="fw-semibold fs-sm">Amber Harvey</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client17<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">6 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">18</td>
                    <td class="fw-semibold fs-sm">Ryan Flores</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client18<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">6 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">19</td>
                    <td class="fw-semibold fs-sm">Lori Moore</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client19<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">9 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">20</td>
                    <td class="fw-semibold fs-sm">Andrea Gardner</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client20<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">6 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">21</td>
                    <td class="fw-semibold fs-sm">Jose Mills</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client21<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">4 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">22</td>
                    <td class="fw-semibold fs-sm">Justin Hunt</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client22<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">5 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">23</td>
                    <td class="fw-semibold fs-sm">Andrea Gardner</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client23<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">3 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">24</td>
                    <td class="fw-semibold fs-sm">Amanda Powell</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client24<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">9 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">25</td>
                    <td class="fw-semibold fs-sm">Ryan Flores</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client25<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">5 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">26</td>
                    <td class="fw-semibold fs-sm">Amber Harvey</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client26<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">10 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">27</td>
                    <td class="fw-semibold fs-sm">Jose Wagner</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client27<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">9 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">28</td>
                    <td class="fw-semibold fs-sm">Albert Ray</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client28<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">2 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">29</td>
                    <td class="fw-semibold fs-sm">Danielle Jones</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client29<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">5 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">30</td>
                    <td class="fw-semibold fs-sm">Thomas Riley</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client30<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">5 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">31</td>
                    <td class="fw-semibold fs-sm">Amanda Powell</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client31<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">6 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">32</td>
                    <td class="fw-semibold fs-sm">Albert Ray</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client32<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">9 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">33</td>
                    <td class="fw-semibold fs-sm">Jose Parker</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client33<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">3 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">34</td>
                    <td class="fw-semibold fs-sm">Jesse Fisher</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client34<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">6 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">35</td>
                    <td class="fw-semibold fs-sm">Justin Hunt</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client35<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">8 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">36</td>
                    <td class="fw-semibold fs-sm">Alice Moore</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client36<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">8 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">37</td>
                    <td class="fw-semibold fs-sm">Sara Fields</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client37<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">6 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">38</td>
                    <td class="fw-semibold fs-sm">Brian Cruz</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client38<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">10 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">39</td>
                    <td class="fw-semibold fs-sm">Jack Greene</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client39<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">4 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">40</td>
                    <td class="fw-semibold fs-sm">Jack Greene</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client40<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">10 days ago</span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- END Dynamic Table Full Pagination -->

          <!-- Dynamic Table Simple -->
          <div class="block block-rounded">
            <div class="block-header block-header-default">
              <h3 class="block-title">Dynamic Table <small>With only sorting and pagination</small></h3>
            </div>
            <div class="block-content block-content-full">
              <!-- DataTables init on table by adding .js-dataTable-simple class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
              <table class="table table-bordered table-striped table-vcenter js-dataTable-simple">
                <thead>
                  <tr>
                    <th class="text-center" style="width: 80px;">ID</th>
                    <th>Name</th>
                    <th class="d-none d-sm-table-cell" style="width: 30%;">Email</th>
                    <th class="d-none d-sm-table-cell" style="width: 15%;">Access</th>
                    <th style="width: 15%;">Registered</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-center fs-sm">1</td>
                    <td class="fw-semibold fs-sm">Susan Day</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client1<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">5 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">2</td>
                    <td class="fw-semibold fs-sm">Adam McCoy</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client2<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">3 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">3</td>
                    <td class="fw-semibold fs-sm">Danielle Jones</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client3<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">7 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">4</td>
                    <td class="fw-semibold fs-sm">Jose Mills</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client4<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">7 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">5</td>
                    <td class="fw-semibold fs-sm">Jose Wagner</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client5<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">2 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">6</td>
                    <td class="fw-semibold fs-sm">Adam McCoy</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client6<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">6 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">7</td>
                    <td class="fw-semibold fs-sm">Scott Young</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client7<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">3 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">8</td>
                    <td class="fw-semibold fs-sm">Jose Parker</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client8<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">10 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">9</td>
                    <td class="fw-semibold fs-sm">Wayne Garcia</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client9<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">5 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">10</td>
                    <td class="fw-semibold fs-sm">David Fuller</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client10<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">8 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">11</td>
                    <td class="fw-semibold fs-sm">Sara Fields</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client11<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">7 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">12</td>
                    <td class="fw-semibold fs-sm">Amanda Powell</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client12<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">6 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">13</td>
                    <td class="fw-semibold fs-sm">Amber Harvey</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client13<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">5 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">14</td>
                    <td class="fw-semibold fs-sm">Amanda Powell</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client14<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">10 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">15</td>
                    <td class="fw-semibold fs-sm">Scott Young</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client15<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">8 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">16</td>
                    <td class="fw-semibold fs-sm">Melissa Rice</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client16<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">3 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">17</td>
                    <td class="fw-semibold fs-sm">Jose Wagner</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client17<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">2 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">18</td>
                    <td class="fw-semibold fs-sm">Laura Carr</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client18<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">10 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">19</td>
                    <td class="fw-semibold fs-sm">Justin Hunt</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client19<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">4 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">20</td>
                    <td class="fw-semibold fs-sm">Jack Greene</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client20<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">3 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">21</td>
                    <td class="fw-semibold fs-sm">Barbara Scott</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client21<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">3 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">22</td>
                    <td class="fw-semibold fs-sm">Betty Kelley</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client22<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">5 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">23</td>
                    <td class="fw-semibold fs-sm">Lisa Jenkins</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client23<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">8 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">24</td>
                    <td class="fw-semibold fs-sm">Adam McCoy</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client24<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">5 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">25</td>
                    <td class="fw-semibold fs-sm">Lisa Jenkins</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client25<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">9 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">26</td>
                    <td class="fw-semibold fs-sm">Carl Wells</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client26<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">5 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">27</td>
                    <td class="fw-semibold fs-sm">Laura Carr</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client27<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">3 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">28</td>
                    <td class="fw-semibold fs-sm">Marie Duncan</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client28<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">8 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">29</td>
                    <td class="fw-semibold fs-sm">Amanda Powell</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client29<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">9 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">30</td>
                    <td class="fw-semibold fs-sm">Susan Day</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client30<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">2 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">31</td>
                    <td class="fw-semibold fs-sm">Thomas Riley</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client31<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">5 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">32</td>
                    <td class="fw-semibold fs-sm">Ralph Murray</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client32<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">5 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">33</td>
                    <td class="fw-semibold fs-sm">Brian Stevens</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client33<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">8 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">34</td>
                    <td class="fw-semibold fs-sm">Justin Hunt</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client34<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">8 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">35</td>
                    <td class="fw-semibold fs-sm">Susan Day</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client35<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">10 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">36</td>
                    <td class="fw-semibold fs-sm">Ralph Murray</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client36<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">3 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">37</td>
                    <td class="fw-semibold fs-sm">Jose Parker</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client37<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">9 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">38</td>
                    <td class="fw-semibold fs-sm">Sara Fields</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client38<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">3 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">39</td>
                    <td class="fw-semibold fs-sm">Lori Grant</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client39<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">4 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">40</td>
                    <td class="fw-semibold fs-sm">Jesse Fisher</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client40<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">2 days ago</span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- END Dynamic Table Simple -->

          <!-- Dynamic Table with Export Buttons -->
          <div class="block block-rounded">
            <div class="block-header block-header-default">
              <h3 class="block-title">Dynamic Table <small>Export Buttons</small></h3>
            </div>
            <div class="block-content block-content-full">
              <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
              <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                <thead>
                  <tr>
                    <th class="text-center" style="width: 80px;">ID</th>
                    <th>Name</th>
                    <th class="d-none d-sm-table-cell" style="width: 30%;">Email</th>
                    <th class="d-none d-sm-table-cell" style="width: 15%;">Access</th>
                    <th style="width: 15%;">Registered</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-center fs-sm">1</td>
                    <td class="fw-semibold fs-sm">Brian Cruz</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client1<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">4 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">2</td>
                    <td class="fw-semibold fs-sm">Jose Wagner</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client2<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">8 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">3</td>
                    <td class="fw-semibold fs-sm">Jack Estrada</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client3<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">9 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">4</td>
                    <td class="fw-semibold fs-sm">Jesse Fisher</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client4<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">7 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">5</td>
                    <td class="fw-semibold fs-sm">Lori Moore</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client5<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">4 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">6</td>
                    <td class="fw-semibold fs-sm">Ryan Flores</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client6<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">6 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">7</td>
                    <td class="fw-semibold fs-sm">Ryan Flores</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client7<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">9 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">8</td>
                    <td class="fw-semibold fs-sm">Amanda Powell</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client8<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">2 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">9</td>
                    <td class="fw-semibold fs-sm">Thomas Riley</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client9<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">8 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">10</td>
                    <td class="fw-semibold fs-sm">Jack Greene</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client10<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">8 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">11</td>
                    <td class="fw-semibold fs-sm">Jose Parker</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client11<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">8 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">12</td>
                    <td class="fw-semibold fs-sm">Brian Cruz</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client12<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">5 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">13</td>
                    <td class="fw-semibold fs-sm">Jack Greene</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client13<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">6 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">14</td>
                    <td class="fw-semibold fs-sm">Carol Ray</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client14<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">6 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">15</td>
                    <td class="fw-semibold fs-sm">Jeffrey Shaw</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client15<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">9 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">16</td>
                    <td class="fw-semibold fs-sm">Justin Hunt</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client16<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">9 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">17</td>
                    <td class="fw-semibold fs-sm">Jeffrey Shaw</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client17<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">6 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">18</td>
                    <td class="fw-semibold fs-sm">Scott Young</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client18<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">6 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">19</td>
                    <td class="fw-semibold fs-sm">Lori Grant</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client19<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">3 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">20</td>
                    <td class="fw-semibold fs-sm">Marie Duncan</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client20<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">6 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">21</td>
                    <td class="fw-semibold fs-sm">Adam McCoy</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client21<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">8 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">22</td>
                    <td class="fw-semibold fs-sm">Henry Harrison</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client22<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">4 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">23</td>
                    <td class="fw-semibold fs-sm">Jose Wagner</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client23<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">5 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">24</td>
                    <td class="fw-semibold fs-sm">Susan Day</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client24<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">10 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">25</td>
                    <td class="fw-semibold fs-sm">Justin Hunt</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client25<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">5 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">26</td>
                    <td class="fw-semibold fs-sm">Marie Duncan</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client26<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">4 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">27</td>
                    <td class="fw-semibold fs-sm">Andrea Gardner</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client27<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">2 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">28</td>
                    <td class="fw-semibold fs-sm">Brian Cruz</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client28<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">2 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">29</td>
                    <td class="fw-semibold fs-sm">Barbara Scott</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client29<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">8 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">30</td>
                    <td class="fw-semibold fs-sm">Adam McCoy</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client30<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">3 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">31</td>
                    <td class="fw-semibold fs-sm">Jeffrey Shaw</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client31<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">3 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">32</td>
                    <td class="fw-semibold fs-sm">Brian Cruz</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client32<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">2 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">33</td>
                    <td class="fw-semibold fs-sm">Megan Fuller</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client33<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">3 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">34</td>
                    <td class="fw-semibold fs-sm">Ryan Flores</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client34<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">6 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">35</td>
                    <td class="fw-semibold fs-sm">Wayne Garcia</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client35<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">10 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">36</td>
                    <td class="fw-semibold fs-sm">Carol Ray</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client36<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">9 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">37</td>
                    <td class="fw-semibold fs-sm">Carol White</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client37<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">8 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">38</td>
                    <td class="fw-semibold fs-sm">Brian Stevens</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client38<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">8 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">39</td>
                    <td class="fw-semibold fs-sm">Justin Hunt</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client39<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">2 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">40</td>
                    <td class="fw-semibold fs-sm">Marie Duncan</td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client40<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">4 days ago</span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- END Dynamic Table with Export Buttons -->

          <!-- Dynamic Table Responsive -->
          <div class="block block-rounded">
            <div class="block-header block-header-default">
              <h3 class="block-title">
                Dynamic Table <small>DataTables Responsive Mode</small>
              </h3>
            </div>
            <div class="block-content block-content-full">
              <!-- DataTables init on table by adding .js-dataTable-responsive class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
              <table class="table table-bordered table-striped table-vcenter js-dataTable-responsive">
                <thead>
                  <tr>
                    <th class="text-center"></th>
                    <th>Name</th>
                    <th>Email</th>
                    <th style="width: 15%;">Access</th>
                    <th style="width: 15%;">Registered</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-center fs-sm">1</td>
                    <td class="fw-semibold fs-sm">Brian Stevens</td>
                    <td class="fs-sm">customer1@example.com</td>
                    <td>
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">9 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">2</td>
                    <td class="fw-semibold fs-sm">Henry Harrison</td>
                    <td class="fs-sm">customer2@example.com</td>
                    <td>
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">7 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">3</td>
                    <td class="fw-semibold fs-sm">Danielle Jones</td>
                    <td class="fs-sm">customer3@example.com</td>
                    <td>
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">5 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">4</td>
                    <td class="fw-semibold fs-sm">Ralph Murray</td>
                    <td class="fs-sm">customer4@example.com</td>
                    <td>
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">6 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">5</td>
                    <td class="fw-semibold fs-sm">Lisa Jenkins</td>
                    <td class="fs-sm">customer5@example.com</td>
                    <td>
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">2 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">6</td>
                    <td class="fw-semibold fs-sm">Ralph Murray</td>
                    <td class="fs-sm">customer6@example.com</td>
                    <td>
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">7 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">7</td>
                    <td class="fw-semibold fs-sm">David Fuller</td>
                    <td class="fs-sm">customer7@example.com</td>
                    <td>
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">10 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">8</td>
                    <td class="fw-semibold fs-sm">Justin Hunt</td>
                    <td class="fs-sm">customer8@example.com</td>
                    <td>
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">5 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">9</td>
                    <td class="fw-semibold fs-sm">Justin Hunt</td>
                    <td class="fs-sm">customer9@example.com</td>
                    <td>
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">9 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">10</td>
                    <td class="fw-semibold fs-sm">Adam McCoy</td>
                    <td class="fs-sm">customer10@example.com</td>
                    <td>
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">2 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">11</td>
                    <td class="fw-semibold fs-sm">Ryan Flores</td>
                    <td class="fs-sm">customer11@example.com</td>
                    <td>
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">3 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">12</td>
                    <td class="fw-semibold fs-sm">Carol Ray</td>
                    <td class="fs-sm">customer12@example.com</td>
                    <td>
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">10 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">13</td>
                    <td class="fw-semibold fs-sm">Amber Harvey</td>
                    <td class="fs-sm">customer13@example.com</td>
                    <td>
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">7 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">14</td>
                    <td class="fw-semibold fs-sm">Andrea Gardner</td>
                    <td class="fs-sm">customer14@example.com</td>
                    <td>
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">10 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">15</td>
                    <td class="fw-semibold fs-sm">David Fuller</td>
                    <td class="fs-sm">customer15@example.com</td>
                    <td>
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">4 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">16</td>
                    <td class="fw-semibold fs-sm">Susan Day</td>
                    <td class="fs-sm">customer16@example.com</td>
                    <td>
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">7 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">17</td>
                    <td class="fw-semibold fs-sm">Jack Estrada</td>
                    <td class="fs-sm">customer17@example.com</td>
                    <td>
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">2 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">18</td>
                    <td class="fw-semibold fs-sm">Albert Ray</td>
                    <td class="fs-sm">customer18@example.com</td>
                    <td>
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">8 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">19</td>
                    <td class="fw-semibold fs-sm">Ralph Murray</td>
                    <td class="fs-sm">customer19@example.com</td>
                    <td>
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">2 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">20</td>
                    <td class="fw-semibold fs-sm">Amber Harvey</td>
                    <td class="fs-sm">customer20@example.com</td>
                    <td>
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">4 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">21</td>
                    <td class="fw-semibold fs-sm">Henry Harrison</td>
                    <td class="fs-sm">customer21@example.com</td>
                    <td>
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">6 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">22</td>
                    <td class="fw-semibold fs-sm">Brian Stevens</td>
                    <td class="fs-sm">customer22@example.com</td>
                    <td>
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">4 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">23</td>
                    <td class="fw-semibold fs-sm">Lori Grant</td>
                    <td class="fs-sm">customer23@example.com</td>
                    <td>
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">9 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">24</td>
                    <td class="fw-semibold fs-sm">Henry Harrison</td>
                    <td class="fs-sm">customer24@example.com</td>
                    <td>
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">7 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">25</td>
                    <td class="fw-semibold fs-sm">Helen Jacobs</td>
                    <td class="fs-sm">customer25@example.com</td>
                    <td>
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">9 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">26</td>
                    <td class="fw-semibold fs-sm">Melissa Rice</td>
                    <td class="fs-sm">customer26@example.com</td>
                    <td>
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">5 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">27</td>
                    <td class="fw-semibold fs-sm">Marie Duncan</td>
                    <td class="fs-sm">customer27@example.com</td>
                    <td>
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">8 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">28</td>
                    <td class="fw-semibold fs-sm">Jose Wagner</td>
                    <td class="fs-sm">customer28@example.com</td>
                    <td>
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">8 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">29</td>
                    <td class="fw-semibold fs-sm">Adam McCoy</td>
                    <td class="fs-sm">customer29@example.com</td>
                    <td>
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">5 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">30</td>
                    <td class="fw-semibold fs-sm">Lori Grant</td>
                    <td class="fs-sm">customer30@example.com</td>
                    <td>
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">6 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">31</td>
                    <td class="fw-semibold fs-sm">Ralph Murray</td>
                    <td class="fs-sm">customer31@example.com</td>
                    <td>
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">2 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">32</td>
                    <td class="fw-semibold fs-sm">Jack Greene</td>
                    <td class="fs-sm">customer32@example.com</td>
                    <td>
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">2 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">33</td>
                    <td class="fw-semibold fs-sm">Laura Carr</td>
                    <td class="fs-sm">customer33@example.com</td>
                    <td>
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">3 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">34</td>
                    <td class="fw-semibold fs-sm">Melissa Rice</td>
                    <td class="fs-sm">customer34@example.com</td>
                    <td>
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">2 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">35</td>
                    <td class="fw-semibold fs-sm">Betty Kelley</td>
                    <td class="fs-sm">customer35@example.com</td>
                    <td>
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">2 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">36</td>
                    <td class="fw-semibold fs-sm">Alice Moore</td>
                    <td class="fs-sm">customer36@example.com</td>
                    <td>
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">2 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">37</td>
                    <td class="fw-semibold fs-sm">Susan Day</td>
                    <td class="fs-sm">customer37@example.com</td>
                    <td>
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">7 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">38</td>
                    <td class="fw-semibold fs-sm">Jack Greene</td>
                    <td class="fs-sm">customer38@example.com</td>
                    <td>
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">5 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">39</td>
                    <td class="fw-semibold fs-sm">Carol Ray</td>
                    <td class="fs-sm">customer39@example.com</td>
                    <td>
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">9 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">40</td>
                    <td class="fw-semibold fs-sm">Lori Moore</td>
                    <td class="fs-sm">customer40@example.com</td>
                    <td>
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">9 days ago</span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- Dynamic Table Responsive -->
        </div>
        <!-- END Page Content -->
      </main>
      <!-- END Main Container -->

      <!-- Footer -->
      <footer id="page-footer" class="bg-body-light">
        <div class="content py-3">
          <div class="row fs-sm">
            <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-end">
              Crafted with <i class="fa fa-heart text-danger"></i> by <a class="fw-semibold" href="https://1.envato.market/ydb" target="_blank">pixelcave</a>
            </div>
            <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-start">
              <a class="fw-semibold" href="https://1.envato.market/AVD6j" target="_blank">OneUI 5.3</a> &copy; <span data-toggle="year-copy"></span>
            </div>
          </div>
        </div>
      </footer>
      <!-- END Footer -->
    </div>
    <!-- END Page Container -->

    <!--
        OneUI JS

        Core libraries and functionality
        webpack is putting everything together at assets/_js/main/app.js
    -->
      <script src="assets/js/oneui.app.min.js"></script>

      <!-- jQuery (required for DataTables plugin) -->
      <script src="assets/js/lib/jquery.min.js"></script>

      <!-- Page JS Plugins -->
      <script src="assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
      <script src="assets/js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js"></script>
      <script src="assets/js/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
      <script src="assets/js/plugins/datatables-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
      <script src="assets/js/plugins/datatables-buttons/dataTables.buttons.min.js"></script>
      <script src="assets/js/plugins/datatables-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
      <script src="assets/js/plugins/datatables-buttons-jszip/jszip.min.js"></script>
      <script src="assets/js/plugins/datatables-buttons-pdfmake/pdfmake.min.js"></script>
      <script src="assets/js/plugins/datatables-buttons-pdfmake/vfs_fonts.js"></script>
      <script src="assets/js/plugins/datatables-buttons/buttons.print.min.js"></script>
      <script src="assets/js/plugins/datatables-buttons/buttons.html5.min.js"></script>

      <!-- Page JS Code -->
      <script src="assets/js/pages/be_tables_datatables.min.js"></script>
    </body>
</html>
