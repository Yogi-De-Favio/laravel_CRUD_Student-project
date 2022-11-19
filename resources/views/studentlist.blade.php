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
                        <li class="nav-item"><a class="nav-link btn btn-light active" href="{{url('/studentlist')}}">STUDENTLIST</a></li>
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

@if(Session::has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    {{Session::get('success')}}
</div>
@endif

<!--Table start-->

    <section class="bg-white p-3">
    <div class="container" style="margin-top:20px">
        <div class="row">
            <div class="col-md-12">
                <h2>Student List</h2>
                <!--Search box Start-->
                    <input class="form-control search w-50" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name" >
                <!--Search box End-->


                <div style="float:right">
                <a href="addstudent" class="btn btn-dark">ADD STUDENT</a>
                </div>

                <table id="datatables" class="table table-hover">
            <thead>
            <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>Contact</th>
            <th>Action</th>
            </tr>
            </thead>
            <tbody>
                @php
                $i=1;
                @endphp
            @foreach($data as $student)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$student->name}}</td>
                    <td>{{$student->email}}</td>
                    <td>{{$student->age}}</td>
                    <td>{{$student->contact}}</td>
                    <td><a href="{{url('editstudent/'.$student->id)}}" class="btn btn-primary">Edit</a> | <a href="{{url('delete-student/'.$student->id)}}" class="btn btn-danger">Delete</a></td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
    <div class="col-md-12">
        {!!$data->links()!!}
    </div>
        </div>
            </div>

    </section>
<!--search ajax start-->
    <script>
        function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("datatables");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[2];
            if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
            }
        }
        }
    </script>
<!--search ajax end-->

<!--Table end-->
@endsection
