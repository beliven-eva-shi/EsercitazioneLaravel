<!doctype html>
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>Projects</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.10/dist/cdn.min.js"></script>
<style>
    html {
        scroll-behavior: smooth;
    }

    .clamp {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .clamp.one-line {
        -webkit-line-clamp: 1;
    }
</style>


<body style="font-family: Open Sans, sans-serif">
    <section class="px-6 py-8">
        <nav class="md:flex md:justify-between md:items-center">
            <div>
                <a href="/project">
                    Go to dashboard
                </a>
            </div>
            <div class="mt-8 md:mt-0">

                @auth
                    <span class="text-xs font-bold uppercase">Welcome, {{ auth()->user()->nome }}!</span>
                    <form method="POST" action="/logout">
                        @csrf
                        <button type="submit">Log Out</button>
                    </form>
                @else
                    <a href="/login" class="ml-3 text-xs font-bold uppercase">Log In</a>
                @endauth
            </div>
        </nav>
        {{ $slot }}



    </section>

    @if (session()->has('success'))
        <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show"
            class="fixed bg-blue-500 text-white py-2 px-4 rounded-xl bottom-3 right-3 text-sm">
            <p>{{ session()->get('success') }}</p>
        </div>
    @endif
</body>
