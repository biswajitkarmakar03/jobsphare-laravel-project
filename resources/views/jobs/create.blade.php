<x-layout>

    <x-slot:heading>
        Create Job
    </x-slot:heading>

    <form method="POST" action="/jobs">
        @csrf

        <div class="space-y-8">
            <div class="border-b border-gray-200 pb-8">
                <h2 class="text-lg font-semibold text-gray-900">
                    Job Details
                </h2>

                <p class="mt-1 text-sm text-gray-600">
                    Fill in the details to create a new job listing.
                </p>

                <div class="mt-8 grid grid-cols-1 gap-6 sm:grid-cols-6">

                    <x-form-field>
                        <x-form-label for="title">Job Title</x-form-label>

                        <x-form-input id="title" name="title"  placeholder="e.g. Senior Laravel Developer" required />

                        <x-form-error name="title" />
                    
                    </x-form-field>

                    <x-form-field>
                            <x-form-label for="salary">Salary</x-form-label>

                            <x-form-input id="salary" name="salary" placeholder="₹50,000/month" required />

                            <x-form-error name="title" />
                    </x-form-field>

                </div>
            </div>

            <div class="flex items-center justify-end gap-x-4">
                <button
                    type="button"
                    class="text-sm font-semibold text-gray-700 hover:text-gray-900"
                >
                    Cancel
                </button>

                <x-form-button>Save Job</x-form-button>
            </div>

        </div>
    </form>

</x-layout>