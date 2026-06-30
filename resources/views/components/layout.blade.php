<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'JobSphere') }}</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
</head>

<body class="bg-gray-100">

    <nav class="bg-gray-800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            <div class="flex h-16 items-center justify-between">

                <!-- Left Side -->
                <div class="flex items-center">

                    <!-- Logo -->
                    <div class="shrink-0">
                        <img
                        class="h-10 w-auto"
                        src="{{ asset('images/JobSphare-Logo.png') }}"
                        alt="JobSphare Logo">
                    </div>

                    <!-- Navigation -->
                    <div class="hidden md:flex ml-10 space-x-4">
                        <x-nav-link href="/" :active="request()->is('/')">
                            Home
                        </x-nav-link>

                        <x-nav-link href="/jobs" :active="request()->is('jobs')">
                            Jobs
                        </x-nav-link>

                        <x-nav-link href="/contact" :active="request()->is('contact')">
                            Contact
                        </x-nav-link>
                    </div>

                </div>

                <!-- Right Side -->
                <div class="hidden md:flex items-center space-x-4">

                    <x-nav-link href="/login" :active="request()->is('login')">
                        Login
                    </x-nav-link>

                    <x-nav-link href="/register" :active="request()->is('register')">
                        Register
                    </x-nav-link>

                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button
                        type="button"
                        command="--toggle"
                        commandfor="mobile-menu"
                        class="rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white">

                        <svg class="h-6 w-6" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>

                    </button>
                </div>

            </div>
        </div>

        <!-- Mobile Menu -->
        <el-disclosure id="mobile-menu" hidden class="md:hidden">

            <div class="space-y-1 px-2 pb-3 pt-2">

                <x-nav-link href="/" :active="request()->is('/')">
                    Home
                </x-nav-link>

                <x-nav-link href="/jobs" :active="request()->is('jobs')">
                    Jobs
                </x-nav-link>

                <x-nav-link href="/contact" :active="request()->is('contact')">
                    Contact
                </x-nav-link>

                <hr class="border-gray-700 my-2">

                <x-nav-link href="/login" :active="request()->is('login')">
                    Login
                </x-nav-link>

                <x-nav-link href="/register" :active="request()->is('register')">
                    Register
                </x-nav-link>

            </div>

        </el-disclosure>

    </nav>

    <!-- Header -->
    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl flex items-center justify-between px-4 py-6 sm:px-6 lg:px-8">

            <h1 class="text-3xl font-bold tracking-tight text-gray-900">
                {{ $heading }}
            </h1>

            <x-button href="/jobs/create">
                Create Job
            </x-button>

        </div>
    </header>

    <!-- Main Content -->
    <main>
        <div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
            {{ $slot }}
        </div>
    </main>

</body>
</html>