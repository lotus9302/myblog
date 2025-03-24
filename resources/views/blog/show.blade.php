@extends('layouts.admin')
@section('title', '登録済みブログの一覧')

@section('content')
    <div class="container">
        <div class="row">
            <h2>料理レシピ</h2>
        </div>
        
        
    </div>
    <div class="container row offset-sm-4 col-sm-4">
        <div class="row mt-4">
            <h2 class="col-sm-12 text-center">{{ Str::limit($blog->title, 100) }}</h2>
        </div>
        <div class="row">
            <small class="offset-sm-4 col-sm-4">{{ Str::limit($blog->user->name, 100) }}</small>
            <small class="col-sm-4">{{ Str::limit($blog->created_at, 100) }}</small>
        </div>
        <div class="row mb-4">
            <div class="col-sm-12 text-center">{{ Str::limit($blog->body, 250) }}</div>
        </div>
        <div class="row">
             <a href="https://blog.com">Blog</a>
        </div>
    </div>
@endsection