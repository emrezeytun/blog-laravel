<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Admin Page')</title>

    <link rel="stylesheet" href="{{ asset('back/') }}/css/bootstrap.css" media="screen" >
    <link rel="stylesheet" href="{{ asset('back/') }}/css/font-awesome.min.css" media="screen" >
    <link rel="stylesheet" href="{{ asset('back/') }}/css/animate-css/animate.min.css" media="screen" >
    <link rel="stylesheet" href="{{ asset('back/') }}/css/lobipanel/lobipanel.min.css" media="screen" >
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

    @yield('css')

    <link rel="stylesheet" href="{{ asset('back/') }}/css/prism/prism.css" media="screen" >

    <link rel="stylesheet" href="{{ asset('back/') }}/css/main.css" media="screen" >

</head>
<body class="top-navbar-fixed">


<div class="main-wrapper">

    <nav class="navbar top-navbar bg-white box-shadow">
        <div class="container-fluid">
            <div class="row">
                <div class="navbar-header no-padding">
                    <a class="navbar-brand" href="{{route('admin.home')}}">
                      <img src="{{asset('back/')}}/img/logo.png"  class="logo">

                    </a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-ellipsis-v"></i>
                    </button>
                    <button type="button" class="navbar-toggle mobile-nav-toggle" >
                        <i class="fa fa-bars"></i>
                    </button>
                </div>

                <div class="collapse navbar-collapse" id="navbar-collapse-1">

                    <ul class="nav navbar-nav navbar-right" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                        <li><a href="{{ route('homepage') }}"> Homepage</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">admin <span class="caret"></span></a>
                            <ul class="dropdown-menu profile-dropdown">

                                <li><a href="{{ route('admin.logout')  }}" class="color-danger text-center"><i class="fa fa-sign-out"></i> Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="content-wrapper">
        <div class="content-container">

            <div class="left-sidebar bg-black-300 box-shadow ">
                <div class="sidebar-content">



                    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

                    <style>

                        i {
                            font-size: 1rem;
                            padding-right: 14px;
                        }

                    </style>
                    <div class="sidebar-nav">
                        <ul class="side-nav color-gray">
                            <li class="nav-header">
                                <span class="">Main</span>
                            </li>
                            <li class="has-children">
                                <a href="{{ route('summary.index') }}"><i class="fas fa-book"></i><span>Summary</span> </a>

                            </li>
                            

                            <li class="nav-header">
                                <span class="">ARTICLES</span>
                            </li>
                            <li class="has-children  @if(Request::segment(2) == 'articles' and Request::segment(3) == null ) active @endif">
                                <a href="{{route('articles.index')}}"><i class="fas fa-home"></i><span>All Articles</span> <i class=""></i></a>

                            </li>

                            <li class="has-children @if(Request::segment(2) == 'articles'  and Request::segment(3) == 'create' ) active @endif ">
                                <a href="{{ route('articles.create')  }}"><i class="fas fa-bars"></i><span>Add New Article</span> <i class=""></i></a>

                            </li>


                            <li class="nav-header">
                                <span class="">CATEGORIES</span>
                            </li>

                            <li class="has-children">
                                <a href="{{ route('category.list')  }} "><i class="fas fa-bars"></i><span>Edit Category</span> <i class=""></i></a>

                            </li>


                            <li class="nav-header">
                                <span class="">PAGES</span>
                            </li>

                            <li class="has-children">
                                <a href="{{ route('pages.list')  }} "><i class="fas fa-bars"></i><span>All Pages</span> <i class=""></i></a>

                            </li>

                            <li class="has-children">
                                <a href="{{ route('pages.create')  }} "><i class="fas fa-bars"></i><span>Create a Page</span> <i class=""></i></a>

                            </li>

                            <li class="nav-header">
                                <span class="">SIDEBAR</span>
                            </li>

                            <li class="has-children">
                                <a href="{{ route('sidebar.about')  }} "><i class="fas fa-bars"></i><span>About</span> <i class=""></i></a>

                            </li>









                           


                        </ul>

                    </div>






                </div>
            </div>

