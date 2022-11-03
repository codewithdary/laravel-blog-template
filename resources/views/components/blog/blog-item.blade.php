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
                <x-tag.tag-item :tag="$tag->name" />
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
