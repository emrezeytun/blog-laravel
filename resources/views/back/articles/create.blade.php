@extends('back.layouts.master')
@section('title', 'Create An Article')
@section('titleDesc', 'You can create an article on this page.')
@section('count',  'Create')
@section('adminContent')

    @if($errors->any())

        <div class="alert alert-danger">
            @foreach($errors->all() as $error)

                {{ $error  }}

            @endforeach


        </div>

    @endif

<form method="post" action="{{ route('articles.store')  }} " enctype="multipart/form-data">
@csrf
     <div class="form-group">
        <label for="">Title</label>
        <input type="text" name="title" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="">Category</label>
        <select name="category" required>
            @foreach($categories as $category)
            <option value="{{$category->id}}">{{ $category->name }}</option>
                @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="">Article Image</label>
        <input type="file" name="image" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="">Article Content</label>
        <textarea name="contentArticle" id="summernote"  rows="12"></textarea>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-success btn-block">Create an Article</button>
    </div>

</form>

    @section('css')

        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">


    @endsection

    @section('js')

        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

        <script>

            $(document).ready(function() {
                $('#summernote').summernote(
                    {
                        'height': 400,
                    }
                );
            });

        </script>

    @endsection


@endsection
