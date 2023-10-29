{{-- @extends('dashmin/admincomponents/master') --}}

{{-- @section('content') --}}
<div class="container col-10 row-5">
    <!-- Form Start -->
    <h3>Edit Category information</h3>

    <form method="post" action="{{ route('services.update', $service->id) }}">
      @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">name</label>
          <input type="text" class="form-control" name='name' value="{{$service->name}}" id="exampleInputEmail1" aria-describedby="emailHelp">
          
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">description</label>
          <input type="description" name="description"  value="{{$service->description}}" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">price</label>
          <input type="number" name="price" value="{{$service->price}}" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">image</label>
            <input type="file" name="image" value="{{$service->image}}" class="form-control" id="exampleInputPassword1">
          </div>
        
        <button type="submit" class="btn btn-primary">EDIT</button>
      </form>
  </div>  <!-- Form End -->

 {{-- @endsection --}}