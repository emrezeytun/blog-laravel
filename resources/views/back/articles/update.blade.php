@extends('back.layouts.master')
@section('title', 'Update '.$article->title)
@section('titleDesc', 'You can update an article on this page.')
@section('count',  'Update '.$article->title)
@section('adminContent')

    @if($errors->any())

        <div class="alert alert-danger">
            @foreach($errors->all() as $error)

                {{ $error  }}

            @endforeach


        </div>

    @endif

<form method="post" action="{{ route('articles.update', $article->id)  }}" enctype="multipart/form-data">
    @method('PUT')
@csrf
     <div class="form-group">
        <label for="">Title</label>
        <input value="{{$article->title}}" type="text"  name="title" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="">Category</label>
        <select name="category" required>

            @foreach($categories as $category)

            <option @if ($article->category_id == $category->id) selected @endif value="{{$category->id}}">{{ $category->name }}</option>

            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="">Change Image</label>
        <img src="{{ route('homepage').'/'.$article->image  }}" alt="" class="thumbnail img-fluid" width="200">
        <input type="file" name="image" class="form-control" >
    </div>

    <div class="form-group">
        <label for="">Article Content</label>
        <textarea name="contentArticle" id="summernote"  rows="12">{{$article->content}}</textarea>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-success btn-block">Update Article</button>
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
