@extends('backend.master')
@section('title', 'CATEGORY')
@section('content')
<div class="col-12 d-flex mb-3">
    <div class="col-4">
        <ul class="list-group">
            <li class="list-group-item bg-hover">
                <h5 class="m-0 font-weight-bold text-center text-uppercase">
                    Add Category
                </h5>
            </li>
            <li class="list-group-item">
                @include('error.note')
                <form action="{{route('category.create')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Category name:</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <button class="btn btn-primary btn-block text-uppercase font-weight-bold">
                        save
                    </button>
                </form>
            </li>
        </ul>
    </div>

    <div class="col-8">
        <ul class="list-group">
            <li class="list-group-item bg-hover">
                <h5 class="m-0 font-weight-bold text-center text-uppercase">
                    List Category
                </h5>
            </li>
            <li class="list-group-item">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th class="text-uppercase text-center" scope="col">#</th>
                            <th class="text-uppercase text-center" scope="col">Category name</th>
                            <th class="text-uppercase text-center" scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $value)
                        <tr>
                            <th class="text-center">{{$value->cate_id}}</th>
                            <td class="text-center">{{$value->cate_name}}</td>
                            <td class="text-center d-flex justify-content-around">
                                {{-- edit --}}
                                <form action="{{route('category.edit', $value->cate_id)}}" method="GET">
                                    <button class="btn btn-warning">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                </form>
                                
                                {{-- delete --}}
                                <form action="{{route('category.delete', $value->cate_id)}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger" onclick="return confirm('Are you sure?')">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </li>
        </ul>
    </div>
</div>
@endsection