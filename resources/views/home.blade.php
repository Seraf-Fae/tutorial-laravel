<x-layout>
    <x-slot:title>
        Hola
    </x-slot:title>

    <div class="max-w-2xl mx-auto">
        @forelse ($chirps as $chirp)
                <x-chirp :chirp="$chirp" />
        @empty
            <p class="text-gray-500">No chirps yet. Be the first to chirp!</p>
        @endforelse
    </div>
</x-layout>