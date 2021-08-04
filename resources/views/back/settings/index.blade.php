@extends('back.layouts.master')
@section('title', 'Settings')
@section('titleDesc', 'You can update your website settings on this page.')
@section('count', ' ')
@section('adminContent')


   <div class="row">
       <form action="{{ route('settings.update') }}" method="post" enctype="multipart/form-data">
           @csrf
           <div class="col-md-6">
           <div class="form-group">
               <label for="">Title</label>
               <input type="text" name="title" value="{{$setting->title}}" class="form-control" >
           </div>
           </div>
           <div class="col-md-6">
               <div class="form-group">
                   <label for="">Logo</label>
                   <input type="file" name="logo"  class="form-control" >
               </div>
           </div>
           <div class="col-md-3">
               <div class="form-group">
                   <label for="">Facebook</label>
                   <input type="text" name="facebook" value="{{$setting->facebook}}" class="form-control" >
               </div>
           </div>
           <div class="col-md-3">
               <div class="form-group">
                   <label for="">Twitter</label>
                   <input type="text" name="twitter" value="{{$setting->twitter}}" class="form-control" >
               </div>
           </div>
           <div class="col-md-3">
               <div class="form-group">
                   <label for="">Instagram</label>
                   <input type="text" name="instagram" value="{{$setting->instagram}}" class="form-control" >
               </div>
           </div>
           <div class="col-md-3">
               <div class="form-group">
                   <label for="">Github</label>
                   <input type="text" name="github" value="{{$setting->github}}" class="form-control" >
               </div>
           </div>

           <div class="col-md-12">
               <div class="form-group">

                   <button type="submit" class="btn btn-success form-control" required>Update</button>
               </div>
           </div>


       </form>

   </div>



@endsection

@section('js')

    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

    {!! Toastr::message() !!}


    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <script>



    </script>



@endsection

