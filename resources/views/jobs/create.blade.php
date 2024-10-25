<x-layout>
    <x-slot:heading>
        <h1 class="text-4xl font-bold text-center text-blue-600 mb-8">Create a New Job</h1>
    </x-slot:heading>

    <div class="max-w-2xl mx-auto bg-white p-10 rounded-lg shadow-lg space-y-8">
        <form method="POST" action="/jobs" class="space-y-6">
            @csrf
            <div class="border-b border-gray-300 pb-6">
                <h2 class="text-lg font-semibold leading-7 text-gray-900">+ Create New Job</h2>
                <p class="mt-1 text-sm text-gray-500">Fill out the form to add a new job to the listings.</p>
            </div>

            <x-form-field>
                <x-form-label for="title" >Job Title</x-form-label>
                <div class="mt-2">
                    <x-form-input name="title" id="title" placeholder="Enter Job Title" required />
                    <x-form-error name="title" />
                </div>
            </x-form-field>

     


            <x-form-field>
                <x-form-label for="salary" >Job salary </x-form-label>
                <div class="mt-2">
                    <x-form-input name="salary" id="salary" placeholder="Enter Job salary" required />
                    <x-form-error name="salary" />
                </div>
            </x-form-field>

           
            <div class="flex items-center justify-end gap-x-4">
                <button type="button" class="rounded-md bg-gray-100 px-4 py-2 text-sm font-semibold text-gray-700 hover:bg-gray-200">Cancel</button>
                <x-form-button type="submit">save</x-form-button>
            </div>
        </form>
    </div>
</x-layout>
