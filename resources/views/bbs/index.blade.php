@extends('layouts.default')
@section('content')

    <div class="col-xs-8 col-xs-offset-2">

        @foreach($posts as $post)
            <h2>タイトル：{{ $post->title }}
                <small>投稿日：{{ date("Y年 m月 d日",strtotime($post->created_at)) }}</small>
            </h2>
            <p>カテゴリー：{{ $post->category->name }}</p>
            <p>{{ $post->content }}</p>
            <p><a href="{{ url("bbs/".$post->id) }}" class="btn btn-primary">続きを読む</a></p>
            <p>コメント数：{{ $post->comment_count }}</p>
            <hr />
        @endforeach

    </div>

@stop