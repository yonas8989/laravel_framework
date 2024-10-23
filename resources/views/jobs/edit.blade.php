<x-layout>
    <x-slot:heading>
        <h1 class="text-4xl font-bold text-center text-blue-600 mb-8">edit job:{{$job -> title}} </h1>
    </x-slot:heading>

    <div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-md space-y-6">
        <p class="text-3xl font-semibold text-gray-800">
            <form method="POST" , action="/jobs/{{$job->id}}">
                @csrf
                @method('PATCH')
                <div class="space-y-12">
                    <div class="border-b border-gray-900/10 pb-12">
                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-4">
                                <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
                                <div class="mt-2">
                                    <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                        <input type="text" name="title" id="title" value={{$job->title}} class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="title">
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
                                        <input type="text" name="salary" id="salary" value={{$job->salary}} class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="salary">
                                    </div>
                                    @error('title')
                                    <p class="text-red-600 bg-red-100 border border-red-400 rounded-lg px-4 py-2 mt-2 text-sm">
                                        {{ $message }}
                                    </p>
                                    @enderror

                                </div>


                                <div class="mt-6 flex justify-between items-center">
                                    <!-- Left Section (Cancel Button) -->
                                    <div class="flex">
                                        <x-button href="/jobs/{{$job->id}}" class="rounded-md bg-gray-200 text-gray-700 px-4 py-2 text-sm font-semibold shadow-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400">
                                            Cancel
                                        </x-button>
                                    </div>

                                    <!-- Right Section (Update and Delete Buttons) -->
                                    <div class="flex items-center gap-x-4">
                                        <button type="submit" form="delete-form" class="rounded-md bg-gradient-to-r from-purple-500 to-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-lg hover:from-purple-600 hover:to-indigo-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 transition duration-300 ease-in-out">
                                            Update
                                        </button>

                                        <button type="submit" form="delete-form" class="rounded-md bg-red-600 text-white px-4 py-2 text-sm font-semibold shadow-lg hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-600 focus:ring-offset-2">
                                            Delete
                                        </button>

                                    </div>
                                </div>

            </form>
            <form method="POST" action="/jobs/{{ $job->id }}" id="delete-form" class="hidden">
                @csrf
                @method("delete")

            </form>

        </p>

    </div>
</x-layout>
