<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

    <title>Courses 0</title>

    <?php $main_libs_dir = ""; ?>
    <?php $main_sidebar_dir = ""; ?>
    <?php require_once("main/styles/header.php"); ?>




</head>

<body class="layout-default">






    <!-- Header Layout -->
    <div class="mdk-header-layout js-mdk-header-layout">

        <?php $main_header_dir = "main/"; ?>

        <?php require_once("main/parts/header.php"); ?>


        <!-- Header Layout Content -->
        <div class="mdk-header-layout__content">

            <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
                <div class="mdk-drawer-layout__content page">
                    <link href="assets/css/aos.css" rel="stylesheet">





                    <div class="container-fluid page__heading-container">
                        <div class="page__heading d-flex align-items-center justify-content-between mb-0">
                            <h1 class="m-0">Courses</h1>
                            <div class="d-flex align-items-center">
                                <span class="mr-2 bold text-muted">Sort:</span>
                                <select class="form-control form-inline">
                                    <option value="1">Course Name</option>
                                    <option value="2">Price</option>
                                    <option value="3">Author</option>
                                </select>
                            </div>
                            <a href="courses.php" class="d-flex align-items-center btn btn-success ml-3">Go to Courses <i class="material-icons">arrow_forward</i></a>

                        </div>
                    </div>





                    <div class="container-fluid page__container">

                        <div class="card clear-shadow">

                            <div class="bg-soft-light-gray card-header card-header-tabs-basic nav" role="tablist">
                                <a href="student-series.php#activity_all" class="active" data-toggle="tab" role="tab" aria-selected="true">All</a>
                                <a href="student-series.php#activity_purchases" data-toggle="tab" role="tab" aria-selected="false">Marketing</a>
                                <a href="student-series.php#activity_emails" data-toggle="tab" role="tab" aria-selected="false">Back-End</a>
                                <a href="student-series.php#activity_quotes" data-toggle="tab" role="tab" aria-selected="false">Design</a>

                                <div class="form-inline  mb-3 ml-auto">
                                    <div class="form-group mr-3">
                                        <label for="custom-select" class="form-label mr-1">Category</label>
                                        <select id="custom-select" class="form-control custom-select" style="width: 200px;">
                                            <option selected="">All categories</option>
                                            <option value="1">Vue.js</option>
                                            <option value="2">Node.js</option>
                                            <option value="3">GitHub</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="published01" class="form-label mr-1">Status</label>
                                        <select id="published01" class="form-control custom-select" style="width: 200px;">
                                            <option selected="">All</option>
                                            <option value="1">In Progress</option>
                                            <option value="3">New Releases</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                        </div>






                        <div class="d-flex justify-content-around pb-4">

                            <div class="row">

                                <div class="col-md-6 col-lg-4">
                                    <div class="card card__course card__course__animate">
                                        <a href="course-details.php" class="card-img-top">
                                            <img src="assets/images/course_lms.jpg" style="width:100%;" alt="Card image cap">
                                            <span class="play-button">
                                                <svg version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50" width="60" height="60">
                                                    <g transform="matrix(2.0833333333333335,0,0,2.0833333333333335,0,0)">
                                                        <path d="M12,0C5.373,0,0,5.373,0,12s5.373,12,12,12s12-5.373,12-12C23.993,5.376,18.624,0.007,12,0z M16.828,12.894l-7.381,3.69 l0,0c-0.494,0.247-1.095,0.047-1.342-0.448C8.036,15.998,8,15.845,8,15.69V8.308c0-0.552,0.448-1,1-1 c0.155,0,0.307,0.036,0.446,0.105l7.383,3.687c0.495,0.245,0.698,0.845,0.453,1.34c-0.097,0.197-0.257,0.356-0.454,0.453V12.894z" stroke="none" fill="currentColor" stroke-width="0" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                        </a>

                                        <div class="p-3 text-center border-bottom">
                                            <div class="bold mb-2">
                                                <a href="course-details.php" class="text-body">
                                                    <span class="course__title">React</span>-<span class="course__subtitle">Back to Basics</span>
                                                </a>
                                            </div>
                                            <div class="d-flex justify-content-around">


                                                <div class="mb-2 text-muted d-flex align-items-center align-self-center">
                                                    <small class="mr-3 d-flex align-items-center">
                                                        <svg version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 40" width="18" height="18">
                                                            <g transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)">
                                                                <path d="M12.619,8.412c-0.001-0.41-0.333-0.742-0.743-0.742H5.938c-0.41,0.015-0.73,0.36-0.715,0.77 c0.014,0.389,0.326,0.701,0.715,0.715h5.938C12.286,9.155,12.619,8.822,12.619,8.412L12.619,8.412z M9.586,19 c-0.02-0.115-0.119-0.199-0.236-0.2H3.464c-0.276,0-0.5-0.224-0.5-0.5V5.443c0.003-0.274,0.226-0.495,0.5-0.495h10.887 c0.272,0.003,0.491,0.223,0.494,0.495v4.039c-0.002,0.135,0.106,0.245,0.241,0.247c0.018,0,0.037-0.002,0.054-0.005 c0.807-0.152,1.623-0.249,2.443-0.29c0.131-0.007,0.232-0.116,0.231-0.247V3.464c0.001-0.82-0.663-1.484-1.483-1.485 c0,0-0.001,0-0.001,0h-3.957c-0.085,0-0.163-0.046-0.205-0.119C11.103,0.059,8.78-0.537,6.979,0.528 C6.43,0.853,5.972,1.311,5.647,1.86c-0.042,0.073-0.12,0.118-0.205,0.119H1.485C0.665,1.979,0,2.644,0,3.464c0,0,0,0,0,0v16.825 c0.001,0.82,0.665,1.484,1.485,1.484h8.847c0.135,0,0.244-0.109,0.244-0.244c0-0.046-0.013-0.092-0.038-0.131 C10.091,20.657,9.769,19.846,9.586,19z M11.035,12.523c0.286-0.376,0.604-0.726,0.951-1.046c0.085-0.079,0.028-0.343-0.11-0.343 H5.938c-0.41,0.015-0.73,0.36-0.715,0.77c0.014,0.389,0.326,0.701,0.715,0.715h4.907C10.92,12.619,10.99,12.583,11.035,12.523z M5.938,14.6c-0.41,0-0.742,0.331-0.743,0.741c0,0.41,0.331,0.742,0.741,0.743c0,0,0.001,0,0.001,0h3.37 c0.117,0,0.216-0.085,0.235-0.2c0.061-0.337,0.145-0.669,0.251-0.995c0.032-0.1,0.055-0.29-0.129-0.29L5.938,14.6z M17.32,10.639 c-3.69-0.001-6.681,2.99-6.682,6.68s2.99,6.681,6.68,6.682c3.69,0.001,6.681-2.99,6.682-6.68c0,0,0-0.001,0-0.001 C23.996,13.632,21.008,10.643,17.32,10.639z M17.32,22.021c-2.596,0-4.7-2.104-4.7-4.7s2.104-4.7,4.7-4.7s4.7,2.104,4.7,4.7 C22.017,19.915,19.914,22.018,17.32,22.021z M19.3,16.33h-0.742c-0.137,0-0.248-0.111-0.248-0.248v-1.237 c-0.017-0.546-0.474-0.975-1.021-0.958c-0.522,0.017-0.941,0.436-0.958,0.958v2.475c0,0.546,0.443,0.989,0.989,0.989 c0,0,0.001,0,0.001,0H19.3c0.546,0.017,1.004-0.412,1.021-0.958s-0.412-1.004-0.958-1.021C19.342,16.329,19.321,16.329,19.3,16.33z" stroke="none" fill="currentColor" stroke-width="0" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </g>
                                                        </svg>
                                                        <span class="ml-1">25 Lessons </span>
                                                    </small>
                                                    <small class="d-flex align-items-center">
                                                        <svg version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 40" width="18" height="18">
                                                            <g transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)">
                                                                <path d="M19.159,8.257l1.548-1.549c0.397-0.384,0.408-1.017,0.025-1.414c-0.384-0.397-1.017-0.408-1.414-0.025 c-0.008,0.008-0.017,0.016-0.025,0.025l-1.6,1.6C16.324,5.867,14.702,5.231,13,5.054V2h2c0.552,0,1-0.448,1-1s-0.448-1-1-1H9 C8.448,0,8,0.448,8,1s0.448,1,1,1h2v3.054c-5.217,0.553-8.998,5.231-8.445,10.449s5.231,8.998,10.449,8.445 c5.217-0.553,8.998-5.231,8.445-10.449c-0.206-1.942-1.006-3.774-2.29-5.245V8.257z M12,22.5c-4.418,0-8-3.582-8-8s3.582-8,8-8 s8,3.582,8,8S16.418,22.5,12,22.5z M12,8c-3.59,0-6.5,2.91-6.5,6.5S8.41,21,12,21s6.5-2.91,6.5-6.5S15.59,8,12,8z M12.53,14.822 c-0.295,0.288-0.765,0.288-1.06,0l-2.042-2.04c-0.293-0.293-0.293-0.768,0-1.061s0.768-0.293,1.061,0l0,0l2.041,2.042 C12.802,14.052,12.785,14.518,12.53,14.822L12.53,14.822z" stroke="none" fill="currentColor" stroke-width="0" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </g>
                                                        </svg>
                                                        <span class="ml-1">
                                                            4 hours
                                                        </span>
                                                    </small>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="p-3 text-center">

                                            <strong class="h4 m-0 text-primary">$49</strong>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-4">
                                    <div class="card card__course card__course__animate">
                                        <a href="course-details.php" class="card-img-top">
                                            <img src="assets/images/course_lms.jpg" style="width:100%;" alt="Card image cap">
                                            <span class="play-button">
                                                <svg version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50" width="60" height="60">
                                                    <g transform="matrix(2.0833333333333335,0,0,2.0833333333333335,0,0)">
                                                        <path d="M12,0C5.373,0,0,5.373,0,12s5.373,12,12,12s12-5.373,12-12C23.993,5.376,18.624,0.007,12,0z M16.828,12.894l-7.381,3.69 l0,0c-0.494,0.247-1.095,0.047-1.342-0.448C8.036,15.998,8,15.845,8,15.69V8.308c0-0.552,0.448-1,1-1 c0.155,0,0.307,0.036,0.446,0.105l7.383,3.687c0.495,0.245,0.698,0.845,0.453,1.34c-0.097,0.197-0.257,0.356-0.454,0.453V12.894z" stroke="none" fill="currentColor" stroke-width="0" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                        </a>

                                        <div class="p-3 text-center border-bottom">
                                            <div class="bold mb-2">
                                                <a href="course-details.php" class="text-body">
                                                    <span class="course__title">React</span>-<span class="course__subtitle">Typescript and Beyond</span>
                                                </a>
                                            </div>
                                            <div class="d-flex justify-content-around">


                                                <div class="mb-2 text-muted d-flex align-items-center align-self-center">
                                                    <small class="mr-3 d-flex align-items-center">
                                                        <svg version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 40" width="18" height="18">
                                                            <g transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)">
                                                                <path d="M12.619,8.412c-0.001-0.41-0.333-0.742-0.743-0.742H5.938c-0.41,0.015-0.73,0.36-0.715,0.77 c0.014,0.389,0.326,0.701,0.715,0.715h5.938C12.286,9.155,12.619,8.822,12.619,8.412L12.619,8.412z M9.586,19 c-0.02-0.115-0.119-0.199-0.236-0.2H3.464c-0.276,0-0.5-0.224-0.5-0.5V5.443c0.003-0.274,0.226-0.495,0.5-0.495h10.887 c0.272,0.003,0.491,0.223,0.494,0.495v4.039c-0.002,0.135,0.106,0.245,0.241,0.247c0.018,0,0.037-0.002,0.054-0.005 c0.807-0.152,1.623-0.249,2.443-0.29c0.131-0.007,0.232-0.116,0.231-0.247V3.464c0.001-0.82-0.663-1.484-1.483-1.485 c0,0-0.001,0-0.001,0h-3.957c-0.085,0-0.163-0.046-0.205-0.119C11.103,0.059,8.78-0.537,6.979,0.528 C6.43,0.853,5.972,1.311,5.647,1.86c-0.042,0.073-0.12,0.118-0.205,0.119H1.485C0.665,1.979,0,2.644,0,3.464c0,0,0,0,0,0v16.825 c0.001,0.82,0.665,1.484,1.485,1.484h8.847c0.135,0,0.244-0.109,0.244-0.244c0-0.046-0.013-0.092-0.038-0.131 C10.091,20.657,9.769,19.846,9.586,19z M11.035,12.523c0.286-0.376,0.604-0.726,0.951-1.046c0.085-0.079,0.028-0.343-0.11-0.343 H5.938c-0.41,0.015-0.73,0.36-0.715,0.77c0.014,0.389,0.326,0.701,0.715,0.715h4.907C10.92,12.619,10.99,12.583,11.035,12.523z M5.938,14.6c-0.41,0-0.742,0.331-0.743,0.741c0,0.41,0.331,0.742,0.741,0.743c0,0,0.001,0,0.001,0h3.37 c0.117,0,0.216-0.085,0.235-0.2c0.061-0.337,0.145-0.669,0.251-0.995c0.032-0.1,0.055-0.29-0.129-0.29L5.938,14.6z M17.32,10.639 c-3.69-0.001-6.681,2.99-6.682,6.68s2.99,6.681,6.68,6.682c3.69,0.001,6.681-2.99,6.682-6.68c0,0,0-0.001,0-0.001 C23.996,13.632,21.008,10.643,17.32,10.639z M17.32,22.021c-2.596,0-4.7-2.104-4.7-4.7s2.104-4.7,4.7-4.7s4.7,2.104,4.7,4.7 C22.017,19.915,19.914,22.018,17.32,22.021z M19.3,16.33h-0.742c-0.137,0-0.248-0.111-0.248-0.248v-1.237 c-0.017-0.546-0.474-0.975-1.021-0.958c-0.522,0.017-0.941,0.436-0.958,0.958v2.475c0,0.546,0.443,0.989,0.989,0.989 c0,0,0.001,0,0.001,0H19.3c0.546,0.017,1.004-0.412,1.021-0.958s-0.412-1.004-0.958-1.021C19.342,16.329,19.321,16.329,19.3,16.33z" stroke="none" fill="currentColor" stroke-width="0" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </g>
                                                        </svg>
                                                        <span class="ml-1">25 Lessons </span>
                                                    </small>
                                                    <small class="d-flex align-items-center">
                                                        <svg version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 40" width="18" height="18">
                                                            <g transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)">
                                                                <path d="M19.159,8.257l1.548-1.549c0.397-0.384,0.408-1.017,0.025-1.414c-0.384-0.397-1.017-0.408-1.414-0.025 c-0.008,0.008-0.017,0.016-0.025,0.025l-1.6,1.6C16.324,5.867,14.702,5.231,13,5.054V2h2c0.552,0,1-0.448,1-1s-0.448-1-1-1H9 C8.448,0,8,0.448,8,1s0.448,1,1,1h2v3.054c-5.217,0.553-8.998,5.231-8.445,10.449s5.231,8.998,10.449,8.445 c5.217-0.553,8.998-5.231,8.445-10.449c-0.206-1.942-1.006-3.774-2.29-5.245V8.257z M12,22.5c-4.418,0-8-3.582-8-8s3.582-8,8-8 s8,3.582,8,8S16.418,22.5,12,22.5z M12,8c-3.59,0-6.5,2.91-6.5,6.5S8.41,21,12,21s6.5-2.91,6.5-6.5S15.59,8,12,8z M12.53,14.822 c-0.295,0.288-0.765,0.288-1.06,0l-2.042-2.04c-0.293-0.293-0.293-0.768,0-1.061s0.768-0.293,1.061,0l0,0l2.041,2.042 C12.802,14.052,12.785,14.518,12.53,14.822L12.53,14.822z" stroke="none" fill="currentColor" stroke-width="0" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </g>
                                                        </svg>
                                                        <span class="ml-1">
                                                            4 hours
                                                        </span>
                                                    </small>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="p-3 text-center">

                                            <strong class="h4 m-0 text-primary">$49</strong>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-4">
                                    <div class="card card__course card__course__animate">
                                        <a href="course-details.php" class="card-img-top">
                                            <img src="assets/images/course_lms.jpg" style="width:100%;" alt="Card image cap">
                                            <span class="play-button">
                                                <svg version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50" width="60" height="60">
                                                    <g transform="matrix(2.0833333333333335,0,0,2.0833333333333335,0,0)">
                                                        <path d="M12,0C5.373,0,0,5.373,0,12s5.373,12,12,12s12-5.373,12-12C23.993,5.376,18.624,0.007,12,0z M16.828,12.894l-7.381,3.69 l0,0c-0.494,0.247-1.095,0.047-1.342-0.448C8.036,15.998,8,15.845,8,15.69V8.308c0-0.552,0.448-1,1-1 c0.155,0,0.307,0.036,0.446,0.105l7.383,3.687c0.495,0.245,0.698,0.845,0.453,1.34c-0.097,0.197-0.257,0.356-0.454,0.453V12.894z" stroke="none" fill="currentColor" stroke-width="0" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                        </a>

                                        <div class="p-3 text-center border-bottom">
                                            <div class="bold mb-2">
                                                <a href="course-details.php" class="text-body">
                                                    <span class="course__title">React</span>-<span class="course__subtitle">react PRO</span>
                                                </a>
                                            </div>
                                            <div class="d-flex justify-content-around">


                                                <div class="mb-2 text-muted d-flex align-items-center align-self-center">
                                                    <small class="mr-3 d-flex align-items-center">
                                                        <svg version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 40" width="18" height="18">
                                                            <g transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)">
                                                                <path d="M12.619,8.412c-0.001-0.41-0.333-0.742-0.743-0.742H5.938c-0.41,0.015-0.73,0.36-0.715,0.77 c0.014,0.389,0.326,0.701,0.715,0.715h5.938C12.286,9.155,12.619,8.822,12.619,8.412L12.619,8.412z M9.586,19 c-0.02-0.115-0.119-0.199-0.236-0.2H3.464c-0.276,0-0.5-0.224-0.5-0.5V5.443c0.003-0.274,0.226-0.495,0.5-0.495h10.887 c0.272,0.003,0.491,0.223,0.494,0.495v4.039c-0.002,0.135,0.106,0.245,0.241,0.247c0.018,0,0.037-0.002,0.054-0.005 c0.807-0.152,1.623-0.249,2.443-0.29c0.131-0.007,0.232-0.116,0.231-0.247V3.464c0.001-0.82-0.663-1.484-1.483-1.485 c0,0-0.001,0-0.001,0h-3.957c-0.085,0-0.163-0.046-0.205-0.119C11.103,0.059,8.78-0.537,6.979,0.528 C6.43,0.853,5.972,1.311,5.647,1.86c-0.042,0.073-0.12,0.118-0.205,0.119H1.485C0.665,1.979,0,2.644,0,3.464c0,0,0,0,0,0v16.825 c0.001,0.82,0.665,1.484,1.485,1.484h8.847c0.135,0,0.244-0.109,0.244-0.244c0-0.046-0.013-0.092-0.038-0.131 C10.091,20.657,9.769,19.846,9.586,19z M11.035,12.523c0.286-0.376,0.604-0.726,0.951-1.046c0.085-0.079,0.028-0.343-0.11-0.343 H5.938c-0.41,0.015-0.73,0.36-0.715,0.77c0.014,0.389,0.326,0.701,0.715,0.715h4.907C10.92,12.619,10.99,12.583,11.035,12.523z M5.938,14.6c-0.41,0-0.742,0.331-0.743,0.741c0,0.41,0.331,0.742,0.741,0.743c0,0,0.001,0,0.001,0h3.37 c0.117,0,0.216-0.085,0.235-0.2c0.061-0.337,0.145-0.669,0.251-0.995c0.032-0.1,0.055-0.29-0.129-0.29L5.938,14.6z M17.32,10.639 c-3.69-0.001-6.681,2.99-6.682,6.68s2.99,6.681,6.68,6.682c3.69,0.001,6.681-2.99,6.682-6.68c0,0,0-0.001,0-0.001 C23.996,13.632,21.008,10.643,17.32,10.639z M17.32,22.021c-2.596,0-4.7-2.104-4.7-4.7s2.104-4.7,4.7-4.7s4.7,2.104,4.7,4.7 C22.017,19.915,19.914,22.018,17.32,22.021z M19.3,16.33h-0.742c-0.137,0-0.248-0.111-0.248-0.248v-1.237 c-0.017-0.546-0.474-0.975-1.021-0.958c-0.522,0.017-0.941,0.436-0.958,0.958v2.475c0,0.546,0.443,0.989,0.989,0.989 c0,0,0.001,0,0.001,0H19.3c0.546,0.017,1.004-0.412,1.021-0.958s-0.412-1.004-0.958-1.021C19.342,16.329,19.321,16.329,19.3,16.33z" stroke="none" fill="currentColor" stroke-width="0" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </g>
                                                        </svg>
                                                        <span class="ml-1">25 Lessons </span>
                                                    </small>
                                                    <small class="d-flex align-items-center">
                                                        <svg version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 40" width="18" height="18">
                                                            <g transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)">
                                                                <path d="M19.159,8.257l1.548-1.549c0.397-0.384,0.408-1.017,0.025-1.414c-0.384-0.397-1.017-0.408-1.414-0.025 c-0.008,0.008-0.017,0.016-0.025,0.025l-1.6,1.6C16.324,5.867,14.702,5.231,13,5.054V2h2c0.552,0,1-0.448,1-1s-0.448-1-1-1H9 C8.448,0,8,0.448,8,1s0.448,1,1,1h2v3.054c-5.217,0.553-8.998,5.231-8.445,10.449s5.231,8.998,10.449,8.445 c5.217-0.553,8.998-5.231,8.445-10.449c-0.206-1.942-1.006-3.774-2.29-5.245V8.257z M12,22.5c-4.418,0-8-3.582-8-8s3.582-8,8-8 s8,3.582,8,8S16.418,22.5,12,22.5z M12,8c-3.59,0-6.5,2.91-6.5,6.5S8.41,21,12,21s6.5-2.91,6.5-6.5S15.59,8,12,8z M12.53,14.822 c-0.295,0.288-0.765,0.288-1.06,0l-2.042-2.04c-0.293-0.293-0.293-0.768,0-1.061s0.768-0.293,1.061,0l0,0l2.041,2.042 C12.802,14.052,12.785,14.518,12.53,14.822L12.53,14.822z" stroke="none" fill="currentColor" stroke-width="0" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </g>
                                                        </svg>
                                                        <span class="ml-1">
                                                            4 hours
                                                        </span>
                                                    </small>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="p-3 text-center">

                                            <strong class="h4 m-0 text-primary">$49</strong>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-4">
                                    <div class="card card__course card__course__animate">
                                        <a href="course-details.php" class="card-img-top">
                                            <img src="assets/images/course_lms.jpg" style="width:100%;" alt="Card image cap">
                                            <span class="play-button">
                                                <svg version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50" width="60" height="60">
                                                    <g transform="matrix(2.0833333333333335,0,0,2.0833333333333335,0,0)">
                                                        <path d="M12,0C5.373,0,0,5.373,0,12s5.373,12,12,12s12-5.373,12-12C23.993,5.376,18.624,0.007,12,0z M16.828,12.894l-7.381,3.69 l0,0c-0.494,0.247-1.095,0.047-1.342-0.448C8.036,15.998,8,15.845,8,15.69V8.308c0-0.552,0.448-1,1-1 c0.155,0,0.307,0.036,0.446,0.105l7.383,3.687c0.495,0.245,0.698,0.845,0.453,1.34c-0.097,0.197-0.257,0.356-0.454,0.453V12.894z" stroke="none" fill="currentColor" stroke-width="0" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                        </a>

                                        <div class="p-3 text-center border-bottom">
                                            <div class="bold mb-2">
                                                <a href="course-details.php" class="text-body">
                                                    <span class="course__title">React</span>-<span class="course__subtitle">Advanced Skills</span>
                                                </a>
                                            </div>
                                            <div class="d-flex justify-content-around">


                                                <div class="mb-2 text-muted d-flex align-items-center align-self-center">
                                                    <small class="mr-3 d-flex align-items-center">
                                                        <svg version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 40" width="18" height="18">
                                                            <g transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)">
                                                                <path d="M12.619,8.412c-0.001-0.41-0.333-0.742-0.743-0.742H5.938c-0.41,0.015-0.73,0.36-0.715,0.77 c0.014,0.389,0.326,0.701,0.715,0.715h5.938C12.286,9.155,12.619,8.822,12.619,8.412L12.619,8.412z M9.586,19 c-0.02-0.115-0.119-0.199-0.236-0.2H3.464c-0.276,0-0.5-0.224-0.5-0.5V5.443c0.003-0.274,0.226-0.495,0.5-0.495h10.887 c0.272,0.003,0.491,0.223,0.494,0.495v4.039c-0.002,0.135,0.106,0.245,0.241,0.247c0.018,0,0.037-0.002,0.054-0.005 c0.807-0.152,1.623-0.249,2.443-0.29c0.131-0.007,0.232-0.116,0.231-0.247V3.464c0.001-0.82-0.663-1.484-1.483-1.485 c0,0-0.001,0-0.001,0h-3.957c-0.085,0-0.163-0.046-0.205-0.119C11.103,0.059,8.78-0.537,6.979,0.528 C6.43,0.853,5.972,1.311,5.647,1.86c-0.042,0.073-0.12,0.118-0.205,0.119H1.485C0.665,1.979,0,2.644,0,3.464c0,0,0,0,0,0v16.825 c0.001,0.82,0.665,1.484,1.485,1.484h8.847c0.135,0,0.244-0.109,0.244-0.244c0-0.046-0.013-0.092-0.038-0.131 C10.091,20.657,9.769,19.846,9.586,19z M11.035,12.523c0.286-0.376,0.604-0.726,0.951-1.046c0.085-0.079,0.028-0.343-0.11-0.343 H5.938c-0.41,0.015-0.73,0.36-0.715,0.77c0.014,0.389,0.326,0.701,0.715,0.715h4.907C10.92,12.619,10.99,12.583,11.035,12.523z M5.938,14.6c-0.41,0-0.742,0.331-0.743,0.741c0,0.41,0.331,0.742,0.741,0.743c0,0,0.001,0,0.001,0h3.37 c0.117,0,0.216-0.085,0.235-0.2c0.061-0.337,0.145-0.669,0.251-0.995c0.032-0.1,0.055-0.29-0.129-0.29L5.938,14.6z M17.32,10.639 c-3.69-0.001-6.681,2.99-6.682,6.68s2.99,6.681,6.68,6.682c3.69,0.001,6.681-2.99,6.682-6.68c0,0,0-0.001,0-0.001 C23.996,13.632,21.008,10.643,17.32,10.639z M17.32,22.021c-2.596,0-4.7-2.104-4.7-4.7s2.104-4.7,4.7-4.7s4.7,2.104,4.7,4.7 C22.017,19.915,19.914,22.018,17.32,22.021z M19.3,16.33h-0.742c-0.137,0-0.248-0.111-0.248-0.248v-1.237 c-0.017-0.546-0.474-0.975-1.021-0.958c-0.522,0.017-0.941,0.436-0.958,0.958v2.475c0,0.546,0.443,0.989,0.989,0.989 c0,0,0.001,0,0.001,0H19.3c0.546,0.017,1.004-0.412,1.021-0.958s-0.412-1.004-0.958-1.021C19.342,16.329,19.321,16.329,19.3,16.33z" stroke="none" fill="currentColor" stroke-width="0" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </g>
                                                        </svg>
                                                        <span class="ml-1">25 Lessons </span>
                                                    </small>
                                                    <small class="d-flex align-items-center">
                                                        <svg version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 40" width="18" height="18">
                                                            <g transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)">
                                                                <path d="M19.159,8.257l1.548-1.549c0.397-0.384,0.408-1.017,0.025-1.414c-0.384-0.397-1.017-0.408-1.414-0.025 c-0.008,0.008-0.017,0.016-0.025,0.025l-1.6,1.6C16.324,5.867,14.702,5.231,13,5.054V2h2c0.552,0,1-0.448,1-1s-0.448-1-1-1H9 C8.448,0,8,0.448,8,1s0.448,1,1,1h2v3.054c-5.217,0.553-8.998,5.231-8.445,10.449s5.231,8.998,10.449,8.445 c5.217-0.553,8.998-5.231,8.445-10.449c-0.206-1.942-1.006-3.774-2.29-5.245V8.257z M12,22.5c-4.418,0-8-3.582-8-8s3.582-8,8-8 s8,3.582,8,8S16.418,22.5,12,22.5z M12,8c-3.59,0-6.5,2.91-6.5,6.5S8.41,21,12,21s6.5-2.91,6.5-6.5S15.59,8,12,8z M12.53,14.822 c-0.295,0.288-0.765,0.288-1.06,0l-2.042-2.04c-0.293-0.293-0.293-0.768,0-1.061s0.768-0.293,1.061,0l0,0l2.041,2.042 C12.802,14.052,12.785,14.518,12.53,14.822L12.53,14.822z" stroke="none" fill="currentColor" stroke-width="0" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </g>
                                                        </svg>
                                                        <span class="ml-1">
                                                            4 hours
                                                        </span>
                                                    </small>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="p-3 text-center">

                                            <strong class="h4 m-0 text-primary">$49</strong>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-4">
                                    <div class="card card__course card__course__animate">
                                        <a href="course-details.php" class="card-img-top">
                                            <img src="assets/images/course_lms.jpg" style="width:100%;" alt="Card image cap">
                                            <span class="play-button">
                                                <svg version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50" width="60" height="60">
                                                    <g transform="matrix(2.0833333333333335,0,0,2.0833333333333335,0,0)">
                                                        <path d="M12,0C5.373,0,0,5.373,0,12s5.373,12,12,12s12-5.373,12-12C23.993,5.376,18.624,0.007,12,0z M16.828,12.894l-7.381,3.69 l0,0c-0.494,0.247-1.095,0.047-1.342-0.448C8.036,15.998,8,15.845,8,15.69V8.308c0-0.552,0.448-1,1-1 c0.155,0,0.307,0.036,0.446,0.105l7.383,3.687c0.495,0.245,0.698,0.845,0.453,1.34c-0.097,0.197-0.257,0.356-0.454,0.453V12.894z" stroke="none" fill="currentColor" stroke-width="0" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                        </a>

                                        <div class="p-3 text-center border-bottom">
                                            <div class="bold mb-2">
                                                <a href="course-details.php" class="text-body">
                                                    <span class="course__title">React</span>-<span class="course__subtitle">Advanced Skills</span>
                                                </a>
                                            </div>
                                            <div class="d-flex justify-content-around">


                                                <div class="mb-2 text-muted d-flex align-items-center align-self-center">
                                                    <small class="mr-3 d-flex align-items-center">
                                                        <svg version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 40" width="18" height="18">
                                                            <g transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)">
                                                                <path d="M12.619,8.412c-0.001-0.41-0.333-0.742-0.743-0.742H5.938c-0.41,0.015-0.73,0.36-0.715,0.77 c0.014,0.389,0.326,0.701,0.715,0.715h5.938C12.286,9.155,12.619,8.822,12.619,8.412L12.619,8.412z M9.586,19 c-0.02-0.115-0.119-0.199-0.236-0.2H3.464c-0.276,0-0.5-0.224-0.5-0.5V5.443c0.003-0.274,0.226-0.495,0.5-0.495h10.887 c0.272,0.003,0.491,0.223,0.494,0.495v4.039c-0.002,0.135,0.106,0.245,0.241,0.247c0.018,0,0.037-0.002,0.054-0.005 c0.807-0.152,1.623-0.249,2.443-0.29c0.131-0.007,0.232-0.116,0.231-0.247V3.464c0.001-0.82-0.663-1.484-1.483-1.485 c0,0-0.001,0-0.001,0h-3.957c-0.085,0-0.163-0.046-0.205-0.119C11.103,0.059,8.78-0.537,6.979,0.528 C6.43,0.853,5.972,1.311,5.647,1.86c-0.042,0.073-0.12,0.118-0.205,0.119H1.485C0.665,1.979,0,2.644,0,3.464c0,0,0,0,0,0v16.825 c0.001,0.82,0.665,1.484,1.485,1.484h8.847c0.135,0,0.244-0.109,0.244-0.244c0-0.046-0.013-0.092-0.038-0.131 C10.091,20.657,9.769,19.846,9.586,19z M11.035,12.523c0.286-0.376,0.604-0.726,0.951-1.046c0.085-0.079,0.028-0.343-0.11-0.343 H5.938c-0.41,0.015-0.73,0.36-0.715,0.77c0.014,0.389,0.326,0.701,0.715,0.715h4.907C10.92,12.619,10.99,12.583,11.035,12.523z M5.938,14.6c-0.41,0-0.742,0.331-0.743,0.741c0,0.41,0.331,0.742,0.741,0.743c0,0,0.001,0,0.001,0h3.37 c0.117,0,0.216-0.085,0.235-0.2c0.061-0.337,0.145-0.669,0.251-0.995c0.032-0.1,0.055-0.29-0.129-0.29L5.938,14.6z M17.32,10.639 c-3.69-0.001-6.681,2.99-6.682,6.68s2.99,6.681,6.68,6.682c3.69,0.001,6.681-2.99,6.682-6.68c0,0,0-0.001,0-0.001 C23.996,13.632,21.008,10.643,17.32,10.639z M17.32,22.021c-2.596,0-4.7-2.104-4.7-4.7s2.104-4.7,4.7-4.7s4.7,2.104,4.7,4.7 C22.017,19.915,19.914,22.018,17.32,22.021z M19.3,16.33h-0.742c-0.137,0-0.248-0.111-0.248-0.248v-1.237 c-0.017-0.546-0.474-0.975-1.021-0.958c-0.522,0.017-0.941,0.436-0.958,0.958v2.475c0,0.546,0.443,0.989,0.989,0.989 c0,0,0.001,0,0.001,0H19.3c0.546,0.017,1.004-0.412,1.021-0.958s-0.412-1.004-0.958-1.021C19.342,16.329,19.321,16.329,19.3,16.33z" stroke="none" fill="currentColor" stroke-width="0" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </g>
                                                        </svg>
                                                        <span class="ml-1">25 Lessons </span>
                                                    </small>
                                                    <small class="d-flex align-items-center">
                                                        <svg version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 40" width="18" height="18">
                                                            <g transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)">
                                                                <path d="M19.159,8.257l1.548-1.549c0.397-0.384,0.408-1.017,0.025-1.414c-0.384-0.397-1.017-0.408-1.414-0.025 c-0.008,0.008-0.017,0.016-0.025,0.025l-1.6,1.6C16.324,5.867,14.702,5.231,13,5.054V2h2c0.552,0,1-0.448,1-1s-0.448-1-1-1H9 C8.448,0,8,0.448,8,1s0.448,1,1,1h2v3.054c-5.217,0.553-8.998,5.231-8.445,10.449s5.231,8.998,10.449,8.445 c5.217-0.553,8.998-5.231,8.445-10.449c-0.206-1.942-1.006-3.774-2.29-5.245V8.257z M12,22.5c-4.418,0-8-3.582-8-8s3.582-8,8-8 s8,3.582,8,8S16.418,22.5,12,22.5z M12,8c-3.59,0-6.5,2.91-6.5,6.5S8.41,21,12,21s6.5-2.91,6.5-6.5S15.59,8,12,8z M12.53,14.822 c-0.295,0.288-0.765,0.288-1.06,0l-2.042-2.04c-0.293-0.293-0.293-0.768,0-1.061s0.768-0.293,1.061,0l0,0l2.041,2.042 C12.802,14.052,12.785,14.518,12.53,14.822L12.53,14.822z" stroke="none" fill="currentColor" stroke-width="0" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </g>
                                                        </svg>
                                                        <span class="ml-1">
                                                            4 hours
                                                        </span>
                                                    </small>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="p-3 text-center">

                                            <strong class="h4 m-0 text-primary">$49</strong>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-4">
                                    <div class="card card__course card__course__animate">
                                        <a href="course-details.php" class="card-img-top">
                                            <img src="assets/images/course_lms.jpg" style="width:100%;" alt="Card image cap">
                                            <span class="play-button">
                                                <svg version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50" width="60" height="60">
                                                    <g transform="matrix(2.0833333333333335,0,0,2.0833333333333335,0,0)">
                                                        <path d="M12,0C5.373,0,0,5.373,0,12s5.373,12,12,12s12-5.373,12-12C23.993,5.376,18.624,0.007,12,0z M16.828,12.894l-7.381,3.69 l0,0c-0.494,0.247-1.095,0.047-1.342-0.448C8.036,15.998,8,15.845,8,15.69V8.308c0-0.552,0.448-1,1-1 c0.155,0,0.307,0.036,0.446,0.105l7.383,3.687c0.495,0.245,0.698,0.845,0.453,1.34c-0.097,0.197-0.257,0.356-0.454,0.453V12.894z" stroke="none" fill="currentColor" stroke-width="0" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                        </a>

                                        <div class="p-3 text-center border-bottom">
                                            <div class="bold mb-2">
                                                <a href="course-details.php" class="text-body">
                                                    <span class="course__title">React</span>-<span class="course__subtitle">Advanced Skills</span>
                                                </a>
                                            </div>
                                            <div class="d-flex justify-content-around">


                                                <div class="mb-2 text-muted d-flex align-items-center align-self-center">
                                                    <small class="mr-3 d-flex align-items-center">
                                                        <svg version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 40" width="18" height="18">
                                                            <g transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)">
                                                                <path d="M12.619,8.412c-0.001-0.41-0.333-0.742-0.743-0.742H5.938c-0.41,0.015-0.73,0.36-0.715,0.77 c0.014,0.389,0.326,0.701,0.715,0.715h5.938C12.286,9.155,12.619,8.822,12.619,8.412L12.619,8.412z M9.586,19 c-0.02-0.115-0.119-0.199-0.236-0.2H3.464c-0.276,0-0.5-0.224-0.5-0.5V5.443c0.003-0.274,0.226-0.495,0.5-0.495h10.887 c0.272,0.003,0.491,0.223,0.494,0.495v4.039c-0.002,0.135,0.106,0.245,0.241,0.247c0.018,0,0.037-0.002,0.054-0.005 c0.807-0.152,1.623-0.249,2.443-0.29c0.131-0.007,0.232-0.116,0.231-0.247V3.464c0.001-0.82-0.663-1.484-1.483-1.485 c0,0-0.001,0-0.001,0h-3.957c-0.085,0-0.163-0.046-0.205-0.119C11.103,0.059,8.78-0.537,6.979,0.528 C6.43,0.853,5.972,1.311,5.647,1.86c-0.042,0.073-0.12,0.118-0.205,0.119H1.485C0.665,1.979,0,2.644,0,3.464c0,0,0,0,0,0v16.825 c0.001,0.82,0.665,1.484,1.485,1.484h8.847c0.135,0,0.244-0.109,0.244-0.244c0-0.046-0.013-0.092-0.038-0.131 C10.091,20.657,9.769,19.846,9.586,19z M11.035,12.523c0.286-0.376,0.604-0.726,0.951-1.046c0.085-0.079,0.028-0.343-0.11-0.343 H5.938c-0.41,0.015-0.73,0.36-0.715,0.77c0.014,0.389,0.326,0.701,0.715,0.715h4.907C10.92,12.619,10.99,12.583,11.035,12.523z M5.938,14.6c-0.41,0-0.742,0.331-0.743,0.741c0,0.41,0.331,0.742,0.741,0.743c0,0,0.001,0,0.001,0h3.37 c0.117,0,0.216-0.085,0.235-0.2c0.061-0.337,0.145-0.669,0.251-0.995c0.032-0.1,0.055-0.29-0.129-0.29L5.938,14.6z M17.32,10.639 c-3.69-0.001-6.681,2.99-6.682,6.68s2.99,6.681,6.68,6.682c3.69,0.001,6.681-2.99,6.682-6.68c0,0,0-0.001,0-0.001 C23.996,13.632,21.008,10.643,17.32,10.639z M17.32,22.021c-2.596,0-4.7-2.104-4.7-4.7s2.104-4.7,4.7-4.7s4.7,2.104,4.7,4.7 C22.017,19.915,19.914,22.018,17.32,22.021z M19.3,16.33h-0.742c-0.137,0-0.248-0.111-0.248-0.248v-1.237 c-0.017-0.546-0.474-0.975-1.021-0.958c-0.522,0.017-0.941,0.436-0.958,0.958v2.475c0,0.546,0.443,0.989,0.989,0.989 c0,0,0.001,0,0.001,0H19.3c0.546,0.017,1.004-0.412,1.021-0.958s-0.412-1.004-0.958-1.021C19.342,16.329,19.321,16.329,19.3,16.33z" stroke="none" fill="currentColor" stroke-width="0" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </g>
                                                        </svg>
                                                        <span class="ml-1">25 Lessons </span>
                                                    </small>
                                                    <small class="d-flex align-items-center">
                                                        <svg version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 40" width="18" height="18">
                                                            <g transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)">
                                                                <path d="M19.159,8.257l1.548-1.549c0.397-0.384,0.408-1.017,0.025-1.414c-0.384-0.397-1.017-0.408-1.414-0.025 c-0.008,0.008-0.017,0.016-0.025,0.025l-1.6,1.6C16.324,5.867,14.702,5.231,13,5.054V2h2c0.552,0,1-0.448,1-1s-0.448-1-1-1H9 C8.448,0,8,0.448,8,1s0.448,1,1,1h2v3.054c-5.217,0.553-8.998,5.231-8.445,10.449s5.231,8.998,10.449,8.445 c5.217-0.553,8.998-5.231,8.445-10.449c-0.206-1.942-1.006-3.774-2.29-5.245V8.257z M12,22.5c-4.418,0-8-3.582-8-8s3.582-8,8-8 s8,3.582,8,8S16.418,22.5,12,22.5z M12,8c-3.59,0-6.5,2.91-6.5,6.5S8.41,21,12,21s6.5-2.91,6.5-6.5S15.59,8,12,8z M12.53,14.822 c-0.295,0.288-0.765,0.288-1.06,0l-2.042-2.04c-0.293-0.293-0.293-0.768,0-1.061s0.768-0.293,1.061,0l0,0l2.041,2.042 C12.802,14.052,12.785,14.518,12.53,14.822L12.53,14.822z" stroke="none" fill="currentColor" stroke-width="0" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </g>
                                                        </svg>
                                                        <span class="ml-1">
                                                            4 hours
                                                        </span>
                                                    </small>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="p-3 text-center">

                                            <strong class="h4 m-0 text-primary">$49</strong>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="bg-soft-primary card-body mb-4 p-4 text-center rounded">
                            <h4 class="text-center text-primary bold mb-3">Get all courses for $99</h4>
                            <a href="student-series.php#" class="btn btn-primary btn-lg">Purchase <i class="material-icons">shopping_cart</i></a>
                        </div>
                    </div>

                    <script src="assets/js/aos.js"></script>
                    <script>
                        AOS.init();
                    </script>
                </div>
                <!-- // END drawer-layout__content -->

                <?php require_once("main/parts/sidebar.php"); ?>
            </div>
            <!-- // END drawer-layout -->

        </div>
        <!-- // END header-layout__content -->

    </div>
    <!-- // END header-layout -->


    <footer>
        <?php require_once("main/styles/footer.php"); ?>
    </footer>




</body>

</html>