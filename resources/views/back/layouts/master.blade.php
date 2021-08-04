@include('back.layouts.header')


<div class="main-page">
    <div class="container-fluid">
        <div class="row page-title-div">
            <div class="col-md-6">
                <h2 class="title">
                @yield('title')
                </h2>

            </div>
            <div class="col-md-6 right-side">
            </div>
        </div>
        <div class="row breadcrumb-div">
            <div class="col-md-6">
                <ul class="breadcrumb">
                    <li><a  href="{{route('admin.home')}}"><i class="fa fa-home"></i> Homepage</a></li>
                    <li>@yield('title')</li>
                </ul>
            </div>

        </div>
    </div>

    <section class="section">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">
                    <p >@yield('titleDesc')</p>

                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h5>@yield('count')</h5>
                            </div>
                        </div>



                        <div class="panel-body">

                            @yield('adminContent')

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

</div>


</div>
</div>

</div>



@include('back.layouts.footer')
