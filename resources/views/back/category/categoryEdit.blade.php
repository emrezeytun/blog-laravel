@extends('back.layouts.master')
@section('title', 'Category')
@section('titleDesc', 'You can create, delete and update categories on this page.')
@section('count', '')
@section('adminContent')

    @if(session('Success'))
        <div class="alert alert-success"> {{ session('Success') }} </div>
    @endif


    <div class="col-md-12">

        <form method="post" action="{{  route('category.edit', $category->id)  }}" >
            @csrf
            <div class="form-group">
                <label for=""> Edit Categoy </label>
                <input type="text" name="category" class="form-control" value="{{ $category->name }}">

            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success w-100">Update</button>
            </div>
        </form>

    </div>



@endsection

@section('js')

<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

{!! Toastr::message() !!}



@endsection
