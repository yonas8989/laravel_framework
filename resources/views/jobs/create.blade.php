<x-layout>
    <x-slot:heading>
        <h1 class="text-4xl font-bold text-center text-blue-600 mb-8">Job create </h1>
    </x-slot:heading>

    <div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-md space-y-6">
        <p class="text-3xl font-semibold text-gray-800">
        <form method="POST" , action="/jobs">
            @csrf
            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-base font-semibold leading-7 text-gray-900">+ Create New Job here </h2>
                    <p class="mt-1 text-sm leading-6 text-gray-600">this action leads to add job on job listings </p>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-4">
                            <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
                            <div class="mt-2">
                                <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                    <input type="text" name="title" id="title" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="title">
                                </div>
                                @error('title')
                                <p class="text-red-600 bg-red-100 border border-red-400 rounded-lg px-4 py-2 mt-2 text-sm">
                                    {{ $message }}
                                </p>
                                @enderror

                            </div>

                        </div>
                    </div>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-4">
                            <label for="salary" class="block text-sm font-medium leading-6 text-gray-900">salary</label>
                            <div class="mt-2">
                                <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                    <input type="text" name="salary" id="salary" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="salary">
                                </div>
                                @error('title')
                                <p class="text-red-600 bg-red-100 border border-red-400 rounded-lg px-4 py-2 mt-2 text-sm">
                                    {{ $message }}
                                </p>
                                @enderror

                            </div>
                        </div>
                    </div>

                    
                    <!-- <div class="max-w-3xl mx-auto mt-6">
                        @if ($errors->any())
                        <div class="bg-red-50 border border-red-400 text-red-700 px-6 py-4 rounded-lg shadow-lg">
                            <h2 class="text-lg font-semibold mb-3">Please correct the following errors:</h2>
                            <ul class="list-disc pl-6 space-y-2">
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    </div> -->



                    <div class="mt-6 flex items-center justify-end gap-x-6">
                        <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                        <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                    </div>
        </form>
        </p>

    </div>
</x-layout>
