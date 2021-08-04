@extends('back.layouts.master')
@section('title', 'Edit A Page')
@section('titleDesc', 'You can edit page on this page.')
@section('count',  'Edit')
@section('adminContent')


<form method="post" action="{{ route('pages.edit.post')  }}" enctype="multipart/form-data">
@csrf


     <div class="form-group">
        <label for="">Title</label>
        <input type="text" name="title" value="{{ $page->title  }}" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="">Image</label>
        <img width="200" src="{{ route('homepage').'/'.$page->image  }}" class="img-fluid" alt="">
        <input type="file" name="image" value="{{ $page->image  }}" class="form-control" >
    </div>

    <div class="form-group">
        <label for="">Page Content</label>
        <textarea name="contentPage"  id="summernote"  rows="12"> {{  $page->content }} </textarea>
    </div>

    <input type="hidden" name="PageId" value="{{  $page->id  }}">

    <div class="form-group">
        <button type="submit" class="btn btn-success btn-block">Update a Page</button>
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



