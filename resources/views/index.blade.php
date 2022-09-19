@extends('layouts.app')

@section('content')
<div class="space-y-2 pt-6 pb-8 md:space-y-5">
    <h1 class="text-3xl pt-10 font-extrabold leading-9 tracking-tight text-gray-900 dark:text-gray-100 sm:text-4xl sm:leading-10 md:text-6xl md:leading-14">
        Latest Articles
    </h1>
    
    <p class="text-lg leading-7 text-gray-500 dark:text-gray-400 border-b-2 border-neutral-700 pb-10">
        Learn more about Laravel and Tailwind CSS
    </p>

    <div class="divide-y divide-gray-200 dark:divide-gray-700">
        @foreach ($posts as $post)
            <div class="space-y-2 xl:items-baseline xl:space-y-0">
                <div class="border-b-2 border-neutral-700 pb-10 pt-10">
                    <span class="sm:float-right float-left text-gray-400">
                        {{ $post->created_at->format("j M, Y") }} &#x2022; {{ $post->min_to_read }} min. read
                    </span>

                    <h2 class="text-white sm:pt-0 pt-10 pb-6 text-3xl sm:text-2xl font-bold sm:pb-2 w-full block">
                        {{ $post->title }}
                    </h2>

                    <ul clas="pb-10">
                        @foreach ($post->tags as $tag)
                            <li class="inline text-xs text-green-400 transition-all hover:text-green-600 font-bold pr-2 uppercase">
                                <a href="/">
                                    {{ $tag->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>

                    <p class="text-gray-400 leading-8 py-6 text-lg">
                        {{ $post->excerpt }}
                    </p>

                    <a href="/" class="text-green-400 transition-all hover:text-green-600 pb-3">
                        Read more <i class="fa-solid fa-arrow-right text-sm"></i>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection