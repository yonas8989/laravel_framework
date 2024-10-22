<x-layout>
    <x-slot:heading>
        <h1 class="text-3xl font-bold text-center text-blue-600 mb-6">Job Listings</h1>
    </x-slot:heading>

    <div class="max-w-3xl mx-auto space-y-4">
        @foreach ($jobs as $job)
        <a href="/jobs/{{$job['id']}}" class="block p-6 bg-white rounded-lg shadow-md hover:shadow-lg hover:bg-blue-50 transition-all duration-300">
            <li class="list-none">
                <div>{{$job -> employer->name}}</div>
                <span class="block text-xl font-semibold text-gray-800">{{$job['title']}}</span>
                <span class="block text-lg text-green-600">Pays: ${{$job['salery']}} per year</span>
            </li>
        </a>
        @endforeach
    </div>
</x-layout>
