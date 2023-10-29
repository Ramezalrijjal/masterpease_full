@extends('dashmin/admincomponents/master')

@section('content')
<style>
    .btn {
        font-size: 18px;
        color: white;
    }

    .edit {
        background: blue;
        border: 5px solid blue;
    }

    .delete {
        background: red;
        border: 5px solid red;
    }
</style>

<div class="col-12">
    <div class="bg-light rounded h-100 p-4">
        <h6 class="mb-4">User Information</h6>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Control</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td scope="col">{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            {{-- <a class="btn edit" href="{{ route('users.edit', $user->id) }}">Edit</a> --}}
                            <a class="btn delete" href="{{ route('delete', $user->id) }}">Delete</a>
                        </td>
                    </tr>
                    @endforeach <!-- Table End -->
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
