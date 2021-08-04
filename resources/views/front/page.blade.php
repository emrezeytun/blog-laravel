
@extends('front.layouts.master')
@section('title', $page->title)
@section('page_title', $page->title)
@section('content')

    <div class="container py-4">
        <div class="row">
            <div class="col-md-12 icerikKat">

                <p class="small"><a href="{{ route('homepage') }}">Anasayfa</a> >    {{ $page->title  }}</p>


            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-12 icerik-ana sayfa-ic">



                <div class="ana-makale">
                    <div class="title text-center">
                        <h1><a href="" class=""> {{ $page->title  }}</a></h1>



                    </div>
                    <div class="row icerik">
                        <div class="col-md-12 text-center">
                            <div class="">

                                <img src="{{ route('homepage').'/'.$page->image  }}" class="img-fluid" alt="">
                            </div></div>

                        <div class="row my-2">
                            <div class="col-md-12 icerik-yazi">
                                {!! $page->content  !!}



                            </div></div>
                    </div>
                </div>







            </div>


@endsection
