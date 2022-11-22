@extends('blog::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('blog.name') !!}
    </p>
    <a href="https://nwidart.com/laravel-modules/v6/introduction" target="_blank" rel="noopener noreferrer">NwidartModule</a>
@endsection
