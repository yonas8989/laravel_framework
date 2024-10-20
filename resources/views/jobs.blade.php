<x-layout>
    <x-slot:heading>
        job page
    </x-slot:heading>
    <ul>
        @foreach ($jobs as $job )
        <a href="/jobs/{{$job['id']}}"><li>{{$job['title']}} pays : {{$job['salery']}} per year </li></a>

        @endforeach
    </ul>
</x-layout>
