@extends('back.layouts.master')
@section('title', 'Category')
@section('titleDesc', 'You can create, delete and update categories on this page.')
@section('count', $categories->count() . ' categories')
@section('adminContent')

    @if(session('Success'))
        <div class="alert alert-success"> {{ session('Success') }} </div>
    @endif

    <div class="col-md-4" >
        <form method="post" action="{{route('category.add')}}">
            @csrf
            <div class="form-group">
                <label for=""> Add new category </label>
                <input type="text" name="category" class="form-control" placeholder="Category Name..">

            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success w-100">Add</button>
            </div>
        </form>
    </div>

    <div class="col-md-8">
    <table class="table">

        <thead>
        <tr>
            <th>Category Name</th>
            <th>Article Count</th>
            <th>Process</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
        <tr>
            <td>{{$category->name}}</td>
            <td>{{$category->articleCount()}}</td>

            <td>
                <a target="_blank" href="{{route('category', $category->slug)}}" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a>
                <a href="{{route('category.edit', $category->id)}}" class="btn btn-sm btn-success"><i class="fas fa-edit"></i></a>
                <a href="{{route('category.delete', $category->id)}}" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

    </div>



@endsection

@section('js')

<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

{!! Toastr::message() !!}



@endsection
