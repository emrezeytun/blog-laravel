@extends('front.layouts.master')
@section('title', 'kişisel bir blog...')
@section('page_title', $cat->name)
@section('content')




    <div class="container">
        <div class="row">
            <div class="col-md-8 icerik-ana">

                @if($articles->count() == 0)
                    <p>There is no article in this category.</p>

                @endif

                @foreach($articles as $article)
                    <div class="ana-makale">
                        <div class="title">
                            <h1><a href=" {{ route('single', [$article->getCategory->slug, $article->slug])   }} "> {{ $article->title  }}</a></h1>
                            <div class="icerik-ozellik d-flex">
                                <div class="icerik-kategori d-flex">
                                    <i class="fas fa-bars"></i> <h2><a href=""> {{ $article->getCategory->name  }}</a></h2>
                                </div>
                                <div class="icerik-tarih d-flex">
                                    <i class="fas fa-calendar-alt"></i>  <h2> {{ $article->created_at->diffForHumans() }}</h2>
                                </div>
                                <div class="icerik-yorum d-flex">

                                </div>
                                <div class="icerik-hit d-flex">
                                    <i class="fas fa-eye"></i>  <h2> {{ $article->hit  }} Views</h2>
                                </div>
                            </div>

                            <div class="sag-kategori ">
                                <div>
                                    <p style="background-color: {{ $article->getCategory->color  }};">{{ $article->getCategory->name  }}</p></div>
                            </div>
                        </div>
                        <div class="row icerik">
                            <div class="col-md-5">
                                <div class="">

                                    <a href="{{ route('single', [$article->getCategory->slug, $article->slug])   }}">   <img src="{{ route('homepage').'/'.$article->image  }}" class="img-fluid" alt=""></a>

                                </div></div>
                            <div class="col-md-7 icerik-yazi">
                                <p> {!!  str_limit($article->content, 175)  !!}
                                </p>
                                <div class="devam">
                                    <a href="{{ route('single', [$article->getCategory->slug, $article->slug])   }}"> <button class="btn btn-success"><p>Read More >></p></button></a></div>
                            </div>
                        </div>
                    </div>

                @endforeach






            </div>

            @include('front.layouts.sidebar');
@endsection


