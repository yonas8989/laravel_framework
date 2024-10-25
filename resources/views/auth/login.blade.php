<x-layout>
    <x-slot:heading>
        <h1 class="text-4xl font-bold text-center text-blue-600 mb-8">login  page </h1>
    </x-slot:heading>

    <div class="max-w-2xl mx-auto bg-white p-10 rounded-lg shadow-lg space-y-8">
        <form method="POST" action="/login" class="space-y-6">
            @csrf



            <x-form-field>
                <x-form-label for="email" >your email </x-form-label>
                <div class="mt-2">
                    <x-form-input name="email" id="email" placeholder=" email" type="email" required />
                    <x-form-error name="email" />
                </div>
            </x-form-field>

            <x-form-field>
                <x-form-label for="password" >your password </x-form-label>
                <div class="mt-2">
                    <x-form-input name="password" id="password" placeholder=" password" type="password" required />
                    <x-form-error name="password" />
                </div>
            </x-form-field>
            
 

            <!-- Action Buttons -->
            <div class="flex items-center justify-end gap-x-4">
                <a href="/" class="rounded-md bg-gray-100 px-4 py-2 text-sm font-semibold text-gray-700 hover:bg-gray-200">Cancel</a>
                <x-form-button type="submit">log in </x-form-button>
            </div>
        </form>
    </div>
</x-layout>
