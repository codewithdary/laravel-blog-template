<h1 {{
    $attributes->merge(
        [
            'class' => 'text-3xl pt-10 font-extrabold leading-9 tracking-tight text-gray-900 dark:text-gray-100 sm:text-4xl sm:leading-10 md:text-6xl md:leading-14'
        ])
    }}>
    {{ $title }}
</h1>

{{ $slot }}
