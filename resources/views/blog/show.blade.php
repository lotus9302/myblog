@extends('layouts.admin')
@section('title', '登録済みブログの一覧')

@section('content')
    <div class="container row offset-sm-4 col-sm-4">
        <div class="row mt-4">
            <h2 class="col-sm-12 text-center">{{ $blog_form->title }}</h2>
        </div>
        <div class="row">
            <small class="offset-sm-4 col-sm-4">{{ $blog_form->user->name }}</small>
            <small class="col-sm-4">{{ $blog_form->created_at }}</small>
        </div>
        <div class="row mb-4">
            <div class="col-sm-12 text-center">{{ $blog_form->body }}</div>
        </div>
        <div class="row">
             <a href="/">Blog</a>
        </div>
    </div>
@endsection