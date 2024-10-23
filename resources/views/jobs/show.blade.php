<x-layout>
    <x-slot:heading>
        <h1 class="text-4xl font-bold text-center text-blue-600 mb-8"> job detail </h1>
    </x-slot:heading>

    <div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-md space-y-6">
        <h1 class="text-3xl font-semibold text-gray-800">{{$job -> title}}</h1>
        <p class="text-xl text-green-600">This job pays ${{$job -> salary}} per year</p>
        <x-button href='/jobs/{{$job->id}}/edit' >
            edit
        </x-button>

        <div class="flex justify-center mt-6">
            <a href="/apply/{{$job['id']}}" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition duration-300">Apply Now</a>
        </div>
    </div>
</x-layout>
