@extends('back.layouts.master')
@section('title', 'Article')
@section('titleDesc', 'Burasi title description')
@section('count', $articles->count() . ' articles')
@section('adminContent')



    @if(session('Success'))
        <div class="alert alert-success"> {{ session('Success') }} </div>
    @endif
    <table class="table">

        <thead>
        <tr>
            <th>Photo</th>
            <th>Title</th>
            <th>Category</th>
            <th>Hit</th>
            <th>Date</th>
            <th>Process</th>
        </tr>
        </thead>
        <tbody>
        @foreach($articles as $article)
        <tr>
            <td><img src="{{ route('homepage').'/'.$article->image}}" width="50"></td>
            <td>{{$article->title}}</td>
            <td>{{$article->getCategory->name}}</td>
            <td>{{$article->hit}}</td>
            <td>{{$article->created_at->diffForHumans()}}</td>
            <td>
                 <a href="{{ route('articles.recovery',$article->id)  }}" class="btn btn-sm btn-success"><i class="fas fa-share-square"></i></a>
                <a href="{{  route('articles.hardDelete', $article->id)  }}" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>




@endsection
