@extends('back.layouts.master')
@section('title', 'Create A Page')
@section('titleDesc', 'You can edit your details on this page.')
@section('count',  'About')
@section('adminContent')


    <form method="post" action="{{ route('sidebar.about.post')  }}" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="">Image</label>
            <img width="200" src="{{ route('homepage').'/'.$about->photo  }}" class="img-fluid" alt="">
            <input type="file" name="image" class="form-control" >
        </div>

        <div class="form-group">
            <label for="">Page Content</label>
            <textarea name="contentAbout" id="summernote"  rows="12"> {{ $about->about  }} </textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success btn-block">Update</button>
        </div>

    </form>

@section('css')

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

@endsection

@section('js')


    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

    {!! Toastr::message() !!}


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



