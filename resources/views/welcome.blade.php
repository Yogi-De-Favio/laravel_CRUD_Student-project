<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ABC SCHOOL</title>
    <!--fontawsomicon page link-->
    <script src="https://kit.fontawesome.com/fd253c14d3.js" crossorigin="anonymous"></script>

    <!--bootstrapicons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!--cs bootstrap link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!--js bootstrap link-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</head>
<body>
<!--NAVBAR START-->

    <header class="container mt-1 fixed-top">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container">
                <h2><a class="fa-solid fa-graduation-cap text-success text-decoration-none" href="/"></a></h2>
                <h4><a class=" text-success text-decoration-none ms-3" href="/">A.B.C School</a></h4>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-3">
                        <li class="nav-item"><a class="nav-link active btn btn-light" aria-current="page" href="/">HOME</a></li>
                        <li class="nav-item"><a class="nav-link btn btn-light" href="{{url('/studentlist')}}">STUDENTLIST</a></li>
                        <li class="nav-item"><a class="nav-link btn btn-light" href="{{url('/addstudent')}}">ADD STUDENT</a></li>
                        <li class="nav-item dropdown"><a class="nav-link btn btn-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">COURSE</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item bi bi-dot" href="https://www.w3schools.com/html/default.asp">HTML</a></li>
                                <li><a class="dropdown-item bi bi-dot" href="https://www.w3schools.com/css/default.asp">CSS</a></li>
                                <li><a class="dropdown-item bi bi-dot" href="https://www.w3schools.com/js/default.asp">JAVA SCRIPT</a></li>
                                <li><a class="dropdown-item bi bi-dot" href="https://www.w3schools.com/php/">PHP</a></li>
                                <li><a class="dropdown-item bi bi-dot" href="https://www.w3schools.com/bootstrap5/index.php">BOOTSTRAP-5</a></li>
                                <li><a class="dropdown-item bi bi-dot" href="https://laravel.com/">LARAVEL</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

<!--NAVBAR END-->
<br><br><br>

{{-- <!--background image Start-->

    <section class="container">
        <div id="demo" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/bg1.jpg" class="d-block w-100 " alt="SCHOOL">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>ABC Engineering College</h5>
                        <p>Sometimes you win, sometimes you learn.</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="images/bg1.jpg" class="d-block w-100 " alt="SCHOOL">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>ABC Engineering College</h5>
                        <p>Oh, college, where Monday could feel like a Friday.</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="images/bg1.jpg" class="d-block w-100 " alt="SCHOOL">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>ABC Engineering College</h5>
                        <p>Study hard, do good, and the good life will follow.</p>
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="demo" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

<!--background image End-->
<br><br> --}}

<div class="container">
    @yield('content')
</div>

{{-- <!--Footer start-->
    <footer>
        <div class="container my-5">
            <!-- Footer -->
            <footer class="text-center text-lg-start bg-light">
                <!-- Grid container -->
                <div class="container p-4 pb-0">
                    <!-- Section: Links -->
                    <section class="">
                        <!--Grid row-->
                        <div class="row">
                            <!-- Grid column -->
                            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                                <p><i class="fa-solid fa-graduation-cap  text-decoration-none"></i> A.B.C School</p>
                                <p class = " text-success">The money saved by ending the assisted places scheme could provide an additional two teachers at every state school in my constituency.It matters a lot to parents of pupils, but it is not a state school.</p>
                            </div>
                            <!-- Grid column -->
                            <hr class="w-100 clearfix d-md-none" />
                            <!-- Grid column -->
                            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                                <h6 class="text-uppercase mb-4 font-weight-bold">ABOUT</h6>
                                <p><a class="text-success">HOME</a></p>
                                <p><a class="text-success">STUDENTLIST</a></p>
                                <p><a class="text-success">ADD-STUDENT</a></p>
                                <p><a class="text-success">APPLICATION</a></p>
                            </div>
                            <!-- Grid column -->
                            <hr class="w-100 clearfix d-md-none" />
                            <!-- Grid column -->
                            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                                <h6 class="text-uppercase mb-4 font-weight-bold">COURSE</h6>
                                <p><a class="text-success">HTML</a></p>
                                <p><a class="text-success">CSS</a></p>
                                <p><a class="text-success">JAVA SCRIPT</a></p>
                                <p><a class="text-success">PHP</a></p>
                                <p><a class="text-success">BOOTSTRAP</a></p>
                                <p><a class="text-success">LARAVEL</a></p>
                            </div>
                            <!-- Grid column -->
                            <hr class="w-100 clearfix d-md-none" />
                            <!-- Grid column -->
                            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                                <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                                <p><i class="fas fa-home mr-3 text-success"></i> New York, NY 10012, US</p>
                                <p><i class="fas fa-envelope mr-3 text-success"></i> info@gmail.com</p>
                                <p><i class="fas fa-phone mr-3 text-success"></i> + 01 234 567 88</p>
                                <p><i class="fas fa-print mr-3 text-success"></i> + 01 234 567 89</p>
                            </div>
                            <!-- Grid column -->
                        </div>
                        <!--Grid row-->
                    </section>
                    <!-- Section: Links -->
                    <hr class="my-3">
                    <!-- Section: Copyright -->
                    <section class="p-3 pt-0">
                        <div class="row d-flex align-items-center ">
                            <!-- Grid column -->
                            <div class="col-md-7 col-lg-8 text-center text-md-start">
                                <!-- Copyright -->
                                <div class="p-3">
                                    © 2022 Copyright:
                                    <a href="/">A.B.C School</a>
                                </div>
                                <!-- Copyright -->
                            </div>
                            <!-- Grid column -->
                            <!-- Grid column -->
                            <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
                                <!-- Facebook -->
                                <a class="btn btn-outline-light btn-floating m-1 text-black"
                                   class="text-success"
                                   role="button"><i class="fab fa-facebook-f"></i></a>
                                <!-- Twitter -->
                                <a class="btn btn-outline-light btn-floating m-1 text-black"
                                   class="text-success"
                                   role="button"><i class="fab fa-twitter"></i></a>

                                <!-- Google -->
                                <a class="btn btn-outline-light btn-floating m-1 text-black"
                                   class="text-success"
                                   role="button"><i class="fab fa-google"></i></a>
                                   <!-- Instagram -->
                                   <a class="btn btn-outline-light btn-floating m-1 text-black"
                                      class="text-success"
                                      role="button"><i class="fab fa-instagram"></i></a>
                                    </div>
                                    <!-- Grid column -->
                                </div>
                            </section>
                            <!-- Section: Copyright -->
                        </div>
                        <!-- Grid container -->
                    </footer>
                    <!-- Footer -->
                </div>
            </footer>
            <!-- End of .container -->
<!--Footer end-->
 --}}
</body>
</html>







