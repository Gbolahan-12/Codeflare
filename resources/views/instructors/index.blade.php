<!doctype html>
<html lang="en">

<!-- Mirrored from geeksui.codescandy.com/geeks/pages/dashboard-student.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 May 2025 09:15:16 GMT -->
<head>
    <link rel="stylesheet" href="../../assets/libs/tiny-slider/dist/tiny-slider.css" />
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="../../assets/images/favicon/favicon.ico" />

    <!-- darkmode js -->
    <script src="../../assets/js/vendors/darkMode.js"></script>

    <!-- Libs CSS -->
    <link href="../../assets/fonts/feather/feather.css" rel="stylesheet" />
    <link href="../../assets/libs/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet" />
    <link href="../../assets/libs/simplebar/dist/simplebar.min.css" rel="stylesheet" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="../../assets/css/theme.min.css">

    <link rel="canonical" href="dashboard-student.html" />

    <title>Student Dashboard | Geeks - Bootstrap 5 Template</title>
</head>

<body>
    <!-- Page Content -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid px-0">
            <a class="navbar-brand" href="../index.html"><img src="../../assets/images/brand/logo/logo.svg" alt="Geeks" /></a>
            <!-- Mobile view nav wrap -->
            <div class="ms-auto d-flex align-items-center order-lg-3">
                <div class="dropdown">
                    <button class="btn btn-light btn-icon rounded-circle d-flex align-items-center" type="button" aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
                        <i class="bi theme-icon-active"></i>
                        <span class="visually-hidden bs-theme-text">Toggle theme</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bs-theme-text">
                        <li>
                            <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
                                <i class="bi theme-icon bi-sun-fill"></i>
                                <span class="ms-2">Light</span>
                            </button>
                        </li>
                        <li>
                            <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
                                <i class="bi theme-icon bi-moon-stars-fill"></i>
                                <span class="ms-2">Dark</span>
                            </button>
                        </li>
                        <li>
                            <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
                                <i class="bi theme-icon bi-circle-half"></i>
                                <span class="ms-2">Auto</span>
                            </button>
                        </li>
                    </ul>
                </div>
                <ul class="navbar-nav navbar-right-wrap ms-2 flex-row d-none d-md-block">
                    <li class="dropdown d-inline-block stopevent position-static">
                        <a class="btn btn-light btn-icon rounded-circle indicator indicator-primary" href="#" role="button" id="dropdownNotificationSecond" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fe fe-bell"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg position-absolute mx-3 my-5" aria-labelledby="dropdownNotificationSecond">
                            <div>
                                <div class="border-bottom px-3 pb-3 d-flex align-items-center">
                                    <span class="h5 mb-0">Notifications</span>
                                    <a href="# ">
                                        <span class="align-middle"><i class="fe fe-settings me-1"></i></span>
                                    </a>
                                </div>
                                <ul class="list-group list-group-flush" style="height: 300px" data-simplebar>
                                    <li class="list-group-item bg-light">
                                        <div class="row">
                                            <div class="col">
                                                <a class="text-body" href="#">
                                                    <div class="d-flex">
                                                        <img src="../../assets/images/avatar/avatar-1.jpg" alt="" class="avatar-md rounded-circle" />
                                                        <div class="ms-3">
                                                            <h5 class="fw-bold mb-1">Kristin Watson:</h5>
                                                            <p class="mb-3 text-body">Krisitn Watsan like your comment on course Javascript Introduction!</p>
                                                            <span class="fs-6">
                                                                <span>
                                                                    <span class="fe fe-thumbs-up text-success me-1"></span>
                                                                    2 hours ago,
                                                                </span>
                                                                <span class="ms-1">2:19 PM</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-auto text-center me-2">
                                                <a href="#" class="badge-dot bg-info" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark as read"></a>
                                                <div>
                                                    <a href="#" class="bg-transparent" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove">
                                                        <i class="fe fe-x"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col">
                                                <a class="text-body" href="#">
                                                    <div class="d-flex">
                                                        <img src="../../assets/images/avatar/avatar-2.jpg" alt="" class="avatar-md rounded-circle" />
                                                        <div class="ms-3">
                                                            <h5 class="fw-bold mb-1">Brooklyn Simmons</h5>
                                                            <p class="mb-3 text-body">Just launched a new Courses React for Beginner.</p>
                                                            <span class="fs-6">
                                                                <span>
                                                                    <span class="fe fe-thumbs-up text-success me-1"></span>
                                                                    Oct 9,
                                                                </span>
                                                                <span class="ms-1">1:20 PM</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-auto text-center me-2">
                                                <a href="#" class="badge-dot bg-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark as unread"></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col">
                                                <a class="text-body" href="#">
                                                    <div class="d-flex">
                                                        <img src="../../assets/images/avatar/avatar-3.jpg" alt="" class="avatar-md rounded-circle" />
                                                        <div class="ms-3">
                                                            <h5 class="fw-bold mb-1">Jenny Wilson</h5>
                                                            <p class="mb-3 text-body">Krisitn Watsan like your comment on course Javascript Introduction!</p>
                                                            <span class="fs-6">
                                                                <span>
                                                                    <span class="fe fe-thumbs-up text-info me-1"></span>
                                                                    Oct 9,
                                                                </span>
                                                                <span class="ms-1">1:56 PM</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-auto text-center me-2">
                                                <a href="#" class="badge-dot bg-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark as unread"></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col">
                                                <a class="text-body" href="#">
                                                    <div class="d-flex">
                                                        <img src="../../assets/images/avatar/avatar-4.jpg" alt="" class="avatar-md rounded-circle" />
                                                        <div class="ms-3">
                                                            <h5 class="fw-bold mb-1">Sina Ray</h5>
                                                            <p class="mb-3 text-body">You earn new certificate for complete the Javascript Beginner course.</p>
                                                            <span class="fs-6">
                                                                <span>
                                                                    <span class="fe fe-award text-warning me-1"></span>
                                                                    Oct 9,
                                                                </span>
                                                                <span class="ms-1">1:56 PM</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-auto text-center me-2">
                                                <a href="#" class="badge-dot bg-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark as unread"></a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="border-top px-3 pt-3 pb-0">
                                    <a href="notification-history.html" class="text-link fw-semibold">See all Notifications</a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="dropdown ms-2 d-inline-block position-static">
                        <a class="rounded-circle" href="#" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                            <div class="avatar avatar-md avatar-indicators avatar-online">
                                <img alt="avatar" src="../../assets/images/avatar/avatar-1.jpg" class="rounded-circle" />
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end position-absolute mx-3 my-5">
                            <div class="dropdown-item">
                                <div class="d-flex">
                                    <div class="avatar avatar-md avatar-indicators avatar-online">
                                        <img alt="avatar" src="../../assets/images/avatar/avatar-1.jpg" class="rounded-circle" />
                                    </div>
                                    <div class="ms-3 lh-1">
                                        <h5 class="mb-1">Annette Black</h5>
                                        <p class="mb-0">annette@geeksui.com</p>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>
                            <ul class="list-unstyled">
                                <li class="dropdown-submenu dropstart-lg">
                                    <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                                        <i class="fe fe-circle me-2"></i>
                                        Status
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <span class="badge-dot bg-success me-2"></span>
                                                Online
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <span class="badge-dot bg-secondary me-2"></span>
                                                Offline
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <span class="badge-dot bg-warning me-2"></span>
                                                Away
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <span class="badge-dot bg-danger me-2"></span>
                                                Busy
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="profile-edit.html">
                                        <i class="fe fe-user me-2"></i>
                                        Profile
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="student-subscriptions.html">
                                        <i class="fe fe-star me-2"></i>
                                        Subscription
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <i class="fe fe-settings me-2"></i>
                                        Settings
                                    </a>
                                </li>
                            </ul>
                            <div class="dropdown-divider"></div>
                            <ul class="list-unstyled">
                                <li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        <i class="fe fe-power me-2"></i>
                                        Sign Out
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <div>
                <!-- Button -->
                <button class="navbar-toggler collapsed ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar top-bar mt-0"></span>
                    <span class="icon-bar middle-bar"></span>
                    <span class="icon-bar bottom-bar"></span>
                </button>
            </div>
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="navbar-default">
                <ul class="navbar-nav mt-3 mt-lg-0 mx-xxl-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarBrowse" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-display="static">Categories</a>
                        <ul class="dropdown-menu dropdown-menu-arrow" aria-labelledby="navbarBrowse">
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Web Development</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="course-category.html">Bootstrap</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="course-category.html">React</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="course-category.html">GraphQl</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="course-category.html">Gatsby</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="course-category.html">Grunt</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="course-category.html">Svelte</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="course-category.html">Meteor</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="course-category.html">HTML5</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="course-category.html">Angular</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Design</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="course-category.html">Graphic Design</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="course-category.html">Illustrator</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="course-category.html">UX / UI Design</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="course-category.html">Figma Design</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="course-category.html">Adobe XD</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="course-category.html">Sketch</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="course-category.html">Icon Design</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="course-category.html">Photoshop</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="course-category.html" class="dropdown-item">Mobile App</a>
                            </li>
                            <li>
                                <a href="course-category.html" class="dropdown-item">IT Software</a>
                            </li>
                            <li>
                                <a href="course-category.html" class="dropdown-item">Marketing</a>
                            </li>
                            <li>
                                <a href="course-category.html" class="dropdown-item">Music</a>
                            </li>
                            <li>
                                <a href="course-category.html" class="dropdown-item">Life Style</a>
                            </li>
                            <li>
                                <a href="course-category.html" class="dropdown-item">Business</a>
                            </li>
                            <li>
                                <a href="course-category.html" class="dropdown-item">Photography</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarLanding" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Landings</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarLanding">
                            <li>
                                <h4 class="dropdown-header">Landings</h4>
                            </li>
                            <li>
                                <a href="../index.html" class="dropdown-item">
                                    <span>Home Default</span>
                                </a>
                            </li>
                            <li>
                                <a href="landings/landing-abroad.html" class="dropdown-item">
                                    <span>Home Abroad</span>
                                </a>
                            </li>
                            <li>
                                <a href="../mentor/mentor.html" class="dropdown-item">
                                    <span>Home Mentor</span>
                                </a>
                            </li>
                            <li>
                                <a href="landings/landing-education.html" class="dropdown-item">Home Education</a>
                            </li>
                            <li>
                                <a href="landings/home-academy.html" class="dropdown-item">Home Academy</a>
                            </li>
                            <li>
                                <a href="landings/landing-courses.html" class="dropdown-item">Home Courses</a>
                            </li>
                            <li>
                                <a href="landings/landing-sass.html" class="dropdown-item">Home Sass</a>
                            </li>
                            <li class="border-bottom my-2"></li>
                            <li>
                                <a href="landings/course-lead.html" class="dropdown-item">Lead Course</a>
                            </li>
                            <li>
                                <a href="landings/request-access.html" class="dropdown-item">Request Access</a>
                            </li>

                            <li>
                                <a href="landings/landing-job.html" class="dropdown-item">Job Listing</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarPages" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                        <ul class="dropdown-menu dropdown-menu-arrow" aria-labelledby="navbarPages">
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Courses</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="course-filter-grid.html">Course Grid</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="course-filter-list.html">Course List</a>
                                    </li>
                                    <li class="border-bottom my-2"></li>

                                    <li>
                                        <a class="dropdown-item" href="course-category.html">Course Category v1</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="course-category-v2.html">Course Category v2</a>
                                    </li>
                                    <li class="border-bottom my-2"></li>

                                    <li>
                                        <a class="dropdown-item" href="course-single.html">Course Single v1</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="course-single-v2.html">Course Single v2</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="course-single-v3.html">Course Single v3</a>
                                    </li>
                                    <li class="border-bottom my-2"></li>
                                    <li>
                                        <a class="dropdown-item" href="course-resume.html">Course Resume</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="course-checkout.html">Course Checkout</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="add-course.html">Add New Course</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="dropdown-item" href="dashboard-project.html">
                                    Projects
                                    <span class="badge bg-primary ms-2">New</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="dashboard-quiz.html">
                                    Quizzes
                                    <span class="badge bg-primary ms-2">New</span>
                                </a>
                            </li>
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Paths</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="course-path.html" class="dropdown-item">Browse Path</a>
                                    </li>
                                    <li>
                                        <a href="course-path-single.html" class="dropdown-item">Path Single</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Blog</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="blog.html">Listing</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="blog-single.html">Article</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="blog-category.html">Category</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="blog-sidebar.html">Sidebar</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Career</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="career.html">Overview</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="career-list.html">Listing</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="career-single.html">Opening</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Portfolio</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="portfolio.html">List</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="portfolio-single.html">Single</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                                    <span>Mentor</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="../mentor/mentor.html">Home</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="../mentor/mentor-list.html">List</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="../mentor/mentor-single.html">Single</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Job</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="landings/landing-job.html">Home</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="jobs/job-listing.html">List</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="jobs/job-grid.html">Grid</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="jobs/job-single.html">Single</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="jobs/company-list.html">Company List</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="jobs/company-about.html">Company Single</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Specialty</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="coming-soon.html">Coming Soon</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="404-error.html">Error 404</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="maintenance-mode.html">Maintenance Mode</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="terms-condition-page.html">Terms & Conditions</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <hr class="mx-3" />
                            </li>

                            <li>
                                <a class="dropdown-item" href="about.html">About</a>
                            </li>

                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Help Center</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="help-center.html">Help Center</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="help-center-faq.html">FAQ's</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="help-center-guide.html">Guide</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="help-center-guide-single.html">Guide Single</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="help-center-support.html">Support</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="dropdown-item" href="pricing.html">Pricing</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="compare-plan.html">Compare Plan</a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="contact.html">Contact</a>
                            </li>
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">Dropdown levels</a>
                                <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
                                    <li><a class="dropdown-item" href="#">Dropdown item</a></li>
                                    <li><a class="dropdown-item" href="#">Dropdown item</a></li>
                                    <li><a class="dropdown-item" href="#">Dropdown item</a></li>
                                    <!-- dropdown submenu open right -->
                                    <li class="dropdown-submenu dropend">
                                        <a class="dropdown-item dropdown-toggle" href="#">Dropdown (end)</a>
                                        <ul class="dropdown-menu" data-bs-popper="none">
                                            <li><a class="dropdown-item" href="#">Dropdown item</a></li>
                                            <li><a class="dropdown-item" href="#">Dropdown item</a></li>
                                        </ul>
                                    </li>

                                    <!-- dropdown submenu open left -->
                                    <li class="dropdown-submenu dropstart">
                                        <a class="dropdown-item dropdown-toggle" href="#">Dropdown (start)</a>
                                        <ul class="dropdown-menu" data-bs-popper="none">
                                            <li><a class="dropdown-item" href="#">Dropdown item</a></li>
                                            <li><a class="dropdown-item" href="#">Dropdown item</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarAccount" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Accounts</a>
                        <ul class="dropdown-menu dropdown-menu-arrow" aria-labelledby="navbarAccount">
                            <li>
                                <h4 class="dropdown-header">Accounts</h4>
                            </li>
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                                    Instructor
                                    <span class="badge bg-primary ms-2">New</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="text-wrap">
                                        <h5 class="dropdown-header text-dark">Instructor</h5>
                                        <p class="dropdown-text mb-0">Instructor dashboard for manage courses and earning.</p>
                                    </li>
                                    <li>
                                        <hr class="mx-3" />
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="dashboard-instructor.html">Dashboard</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="instructor-profile.html">Profile</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="instructor-courses.html">My Courses</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="instructor-order.html">Orders</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="instructor-reviews.html">Reviews</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="instructor-students.html">Students</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="instructor-payouts.html">Payouts</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="instructor-earning.html">Earning</a>
                                    </li>
                                    <li class="dropdown-submenu dropend">
                                        <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Quiz</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="instructor-quiz.html">Quiz</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="instructor-quiz-details.html">Single</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="instructor-quiz-result.html">Result</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                                    Students
                                    <span class="badge bg-primary ms-2">New</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="text-wrap">
                                        <h5 class="dropdown-header text-dark">Students</h5>
                                        <p class="dropdown-text mb-0">Students dashboard to manage your courses and subscriptions.</p>
                                    </li>
                                    <li>
                                        <hr class="mx-3" />
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="dashboard-student.html">Dashboard</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="student-subscriptions.html">Subscriptions</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="payment-method.html">Payments</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="billing-info.html">Billing Info</a>
                                    </li>
                                    <li class="dropdown-submenu dropend">
                                        <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Invoice</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="invoice.html">Invoice</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="invoice-details.html">Invoice Details</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a class="dropdown-item" href="dashboard-student.html">Bookmarked</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="dashboard-student.html">My Path</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="all-courses.html">All Courses</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="learning-path.html">Learning Path</a>
                                    </li>

                                    <li class="dropdown-submenu dropend">
                                        <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Quiz</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="student-quiz.html">Quiz</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="quiz-blank.html">Quiz Blank</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="my-quiz.html">My Quiz</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="student-quiz-attempt.html">Quiz Attempt</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="student-quiz-start.html">Quiz Single</a>
                                            </li>

                                            <li>
                                                <a class="dropdown-item" href="quiz-result.html">Quiz Result</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu dropend">
                                        <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Certificate</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="certificate-blank.html">Certificate</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="my-certificate.html">My Certificate</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu dropend">
                                        <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Learning</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="my-learning.html">My Learning</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="learning-single.html">Learning Single</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="learning-path-single.html">Learning Path Single</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu dropend">
                                        <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">My Projects</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="project-blank.html">Project Blank</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="dashboard-project.html">Dashboard Project</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="project-single.html">Project Single</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Admin</a>
                                <ul class="dropdown-menu">
                                    <li class="text-wrap">
                                        <h5 class="dropdown-header text-dark">Master Admin</h5>
                                        <p class="dropdown-text mb-0">Master admin dashboard to manage courses, user, site setting , and work with amazing apps.</p>
                                    </li>
                                    <li>
                                        <hr class="mx-3" />
                                    </li>
                                    <li class="px-3 d-grid">
                                        <a href="dashboard/admin-dashboard.html" class="btn btn-sm btn-primary">Go to Dashboard</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <hr class="mx-3" />
                            </li>
                            <li>
                                <a class="dropdown-item" href="sign-in.html">Sign In</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="sign-up.html">Sign Up</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="forget-password.html">Forgot Password</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="profile-edit.html">Edit Profile</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="security.html">Security</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="social-profile.html">Social Profiles</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="notifications.html">Notifications</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="profile-privacy.html">Privacy Settings</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="delete-profile.html">Delete Profile</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="linked-accounts.html">Linked Accounts</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fe fe-more-horizontal"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-md" aria-labelledby="navbarDropdown">
                            <div class="list-group">
                                <a class="list-group-item list-group-item-action border-0" href="../docs/index.html">
                                    <div class="d-flex align-items-center">
                                        <i class="fe fe-file-text fs-3 text-primary"></i>
                                        <div class="ms-3">
                                            <h5 class="mb-0">Documentations</h5>
                                            <p class="mb-0 fs-6">Browse the all documentation</p>
                                        </div>
                                    </div>
                                </a>
                                <a class="list-group-item list-group-item-action border-0" href="../docs/bootstrap-5-snippets.html">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-files fs-3 text-primary"></i>
                                        <div class="ms-3">
                                            <h5 class="mb-0">Snippet</h5>
                                            <p class="mb-0 fs-6">Bunch of Snippet</p>
                                        </div>
                                    </div>
                                </a>
                                <a class="list-group-item list-group-item-action border-0" href="../docs/changelog.html">
                                    <div class="d-flex align-items-center">
                                        <i class="fe fe-layers fs-3 text-primary"></i>
                                        <div class="ms-3">
                                            <h5 class="mb-0">
                                                Changelog
                                                <span class="text-primary ms-1" id="changelog"></span>
                                            </h5>
                                            <p class="mb-0 fs-6">See what's new</p>
                                        </div>
                                    </div>
                                </a>
                                <a class="list-group-item list-group-item-action border-0" href="../../geeks-rtl/index.html" target="_blank">
                                    <div class="d-flex align-items-center">
                                        <i class="fe fe-toggle-right fs-3 text-primary"></i>
                                        <div class="ms-3">
                                            <h5 class="mb-0">RTL demo</h5>
                                            <p class="mb-0 fs-6">RTL Pages</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
                <form class="mt-3 mt-lg-0 me-lg-5 d-flex align-items-center">
                    <span class="position-absolute ps-3 search-icon">
                        <i class="fe fe-search"></i>
                    </span>
                    <label for="search" class="visually-hidden"></label>
                    <input type="search" id="search" class="form-control ps-6" placeholder="Search Courses" />
                </form>
            </div>
        </div>
    </nav>


    <!-- Sidebar -->
    <!-- Sidebar -->
    <div class="position-relative">
        <nav class="navbar navbar-expand-lg sidenav sidenav-navbar">
            <!-- Menu -->
            <a class="d-xl-none d-lg-none d-block text-inherit fw-bold" href="#">Menu</a>
            <!-- Button -->

            <button class="navbar-toggler d-lg-none icon-shape icon-sm rounded bg-primary text-light" type="button" data-bs-toggle="collapse" data-bs-target="#sidenavNavbar" aria-controls="sidenavNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fe fe-menu"></span>
            </button>

            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenavNavbar">
                <div class="navbar-nav flex-column mt-4 mt-lg-0 d-flex flex-column gap-3">
                    <ul class="list-unstyled mb-0">
                        <!-- Nav item -->

                        <li class="nav-item">
                            <a class="nav-link" href="dashboard-student.html">
                                <i class="fe fe-home nav-icon"></i>
                                Dashboard
                            </a>
                        </li>
                        <!-- Nav item -->
                        <li class="nav-item">
                            <a class="nav-link" href="my-learning.html">
                                <i class="fe fe-award nav-icon"></i>
                                My Learning
                            </a>
                        </li>
                        <!-- Nav item -->
                        <li class="nav-item">
                            <a class="nav-link" href="project-blank.html">
                                <i class="fe fe-edit nav-icon"></i>
                                My Projects
                            </a>
                        </li>
                        <!-- Nav item -->
                        <li class="nav-item nav-collapse">
                            <a class="nav-sub-link" data-bs-toggle="collapse" href="#collapseExample">
                                <i class="fe fe-help-circle nav-icon"></i>
                                My Quiz
                            </a>
                            <div class="collapse" id="collapseExample">
                                <ul class="list-unstyled py-2 px-4">
                                    <li class="nav-item">
                                        <a class="nav-link" href="quiz-blank.html">Quiz</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="my-quiz.html">My Quiz</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="student-quiz-start.html">Quiz Single</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="quiz-result.html">Quiz Result</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- Nav item -->
                        <li class="nav-item nav-collapse">
                            <a class="nav-sub-link" data-bs-toggle="collapse" href="#collapseCertificat">
                                <i class="fe fe-file-text nav-icon"></i>
                                Certificate
                            </a>
                            <div class="collapse py-2 px-4" id="collapseCertificat">
                                <ul class="list-unstyled">
                                    <li class="nav-item">
                                        <a class="nav-link" href="certificate-blank.html">Certificate</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="my-certificate.html">My Certificate</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- Nav item -->
                        <li class="nav-item">
                            <a class="nav-link" href="student-subscriptions.html">
                                <i class="fe fe-calendar nav-icon"></i>
                                Subscription
                            </a>
                        </li>
                        <!-- Nav item -->
                        <li class="nav-item">
                            <a class="nav-link" href="billing-info.html">
                                <i class="fe fe-info nav-icon"></i>
                                Billing Info
                            </a>
                        </li>
                        <!-- Nav item -->
                        <li class="nav-item">
                            <a class="nav-link" href="payment-method.html">
                                <i class="fe fe-credit-card nav-icon"></i>
                                Payment
                            </a>
                        </li>
                        <!-- Nav item -->
                        <li class="nav-item">
                            <a class="nav-link" href="invoice.html">
                                <i class="fe fe-file nav-icon"></i>
                                Invoice
                            </a>
                        </li>
                    </ul>
                    <!-- Navbar header -->
                    <div class="d-flex flex-column gap-1">
                        <span class="navbar-header">Learn</span>
                        <ul class="list-unstyled mb-0">
                            <!-- Nav item -->
                            <li class="nav-item">
                                <a class="nav-link" href="all-courses.html">
                                    <i class="fe fe-youtube nav-icon"></i>
                                    All Courses
                                </a>
                            </li>
                            <!-- Nav item -->
                            <li class="nav-item">
                                <a class="nav-link" href="learning-path.html">
                                    <i class="fe fe-trending-up nav-icon"></i>
                                    Learning path
                                </a>
                            </li>
                            <!-- Nav item -->
                            <li class="nav-item">
                                <a class="nav-link" href="dashboard-project.html">
                                    <i class="fe fe-edit nav-icon"></i>
                                    Projects
                                </a>
                            </li>
                            <!-- Nav item -->
                            <li class="nav-item">
                                <a class="nav-link" href="dashboard-quiz.html">
                                    <i class="fe fe-credit-card nav-icon"></i>
                                    Quizzes
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- Navbar header -->
                    <div class="d-flex flex-column gap-1">
                        <span class="navbar-header">Account Settings</span>
                        <ul class="list-unstyled mb-0">
                            <!-- Nav item -->
                            <li class="nav-item">
                                <a class="nav-link" href="profile-edit.html">
                                    <i class="fe fe-settings nav-icon"></i>
                                    Edit Profile
                                </a>
                            </li>
                            <!-- Nav item -->
                            <li class="nav-item">
                                <a class="nav-link" href="security.html">
                                    <i class="fe fe-user nav-icon"></i>
                                    Security
                                </a>
                            </li>
                            <!-- Nav item -->
                            <li class="nav-item">
                                <a class="nav-link" href="social-profile.html">
                                    <i class="fe fe-refresh-cw nav-icon"></i>
                                    Social Profiles
                                </a>
                            </li>
                            <!-- Nav item -->
                            <li class="nav-item">
                                <a class="nav-link" href="notifications.html">
                                    <i class="fe fe-bell nav-icon"></i>
                                    Notifications
                                </a>
                            </li>
                            <!-- Nav item -->
                            <li class="nav-item">
                                <a class="nav-link" href="profile-privacy.html">
                                    <i class="fe fe-lock nav-icon"></i>
                                    Profile Privacy
                                </a>
                            </li>
                            <!-- Nav item -->
                            <li class="nav-item">
                                <a class="nav-link" href="delete-profile.html">
                                    <i class="fe fe-trash nav-icon"></i>
                                    Delete Profile
                                </a>
                            </li>
                            <!-- Nav item -->
                            <li class="nav-item">
                                <a class="nav-link" href="linked-accounts.html">
                                    <i class="fe fe-user nav-icon"></i>
                                    Linked Accounts
                                </a>
                            </li>
                            <!-- Nav item -->
                            <li class="nav-item">
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    <i class="fe fe-power me-2"></i>
                                    Sign Out
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show position-fixed" role="alert" id="success-alert" style="top: 1rem; right: 1rem; z-index: 1055; min-width: 250px;">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        <script>
            setTimeout(() => {
                const alert = document.getElementById('success-alert');
                if (alert) {
                    alert.classList.remove('show');
                    alert.classList.add('fade');
                    setTimeout(() => alert.remove(), 300);
                }
            }, 4000);

        </script>
        @endif


    </div>


    <div class="db-content">
        <div class="container mb-4">
            <div class="row mb-5">
                <div class="col-12">
                    <h1 class="h2 mb-0">My Dashboard</h1>
                </div>
            </div>
            <div class="row mb-5 g-4 gy-lg-0">
                <div class="col-xxl-3 col-lg-5 col-12">
                    <div class="card h-100">
                        <div class="card-body d-flex flex-column gap-4 p-4">
                            <div class="d-flex flex-column gap-2">
                                <div class="d-flex flex-row justify-content-between">
                                    <img src="../../assets/images/avatar/avatar-1.jpg" alt="avatar" class="avatar avatar-xl rounded-circle" />
                                    <a href="#!" class="btn-icon btn btn-ghost btn-sm rounded-circle" data-bs-toggle="tooltip" data-placement="top" title="Edit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325" />
                                        </svg>
                                    </a>
                                </div>
                                <div class="d-flex flex-column gap-1">
                                    <h2 class="h3 mb-0">Hey, Jitu</h2>
                                    <span class="fs-6 fw-medium">ID: 98765</span>
                                </div>
                            </div>
                            <div class="d-flex flex-column">
                                <span class="fs-6 fw-medium">Current Course: </span>
                                <span class="fw-bold">Full Stack Development</span>
                            </div>
                            <div class="d-flex flex-column gap-2">
                                <div class="progress" style="height: 4px">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 65%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="small">Profile 30% complete</span>
                            </div>
                            <div class="d-flex flex-row gap-2">
                                <a href="#!">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="24" height="24" rx="12" fill="var(--gk-gray-100)" />
                                        <path d="M12 20C15.314 20 18 18 18 14.5C18 13 17.5 10.5 15.5 8.5C15.75 10 14.25 10.5 14.25 10.5C15 8 13 4.5 10 4C10.357 6 10.5 8 8 10C6.75 11 6 12.729 6 14.5C6 18 8.686 20 12 20ZM12 19C10.343 19 9 18 9 16.25C9 15.5 9.25 14.25 10.25 13.25C10.125 14 11 14.5 11 14.5C10.625 13.25 11.5 11.25 13 11C12.821 12 12.75 13 14 14C14.625 14.5 15 15.364 15 16.25C15 18 13.657 19 12 19Z" fill="url(#paint0_linear_8175_5853)" />
                                        <defs>
                                            <linearGradient id="paint0_linear_8175_5853" x1="12" y1="4" x2="12" y2="20" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="var(--gk-danger)" />
                                                <stop offset="1" stop-color="var(--gk-danger)" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </a>
                                <a href="#!">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="24" height="24" rx="12" fill="var(--gk-gray-100)" />
                                        <path d="M12 20C15.314 20 18 18 18 14.5C18 13 17.5 10.5 15.5 8.5C15.75 10 14.25 10.5 14.25 10.5C15 8 13 4.5 10 4C10.357 6 10.5 8 8 10C6.75 11 6 12.729 6 14.5C6 18 8.686 20 12 20ZM12 19C10.343 19 9 18 9 16.25C9 15.5 9.25 14.25 10.25 13.25C10.125 14 11 14.5 11 14.5C10.625 13.25 11.5 11.25 13 11C12.821 12 12.75 13 14 14C14.625 14.5 15 15.364 15 16.25C15 18 13.657 19 12 19Z" fill="var(--gk-gray-300)" />
                                    </svg>
                                </a>

                                <a href="#!">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="24" height="24" rx="12" fill="var(--gk-gray-100)" />
                                        <path d="M12 20C15.314 20 18 18 18 14.5C18 13 17.5 10.5 15.5 8.5C15.75 10 14.25 10.5 14.25 10.5C15 8 13 4.5 10 4C10.357 6 10.5 8 8 10C6.75 11 6 12.729 6 14.5C6 18 8.686 20 12 20ZM12 19C10.343 19 9 18 9 16.25C9 15.5 9.25 14.25 10.25 13.25C10.125 14 11 14.5 11 14.5C10.625 13.25 11.5 11.25 13 11C12.821 12 12.75 13 14 14C14.625 14.5 15 15.364 15 16.25C15 18 13.657 19 12 19Z" fill="var(--gk-gray-300)" />
                                    </svg>
                                </a>
                                <a href="#!">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="24" height="24" rx="12" fill="var(--gk-gray-100)" />
                                        <path d="M12 20C15.314 20 18 18 18 14.5C18 13 17.5 10.5 15.5 8.5C15.75 10 14.25 10.5 14.25 10.5C15 8 13 4.5 10 4C10.357 6 10.5 8 8 10C6.75 11 6 12.729 6 14.5C6 18 8.686 20 12 20ZM12 19C10.343 19 9 18 9 16.25C9 15.5 9.25 14.25 10.25 13.25C10.125 14 11 14.5 11 14.5C10.625 13.25 11.5 11.25 13 11C12.821 12 12.75 13 14 14C14.625 14.5 15 15.364 15 16.25C15 18 13.657 19 12 19Z" fill="var(--gk-gray-300)" />
                                    </svg>
                                </a>
                                <a href="#!">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="24" height="24" rx="12" fill="var(--gk-gray-100)" />
                                        <path d="M12 20C15.314 20 18 18 18 14.5C18 13 17.5 10.5 15.5 8.5C15.75 10 14.25 10.5 14.25 10.5C15 8 13 4.5 10 4C10.357 6 10.5 8 8 10C6.75 11 6 12.729 6 14.5C6 18 8.686 20 12 20ZM12 19C10.343 19 9 18 9 16.25C9 15.5 9.25 14.25 10.25 13.25C10.125 14 11 14.5 11 14.5C10.625 13.25 11.5 11.25 13 11C12.821 12 12.75 13 14 14C14.625 14.5 15 15.364 15 16.25C15 18 13.657 19 12 19Z" fill="var(--gk-gray-300)" />
                                    </svg>
                                </a>
                                <a href="#!">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="24" height="24" rx="12" fill="var(--gk-gray-100)" />
                                        <path d="M12 20C15.314 20 18 18 18 14.5C18 13 17.5 10.5 15.5 8.5C15.75 10 14.25 10.5 14.25 10.5C15 8 13 4.5 10 4C10.357 6 10.5 8 8 10C6.75 11 6 12.729 6 14.5C6 18 8.686 20 12 20ZM12 19C10.343 19 9 18 9 16.25C9 15.5 9.25 14.25 10.25 13.25C10.125 14 11 14.5 11 14.5C10.625 13.25 11.5 11.25 13 11C12.821 12 12.75 13 14 14C14.625 14.5 15 15.364 15 16.25C15 18 13.657 19 12 19Z" fill="var(--gk-gray-300)" />
                                    </svg>
                                </a>
                                <a href="#!">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="24" height="24" rx="12" fill="var(--gk-gray-100)" />
                                        <path d="M12 20C15.314 20 18 18 18 14.5C18 13 17.5 10.5 15.5 8.5C15.75 10 14.25 10.5 14.25 10.5C15 8 13 4.5 10 4C10.357 6 10.5 8 8 10C6.75 11 6 12.729 6 14.5C6 18 8.686 20 12 20ZM12 19C10.343 19 9 18 9 16.25C9 15.5 9.25 14.25 10.25 13.25C10.125 14 11 14.5 11 14.5C10.625 13.25 11.5 11.25 13 11C12.821 12 12.75 13 14 14C14.625 14.5 15 15.364 15 16.25C15 18 13.657 19 12 19Z" fill="var(--gk-gray-300)" />
                                    </svg>
                                </a>

                                <a href="#!">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="24" height="24" rx="12" fill="var(--gk-gray-100)" />
                                        <path d="M12 20C15.314 20 18 18 18 14.5C18 13 17.5 10.5 15.5 8.5C15.75 10 14.25 10.5 14.25 10.5C15 8 13 4.5 10 4C10.357 6 10.5 8 8 10C6.75 11 6 12.729 6 14.5C6 18 8.686 20 12 20ZM12 19C10.343 19 9 18 9 16.25C9 15.5 9.25 14.25 10.25 13.25C10.125 14 11 14.5 11 14.5C10.625 13.25 11.5 11.25 13 11C12.821 12 12.75 13 14 14C14.625 14.5 15 15.364 15 16.25C15 18 13.657 19 12 19Z" fill="var(--gk-gray-300)" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-9 col-lg-7 col-12">
                    <div class="card h-100">
                        <div class="card-body p-5">
                            <div class="slider dashboard-slider">
                                <div>
                                    <div class="row align-items-center gy-5">
                                        <div class="col-xl-6 col-12">
                                            <div class="d-flex flex-column gap-4">
                                                <div class="d-flex flex-column gap-2">
                                                    <h2 class="mb-0">Welcome to your Dashboard!</h2>
                                                    <p class="mb-0">
                                                        Research shows that setting specific goals boosts effectiveness and success. We suggest you start by taking a moment to think about what you want to achieve
                                                    </p>
                                                </div>
                                                <div>
                                                    <a href="#!" class="btn btn-dark">Create a Learning Path</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="text-center d-xl-block d-none">
                                                <img src="../../assets/images/svg/education.svg" alt="education" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row align-items-center gy-5">
                                        <div class="col-xl-6 col-12">
                                            <div class="d-flex flex-column gap-4">
                                                <div class="d-flex flex-column gap-2">
                                                    <h2 class="mb-0">Earn the Tech Certificate</h2>
                                                    <p class="mb-0">Earn industry-recognized certifications by passing the required exams that include questions reflecting real world problems faced in a job.</p>
                                                </div>
                                                <div>
                                                    <a href="#!" class="btn btn-dark">Earn Certificate</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="text-center d-xl-block d-none">
                                                <img src="../../assets/images/svg/certificates.svg" alt="certificates" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row align-items-center gy-5">
                                        <div class="col-xl-6 col-12">
                                            <div class="d-flex flex-column gap-4">
                                                <div class="d-flex flex-column gap-2">
                                                    <h2 class="mb-0">Real World Projects</h2>
                                                    <p class="mb-0">Engage with real-world challenges using our projects directory. Apply your knowledge to real scenarios in a practical environment.</p>
                                                </div>
                                                <div>
                                                    <a href="#!" class="btn btn-dark">Start Project</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="text-center d-xl-block d-none">
                                                <img src="../../assets/images/svg/projects.svg" alt="projects" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Bullet Navigation -->
                            <div id="custom-pagination" class="slider-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-4 mb-5">
                <div class="col-12">
                    <div class="d-flex flex-row align-items-center justify-content-between">
                        <div class="d-flex flex-row align-items-center gap-2">
                            <div>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_8175_5628)">
                                        <path d="M8.211 2.0467C8.14491 2.01594 8.07289 2 8 2C7.9271 2 7.85508 2.01594 7.789 2.0467L0.288996 5.5467C0.200678 5.58793 0.126334 5.65406 0.0751066 5.73698C0.0238794 5.81989 -0.00199738 5.91597 0.000658795 6.0134C0.00331497 6.11083 0.0343882 6.20536 0.0900571 6.28536C0.145726 6.36536 0.223563 6.42735 0.313996 6.4637L7.814 9.4637C7.93338 9.51155 8.06661 9.51155 8.186 9.4637L14 7.1397V12.9997C13.7348 12.9997 13.4804 13.1051 13.2929 13.2926C13.1054 13.4801 13 13.7345 13 13.9997V15.9997H16V13.9997C16 13.7345 15.8946 13.4801 15.7071 13.2926C15.5196 13.1051 15.2652 12.9997 15 12.9997V6.7387L15.686 6.4637C15.7764 6.42735 15.8543 6.36536 15.9099 6.28536C15.9656 6.20536 15.9967 6.11083 15.9993 6.0134C16.002 5.91597 15.9761 5.81989 15.9249 5.73698C15.8737 5.65406 15.7993 5.58793 15.711 5.5467L8.211 2.0467ZM8 8.4597L1.758 5.9647L8 3.0517L14.242 5.9647L8 8.4597Z" fill="#64748B" />
                                        <path d="M4.176 9.0321C4.11162 9.00784 4.04292 8.99714 3.97421 9.00065C3.9055 9.00416 3.83825 9.02182 3.77668 9.05251C3.7151 9.08321 3.66053 9.12628 3.61636 9.17903C3.57219 9.23179 3.53939 9.29309 3.52 9.3591L3.02 11.0591C2.98498 11.1784 2.9957 11.3066 3.05006 11.4184C3.10442 11.5303 3.19853 11.6179 3.314 11.6641L7.814 13.4641C7.93339 13.5119 8.06662 13.5119 8.186 13.4641L12.686 11.6641C12.8015 11.6179 12.8956 11.5303 12.9499 11.4184C13.0043 11.3066 13.015 11.1784 12.98 11.0591L12.48 9.3591C12.4606 9.29309 12.4278 9.23179 12.3836 9.17903C12.3395 9.12628 12.2849 9.08321 12.2233 9.05251C12.1618 9.02182 12.0945 9.00416 12.0258 9.00065C11.9571 8.99714 11.8884 9.00784 11.824 9.0321L8 10.4661L4.176 9.0321ZM4.108 10.9051L4.328 10.1571L7.824 11.4681C7.93746 11.5108 8.06255 11.5108 8.176 11.4681L11.672 10.1571L11.892 10.9051L8 12.4601L4.108 10.9051Z" fill="#64748B" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_8175_5628">
                                            <rect width="16" height="16" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <h3 class="mb-0">Learn</h3>
                        </div>
                        <a href="#!" class="btn btn-primary">View All</a>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-12">
                    <!-- Card -->
                    <div class="card">
                        <a href="#"><img src="../../assets/images/course/course-html.jpg" alt="course" class="card-img-top" /></a>
                        <!-- Card body -->
                        <div class="card-body d-flex flex-column gap-3">
                            <h3 class="h4 mb-0"><a href="#" class="text-inherit">HTML Courses</a></h3>

                            <div class="d-flex flex-column gap-2">
                                <div class="d-flex flex-row justify-content-between align-items-center">
                                    <span class="text-truncate">12 of 12 lessons completed...</span>
                                    <span class="fw-bold">100%</span>
                                </div>
                                <div class="progress" style="height: 6px">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div>
                                <span class="badge bg-success-subtle border border-success rounded-pill text-success">Completed</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-12">
                    <!-- Card -->
                    <div class="card">
                        <a href="#"><img src="../../assets/images/course/course-javascript.jpg" alt="course" class="card-img-top" /></a>
                        <!-- Card body -->
                        <div class="card-body d-flex flex-column gap-3">
                            <h3 class="h4 mb-0"><a href="#" class="text-inherit">Javascript Courses</a></h3>

                            <div class="d-flex flex-column gap-2">
                                <div class="d-flex flex-row justify-content-between align-items-center">
                                    <span class="text-truncate">1 of 12 lessons completed...</span>
                                    <span class="fw-bold">20%</span>
                                </div>
                                <div class="progress" style="height: 6px">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 35%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div>
                                <span class="badge bg-warning-subtle border border-warning rounded-pill text-warning">In Process</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-12">
                    <!-- Card -->
                    <div class="card">
                        <a href="#"><img src="../../assets/images/course/course-python.jpg" alt="course" class="card-img-top" /></a>
                        <!-- Card body -->
                        <div class="card-body d-flex flex-column gap-3">
                            <h3 class="h4 mb-0"><a href="#" class="text-inherit">Learn Python</a></h3>

                            <div class="d-flex flex-column gap-2">
                                <div class="d-flex flex-row justify-content-between align-items-center">
                                    <span class="text-truncate">0 of 15 lessons completed...</span>
                                    <span class="fw-bold">0%</span>
                                </div>
                                <div class="progress" style="height: 6px">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div>
                                <span class="badge bg-light-subtle border rounded-pill text-secondary">Not Started</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-12">
                    <!-- Card -->
                    <div class="card">
                        <a href="#"><img src="../../assets/images/course/course-react.jpg" alt="course" class="card-img-top" /></a>
                        <!-- Card body -->
                        <div class="card-body d-flex flex-column gap-3">
                            <h3 class="h4 mb-0"><a href="#" class="text-inherit">React Fundamental</a></h3>

                            <div class="d-flex flex-column gap-2">
                                <div class="d-flex flex-row justify-content-between align-items-center">
                                    <span class="text-truncate">0 of 10 lessons completed...</span>
                                    <span class="fw-bold">0%</span>
                                </div>
                                <div class="progress" style="height: 6px">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 35%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div>
                                <span class="badge bg-light-subtle border rounded-pill text-secondary">Not Started</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="d-flex flex-row align-items gap-2 mb-3">
                        <div>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_8182_18024)">
                                    <path d="M14.5035 1.296L12 0L9.49648 1.296L6.70948 1.719L5.44648 4.239L3.44098 6.219L3.89998 9L3.44098 11.781L5.44648 13.761L6.70948 16.281L9.49648 16.704L12 18L14.5035 16.704L17.2905 16.281L18.5535 13.761L20.559 11.781L20.1 9L20.559 6.219L18.5535 4.239L17.2905 1.719L14.5035 1.296ZM16.2975 3.0855L17.3235 5.133L18.9525 6.741L18.5805 9L18.9525 11.259L17.3235 12.867L16.2975 14.9145L14.0325 15.258L12 16.311L9.96748 15.258L7.70248 14.9145L6.67648 12.867L5.04748 11.259L5.42098 9L5.04598 6.741L6.67648 5.133L7.70248 3.0855L9.96748 2.742L12 1.689L14.034 2.742L16.2975 3.0855Z" fill="#64748B" />
                                    <path d="M6 17.6914V24.0004L12 22.5004L18 24.0004V17.6914L14.973 18.1504L12 19.6894L9.027 18.1504L6 17.6914Z" fill="#64748B" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_8182_18024">
                                        <rect width="24" height="24" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <h3 class="mb-0">Certification</h3>
                    </div>
                </div>
                <div class="col-12">
                    <div class="border-dashed py-6 text-center rounded-3 px-4 px-md-7 px-lg-0">
                        <div class="bg-gray-300 rounded-circle icon-shape icon-xl mb-4">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-secondary">
                                <g clip-path="url(#clip0_8182_18024)">
                                    <path d="M14.5035 1.296L12 0L9.49648 1.296L6.70948 1.719L5.44648 4.239L3.44098 6.219L3.89998 9L3.44098 11.781L5.44648 13.761L6.70948 16.281L9.49648 16.704L12 18L14.5035 16.704L17.2905 16.281L18.5535 13.761L20.559 11.781L20.1 9L20.559 6.219L18.5535 4.239L17.2905 1.719L14.5035 1.296ZM16.2975 3.0855L17.3235 5.133L18.9525 6.741L18.5805 9L18.9525 11.259L17.3235 12.867L16.2975 14.9145L14.0325 15.258L12 16.311L9.96748 15.258L7.70248 14.9145L6.67648 12.867L5.04748 11.259L5.42098 9L5.04598 6.741L6.67648 5.133L7.70248 3.0855L9.96748 2.742L12 1.689L14.034 2.742L16.2975 3.0855Z" fill="#64748B" />
                                    <path d="M6 17.6914V24.0004L12 22.5004L18 24.0004V17.6914L14.973 18.1504L12 19.6894L9.027 18.1504L6 17.6914Z" fill="#64748B" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_8182_18024">
                                        <rect width="24" height="24" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div class="d-flex flex-column gap-2 mb-4">
                            <h3 class="mb-0 h2">Earn Certificates online Free</h3>
                            <p class="mb-0">Improve your chances of getting hired with an industry recognized Geeks Certification.</p>
                        </div>
                        <div>
                            <a href="#!" class="btn btn-success">See All Certificate</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Scroll top -->
    <div class="btn-scroll-top">
        <svg class="progress-square svg-content" width="100%" height="100%" viewBox="0 0 40 40">
            <path d="M8 1H32C35.866 1 39 4.13401 39 8V32C39 35.866 35.866 39 32 39H8C4.13401 39 1 35.866 1 32V8C1 4.13401 4.13401 1 8 1Z" />
        </svg>
    </div>

    <!-- Scripts -->
    <!-- Libs JS -->
    <script src="../../assets/libs/%40popperjs/core/dist/umd/popper.min.js"></script>
    <script src="../../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../../assets/libs/simplebar/dist/simplebar.min.js"></script>

    <!-- Theme JS -->
    <script src="../../assets/js/theme.min.js"></script>

    <script src="../../assets/libs/tiny-slider/dist/min/tiny-slider.js"></script>
    <script src="../../assets/js/vendors/tnsSlider.js"></script>
    <script src="../../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="../../assets/js/vendors/chart.js"></script>
    <script src="../../assets/js/vendors/navbar-nav.js"></script>
</body>

<!-- Mirrored from geeksui.codescandy.com/geeks/pages/dashboard-student.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 May 2025 09:15:18 GMT -->
</html>
