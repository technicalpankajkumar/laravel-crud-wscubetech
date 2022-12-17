<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nav</title>
</head>
<body>
    <nav class="navbar navbar-expand  navbar-white bg-dark">
        <a class="navbar-brand" href="#"> CRUD FUNCTION</a>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="{{url('/')}}">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/form/create')}}">FORM</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/form/customers')}}">CUSTOMERS</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </nav>
</body>
</html>