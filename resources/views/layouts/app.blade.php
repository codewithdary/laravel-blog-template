<html lang="en">
<head>
    <meta 
        charset="UTF-8"
    />
    <meta 
        name="viewport" 
        content="width=device-width, initial-scale=1.0"
    />
    <meta 
        http-equiv="X-UA-Compatible" 
        content="ie=edge"
    />
    <title>
        Components in Laravel
    </title>
    <link 
        rel="stylesheet" 
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    />
    <link 
        href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" 
        rel="stylesheet"
    />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-neutral-800">
    <header>
        @include('layouts.nav')
    </header>

    <div class="mx-auto w-4/5">
        @yield('content')
    </div>

    <footer>
        @include('layouts.footer')
    </footer>
</body>
</html>