@extends('layouts.app')

@section('content')
<div class="space-y-2 pt-6 md:space-y-5">
    <x-header title="Contact">
        <p class="text-lg leading-7 text-gray-500 dark:text-gray-400 border-b-2 border-neutral-700 pb-10">
            Fill in the form to get in touch
        </p>
    </x-header>

    <div>
        <form action="" class="text-center mx-auto pt-10">
            <x-forms.text-input 
                class="w-full sm:w-3/6 h-12" 
                name="name"
                placeholder="Name..."
            />

            <x-forms.text-input 
                class="w-full sm:w-3/6 h-12" 
                name="email"
                type="email"
                placeholder="Email..."
            />

            <x-forms.text-input 
                class="w-full sm:w-3/6 h-12" 
                name="subject"
                placeholder="Subject..."
            />

            <x-forms.textarea />

            <x-forms.primary-button class="mx-auto block" type="button">
                Submit Message
            </x-forms.primary-button>
        </form>
    </div>
</div>
@endsection