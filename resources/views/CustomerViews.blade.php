<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>CustomerViews</title>
</head>
<body>
    @include('layouts.header');
    <div class="container">
    <table class="table table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th class="text-center">Name</th>
                <th class="text-center">Email</th>
                <th class="text-center">Mobile_No</th>
                <th class="text-center">Gender</th>
                <th class="text-center">City</th>
                <th class="text-center">State</th>
                <th class="text-center">Country</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody class="tbody-dark">
            @foreach ($customer as $value)
            <tr>
                <td>{{$value->name}}</td>
                <td>{{$value->email}}</td>
                <td>{{$value->mobile_no}}</td>
                <td>{{$value->gender}}</td>
                <td>{{$value->city}}</td>
                <td>{{$value->state}}</td>
                <td>{{$value->country}}</td>
                <td>
                    <center>
                        {{-- {{url('/customer/delete/')}}/{{$value->customer_ID}} --}}
                        <a href="{{route('customer_delete',['id'=>$value->id])}}">
                        <button class="btn btn-danger mr-3">Delete</button>
                        </a>
                        <a href="{{route('customer_edit',['id'=>$value->id])}}">
                        <button class="btn btn-success">Edit</button>
                        </a>
                    </center>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>