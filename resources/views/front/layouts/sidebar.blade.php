



<div class="col-md-4 sidebar">
    <div class="hakkimda text-center">
        <img src="{{ route('homepage').'/'.$admin->photo }}" class="img-fluid" alt="">
        <div class="hakkimda-sag-ust">
            <p>About Me</p></div>

        <hr>

        <p class="hakkimda-yazi"> {{ $admin->about  }} </p>
    </div>
    <div class="hakkimda kategori-sidebar text-center">

        <div class="hakkimda-sag-ust">
            <p>Categories</p></div>

        <div class="hakkimda-yazi">
            <ul>
                @foreach($categories as $category)
                    <li><a href="{{ route('homepage') }}/{{ $category->slug }}"><i class="fas fa-angle-right"></i>   {{ $category->name  }}  <span style="float:right; margin-right: 0.5rem;">( {{ $category->articleCount()  }} )</span> </a>  </li>
                @endforeach
            </ul>
        </div>
    </div>



    <div class="hakkimda makale-sidebar text-center">

        <div class="hakkimda-sag-ust">
            <p>Last Articles</p></div>



       @if(count($sidebarLastArticles) > 2)
        <ul class="dd-flex">
            <li style="background-color: {{$sidebarLastArticles[0]->getCategory->color}};" class=" sanatLi " ><a @click="gosterKategori = 1" > {{ $sidebarLastArticles[0]->getCategory->name  }}  </a></li>
            <li style="background-color: {{$sidebarLastArticles[1]->getCategory->color}};" class="sanatLi" ><a @click="gosterKategori = 2">{{ $sidebarLastArticles[1]->getCategory->name  }}</a></li>
            <li style="background-color: {{$sidebarLastArticles[2]->getCategory->color}};" class="sanatLi"><a   @click="gosterKategori = 3">{{ $sidebarLastArticles[2]->getCategory->name  }}</a></li>
        </ul>
        @endif


        <div v-show="gosterKategori == 1" class="yazi"><hr>
            <div>  <a href="{{ route('homepage')}}/{{$sidebarLastArticles[0]->getCategory->slug}}/{{$sidebarLastArticles[0]->slug}}"><img src="{{ asset('front/')  }}/img/{{ $sidebarLastArticles[0]->image  }}" class="img-fluid" alt=""></a>
                <h1><a href="{{ route('homepage')}}/{{$sidebarLastArticles[0]->getCategory->slug}}/{{$sidebarLastArticles[0]->slug}}">{{ $sidebarLastArticles[0]->title  }}</a></h1>
                <p>{!! str_limit($sidebarLastArticles[0]->content, 150)  !!}</p></div>

        </div>

        <div v-show="gosterKategori == 2" class="yazi"><hr>
            <div> <a href="{{route('homepage')}}/{{$sidebarLastArticles[1]->getCategory->slug}}/{{$sidebarLastArticles[1]->slug}}"> <img src="{{ asset('front/')  }}/img/{{ $sidebarLastArticles[1]->image  }}" class="img-fluid" alt=""></a>
                <h1><a href="{{ route('homepage')}}/{{$sidebarLastArticles[1]->getCategory->slug}}/{{$sidebarLastArticles[1]->slug}}">{{ $sidebarLastArticles[1]->title  }}</a></h1>
                <p>{!! str_limit($sidebarLastArticles[1]->content, 150)   !!}</p></div>


        </div>

        <div v-show="gosterKategori == 3" class="yazi"><hr>
            <div>  <a href="{{ route('homepage')}}/{{$sidebarLastArticles[2]->getCategory->slug}}/{{$sidebarLastArticles[2]->slug}}"> <img src="{{ asset('front/')  }}/img/{{ $sidebarLastArticles[2]->image  }}" class="img-fluid" alt=""></a>
                <h1><a href="{{ route('homepage')}}/{{$sidebarLastArticles[2]->getCategory->slug}}/{{$sidebarLastArticles[2]->slug}}">{{ $sidebarLastArticles[2]->title  }}</a></h1>
                <p>{!! str_limit($sidebarLastArticles[2]->content, 150)   !!}</p></div>


        </div>


    </div>


    <div class="hakkimda makale-sidebar text-center comments">

        <div class="hakkimda-sag-ust">
            <p>Last Comments</p></div>






        <div class="yazi"><hr>
            <i class="fas fa-chevron-circle-up prevComments"></i>


            <div class="slickComments">





                @foreach( $sidebarComments as $comment )

                <div class="yorum"> <h1><a href="{{ route('homepage')}}/{{ $comment->categoriesSlug  }}/{{ $comment->articlesSlug  }}"><span>  {{ $comment->commentsName }} </span> {{ $comment->articleTitle  }} </a></h1> <p>
                    {{ $comment->commentContent }}</p></div>

                @endforeach
            </div>

            <i class="fas fa-chevron-circle-down nextComments"></i>





        </div>
    </div>



    <div class="son-eklenen  hakkimda makale-sidebar text-center">



        <div class="hakkimda-sag-ust ">
            <p>Random Article</p></div>

        <div class="yazi">

            <i class="fas fa-chevron-circle-left prev1"></i>
            <i class="fas fa-chevron-circle-right next1"></i>





            <div class="sidebar-slick ">


                <div>  <a href="{{ route('homepage')}}/{{$randomArticles[0]->getCategory->slug}}/{{$randomArticles[0]->slug}}"> <img src="{{ asset('front/')  }}/img/{{ $randomArticles[0]->image }}" class="img-fluid" alt=""></a>
                    <h1> <a href="{{ route('homepage')}}/{{$randomArticles[0]->getCategory->slug}}/{{$randomArticles[0]->slug}}">{{ $randomArticles[0]->title }}</a></h1>
                    <p> {!! str_limit($randomArticles[0]->content, 160) !!}</p></div>

                <div>  <a href="{{ route('homepage')}}/{{$randomArticles[1]->getCategory->slug}}/{{$randomArticles[1]->slug}}"> <img src="{{ asset('front/')  }}/img/{{ $randomArticles[1]->image }}" class="img-fluid" alt=""></a>
                    <h1> <a href="{{ route('homepage')}}/{{$randomArticles[1]->getCategory->slug}}/{{$randomArticles[1]->slug}}">{{ $randomArticles[1]->title }}</a></h1>
                    <p> {!! str_limit($randomArticles[1]->content, 160) !!}</p></div>

                <div>  <a href="{{ route('homepage')}}/{{$randomArticles[2]->getCategory->slug}}/{{$randomArticles[2]->slug}}"> <img src="{{ asset('front/')  }}/img/{{ $randomArticles[2]->image }}" class="img-fluid" alt=""></a>
                    <h1> <a href="{{ route('homepage')}}/{{$randomArticles[2]->getCategory->slug}}/{{$randomArticles[2]->slug}}">{{ $randomArticles[2]->title }}</a></h1>
                    <p> {!! str_limit($randomArticles[2]->content, 160) !!}</p></div>

            </div>

        </div></div>

</div>
</div>
</div>

</div>

