@extends('back.layouts.master')
@section('title', 'Summary')
@section('titleDesc', 'Summary of the Website')
@section('adminContent')

    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

<div class="main-page">
    <div class="container-fluid">
        <div class="row page-title-div">
            <div class="col-md-12">
                <h2 class="title">Summary    

</h2>
                <p class="sub-title">You can see summary of the website in here.</p>
            </div>
            
        </div>
        <div class="row breadcrumb-div">
            <div class="col-md-6">
                <ul class="breadcrumb">
                    <li><a target="_blank" href="index.php"><i class="fa fa-home"></i> Anasayfa</a></li>
                </ul>
            </div>

            <div class="col-md-6">
                
            </div>
            
        </div>
    </div>

    <section class="section">
        <div class="container-fluid">

            

            <div class="row">
               
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h5>Summary</h5>
                            </div>
                        </div>
                        
                        
                        <div class="panel-body">
                           
                           <div class="row">
<div class="col-md-4">
                      
                           <a class="dashboard-stat bg-danger" >
<span class="number counter"> {{ $commentsCount }}   </span>
<span class="name">Comments</span>
<span class="bg-icon"><i class="fas fa-comments" style="font-size:6rem;"></i></span>
</a>
</div>                                               
                           
                           
                           
<div class="col-md-4">
                         
                       
                           <a class="dashboard-stat bg-primary" href="{{ route('articles.index') }}">
<span class="number counter"> {{ $articlesCount }}  </span>
<span class="name"> Articles</span>
<span class="bg-icon"><i class="fas fa-file" style="font-size:6rem;"></i></span>
</a>
</div>

<div class="col-md-4">
                       
                           <a class="dashboard-stat bg-warning" href="{{ route('category.list') }}">
<span class="number counter"> {{ $categoriesCount }} </span>
<span class="name">Categories</span>
<span class="bg-icon"><i class="fas fa-bars" style="font-size:6rem;"></i></span>
</a>
</div>   






                           
                        </div>
                    </div>
                
            </div>

        </div>
    </section>

</div>



@endsection