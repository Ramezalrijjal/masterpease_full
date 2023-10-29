@extends('dashmin/admincomponents/master')

@section('content')

<div class="container col-10 row-5">
            <!-- Form Start -->
            <h3>Add user</h3>

            <form action="{{route('adduser')}}" method="post" enctype="multipart/form-data" >
               @csrf
                
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email">
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password">
        </div>

        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation">
        </div>
                
                <button type="submit" class="btn btn-primary">Add</button>
              </form>
          </div>  <!-- Form End -->
            @endsection