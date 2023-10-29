@extends('dashmin/admincomponents/master')

@section('content')
              <style>
                .btn{
                    
                    font-size:18px;
                    
                    color: white;

                }
                .edit{
                    background: blue;
                    border:5px solid blue;

                }
                .delete{
                    background: red;
                    border:5px solid red;
                }
              </style>
       
                    <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Responsive Table</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col"> Name</th>
                                            <th scope="col">description</th>
                                            <th scope="col">price</th>
                                            <th scope="col">image</th>
                                            <th scope="col">control</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($service as $item)
                                        <tr>
                                            <td scope="col">{{$item->id}}</td>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->description}}</td>
                                            <td>{{$item->price}}</td>
                                            <td>{{$item->image}}</td>
                                            <td>
                                                <a class=" btn edit" href="{{route('services.edit',$item->id)}}">Edit</a>
                                                <a class="btn delete" href="{{route('services.delete',$item->id)}}">delete</a>
                                            </td>
                                           
                                        </tr>  
                                                 @endforeach <!-- Table End -->

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection