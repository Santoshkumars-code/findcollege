@extends('base')

@section('name',"homepage")
    

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 mb-3">
                <div class="list-group">
                    <a href="" class="list-group-item list-group-item-action active">State</a>
                    @foreach ($category as $cat)
                        <a href="{{route('catView',['cat_id'=> $cat->id])}}" class="list-group-item list-group-item-action">{{$cat->cat_name}}</a>    
                    @endforeach
                </div>
            </div>
            <div class="col-lg-9 ">
                <table class="table table-bordered table-hover ">
                    <tr class="bg-primary">
                        <th>Id</th>
                        <th>Name</th>
                        <th>College code</th>
                        <th>State</th>
                        <th>Address</th>
                       
                    </tr>
                @foreach($add as $ad)
                    <tr class="text-danger">
                          <td>{{$ad->id}}</td>
                          <td>{{$ad->name}}</td>
                          <td>{{$ad->coll_code}}</td>
                          <td>{{$ad->category->cat_name}}</td>
                          <td>{{$ad->address}}</td>
                         
                          {{-- <td><a href="{{route('delete',['id'=>$record->id])}}" class="btn btn-danger">delete</a></td> --}}
                         
                    </tr>   
                     @endforeach   
                </table>
               {{-- @foreach ($add as $ad)
               <div class="card mb-3">
                <div class="card-header">{{$ad->name}}</div>
                <div class="card-body">
                    <span class="d-block  text-danger">{{$ad->coll_code}}</span>
                    <span class="d-block  text-primary">{{$ad->category->cat_name}}</span>
                    <p class="small text-muted">{{$ad->address}}</p>
                    <a href="{{route('singleView',['id'=>$ad->id])}}" class="btn btn-success">Read More</a>
                </div>
            </div>
               @endforeach --}}
            </div>
        </div>
    </div>
@endsection