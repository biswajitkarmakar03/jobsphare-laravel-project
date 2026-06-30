<x-layout>

    <x-slot:heading>
        Home
    </x-slot:heading>

    <section class="relative overflow-hidden">

        <!-- Background Blur -->
        <div class="absolute -top-40 left-1/2 -translate-x-1/2 h-[550px] w-[550px] rounded-full bg-indigo-500/20 blur-[140px]"></div>

        <div class="relative mx-auto max-w-7xl px-6 py-24">

            <div class="mx-auto max-w-4xl text-center">

                <span class="inline-flex items-center rounded-full border border-indigo-200 bg-indigo-50 px-4 py-1 text-sm font-medium text-indigo-700">
                    🚀 The smarter way to find your next job
                </span>

                <h1 class="mt-8 text-6xl font-extrabold tracking-tight text-gray-900 leading-tight">
                    Find work that
                    <span class="bg-linear-to-r from-indigo-600 to-cyan-500 bg-clip-text text-transparent">
                        inspires you.
                    </span>
                </h1>

                <p class="mx-auto mt-8 max-w-2xl text-lg leading-8 text-gray-600">
                    Discover opportunities from startups and leading companies,
                    apply effortlessly, and take the next step in your career.
                </p>

                <div class="mt-12 flex justify-center gap-5">

                    <a href="/jobs"
                        class="rounded-xl bg-gray-900 px-8 py-4 text-white font-semibold shadow-lg transition hover:-translate-y-1 hover:shadow-2xl">
                        Explore Jobs
                    </a>

                    <a href="/jobs/create"
                        class="rounded-xl border border-gray-300 bg-white px-8 py-4 font-semibold transition hover:border-indigo-500 hover:text-indigo-600">
                        Post a Job
                    </a>

                </div>

            </div>

        </div>

    </section>

    <!-- Features -->

    <section class="mx-auto mt-24 max-w-7xl px-6">

        <div class="grid gap-8 md:grid-cols-3">

            <div
                class="rounded-3xl border border-gray-200 bg-white p-8 shadow-sm transition duration-300 hover:-translate-y-2 hover:shadow-xl">

                <div class="text-5xl">💼</div>

                <h3 class="mt-6 text-xl font-bold">
                    Thousands of Jobs
                </h3>

                <p class="mt-3 text-gray-500">
                    Browse verified jobs from startups,
                    enterprises and remote-first companies.
                </p>

            </div>

            <div
                class="rounded-3xl border border-gray-200 bg-white p-8 shadow-sm transition duration-300 hover:-translate-y-2 hover:shadow-xl">

                <div class="text-5xl">⚡</div>

                <h3 class="mt-6 text-xl font-bold">
                    Quick Applications
                </h3>

                <p class="mt-3 text-gray-500">
                    Apply in seconds with a clean,
                    distraction-free experience.
                </p>

            </div>

            <div
                class="rounded-3xl border border-gray-200 bg-white p-8 shadow-sm transition duration-300 hover:-translate-y-2 hover:shadow-xl">

                <div class="text-5xl">🌍</div>

                <h3 class="mt-6 text-xl font-bold">
                    Trusted Companies
                </h3>

                <p class="mt-3 text-gray-500">
                    Work with companies hiring the best
                    talent across industries.
                </p>

            </div>

        </div>

    </section>

    <!-- Stats -->

    <section class="mx-auto mt-28 max-w-7xl px-6">

        <div
            class="rounded-4xl bg-linear-to-r from-gray-900 to-gray-800 px-12 py-16 text-white">

            <div class="grid text-center md:grid-cols-4 gap-10">

                <div>
                    <h2 class="text-5xl font-bold">10K+</h2>
                    <p class="mt-2 text-gray-300">Jobs Posted</p>
                </div>

                <div>
                    <h2 class="text-5xl font-bold">2K+</h2>
                    <p class="mt-2 text-gray-300">Companies</p>
                </div>

                <div>
                    <h2 class="text-5xl font-bold">150K+</h2>
                    <p class="mt-2 text-gray-300">Applications</p>
                </div>

                <div>
                    <h2 class="text-5xl font-bold">99%</h2>
                    <p class="mt-2 text-gray-300">Satisfaction</p>
                </div>

            </div>

        </div>

    </section>

    <!-- CTA -->

    <section class="mx-auto mt-28 max-w-5xl px-6 pb-24">

        <div
            class="rounded-[36px] border border-gray-200 bg-white p-16 text-center shadow-xl">

            <h2 class="text-5xl font-bold text-gray-900">
                Ready to build your future?
            </h2>

            <p class="mx-auto mt-6 max-w-xl text-lg text-gray-600">
                Join thousands of professionals already finding
                opportunities through JobSphare.
            </p>

            <a href="/register"
                class="mt-10 inline-flex rounded-xl bg-indigo-600 px-8 py-4 text-white font-semibold transition hover:bg-indigo-700 hover:shadow-xl">
                Get Started →
            </a>

        </div>

    </section>

</x-layout>