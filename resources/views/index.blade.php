@extends('layouts.app')

@section('content')
<div class="space-y-2 pt-6 pb-8 md:space-y-5">
    <h1 class="text-3xl pt-10 font-extrabold leading-9 tracking-tight text-gray-900 dark:text-gray-100 sm:text-4xl sm:leading-10 md:text-6xl md:leading-14">
        Latest Articles
    </h1>
    <p class="text-lg leading-7 text-gray-500 dark:text-gray-400 border-b-2 border-neutral-700 pb-10">
        Learn more about Laravel and Tailwind CSS
    </p>

    <!-- Post Item 1 -->
    <div class="divide-y divide-gray-200 dark:divide-gray-700">
        <div class="space-y-2 xl:items-baseline xl:space-y-0">
            <div class="border-b-2 border-neutral-700 pb-10 pt-10">
                <span class="sm:float-right float-left text-gray-400">
                    Sept 20, 2022
                </span>

                <h2 class="text-white sm:pt-0 pt-10 pb-6 text-3xl sm:text-2xl font-bold sm:pb-2 w-full block">
                    What is a typical Git workflow?
                </h2>

                <ul clas="pb-10">
                    <li class="inline text-xs text-green-400 transition-all hover:text-green-600 font-bold pr-2 uppercase">
                        <a href="/">
                            Git
                        </a>
                    </li>
                    <li class="inline text-xs text-green-400 transition-all hover:text-green-600 font-bold pr-2 uppercase">
                        <a href="/">
                            CLI
                        </a>
                    </li>
                </ul>

                <p class="text-gray-400 leading-8 py-6 text-lg">
                    Let's be honest to each other - we have all been in a situation where we had to use Git for a project, but had no idea what workflow we should use. Whether you are working on your own, within a company or you freelance your way through different project, a good Git workflow should be implemented.
                </p>

                <a href="/" class="text-green-400 transition-all hover:text-green-600 pb-3">
                    Read more <i class="fa-solid fa-arrow-right text-sm"></i>
                </a>
            </div>
        </div>

        <!-- POST ITEM 2 -->
        <div class="space-y-2 xl:items-baseline xl:space-y-0">
            <div class="border-b-2 border-neutral-700 pb-10 pt-10">
                <span class="sm:float-right float-left text-gray-400">
                    Sept 20, 2022
                </span>

                <h2 class="text-white sm:pt-0 pt-10 pb-6 text-3xl sm:text-2xl font-bold sm:pb-2 w-full block">
                    How to Write Tests in Laravel
                </h2>

                <ul clas="pb-10">
                    <li class="inline text-xs text-green-400 transition-all hover:text-green-600 font-bold pr-2 uppercase">
                        <a href="/">
                            Laravel
                        </a>
                    </li>
                    <li class="inline text-xs text-green-400 transition-all hover:text-green-600 font-bold pr-2 uppercase">
                        <a href="/">
                            PHPUnit
                        </a>
                    </li>
                </ul>

                <p class="text-gray-400 leading-8 py-6 text-lg">
                    We can all agree that testing is a good thing, whether you’re a developer, doctor or fireman. In coding, there are lots of different tools that you can use for testing.
                </p>

                <a href="/" class="text-green-400 transition-all hover:text-green-600 pb-3">
                    Read more <i class="fa-solid fa-arrow-right text-sm"></i>
                </a>
            </div>
        </div>

        <!-- POST ITEM 2 -->
        <div class="space-y-2 xl:items-baseline xl:space-y-0">
            <div class="border-b-2 border-neutral-700 pb-10 pt-10">
                <span class="sm:float-right float-left text-gray-400">
                    Sept 20, 2022
                </span>

                <h2 class="text-white sm:pt-0 pt-10 pb-6 text-3xl sm:text-2xl font-bold sm:pb-2 w-full block">
                    How to create Custom Artisan Commands in Laravel
                </h2>

                <ul clas="pb-10">
                    <li class="inline text-xs text-green-400 transition-all hover:text-green-600 font-bold pr-2 uppercase">
                        <a href="/">
                            Laravel
                        </a>
                    </li>
                    <li class="inline text-xs text-green-400 transition-all hover:text-green-600 font-bold pr-2 uppercase">
                        <a href="/">
                            Artisan
                        </a>
                    </li>
                </ul>

                <p class="text-gray-400 leading-8 py-6 text-lg">
                    Artisan is the command line interface tool that Laravel uses. it is a script at the root of your project directory named artisan which will help you to perform tons of command line interface commands.
                </p>

                <a href="/" class="text-green-400 transition-all hover:text-green-600 pb-3">
                    Read more <i class="fa-solid fa-arrow-right text-sm"></i>
                </a>
            </div>

            <div class="float-right pt-10">
                <a href="/" class="text-green-400 transition-all hover:text-green-600 pb-3">
                    All posts <i class="fa-solid fa-arrow-right text-sm"></i> 
                </a>
            </div>
        </div>
    </div>
</div>
@endsection