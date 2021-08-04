@extends('back.layouts.master')
@section('title', 'Articles')
@section('titleDesc', 'You can see all articles in here.')
@section('count', $articles->count() . ' articles')
@section('adminContent')

<a href="{{ route('articles.trashed')  }}" class="btn btn-warning pb-5" style="float: right;">Deleted Article</a>

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
                <a target="_blank" href="{{ route('homepage').'/'.$article->getCategory->slug.'/'.$article->slug  }}" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a>
                <a href="{{ route('articles.edit',$article->id)  }}" class="btn btn-sm btn-success"><i class="fas fa-edit"></i></a>
                <a href="{{  route('articles.delete', $article->id)  }}" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>




@endsection


