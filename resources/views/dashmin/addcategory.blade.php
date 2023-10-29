@extends('dashmin/admincomponents/master')

@section('content')

<div class="container col-10 row-5">
            <!-- Form Start -->
            <h3>Add Category</h3>

            <form action="{{url('services/insert')}}" method="post" enctype="multipart/form-data" >
               @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">name</label>
                  <input type="text" class="form-control" name='name'id="exampleInputEmail1" aria-describedby="emailHelp">
                  
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">description</label>
                  <input type="description" name="description" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">price</label>
                  <input type="number" name="price" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">image</label>
                    <input type="file" name="image" class="form-control" id="exampleInputPassword1">
                  </div>
                
                <button type="submit" class="btn btn-primary">Add</button>
              </form>
          </div>  <!-- Form End -->
            @endsection