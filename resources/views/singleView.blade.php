@extends('base')

@section('name',"singleView")
    


@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3">
                <div class="list-group">
                    <a href="" class="list-group-item list-group-item-action active">State</a>
                    @foreach($category as $cat)
                    <a href="" class="list-group-item list-group-item-action ">{{$cat->cat_name}}</a>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-9">
                <div class="card ">
                    <div class="card-body">
                        <h2>{{$add->name}}</h2>
                        <p class="lead">{{$add->address}}</p>
                    </div>
                   
        </div>
    </div>
@endsection