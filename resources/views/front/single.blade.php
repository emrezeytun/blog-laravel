
@extends('front.layouts.master')
@section('title', $article->title)
@section('page_title', $article->title)
@section('content')

    <div class="container py-4">
        <div class="row">
            <div class="col-md-12 icerikKat">

                <p class="small"><a href="{{ route('homepage') }}">Homepage</a> >  <a href=" ../{{ $takeCategoryName->slug }} "> {{ $takeCategoryName->name }} </a> >  {{ $takeArticleName->title  }}</p>

                @if(session('successSession'))

                    <div class="alert alert-success">
                       {{ session('successSession')  }}
                    </div>

                @endif

            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-8 icerik-ana sayfa-ic">



                <div class="ana-makale">
                    <div class="title text-center">
                        <h1><a href="" class=""> {{ $article->title  }}</a></h1>


                        <div class="sag-kategori ">
                            <div class="<?php  if((str_slug($article->getCategory->name))) { ?> {{  str_slug($article->getCategory->name)  }} <?php } else { ?> saglik <?php } ?>">
                                <p> {{  $article->getCategory->name  }} </p></div>
                        </div>
                    </div>
                    <div class="row icerik">
                        <div class="col-md-12 text-center">
                            <div class="">
                                <img src="{{ route('homepage').'/'.$article->image  }}" class="img-fluid" alt="">
                            </div></div>

                        <div class="row my-2">
                            <div class="col-md-12 icerik-yazi">
                                {!! $article->content  !!}



                                <div class="icerik-ozellik istatistik d-flex">
                                    <div class="icerik-kategori d-flex">
                                        <i class="fas fa-bars"></i> <h2> {{  $article->getCategory->name  }}  </h2>
                                    </div>
                                    <div class="icerik-tarih d-flex">
                                        <i class="fas fa-calendar-alt"></i>  <h2>  {{ $article->created_at->diffForHumans()  }}  </h2>
                                    </div>
                                    <div class="icerik-yorum d-flex">
                                        <i class="fas fa-comments"></i>  <h2> 0 Comments</h2>
                                    </div>
                                    <div class="icerik-hit d-flex">
                                        <i class="fas fa-eye"></i>  <h2> {{ $article->hit  }} View</h2>
                                    </div>
                                </div>

                            </div></div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-md-12 mb-2 ">

                        <div class="">
                            <div class="yorumlar">

@foreach($comments as $comment)
                                <div class="yorum mt-3">
                                    <p class="small"> {{ $comment->comment  }}  </p>     <h3 class="tarih small"> {{$comment->name}} -
                                    {{$comment->created_at}}</h3>
                                </div>
                                @endforeach
                                
                            </div>
                        </div>
                    </div>
                </div>




                <div class="row yorum-yap">
                    <h1 class="yorum-title my-4">Comment</h1>
                    <div class="col-md-12 my-1">

                        <form method="post" action="{{  route('singleComment', [$article->getCategory->slug, $article->slug]) }}">

                        @csrf
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Name:</span>
                                </div>
                                <input type="text" name="name" class="form-control" placeholder="Name.." aria-describedby="basic-addon1">
                            </div>


                            <div class="input-group mb-3">

                                <textarea type="text" name="comment" class="form-control" placeholder="Your Comment.." aria-describedby="basic-addon1"> </textarea>
                            </div>

                            <div class="input-group mb-3">

                                <button type="submit" class="btn btn-orange">SEND</button>
                            </div>


                        </form>

                    </div>
                </div>






            </div>

@include('front.layouts.sidebar');
@endsection
