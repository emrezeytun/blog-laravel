
@extends('front.layouts.master')
@section('title', 'Contact')
@section('page_title', 'Contact')
@section('content')

    <div class="container py-4">
        <div class="row">
            <div class="col-md-12 icerikKat">

                <p class="small"><a href="{{ route('homepage') }}">Anasayfa</a> > Contact</p>


            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-8 icerik-ana sayfa-ic">



                <section class="mb-4">




                    <div class="row">


                        <div class="col-md-9 mb-md-0 mb-5">
                            @if(session('successSession'))
                                <div class="alert alert-success">{{ session('successSession') }}</div>
                            @endif
                            @if($errors->any())
                            <ul>
                                @foreach($errors->all() as $error)
                                <li>{{ $error  }}</li>
                                @endforeach
                            </ul>
                            @endif
                            <form action="{{ route('contactPost')  }}" method="POST" >
                                @csrf
                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <div class="md-form mb-0">


                                            <input type="text" id="name" name="name" class="form-control" value="{{ old('name')  }}" placeholder="Your name..">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="md-form mb-0">
                                            <input type="text" id="email" name="email" value="{{ old('email')  }}" class="form-control" placeholder="Your email..">

                                        </div>
                                    </div>


                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-12">
                                        <div class="md-form mb-0">
                                            <input type="text" id="title" name="title" class="form-control"  value="{{ old('title')  }}" placeholder="Subject..">

                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-12">
                                        <div class="md-form">
                                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" placeholder="Your Message..">{{ old('message')  }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center text-md-left">
                                    <button type="input" class="btn btn-primary" >Send</button>
                                </div>

                            </form>


                        </div>
                        <!--Grid column-->



                    </div>

                </section>







            </div>

@include('front.layouts.sidebar');
@endsection
