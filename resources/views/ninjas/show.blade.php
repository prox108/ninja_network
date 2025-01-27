<x-layout>
    <h2>{{ $ninja->name }}</h2>

    <div class="bg-bg-gray-200 p-4 rounded">
        <p><strong>Skill level:</strong>{{ $ninja->skill }}</p>
        <p><strong>About me:</strong>{{ $ninja->skill }}</p>
        <p>{{ $ninja->bio }}</p>
    </div>
</x-layout>