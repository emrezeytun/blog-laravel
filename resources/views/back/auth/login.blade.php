


    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <link rel="stylesheet" href="{{asset('back/')}}/css/bootstrap.min.css" media="screen" >
    <link rel="stylesheet" href="{{asset('back/')}}/css/font-awesome.min.css" media="screen" >
    <link rel="stylesheet" href="{{asset('back/')}}/css/animate-css/animate.min.css" media="screen" >

    <link rel="stylesheet" href="{{asset('back/')}}/css/icheck/skins/flat/blue.css" >

    <link rel="stylesheet" href="{{asset('back/')}}/css/main.css" media="screen" >

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">


    <script src="{{asset('back/')}}/js/modernizr/modernizr.min.js"></script>
</head>
<body class="">
<div class="main-wrapper">

    <div class="login-bg-color bg-gray">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel login-box">
                    <div class="panel-heading">
                        <div class="panel-title text-center">
                            @if($errors->all())
                            <div class="alert alert-danger"> {{ $errors->first()  }} </div>
                            @endif
                            <h4>Login</h4>
                        </div>
                    </div>
                    <div class="panel-body p-20">


                        <form action="{{route('admin.loginPost')}}" method="POST" class="form-horizontal">
                            @csrf
                            <div class="form-group left-icon">
                                <label for="exampleInputEmail1" class="col-sm-5 control-label">Mail: </label>
                                <div class="col-sm-7">
                                    <span class="glyphicon glyphicon-user form-left-icon"></span>
                                    <input type="username" name="email" class="form-control" placeholder="Mail..">
                                </div>
                            </div>
                            <div class="form-group left-icon">
                                <label for="exampleInputPassword1" class="col-sm-5 control-label">Password:</label>
                                <div class="col-sm-7">
                                    <span class="glyphicon glyphicon-tags form-left-icon"></span>
                                    <input type="password" name="password" class="form-control"  placeholder="Şifreniz..">
                                </div>
                            </div>

                            <div class="form-group mt-20">
                                <div class="">

                                    <button type="submit" class="btn btn-success  pull-right">Log In<span class="btn-label btn-label-right"></span></button>
                                </div>
                            </div>
                        </form>

                        <hr>


                        <?php



                        ?>


                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<script src="{{asset('back/')}}/js/jquery/jquery-2.2.4.min.js"></script>
<script src="{{asset('back/')}}/js/jquery-ui/jquery-ui.min.js"></script>
<script src="{{asset('back/')}}/js/bootstrap/bootstrap.min.js"></script>
<script src="{{asset('back/')}}/js/pace/pace.min.js"></script>
<script src="{{asset('back/')}}/js/lobipanel/lobipanel.min.js"></script>
<script src="{{asset('back/')}}/js/iscroll/iscroll.js"></script>

<script src="{{asset('back/')}}/js/icheck/icheck.min.js"></script>

<script src="{{asset('back/')}}/js/main.js"></script>





</body>
</html>
