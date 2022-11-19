@extends('welcome')

@section('content')

<!--EDIT Form Start-->

    <section>
        <div class="container" style="margin-top:20px">
            <div class="row">
                <div class="col-md-12">
                    <h2>Edit Student List</h2>

                    <form method="post" enctype="multipart/form-data" action="{{url('updatestudent')}}">
                        @csrf
                        <input type="hidden" name="id" value="{{$data->id}}">
                        <div class="md-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter name"  value="{{$data->name}}" required="">
                        </div><br>

                        <div class="md-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter email"  value="{{$data->email}}" required="">
                        </div><br>

                        <div class="md-3">
                            <label class="form-label">Age</label>
                            <input type="text" class="form-control" name="age" placeholder="Enter Age" value="{{$data->age}}" required="">
                        </div><br>

                        <div class="md-3">
                            <label class="form-label">Contact</label>
                            <input type="text" class="form-control" name="contact" placeholder="Enter contact" value="{{$data->contact}}" required="">
                        </div><br>

                        <div style="margin-left: 40%">
                            <button  type="submit" class="btn btn-primary">Submit</button>
                            <a href="../studentlist" class="btn btn-danger">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
   </section>
<!--EDIT Form End-->

@endsection
