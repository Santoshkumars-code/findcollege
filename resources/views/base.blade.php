<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Find college @yield('name')</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
</head>
<body style="background-image:url({{asset('images/col_img.jpg')}}); background-size:cover;">
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-info">
        <div class="container">
            <a href="{{route('insert')}}" class="navbar-brand">FindCollege</a>
            
                <form action="{{route('search')}}" class="mx-auto" method="get">
                    <div class="input-group input-group-lg border border-light">
                        <input type="search" name="search" size="60" placeholder="Search here and more..." class="form-control">
                        <button type="submit" name="" class="btn btn-success">Search</button>
                    </div> 
            </form> 

            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="{{route('insert')}}" class="btn btn-primary">Insert</a></li>
            </ul>
        </div>
    </nav>

    @section('content')
        
    @show


</body>
</html>