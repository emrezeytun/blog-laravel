<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">


    <link rel="stylesheet" href="{{ asset('front/') }}/style.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('front/') }}/css/slick.css"/>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>@yield('page_title')</title>
</head>
<body>

<div id="app">

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 ust-blok text-center">
                <h1>Personal Blog</h1>
                <p>@yield('title')</p>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <nav class="navbar navbar-expand-lg navbar-light bg-light ">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">

                            <a class="nav-item nav-link" href="{{ route('homepage')}}">HOMEPAGE</a>

                           @foreach($categoriesOrd as $category)
                            <a class="nav-item nav-link" href="{{ route('homepage')}}/{{$category->slug}}"> {{ mb_strtoupper($category->name) }} </a>  @endforeach
                            @foreach($pages as $page)  <a class="nav-item nav-link" href="{{ route('page', $page->slug)}}"> {{ Str::upper($page->title) }} </a>  @endforeach
                            

                            <div class="sosyal-menu">
                                <a href="">   <i class="fab fa-facebook"></i></a>
                                <a href="">    <i class="fab fa-instagram"></i></a>
                                <a href="">   <i class="fab fa-twitter"></i></a>
                            </div>
                            <div class="arama">
                                <form method="POST" action="{{ route('searchPost')  }}">
                                    @csrf
                                    <input type="text" name="search" placeholder="Search...">

                                    <button type="submit"><i class="fas fa-search"></i></button>
                                </form>
                            </div>
                        </div>

                    </div>
                </nav>


            </div>
        </div>
    </div>
