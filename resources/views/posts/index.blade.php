<x-layout>
    <h1>Liste des publications</h1>
    <ul>
        @foreach($posts as $post)
            <li>{{ $post->title }}</li>
        @endforeach
    </ul>
</x-layout>

