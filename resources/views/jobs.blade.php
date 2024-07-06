<x-layout>
    <x-slot:heading>
        Home Page
    </x-slot:heading>
    @foreach ($jobs as $job)
     <li>
        <a href="/jobs/{{$job['id']}}" class="text-blue-500 hover:underline">
            <strong> {{ $job['title']}} </strong> Pays {{$job['salary']}} per year.
     </li>
    @endforeach
</x-layout>
