@extends('layouts.main')

@section('content')

<div class="container mx-auto px-5 lg:max-w-screen-sm">

    @foreach ($data['posts'] as $post)
        <a class="no-underline transition block border border-lighter w-full mb-10 p-5 rounded post-card" href="{{ route('blog.show', $post->slug) }}">
            <div class="block h-post-card-image bg-cover bg-center bg-no-repeat w-full h-48 mb-5" style="background-image: url('{{ 'storage/' . $post->preview_image }}')"></div>
            <div class="flex flex-col justify-between flex-1">
                <div>
                    <h2 class="font-sans leading-normal block mb-6">
                        {{ $post->title }}
                    </h2>

                    <p class="leading-normal mb-6 font-serif leading-loose">
                        {!! mb_strimwidth(strip_tags($post->content), 0, 150, '..') !!}
                    </p>
                </div>

                <div class="flex items-center text-sm text-light">
                    <img src="/img/default/user.png" class="w-10 h-10 rounded-full" title="James Brooks">
                    <span class="ml-2">{{ $post->user->name }}</span>
                    <span class="ml-auto">{{ date('M, j Y', strtotime($post->updated_at)) }}</span>
                </div>
            </div>
        </a>
    @endforeach

    <div class="uppercase flex items-center justify-center flex-1 py-5 font-sans">
        {{ $data['posts']->links() }}
    </div>
</div>

@endsection