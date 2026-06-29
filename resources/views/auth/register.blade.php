<x-layout>

    <x-slot:heading>
        Register
    </x-slot:heading>

    <form method="POST" action="/jobs">
        @csrf

        <div class="space-y-8">
            <div class="border-b border-gray-200 pb-8">

                <div class="grid grid-cols-1 gap-6 sm:grid-cols-6">

                    <x-form-field>
                        <x-form-label for="full_name">Full Name</x-form-label>

                        <x-form-input id="full_name" name="full_name"  placeholder="e.g. Virat Kohli" required />

                        <x-form-error name="full_name" />
                    
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="email">Email</x-form-label>

                        <x-form-input id="email" name="email"  type="email" placeholder="e.g. viratkohli18@gmail.com" required />

                        <x-form-error name="email" />
                    
                    </x-form-field>

                    <x-form-field>
                            <x-form-label for="password">Password</x-form-label>

                            <x-form-input id="password" name="password" type="password" placeholder="********" required />

                            <x-form-error name="password" />
                    </x-form-field>

                    <x-form-field>
                            <x-form-label for="password_confirmation">Confirm Password</x-form-label>

                            <x-form-input id="password_confirmation" name="password_confirmation" type="password" placeholder="********" required />

                            <x-form-error name="password_confirmation" />
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

                <x-form-button>Register</x-form-button>
            </div>

        </div>
    </form>

</x-layout>