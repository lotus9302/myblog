@extends('layouts.front')

@section('content')
    <div class="container">
        <hr color="#c0c0c0">
        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
                @foreach($posts as $post)
                    <div class="post">
                        <div class="row">
                            <div class="text col">
                                <div class="date">
                                    {{ $post->updated_at->format('Y年m月d日') }}
                                </div>
                                <div class="title">                                        
                                    <a href="{{ route('blog.show', ['id' => $post->id]) }}">
                                        <h1>{{ Str::limit($post->title, 30) }}</h1>
                                    </a>
                                </div>
                                <div class="body mt-3">
                                    {{ Str::limit($post->body, 50) }}
                                </div>
                            </div>
                            @if ($post->image_path)
                                <div class="image col text-right mt-4">
                                    <img src="{{ asset('storage/image/' . $post->image_path) }}">
                                </div>
                            @endif
                        </div>
                    </div>
                    <hr color="#c0c0c0">
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection