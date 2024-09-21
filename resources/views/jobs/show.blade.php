<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year

    <p class="mt-6">

        <x-button href="/jobs/{{ $job->id }}/edit">
            Edit Job
        </x-button>
    </p>
</x-layout>
