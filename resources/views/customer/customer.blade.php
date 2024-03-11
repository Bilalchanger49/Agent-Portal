@extends('header')

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="container mt-3">
                <h2>Customers</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>
                                <input type="checkbox" name="">
                            </th>
                            <th>Id#</th>
                            <th>Name</th>
                            <th>Phone No</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $customer)
                            <tr>
                                <td><input type="checkbox" name=""></td>
                                <td>{{ $customer->id }}</td>
                                <td>{{ $customer->name }}</td>
                                <td>{{ $customer->phone }}</td>
                                <td>{{ $customer->email }}</td>
                                <td>
                                    <ul>
                                        {{-- <a style="color: rgb(87, 167, 87)" href="{{ route('custedit', ['user_id' => $customer->id]) }}" class='edt'>Edit </a> --}}
                                        <li style="color: rgb(72, 137, 223)">Show </li>|
                                        {{-- <li style="color: red">Delete </li> --}}
                                        @csrf
                                        @method('DELETE')
                                        <a style="color: red" href="{{ route('delete', ['user_id' => $customer->id]) }}" class='dlt'>Delete</a>
                                    </ul>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
        </div>
    </div>
@endsection
