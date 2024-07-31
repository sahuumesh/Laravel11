<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>
    <div class="space-y-4">
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}"
                class="text-blue-500 hover:underline block px-4 py-6 border border-gray-200">
                <div class="font-bold">
                    {{$job->employer->name}}
                </div>
                <div>
                    <strong class="text-laracasts"> {{ $job['title'] }} </strong> Pays {{ $job['salary'] }} per year.
                </div>
            </a>
        @endforeach
        <div>
            {{ $jobs->links() }}
        </div>
    </div>

</x-layout>
