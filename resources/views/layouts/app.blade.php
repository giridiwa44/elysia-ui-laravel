<!Doctype html>
<html lang="en">

<head>
    <!-- SEO -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Elysia UI - Laravel Components' }}</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <!-- Icons -->
    <link href="https://pro.fontawesome.com/releases/v5.14.0/css/all.css" rel="stylesheet" />
    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">
    <div id="page-container"
        class="mx-auto flex min-h-dvh w-full min-w-[320px] flex-col bg-secondary-100 text-secondary-800 dark:bg-secondary-900 dark:text-secondary-200">
        <div id="page-container" class="flex h-full max-w-full flex-auto flex-col">
            @yield('content')
        </div>
    </div>
    <!-- Alphine Script -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Fuse JS -->
    <script src="https://cdn.jsdelivr.net/npm/fuse.js@7.1.0"></script>
    <script>
        function docSearch() {
            return {
                open: false,
                query: '',
                fuse: null,
                data: [],
                async init() {
                    this.data = await fetch('/docs-index.json').then(r => r.json());
                    this.fuse = new Fuse(this.data, {
                        keys: ['title', 'content'],
                        threshold: 0.3
                    });
                },
                get results() {
                    if (!this.query) return [];
                    return this.fuse.search(this.query);
                }
            }
        }
    </script>
</body>

</html>
