@extends('welcome')

@section('content')
<!--NAVBAR START-->

    <header class="container mt-1 fixed-top">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container">
                <h2><a class="fa-solid fa-graduation-cap text-success text-decoration-none" href="/"></a></h2>
                <h4><a class=" text-success text-decoration-none ms-3" href="/">A.B.C School</a></h4>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-3">
                        <li class="nav-item"><a class="nav-link btn btn-light" aria-current="page" href="/">HOME</a></li>
                        <li class="nav-item"><a class="nav-link btn btn-light" href="{{url('/studentlist')}}">STUDENTLIST</a></li>
                        <li class="nav-item"><a class="nav-link btn btn-light active" href="{{url('/addstudent')}}">ADD STUDENT</a></li>
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

<!--ADD Form Start-->
    <section>
    <div class="container" style="margin-top:20px">
        <div class="row">
            <div class="col-md-12">
                <h2>Add Student List</h2>

                <form method="post" action="{{url('save-student')}}">
                    @csrf
                    <div class="md-3 mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter name" value="{{old('name')}}">
                        @error('name')
                        <div class="alert alert-danger fade-slow" role="alert">
                            {{$message}}
                        </div>
                        @enderror
                    </div><br>

                    <div class="md-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="{{old('email')}}">
                        <label class="mt-2 " for="" id="email_error" style="color: red; "></label>
                        @error('email')
                        <div class="alert alert-danger fade-slow" role="alert">
                            {{$message}}
                        </div>
                        @enderror

                    </div><br>

                    <div class="md-3 mb-3">
                        <label class="form-label">Age</label>
                        <input type="number" class="form-control" name="age" placeholder="Enter age" value="{{old('age')}}">
                        @error('age')
                        <div class="alert alert-danger fade-slow" role="alert">
                            {{$message}}
                        </div>
                        @enderror

                    </div><br>

                    <div class="md-3">
                        <label class="form-label">Contact</label>
                        <input type="number"  class="form-control" id="con" name="contact" placeholder="Enter contact" value="{{old('contact')}}">
                        <label class="mt-2 " for="" id="contact_error" style="color: red; "></label>
                        @error('contact')
                        <div class="alert alert-danger fade-slow" role="alert">
                            {{$message}}
                        </div>
                        @enderror

                    </div><br>

                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="studentlist" class="btn btn-danger">Back</a>
    </div>
        </div>
            </div>
    </section>
<!--ADD Form End-->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script>
    $("#con").keyup(function(){
        // var contact = document.getElementById("con").value;
        var contact = $("#con").val();
        //   alert(contact);
        $.ajax({
            url: "check_contact",
            data: {
                "contact":contact
            },
            headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},

            success: function(result){
                if(result > 0){
                    $('#contact_error').html("Contact Already Exist..!");
                }
                else{
                    $('#contact_error').html("");
                }
            }
        });
    });

</script>
<script>
    $("#email").keyup(function(){
        var email = $("#email").val();
        $.ajax({
            url: "check_email",
            data: {
                "email":email
            },
            headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},

            success: function(result){
                if(result > 0){
                    $('#email_error').html("Email Already Exists..!");
                }
                else{
                    $('#email_error').html("");
                }
            }
        });
    });
</script>

@endsection
