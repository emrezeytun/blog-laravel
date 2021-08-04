@extends('back.layouts.master')
@section('title', 'Pages')
@section('titleDesc', 'You can edit & delete pages on this page.')
@section('count', $pages->count() . ' pages')
@section('adminContent')

    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>



    <table class="table">

        <thead>
        <tr>
            <th>Title</th>
            <th>Content</th>
            <th>Show on Menu</th>
            <th>Process</th>
        </tr>
        </thead>
        <tbody>
        @foreach($pages as $page)
            <tr>
                <td>{{$page->title}}</td>
                <td>{!!  str_limit($page->content,40) !!}</td>
                <td><input onclick="checkClick()" class="checkBox" type="checkbox" checked data-toggle="toggle">
                </td>
                <td>
                    <a target="_blank" href=" {{ route('page', $page->slug)  }} " class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a>
                    <a class="btn btn-primary" href = {{ route('pages.edit', $page->id)  }}><i class="fas fa-edit"></i>   </a>
                    <button type="button" class="btn btn-sm btn-danger"  data-toggle="modal" data-target="#delete{{$page->id}}"><i class="fas fa-trash-alt"></i></button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>


    @foreach($pages as $page)
        <div class="modal fade bd-example-modal-lg" id="delete{{  $page->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{ $page->title }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure to delete {{ $page->title  }} page?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <a href="{{ route('pages.delete', Crypt::encryptString($page->id) ) }}" class="btn btn-primary">Yes</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach




@endsection

@section('js')

    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

    {!! Toastr::message() !!}


    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <script>

        $(document).ready(function() {
            $('.summernote').summernote(
                {
                    'height': 400,
                }
            );
        });

    </script>

    <script>


        function checkClick() {


          if($(".checkBox").is(':checked')) {
              $.ajax({
                  url: '{{ route('pages.menu.on')  }}',
                  type: 'POST',
                  data: {status : 1} ,
                  contentType: false,
                  processData: false,
                  success: function () {
                      setTimeout(
                          function()
                          {


                          }, 1000);

                  }
              })

          }

          else {
              $.ajax({
                  url: '{{ route('pages.menu.on')  }}',
                  type: 'POST',
                  data: {status : 1} ,
                  contentType: false,
                  processData: false,
                  success: function () {
                      setTimeout(
                          function()
                          {


                          }, 1000);

                  }
              })

          }
        }



    </script>




@endsection

