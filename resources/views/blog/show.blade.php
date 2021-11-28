@extends('layouts.main')

@section('content')

<div class="container mx-auto px-5 lg:max-w-screen-sm mt-20">
    <h1 class="mb-5 font-sans">{{ $post->title }}</h1>

    <div class="flex items-center text-sm text-light">
        <span>{{ date('M, j Y', strtotime($post->created_at)) }} - </span>
        @foreach ($post->categories as $category)
            <a href="{{ $category->slug }}" class="text-muted">#{{ $category->title }}</a>
        @endforeach
    </div>

    <div class="mt-5 leading-loose flex flex-col justify-center items-center post-body font-serif">
        {!! $post->content !!}
    </div>

    <div class="mt-10 lg:flex items-center p-5 border border-lighter  rounded">
        <div class="w-full lg:w-1/6 w-5 text-center lg:text-left">
            <img src="/img/default/user.png" class="rounded-full w-32 lg:w-full">
        </div>
        <div class="lg:pl-5 leading-loose text-center lg:text-left text-text-color w-full lg:w-5/6">
            By <span class="font-bold">{{ $post->user->name }}</span>
        </div>
    </div>
</div>

@endsection