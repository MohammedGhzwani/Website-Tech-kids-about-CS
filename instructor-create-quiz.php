<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

    <title>Create Quiz</title>

    <?php $main_libs_dir = ""; ?>
    <?php $main_header_dir = "main/"; ?>
    <?php $main_sidebar_dir = ""; ?>
    <?php require_once("main/styles/header.php"); ?>

</head>

<body class="layout-default">


    <!-- Header Layout -->
    <div class="mdk-header-layout js-mdk-header-layout">


        <?php require_once("main/parts/header.php"); ?>


        <!-- Header Layout Content -->
        <div class="mdk-header-layout__content">

            <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
                <div class="mdk-drawer-layout__content page">
                    <link href="assets/css/aos.css" rel="stylesheet">



                    <div class="container-fluid page__heading-container">
                        <div class="page__heading d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-lg-between text-center text-lg-left">
                            <h1 class="m-lg-0">Basics of Angular JS :: Quiz</h1>
                            <a href="instructor-create-quiz.php" class="btn btn-success ml-lg-3">Back to Course <i class="material-icons">arrow_forward</i></a>
                        </div>
                    </div>





                    <div class="container-fluid page__container">


                        <div class="card">
                            <div class="card-body card-form__body">
                                <form action="instructor-create-quiz.php#">
                                    <div class="form-group mb-3">
                                        <label class="control-label h6">New Question:</label>
                                        <input type="text" name="question[title]" class="form-control">
                                    </div>
                                    <button class="btn btn-primary"><i class="material-icons">add</i> Create Question</button>
                                </form>
                            </div>
                        </div>

                        <div id="questions_wrapper">



                            <div class="card mb-4" data-position="1" data-question-id="1">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="d-flex align-items-center ">

                                        <span class="question_handle btn btn-sm btn-secondary">
                                            <i class="material-icons">menu</i>
                                        </span>
                                        <div class="h4 m-0 ml-4">Q: What is a prop in Angular?</div>
                                    </div>
                                    <div>
                                        <a href="instructor-create-quiz.php#" class="btn btn-danger btn-sm">Delete</a>
                                    </div>
                                </div>
                                <div class="card-body">

                                    <div id="answerWrapper_1" class="mb-4">
                                        <div class="row mb-1">
                                            <div class="col"><strong></strong></div>
                                            <div class="col text-right"><strong>Correct</strong></div>
                                        </div>

                                        <form action="instructor-create-quiz.php#">
                                            <ul class="list-group" id="answer_container_1">
                                                <li class="list-group-item d-flex" data-position="1" data-answer-id="1" data-question-id="1">
                                                    <span class="mr-2"><i class="material-icons text-light-gray">menu</i></span>
                                                    <div>
                                                        First Answer Title
                                                    </div>
                                                    <div class="ml-auto">
                                                        <input type="radio" name="question[correct_answer_id]" id="correct_answer_1" checked>
                                                    </div>
                                                </li>
                                                <li class="list-group-item d-flex" data-position="2" data-answer-id="2" data-question-id="1">
                                                    <span class="mr-2"><i class="material-icons text-light-gray">menu</i></span>
                                                    <div>
                                                        Second Answer
                                                    </div>
                                                    <div class="ml-auto">
                                                        <input type="radio" name="question[correct_answer_id]" id="correct_answer_2">
                                                    </div>
                                                </li>
                                                <li class="list-group-item d-flex" data-position="3" data-answer-id="3" data-question-id="1">
                                                    <span class="mr-2"><i class="material-icons text-light-gray">menu</i></span>
                                                    <div>
                                                        Third Answer
                                                    </div>
                                                    <div class="ml-auto">
                                                        <input type="radio" name="question[correct_answer_id]" id="correct_answer_3">
                                                    </div>
                                                </li>
                                            </ul>
                                        </form>
                                    </div>




                                    <div class="">
                                        <form action="instructor-create-quiz.php#">
                                            <div class="form-group mb-0">
                                                <button class="btn btn-success">New Answer</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>


                            <div class="card mb-4" data-position="1" data-question-id="1">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="d-flex align-items-center ">

                                        <span class="question_handle btn btn-sm btn-secondary">
                                            <i class="material-icons">menu</i>
                                        </span>
                                        <div class="h4 m-0 ml-4">Q: How you define something?</div>
                                    </div>
                                    <div>
                                        <a href="instructor-create-quiz.php#" class="btn btn-danger btn-sm">Delete</a>
                                    </div>
                                </div>
                                <div class="card-body">


                                    <div id="answerWrapper_2" class="mb-4">
                                        <div class="row mb-1">
                                            <div class="col"><strong></strong></div>
                                            <div class="col text-right"><strong>Correct</strong></div>
                                        </div>

                                        <form action="instructor-create-quiz.php#">
                                            <ul class="list-group" id="answer_container_2">
                                                <li class="list-group-item d-flex" data-position="1" data-answer-id="4" data-question-id="2">
                                                    <span class="mr-2"><i class="material-icons text-light-gray">menu</i></span>
                                                    <div>
                                                        First Answer Title
                                                    </div>
                                                    <div class="ml-auto">
                                                        <input type="radio" name="question[correct_answer_id]" id="correct_answer_4" checked>
                                                    </div>
                                                </li>
                                                <li class="list-group-item d-flex" data-position="2" data-answer-id="5" data-question-id="2">
                                                    <span class="mr-2"><i class="material-icons text-light-gray">menu</i></span>
                                                    <div>
                                                        Second Answer
                                                    </div>
                                                    <div class="ml-auto">
                                                        <input type="radio" name="question[correct_answer_id]" id="correct_answer_5">
                                                    </div>
                                                </li>
                                                <li class="list-group-item d-flex" data-position="3" data-answer-id="6" data-question-id="2">
                                                    <span class="mr-2"><i class="material-icons text-light-gray">menu</i></span>
                                                    <div>
                                                        Third Answer
                                                    </div>
                                                    <div class="ml-auto">
                                                        <input type="radio" name="question[correct_answer_id]" id="correct_answer_6">
                                                    </div>
                                                </li>
                                            </ul>
                                        </form>
                                    </div>



                                    <div class="">
                                        <form action="instructor-create-quiz.php#">
                                            <div class="form-group mb-0">
                                                <button class="btn btn-success">New Answer</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>


                            <div class="card mb-4" data-position="1" data-question-id="1">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="d-flex align-items-center ">

                                        <span class="question_handle btn btn-sm btn-secondary">
                                            <i class="material-icons">menu</i>
                                        </span>
                                        <div class="h4 m-0 ml-4">Q: Can you deploy to production?</div>
                                    </div>
                                    <div>
                                        <a href="instructor-create-quiz.php#" class="btn btn-danger btn-sm">Delete</a>
                                    </div>
                                </div>
                                <div class="card-body">



                                    <div id="answerWrapper_3" class="mb-4">
                                        <div class="row mb-1">
                                            <div class="col"><strong></strong></div>
                                            <div class="col text-right"><strong>Correct</strong></div>
                                        </div>

                                        <form action="instructor-create-quiz.php#">
                                            <ul class="list-group" id="answer_container_3">
                                                <li class="list-group-item d-flex" data-position="1" data-answer-id="7" data-question-id="3">
                                                    <span class="mr-2"><i class="material-icons text-light-gray">menu</i></span>
                                                    <div>
                                                        First Answer Title
                                                    </div>
                                                    <div class="ml-auto">
                                                        <input type="radio" name="question[correct_answer_id]" id="correct_answer_7" checked>
                                                    </div>
                                                </li>
                                                <li class="list-group-item d-flex" data-position="2" data-answer-id="8" data-question-id="3">
                                                    <span class="mr-2"><i class="material-icons text-light-gray">menu</i></span>
                                                    <div>
                                                        Second Answer
                                                    </div>
                                                    <div class="ml-auto">
                                                        <input type="radio" name="question[correct_answer_id]" id="correct_answer_8">
                                                    </div>
                                                </li>
                                                <li class="list-group-item d-flex" data-position="3" data-answer-id="9" data-question-id="3">
                                                    <span class="mr-2"><i class="material-icons text-light-gray">menu</i></span>
                                                    <div>
                                                        Third Answer
                                                    </div>
                                                    <div class="ml-auto">
                                                        <input type="radio" name="question[correct_answer_id]" id="correct_answer_9">
                                                    </div>
                                                </li>
                                            </ul>
                                        </form>
                                    </div>


                                    <div class="">
                                        <form action="instructor-create-quiz.php#">
                                            <div class="form-group mb-0">
                                                <button class="btn btn-success">New Answer</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>


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