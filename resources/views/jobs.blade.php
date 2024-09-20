<x-layout>
    <x-slot:heading>
        Jobs
    </x-slot:heading>

    @foreach ($jobs as $job)
        <li>
            <a href="/jobs/{{ $job['id'] }}"> <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} </a>
        </li>
    @endforeach

    <div>
        {{ $jobs->links() }}
    </div>
</x-layout>
