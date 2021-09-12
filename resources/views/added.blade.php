@extends('base')

@section('name',"insert Added")
    


@section('content')
    <div class="container mt-5 bg-none">
        <div class="row">
            <div class="col-lg-9">
                <div class="card shadow">
                    <div class="card-body ">
                        <form action="{{route('addStore')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="">Name</label>
                                <input type="text" name="name"  class="form-control" value="{{old('name')}}" placeholder="enter college name">
                                @error('name')
                                    <p class="small text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">College code</label>
                                <input type="text" name="coll_code" class="form-control"  value="{{old('coll_code')}}" placeholder="enter college code">
                                @error('coll_code')
                                    <p class="small text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">State</label>
                                <select class="form-select"  name="category">
                                        @foreach ($category as $cat)
                                            <option value="{{$cat->id}}">{{$cat->cat_name}}</option>
                                        @endforeach
                                </select>
                                @error('category')
                                    <p class="small text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Address</label>
                                <textarea rows="4"  class="form-control" name="address" placeholder="enter address">{{old('address')}}</textarea>
                                @error('address')
                                    <p class="small text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input type="submit" value="Add" class="btn btn-success d-block">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card shadow">
                    <div class="card-body">
                        <form action="{{route('catStore')}}" method="POST">
                            @csrf
                            
                            <div class="mb-3">
                                <label for="">State name</label>
                                <input type="text" name="cat_name"  class="form-control" value="{{old('cat_title')}}" placeholder="enter  name">
                                @error('cat_name')
                                    <p class="small text-danger">{{$message}}</p>
                                @enderror
                            </div>
                        
                            <div class="mb-3">
                                <input type="submit" value="Insert state" class="btn btn-success d-block">
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection