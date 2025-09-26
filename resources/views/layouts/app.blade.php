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
    <!-- GSAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js"></script>

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
            // Load data JSON
            this.data = await fetch('/docs-index.json').then(r => r.json());

            // Init Fuse.js
            this.fuse = new Fuse(this.data, {
                keys: ['title', 'content'],
                threshold: 0.3
            });

            // Shortcut Ctrl+K / Cmd+K
            window.addEventListener('keydown', (e) => {
                if ((e.ctrlKey || e.metaKey) && e.key.toLowerCase() === 'k') {
                    e.preventDefault();
                    this.open = !this.open;
                }
                if (e.key === 'Escape') {
                    this.open = false;
                }
            });
        },
        get results() {
            if (!this.query) return [];
            return this.fuse.search(this.query).map(r => r.item);
        },
        get groupedResults() {
            let groups = {};
            this.results.forEach(item => {
                // Tentukan kategori berdasarkan URL
                let category = "Docs";
                if (item.url.includes("/components/")) category = "Components";
                else if (item.url.includes("/guides/")) category = "Guides";

                // Masukkan ke group
                if (!groups[category]) groups[category] = [];
                groups[category].push(item);
            });
            return groups;
        }
    }
}
</script>

    <script>
        gsap.from("#hero-title", {
            y: 50,
            opacity: 0,
            duration: 1,
            ease: "power3.out"
        });

        gsap.from("#hero-text", {
            y: 30,
            opacity: 0,
            duration: 1,
            ease: "power3.out"
        });

        gsap.from("#img-zoom", {
            scale: 0.5,
            opacity: 0,
            duration: 1,
            ease: "back.out(1.7)"
        });
    </script>
</body>

</html>
