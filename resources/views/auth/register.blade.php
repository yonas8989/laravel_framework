<x-layout>
    <x-slot:heading>
        <h1 class="text-4xl font-bold text-center text-blue-600 mb-8">register page </h1>
    </x-slot:heading>

    <div class="max-w-2xl mx-auto bg-white p-10 rounded-lg shadow-lg space-y-8">
        <form method="POST" action="/register" class="space-y-6">
            @csrf
            <x-form-field>
                <x-form-label for="first_name">first name </x-form-label>
                <div class="mt-2">
                    <x-form-input name="first_name" id="first_name" placeholder=" first name" required />
                    <x-form-error name="first_name" />
                </div>
            </x-form-field>

            <x-form-field>
                <x-form-label for="last_name">last_name </x-form-label>
                <div class="mt-2">
                    <x-form-input name="last_name" id="last_name" placeholder=" last name" required />
                    <x-form-error name="last_name" />
                </div>
            </x-form-field>



            <x-form-field>
                <x-form-label for="email">your email </x-form-label>
                <div class="mt-2">
                    <x-form-input name="email" id="email" placeholder=" email" type="email" required />
                    <x-form-error name="email" />
                </div>
            </x-form-field>

            <x-form-field>
                <x-form-label for="password">your password </x-form-label>
                <div class="mt-2">
                    <x-form-input name="password" id="password" placeholder=" password" type="password" required />
                    <x-form-error name="password" />
                </div>
            </x-form-field>

            <x-form-field>
                <x-form-label for="password">confirm password </x-form-label>
                <div class="mt-2">
                    <x-form-input name="password" id="password" placeholder=" password" type="password" required />
                    <x-form-error name="password" />
                </div>
            </x-form-field>


            <div class="flex items-center justify-end gap-x-4">
                <a href="/" class="rounded-md bg-gray-100 px-4 py-2 text-sm font-semibold text-gray-700 hover:bg-gray-200">Cancel</a>
                <x-form-button type="submit">register</x-form-button>
            </div>
        </form>
    </div>
</x-layout>
